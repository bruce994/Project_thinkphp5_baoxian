<?php
/**
 * 公众号消息与事件接收URL
 * @author 979137@qq.com
 * @copyright (c)2016, SINA Inc.
 * @version $Id$
 */
require(__DIR__.'/base.php');
require(__DIR__.'/src/wxBizMsgCrypt.php');

$_G = load_config();

$encodingAesKey = $_G['aeskey'];
$token = $_G['token'];
$appId = $_G['AppID'];
$timeStamp  = empty($_GET['timestamp'])     ? ''    : trim($_GET['timestamp']) ;
$nonce      = empty($_GET['nonce'])     ? ''    : trim($_GET['nonce']) ;
$msg_sign   = empty($_GET['msg_signature']) ? ''    : trim($_GET['msg_signature']) ;
$stime = time();
$encryptMsg = file_get_contents('php://input');
$pc = new WXBizMsgCrypt($token, $encodingAesKey, $appId);

$xml_tree = new DOMDocument();
$xml_tree->loadXML($encryptMsg);
$array_e = $xml_tree->getElementsByTagName('Encrypt');
$encrypt = $array_e->item(0)->nodeValue;


$format = '<xml><ToUserName><![CDATA[toUser]]></ToUserName><Encrypt><![CDATA[%s]]></Encrypt></xml>';
$from_xml = sprintf($format, $encrypt);

// 第三方收到公众号平台发送的消息
$msg = '';
$errCode = $pc->decryptMsg($msg_sign, $timeStamp, $nonce, $from_xml, $msg);

//echo 'success';
//exit;

