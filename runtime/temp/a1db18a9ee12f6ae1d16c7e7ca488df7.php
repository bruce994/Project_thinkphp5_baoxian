<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/var/www/html/www/whyaojin.cn/application/index/view/member_pingan.html";i:1507908135;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>我的微站22323</title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/bxsp/cate.css" rel="stylesheet" type="text/css" />
<link href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/bxsp/iscroll.css" rel="stylesheet" type="text/css" />
<link href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/infoList-min.css" rel="stylesheet" type="text/css" />
<style>
</style>
<script src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/bxsp/iscroll.js" type="text/javascript"></script>
<script type="text/javascript">
var myScroll;
function loaded() {
    myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';

    }

    });

}
document.addEventListener('DOMContentLoaded', loaded, false);
</script>
<script type="text/javascript">
window.onload=function(){
var cc=document.getElementById("dd").getElementsByTagName("a")[0].offsetHeight;
document.getElementById("dd").getElementsByTagName("a")[1].style.height=[(cc-6)/3]+"px";
document.getElementById("dd").getElementsByTagName("a")[2].style.height=[(cc-6)/3]+"px";
document.getElementById("dd").getElementsByTagName("a")[3].style.height=[(cc-6)/3]+"px";

}
</script>
</head>
<body>
<!--music-->
<div class="banner">
    <div id="wrapper">
        <div id="scroller">
            <ul id="thelist">
                <?php if(is_array($ads) || $ads instanceof \think\Collection || $ads instanceof \think\Paginator): $i = 0; $__LIST__ = $ads;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li><img src="<?php echo $vo['picurl']; ?>" /></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div id="nav">
        <div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,2);return false">&larr; prev</div>
        <ul id="indicator">
            <li class="active" ></li></ul>
        <div id="next" onclick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div>
    </div>
    <div class="clr"></div>
</div>
<div id="insert1" ></div>
<ul  class="mainmenu" id="dd">
    <li><a href="<?php echo url("member/index",['mid'=>$member['m_id'],'act'=>'edit','wecha_id'=>$user['wecha_id']]); ?>" ><img src="../<?php if($user['picurl'] != ''): ?><?php echo $user['picurl']; else: ?><?php echo $user['wechahead']; endif; ?>" /><p>关于</p></a></li>

    <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <li><a href="<?php echo url("article/index",['mid'=>$member['m_id'],'typeid'=>$vo['id']]); ?>" ><img src="<?php echo $vo['picurl']; ?>" /><p><?php echo $vo['title']; ?></p></a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>

</ul>



    <div data-role="content" id="infoData" class="ui-content" role="main">
            <div id="infoType0" style="padding-bottom:10px;">
                <ul class="img_list" id="infoData0">
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="my_li" style="position: relative;"><a href="<?php echo url("article/content",['mid'=>$member['m_id'],'id'=>$vo['id']]); ?>" target="_self" class="ui-link"><div class="huiyuan-show" style="display: none;"></div><img class="my_img" src="<?php echo $vo['picurl']; ?>"><div style="height:57px;overflow:hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;line-height:24px;padding-top:5px;"><div class="li_title" style="color:#333;"><?php echo $vo['title']; ?></div></div><div class="li_tip"><span class="fr" style="margin-right:15px;"><div class="show-litter-png1" style="background-position: 0 -24px;width: 18px;margin-right:5px;"></div><span style="display:inline-block;height:20px;line-height:20px;font-size:15px;"><?php echo $vo['share']; ?></span></span><span class="m_r12"><div class="show-litter-png1" style="background-position: 0 -1px;width: 18px;margin-right:5px;"></div><span style="display:inline-block;height:20px;line-height:20px;font-size:15px;"><?php echo $vo['view']; ?></span></span><span></span></div></a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>
    </div>

<div style="text-align:center;">
    <?php echo $list->render(); ?>
</div>



<div style="height:50px;"></div>





