<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/var/www/html/www/whyaojin.cn/application/index/view/article_content.html";i:1507610103;}*/ ?>









<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/jquery.lazyload.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/sales-common.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/history-record-common.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/infoClick.js"></script>
<script src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/fc_msg.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/ace-template.js"></script>
<link rel="stylesheet" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/my-theme.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/liststyle.css">
<link rel="stylesheet" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/articlecss.css"/>
<title></title>
<style type="text/css">
*{
	margin:0; 
	padding:0;
}
body{
  word-break:break-all;
}
iframe{
	overflow-x:hidden;
	overflow-y:hidden;
}
img {
	max-width:100%;
}
a {
	text-decoration: none;
	font-size: 13px;
	font-weight: bold;
	color: #fff;
}
p {
	margin:0;
}
h1,h2,h3,h4,h5,h6,p,section {
	font-weight: normal !important;
}
.table_control {
	position:relative;
	width: 100%;
	padding: 8px 0px;
	height: 54px;
	background: #ffffff;
	display: none;
}

.man{margin-left: 10px;margin-right: 10px;position:relative;display:inline-block; min-height: 110px; background-size: cover; border: 1px solid #ee8a1f; border-radius: 4px;text-shadow:none;}
.man img{  width: 70px;
  overflow: hidden;
  vertical-align: middle;}
.man ul{list-style:none; margin:10px 0 0 0 ; font-size: 12px; line-height: 1.4; padding: 0}
.man ul li.a0{font-size: 16px; margin-bottom:2px; padding-left: 0}
.man ul li{margin-bottom:2px; padding-left: 20px;}
.man ul .a1{background: url(images/a1.png) left  no-repeat;  background-size: 12px;}
.man ul .a2{background: url(images/a2.png) left  no-repeat;  background-size: 12px;}
.man ul .a3{background: url(images/a3.png) left  no-repeat;  background-size: 12px;}
.a_btn{padding: 2px 5px; background:#ef8a20; display: inline-block; font-size: 12px; color: #fff; vertical-align: top; border-radius: 4px;}
.nav-ul{font-size: 0; margin: 0; padding: 0; white-space: nowrap; list-style-type: none; text-align: left;text-shadow:none;}
.nav-ul li{display: inline-block;width:33.3333%; border-right: 1px solid #ddd; background: #fff; text-align: center; height: 45px; font-size:18px; line-height: 20px}
.bg1 {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: black;
	z-index: 1001;
	-moz-opacity: 0.6;
	opacity: .60;
	filter: alpha(opacity = 60);
}
#imgPre {
	position: absolute;
	z-index: 1002;
	top: 0%;
	width: 96%;
	margin: 0% 2%;
}

#uploading {
	position: fixed;
	z-index: 1002;
	top:0;
	left: 0;
	right: 0;
}
#uploading1 {
	position: fixed;
	z-index: 1002;
	top:0;
	left: 0;
	right: 0;
}
#screenShotAlert {
	display: none;
	text-align: center;
}
#screenShotSuccessAlert {
	width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    position: fixed;
    z-index: 1999;
    text-align: center;
	display: none;
}
#bgAlert {
	display: none;
	text-align: center;
}
.ui-page-theme-a p{
text-shadow:none;
}
.advertising-info{
  margin-right: 10px;
  margin-left: 10px;
  position: relative;
  margin-top: 5px;
}
.qr-image{
  width: 5.75em;
  display: inline-block;
  position: absolute;
  margin-top: -9em;
  margin-left: 16.35em;
}
.additional-info{
  background-color: #fff;
  padding-bottom: 10px;
}
.additional-info .title{
  padding: 10px;
  border-bottom: 1px solid #eee;
}
.additional-info .my-content{
/*   margin-left: 10px;
  margin-right: 10px; */
  text-align: left;
}
.my-content ul{
  list-style: none;
  padding: 0;
  margin: 0;
}
.my-content li{
  display: inline-block;
  width: 100%;
  margin-top: 5px;
  padding-bottom: 5px;
  border-bottom: 1px solid #e8e8e8;
}
.my-content li:nth-last-child(1) {
  border-bottom: none;
}
.my-content a{
  color:#333333;
  text-decoration: none;
    font-weight: initial;
}
.my-content a:link {
	color:#757575;
}

.my-content a:visited {
    color:#757575;
}

.my-content a:hover {
    color:#757575;
    }
.my-content li a span{
  height: 50px;
  display: flex;
  margin-right: 90px;
  flex-direction: column;
  justify-content: center;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-box-pack: center;
  font-size: 14px;
  margin-left: 10px;
}
.i-need-sales{
  margin-top: 4%;
  padding-bottom: 13%;
  text-align: center;
  background-color: #eee;
  width: 100%;
  color: #666;
  line-height: 2;
}
.i-need-sales a{
  text-decoration: underline;
  font-size: 15px;
}
.i-need-sales a:link {
	color:#757575;
}

.i-need-sales a:visited {
    color:#757575;
}

.i-need-sales a:hover {
    color:#757575;
    }
 .ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper {
  background-color:#fff;
  }
 #footer{
 	position:fixed;
 	bottom:0;
 	width:100%;
 	height:49px;
 	background-color:rgba(255,78,0,0.7);
 	padding-bottom:0;
 	z-index:8;
 	text-align:center;
 	}
