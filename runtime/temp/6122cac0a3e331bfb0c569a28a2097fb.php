<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/var/www/html/www/whyaojin.cn/application/index/view/poster_create.html";i:1507610104;}*/ ?>


<!--微信分享-->
<?php
if($member['m_appid'] && $member['m_appsecret']){
require_once "public/weixin/jssdk.php";
$jssdk = new JSSDK($member['m_appid'], $member['m_appsecret']);
$signPackage = $jssdk->GetSignPackage();
?>
<!--微信分享--><script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script><script>
wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: '<?php echo $signPackage["timestamp"];?>',
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: ['onMenuShareAppMessage','onMenuShareTimeline', 'onMenuShareQQ','onMenuShareQZone']
});
</script><script type="text/javascript">wx.ready(function () {
var shareData = {
title: '<?php echo $vo['title']; ?>',
desc: '',
link: '<?php echo url("poster/index",["act"=>"create","mid"=>$vo['mid'],"id"=>input("id"),"fid"=>input("fid")]); ?>',
imgUrl: '<?php echo $vo['picurl2']; ?>'
};
wx.onMenuShareAppMessage(shareData);
wx.onMenuShareTimeline(shareData);
wx.onMenuShareQQ(shareData);
wx.onMenuShareWeibo(shareData);
});
wx.error(function (res) {
        //alert(res.errMsg);
        }

        );
</script>
<?php } ?>
<!--END 微信分享-->



<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/><title><?php echo $vo['title']; ?></title><link type="text/css" rel="stylesheet" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/poster/frozen.css" />



<style>       .ui-header-positive, .ui-footer-positive {
background-color: #f05557;
color: #fff;
}
a {
    color: #f05557;
}
</style></head><body ><header class="ui-header ui-header-positive ui-border-b"><h1>长按保存图片后→&nbsp;&nbsp;<a style="color:#FF0" onclick="loaddzp();">请点我领红包</a></h1></header><STYLE>.top-container{
width:100%;
height:auto;
position:relative;
margin-top:45px;
}
.top-container img{
    width:100%;
    position:absolute;
    z-index:1;   
}
</STYLE><div class="top-container"><img src="<?php echo $form['posterUrl']; ?>"  border="0"  width="100%"/></div></body></html>






