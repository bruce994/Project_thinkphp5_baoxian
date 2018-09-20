<?php
/**
 * 公众号登陆授权回调
 * @author 979137@qq.com
 * @copyright (c)2016, SINA Inc.
 * @version $Id$
 */
require(__DIR__.'/base.php');

$auth_code = @$_GET['auth_code'] ?: '';
$auth_code || _302();

//使用授权码换取公众号的授权信息
$atoken = get_authorizer_token($auth_code);
$atoken || _302();

//获取授权方的账户信息
$info = get_authorizer_info($atoken['authorizer_appid']);
$info || _302();


//var_dump($info);

if ($info && !empty($info['user_name'])) {
    echo '^_^ 公众号('.$info['user_name'].') 授权成功！';
    echo '<hr />';
    echo '您的公众号信息如下：<br /><br />';
    echo '昵称：'.$info['nick_name'].'<br />';
    echo '头像：<img src="'.$info['head_img'].'"> <br />';
    echo '二维码：<img src="'.$info['qrcode_url'].'"><br />';
    exit;
}

function _302() {
    header('Location: '.dirname($_SERVER['SCRIPT_URI']).'/exp.php');
}