<script>
var count = document.getElementById("thelist").getElementsByTagName("img").length;
var count2 = document.getElementsByClassName("menuimg").length;
for(i=0;i<count;i++){
    document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
setInterval(function(){
        myScroll.scrollToPage('next', 0,400,count);

        },3500 );
window.onresize = function(){
    for(i=0;i<count;i++){
        document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

    }
    document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
    var cc=document.getElementById("dd").getElementsByTagName("a")[0].offsetHeight;
    document.getElementById("dd").getElementsByTagName("a")[1].style.height=[(cc-6)/3]+"px";
    document.getElementById("dd").getElementsByTagName("a")[2].style.height=[(cc-6)/3]+"px";
    document.getElementById("dd").getElementsByTagName("a")[3].style.height=[(cc-6)/3]+"px";
}
</script>

<div class="copyright"><a href="http://wap.koudaitong.com/v2/goods/3nwksww7phuvv" ><img

        src="/bxsp/image/047bu.jpg" width="100%"></a>

</div>


<!--微信分享-->
<?php
if($member['m_appid'] && $member['m_appsecret']){
require_once "public/weixin/jssdk.php";
$jssdk = new JSSDK($member['m_appid'], $member['m_appsecret']);
$signPackage = $jssdk->GetSignPackage();
?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript">
wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: '<?php echo $signPackage["timestamp"];?>',
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: ['onMenuShareAppMessage','onMenuShareTimeline', 'onMenuShareQQ','onMenuShareQZone']
});

