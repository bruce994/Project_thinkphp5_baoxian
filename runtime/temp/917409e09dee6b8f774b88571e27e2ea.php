<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/var/www/html/www/whyaojin.cn/application/index/view/article_reprint.html";i:1507610103;}*/ ?>




<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/jquery-2.1.3.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/sales-common.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/fc_msg.js"></script>
<title>文章转载</title>
<style type="text/css">
*{
	padding:0;
	margin:0;
}
body{
	background:#eee;
	font-size: 14px;
}
.wrap-all{
    overflow: hidden;
}
.wrap-url{
  width: 100%;
  position: relative;
  font-size: 14px;
}
.wrap-url textarea{
  width: 100%;
  height: 50px;
  border: none;
  resize: none;
  outline: none;
}
.yijian{
  position: absolute;
  top: 10px;
  right: 15px;
  border: 1px solid #ff6d15;
  color: #ff6d15;
}
.yijian span{
  margin: 5px 8px;
  display: inline-block;
}
.init-tip{
  position: absolute;
  top: 15px;
  left: 15px;
  color: #a7a7a7;
}
.wrap-tip{
  padding: 10px 15px;
  color: #666;
}
.wrap-img{
  height: 380px;
  font-size: 60px;
  margin-left: 10px;
  margin-right: 10px;
  text-align: center;
  vertical-align: middle;
  margin-bottom: 50px;
  background-size: 100% 100%;
}
.wrap-footer{
  position: fixed;
  bottom: 0;
  height: 40px;
  background-color: #fff;
  width: 100%;
  border-top: 1px solid #dddddd;
  line-height: 40px;
  color: #2b2b2b;
  text-align: center;
  vertical-align: middle;
}
.yijianzhuanzai{
	display:inline-block;
	width: 70px;
	height:40px;
	line-height:40px;
	font-family:'微软雅黑';
	font-size: 15px;
	font-weight:bold;
}
/* .wrap-footer .left{
  height: 30px;
  float: right;
  line-height: 30px;
  margin: 0 auto;
  margin-top: 5px;
  padding-right: 20px;
  border-right: 1px solid #a7a7a7;
  margin-right: 20px;
  color:#666;
}
.wrap-footer .right{
  float: right;
  height: 30px;
  line-height: 30px;
  margin-top: 5px;
  margin-right: 20px;
  color:#666;
} */
.error-tip {
  position: absolute;
  top: 75px;
  left: 15px;
  color: red;
}
</style>
</head>
<body>
<div class="wrap-all">
	<div class="wrap-url">
	    <div style="
    padding: 15px;
    background-color: #fff;
    box-shadow: 0px 2px 2px #ADA7A7;
    padding-bottom: 30px;
">
<input type="hidden" value="null" id="openid">
<form action="<?php echo url("article/reprint",["act"=>"insert","mid"=>$fan['mid']]); ?>" method="post">
<textarea placeholder="点击这里 长按粘贴文章链接..." rows="" cols="" id="url" name="url"></textarea>
<button id="btnSubmit" type="submit" style="display:none;">提交</button>
</form>

</div>
		<!-- <div class="yijian"><span>一键粘贴</span></div> -->
		<!-- <div class="init-tip"><span>长按这里粘贴文章的链接。。。</span></div> -->
		<div class="error-tip" style="display:none;"><span>请输入正确链接</span></div>
		<div class="tip"><span></span></div>
	</div>
	<div class="wrap-title" style="width:100%;margin-top:10px;margin-bottom:10px;position:relative;display:none;">
		<div id="title" style="height:20px;background:#fff;padding:15px;line-height:20px; box-shadow: 0px 2px 2px #ADA7A7;" contenteditable="true"></div>
		<div class="title-tip" style="color:#a7a7a7;position:absolute;top: 15px;left: 15px;">请输入文章标题。。。</div>
	</div>
	<div class="wrap-tip">
		<span style="line-height: 20px;">1. 请勿转发谣言、暴力、色情、反动、诈骗等违规内容。</span><br>
        <!--<span id="support_tips" style="line-height: 20px;">2. 目前只支持对微信公众号和平安天下通发布的文章（如http://mp.weixin.qq.com/xxx和http://fs-txt.pingan.com.cn/xxx的文章）进行预览和编辑，其他类型的链接地址暂不支持预览和编辑，请直接输入文章标题后发布。</span>-->
        
        
        <span id="support_tips" style="line-height: 20px;">2. 目前只支持对微信公众号发布的文章（如http://mp.weixin.qq.com/xxx的文章）进行预览和编辑，其他类型的链接地址暂不支持预览和编辑，请直接输入文章标题后发布。</span>
        
        <br>
		<span style="line-height: 20px;">3. 使用此功能会默认注明出处。</span>
	</div>
    <div class="wrap-img"></div>
	<div class="wrap-footer">
		<div class="yijianzhuanzai"  onclick="viewContent();">一键转载</div>
		<!-- <div class="right" onclick="submitContent()">发布</div>
		<div class="left" onclick="viewContent()">预览</div> -->
	</div>
