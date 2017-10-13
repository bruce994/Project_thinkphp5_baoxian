<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/var/www/html/www/whyaojin.cn/application/index/view/poster_edit.html";i:1507610104;}*/ ?>


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
link: '<?php echo url("poster/index",["act"=>"edit","mid"=>$vo['mid'],"id"=>input("id")]); ?>',
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



<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/><title><?php echo $vo['title']; ?></title><link type="text/css" rel="stylesheet" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/poster/frozen.css" /><style>       .ui-header-positive, .ui-footer-positive {
background-color: #f05557;
color: #fff;
}
a {
    color: #f05557;
}
</style></head><body ontouchstart=""><header class="ui-header ui-header-positive ui-border-b"><h1><?php echo $vo['title']; ?></h1></header><div class="wrapper"><img src="<?php echo $vo['picurl2']; ?>" width="50%" style="margin:50px 25% 30px 25%;"/><div class="ui-form">

<?php if($vo['field_1_isCheck'] == '1'): if($vo['field_1_connect'] == ''): ?>
    <div class="ui-form-item ui-border-b"><label for="#"><?php echo $vo['field_1_text']; ?>:</label><input type="text" name="field_1" placeholder="<?php echo $vo['field_1_text']; ?>"/></div>
    <?php endif; endif; if($vo['field_2_isCheck'] == '1'): if($vo['field_2_connect'] == ''): ?>
    <div class="ui-form-item ui-border-b"><label for="#"><?php echo $vo['field_2_text']; ?>:</label><input type="text" name="field_2" placeholder="<?php echo $vo['field_2_text']; ?>"/></div>
    <?php endif; endif; if($vo['isCheck_3'] == '1'): ?>
<div style="display:none;" id="h_num">0</div><div class="ui-form-item ui-border-b"><label for="#">个人照片:</label><input type="hidden" id="picurl" name="picurl" class="form-control" value=""><span style="margin-left:5%;float:right;"><input type="button" value="点击上传"  onclick="upyunWapPicUpload('picurl')"></span></div>
<?php endif; ?>


<div style="padding:10px; line-height:1.5em"></div><div class="ui-btn-wrap"><button class="ui-btn-lg ui-btn-danger"  name="submit" onclick="post();">点击生成海报</button></div></div></div><style>.follow{font-size:20px;line-height:30px;color:#fff;text-align:center;padding-top:30%;z-index:2000;position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.9);display:none;}
.follow span{font-size:40px;position:absolute;top:10px;left:10px;}
.follow img{width:180px;margin-top:10px;}
</style>    ﻿<style>.follow{font-size:20px;line-height:30px;color:#fff;text-align:center;padding-top:30%;z-index:2000;position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.9);display:none;}
.follow span{font-size:40px;position:absolute;top:10px;left:10px;}
.follow img{width:180px;margin-top:10px;}
</style><!--    <div style="padding:15px 15px;height:80px;"><a class="ui-btn-lg ui-btn-danger" href="http://test.dede168.com" target="_blank">更多游戏>></a></div>--></div>


  <!-- jQuery 2.1.4 -->
<script src="<?php echo config("config.ss_web_root"); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script src="<?php echo config("config.ss_web_root"); ?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo config("config.ss_web_root"); ?>/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo config("config.ss_web_root"); ?>/upyun.js?2013"></script>


<script src="<?php echo config("config.ss_web_root"); ?>/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/sweetalert/sweetalert.css">


<script type="text/javascript">
function post(){

    swal({
title: "正在提交数据请等待",
imageUrl: "<?php echo config("config.ss_web_root"); ?>/images/onload.gif",
showConfirmButton: false
});


var postData = new FormData();
$('input[type=text]').each(function () {
        var input = $(this);
        var val = input.val();
        if(input.attr("name") !== undefined){
            postData.append(input.attr("name"), val);
        }
        });

$('input[type=hidden]').each(function () {
        var input = $(this);
        var val = input.val();
        postData.append(input.attr("name"), val);
        });

$('select').each(function () {
        var input = $(this);
        var val = input.val();
        postData.append(input.attr("name"), val);
        });


$.ajax({
url: "<?php echo url("poster/index",['act'=>'insert','mid'=>$member['m_id'],'id'=>$vo['id'],'wecha_id'=>$fan['wecha_id']]); ?>",
type: 'POST',
          type: 'POST',
          data: postData,
          processData: false,
          contentType: false,
          dataType: "json",
          success: function (result) {
              if (result.code == 0) {
                  swal(result.msg,"","error");
                  return;
              }else if(result.code == 1){
          swal({
            title: result.msg,
            type: "success",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "关闭",
            closeOnConfirm: false
          },
          function(){
            location.href = result.url;
          });
                    return;
              }


          },
          error: function (err) {
              alert("哎呀,出错了!请重试!<br>"+JSON.stringify(err))
          }
      });
}

</script></body></html>