#footer a{
	font:14px/37px 'Lucida Grande',\5FAE\8F6F\96C5\9ED1,Verdana,Tahoma,Arial,\5b8b\4f53,Helvetica,sans-serif;
	color:#666;
	width:30%;
	display:inline-block
}
#footer>a>img{
	vertical-align:baseline;
	margin-right:.5em
}
#footer a:last-child{
	border-right:0
}
 .microshop_bottom{
	display:inline-block;
	background-image: url('/family_chat/shop/images/microshop_bottom.png');
	background-size:70%;
	background-repeat:no-repeat;
}
.moreZixun{
  display:none;
  width: 100%;
  height: 100%;
  position: fixed;
  background-color: rgba(0,0,0,0.5);
  z-index: 9999;
}
.moreZixunUL{
  list-style: none;
  text-align: left;
  width: 90%;
  margin: 10px auto 20px auto;
  padding: 0;
}
.moreZixunUL li{
  border-bottom: 1px solid #eaeaea;
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
.wrap-more{
  width: 70%;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 10px;
  margin-top: 15%;
  position:relative;
}
.title-zixun{

}
.more-zixun{
  display: inline-block;
  padding: 5px 20px;
  background-color: #ff4e00;
  color: #fff;
  border-radius: 5px;
  margin-bottom: 10px;
  text-shadow: none;
}
.biaoji{
  background-image: url('/family_chat/shop/images/moreinfo-icon.png');
  background-size: 100%;
  background-repeat: no-repeat;
  width: 30px;
  height: 30px;
  display: inline-block;
  background-position: 0 -25px;
  position: relative;
  top: 10px;
}
.more-zixun-del{
  position: absolute;
  right: 5%;
  background-position: 0 -50px;
  width: 20px;
  height: 20px;
  top: 15px;
  background-image: url('/family_chat/shop/images/moreinfo-icon.png');
  background-size: 100%;
  background-repeat: no-repeat;
  display: inline-block;
}
.wzIcon{
	display: inline-block;
	background-image:url('<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/card.png');
	background-repeat:no-repeat;
}
.deng{
	width:50px;
	height:50px;
	top: 115px;
	right: 10px;
	position: fixed;
	z-index:99;
    background-position: -36px 9px;
    background-size: 270%;
}
.line-1 {
  display: inline-block;
  width: 100%;
  position: relative;
  bottom: -5px;
}
.line-2{
  display: inline-block;
  background-color: rgba(255,255,255,0.9);
  width:100%;
  height: 60px;
}
.line-1-left {
	width: 70%;
	float: left;
	background-color: rgba(255, 190, 51, 0.9);
	color: #fff;
	height: 40px;
	line-height: 40px;
	position: relative;
}

.productName {
	font-weight: bold;
	display: inline-block;
	margin-left: 15px;
	text-shadow: none;
	white-space:nowrap;
	text-overflow:ellipsis;
	overflow:hidden;
	width:130px;
	display:inline-block;
}

.money {
	color: #ff4e00;
	position: absolute;
	right: 50px;
	text-shadow: none;
}

.line-1-right {
	width: 30%;
	float: left;
	background-color: rgba(255, 78, 0, 0.9);
	color: #fff;
	height: 40px;
	line-height: 40px;
	position: relative;
	text-align: center;
	text-shadow: none;
}
.person {
	width: 25%;
	float: left;
	height: 70px;
	text-shadow: none;
	font-size:12px;
}
.person-2 {
  position: relative;
  left: -15px;
}
.person-name {
  color: #333333;
  margin-top: 10px;
  text-shadow: none;
  /* height: 70px; */
}
.person-com {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  color: #b9b9b9;
  text-shadow: none;
  margin-top:5px;
}
.person-icon {
	width: 40px;
	height: 32px;
	display: block;
	margin: 0 auto;
	background-image: url(/family_chat/images/newsprite.png);
	background-size: 400%;
}
.person-text {
	display: inherit;
	text-align: center;
	color: #ff7133;
	text-shadow: none;
	margin-top:6px;
}

#screenShotGuide {
	width: 88%;
	margin-top: 40px;
}
@media screen and (max-width:320px) {
#screenShotGuide {
	width: 85%;
	margin-top: 40px;
}
}
#screenShotScuccessAlert {
	position: absolute;
	left: 31%;
	top: 40%;
	display: none;
}
#screenShotScuccessAlert img {
    width: 125px;
    height: 95px;
}
#screenShotFailAlert {
	position: absolute;
	left: 31%;
	top: 40%;
	display: none;
}
#screenShotFailAlert img {
    width: 125px;
    height: 95px;
}
.show {
	display: block!important;
}
</style>
<style type="text/css">
.nav.footer {
  position: fixed;
  bottom: 0px;
  width: 100%;
  border-top: 1px solid #ccc;
}
.nav.footer ul {
  font-size: 0;
  margin: 0;
  padding: 0;
  white-space: nowrap;
  list-style-type: none;
  text-align: left;
  text-shadow: none;
}
.nav.footer ul li {
  display: inline-block;
  width: 33.333333%;
  border-right: 1px solid #ddd;
  background: #fff;
  font-size: 18px;
}
.nav.footer ul li:before {
  content: "";
  font-size: 0;
  line-height: 45px;
}
.nav.footer ul li a {
  display: inline-block;
  vertical-align: -19px;
  /* ����߶ȣ�ͼƬ25px+�ָ�14px����һ�� */
  width: 100%;
  text-align: center;
  overflow: hidden;
  color: #757575;
}
.nav.footer ul li a span {
  display: block;
  line-height: 100%;
}
.nav.footer ul li a img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  height: 25px;
  margin-bottom: 2px;
}


</style>

</head>
<body>
<input type="hidden" id="resourceId" value="4e165f3d-3a17-4490-a9f6-98558a31aec7!@#ovOzrs_GVFO4qGMy8aT3I8BkF0do"/>
<input type="hidden" id="resourceType" value="0"/>
<input type="hidden" id="advertiseId"/>
<!-- 阅读、分享流水记录 -->
<input type="hidden" id="articleId" value="4e165f3d-3a17-4490-a9f6-98558a31aec7" />
<input type="hidden" id="openid" value="ovOzrs_GVFO4qGMy8aT3I8BkF0do" />
<!-- <img class="lazy" data-original="/family_chat/shop/images/zyzs.png"  width="640" heigh="480" style="">
<img class="lazy"  data-original="/family_chat/shop/images/ljzmp.png"  width="640" heigh="480" style=""> -->

<div class="deng wzIcon" id="shot" style="display:none;background-position: -2px -628px;background-size:98%;background-image: url('<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/articleIcon.png');"></div>

<div data-role="page" data-theme="a" style="padding-bottom:50px">
	<!-- <div id="myDialog" style="display:none;width:100%; height:100%; position:fixed; z-index:999999; background-color:rgba(0, 0, 0, 0.46);text-align: center;"
	 onclick="javascript:document.getElementById('myDialog').style.display='none'">
		<div id="twoDimentionCode" style="display:inline-block;background-image:url(/family_chat/shop/images/qrCodeContainer.png);background-position: center;
  				background-size: cover;width: 215px;height: 244px;position: relative;border-radius:0.25em;text-align: center;">
  				<span id="microshopName" style="font-size:15px;text-align:center;color:black;font-family: '微软雅黑';display:block;margin-top:8px;"></span>
				<img id="wxCodeImg" alt="" src="" style="width:125px;height:125px;margin-top:0px;">letter-spacing:1px;
		</div>
	</div> -->
	<!-- <div id="myDialog2" style="display:none;width:100%; height:120%; position:fixed; z-index:999999; background-color:rgba(0, 0, 0, 0.46);text-align: center;"
	 	onclick="javascript:document.getElementById('myDialog2').style.display='none'">
		<div id="dialoge" class="dialoge" style="">
			<input id="customerName" class="consultingDialect" style="margin-top:25px;" placeholder="请输入您的姓名" data-role="none">
			<input id="customerPhone" class="consultingDialect" style="margin-top:15px;" placeholder="请输入您的电话" data-role="none" onkeyup="this.value=this.value.substring(0,11)">	<br>
			<span id="errMsg" style="width:80%;color:red;"></span>
			<div id="mianfeizixun" data-role="none" style="display: inline-block;width:120px;height:40px;margin-top:20px;background-color:#ff4f00;font-size:18px;color:#f1f1f1;border-radius:8px;line-height:40px;font-family: '微软雅黑';">
				免费咨询</div>
			<div style="height:50px;width:100%;position:absolute;bottom:0px;background-color: #ff4f00;display:block;vertical-align:middle;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;">
				<span id="telephoneNumber" data-role="none" style="color:#f1f1f1;font-weight:nomal;font-size:16px;font-family: '微软雅黑';display:inline-block;
				float:left;line-height:16px;  line-height: 50px;padding-left:10px"></span>
				<div class="dialectBottom" style="">
					<a id="iconPhone3" recordclick="click phoneIcon" style="display:inline-block;background:url(/family_chat/shop/articleImg/bottomPhone.png) no-repeat center center; background-size: cover; background-position: center;
						width:25px;height:25px;"></a>
				</div>
			</div>
		</div>
	</div> -->
	<!-- 删除头部广告 -->
    <div id="header" style="text-shadow:none;">

		<div id="headCard" style="overflow:hidden;zoom:100%;text-align: center;margin:0 auto; padding-top:10px;padding-bottom:10px;display: none;">


