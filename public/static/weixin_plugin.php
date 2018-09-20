<?php
/**
第三方可这样调用
$content_ryy = file_get_contents("http://toupiao.kx97.com/Public/weixin_plugin.php?token=gh_39970b8df00a&keyword=".$keyword."&fromUsername=".$fromUsername."&toUsername=".$toUsername);
if(!empty($content_ryy)){
	echo $content_ryy;
	exit;
}
*/
/*error_reporting(0); */
require_once dirname(__FILE__).'/../infoconfig.php';
$dbconfig = require_once dirname(__FILE__).'/../mysqlconf.php';
$cfg['tb_pre'] = $dbconfig['DB_PREFIX'];
$cfg['db_charset'] = 'utf8';
$cfg['sqlerr'] = '1';
$cfg['errlog'] = '1';
$cfg['timediff'] = '0';
$fr_time = time();
define('FR_ROOT', str_replace("\\", '/', dirname(__FILE__)));
define('CACHE_ROOT', $cfg['cache_dir'] ? $cfg['cache_dir'] : FR_ROOT.'/cache');
define('DATA_ROOT', FR_ROOT.'/data');
include('mysql.class.php');
$db = new db_mysql();
$db->halt = $cfg['sqlerr'];
$db->connect($dbconfig['DB_HOST'], $dbconfig['DB_USER'], $dbconfig['DB_PWD'], $dbconfig['DB_NAME'],0);
$tmp = $_SERVER['PHP_SELF'];
$tmp = str_replace("weixin.php", "", $tmp);

$rs = $db->get_one("select m_id,m_username,m_isSubscribe,m_isConnent,m_isReply from {$cfg['tb_pre']}member where m_wxid = '".$_GET['token']."' order by m_addtime desc ");
if($rs['m_id']){
	define("MID", $rs['m_id']);
	define("ISREPLY", $rs['m_isReply']);
	define("ISCONNENT", $rs['m_isConnent']);
	define("ISSUBSCRIBE", $rs['m_isSubscribe']);
	//define("DOMAIN", "http://".$rs['m_username'].$infoconfig['all_domain']);
	define("DOMAIN",$_SERVER['SERVER_NAME'] );
}else{
	echo 'error';exit;
}


$time = time();
$textTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[%s]]></MsgType>
<Content><![CDATA[%s]]></Content>
<FuncFlag>0</FuncFlag>
</xml>";


$keyword = $_GET['keyword'];
$fromUsername = $_GET['fromUsername'];
$toUsername = $_GET['toUsername'];
$domain = DOMAIN;