</div>
<!-- <form action="getContentByURL.do" method="post">
<textarea rows="" cols="" id="url" name="url" style="width:80%;height:50px;"></textarea><br>
<button id="btnPastype="button">一键黏贴</button>
<button type="submit">提交</button>
</form> -->
</body>
<script type="text/javascript">
$(function(){
	var height=$(window).height()-$(".wrap-url").height()-$(".wrap-tip").height()-$(".wrap-footer").height()-30;
	var maxWidth = $(window).width()-30;
	$(".wrap-img").css("height",height+"px");
	$(".wrap-img").css("width",height+"px");
	$(".wrap-img").css("max-width",maxWidth+"px");
	$(".wrap-img").css("margin","0 auto");
	$(".wrap-img").css("background-image","url(../images/share_photo.png)");
	$('textarea').bind("input propertychange", function(){
		if($("textarea").val()==""){
			$(".init-tip").css("display","");
			$(".yijian").css("display","");
		}else{
			$(".init-tip").css("display","none");
			$(".yijian").css("display","none");
			$(".error-tip").css("display","none");
			if($("textarea").val().indexOf("mp.weixin.qq.com/s")>0||$("textarea").val().indexOf("fs-txt.pingan.com.cn")>0){
				$(".wrap-title").css("display","none");
				$(".wrap-footer .left").css("display","");
				$(".wrap-img").css("margin-bottom","auto");
				$(".wrap-footer .right").attr("onclick","submitContent()");
				$(".wrap-footer .left").attr("onclick","viewContent()");
			}
		}
	});
	if($("textarea").val()!=""){
		$(".init-tip").css("display","none");
		$(".yijian").css("display","none");
		$(".error-tip").css("display","none");
	}
	$('.wrap-title').bind("input propertychange", function(){
		if($("#title").text().trim()==""){
			$(".title-tip").css("display","");
		}else{
			$(".title-tip").css("display","none");
		}
	});
	//长按事件处理
	$(".wrap-url").click(function() {
		$("#url").focus();
	});
})
$("#btnPaste").click(function(){
	$("#url").val(window.clipboardData.getData("text"));
});
function viewContent(){
/*     	$("form").attr("action","<?php echo url("article/reprint",["act"=>"insert","mid"=>$fan['mid']]); ?>");
	$("#btnSubmit").trigger("click"); */
     	var url = $("textarea").val();
	if(CheckUrl(url)){
		if(url.indexOf("mp.weixin.qq.com/s")>0||url.indexOf("fs-txt.pingan.com.cn")>0){
			$("form").attr("action","<?php echo url("article/reprint",["act"=>"insert","mid"=>$fan['mid']]); ?>");
			$("#btnSubmit").trigger("click");
		}else{
			//非微信的url
			$(".wrap-title").css("display","");
			$(".wrap-footer .left").css("display","none");
			$(".wrap-img").css("margin-bottom","50px");
			//$(".wrap-footer .right").attr("onclick","submit()");
			$(".wrap-footer .yijianzhuanzai").attr("onclick","submit()");
			$("#support_tips").css("color","red");
			return;
		}
	}else{
		$(".error-tip").css("display","");
		return;
	}
}
function submitContent(){
  	var url = $("textarea").val();
	if(CheckUrl(url)){
		if(url.indexOf("mp.weixin.qq.com/s")>0||url.indexOf("fs-txt.pingan.com.cn")>0){
			$("form").attr("action","<?php echo url("article/reprint",["act"=>"insert","mid"=>$fan['mid']]); ?>");
			var guidesShares = localStorage.getItem("guidesShares");
			if(guidesShares==null){
				localStorage.setItem("guidesShares","yes");
			}
			$("#btnSubmit").trigger("click");
		}else{
			//非微信的url
			$(".wrap-title").css("display","");
			$(".wrap-footer .left").css("display","none");
			$(".wrap-img").css("margin-bottom","50px");
			$(".wrap-footer .right").attr("onclick","submit()");
			$("#support_tips").css("color","red");
			return;
		}
	}else{
		$(".error-tip").css("display","");
		return;
	}
}
var putongSubmit = false;
//发布
function submit() {
	if(putongSubmit){
		Toast_msg("请稍候 正在加载ing",2000);
		return;
	}
	putongSubmit = true;
    var linkDesc = $("#title").text();
    var linkCont = $("textarea").val();
    var openid = $("#openid").val();
    var url = "/family_chat/rePrint.do";
    if(linkDesc == "") {
    	Toast_msg("标题不能为空",2000);
    	return;
    }else if(linkDesc.length > 40){
    	Toast_msg('标题过长',1500);
    	return;
    }

    var valRes = validateURL(linkCont);
    if(valRes.errCode != "0"){
    	Toast_msg(valRes.errMsg,2000);
    	return ;
    }
    //如果URL是以#rd结尾，则直接截取#rd之前的部分
    linkCont = rmFreshFlag(linkCont);

    $.ajax({
        url: url,
        data: {
            "linkDesc": linkDesc,
            "linkCont": linkCont,
            "openid": openid
        },
        type: 'post',
        dataType: 'JSON',
        success: function(data) {
            //console.log(data);
            var guidesShares = localStorage.getItem("guidesShares");
			if(guidesShares==null){
				localStorage.setItem("guidesShares","yes");
			}
            window.location.replace("/family_chat/readArticle/"+data.id+".do?visitTag=agent_jm&id="+data.id+"&queryType=ACTIVITY&articleType=2");
        },
        error: function() {
        	putongSubmit = false;
        	Toast_msg("网络异常",2000);
        }
    });
}
function rmFreshFlag(url){
    var pos = url.indexOf("#rd");
    if(pos>0){
		url = url.substring(0,pos);
    }
	return url;
}
function validateURL(url){
	var errCode = "0";
	var errMsg = "";
	//如果链接不是http://或https://开头的就报URL格式错误
	if(!IsURL(url)){
		errCode = "1";
		errMsg = "输入的链接格式不正确";
	}
	//目前不支持微博链接http://m.weibo.cn/
	if(url.indexOf("weibo.cn") > 0 ) {
		errCode = "1";
		errMsg = "目前暂不支持新浪微博文章转发";
	}
	return {"errCode":errCode,"errMsg":errMsg}
}
function IsURL(URL) {
	var str=URL;
	//判断URL地址的正则表达式为:http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?
	//下面的代码中应用了转义字符"\"输出一个字符"/"
	var Expression=/http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/;
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
	return true;
	}else{
	return false;
	}
}
function CheckUrl(str) {
/* 	var strRegex = "^((https|http|ftp|rtsp|mms)?://)"
		+ "?(([0-9a-z_!~*'().&=+$%-]+: )?[0-9a-z_!~*'().&=+$%-]+@)?" // ftp的user@
		+ "(([0-9]{1,3}\.){3}[0-9]{1,3}" // IP形式的URL- 199.194.52.184
		+ "|" // 允许IP和DOMAIN（域名）
		+ "([0-9a-z_!~*'()-]+\.)*" // 域名- www.
		+ "([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\." // 二级域名
		+ "[a-z]{2,6})" // first level domain- .com or .museum
		+ "(:[0-9]{1,4})?" // 端口- :80
		+ "((/?)|" // a slash isn't required if there is no file name
		+ "(/[0-9a-z_!~*'().;?:@&=+$,%#-]+)+/?)$";
		var re = new RegExp(strRegex);
		return re.test(str); */
		if(str.indexOf("http://")>-1||str.indexOf("https://")>-1){
			return true;
		}else{
			return false;
		}
}
</script>
</html>