<body style="text-align: center;-webkit-text-stroke:0.2px;">
	<div data-role="none" class="topCard" style="display: inline-block;width:95%;height:70px;vertical-align: middle;font-size:15px;font-family:'微软雅黑';
  		color:#f1f1f1;font-weight:normal;border-radius:10px;background:#fba44e;background:linear-gradient(left, #fba44e,#f96926);
  		background: -o-linear-gradient(right, #fba44e,#f96926);background: -moz-linear-gradient(right, #fba44e,#f96926);
  		background: linear-gradient(to right,#fba44e,#f96926);">
		<div id="cardImg" style="display: inline-block;margin:10px;width: 50px;height: 50px;float:left;border-radius:25px;
		background-color:#f1f1f1;background-image: url(../shop/articleImg/person.png);background-position: center;background-size:contain;"></div>
		<div style="float:left;margin-top: 15px;width:60%;">
				<span style="display: inline-block;width: 100%;overflow: hidden;text-align: left;white-space: nowrap;text-overflow: ellipsis;">
					<span id="cardName" style="text-shadow:none;"></span>
					<span style="display: inline-block;width: 15px;text-align: center;">|</span>
					<span id="cardCompany" style="text-align: left;text-shadow:none;"></span>
				</span>
			<div id="cardPhone" style="text-align: left;margin-top:5px;text-shadow:none;"></div>
		</div>
		<a data-role="none" id="iconPhone" recordclick="click phoneIcon" href="tel:undefined" onclick="javascript:recordActionSimple('8')" style="display: inline-block;
		width: 40px;height: 40px;float:right;margin-right:15px;margin-top:15px;background-image: url(<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/topphone.png);background-position: center;background-size:contain;"></a>
	</div>
</body>

		</div>

    </div>
    <div id="guidetoDoCard"; style="background: rgba(0, 0, 0, 0.85);position:fixed;z-index: 1000;top:0px;bottom: 0;display: none;width:100%;">
		<div style="width: 100%;margin-top:115px;z-index: 99;text-align: center;position: relative;">
			<!-- <div style="width: 100%;height:180px;margin-top:17px;z-index: 99;background-position: center;background-size: 76%;display:inline-block;background-image:url('<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/zyzs.png');
 				 background-repeat: no-repeat;">
			</div> -->
			<img class="lazy" data-original="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/zyzs.png" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/zyzs.png" style="display:inline-block;max-width: 70%;">
			<div id="closeGuides" class="wzIcon" style="width: 50px;height:50px;z-index: 9999;background-position: -38px -47px;background-size: 270%;position: absolute;right:5px;">
			</div>
		</div>
		 <div id="ljzmp" style="width:100%;height:70px;margin-top: 30px;text-align: center;">
			<img class="lazy" data-original="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/ljzmp.png" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/ljzmp.png" style="display:inline-block;max-width: 35%;">
		 </div>
	</div>
	<div data-role="content" style="background-color: #fff; padding-top: 0;margin-left:10px;margin-right: 10px;">
		<div id="infoData" style="overflow:hidden;"></div>
	</div>

	<div id="jiange-rewen" style="width:100%;height: 10px;background-color: #eee;"></div>
	 <div id="advertising-info" class="advertising-info" style="display:none;overflow: hidden;padding-top: 5px;padding-bottom: 5px;font-family: '微软雅黑'">
		<div style="display:inline-block;width: 115px;height:115px;float:left;">
			<img id="pro_img" style="width:100%;height: 100%;position: relative;">
			<div style="display:inline-block;width:30px;height:16px;line-height:16px;position:absolute;top:10px;left:5px;font-size:11px;color:#666666;border-radius:4px;background-color:rgba(222,217,217,0.7)">
			广告</div>
		</div>
		<div style="display:inline-block;width:100%;height:115px;margin-right:-125px;padding-right:125px;
   			height: 115px; box-sizing: border-box;position:relative;">
			<div id="pro_name" style="font-size:14px;color:#333333;margin-top:7px;margin-left: 10px;float: left;text-align:left;white-space: nowrap;font-weight: bold;"></div>
			<div style="clear: both;"></div>
			<div style="font-size:13px;color:#666666;float:left;text-align:left;margin-left: 10px;margin-top:5px;">
				<div id="pro_describe" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;"></div>
			</div>
			<div style="clear: both;"></div>
			<div id="ckxq" style="height:23px;width:70px;line-height:23px;border-radius:3px;color:#ff7124;border:1px solid #ff7124;font-size:12px;
				margin-top: 10px;margin-left:10px;position: absolute;bottom: 5px;">查看详情</div>
		</div>
	 </div>
	 <div id="longimg" style="display: none;padding-top: 5px;padding-bottom: 5px;font-family:'微软雅黑';margin-right: 10px;margin-left: 10px;position: relative;margin-top: 5px;">
	 	<img id="showLongimg"/>
	 </div>

	<div class="jian-ge" style="display:none;width:100%;height:10px;background:#eee;"></div>

	<div class="additional-info">
		<div id="hot-activity-list" style="display:none;">
		    <div class="title">
		    	<span>更多我的文章</span>
		    </div>
		    <div class="my-content" id="my-content" >

		    </div>
		</div>
	</div>

	</div>
	<div id="footer" style="zoom:100%;background-color:#fff;color:#ff8d39;border-top:1px solid #eaeaea;display: none;">
		<div class="foot-wrap" style="display:none;">
			<div class="line-1">
				<div class="line-1-left">
					<span class="productName"></span> <span class="money"></span>
				</div>
				<div class="line-1-right">立即投保</div>
			</div>
			<div class="line-2">
				<div class="person person-1">
					<img id="new-person-icon" src=""
						style="width: 50px; margin-left: 15px; border-radius: 50%;  margin-top: 5px;">
				</div>
				<div class="person person-2">
					<div class="person-name"></div>
					<div class="person-com"></div>
				</div>
				<a class="person person-3" id="person-text-tel" style="width: 25%;text-decoration: none;font:12px/17px 'Lucida Grande',\5FAE\8F6F\96C5\9ED1,Verdana,Tahoma,Arial,\5b8b\4f53,Helvetica,sans-serif">
					<i class="person-icon" style="background-position: -59px -1363px;"></i>
					<span class="person-text">咨询我</span>
				</a>
				<div class="person person-4" onclick="showDialog2()">
					<i class="person-icon" style="background-position: -61px -1409px;"></i>
					<span class="person-text">加微信</span>
					<div class="bottomWxQrcode" class="wzIcon" style="position:absolute;width: 130px;height:160px;top:-122px;right:7px;background-size:113%;z-index:999999999;display:none;text-align: center;"></div>
				</div>
			</div>
		</div>
		<div class="foot-wrap-2" style="display:none;">


<a style="display: inline-block;width: 120px;height:50px;float:left;position: relative;padding-top: 11px;margin-left:20px;">
	<span id="bottomCardHeadImage" style="display: inline-block;width: 40px; height: 40px; float: left; border-radius: 20px;background-size:100%; background-position: center;background-repeat:no-repeat;box-sizing:border-box;position: absolute;left: 0;top: 5px;"></span>
	<span id="bottomCardCardName" style="text-shadow:none;color: #fff;display: block;font: 11px/15px SimHei;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;padding-left: 44px;color:#2b2b2b;padding-left:50px;text-align: left;"></span>
	<span id="bottomCardCompany" style="text-shadow:none;color: #fff;display: block;font: 11px/11px SimHei;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;padding-left: 27px;color:#b6b6b6;padding-left:50px;text-align: left;"></span>
</a>
<div style="display:inline-block;width: 100%;margin-right: -140px;padding-right: 140px;text-align: center;box-sizing: border-box;">
	<a href="#" onclick="javascript:recordActionSimple('7')" recordclick="click articlePhone" id="iconPhone1" style="width: 29%;">
		<div class="microshop_bottom bottom_lxw" style="background-image:url('<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/articleIcon.png');background-position: 5px -289px; vertical-align: top; height: 28px; width: 50px;background-size:86% " ></div>
		<div class="bottom_font" style="text-align: center;font-size: 11px;color:#fff;width: 100%;margin-top:-17px;background-size:37px 222px;text-shadow:none;color:#7fb4ed">联系我</div>
	</a>
	<a onclick="showDialog2();" recordclick="click articleQrcode" style="width: 29%;">
		<div class="microshop_bottom bottom_jwwx" style="background-image:url('<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/articleIcon.png');background-position: 7px -291px;background-size:76%; vertical-align: top; height: 28px; width: 50px;" ></div>
		<div class="bottom_font" style="text-align: center;font-size: 11px;color:#fff;width: 100%;margin-top:-17px;background-size:37px 222px;text-shadow:none;color:#7fb4ed">加我微信</div>
		<div id="bottomWxQrcode" class="wzIcon bottomWxQrcode" style="position:absolute;width: 130px;height:160px;top:-166px;right:65px;background-size:113%;z-index:999999999;display:none;text-align: center;"></div>
	</a>
	<a  id="homePage" href="#"  recordclick="click articleInShop" style="width: 29%;">
		<div class="microshop_bottom bottom_wdwz" style="background-image:url('<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/articleIcon.png');background-position: 10px -297px;background-size:68%; vertical-align: top; height: 28px; width: 50px;" ></div>
		<div class="bottom_font" style="text-align: center;font-size: 11px;color:#fff;width: 100%;margin-top:-17px;background-size:37px 222px;text-shadow:none;color:#7fb4ed">我的微站</div>
	</a>
</div>

		</div>
	</div>
</div>
	<div id="bgAlert">
		<div class="bg1"></div>
		<div id="uploading"><img  src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/load.gif" width="70px"/>
		<div style="  font: 16px 'Lucida Grande',\5FAE\8F6F\96C5\9ED1,Verdana,Tahoma,Arial,\5b8b\4f53,Helvetica,sans-serif;  padding-left: 10px;color: #fff; text-shadow: none;">加载中...</div>
		</div>
	</div>
	<div id="guideScreenShot" style="width: 100%;height: 100%;background: rgba(0,0,0,0.7);position: fixed;z-index: 1999;top: 0; left: 0; right: 0; bottom: 0;display:none;text-align:center" onclick="hideScreenShotGuide(); " >
			<img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/screenShotGuide.png" id="screenShotGuide" style="margin-left: -40px"/>
			<img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/screenShotGuideIKnow.png" style="width: 94px; margin-top: 20px;"  />
	</div>
	<div id="screenShotAlert">
		<div class="bg1"></div>
		<div id="uploading1"><img  src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/load.gif" width="70px"/>
		<div style="  font: 16px 'Lucida Grande',\5FAE\8F6F\96C5\9ED1,Verdana,Tahoma,Arial,\5b8b\4f53,Helvetica,sans-serif;  padding-left: 10px;color: #fff; text-shadow: none;">截屏中,请稍等...</div>
		</div>
	</div>
	<section id="screenShotScuccessAlert">
		<img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/screenShotScuccessAlert.png">
	</section>
	<section id="screenShotFailAlert">
		<img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/screenShotFailAlert.png">
	</section>
<input type="hidden" id="shopid" value="">
<input type="hidden" value="no" id="isSubmit">
</body>
<script type="text/javascript">
$("body").css("-webkit-text-stroke","0");
//访问者的openid
var visitorOpenID = '';
var infoId, iconUrl, userImgUrl, currUrl, infoSummary, infoTitle, openId, shareOpenId, infoType;
var isCheck='Y';
var errCount = 0;
var contentErrCount = 0;
var microshopQRImg ='';
var hasScrolled = '';//判断是否第一次滚动页面底部，统计曝光率
var pro_hasScrolled = '';//判断是否第一次滚动页面底部，统计曝光率
var channelJson ={};
var ifVisit = "agent_jm";
/* function showLoader(){
	$.mobile.loading('show', {
		text: '加载中...',//加载器中显示的文字
		textVisible: true,//是否显示文字
		theme: 'a',//主题样式
		textonly: false,//是否只显示文字
		html: ''//要显示的html内容，如图片
	});
}

function hideLoader(){
	$.mobile.loading('hide');//隐藏加载器
} */
$("#twoDimentionCode").bind("click",function(event){
	event.stopPropagation();
});
var isQQShare = false;
if ('null' != "null") {
	isQQShare = true;
} else {
	isQQShare = false;
}

// 如果是QQ分享的链接
if(isQQShare) {
	$("#navBar").hide();
	$("#footer").hide();
	$(".i-need-sales").css("display", "none");
}
if(!isQQShare) {
	$("#navBar").show();
	$("#footer").show();
	$(".i-need-sales").css("display", "block");
}

function goToTuiGuang(){
	window.location.href = "https://mp.weixin.qq.com/s?__biz=MzAxODU4MzIyOA==&mid=400980468&idx=1&sn=10ae9873c69ae0eb8fea936074be7268&scene=0&key=d4b25ade3662d64333de72f64ba2775e48ccdb41c0723045ebadb875a17d29ad3477aea8ef4e38b6487d55d1aedd358d&ascene=7&uin=NDk2NTk1OTc1&devicetype=android-19&version=26030532&nettype=WIFI&pass_ticket=nGu3HfI11YQJjP7c99Yu6F1rPiUOOO4Q21HmSP4fYZ%2FRQZ9PgZ2UNniiM3l8Xpct";
}
function showDialog2(){
	if($('.bottomWxQrcode').attr('data-id')!='show'){
		$('.bottomWxQrcode').show();
		$('.bottomWxQrcode').attr('data-id','show');
	}else{
		$('.bottomWxQrcode').hide();
		$('.bottomWxQrcode').attr('data-id','hide');
	}
	recordClick('jiawoweixin');
}
function getProduct(){
	var url = "../getProductionInfoByArticleId.do";
	$.ajax({
		url : url,
		type : 'POST',
		dataType : 'json',
		async : false,
		data : {
			"id" : infoId
		},
		success : function(data) {
			if(data.status=='success'){
				if(data.huiyuanstatus=='N'){
					$(".line-1").hide();
					return;
				}
				$(".productName").text(data.resultMap.productionName);
				$(".money").text(data.resultMap.price+"元起");
				$(".line-1-right").attr("onclick","gotoProduct('"+data.resultMap.productionUrl+"')");
			}
		}
	});
}
function gotoProduct(url){
	window.location.href = url.indexOf('?')!=-1?url+"&USER_ID="+openId:url+"?USER_ID="+openId;
}
function getInfoData(){
	//showLoader();
	$("#bgAlert").css("display","block");
	var uploadHeight=($(window).height()-$("#uploading").height())/2;
	$("#uploading").css("margin",uploadHeight+"px auto");
	$("#uploading1").css("margin",uploadHeight+"px auto");
    var url = "<?php echo url("article/content",["mid"=>input("mid"),"act"=>"info","id"=>input("id")]); ?>";
	$.ajax({
		url : url,
		type : 'POST',
		dataType : 'json',
		async : false,
		data : {
			"id" : infoId,
			"openId" : openId
		},
		success : function(data) {
			var obj = data.body
			//加载微名片
			if("" == openId || null == openId || undefined == openId){
				openId = "";
				$(".table_control").css("display","none");
				$("#header").css("height","90px");
				$("#cardId").css("display","none");
				$("#cardId").css("height","0px");
				$("#footerId").css("display","none");
				$("#footerId").css("height","0px");
				/* $("#new-person-icon").attr("src","/family_chat/shop/images/person.png");
				var hTel = "tel:15000427714";
				$("#cardName").text('孙德钊');
				$(".person-name").text('孙德钊');
				$("#cardPhone").text('15000427714');
				$('#telephoneNumber').text('咨询电话：'+'15000427714');
				$("#iconPhone").attr("href", hTel);
				$("#iconPhone1").attr("href", hTel);
				$("#iconPhone2").attr("href", hTel);
				$("#iconPhone3").attr("href", hTel);
				$("#person-text-tel").attr("href", hTel);
				if('中国平安' != null){
					$("#cardCompany").text('中国平安');
					$("#cardCompany1").text('中国平安');
					$(".person-com").html('中国平安');
					$("#bottomCardCompany").text('中国平安');
				}else{
					$("#cardCompany1").css("display","none");
				}

				$("#cardName1").text('孙德钊');
				$("#bottomCardCardName").text('孙德钊');
				$("#cardPhone1").text('15000427714');
				$("#motton").text(data.motton);
				$("#cardImg").css("background-image", "url('/family_chat/shop/images/person.png'");
				$("#cardImg1").css("background-image", "url('/family_chat/shop/images/person.png')");
				$("#bottomCardHeadImage").css("background-image", "url('/family_chat/shop/images/person.png')");
				if(data.microShopDTO!=null){
					$("#shopid").val('ssdfdgghjkgv,.nvbnkgjhkgljh');
					if(isQQShare) {
						$("#cardImg1").attr("onclick","");
						$("#cardImg").attr("onclick","");
					} else {
						$("#cardImg1").attr("onclick","jumpUrl()");
						$("#cardImg").attr("onclick","jumpUrl()");
					}
					$("#homePage").attr("onclick","jumpUrl()");
				}
					$(".table_control").css("display","block");
					$("#cardId").css("display","block");
					$("#footerId").css("display","block");
					$(".foot-wrap-2").show(); */
			} else {
				/* if(data.info.infoType=='超级推广'){
					$("#footer").css("height","103px");
					$("#footer").css("background-color","rgb(255,255,255)");
					$("#footer").css("text-align","left");
					$(".foot-wrap-2").hide();
					$(".foot-wrap").show();
					showClient();
					getProduct();
				}else{
					$(".foot-wrap").hide();
					//$(".foot-wrap-2").show();
				} */
			}
			console.log(data);
			//hideLoader();
			$("#bgAlert").css("display","none");
			if("200" == data.code){
				var advertise =data.body.data;
				var info = data.body.info;
				infoTitle = info.title;
                console.log(infoTitle);
				userImgUrl = info.coverImgUrl;
				if (info && info.coverImgUrl && info.coverImgUrl.indexOf('http://') >= 0) {
					iconUrl = info.coverImgUrl;
				} else {
                    iconUrl = "https://sales.yun.pingan.com/" + "images/" + info.coverImgUrl;
				}
				infoSummary = info.summary;
				infoType = info.infoType;
				infoCode = info.infoCode;
				recordClick(infoType + "55");
				addInfoClick(infoCode);
				var time = info.createdDate.split(" ")[0];
				//var bodyStr = "<h3>"+info.title+"</h3>" + "<h6>"+time+"&nbsp;&nbsp;&nbsp;&nbsp;作者："+info.author+"</h6>";
				var bodyStr = "<h3 style=\"text-align:left;margin-top:1em;margin-bottom:1em;\">"+info.title+"</h3>";
				if("1" == info.showCover){
					bodyStr += "<img src=\""+info.coverImgUrl+"\" onclick=\"goToBigPic(this);\" style=\"width:100%;\">";
				}
				if(info.infoType=='热门活动'){
					var iframe = '';
					if(window.location.href.indexOf("visitType=customer")>-1){
						iframe = '<iframe id="contFrame" width="100%" height="629px" src="'+info.content.substring(3,info.content.length-4)+'?openId='+openId+'&visitType=customer" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>';
					}else{
						iframe = '<iframe id="contFrame" width="100%" height="629px" src="'+info.content.substring(3,info.content.length-4)+'?openId='+openId+'&visitType=agent" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>';
					}
					window.addEventListener('message',function(evt){
						var frame = document.getElementById("contFrame");
						if(evt.source === frame.contentWindow){
							var data = evt.data;
							if("changeHeight" == data.action){
								frame.height = data.value;
							}
						}
					},false);
					bodyStr += "<div style=\"width:100%;text-align:left;\">" + iframe + "</div>";
				}else{
					bodyStr += "<div style=\"width:100%;text-align:left;\">" + info.video +   info.content + "</div>";
				}
				if("" != info.originalLink && null != info.originalLink){
					bodyStr = bodyStr + "<h6>原文链接：<a href='"+info.originalLink+"' style='color:#0000f0'>"+info.originalLink+"</a></h6>";
				}
				$("#infoData").append(bodyStr);
				$("#infoData").trigger("create");
				if(obj.productionInfo!=undefined&&obj.productionInfo!=null){
					DrawProductionInfo(obj.productionInfo);
				}else{
					$('.advertising-info').hide();
				}
                //修改所有img的src
                $('img').each(function(index, ele) {
                    var item = $(ele);
                    var url = item.attr('src');
                    var finalUrl;
                    if (url) {
                        if (url.indexOf('/shop/ueditor/jsp/upload') >= 0) {
                                finalUrl = 'http://iobs02.pingan.com.cn/download/zyb-prd/' + url.substring(url.lastIndexOf("/") + 1);
                        } else {
                                finalUrl = url;
                        }
                        item.attr('src', finalUrl);
                    }
                });

                // 长图开关
                if (obj.productionInfo.imageType == "0") {
                	$("#showLongimg").attr("src",obj.productionInfo.longImgUrl);
                	$("#longimg").show();
                	$("#advertising-info").hide();
                } else{
                	//$("#advertising-info").show();
                	$("#advertising-info").hide();  //by wang
                	$("#longimg").hide();
                }
			}else{
				alert("系统异常");
			}
		},
		error : function() {
			//hideLoader();
			$("#bgAlert").css("display","none");
			if(contentErrCount == 3){
				contentErrCount = 0;
				//alert("网络异常");
				return;
			}
			contentErrCount++;
			getInfoData();
		}
	});
}

//统计渠道联盟广告曝光率
function sendMessageToCaap(channelJson,host){
	$(window).bind('scroll',function(){
		//判断滚动条滚动到广告处，统计广告的曝光率。
		if($('#advertiseImg').position().top!=0&&$('#advertiseImg').position().top < $(window).height()+$(window).scrollTop()){
			if(hasScrolled!='true'){
				hasScrolled = 'true';
				recordClick('adchannelPlat');
				if(host!=undefined){
					var curl =host+'/channel/advert/bannerCallback';
					$.ajax({
						url:curl,
						type : 'POST',
						dataType : 'json',
						async : false,
						data : {"handbackParameter":channelJson},
						success : function(res) {
						}
					});
				}
			}
		}
	});
}

function updateRelayCount(){
	//showLoader();
	$("#bgAlert").css("display","block");
	var uploadHeight=($(window).height()-$("#uploading").height())/2;
	$("#uploading").css("margin",uploadHeight+"px auto");
	$("#uploading1").css("margin",uploadHeight+"px auto");
	var url = "../updateRelayCount.do";
	$.ajax({
		url : url,
		type : 'POST',
		dataType : 'json',
		async : true,
		data : {
			"infoId" : infoId,
			"title" : infoTitle,
		    "summary": infoSummary,
		    "imgUrl": userImgUrl,
		    "openId": shareOpenId
		},
		success : function(data) {
			//hideLoader();
			$("#bgAlert").css("display","none");
			if("ok" == data.status){
				//alert("更新转发量成功");
			}else{
				//alert("系统异常，更新转发量失败");
			}
		},
		error : function() {
			//hideLoader();
			$("#bgAlert").css("display","none");
			alert("网络连接异常，更新转发量失败");
		}
	});
}

function updateShareCnt(){
	var url = "<?php echo url("article/content",["mid"=>input("mid"),"act"=>"updateShareCnt","id"=>input("id"),"wecha_id"=>$user['wecha_id']]); ?>";
	$.ajax({
		url : url,
		type : 'GET',
		dataType : 'json',
		async : true,
		data : {},
		success : function(data) {
			if("ok" == data.status){
				//alert("更新转发量成功");
			}else{
				//alert("系统异常，更新转发量失败");
			}
		},
		error : function() {
			alert("网络连接异常");
		}
	});
}

function getUrlParam(paramName) {
	var url = window.location.href;
	var oRegex = new RegExp('[\?&]' + paramName + '=([^&]+)', 'i');
	var oMatch = oRegex.exec(url);
	if (oMatch && oMatch.length > 1) {
		return decodeURI(oMatch[1]);
	} else {
		return "";
	}
}

// 跳转到微站
function jumpUrl(){
    window.location.href="<?php echo url("member/index",['mid'=>$fan['mid'],'openid'=>$fan['wecha_id']]); ?>";
}
function showClient() {
	var tempflag = true;
    var url = "<?php echo url("article/content",["mid"=>input("mid"),"act"=>"user","id"=>input("id"),"shareOpenId"=>input("shareOpenId")]); ?>";
	$.ajax({
		url : url,
		type : 'POST',
		dataType : 'json',
		async : true,
		data : {
			"id" : openId
		},
		success : function(data) {
			console.log(data.flag);
			if(data.flag=="fail"){  //没有创建名片
				$(".table_control").css("display","none");
				$("#header").css("height","0px");
				$("#footer").css("display","none");
				$("#headCard").css("display","none");
				$("#headCard").css("height","0px");
				$("#footerId").css("display","none");
				$("#footerId").css("height","0px");
				isCheck = "N";
			}else{
			    if("agent_jm" == ifVisit) {
			    	// 从公众号进入
			    	$(".deng").attr("onclick", "getScreenShotPic()");
			    	if(localStorage.getItem('screenShot_guide')==null){
			    		//$("#guideScreenShot").show();
			    		$("#guideScreenShot").hide(); //by wang
			    	}
			    	if(data.gender!=undefined&&data.gender!=1) {
			    		$('.deng').css('background-position','-2px -560px');
			    	} else {
			    		$('.deng').css('background-position','-2px -628px');
			    	}
			    } else {
			    	$("#guideScreenShot").hide();
			    	$(".deng").attr("onclick", "showGudes()");
			    	if(data.gender!=undefined&&data.gender!=1) {
			    		$('.deng').css('background-position','-2px -207px');
			    	} else {
			    		$('.deng').css('background-position','-2px -489px');
			    	}
			    }
				if(data.gender!=undefined&&data.gender!=1){
					changeGenderStyle();
				}
				$('#headCard').show();
				$('.foot-wrap-2').show();
				$("#footer").show();
				//展示更多热文
				showHotActivity(openId);
				var headImage = data.headImage;
				var img;
				if (!headImage || headImage == 'null') {
					img = "/family_chat/images/cards/default_head.png";
				} else {
					img = headImage;
					img+="?timestamp="+new Date().getTime();
				}
				isCheck=data.isCheck;
				//判断是否被举报
				if(data.flag){
					tempflag= false;
				}
				$("#new-person-icon").attr("src",img);
				var hTel = "tel:" + data.telphone;
				$("#cardName").text(data.cardName);
				$(".person-name").text(data.cardName);
				$("#cardPhone").text(data.telphone);
				$('#telephoneNumber').text('咨询电话：'+data.telphone);
				$("#iconPhone").attr("href", hTel);
				$("#iconPhone1").attr("href", hTel);
				$("#iconPhone2").attr("href", hTel);
				$("#iconPhone3").attr("href", hTel);
				$("#person-text-tel").attr("href", hTel);
				if(data.company != null){
					$("#cardCompany").text(data.company);
					$("#cardCompany1").text(data.company);
					$(".person-com").html(data.company);
					$("#bottomCardCompany").text(data.company);
				}else{
					$("#cardCompany1").css("display","none");
				}

				$("#cardName1").text(data.cardName);
				$("#bottomCardCardName").text(data.cardName);
				$("#cardPhone1").text(data.telphone);
				$("#motton").text(data.motton);
				$("#cardImg").css("background-image", "url("+img+")");
				$("#cardImg1").css("background-image", "url("+img+")");
				$("#bottomCardHeadImage").css("background-image", "url("+img+")");
				if(data.microShopDTO!=null){
					$("#shopid").val(data.microShopDTO.shopid);
					if(isQQShare) {
						$("#cardImg1").attr("onclick","");
						$("#cardImg").attr("onclick","");
					} else {
						$("#cardImg1").attr("onclick","jumpUrl()");
						$("#cardImg").attr("onclick","jumpUrl()");
					}
					$("#homePage").attr("onclick","jumpUrl()");
					//添加微信二维码逻辑控制：data.microShopDTO.qrcodeImage
					if(data.microShopDTO.qrcodeImage!=undefined&&data.microShopDTO.qrcodeImage!=''&&data.microShopDTO.qrcodeImage!=null){
						$('.bottomWxQrcode').css('background-position','-8px -114px').html("<img src='"+data.microShopDTO.qrcodeImage+"' style='width:108px;height:100px;position:absolute;bottom:44px;right:11px;'>");
					}else{

							$('.bottomWxQrcode').css('background-position','-8px -282px');

					}
				}

				if(!tempflag){
					$(".table_control").css("display","none");
					$("#header").css("height","0px");
					$('#headCard').hide();
					$('#footer').hide();
					$("#cardId").css("display","none");
					$("#cardId").css("height","0px");
					$("#footerId").css("display","none");
					$("#footerId").css("height","0px");
				}else{
					$(".table_control").css("display","block");
					//$("#header").css("height","70px");
					$("#cardId").css("display","block");
					$("#footerId").css("display","block");
				}
				if(null != data.address && data.address.indexOf("|")){
					var addresses = data.address.split("|");
					var city = addresses[2];
					$("#cardCity").text(city);
				}else{
					$("#cardCity").css("display","none");
				}
			}
		},
		error : function(e) {
			if(errCount==3){
				//alert("网络异常");
				errCount = 0;
				return;
			}
			errCount++;
			$(".table_control").css("display","none");
			$("#header").css("height","0px");
			$("#cardId").css("display","none");
			$("#cardId").css("height","0px");
			$("#footerId").css("display","none");
			$("#footerId").css("height","0px");
			isCheck = "N";
			showClient();
			//alert(e);
			//alert("网络异常");
		}
	});
}
function showMoreZixun(){
    return;

	var url = "../getRandForeInfos.do";
	$.ajax({
		url : url,
		type : 'POST',
		dataType : 'json',
		async : true,
		success:function(data){
			var html = AceTemplate.format("more-activity-toshow",data);
			$("body").prepend(html);
		}
	});
}


$(document).ready(function(){
	//统计阅读量
	recordActionSimple(ResourceAction.ACTION_TYPE_READ);

    $('#twoDimentionCode').css('margin-top', ($(window).height() - 45 - $('#twoDimentionCode').height()) / 2);

    $("img.lazy").lazyload({
        skip_invisible : false
    });

	shareOpenId = "null";
	//infoId = getUrlParam("infoId");
	//infoId = getUrlParam("id");
	infoId ="4e165f3d-3a17-4490-a9f6-98558a31aec7";
	var currUrl_ls = null;
	if(window.location.href.indexOf("visitTag=agent_jm")==-1){
		currUrl_ls = window.location.href;
	}else{
		var startTag = window.location.href.indexOf("visitTag=agent_jm");
		//由于客户访问，需要去掉visitTag=agent_jm
		currUrl_ls = window.location.href.substring(0,startTag)+window.location.href.substring(startTag+17,window.location.href.length);
	}
	//currUrl = currUrl_ls+"&visitType=customer";
	currUrl = currUrl_ls+"&shareOpenId=<?php echo $user['wecha_id']; ?>"; //分享 by wang
	//iconUrl = currUrl.substring(0, currUrl.lastIndexOf("/"));
	openId = getUrlParam("openId");
	showClient();
	getInfoData();
	$('.consulting').css('font-weight','nomal').css('font-family','微软雅黑');
	showMoreZixun();
});


<!--微信分享-->
<?php
if($member['m_appid'] && $member['m_appsecret']){
require_once "public/weixin/jssdk.php";
$jssdk = new JSSDK($member['m_appid'], $member['m_appsecret']);
$signPackage = $jssdk->GetSignPackage();
?>
wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: '<?php echo $signPackage["timestamp"];?>',
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: ['onMenuShareAppMessage','onMenuShareTimeline', 'onMenuShareQQ','onMenuShareQZone']
});

wx.ready(function () {
    //描述和图片需要重新定义，描述取正文的第一段文字，没有文字则为空
    //图片取正文第一张图片；没有图片用默认的图片；

	wx.onMenuShareAppMessage({
    	title: infoTitle,
	    desc: infoSummary,
	    link: currUrl,
	    imgUrl: iconUrl,
	    trigger: function (res) {
	            recordActionSimple(ResourceAction.ACTION_TYPE_SHARE);
	    },
	    success: function (res) {
	    	recordClick('63');
	    	shareHistoryRecord();
	        //alert('已分享');
	    	if(openId == shareOpenId){
	    		updateRelayCount();
	    	} else {
	    		updateShareCnt();
	    	}
	    	if(window.location.href.indexOf("visitTag=agent_jm")!=-1){
	    		$(".moreZixun").show();
	    		$('body,html').animate({scrollTop:0},10);
	    	}
	    },
	    cancel: function (res) {
	        //alert('已取消');
	    },
	    fail: function (res) {
	        alert("页面加载中，请稍候再试。");
	    }
    });
    wx.onMenuShareTimeline({
        title: infoTitle, // 分享标题
        link: currUrl, // 分享链接
        imgUrl: iconUrl, // 分享图标
        trigger: function (res) {
            recordActionSimple(ResourceAction.ACTION_TYPE_SHARE);
 	    },
        success: function () {
        	recordClick('63');
        	shareHistoryRecord();
            // 用户确认分享后执行的回调函数
        	if(openId == shareOpenId){
	    		updateRelayCount();
	    	} else {
	    		updateShareCnt();
	    	}
			if(window.location.href.indexOf("visitTag=agent_jm")!=-1){
				$(".moreZixun").show();
				$('body,html').animate({scrollTop:0},10);
	    	}
        },
        cancel: function (res) {
	        //alert('已取消');
	    },
	    fail: function (res) {
	        alert("页面加载中，请稍候再试。");
	    }
    });

    wx.onMenuShareQQ({
    	title: infoTitle, // 分享标题
		desc: infoSummary, // 分享描述
		link: currUrl + '&isQQShare=true', // 分享链接
		imgUrl: iconUrl, // 分享图标
		success: function () {
			recordClick('63');
			shareHistoryRecord();
			//alert('已分享');
	    	if(openId == shareOpenId){
	    		updateRelayCount();
	    	} else {
	    		updateShareCnt();
	    	}
			if(window.location.href.indexOf("visitTag=agent_jm")!=-1){
				$(".moreZixun").show();
				$('body,html').animate({scrollTop:0},10);
	    	}
		},
		cancel: function () {
		     // 用户取消分享后执行的回调函数
		}
	});

    wx.onMenuShareQZone({
    	title: infoTitle, // 分享标题
		desc: infoSummary, // 分享描述
		link: currUrl + '&isQQShare=true', // 分享链接
		imgUrl: iconUrl, // 分享图标
		success: function () {
			recordClick('63');
			shareHistoryRecord();
			//alert('已分享');
	    	if(openId == shareOpenId){
	    		updateRelayCount();
	    	} else {
	    		updateShareCnt();
	    	}
			if(window.location.href.indexOf("visitTag=agent_jm")!=-1){
				$(".moreZixun").show();
				$('body,html').animate({scrollTop:0},10);
	    	}
		},
		cancel: function () {
		     // 用户取消分享后执行的回调函数
		}
	});
});
<?php } ?>