wx.ready(function () {
var shareData = {
title: '欢迎关注<?php echo $user['username']; ?>保险微名片',
desc: '<?php echo $user['summary']; ?>',
link: '<?php echo config('config.ss_site_domain'); ?><?php echo url("member/index",["mid"=>input("mid"),"id"=>input("id"),"openid"=>$user['wecha_id']]); ?>',
imgUrl: '<?php echo $user['wechahead']; ?>'
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

<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<style type="text/css">
body { margin-bottom:60px !important;  }
a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0);  }
ul, li { list-style:none; margin:0; padding:0  }
.top_bar { position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif;  }
.top_menu {position:fixed; bottom:0; display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 48px; display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1) inset; }
.top_bar .top_menu>li { -webkit-box-flex:1; position:relative; text-align:center;  }
.top_menu li:first-child { background:none;  }
.top_bar .top_menu>li>a { height:48px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1;  }
.top_bar .top_menu>li.home { max-width:70px  }
.top_bar .top_menu>li.home a { height: 60px; width: 60px; margin: auto; border-radius: 60px; position: relative; top: -14px; left: 5px; background: url('<?php echo config('config.ss_site_domain'); ?>application/index/view/static/bxsp/home.png') no-repeat center center; background-size: 100% 100%;  }
.top_bar .top_menu>li>a label { overflow:hidden; margin: 0 0 0 0; font-size: 12px; display: block !important; line-height: 18px; text-align: center;  }
.top_bar .top_menu>li>a img { padding: 3px 0 0 0; height: 24px; width: 24px; color: #fff; line-height: 48px; vertical-align:middle;  }
.top_bar li:first-child a { display: block;  }
.menu_font { text-align:left; position:absolute; right:10px; z-index:500; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); border-radius: 5px; width: 120px; margin-top: 10px; padding: 0; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);  }
.menu_font.hidden { display:none;  }
.menu_font { top:inherit !important; bottom:60px;  }
.menu_font li a { height:40px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1;  }
.menu_font li a { text-align: left !important;  }
.top_menu li:last-of-type a { background: none;  }
.menu_font:after { top: inherit!important; bottom: -6px; border-color: #48403c rgba(0, 0, 0, 0) rgba(0, 0, 0, 0); border-width: 6px 6px 0; position: absolute; content: ""; display: inline-block; width: 0; height: 0; border-style: solid; left: 80%;  }
.menu_font li { border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(0, 0, 0, 0.2);  }
.menu_font li:first-of-type { border-top: 0;  }
.menu_font li:last-of-type { border-bottom: 0;  }
.menu_font li a { height: 40px; line-height: 40px !important; position: relative; color: #fff; display: block; width: 100%; text-indent: 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;  }
.menu_font li a img { width: 20px; height:20px; display: inline-block; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle;  }
.menu_font>li>a label { padding:3px 0 0 3px; font-size:14px; overflow:hidden; margin: 0;  }
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000;  }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0;  }
.top_bar .top_menu>li>a:hover, .top_bar .top_menu>li>a:active { background-color:#333;  }
.menu_font li a:hover, .menu_font li a:active{ background-color:#333;  }
.menu_font li:first-of-type a { border-radius:5px 5px 0 0;  }
.menu_font li:last-of-type a { border-radius:0 0 5px 5px;  }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800;  }
#cate18 .device {bottom: 49px;}
#cate18 #indicator {bottom: 240px;}
#cate19 .device {bottom: 49px;}
#cate19 #indicator {bottom: 330px;}
#cate19 .pagination {bottom: 60px;}

.list-t li{
    padding:10px;
    line-height: 18px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}


.list-t li a{
    color: #333;
    font-size:16px;
}

.list-t li a:hover{
    color: red;
    text-decoration: underline;
}






</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
    <nav>
        <ul id="top_menu" class="top_menu">

            <li class="home"><a href="<?php echo url("article/index",['mid'=>$member['m_id']]); ?>"></a></li>
            <li> <a href="tel:<?php echo $user['tel']; ?>"><img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/bxsp/plugmenu1.png"><label>电话咨询</label></a></li>
            <li> <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $user['qq']; ?>&site=qq&menu=yes&wecha_id="><img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/bxsp/qq.png" width="56" height="56">
                <label>ＱＱ咨询</label></a></li>
            <li> <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal1"    ><img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/bxsp/plugmenu15.png"><label>微信咨询</label></a></li>
            <!-- <li> <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal2" ><img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/bxsp/plugmenu19.png"><label>公司地址</label></a></li>-->
            <li> <a href="<?php echo url("member/index",['mid'=>$member['m_id'],'act'=>'edit','wecha_id'=>$user['wecha_id']]); ?>"  ><img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/bxsp/plugmenu19.png"><label>个人中心</label></a></li>
        </ul>
    </nav>
</div>
<div id="plug-wrap" onclick="closeall()" style="display: none;"></div>
<script>
function displayit(n)
{
    for(i=0;i<4;i++){
        if(i==n){
            var id='menu_list'+n;
            if(document.getElementById(id).style.display=='none'){
                document.getElementById(id).style.display='';
                document.getElementById("plug-wrap").style.display='block';

            }else{
                document.getElementById(id).style.display='none';
                document.getElementById("plug-wrap").style.display='none';

            }

        }else{
            if($('#menu_list'+i)){
                $('#menu_list'+i).css('display','none');

            }

        }

    }

}
function closeall()
{
    var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
    for(i=0;i<count;i++){
        document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';

    }
    document.getElementById("plug-wrap").style.display='none';

}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        WeixinJSBridge.call('hideToolbar');

        });
</script>


<link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/bootstrap/css/bootstrap.min.css">
<script src="<?php echo config("config.ss_web_root"); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="<?php echo config("config.ss_web_root"); ?>/bootstrap/js/bootstrap.min.js"></script>
<!--dialog-->
<div id="myModal1" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body" style="text-align:center;">
                <img src="<?php echo $user['wxPicurl']; ?>" />
            </div>
            <div class="modal-footer" style="text-align:center;">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    关闭</button>
            </div>
        </div>
    </div>
</div>

<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body" style="text-align:center;">
                <?php echo $user['address']; ?>
            </div>
            <div class="modal-footer" style="text-align:center;">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    关闭</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
