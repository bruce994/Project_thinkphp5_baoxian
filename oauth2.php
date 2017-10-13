<?php

$dbconfig = require_once 'application/database.php';
$pdo = new PDO("mysql:host=".str_replace(":".$dbconfig['hostport'],"",$dbconfig['hostname']).";port=".$dbconfig['hostport'].";charset=utf8;dbname=".$dbconfig['database'],$dbconfig['username'],$dbconfig['password']);
$state = explode( 'AAA',$_GET['state']);
$id = $state[0];
$mid = $state[1];
$contro = $state[2];
$action = $state[3];

$rs = $pdo->query("select * from {$dbconfig['prefix']}member where m_id = '".$mid."' ")->fetch();
if($rs){
    $appid = $rs['m_appid'];
    $secret = $rs['m_appsecret'];
    $token = $rs['m_wxid'];
    $wxname = $rs['m_wxname'];
}else{
    echo 'error';exit;
}


if (isset($_GET['code'])){
	$code = $_GET['code'];

	$res = json_decode(httpGet("https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$secret."&code=".$code."&grant_type=authorization_code"),true);

	$access_token = $res['access_token'];
	$openid = $res['openid'];

	$res1 = json_decode(httpGet("https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid),true);//用户信息
	if(isset($res1['errcode'])){
		echo $res1['errcode'];
		exit;
	}


    $rs = $pdo->query("select id from {$dbconfig['prefix']}userinfo where wecha_id = '".$openid."' AND mid=".$mid)->fetch();


    if(empty($res1['subscribe_time'])){
      $res1['subscribe_time'] = 0;
    }

    if(!$rs){

        $pdo->exec("INSERT INTO {$dbconfig['prefix']}userinfo(mid,token,wecha_id,wechaname,sex,wechahead,city,province,country,subscribe_time,addtime) VALUES('".$mid."','".$token."','".$openid."','".$res1['nickname']."','".$res1['sex']."','".$res1['headimgurl']."','".$res1['city']."','".$res1['province']."','".$res1['country']."','".$res1['subscribe_time']."',".time().")");
    }else{
        $pdo->exec("UPDATE  {$dbconfig['prefix']}userinfo set wechaname='".$res1['nickname']."',sex='".$res1['sex']."',wechahead='".$res1['headimgurl']."',city='".$res1['city']."',province='".$res1['province']."',country='".$res1['country']."',subscribe_time='".$res1['subscribe_time']."',addtime=".time()." WHERE wecha_id='".$openid."'");
    }


    /*
    require_once "Public/weixin/jssdk.php";
    $jssdk = new JSSDK($appid, $secret);
    $signPackage = $jssdk->GetSignPackage();
    $res2 = json_decode(file_get_contents("access_token-".$appid.".json"),true);

	if(empty($res2)){  //微信JS接口安全域名一定要加
		$res2 = json_decode(httpGet("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret),true);
	}
	$access_token2 = $res2['access_token'];

	$res3 = json_decode(httpGet("https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token2."&openid=".$openid),true);

	//var_dump($res3);exit;

	if(isset($res3['errcode'])){
		//请关注
	}

	if($res3['subscribe'] == "0"){
		//请关注
		$tmp = "&id=".$id."&wecha_id=".$openid;
	}

	if($res3['subscribe'] == "1" ){  //已经关注了
		$tmp = "&id=".$id."&wecha_id=".$openid;
	}
    */
    if(empty($state[5])){
        $tmp = "&id=".$id."&wecha_id=".$openid;
    }else{
        $tmp = "&id=".$id."&wecha_id=".$openid."&shareOpenId=".$state[5];
    }

    switch($contro){
        case "Kanjia_content":
            $vid = $state[3];
            $reWecha_id = $state[4];
            header('Location: /Home/index.php?g=Home&m=Kanjia&a=content&id='.$id.'&vid='.$vid.'&reWecha_id='.$reWecha_id.'&auth=1'.$tmp);
            break;
        case "Index_content":
            $fid = $state[3];
            $and = '';
            if(count($state) == 5){
               $and = '&tp1='.$state[4];
            }
            header('Location: /Home/index.php?g=Home&m=Index&a=content&id='.$id.'&fid='.$fid.'&auth=1'.$and.$tmp);
            break;
        default:
            header('Location: /index.php/index/'.$contro.'/'.$action.'/mid/'.$mid.'.html?auth=1'.$tmp);
            break;
}


	exit;

}else{
	echo "NO CODE";
	exit;
}

function httpGet($url) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_TIMEOUT, 500);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_URL, $url);

	$res = curl_exec($curl);
	curl_close($curl);

	return $res;
}



?>