function GuestTool(){
	recordClick('43');
	window.location.href="/family_chat/shop/insurance.jsp?openId="+openId;
}
function goToBigPic(self) {
	 var data = [iconUrl];
	 wx.previewImage ({
	    	current: iconUrl,
	    	urls: data
	 });
}
function showHotActivity(openId){

    return;

	var url = "../randThreeActivityList.do";
	$.ajax({
		url : url,
		type : 'POST',
		dataType : 'json',
		async : true,
		data : {
			"openid" : openId
		},
		success : function(data) {
			if("success" == data.status){
				if(data.msg!=null&&data.msg.length>0){
					$(".jian-ge").css("display","block");
					var dataMsg = data.msg;
					if(dataMsg.length != 0) {
						for (var i = 0; i < dataMsg.length; i++) {
							if(dataMsg[i].photo == null || dataMsg[i].photo == ""){
								// 文章图片为空的情况
								if(1 == dataMsg[i].activity_type || 4 == dataMsg[i].activity_type) {
									img = "https://sales.yun.pingan.com/"+"family_chat/shop/suiji/"+RandomNum(1,60)+".png";
									dataMsg[i].photo = img;
								}
							}
						}
					}
					var html = AceTemplate.format("hot-activity",dataMsg);
					if(!html){
						$("#hot-activity-list").css("display","none");
						$("#jiange-rewen").css("display","none");
					}else{
						if(isQQShare) {
							$("#hot-activity-list").css("display","none");
							$("#jiange-rewen").css("display","none");
						} else {
							$("#hot-activity-list").css("display","");
							$("#jiange-rewen").css("display","");
							$("#my-content").append(html);
						}
					}

				}else {
					$("#hot-activity-list").css("display","none");
					$("#jiange-rewen").css("display","none");
				}
			}else{
				//alert("系统异常，更新转发量失败");
			}
		},
		error : function() {
			alert("网络连接异常");
		}
	});
}
function RandomNum(Min,Max){
	var Range = Max - Min;
	var Rand = Math.random();
	var num = Min + Math.round(Rand * Range);
	return num;
}
function goTOThisContent(contend_id,active_type){
	if("3" == active_type){
		//window.location.href="infoDetail.jsp?"+(isHost=="1"?"visitTag=agent_jm&":"")+"infoId=" + id + "&openId=" +openid+"&articleType=3";
		window.location.href="/family_chat/readArticle/"+contend_id+".do?id=" + contend_id + "&openId=" +openId+"&articleType=3";
	}else if("5" == active_type){
		window.location.href="/family_chat/readArticle/"+contend_id+".do?id="+contend_id+"&openId=" +openId+"&articleType=5";
	}else if("1"==active_type||"4"==active_type){
		window.location.href="/family_chat/readArticle/"+contend_id+".do?id="+contend_id+"&queryType=ACTIVITY&articleType=1";
	}
	else if("2"==active_type){
		window.location.href="/family_chat/readArticle/"+contend_id+".do?id="+contend_id+"&queryType=ACTIVITY&articleType=2";
	}else {
		window.location.href="/family_chat/readArticle/"+contend_id+".do?id="+contend_id+"&queryType=ACTIVITY&articleType=6";
	}
}
/* function showGuangGaoNot() {
	var url = "../showActivityClient.do";
	$.ajax({
		url : url,
		type : 'POST',
		dataType : 'json',
		async : true,
		data : {
			"id" : visitorOpenID
		},
		success : function(data) {
			if(data.flag=="fail"){  //没有创建名片
				return true;
			}else{
				return false;
			}
		},
		error : function(e) {
			return true;
		}
	});
} */
function showAdvertising(){
	//advertising-info;i-need-sales
	$(".advertising-info").css("display","block");
	$(".i-need-sales").css("display","block");
}
function enterAdvertisePage(url){
	recordClick('aq'+$('#advertiseId').val());
	window.location.href=url;
}
function gotoZinxunDetail(type,id,ysopenID){
	if(type=='3'){
		window.location.href="/family_chat/readArticle/"+id+".do?visitTag=agent_jm&"+"id=" + id + "&openId=" +"ovOzrs_GVFO4qGMy8aT3I8BkF0do"+"&articleType=3";
	}else{
		window.location.href="/family_chat/readArticle/"+id+".do?id="+id+"&articleType=5&feedsType=1&ysopenId="+ysopenID+"&secShareOpenid=ovOzrs_GVFO4qGMy8aT3I8BkF0do";
	}
}
/* function consult(){
			if(isSubmit=="true"){
				return;
			}
			recordClick('consultButton');
			$('#myDialog2').show();
			$('#dialoge').css('margin-top', ($(window).height() - 45 - $('#dialoge').height()) / 2);
			$("#dialoge").bind("click",function(event){
				event.stopPropagation();
			});
			$('#mianfeizixun').click(function(){
				$('#errMsg').html('');
				var customernickName =$('#customerName').val();
				var customernickPhone =$('#customerPhone').val();
				if(customernickName==""||customernickPhone==""){
					$('#errMsg').html('请输入完整信息！<br>');
					return;
				}
				isSubmit ="true";
				$.ajax({
					url : "../zhanneixin/insertInfoList.do",
					type : 'POST',
					dataType : 'json',
					async : true,
					data : {
						"id" : openId,
						"customer_nickName":customernickName,
						"service_openId":openId,
						"customer_phoneNumber":customernickPhone,
						"customer_info":"",
						"insurance_analyze_result":"",
						"service_suggest":"",
						"origin":$("title").text()
					},
					success : function(data) {
						$('#myDialog2').css('display','none');
						if(data.result=="success"){
							Toast_msg("资料提交成功，专业代理人会很快与您联系！",3000,function(){
								recordClick('consultSuccess');
							});
						}
					}
				});
				});
		} */
	function showGudes(){
		$('#guidetoDoCard').show();
		$('#closeGuides').click(function(){
			$('#guidetoDoCard').hide();
		});
		$('#ljzmp').click(function(){

				goToTuiGuang();
		});
	}

	function GetDateStr(AddDayCount) {
		var dd = new Date();
		dd.setDate(dd.getDate()+AddDayCount);//获取AddDayCount天后的日期
		var y = dd.getFullYear();
		var m = dd.getMonth()+1;//获取当前月份的日期
		if(m < 10) {
			m = "0" + m;
		}
		var d = dd.getDate();
		return y + "" + m + "" + d;
	}

	function getScreenShotPic(){
		recordClick('pingmujietu_pv');
		if(localStorage.getItem("pingmujietu_uv")!="true"){
    		recordClick('pingmujietu_uv');
    		localStorage.setItem("pingmujietu_uv", "true");
    	}
		$("#screenShotAlert").show();
		//防重复提交
		if($("#isSubmit").val() == "yes"){
			return;
		}
		$("#isSubmit").val("yes");
		//alert(infoId);
		//alert(openId);
		var url = "/family_chat/getScreenShotPic.do";
		$.ajax({
			url : url,
			type : 'POST',
			dataType : 'json',
			async : true,
			data : {
				"id" : infoId,
				"openId" : openId
			},
			success : function(data) {
				$("#screenShotAlert").hide();
				if("failed" == data.status) {
					$("#screenShotFailAlert").show();
					setTimeout(function () { $("#screenShotFailAlert").hide();}, 2000);
				} else {
					$("#screenShotScuccessAlert").show();
					setTimeout(function () { $("#screenShotScuccessAlert").hide();}, 2000);
				}
				$("#isSubmit").val("no");
			},
			error: function(error) {
				$("#screenShotAlert").hide();
				$("#screenShotFailAlert").show();
				setTimeout(function () { $("#screenShotFailAlert").hide();}, 2000);
				$("#isSubmit").val("no");
			}
		});
	}

	function changeGenderStyle(){
		$('.bottom_lxw').css('background-position','6px -48px');
		$('.bottom_jwwx').css('background-position','8px -78px');
		$('.bottom_wdwz').css('background-position','10px -103px');
		$('.bottom_font').css('color','#ff8d39');
		$('.top_line').css('background','linear-gradient(to right,#fba44f,#ff8d39)');
	}

	function DrawProductionInfo(data){
		if(data.longImgUrl!=undefined&&data.longImgUrl!=null){
			$('#pro_img').attr('src',data.longImgUrl);
			$('#pro_name').text(data.productionName);
			$('#pro_describe').text(data.description1);
			clickToProduction(data.productionUrl,openId,data.id);
			//clickToProduction1(data.productionUrl,openId,data.id);
			$(window).bind('scroll',function(){
				if($('.advertising-info').position().top!=0&&$('.advertising-info').position().top < $(window).height()+$(window).scrollTop()){
					if(pro_hasScrolled!='true'){
						pro_hasScrolled='true';
						console.log(pro_hasScrolled);
						recordClick('productionPuguang'+data.id);
					}
				}
			});
		}
	}

	function clickToProduction(linkUrl,openId,id){
		var thisUrl =window.location.href;
		var newLinkUrl ="";
		if(linkUrl.indexOf('userId=')!=-1){
			newLinkUrl=linkUrl.replace('userId=1223','userId='+openId);
		}else{
			newLinkUrl=linkUrl+"&userId="+openId;
		}
		/* var callBackUrlComponent = encodeURIComponent(thisUrl);
		while(callBackUrlComponent.indexOf('=') >= 0)
			callBackUrlComponent = callBackUrlComponent.replace('=','%3D');
		if(linkUrl.indexOf('callBackUrl=')!=-1){
			newLinkUrl=newLinkUrl.replace('callBackUrl=','callBackUrl='+callBackUrlComponent);
		}else{
			newLinkUrl=newLinkUrl+"&callBackUrl="+callBackUrlComponent;
		} */
		$('#ckxq').click(function(){
			recordClick('productionClic'+id);
			window.location.href=newLinkUrl;
		});
		$('#longimg').click(function(){
			recordClick('productionClic'+id);
			window.location.href=newLinkUrl;
		});
	}
