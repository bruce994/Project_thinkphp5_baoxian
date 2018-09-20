<?php
/**
 * 发起授权页的体验URL
 * @author 979137@qq.com
 * @copyright (c)2016, SINA Inc.
 * @version $Id$
 */
require(__DIR__.'/base.php');

$_G  = load_config();
$precode = get_pre_authcode();
$redirect = urlencode(dirname($_SERVER['SCRIPT_URI']).'/auth.php');
$url = 'https://mp.weixin.qq.com/cgi-bin/componentloginpage?component_appid=%s&pre_auth_code=%s&redirect_uri=%s';
$url = sprintf($url, $_G['AppID'], $precode, $redirect);
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>公众号第三方平台授权体验</title>
    <style>
        body{font:400 14px/25px 'Microsoft Yahei',Tahoma,sans-serif;background:#fff;}
        a{text-decoration:none; color:#174B73;}
        a:hover{color:#f60;}
        img{border:0}
        em,i {font-style:normal;}
        h1{border-bottom:1px solid #ddd;padding:10px 0;margin:0;}
        h2{font-size:14px;padding:10px;color:#06f;border:1px solid #e0e0e0;background:#ffd;}
        em{color:red}
        .hello{width:250px;height:100%;padding:10px; margin:5px auto 0; border:1px solid #ddd;overflow:hidden;}
        .link{float:right;}
    </style>
</head>
<body>
    <div class="hello">
        <div align="center">
            <h1><a target="_blank" href="<?php echo $url;?>"><img src="auth_icon.png" style="vertical-align: middle;"/></a></h1>
        </div>
        </div>
</body>
</html>