if(!empty($keyword)){
	$tmp2 = $content = '';
	$rs = $db->get_one("select id from {$cfg['tb_pre']}userinfo where wecha_id = '".$fromUsername."' ");
	if(!$rs){
		$db->query("INSERT INTO {$cfg['tb_pre']}userinfo(token,wecha_id) VALUES('".TOKEN."','".$fromUsername."')");
	}
	$_SESSION['token'] = TOKEN;
	$_SESSION['wecha_id'] = $fromUsername;
	$msgType = "text";


	//关键字投票
	if( strstr($keyword, '号') && ISREPLY == "1" && ISCONNENT == "1"){
		$token = TOKEN;
		$wecha_id = $fromUsername;
		$arr1 = explode("号", $keyword);
		$a_num = $arr1[0];
		$a_username = $arr1[1];
		$sql_a = "select id,vid,ticket from {$cfg['tb_pre']}form WHERE status=1 AND num=".$a_num." AND username='".$a_username."' AND mid=".MID."  ORDER BY id DESC LIMIT 0,1 ";
		$rs3 = $db->get_one($sql_a);
		if($rs3){
			$form_id = $rs3['id'];
			$vid = $rs3['vid'];
			$sql_a = "select wx_url,prevent,cknums,mid,jump,hour,allperson,nativeplace,v_startdate,v_enddate,isVerify from {$cfg['tb_pre']}vote WHERE status=1 AND v_startdate<".$time." AND v_enddate>".$time." and id='".$vid."' AND mid=".MID."  ORDER BY id DESC LIMIT 0,1 ";
			$vote = $db->get_one($sql_a);
			if($vote){
				$ip = '编号姓名投票';
				$dd = 3600*intval($vote['hour']);
				$sql_a = "select count(*) as a from {$cfg['tb_pre']}vote_record WHERE vid=".$vid.' and token=\''.$token.'\' and wecha_id=\''.$wecha_id.'\' and addtime+'.$dd.' >'.time();
				$tmp = $db->get_one($sql_a);
				$tmp = $tmp['a'];

				//24点来计算
				if($vote['prevent']){
					date_default_timezone_set('PRC');
					$dd = strtotime(date("Y-m-d"));
					$dd2 = $dd+86399;
					$sql_a = "select count(*) as a from {$cfg['tb_pre']}vote_record WHERE vid=".$vid.' and token=\''.$token.'\' and wecha_id=\''.$wecha_id.'\' and addtime>'.$dd.' and addtime<'.$dd2;
					$tmp4 = $db->get_one($sql_a);
					$tmp4 = $tmp4['a'];
					if($tmp4 >= $vote['vote'] ){
						$content = '投票失败，您已超过投票次数';
					}

					if($vote['allperson']){
						$sql_a = "select count(*) as a from {$cfg['tb_pre']}vote_record WHERE form_id=".$form_id.' and token=\''.$token.'\' and wecha_id=\''.$wecha_id.'\' and addtime>'.$dd.' and addtime<'.$dd2;
						$tmp5 = $db->get_one($sql_a);
						$tmp5 = $tmp5['a'];
						if($tmp5>0){
							$content = '投票失败，在规定时间内不能重复投给同一个人';
							echo sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $content);
							exit;
						}
					}

					//END 24点来计算
				}else{
					if($vote['allperson']){
						$sql_a = "select count(*) as a from {$cfg['tb_pre']}vote_record WHERE form_id=".$form_id.' and token=\''.$token.'\' and wecha_id=\''.$wecha_id.'\' and addtime+'.$dd.' >'.time();
						$tmp5 = $db->get_one($sql_a);
						$tmp5 = $tmp5['a'];
						if($tmp5>0){
							$content = '投票失败，在规定时间内不能重复投给同一个人';
							echo sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $content);
							exit;
						}
					}

					if($tmp >= $vote['cknums']){
						$content = '投票失败，您已超过投票次数';
					}
			   }

				$db->query("UPDATE {$cfg['tb_pre']}form set ticket=ticket+1 where status=1 and id=".$form_id);

				$db->query("INSERT INTO {$cfg['tb_pre']}vote_record(form_id,vid,token,wecha_id,addtime,ip,mid) VALUES('".$form_id."','".$vid."','".$token."','".$wecha_id."','".$time."','".$ip."','".MID."')");
				$ticket = intval($rs3['ticket'])+1;
				$arr = array();
				$tmp6 = 0;
				$sql_a = "select id from {$cfg['tb_pre']}form WHERE status=1 AND vid={$vid} ORDER BY ticket DESC";
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

			}else{
				$content = '投票不存在，或者过期！';
			}
		}else{
			$content = '未找到选手';
		}
		echo sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $content);
		exit;
	}
	//END


	$sql_a = "select id,title,picurl,info,wx_info from {$cfg['tb_pre']}vote WHERE status=1 AND statdate<".$time." AND enddate>".$time." and keyword='".$keyword."' AND mid=".MID."  ORDER BY id DESC LIMIT 0,1 ";
	$num = 0;
	$query = $db->query( $sql_a );
	while ( $rs = $db->fetch_array( $query ) ){
		$num++;
		if(empty($rs['picurl'])){
			$rs['picurl'] = $domain.'/Public/images/weixin.jpg';
		}
		$url = $domain."/Home/index.php?g=Home&m=Index&a=index&id=".$rs['id']."&wecha_id=".$fromUsername."&token=".TOKEN;
		$tmp2 .="<item>
		<Title><![CDATA[".$rs['title']."]]></Title>
		<Description><![CDATA[".strip_tags($rs['wx_info'])."]]></Description>
		<PicUrl><![CDATA[".$rs['picurl']."]]></PicUrl>
		<Url><![CDATA[".$url."]]></Url>
		</item>";
	}

		if($num == 0){
			$cK = 0;
			//自定义关键词
			$rs1 = $db->get_one("select id,typeid,title,picurl,jumpUrl,description from {$cfg['tb_pre']}reply where mid = '".MID."' and keyword='".$keyword."' ");
			if($rs1){
				$cK = 1;
			}else{
				//不匹配
				$rs1 = $db->get_one("select id,typeid,title,picurl,jumpUrl,description from {$cfg['tb_pre']}reply where mid = '".MID."' and keyword='' ");
			}
			if($rs1){
				   if($rs1['typeid'] == "1"){
					  $content = $rs1['description'];
				   }elseif ($rs1['typeid'] == "2") {
					   if($cK == 1){
								$query = $db->query("select id,typeid,title,picurl,jumpUrl,description from {$dbconfig['DB_PREFIX']}reply where mid = '".MID."' and keyword='".$keyword."' ");
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
			}

		}

		if(!empty($tmp2)){
			$newsTpl="<xml>
			<ToUserName><![CDATA[".$fromUsername."]]></ToUserName>
			<FromUserName><![CDATA[".$toUsername."]]></FromUserName>
			<CreateTime>".$time."</CreateTime>
			<MsgType><![CDATA[news]]></MsgType>
			<ArticleCount>".$num."</ArticleCount>
			<Articles>
			".$tmp2."
			</Articles>
			<FuncFlag>0</FuncFlag>
			</xml>";
			echo $newsTpl;
			exit;
		}
		
}	
		

?>