Array.prototype.remove=function(dx)
{
    if(isNaN(dx)||dx>this.length){return false;}
    for(var i=0,n=0;i<this.length;i++)
    {
        if(this[i]!=this[dx])
        {
            this[n++]=this[i];
        }
    }
    this.length-=1;
};
function hideMore(){
	$(".moreZixun").hide();
}
function readMoreFeeds(){
	window.location.href="https://sales.yun.pingan.com/family_chat/shop/infoList.jsp?typeNum=1";
}
function hideScreenShotGuide() {
	localStorage.setItem('screenShot_guide',"true");
	$("#guideScreenShot").hide();
}
</script>
<script id="hot-activity" type="text/html">
var item = this;
var hasOrNot = false;
for(var j = 0; j < item.length; j++){
	if(infoId==item[j].content_id){
		hasOrNot = true;
		item.remove(j);
	}
}
if(!hasOrNot){
	if(item.length==4){
		item.remove(3);
	}
}

if(item.length>0){
<ul>
for(var i = 0; i < item.length; i++){
	<li><a onclick="goTOThisContent('#{item[i].content_id}','#{item[i].activity_type}')"><span>#{item[i].title}</span>
			<div style="margin-right: 10px;background-image:url(#{item[i].photo});height:50px;width:67px;float: right;  margin-top: -50px;background-size: cover;background-position: center;">
			</div>

	</a></li>
}
</ul>
}


</script>
<script id="more-activity-toshow" type="text/html">
<div class="moreZixun">
	<div class="wrap-more">
		<sapn class="title-zixun"><i class="biaoji"></i>精彩文章</sapn>
		<i class="more-zixun-del" onclick="hideMore()"></i>
		<ul class="moreZixunUL">
			for(var i =0;i<this.length;i++){
				<li onclick="gotoZinxunDetail('#{this[i].type}','#{this[i].id}','#{this[i].ysopenID}')">#{this[i].title}</li>
			}
		</ul>
        <div style="text-align:center">
		<sapn class="more-zixun" onclick="readMoreFeeds()">查看更多</sapn>
        </div>
	</div>
</div>
</script>
</html>