if ($errCode == 0) {
	//print('解密后: ' . $msg . '');
	$xml = new DOMDocument();
	$xml->loadXML($msg);

	$array_e = $xml->getElementsByTagName('Content');
	$content = $array_e->item(0)->nodeValue;

	$array_e2 = $xml->getElementsByTagName('ToUserName');
	$ToUserName = $array_e2->item(0)->nodeValue;

	$array_e3 = $xml->getElementsByTagName('FromUserName');
	$FromUserName = $array_e3->item(0)->nodeValue;

	$array_e5 = $xml->getElementsByTagName('MsgType');
	$MsgType = $array_e5->item(0)->nodeValue;


	$textTpl = '<xml><ToUserName><![CDATA['.$FromUserName.']]></ToUserName><FromUserName><![CDATA['.$ToUserName.']]></FromUserName><CreateTime>'.$stime.'</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[CONTENT]]></Content></xml>';


	//全网发布时，检查
    if($ToUserName == 'gh_3c884a361561'){
		if ($MsgType=='text') {
           $needle ='QUERY_AUTH_CODE:';
           $tmparray = explode($needle,$content);
           if(count($tmparray)>1){
               //3、模拟粉丝发送文本消息给专用测试公众号，第三方平台方需在5秒内返回空串
               //表明暂时不回复，然后再立即使用客服消息接口发送消息回复粉丝
               $contentx = str_replace ($needle,'',$content);
               $info = get_authorizer_token($contentx);
               $test_token = $info['authorizer_access_token'];
               $content_re = $contentx.'_from_api';
               echo '';
               //$data = '{"touser":'".$FromUserName."','msgtype':'text','text':{'content':'".$content_re."}}';
			   $data = '{"touser":"'.$FromUserName.'","msgtype":"text","text":{"content":"'.$content_re.'"}}';
               $url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$test_token;
               //error_log($url);
               //error_log($data);
               //error_log($content);
               //error_log(var_dump($info));
               api_call($url, $data);
               exit();

           } else{
               //2、模拟粉丝发送文本消息给专用测试公众号
               $contentx = 'TESTCOMPONENT_MSG_TYPE_TEXT_callback';
           }
       }

       //1、模拟粉丝触发专用测试公众号的事件
       if ($MsgType=='event') {
           $array_e4 = $xml->getElementsByTagName('Event');
           $event = $array_e4->item(0)->nodeValue;
           $contentx = $event.'from_callback';
       }

	   	$textTpl = str_replace("CONTENT", $contentx, $textTpl);
		//加密消息
		$encryptMsg = '';
		$errCode = $pc->encryptMsg($textTpl, $timeStamp, $nonce, $encryptMsg);
		echo $encryptMsg;
	    exit();
	}
	//END


	require_once dirname(__FILE__).'/../../infoconfig.php';
    global $dbconfig;
	$db = db_connect();
	$rs = $db->get_one("select m_id,m_username,m_isSubscribe,m_isConnent,m_isReply,m_appid,m_appsecret from {$dbconfig['DB_PREFIX']}member where m_wxid = '".$ToUserName."' order by m_addtime desc");
	if($rs['m_id']){
		define("TOKEN", $ToUserName);
		define("MID", $rs['m_id']);
		define("ISREPLY", $rs['m_isReply']);
		define("ISCONNENT", $rs['m_isConnent']);
		define("ISSUBSCRIBE", $rs['m_isSubscribe']);
		define("APPID", $rs['m_appid']);
		define("APPSECRET", $rs['m_appsecret']);
		define("DOMAIN", "http://".$rs['m_username'].$infoconfig['all_domain']);
	}else{
		echo 'success';exit;
	}
	//$domain = $_SERVER['SERVER_NAME'];
	$domain = DOMAIN;

    $where = "";



       if ($MsgType=='event') {
           $array_e4 = $xml->getElementsByTagName('Event');
           $event = $array_e4->item(0)->nodeValue;

           if($event == "LOCATION"){  //地址位置
              echo 'success'; exit;
             }

            //取消关注
             if($event=='unsubscribe' && ISSUBSCRIBE == '1'){
                $rs = $db->get_one("select id from {$dbconfig['DB_PREFIX']}userinfo where wecha_id = '".$FromUserName."' ");
                if($rs){
                    $db->query("DELETE FROM {$dbconfig['DB_PREFIX']}userinfo WHERE token='".TOKEN."' and wecha_id = '".$FromUserName."'" );
                    //减少票
                    $query = $db->query("SELECT form_id FROM {$dbconfig['DB_PREFIX']}vote_record WHERE token='".TOKEN."' and wecha_id = '".$FromUserName."'" );
                    while ( $rs = $db->fetch_array( $query  )  ){
                       $db->query("UPDATE {$dbconfig['DB_PREFIX']}form SET ticket=ticket-1 WHERE id=".$rs['form_id'] );
                    }
                    $db->query("DELETE FROM {$dbconfig['DB_PREFIX']}vote_record WHERE token='".TOKEN."' and wecha_id = '".$FromUserName."'" );
                }
                echo "success";exit;
             }

             //关注
             if($event=='subscribe'){
                 $where = " AND isFollow=1 ";
             }

            //点击菜单
            $array_e5 = $xml->getElementsByTagName('EventKey');
            if($array_e5){
                $eventkey = $array_e5->item(0)->nodeValue;
                $where = " AND keyword='".$eventkey."' ";
                $content = $eventkey;
             }


       }

    if($MsgType=='text'){
        $where = " AND keyword='".$content."' ";
     }

        $rs = $db->get_one("select id from {$dbconfig['DB_PREFIX']}userinfo where wecha_id = '".$FromUserName."' ");
        if(!$rs){
            $db->query("INSERT INTO {$dbconfig['DB_PREFIX']}userinfo(token,wecha_id) VALUES('".TOKEN."','".$FromUserName."')");
        }

	//关键字投票
	if( strstr($content, '号') && ISREPLY == "1" && ISCONNENT == "1"){
		$token = TOKEN;
		$wecha_id = $FromUserName;
		$arr1 = explode("号", $content);
		$a_num = $arr1[0];
		$a_username = $arr1[1];
		$sql_a = "select id,vid,ticket from {$dbconfig['DB_PREFIX']}form WHERE status=1 AND num=".$a_num." AND username='".$a_username."' AND mid=".MID."  ORDER BY id DESC LIMIT 0,1 ";
		$rs3 = $db->get_one($sql_a);
		if($rs3){
			$form_id = $rs3['id'];
			$vid = $rs3['vid'];
			$sql_a = "select wx_url,prevent,cknums,mid,jump,hour,allperson,nativeplace,v_startdate,v_enddate,isVerify from {$dbconfig['DB_PREFIX']}vote WHERE status=1 AND v_startdate<".$stime." AND v_enddate>".$stime." and id='".$vid."' AND mid=".MID."  ORDER BY id DESC LIMIT 0,1 ";
			$vote = $db->get_one($sql_a);
			if($vote){
				$ip = '编号姓名投票';
				$dd = 3600*intval($vote['hour']);
				$sql_a = "select count(*) as a from {$dbconfig['DB_PREFIX']}vote_record WHERE vid=".$vid.' and token=\''.$token.'\' and wecha_id=\''.$wecha_id.'\' and addtime+'.$dd.' >'.time();
				$tmp = $db->get_one($sql_a);
				$tmp = $tmp['a'];

				if($vote['prevent']){
					//24点来计算
					date_default_timezone_set('PRC');
					$dd = strtotime(date("Y-m-d"));
					$dd2 = $dd+86399;
					$sql_a = "select count(*) as a from {$dbconfig['DB_PREFIX']}vote_record WHERE vid=".$vid.' and token=\''.$token.'\' and wecha_id=\''.$wecha_id.'\' and addtime>'.$dd.' and addtime<'.$dd2;
					$tmp4 = $db->get_one($sql_a);
					$tmp4 = $tmp4['a'];
					if($tmp4 >= $vote['cknums'] ){
						$content = '投票失败，您已超过投票次数!';
						$textTpl = str_replace("CONTENT", $content, $textTpl);
						//加密消息
						$encryptMsg = '';
						$errCode = $pc->encryptMsg($textTpl, $timeStamp, $nonce, $encryptMsg);
						echo $encryptMsg;
					    exit();
					}
				}

				if($vote['allperson']){
					$sql_a = "select count(*) as a from {$dbconfig['DB_PREFIX']}vote_record WHERE form_id=".$form_id.' and token=\''.$token.'\' and wecha_id=\''.$wecha_id.'\' and addtime+'.$dd.' >'.time();
					$tmp5 = $db->get_one($sql_a);
					$tmp5 = $tmp5['a'];
					if($tmp5>0){
						$content = '投票失败，在规定时间内不能重复投给同一个人';
						$textTpl = str_replace("CONTENT", $content, $textTpl);
						//加密消息
						$encryptMsg = '';
						$errCode = $pc->encryptMsg($textTpl, $timeStamp, $nonce, $encryptMsg);
						echo $encryptMsg;
					    exit();
					}
				}

				if($tmp >= $vote['cknums']){
					$content = '投票失败，您已超过投票次数';
				}else{
						$db->query("UPDATE {$dbconfig['DB_PREFIX']}form set ticket=ticket+1 where status=1 and id=".$form_id);

						$db->query("INSERT INTO {$dbconfig['DB_PREFIX']}vote_record(form_id,vid,token,wecha_id,addtime,ip,mid) VALUES('".$form_id."','".$vid."','".$token."','".$wecha_id."','".$stime."','".$ip."','".MID."')");
						$ticket = intval($rs3['ticket'])+1;
					    $arr = array();
						$tmp6 = 0;
						$sql_a = "select id from {$dbconfig['DB_PREFIX']}form WHERE status=1 AND vid={$vid} ORDER BY ticket DESC";
						$i=0;
						$query = $db->query( $sql_a );
						while ( $v = $db->fetch_array( $query ) ){
							$arr[] = $v;
							$i++;
							if($v['id'] == $form_id){
								$tmp6 = $i;
							}
							if($tmp6 != 0 ){
								break;
							}
						}

						$content = '投票成功！'.$username.'当前为:'.$ticket.'票,排名第'.$tmp6;
				}

			}else{
				$content = '投票不存在，或者过期！';
			}
		}else{
			$content = '未找到选手';
		}

		$textTpl = str_replace("CONTENT", $content, $textTpl);
		//加密消息
		$encryptMsg = '';
		$errCode = $pc->encryptMsg($textTpl, $timeStamp, $nonce, $encryptMsg);
		echo $encryptMsg;
	    exit();
	}
	//END






    $tmp2 = $desc = '';

	$sql_a = "select id,title,picurl,info,wx_info from {$dbconfig['DB_PREFIX']}vote WHERE status=1 AND statdate<".$stime." AND enddate>".$stime.$where." AND mid=".MID."  ORDER BY id DESC LIMIT 0,10 ";
	$num = 0;
	$query = $db->query( $sql_a );
	while ( $rs = $db->fetch_array( $query ) ){
		$num++;
		if(empty($rs['picurl'])){
			$rs['picurl'] = $domain.'/Public/images/weixin.jpg';
		}
		$url = $domain."/Home/index.php?g=Home&m=Index&a=index&id=".$rs['id']."&wecha_id=".$FromUserName."&token=".TOKEN;
		$tmp2 .="<item>
		<Title><![CDATA[".$rs['title']."]]></Title>
		<Description><![CDATA[".strip_tags($rs['wx_info'])."]]></Description>
		<PicUrl><![CDATA[".$rs['picurl']."]]></PicUrl>
		<Url><![CDATA[".$url."]]></Url>
		</item>";
	}



	if($num == 0){
		   //匹配keyword表
		    $sql = "select * from {$dbconfig['DB_PREFIX']}keyword WHERE  mid=".MID." and keyword='".$content."'  ORDER BY id DESC LIMIT 0,10";
			$num = 0;
			$query = $db->query( $sql);
			while ( $rs1 = $db->fetch_array( $query ) ){
				$sql_a = "select id,title,picurl,info,wx_info from {$dbconfig['DB_PREFIX']}{$rs1['table']} WHERE status=1 AND startdate<".$stime." AND enddate>".$stime.$where." AND mid=".MID."  ORDER BY id DESC LIMIT 0,10 ";
				$query = $db->query( $sql_a );
				while ( $rs = $db->fetch_array( $query ) ){
					$num++;
					if(empty($rs['picurl'])){
						$rs['picurl'] = $domain.'/Public/images/weixin.jpg';
					}
					$url = $domain."/Home/index.php?g=Home&m=".ucwords($rs1['table'])."&a=index&id=".$rs['id']."&wecha_id=".$FromUserName."&token=".TOKEN;
					$tmp2 .="<item>
					<Title><![CDATA[".$rs['title']."]]></Title>
					<Description><![CDATA[".strip_tags($rs['wx_info'])."]]></Description>
					<PicUrl><![CDATA[".$rs['picurl']."]]></PicUrl>
					<Url><![CDATA[".$url."]]></Url>
					</item>";
				}

			}
		    //END	匹配keyword表
	}







	if($num == 0){

        $cK = 0;
	    //自定义关键词
		$rs1 = $db->get_one("select id,typeid,title,picurl,jumpUrl,description from {$dbconfig['DB_PREFIX']}reply where mid = '".MID."' and keyword='".$content."' ");
		if($rs1){
            $cK = 1;
		}else{
			//不匹配
			$rs1 = $db->get_one("select id,typeid,title,picurl,jumpUrl,description from {$dbconfig['DB_PREFIX']}reply where mid = '".MID."' and keyword='' ");
		}

		if($rs1){
			   if($rs1['typeid'] == "1"){
			   	  $desc = $rs1['description'];
			   }elseif ($rs1['typeid'] == "2") {
                    if($cK == 1){
                        $query = $db->query("select id,typeid,title,picurl,jumpUrl,description from {$dbconfig['DB_PREFIX']}reply where mid = '".MID."' and keyword='".$content."' ");
                        while ( $rs1 = $db->fetch_array( $query ) ){
                                        $num++;
                                        $tmp2 .="<item>
                                        <Title><![CDATA[".$rs1['title']."]]></Title>
                                        <Description><![CDATA[".strip_tags($rs1['description'])."]]></Description>
                                        <PicUrl><![CDATA[".$rs1['picurl']."]]></PicUrl>
                                        <Url><![CDATA[".$rs1['jumpUrl']."]]></Url>
                                        </item>";
                        }
                    }

                    if($cK == 0){
                        $num++;
                        $tmp2 .="<item>
                        <Title><![CDATA[".$rs1['title']."]]></Title>
                        <Description><![CDATA[".strip_tags($rs1['description'])."]]></Description>
                        <PicUrl><![CDATA[".$rs1['picurl']."]]></PicUrl>
                        <Url><![CDATA[".$rs1['jumpUrl']."]]></Url>
                        </item>";
                    }

			    }

		}else{
			//$content = "谢谢关注！";
			echo 'success';exit;
		}

	}


	if(!empty($tmp2)){
		$newsTpl="<xml>
		<ToUserName><![CDATA[".$FromUserName."]]></ToUserName>
		<FromUserName><![CDATA[".$ToUserName."]]></FromUserName>
		<CreateTime>".$stime."</CreateTime>
		<MsgType><![CDATA[news]]></MsgType>
		<ArticleCount>".$num."</ArticleCount>
		<Articles>
		".$tmp2."
		</Articles>
		<FuncFlag>0</FuncFlag>
		</xml>";

		$encryptMsg = '';
		$errCode = $pc->encryptMsg($newsTpl, $timeStamp, $nonce, $encryptMsg);
		echo $encryptMsg;
	    exit;
	}


    //懒人模板  回复vote 注册会员
    if($ToUserName == 'gh_63745fdc51d5'){
        $content = strtolower(trim($content));
        if($content == 'lanrenmb' || $content  == 'vote' || $content  == 'show' ||  $content  == 'bao'){

            require_once "../weixin/jssdk.php";
            $jssdk = new JSSDK(APPID,APPSECRET);
            $jssdk->pathJson = '../../Home/';

            $signPackage = $jssdk->GetSignPackage();
            $res = json_decode(file_get_contents($jssdk->pathJson."access_token-".APPID.".json"),true);
                if(!isset($res['errcode'])){
                    $access_token = $res['access_token'];
                    $res1 = json_decode(httpGet("https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$FromUserName),true);
                    $desc = $res1['errcode'];  //显示错误代码
                    if($res1['errcode'] =="40001" || $res1['errcode'] =="42001"){
                        //access_token is invalid or not latest hint
                        //delete  access file
                        unlink($jssdk->pathJson.'access_token-'.APPID.".json");
                        unlink($jssdk->pathJson.'jsapi_ticket-'.APPID.".json");
                        $signPackage = $jssdk->GetSignPackage();
                        $res = json_decode(file_get_contents($jssdk->pathJson."access_token-".APPID.".json"),true);
                        $access_token = $res['access_token'];
                        $res1 = json_decode(httpGet("https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$FromUserName),true);
                    }

                    $desc = $res1['errcode'];  //显示错误代码

                    if(!isset($res1['errcode'])){
                        $subscribe = $res1['subscribe'];
                        if($content == 'lanrenmb'){
                            $desc = file_get_contents('http://www.lanrenmb.com/User/index.php?m=Public&a=wxReg&wecha_id='.$FromUserName.'&nickname='.$res1['nickname'].'&sex='.$res1['sex']);
                        }elseif($content == 'vote'){
                            $desc = file_get_contents('http://vote.lanrenmb.com/Member/index.php?m=Public&a=wxReg&wecha_id='.$FromUserName.'&nickname='.$res1['nickname'].'&sex='.$res1['sex']);
                        }elseif($content == 'bao'){
                            $desc = file_get_contents('http://bao.lanrenmb.com/Member/index.php?m=Public&a=wxReg&wecha_id='.$FromUserName.'&nickname='.$res1['nickname'].'&sex='.$res1['sex']);
                        }elseif($content == 'show'){
                            $desc = file_get_contents('http://show.lanrenmb.com/index.php?c=User&a=apiRegister&wecha_id='.$FromUserName);
                        }

                    }
            }
        }
    }
    //END



    if($tmp2 == '' && $desc == ''){
		 echo 'success';exit;
	}


    $contentx = $desc;


	$textTpl = str_replace("CONTENT", $contentx, $textTpl);
	//加密消息
	$encryptMsg = '';
	$errCode = $pc->encryptMsg($textTpl, $timeStamp, $nonce, $encryptMsg);
	echo $encryptMsg;
    exit();


} else {


	print($errCode . '');
	exit();
}











