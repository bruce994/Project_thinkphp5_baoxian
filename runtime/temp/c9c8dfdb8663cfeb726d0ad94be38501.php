<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/var/www/html/www/whyaojin.cn/application/index/view/article_index.html";i:1507610103;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/iscroll-min.js" ></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/sales-common-min.js" ></script>
<script src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/idangerous.swiper.min-2.4.1.js"></script>
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/ace-template-min.js"></script>
<link rel="stylesheet" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/jquery.mobile.structure-1.4.5.min.css?id=35" />
<link rel="stylesheet" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/my-theme.min.css" />
<link rel="stylesheet" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/idangerous.swiper.css">
<link rel="stylesheet" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/infoList-min.css" >
<script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/fc_msg-min.js"></script>
<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<title>资讯列表</title>
<style type="text/css">
    .hot-chanpintuiguang{
      position: absolute;
      width: 23px;
      height: 23px;
      background-size: 100%;
      background-image: url(images/personalCenterNew.png?v=1);
      background-repeat: no-repeat;
      background-position: 0 -435px;
      right: 5px;
      top: -2px;
    }
    .ui-block-b{
        position: relative !important;
    }
    .out {
        display: none;
    }
    .lableTit {
        border: 1px solid #ff4e00;
        padding: 2px 11px;
        text-align: center;
        border-radius: 15px;
        color: #FF4E00;
        font-size: 10px;
        line-height: 12px;
        font-weight: 300;
        height: 12px;
        display: inline-block;
        transform: translateY(-23%);
    }
    .lableTit span {
        position: relative;
        top: 1.5px;
    }

</style>
</head>
<body style="padding:0; margin:0;overflow: hidden;">
<input type="hidden" id="feeds-time" value="0"/>
<input type="hidden" id="feeds-time-up" value="0"/>
<!-- 代言人 -->

<!-- 积分 -->

<!-- 功能 -->

<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/discover.css" />
    
        
    </head>
    <body>
        <div id="wrap2" class= "dsn"> 
            
            <div class="icon-qx" id="iconQx">
            </div>
            
            <div id="jifen">
                <img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/discover0822.png"/>
            </div>
                
            <div class="join" id="join">
                <a href="#">
                    <img src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/look0822.png" alt="" />
                </a>
            </div>
        </div>
    
        
        <script>
            /* window.onload = function() {
                var swiper = document.getElementById("swiper");
                var scale = window.screen.height / window.screen.width;
                swiper.style.height = document.body.clientWidth * scale + "px";
            } */
            $("#iconQx").on("click", function(e){
                $("#wrap2").hide();
            });
            $("#join").on("click", function(e){
                $("#wrap2").hide();
            });
            
            /* if(localStorage.getItem('wrap2')!=1){    */
             
            /*    $("#wrap2").removeClass('dsn');   */ 
            /*  localStorage['wrap2'] = '1';
                return;
            }     */

         /*     var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                //spaceBetween: 30,
                centeredSlides: true,
                autoplay: 3000,
                autoplayDisableOnInteraction: false,
                slidesPerView: 1,
                loop:true
                
            });  */
        </script>
    </body>
</html>  
<!-- 会员 -->

<div id="publishItem" cellspacing="0" style="display: none;z-index: 9999999;width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; background: rgba(0, 0, 0, 0.8);">
        <div style="position: fixed; top:30%; left:0; width:100%;">
                <div style="text-align: center;color: #fff;font-size:16px;">
                    <p style="text-shadow:none;">写好的文章发到朋友圈都可以带名片</p>
                    <p style="text-shadow:none;">传播哦~！</p>
                </div>
                 <div style="width: 230px;margin: 0 auto;">
                          <div style="width:76px; float:left;">
                            <a href="<?php echo url("article/content",["act"=>"edit","mid"=>$fan["mid"]]); ?>" target="_self">
                                   <div class="new-article-load" style="background-position: 0 -617px;"></div>
                                   <p style="text-align:center;text-shadow:none; font-size:16px;color:#fff;width:70px;">原创</p>
                              </a>
                          </div>  
                          <div style="width:76px; float:left;  margin-left: 75px;">
                          <!-- testShare.jsp -->
                             <a href="<?php echo url("article/reprint",["mid"=>$fan["mid"]]); ?>" target="_self" >
                                   <div class="new-article-load" style="background-position: 0 -535px;"></div>
                                   <p style="text-align:center;text-shadow:none; font-size:16px;color:#fff;width:70px;">转载</p>
                              </a>
                          </div>
                          <div style="clear:both"></div>
                          <div style="text-align: center;font-family: '微软雅黑';color: #fff;font-size:14px; margin-right:-40px; margin-left: -40px;">
                                <p>去pc端编辑原创文章<br>
                                在pc端输入网址登陆后发布文章<br>
                                <?php echo config("config.ss_site_domain"); ?>index.php/member/</p>
                          </div>
                          <div style="width:100%;text-align:center;margin-top: 20px;">
                                <div class="new-article-load" style="background-position: -20px -333px;width: 25px;height:25px;background-size: 250%;" onclick="publish()"></div>
                          </div>
                 </div>
        </div>
</div>
<!-- <div class="add-article" onclick="doNewArticle();">

</div> -->
<form onsubmit="return false;" class="out">
<div class="serDiv2">
    <input class='serInput2'  placeholder="" style="
  width: 92%;
  height: 26px;
  border-radius: 5px;
  margin: 0 auto;
  border: 1px solid #dedfe0;
  outline: none;
  resize: none;
  text-align: center;
  -webkit-appearance: none;
  appearance: none;
  -webkit-box-shadow: none;
  box-shadow: none;
">
    <div ><span class="find-icon" style="color:#a9a9a9">请输入文章标题的关键词</span></div>
    <div id="serInputTip2" style="display:none;"><span id="serSpan2" onclick="qingkongSerInput()"></span></div>
</div>
</form>
<div data-role="page" data-theme="a">
<div data-role="header"   style="border-bottom-width: 0px;background:#fff;text-shadow:none;height:38px;display:-webkit-box;z-index: 99; top: -1px;padding-top: 1px;left: 0;right: 0; width: 100%; position: fixed;border-width: 1px 0;border-style: solid; border-bottom: 0px;" id="headerId2">
    <div style="width:22%"><a style="left:0;border-style:none;width:100%;padding:0;margin:0; background: #fff; height: 38px; font-size:14px; line-height:38px;" id="tabType20" href="#" onclick="changeTypes(0);">全部</a></div>
    <div style="height:38px;margin:0;width:66%;float:right;position:fixed;">
        <div id="info_type2" class="ui-grid-c" style="display:none;"></div>
        <div id="info_type_onerow2" class="ui-grid-c"></div>
    </div>
    <div style="float:left;width:12%;z-index:2;position:absolute;right:0;padding-right:5px;" onclick="unfoldMenu2()" class="mynav">
    <div  id="arrow2" style="width: 20px;height: 20px;margin-top: 9px;background-image: url('<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/litter_f.png?id=35');background-repeat: no-repeat;background-position: -30px -808px;background-size: 400%;display: inline-block;"></div>
    </div>
</div>
<div id="newScroll">
<div id="inScroll" style="position:relative;">
    <div class="slide in" id="slide">
    <div  style="border-bottom-width: 0px;text-shadow:none;height:38px;display:-webkit-box;z-index: 99; font-weight: bold; color: #FFF;top: -1px;padding-top: 1px;left: 0;right: 0; width: 100%; position: fixed;border-width: 1px 0;border-style: solid; border-bottom: 0px;" id="headerId">
        <div style="width:22%; text-align: center;"><a style="left:0;border-style:none;width:100%;padding:0;margin:0;height: 38px; font-size:14px; line-height:38px; color: #FFF;" id="tabType0" href="#" onclick="changeTypes(0);">全部</a></div>
        <div style="height:38px;margin:0;width:66%;float:right;position:fixed;">
            <div class="info_type" class="ui-grid-c" style="display:none;"></div>
            <div class="info_type_onerow" class="ui-grid-c"></div>
        </div>
        <div style="float:left;width:12%;z-index:2;position:absolute;right:0;padding-right:5px;" onclick="unfoldMenu()" class="mynav">
        <div  id="arrow" style="width: 20px;height: 20px;margin-top: 9px;background-image: url('<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/litter_f.png?id=35');background-repeat: no-repeat;background-position: -30px -469px;background-size: 400%;display: inline-block;"></div>
        </div>
    </div>
        <div class="img-div" id="imgArr">
            
        </div>
        <div class="slide-btn" id="iconInfo">
            
        </div>
        <form onsubmit="return false;" class="in">
        <div class="serDiv">
            <input class='serInput'  placeholder="" style="
          width: 92%;
          height: 26px;
          border-radius: 5px;
          margin: 0 auto;
          border: 1px solid #dedfe0;
          outline: none;
          resize: none;
          text-align: center;
          -webkit-appearance: none;
          appearance: none;
          -webkit-box-shadow: none;
          box-shadow: none;
          opacity: 0.45;
          background-color: #FFF;
        ">
            <div ><span class="find-icon">请输入文章标题的关键词</span></div>
            <div id="serInputTip" style="display:none;"><span id="serSpan" onclick="qingkongSerInput()"></span></div>
        </div>
        </form>
    </div>
    <div data-role="content" id="infoData">
        <div id="infoType0" style="padding-bottom:10px;">
            <ul class="img_list" id="infoData0">
                
            </ul>
        </div>
    </div>
    
</div>
</div>
<div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footerId" style="border:none;">

</div>
</div>

    
    
    
    
    
    
    
<div style="z-index: 999999;">  
    


<!-- #ff4e00 -->
    <div style="width: 100%;height:60px;border-top:1px solid #f1f1f1;background:#fff;color: #888888;font-family: '微软雅黑';font-size: 12px;position: fixed;bottom: 0px;text-align: center;" >
        <div id="tab1" style="float:left;text-align: center;padding:10px auto;padding-bottom: 10px;margin-left:20px;" onclick="window.location.href='<?php echo url("article/index",['mid'=>$fan['mid']]); ?>'">
            <div id="tabImage1" style="background: url(<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/litter_f.png) no-repeat;background-size:265%;width: 40px;height: 40px;display:inline-block;background-position: -30px -80px ;"></div>
            <div class="clBar" style="text-align: center;">                 
                <span id="tabText1" style="display: inline-block;">资讯素材</span>
            </div>
        </div>
        <div id="tab2" style="float:left;text-align: center;padding:10px auto;padding-bottom: 10px;" onclick="window.location.href='<?php echo url("poster/index",['mid'=>$fan['mid']]); ?>'">
            <div id="tabImage2" style="background: url(<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/litter_f.png) no-repeat;background-position:center;background-size:265%;width: 40px;height: 40px;display:inline-block;background-position:-32px -184px"></div>
            <div  class="clBar" style="text-align: center;">                    
                <span id="tabText2" style="display: inline-block;">海报</span>
            </div>
        </div>
        <div id="tab3" style="float:right;text-align: center;padding:10px auto;padding-bottom: 10px;margin-right:20px;" onclick="location.href='<?php echo url("member/index",['mid'=>$fan['mid']]); ?>'">
            <div id="tabImage3" style="background: url(<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/litter_f.png) no-repeat;background-size:265%;width: 40px;height: 40px;display:inline-block;background-position:-32px -415px"></div>
            <div class="clBar" style="text-align: center;">                 
                <span id="tabText3" style="display: inline-block;">个人中心</span>
            </div>
        </div>
        <div id="tab4" style="float:right;text-align: center;padding:10px auto;padding-bottom: 10px;" onclick="window.location.href='<?php echo url("article/index",['mid'=>$fan['mid']]); ?>'">
            <div id="tabImage4" style="background: url(<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/litter_f.png) no-repeat;background-size:265%;width: 40px;height: 40px;display:inline-block;background-position: -33px -305px;"></div>
            <div  class="clBar" style="text-align: center;">                    
                <span id="tabText4" style="display: inline-block;">行业动态</span>
            </div>
        </div>
        <div style=""></div>
        <div id="pencilIcon" style="display:inline-block;border: 4px solid #ff4e00;background-color:#ff4e00;background-image: url(<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/litter_f.png);background-repeat: no-repeat;background-size:200%;width: 46px;height:46px;border-radius:27.5px;margin-top: -10px;background-position: -23px -417px;"
             onclick="publish()">
        </div>
    </div>

    <script type="text/javascript" src="<?php echo config('config.ss_site_domain'); ?>application/index/view/static/family_chat/isblack.js"></script>
</div>  

<!-- <div id="guidelines"; style="background: rgba(0, 0, 0, 0.6); background-size: contain;">
    <div style="position: fixed; right: -84px;top: 10px;">
        <img src="images/noviceGuidelines_1.png" style="width: 60%; ">
    </div>
    <div style="position: fixed; right: -83px;top: 164px; ">
        <img src="images/noviceGuidelines_2.png" style="width: 60%; ">
    </div>
    <div style="position: fixed; bottom: 20% ; width: 100%; text-align: center;">
        <img src="images/noviceGuidelines_3.png" style="width: 37%; ">
    </div>
</div>  -->


    
<!--蒙层新手指引  -->
  <!-- <div id="guidelinesStep2"; style="background: rgba(0, 0, 0, 0.6); background-size: contain;display:none;">
    <div style="position: fixed;top: 100px;  width: 100%;">
        <img src="images/font2.png" style="width: 60%; ">
        <div class="load-share-ceng" style="width: 100%;background-position: 0 -15px;">
            <div style="padding-top:67%"></div>
        </div>
    </div>
    <div style="position: fixed;left: 22px;bottom: 10%;" onclick="guidelinesNotips();">
        <img src="images/notips.png" style="width: 60%; ">
        <div class="load-share-ceng" style="width: 117px;background-position:-194px -250px;background-size: 280%;">
            <div style="padding-top:42%"></div>
        </div>
    </div>
    <div style="position: fixed;right: 22px;bottom: 10%;" onclick="guidelinesTry();">
        <img src="images/try.png" style="width: 60%; ">
        <div class="load-share-ceng" style="width: 117px;background-position:-16px -250px;background-size: 280%;">
            <div style="padding-top:42%"></div>
        </div>
    </div>
</div>   -->
<!-- 更换新手指引 -->
    <div id="guidelinesStep1" style="width: 100%;height: 100%;background: rgba(0,0,0,0.8);position: fixed;z-index: 1999;display:none"onclick="guidelinesNotips()">
            <img src="images/backG1.png" style="width: 98%;height: 95%;margin-top: 2%; "/>
    </div> 
    <div id="guidelinesStep3" style="width: 100%;height: 100%;background: rgba(0,0,0,0.9);position: fixed;z-index: 1999;text-align:center;display: none;">
            <img src="images/cancelmengceng.png" style="width:35px;height:35px;position:absolute;;display:inline-block;top:45px;right:20px;" onclick="cancelGuides();"/>
            <img src="images/tuiguangmengceng.png" style="width: 90%;height:66%;margin-top:12%;display:inline-block;"/>
            <!-- <img src="images/cancelmengceng.png" style="width: 20%;height:14%;margin-top:12%;display:inline-block;"/> -->
            <div style="display: inline-block;width: 140px;height:40px;background-image:url(images/yuanjiao.png);background-repeat:no-repeat;
                    margin-top:35px;background-size:contain;color:#ffc001;text-align:center;line-height:40px;font-size:22px;
                    text-shadow:none;" onclick="golooklook();">去看看</div>
    </div>
</body>
<script type="text/javascript">



var page = 1, pageSize = 7, imgWidth;
var infoType = "";
var mScroll="", mySwiper="", isPullUp=false;
var isFirst = 1;
var titleArray = new Array();
var typeArray = new Array();
var comeFlag = "";
var rows;
var isCheck = "Y";
var microshopCard ={};

var isMenuUnfolded = false;
var isLoading = false;
var storage = window.localStorage;
var backUPStr = "";

var shareURl = "https://sales.yun.pingan.com/family_chat/shop/infoList.jsp";

var imgUrl = "https:\/\/" + document.domain + "/family_chat/ask/images/lueSt.jpg";
var jiejueShuju = 0;
var typeNum ="null";
if(typeNum=='1'){
    addCookie("tabType", "发现", 0);
}else if(typeNum=='2'){
    addCookie("tabType", "产品推广", 0);
}
//下方加载导航样式
$('#tabImage1').css('background-position','-31px -26px');
$('#tabText1').css('color','#ff4e00');
$('.clBar').css('margin-top','-10px');

function hasCache(){
    return (localStorage.getItem("Content_Cache") || localStorage.getItem("Header_Cache"))&&(localStorage.getItem("articleCache")=="infoList"); 
}
if(hasCache()){
    fcConfirm("您在编辑文章的时候意外退出了，是否需要继续浏览该页面？", function(type) {
        if (type == 'ok') {
            window.location.href='publish.jsp?activeType=1&skipCode=0&from=infoList';
        }
        if(type == "no"){
            localStorage.removeItem("Content_Cache");
            localStorage.removeItem("Header_Cache");
            localStorage.removeItem("Content_ValueCache");
            localStorage.removeItem("articleCache");
        }
    });
}
function unfoldMenu() {
    var type ="11";
    if (isMenuUnfolded) {
        close();
        type ="12";
    } else {
        $('.serInput').blur();
        $('.serInput2').blur();
        $('#headerId').animate({height: 38 * rows + 'px'}, 80);
        $('.info_type').css('display', 'block');
        $('#headerId').css('background-color', 'rgba(0,0,0,0.8)');
        $('.info_type_onerow').css('display', 'none');
        $('#arrow').css('background-position', '-30px -509px');
        isMenuUnfolded = true;
    }
    /*
    $.ajax({
        url: '/family_chat/recordClickCount.do',
        type: 'POST',
        dataType: 'json',
        data: {"url":type}
    });
    */
}
function close() {
    $('.serInput').blur();
    $('.serInput2').blur();
    $('#headerId').animate({height: '38px'}, 80);
    $('.info_type').css('display', 'none');
    $('#info_type2').css('display', 'none');
    $('.info_type_onerow').css('display', 'block');
    $('#headerId').css('background-color', '');
    $('#arrow').css('background-position', '-30px -469px');
    isMenuUnfolded = false;
}
function unfoldMenu2() {
    var type ="11";
    if (isMenuUnfolded) {
        close2();
        type ="12";
    } else {
        $('.serInput').blur();
        $('.serInput2').blur();
        $('#headerId2').animate({height: 38 * rows + 'px'}, 80);
        $('#info_type2').css('display', 'block');
        $('#info_type_onerow2').css('display', 'none');
        $('#arrow2').css('background-position', '-30px -848px');
        isMenuUnfolded = true;
    }
    $.ajax({
        url: '/family_chat/recordClickCount.do',
        type: 'POST',
        dataType: 'json',
        data: {"url":type}
    });
}
function close2() {
    $('.serInput').blur();
    $('.serInput2').blur();
    $('#headerId2').animate({height: '38px'}, 80);
    $('.info_type').css('display', 'none');
    $('#info_type2').css('display', 'none');
    $('#info_type_onerow2').css('display', 'block');
    $('#arrow2').css('background-position', '-30px -808px');
    isMenuUnfolded = false;
}


/* $('#guidelines').click(function() {
    $("#guidelines").hide();
    storage.setItem("isFirst", false);
}); */

function doNewArticle(){
    recordClick('52');
     if(isCheck=='N'){
        $("#send-message").css("display","block");
        return ;
    }
    publish();  
}
//打开原创和转发
var isOpen = false;
function publish(){
    recordClick('52');
     if(isCheck=='N'){
            $("#send-message").css("display","block");
            return ;
    }
    if(isOpen){
        $("#publishItem").hide();
//          $("body").unbind("touchmove");
        isOpen = false;
        $("#footer").show();
        $(document).data("lockScreen",false);//取消锁屏
    }else {
        $(document).data("lockScreen",true);//锁屏
        $("#footer").hide();
        $("#publishItem").show();
//          $("body").bind("touchmove",function(event){event.preventDefault;});
        isOpen = true;
    }
}





//初始化分类信息
function initClassDefinition() {
    //showLoader();
    $("#bgAlert").css("display","block");   0
    var uploadHeight=($(window).height()-$("#uploading").height())/2;
    $("#uploading").css("margin",uploadHeight+"px auto");
    var url = "<?php echo url("article/index",["act"=>"type","mid"=>$fan["mid"]]); ?>";
    
    $.ajax({
        url : url,
        type : 'POST',
        dataType : 'json',
        async : true,
        success : function(data) {
            //hideLoader();
            $("#bgAlert").css("display","none");

                var classDefinition = data.classDefinition;
                var classDefinitionList = "";
                var classDefinitionList2 = "";
                var infoDataList = "";
                var infoDataList2 = "";
                typeArray.push("全部");

                for (var i = 0; i < classDefinition.length; i++) {
                    var j = i + 1;
                    classDefinitionList += "<div class=\"ui-block-" + getGridIndex(i) + "\" row=\"" + getRow(i) + "\" style=\"width:33.3%;float:left;\" id=\"slide"+i+"\">"+
                    "<a class=\"mynav\" id=\"tabType"+j+"\" "+(j==1?"style='position: relative;'":"")+" href=\"#\" onclick=\"changeTypes('"+j+"');\" data-ajax=\"false\">"+(classDefinition[i].consultTypeName!='发现'?(classDefinition[i].consultTypeName!="产品推广"?classDefinition[i].consultTypeName:classDefinition[i].consultTypeName+"<i class='hot-chanpintuiguang'></i>"):classDefinition[i].consultTypeName+"<i class='diandian-feed'></i>")+"</a>"+
                    "</div>";
                    classDefinitionList2 += "<div class=\"ui-block-" + getGridIndex(i) + "\" row=\"" + getRow(i) + "\" style=\"width:33.3%;\" id=\"slide"+i+"\">"+
                    "<a class=\"mynav\" id=\"tabType2"+j+"\" "+(j==1?"style='position: relative;'":"")+" href=\"#\" onclick=\"changeTypes('"+j+"');\" data-ajax=\"false\">"+(classDefinition[i].consultTypeName!='发现'?(classDefinition[i].consultTypeName!="产品推广"?classDefinition[i].consultTypeName:classDefinition[i].consultTypeName+"<i class='hot-chanpintuiguang'></i>"):classDefinition[i].consultTypeName+"<i class='diandian-feed'></i>")+"</a>"+
                    "</div>";
                    if(j!=1){
                        infoDataList += "<div id=\"infoType"+j+"\" style=\"padding-bottom:10px;\"><ul class=\"img_list\" id=\"infoData"+j+"\"></ul></div>";
                    }else{
                        //如果是发现栏目，顶部新增下拉加载更多
                        infoDataList += "<div id=\"infoType"+j+"\" style=\"padding-bottom:10px;\"><div id=\"pullDown\" style=\"text-align: center;\"><span class=\"pullDownIcon\"></span><span class=\"pullDownLabel pullDownLabelloading\">下拉刷新...</span></div><ul class=\"img_list\" id=\"infoData"+j+"\"></ul></div>";
                    }
                    typeArray.push(classDefinition[i].consultTypeName);
                }
                $(".info_type").append(classDefinitionList);
                $(".info_type").trigger("create");
                $("#info_type2").append(classDefinitionList2);
                $("#info_type2").trigger("create");
                $("#infoData").append(infoDataList);
                $("#infoData").trigger("create");
                
                mySwiper = new Swiper('.swiper-container', {
                    paginationClickable : true,
                    slidesPerView : 4
                });
                initData();
                var rowsTemp = parseInt(classDefinition.length / 3);
                if (classDefinition.length % 3 != 0) {
                    rows = rowsTemp + 1;
                } else {
                    rows = rowsTemp;
                }
        },
        error : function() {
            //hideLoader();
            $("#bgAlert").css("display","none");
        }
    });
}

function getRow(i) {
    var temp = parseInt((i + 1) / 3);
    if ((i + 1) % 3 == 0) {
        return temp - 1;
    } else {
        return temp;
    }
}

function getGridIndex(i) {
    var index = (i + 1) % 3;
    switch (index) {
        case 1: return 'a';
        case 2: return 'b';
        case 0: return 'c';
    }
}

function initNewIScroll(){
    pullDownEl = document.getElementById('pullDown');
    pullDownOffset = pullDownEl.offsetHeight;
    if(mScroll instanceof iScroll){
       mScroll.destroy();
    }
    $("#newScroll").height($(window).height() - 61+25);
    
    mScroll = new iScroll("newScroll",{
    hScrollbar:false,
    vScrollbar:false,
    topOffset: pullDownOffset,
    onRefresh: function () {
     if (pullDownEl.className.match('loading')) {
      pullDownEl.className = '';
      pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
     } 
    },
    onScrollMove: function(){
        if(this.y <= (this.maxScrollY/2-60) && document.getElementById("btnMore")){
            isPullUp = true;
            $("#btnMore").html("正在加载......");
            
        }
        if (this.y > 5 && !pullDownEl.className.match('flip')) {
              pullDownEl.className = 'flip';
              pullDownEl.querySelector('.pullDownLabel').innerHTML = '松手开始更新...';
              this.minScrollY = 0;
        } else if (this.y < 5 && pullDownEl.className.match('flip')) {
              pullDownEl.className = '';
              pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
              this.minScrollY = -pullDownOffset;
        }
    },
    onScrollEnd: function(){
        if(isPullUp && document.getElementById("btnMore")){
            loadMore();
            isPullUp = false;
        }
        if (pullDownEl.className.match('flip')) {
              pullDownEl.className = 'loading';
              pullDownEl.querySelector('.pullDownLabel').innerHTML = '加载中...';
              console.log(isLoading);
             // if(getCookie("tabType")=='发现'&&!isLoading){
              if(!isLoading){
                  console.log("刷新");
                  allInfosByFeeds(); // Execute custom function (ajax call?)
              }
        }
    }
    });
    var scrollPage = parseInt(getCookie('page'));
    var scrollY = parseInt(getCookie('iscrollY'));
    if (scrollPage == 1) {
        mScroll.scrollTo(0, scrollY, 0);
    } else if (scrollPage > 1){
        mScroll.scrollTo(0, mScroll.maxScrollY, 0);
    }
    delCookie('page');
    delCookie('iscrollY');
}

/* function showLoader(){
    $.mobile.loading('show', {
        text: '加载中...',//加载器中显示的文字
        textVisible: false,//是否显示文字
        theme: 'a',//主题样式
        textonly: false,//是否只显示文字
        html: ''//要显示的html内容，如图片
    });
}

function hideLoader(){
    $.mobile.loading('hide');//隐藏加载器
} */

function getInfoData(){
    //showLoader();
/*  $("#bgAlert").css("display","block"); 
    var uploadHeight=($(window).height()-$("#uploading").height())/2;
    $("#uploading").css("margin",uploadHeight+"px auto");*/
    var tp = "";
    if("全部" != infoType){
        tp = infoType;
    }
    var url = "<?php echo url("article/index",["act"=>"list","mid"=>$fan["mid"]]); ?>";
    $.ajax({
        url : url,
        type : 'POST',
        dataType : 'json',
        async : true,
        data : {
            "page" : page,
            "isFirst" : isFirst,
            "pageSize" : pageSize,
            "type" : tp,
            "openid": 'ovOzrs_GVFO4qGMy8aT3I8BkF0do',
            "time":$("#feeds-time").val()
        },
        success : function(data) {
            //把值存在sessionStorage
            clearDIV();
            jiejueShuju = 0;
            data.tp = tp;
            if(tp!="发现"){
                saveDateToSessionStorage(data);
                // 修改位置
                $('#guidelinesStep1').hide();
            }
            //hideLoader();
    /*      $("#bgAlert").css("display","none"); */
            if("200" == data.code){
                if(tp=='发现'){
                    showFeeds(data.body.infoList,data.body.feedsGoodList);
                    return;
                }
                if("1" == isFirst){
                    var upInfos = data.body.upInfos;
                    for(var j = 0; j < upInfos.length; j++){
                        if(tp=='超级推广'){
                            if(upInfos[j].tabNum<5){
                                continue;
                            }
                        }else{
                            if(upInfos[j].tabNum>4){
                                continue;
                            }
                        }
                        var upInfo = upInfos[j];
                        var imgStr = "<a href=\""+upInfo.url+"\"><img src='"+upInfo.coverImgUrl+"'/></a>";
                        $("#imgArr").append(imgStr);
                        $("#imgArr").trigger("create");
                        titleArray.push(upInfo.title);
                        if(j == 0){
                            $("#iconInfo").append("<a href=\"#\" class=\"my-a-style hover\"></a>");
                            $("#iconInfo").trigger("create");
                        }else{
                            $("#iconInfo").append("<a class='my-a-style' href=\"#\"></a>");
                            $("#iconInfo").trigger("create");
                        }
                    }
                    setTimeout(function(){
                        var imgArr = document.getElementById("imgArr").getElementsByTagName("img");
                        for(var k = 0; k < imgArr.length; k++){
                            imgArr.item(k).style.cssText = "width:" + imgWidth + "px";
                        }
                        document.getElementById("imgArr").style.cssText = "width:" + imgWidth * upInfos.length + "px";
                        zBase.init();
                    },500);
                }
                
                var infos = data.body.infoList;
                var bodyStr = "";
                if(infos.length == 0 && page == 1){
                    bodyStr = "<li style=\"text-align:center;margin-top:50px;\"><img src='images/no_result.jpg' style='width:120px;'></li><li style=\"text-align:center;\"><span>该栏目暂无资讯</span></li>";
                }else{
                    for(var i = 0; i < infos.length; i++){
                        var info = infos[i];
                        if(info.shortName ==""){
                            bodyStr += "<li class='my_li' style='position: relative;'>";
                            if(comeFlag == "editor"){
                                bodyStr += "<a href=\"#page1\" onclick=\"gotoSet('"+info.id+"','"+info.title+"','"+info.relayCount+"');\">";
                            }else{
                                bodyStr += "<a href=\"<?php echo url("article/content",['mid'=>$fan["mid"]]); ?>?id="+info.id+"\" target='_self' >";
                            }
                                // 如果超过一万就改成X.X万
                                var rCount = parseInt(info.relayCount) > 10000 ? ((parseInt(parseInt(info.relayCount) / 10000)) + "." + (parseInt(parseInt(info.relayCount) % 10000 / 1000)) + "万") : info.relayCount;
                                var bCount = parseInt(info.browseCount) > 10000 ? ((parseInt(parseInt(info.browseCount) / 10000)) + "." + (parseInt(parseInt(info.browseCount) % 10000 / 1000)) + "万") : info.browseCount;
                        
                                bodyStr += "<div class='huiyuan-show'></div><img class='my_img' src=\""+info.coverImgUrl+"\">"
                                + "<div style=\"height:57px;overflow:hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;line-height:24px;padding-top:5px;\"><div class=\"li_title\" style=\"color:#333;\">"+info.title+"</div>"
                                + "</div>"
                                + "<div class=\"li_tip\"><span class=\"fr\" style=\"margin-right:15px;\"><div class=\"show-litter-png1\" style=\"background-position: 0 -24px;width: 18px;margin-right:5px;\"></div><span style=\"display:inline-block;height:20px;line-height:20px;font-size:15px;\">"+rCount+"</span></span>"
                                + "<span class=\"m_r12\"><div class=\"show-litter-png1\" style=\"background-position: 0 -1px;width: 18px;margin-right:5px;\"></div><span style=\"display:inline-block;height:20px;line-height:20px;font-size:15px;\">"+bCount+"</span></span>"
                                //+ "<span>"+info.createdDate.split(" ")[0]+"</span></div>"
                                + "<span></span></div>"
                                + "</a>"
                                + "</li>";
                        }else {
                            bodyStr += "<li class='my_li' style='position: relative;'>";
                            if(comeFlag == "editor"){
                                bodyStr += "<a href=\"#page1\" onclick=\"gotoSet('"+info.id+"','"+info.title+"','"+info.relayCount+"');\">";
                            }else{
                                bodyStr += "<a href=\"#\" onclick=\"gotoDetailPage('"+info.id+"');\">";
                            }
                                // 如果超过一万就改成X.X万
                                var rCount = parseInt(info.relayCount) > 10000 ? ((parseInt(parseInt(info.relayCount) / 10000)) + "." + (parseInt(parseInt(info.relayCount) % 10000 / 1000)) + "万") : info.relayCount;
                                var bCount = parseInt(info.browseCount) > 10000 ? ((parseInt(parseInt(info.browseCount) / 10000)) + "." + (parseInt(parseInt(info.browseCount) % 10000 / 1000)) + "万") : info.browseCount;
                        
                                bodyStr += "<div class='huiyuan-show'></div><img class='my_img' src=\""+info.coverImgUrl+"\">"
                                + "<div style=\"height:57px;overflow:hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;line-height:24px;padding-top:5px;\"><div class=\"li_title\" style=\"color:#333;\">"+info.title+"</div>"
                                + "</div>"
                                + "<div class=\"li_tip\"><span class=\"fr\" style=\"margin-right:15px;\"><div class=\"show-litter-png1\" style=\"background-position: 0 -24px;width: 18px;margin-right:5px;\"></div><span style=\"display:inline-block;height:20px;line-height:20px;font-size:15px;\">"+rCount+"</span></span>"
                                + "<span class=\"m_r12\"><div class=\"show-litter-png1\" style=\"background-position: 0 -1px;width: 18px;margin-right:5px;\"></div><span style=\"display:inline-block;height:20px;line-height:20px;font-size:15px;\">"+bCount+"</span></span>"
                                //+ "<span>"+info.createdDate.split(" ")[0]+"</span></div>"
                                + "<span></span></div>"
                                +"<div class='lableTit'><span>"+info.shortName+"</span></div>"
                                + "</a>"
                                + "</li>";
                        }
                    }
                }
                
                console.log(typeArray);
                for(var i = 0; i < typeArray.length; i++){
                    if(infoType == typeArray[i]){
                        $("#infoData" + i).append(bodyStr);
                        $("#infoData" + i).trigger("create");
                        if(pageSize == infos.length){
                            var behind = "<dl id = \"btnMore\" style = \"text-align:center;padding-bottom:20px;\">上拉加载更多...</dl>"
                            $("#infoData" + i).append(behind);
                            $("#infoData" + i).trigger("create");
                        }
                        if(getCookie("tabType")=='超级推广'){
                            $(".huiyuan-show").show();
                        }else{
                            $(".huiyuan-show").hide();
                        }
                    }
                }
            
                /* var isFirstIn = storage.getItem("isFirst");
                if(isFirstIn == null) {
                    $("#guidelines").show();
                }  */
            
                
                if(page == 1){
                    setTimeout(function(){initNewIScroll();},500);
                }else {
                    mScroll.refresh();
                }
                isFirst = 2;
            }else{
                alert("系统异常");
            }
        },
        error : function() {
            //hideLoader();
    /*      $("#bgAlert").css("display","none"); */
            alert("网络连接异常，请稍后再试");
        }
    });
}

function cutLittleTitle(title) {
    return title.substring(0, (($(window).width() - 132) / 14));
}

function gotoDetailPage(infoId){

    if(isCheck=='N'){
    //if(isCheck=='Y'){
        $("#send-message").css("display","block");
        return ;
    } 
    recordClick('62');
    $("#isFirstAccess").val(1);
    sessionStorage["infoListPageHeight"]=mScroll.y;
    sessionStorage["infoListJSPDataPage"]=page;
    addCookie('page', page, 0);
    addCookie('iscrollY', mScroll.y, 0);
    
    window.location.href="/family_chat/readArticle/"+infoId+".do?visitTag=agent_jm&"+"id=" + infoId + "&openId=" +"ovOzrs_GVFO4qGMy8aT3I8BkF0do"+"&articleType=3";
}

function gotoSet(infoId,infoTitle,relayCount){
    $("#save_infoId").val(infoId);
    $("#save_infoTitle").val(infoTitle);
    $("#save_relayCount").val(relayCount);
}

function confirmDel(){
    $("#del_infoTitle").text("即将删除资讯："+$("#save_infoTitle").val());
}

function gotoEditorPage(){
    $("#isFirstAccess").val(1);
    sessionStorage["infoListPageHeight"]=mScroll.y;
    sessionStorage["infoListJSPDataPage"]=page; 
    window.location.href="editor.html?infoId=" + $("#save_infoId").val();
}

function deleteInfoById() {
    var delId = $("#save_infoId").val();
    var relayCount = $("#save_relayCount").val();
    if(relayCount > 0){
        alert("用户已经转载该资讯，若有问题请选择编辑");
        return;
    }
    //showLoader();
    $("#bgAlert").css("display","block");
    var uploadHeight=($(window).height()-$("#uploading").height())/2;
    $("#uploading").css("margin",uploadHeight+"px auto");
    var url = "../deleteInfoById.do";
    $.ajax({
        url : url,
        type : 'POST',
        dataType : 'json',
        async : true,
        data : {
            "id" : delId
        },
        success : function(data) {
            //hideLoader();
            $("#bgAlert").css("display","none");
            if("ok" == data.status){
                alert("删除成功");
                window.location.href="infoList.jsp?comeFlag=editor";
            }else if("noPermission" == data.status){
                window.location.href="editor_login.html";
            }else{
                alert("系统异常");
            }
        },
        error : function() {
            //hideLoader();
            $("#bgAlert").css("display","none");
        }
    });
}

function loadMore(){
    page ++;
    $("#btnMore").remove();
    getInfoData();
}
function clearDIV(){
    if(jiejueShuju==1){
        for(var i = 0; i < typeArray.length; i++){
            $("#infoData" + i).empty();
        }
    }
}

function changeTypes(num, isInit){
    $("#feeds-time").val("0");
    $("#feeds-time-up").val("0");
    for(var i = 0; i < typeArray.length; i++){
        if(num == i){
            infoType = typeArray[i];
            $("#tabType" + i).attr("class", "mynav selected");
            $("#tabType" + i).css("color", "#ff500d");
            $("#tabType2" + i).attr("class", "mynav selected");
            $("#tabType2" + i).css("color", "#ff500d");
//          $("#info_type #tabType" + i).attr("class", "mynav selected");
//          $("#info_type #tabType" + i).css("color", "#ff500d");
            $(".info_type_onerow #tabType" + i).attr("class", "mynav selected");
            $(".info_type_onerow #tabType" + i).css("color", "#ff500d");
            $("#info_type_onerow2 #tabType2" + i).attr("class", "mynav selected");
            $("#info_type_onerow2 #tabType2" + i).css("color", "#ff500d");
            $("#infoType" + i).show();
            addCookie("tabType", typeArray[i], 0);
        }else{
            $('.in').show();
            $(".out").hide();
            $("#tabType" + i).attr("class", "mynav");
            $("#tabType" + i).css("color", "#FFF");
            $("#tabType2" + i).attr("class", "mynav");
            $("#tabType2" + i).css("color", "#757575");
//          $("#info_type #tabType" + i).attr("class", "mynav");
//          $("#info_type #tabType" + i).css("color", "#757575");
            $(".info_type_onerow #tabType" + i).attr("class", "mynav");
            $(".info_type_onerow #tabType" + i).css("color", "#FFF");
            $("#info_type_onerow2 #tabType2" + i).attr("class", "mynav");
            $("#info_type_onerow2 #tabType2" + i).css("color", "#757575");
            $("#infoType" + i).css("display","none");
        }
        $("#infoData" + i).empty();
        /*var tempType = typeArray[i];
        if(tempType.length<4 && i>0){
            $("#tabType" + i).addClass("mynav_left");
        } */
    }
    // 将页面存缓存，wk会出现页面请求中～不加载，为避免注释此段代码
//  if($("#isFirstAccess").val()==1){
//      $("#isFirstAccess").val(0);
//      page = sessionStorage["infoListJSPDataPage"];
//      loadOldHTML(getDateFromSessionStorage());
//  }else{
        page = 1;
        getInfoData();
//  }
    if (isInit) {
        changeOneRow(num);
    } else {
        if ($('.info_type_onerow').css('display') != 'block') {
            changeOneRow(num);
            close();
        }
        if ($('#info_type_onerow2').css('display') != 'block') {
            changeOneRow(num);
            close();
        }
        jiejueShuju = 1;
    }
    $(".slide").css("display","");
    $("#headerId2").hide();
    if(num==1){
        $('.in').hide();
        $(".out").hide();
        close();
        close2();
        $("#headerId2").show();
        $("#inScroll").css("padding-top", "31px");
    } else {
        $("#inScroll").css("padding-top", "0px");
    }
}

function changeOneRow(num) {
    if (num == 0) {
        num = 1;
    }
    var rownum = $('#slide' + (num - 1)).attr('row');
    var currentRow = $(".info_type [row='" + rownum + "']");
    var currentRow2 = $("#info_type2 [row='" + rownum + "']");
    $('.info_type_onerow').empty();
    $('#info_type_onerow2').empty();
    for (var m = 0; m < currentRow.length; m++) {
        $('.info_type_onerow').append($(currentRow[m]).clone(false));
        $('#info_type_onerow2').append($(currentRow2[m]).clone(false));
    }
}

function initData(){
    var tabType = getCookie("tabType");
    var num = "0";
    for(var i = 0; i < typeArray.length; i++){
        if(typeArray[i] == tabType){
            num = i;
        }
    }
    if($("#wrap2:visible").length!=0){  
        num="1";
    }
    changeTypes(num, true);
}

//获取session中的登陆状态
function checkLoginStatus(){
    var url = "../getLoginStatus.do";
    $.ajax({
        url : url,
        type : 'POST',
        dataType : 'json',
        async : false,
        success: function(data){
            var loginStatu = data.loginStatu;
            if("true" != loginStatu){
                window.location.href="editor_login.html";
            }
            initClassDefinition();
            imgWidth = $(window).width();
        }
    });
}
function closeDiv(divId){
    $("#"+divId).css("display","none");
}

function goMessage2(){
    var returnUrl = encodeURIComponent(window.location.href);
    window.location.href="../shop/modifyPersonalData.jsp?pagesoure=4&returnUrl="+returnUrl;
}
function goToShop(openID){
    window.location.href="../shop/microshop.jsp?shopid=s_"+openID;
}
$(document).ready(function(){




    //清空搜索框
    $(".serInput").val("");
    $(".serInput2").val("");
        imgWidth = $(window).width();  //by wang
        initClassDefinition();
        loadGuideLines();
        initImgMove();
        //初始化搜索框样式
        initSerInputStyle();
        initSerInputStyle2();

        return;





    //清空搜索框
    $(".serInput").val("");
    $(".serInput2").val("");
    var url = "/family_chat/flagCreateCard.do";
    $.ajax({
        "url" : url,
        type : 'POST',
        dataType : 'json',
        async : false,
        data : {
            "openid" :"ovOzrs_GVFO4qGMy8aT3I8BkF0do"
        },
        "success" : function(data) {
            if(data.cardDTO==null){  //没有微名片
//              window.location.href="../cards/message2.jsp";
                isCheck='N';
                $("#messageTitle").text("设置微名片，转发文章都会带上您的联系方式哦！");
                $("#btnSendCode").text("立即设置");
            }else{
                isCheck=data.cardDTO.isCheck;
                if(isCheck=="N"){
                    $("#messageTitle").text("验证手机号码，客户更方便找到你哦！");  
                    $("#btnSendCode").text("立即验证");
                }
                microshopCard =data.cardDTO;    
                var openId="ovOzrs_GVFO4qGMy8aT3I8BkF0do";
                /* createQrcode(openId); */     
            }
        }
    });
    //下方导航个人中心记录用户是否建立微名片
    $('#tab3').attr('onclick',"window.location.href='/family_chat/shop/personalCenterNew.jsp?isCheck="+isCheck+"'");
    comeFlag = "null";
    if(comeFlag == "editor"){
        checkLoginStatus();
    }else{
        initClassDefinition();

        imgWidth = $(window).width();
        
        
    }
    loadGuideLines();
    
    initImgMove();
    //初始化搜索框样式
    initSerInputStyle();
    initSerInputStyle2();
});

function addCookie(objName, objValue, objHours){ //添加cookie 
    

    var str = objName + "=" + escape(objValue); 
    if (objHours > 0)  
    document.cookie = str; 
} 

function getCookie(objName){   //获取指定名称的cookie的值 
    var arrStr = document.cookie.split("; "); 
    for (var i = 0; i < arrStr.length; i++) { 
        var temp = arrStr[i].split("="); 
        if (temp[0] == objName) 
            return unescape(temp[1]); 
    } 
} 

function delCookie(name){   //为了删除指定名称的cookie，可以将其过期时间设定为一个过去的时间 
    var date = new Date(); 
    date.setTime(date.getTime() - 10000); 
    document.cookie = name + "=a; expires=" + date.toGMTString(); 
} 

var zBase = {
    config:{
        index:0,
        auto:true,
        direct:'left'
    },
    init:function(){
        this.slide = this.$id('slide');
        this.img_div = this.$c('img-div')[0],
        this.slide_btn = this.$tag('a',this.$c('slide-btn')[0]);
        this.img_arr = this.$tag('img',this.img_div);
        if(this.config.auto) this.play();
        this.hover();
    },
    $id:function(id){return document.getElementById(id);},
    $tag:function(tagName,obj){return (obj ?obj : document).getElementsByTagName(tagName);  },
    $c: function (claN,obj){
        var tag = this.$tag('*'),reg = new RegExp('(^|\\s)'+claN+'(\\s|$)'),arr=[];
        for(var i=0;i<tag.length;i++){
            if (reg.test(tag[i].className)){
                arr.push(tag[i]);
            }
        }
        return arr;
    },
    $add:function(obj,claN){
        reg = new RegExp('(^|\\s)'+claN+'(\\s|$)');
        if (!reg.test(obj.className)){
            obj.className += ' '+claN;
        }
    },
    $remve:function(obj,claN){var cla=obj.className,reg="/\\s*"+claN+"\\b/g";obj.className=cla?cla.replace(eval(reg),''):''},
    css:function(obj,attr,value){
        if(value){
            obj.style[attr] = value;
        }else{
            return  typeof window.getComputedStyle != 'undefined' ? window.getComputedStyle(obj,null)[attr] : obj.currentStyle[attr];
       }
    },
    animate:function(obj,attr,val){
        var d = 1000;   //动画时间一秒完成。
        if(obj[attr+'timer']) clearInterval(obj[attr+'timer']);
        var start = parseInt(zBase.css(obj,attr));   //动画开始位置
        //space = 动画结束位置-动画开始位置，即动画要运动的距离。
        var space =  val- start,st=(new Date).getTime(),m=space>0? 'ceil':'floor';
        obj[attr+'timer'] = setInterval(function(){
            var t=(new Date).getTime()-st;   //表示运行了多少时间，
            if (t < d){    //如果运行时间小于动画时间
                zBase.css(obj,attr,Math[m](zBase.easing['easeOut'](t,start,space,d)) +'px');
            }else{
                clearInterval(obj[attr+'timer']);
                zBase.css(obj,attr,top+space+'px');
            }
        },20);
    },
    play:function(){
        this.slide.timer = setInterval(function(){
            zBase.config.index++;
            if(zBase.config.index>=zBase.img_arr.length) zBase.config.index=0;//如果当前索引大于图片总数，把索引设置0
            
            zBase.animate(zBase.img_div,zBase.config.direct,-zBase.config.index*imgWidth);
            for(var j=0;j<zBase.slide_btn.length;j++){
                zBase.$remve(zBase.slide_btn[j],'hover');
            }
            zBase.$add(zBase.slide_btn[zBase.config.index],'hover');
        },3000);
            
            
    },
    hover:function(){
        for(var i=0;i<this.slide_btn.length;i++){
            this.slide_btn[i].index = i;//储存每个导航的索引值
            this.slide_btn[i].onmouseover = function(){
                if(zBase.slide.timer) clearInterval(zBase.slide.timer);
                zBase.config.index =this.index; 
                
                for(var j=0;j<zBase.slide_btn.length;j++){
                    zBase.$remve(zBase.slide_btn[j],'hover') ;
                }
                zBase.$add(zBase.slide_btn[zBase.config.index],'hover');
                zBase.animate(zBase.img_div,zBase.config.direct,-zBase.config.index*imgWidth);
            };
            this.slide_btn[i].onmouseout = function(){
                zBase.play();
            };
        }
    },
    easing :{
        linear:function(t,b,c,d){return c*t/d + b;},
        swing:function(t,b,c,d) {return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;},
        easeIn:function(t,b,c,d){return c*(t/=d)*t*t*t + b;},
        easeOut:function(t,b,c,d){return -c*((t=t/d-1)*t*t*t - 1) + b;},
        easeInOut:function(t,b,c,d){return ((t/=d/2) < 1)?(c/2*t*t*t*t + b):(-c/2*((t-=2)*t*t*t - 2) + b);}
    }
};
function initImgMove(){
    var slidePage = {};
    $('#slide').on('touchstart',function(e) {
        var touch = e.originalEvent.targetTouches[0]; 
        slidePage.x = touch.pageX;
    });
/*  $('#slide').on('touchmove',function(e) {
          var touch = e.originalEvent.targetTouches[0]; 
          var y = touch.pageY;
    }); */
    $('#slide').on('touchend',function(e) {
          var touch = e.originalEvent.changedTouches[0]; 
          var x = touch.pageX;
          if(x - parseInt(slidePage.x)>0){
              //从左往右
                zBase.config.index--;
              if(zBase.config.index < 0)zBase.config.index = zBase.img_arr.length-1;//如果当前索引小于0，把索引设置为最大值
                zBase.animate(zBase.img_div,zBase.config.direct,-zBase.config.index*imgWidth);
                for(var j=0;j<zBase.slide_btn.length;j++){
                    zBase.$remve(zBase.slide_btn[j],'hover');
                }
                zBase.$add(zBase.slide_btn[zBase.config.index],'hover');
                //此时需要重新计时
                clearTimeout(zBase.slide.timer);
                zBase.play();
          }else{
              //从右往左
                zBase.config.index++;
                if(zBase.config.index>=zBase.img_arr.length) zBase.config.index=0;//如果当前索引大于图片总数，把索引设置0
                zBase.animate(zBase.img_div,zBase.config.direct,-zBase.config.index*imgWidth);
                for(var j=0;j<zBase.slide_btn.length;j++){
                    zBase.$remve(zBase.slide_btn[j],'hover');
                }
                zBase.$add(zBase.slide_btn[zBase.config.index],'hover');
                //此时需要重新计时
                clearTimeout(zBase.slide.timer);
                zBase.play();
          }
          console.log(x - parseInt(slidePage.x));
    });
}
function initSerInputStyle(){
    var inputHtml = "";
    $(".serDiv").click(function(){
        //$(".serInput").attr("placeholder","");
        close();
        close2();
        $(".find-icon").css("display","none");
        $(".serInput").focus();
    });
    $('.serInput').bind('keypress',function(event){
        if(event.keyCode==13){
            serThatList();
        }
    });
    $('.serInput').bind("input propertychange", function(){
        var titleKey = $(".serInput").val();
        if(titleKey==""){
            $(".serInput2").val("");
            $("#serInputTip").css("display","none");
            $("#serInputTip2").css("display","none");
            if(backUPStr!=""){
                $(".slide").css("display","");
                $(".out").hide();
                $("#inScroll").css("padding-top", "0px");
                $("#headerId2").hide();
                for(var i = 0; i < typeArray.length; i++){
                    if(infoType == typeArray[i]){
                        $("#infoData" + i).html(backUPStr);
                    }
                }
                mScroll.refresh();
            }
        }else{
            $("#serInputTip").css("display","");
            $("#serInputTip2").css("display","");
        }
    }); 
    $('.serInput').bind("blur", function(){
            var titleKey = $(".serInput").val();
            if(titleKey==""){
                $(".find-icon").css("display","");
                //$(".serInput").attr("placeholder","请输入文章标题的关键词");
                $("#serInputTip").css("display","none");
                $("#serInputTip2").css("display","none");
            }
    });  
}
function initSerInputStyle2(){
    var inputHtml = "";
    $(".serDiv2").click(function(){
        //$(".serInput").attr("placeholder","");
        close();
        close2();
        $(".find-icon").css("display","none");
        $(".serInput2").focus();
    });
    $('.serInput2').bind('keypress',function(event){
        if(event.keyCode==13){
            serThatList2();
        }
    });
    $('.serInput2').bind("input propertychange", function(){
        var titleKey = $(".serInput2").val();
        if(titleKey==""){
            $(".serInput").val("");
            $("#serInputTip").css("display","none");
            $("#serInputTip2").css("display","none");
            if(backUPStr!=""){
                $(".slide").css("display","");
                $(".out").hide();
                $("#inScroll").css("padding-top", "0px");
                $("#headerId2").hide();
                for(var i = 0; i < typeArray.length; i++){
                    if(infoType == typeArray[i]){
                        $("#infoData" + i).html(backUPStr);
                    }
                }
                mScroll.refresh();
            }
        }else{
            $("#serInputTip").css("display","");
            $("#serInputTip2").css("display","");
        }
    }); 
    $('.serInput2').bind("blur", function(){
            var titleKey = $(".serInput2").val();
            if(titleKey==""){
                $(".find-icon").css("display","");
                //$(".serInput").attr("placeholder","请输入文章标题的关键词");
                $("#serInputTip").css("display","none");
                $("#serInputTip2").css("display","none");
            }
    });  
}
function qingkongSerInput(){
    $(".serInput").val("");
    $(".serInput2").val("");
    $(".slide").css("display","");
    $("#headerId2").hide();
    $(".out").hide();
    $("#inScroll").css("padding-top", "0px");
    for(var i = 0; i < typeArray.length; i++){
        if(infoType == typeArray[i]){
            $("#infoData" + i).html(backUPStr);
        }
    }
    mScroll.refresh();
    var scrollPage = parseInt(getCookie('page'));
    var scrollY = parseInt(getCookie('iscrollY'));
    if (scrollPage == 1) {
        mScroll.scrollTo(0, scrollY, 0);
    } else if (scrollPage > 1){
        mScroll.scrollTo(0, mScroll.maxScrollY, 0);
    }
}
function serThatList(){
/*  var tp = "";
    if("全部" != infoType){
        tp = infoType;
    } */
    var titleKey = $(".serInput").val();
    $(".serInput2").val(titleKey);
    var url = "../allInfosByTitleKey.do";
    $.ajax({
        url : url,
        type : 'POST',
        dataType : 'json',
        async : true,
        data : {
            "titleKey" : titleKey,
            "openid": 'ovOzrs_GVFO4qGMy8aT3I8BkF0do'
        },
        success : function(data) {
            if("ok" == data.status){
                var infos = data.infoList;
                //备份原来list
                if($("#res_li").length==0){
                    for(var i = 0; i < typeArray.length; i++){
                        if(infoType == typeArray[i]){
                            backUPStr = $("#infoData" + i).html();
                        }
                    }
                    
                }
                if(infos.length!=0){
                    for(var i = 0; i < typeArray.length; i++){
                        if(infoType == typeArray[i]){
                            var html = AceTemplate.format("serResultTmpl",infos);
                            $("#infoData" + i).html(html);
                            $('.li_title').each(sensitiveWordFixFilter);
                        }
                    }
                }else{
                    var htmlStr = "<div id='res_li' style='width:100%;text-align:center;color: #a9a9a9;'><span>抱歉，没有找到与“"+titleKey+"”相关的文章<span></span></span></div>";
                    for(var i = 0; i < typeArray.length; i++){
                        if(infoType == typeArray[i]){
                            $("#infoData" + i).html(htmlStr);
                        }
                    }
                }
                $(".slide").css("display","none");
                $(".out").show();
                $("#inScroll").css("padding-top", "70px");
                $("#headerId2").css("display","-webkit-box");
                mScroll.refresh();
            }else{
                alert("系统异常");
            }
        },
        error : function() {
            alert("网络连接异常，请稍后再试");
        }
    });
}
function serThatList2(){
    /*  var tp = "";
        if("全部" != infoType){
            tp = infoType;
        } */
        var titleKey = $(".serInput2").val();
        $(".serInput").val(titleKey);
        var url = "../allInfosByTitleKey.do";
        $.ajax({
            url : url,
            type : 'POST',
            dataType : 'json',
            async : true,
            data : {
                "titleKey" : titleKey,
                "openid": 'ovOzrs_GVFO4qGMy8aT3I8BkF0do'
            },
            success : function(data) {
                if("ok" == data.status){
                    var infos = data.infoList;
                    //备份原来list
                    if($("#res_li").length==0){
                        for(var i = 0; i < typeArray.length; i++){
                            if(infoType == typeArray[i]){
                                backUPStr = $("#infoData" + i).html();
                            }
                        }
                        
                    }
                    if(infos.length!=0){
                        for(var i = 0; i < typeArray.length; i++){
                            if(infoType == typeArray[i]){
                                var html = AceTemplate.format("serResultTmpl",infos);
                                $("#infoData" + i).html(html);
                                $('.li_title').each(sensitiveWordFixFilter);
                            }
                        }
                    }else{
                        var htmlStr = "<div id='res_li' style='width:100%;text-align:center;color: #a9a9a9;'><span>抱歉，没有找到与“"+titleKey+"”相关的文章<span></span></span></div>";
                        for(var i = 0; i < typeArray.length; i++){
                            if(infoType == typeArray[i]){
                                $("#infoData" + i).html(htmlStr);
                            }
                        }
                    }
                    $(".slide").css("display","none");
                    $(".out").show();
                    $("#inScroll").css("padding-top", "70px");
                    $("#headerId2").css("display","-webkit-box");
                    mScroll.refresh();
                }else{
                    alert("系统异常");
                }
            },
            error : function() {
                alert("网络连接异常，请稍后再试");
            }
        });
    }
function changeHtmlStyle(str){
    var titleKey = $(".serInput").val();
    var htmlRes = str.replace(titleKey,"<span style='color:red;'>"+titleKey+"</span>");
    return htmlRes;
}
function sensitiveWordFixFilter() {
    $(this).html($(this).html().replace(/&nbsp;/g," "));
    var html = $(this).text();
    $(this).html(html);
}
function loadOldHTML(data){
            var upInfos = data.upInfos;
            for(var j = 0; j < upInfos.length; j++){
                var upInfo = upInfos[j];
                var imgStr = "<a href=\"#\" onclick=\"gotoDetailPage('"+upInfo.id+"','"+upInfo.title+"');\"><img src='"+upInfo.coverImgUrl+"'/></a>";
                $("#imgArr").append(imgStr);
                $("#imgArr").trigger("create");
                titleArray.push(upInfo.title);
                if(j == 0){
                    $("#iconInfo").append("<a href=\"#\" class=\"my-a-style hover\"></a>");
                    $("#iconInfo").trigger("create");
                }else{
                    $("#iconInfo").append("<a class='my-a-style' href=\"#\"></a>");
                    $("#iconInfo").trigger("create");
                }
            }
            setTimeout(function(){
                var imgArr = document.getElementById("imgArr").getElementsByTagName("img");
                for(var k = 0; k < imgArr.length; k++){
                    imgArr.item(k).style.cssText = "width:" + imgWidth + "px";
                }
                document.getElementById("imgArr").style.cssText = "width:" + imgWidth * upInfos.length + "px";
                zBase.init();
            },500);
        
        
        var infos = data.infoList;
        var bodyStr = "";
        if(infos.length == 0 && page == 1){
            bodyStr = "<li style=\"text-align:center;margin-top:50px;\"><img src='images/no_result.jpg' style='width:120px;'></li><li style=\"text-align:center;\"><span>该栏目暂无资讯</span></li>";
        }else{
            for(var i = 0; i < infos.length; i++){
                var info = infos[i];
                bodyStr += "<li class='my_li' style='position: relative;'>";
                    if(comeFlag == "editor"){
                        bodyStr += "<a href=\"#page1\" onclick=\"gotoSet('"+info.id+"','"+info.title+"','"+info.relayCount+"');\">";
                    }else{
                        bodyStr += "<a href=\"#\" onclick=\"gotoDetailPage('"+info.id+"');\">";
                    }
                        // 如果超过一万就改成X.X万
                        var rCount = parseInt(info.relayCount) > 10000 ? ((parseInt(parseInt(info.relayCount) / 10000)) + "." + (parseInt(parseInt(info.relayCount) % 10000 / 1000)) + "万") : info.relayCount;
                        var bCount = parseInt(info.browseCount) > 10000 ? ((parseInt(parseInt(info.browseCount) / 10000)) + "." + (parseInt(parseInt(info.browseCount) % 10000 / 1000)) + "万") : info.browseCount;
                
                        bodyStr += "<div class='huiyuan-show'></div><img class='my_img' src=\""+info.coverImgUrl+"\">"
                        + "<div style=\"height:57px;overflow:hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;line-height:24px;padding-top:5px;\"><div class=\"li_title\">"+info.title+"</div>"
                        + "</div>"
                        + "<div class=\"li_tip\"><span class=\"fr\" style=\"margin-right:15px;\"><div class=\"show-litter-png1\" style=\"background-position: 0 -24px;width: 18px;margin-right:5px;\"></div><span style=\"display:inline-block;height:20px;line-height:20px;font-size:15px;\">"+rCount+"</span></span>"
                        + "<span class=\"m_r12\"><div class=\"show-litter-png1\" style=\"background-position: 0 -1px;width: 18px;margin-right:5px;\"></div><span style=\"display:inline-block;height:20px;line-height:20px;font-size:15px;\">"+bCount+"</span></span>"
                        //+ "<span>"+info.createdDate.split(" ")[0]+"</span></div>"
                        + "<span></span></div>"
                        + "</a>"
                        + "</li>";
            }
        }
        
        for(var i = 0; i < typeArray.length; i++){
            if(infoType == typeArray[i]){
                $("#infoData" + i).append(bodyStr);
                $("#infoData" + i).trigger("create");
                if(data.isLoadMore){
                    var behind = "<dl id = \"btnMore\" style = \"text-align:center;padding-bottom:20px;\">上拉加载更多...</dl>"
                    $("#infoData" + i).append(behind);
                    $("#infoData" + i).trigger("create");
                }
                if(getCookie("tabType")=='超级推广'){
                    $(".huiyuan-show").show();
                }else{
                    $(".huiyuan-show").hide();
                }
            }
        }
        
    /*   var isFirstIn = storage.getItem("isFirst");
        if(isFirstIn == null) {
            $("#guidelines").show();
        }  */
        

        setTimeout(function(){initOldIScroll();},500);
        isFirst = 2;
}
function initOldIScroll(){
    if(mScroll instanceof iScroll){
       mScroll.destroy();
    }
    $("#newScroll").height($(window).height() - $("#footerId").height()+25);
    
    mScroll = new iScroll("newScroll",{
    hScrollbar:false,
    vScrollbar:false,
    onScrollMove: function(){
        if(this.y <= (this.maxScrollY-60) && document.getElementById("btnMore")){
            isPullUp = true;
            $("#btnMore").html("正在加载......");
            
        }
    },
    onScrollEnd: function(){
        if(isPullUp && document.getElementById("btnMore")){
            loadMore();
            isPullUp = false;
        }
    }
    });
    var scrollY = parseInt(sessionStorage["infoListPageHeight"]);
    mScroll.scrollTo(0, scrollY, 0);
    delCookie('page');
    delCookie('iscrollY');
}
function saveDateToSessionStorage(data){
    var newData = {};
    if(pageSize == data.body.infoList.length){
        newData.isLoadMore = true;
    }else{
        newData.isLoadMore = false;
    }
    //数据类型
    newData.tp = data.tp;
    //数据状态
    newData.code = '200';
    //顶部滚动图数据
    if(data.tp!='发现'){
        newData.upInfos = [];
        if(data.body.upInfos){
            for(var i in data.body.upInfos){
                newData.upInfos.push(data.body.upInfos[i]);
            }
        }else{
            var oldData = JSON.parse(sessionStorage["infoListJSP"]);
            for(var i in oldData.upInfos){
                newData.upInfos.push(oldData.upInfos[i]);
            }
        }
    }
    //文章数据
    newData.infoList = [];
    if(sessionStorage["infoListJSP"]){
        var oldData = JSON.parse(sessionStorage["infoListJSP"]);
        if(oldData.tp == data.tp){
            for(var i in oldData.infoList){
                newData.infoList.push(oldData.infoList[i]);
            }
            for(var i in data.body.infoList){
                newData.infoList.push(data.body.infoList[i]);
            }
        }else{
            for(var i in data.body.infoList){
                newData.infoList.push(data.body.infoList[i]);
            }
        }

    }else{
        for(var i in data.body.infoList){
            newData.infoList.push(data.body.infoList[i]);
        }
    }
    sessionStorage["infoListJSP"] = JSON.stringify(newData);
}
function getDateFromSessionStorage(){
    var newData = {};
    newData =  JSON.parse(sessionStorage["infoListJSP"]);
    return newData;
}

function loadGuideLines(){
    
/* 代言人 */
/*  if(localStorage.getItem('wrap')!='1'){  
      $("#wrap").removeClass('dsn');  
        localStorage['wrap'] = '1';
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            centeredSlides: true,
            autoplay: 3000,
            autoplayDisableOnInteraction: false,
            slidesPerView: 1,
            loop:true
            
        });
        return;
    }    */
    /* 积分 */
    /*  if(localStorage.getItem('wrap1')!='2'){  
          $("#wrap1").removeClass('dsn');  
            localStorage['wrap1'] = '2';
            return;
    }  */
    /* 更新 */
    /* if(localStorage.getItem('wrap2')!='3'){  
          $("#wrap2").removeClass('dsn');  
            localStorage['wrap2'] = '3';
            return; 
    } */ 
    /* 会员 */
    /*  if(localStorage.getItem('wrap3')!='4'){  
              $("#wrap3").removeClass('dsn');  
                localStorage['wrap3'] = '4';
                return; 
        }  */
    if(isCheck!='N'&&localStorage.getItem('tuiguang_guide')==null){
        $('#guidelinesStep3').show();
        return;
    }
    /* if(isCheck!='N'&&localStorage.getItem('infoLists_guide')==null){
        $('#guidelinesStep1').show();
    } */
}
function golooklook(){
    localStorage.setItem('tuiguang_guide',"true");
    $('#guidelinesStep3').hide();
    window.location.href="http://mp.weixin.qq.com/s/qqZc27VGu6DPU_5xKg43KQ";
}
function cancelGuides(){
    localStorage.setItem('tuiguang_guide',"true");
    $('#guidelinesStep3').hide();
}
function guidelinesNotips(){
    localStorage.setItem('infoLists_guide',"true"); 
    $('#guidelinesStep1').hide();
}
function createQrcode(wxid){
    var getQrcodeUrl = "../createOrangeQrord.do";
    $.ajax({
        url:getQrcodeUrl,
        type : 'POST',
        dataType : 'json',
        async : true,
        data : {
            "openid" : wxid,
            "flagstr":"true"
        },
        success : function(data) {
            if(data !=null&&data.dto.ticketId){
                $('#qrCodeImg').css('margin-top',($('#cardId').height()-60)/2);
                var url ='https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket='+data.dto.ticketId;
                $('#qrCodeImage').attr('src',url);
            }
        }
    });
}

$(function(){
    if($("#isFirstAccess").val()==0){
        sessionStorage.removeItem("infoListJSP");
        sessionStorage.removeItem("infoListPageHeight");
        sessionStorage.removeItem("infoListJSPDataPage");
    }
    var marginValue =($(window).width()-4*($('#tab2').width())-50-20)/4;
    $('#tab2').css('margin-left',marginValue+'px');
    $('#tab4').css('margin-right',marginValue+'px');
    $('.my_li:last').css('border-bottom','none');
})
        
wx.config({
    debug: false, 
    appId: '',
    timestamp: '',
    nonceStr: '',
    signature: '',
    jsApiList: ['onMenuShareAppMessage','onMenuShareTimeline', 'onMenuShareQQ','onMenuShareQZone']
});

wx.ready(function () {
    
    /* 禁用分享功能 */
    /* wx.hideOptionMenu();  */   
    //描述和图片需要重新定义，描述取正文的第一段文字，没有文字则为空
    //图片取正文第一张图片；没有图片用默认的图片；
    wx.onMenuShareAppMessage({
        title: "代言人，等你来！",
        desc: "做展业宝代言人，你就是舞台的焦点！展示风采，万众瞩目！",
        link: shareURl,
        imgUrl: imgUrl,
        trigger: function (res) {
                recordActionSimple(ResourceAction.ACTION_TYPE_SHARE);
        },
        success: function (res) {
            recordClick('63');
            //alert('已分享');
            if(openId == shareOpenId){
                updateRelayCount();
            } else {
                updateShareCnt();
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
        title: "代言人，等你来！", // 分享标题
        desc: "做展业宝代言人，你就是舞台的焦点！展示风采，万众瞩目！",
        link: shareURl, // 分享链接
        imgUrl: imgUrl, // 分享图标
        trigger: function (res) {
            recordActionSimple(ResourceAction.ACTION_TYPE_SHARE);
        },
        success: function () { 
            recordClick('63');
            // 用户确认分享后执行的回调函数
            if(openId == shareOpenId){
                updateRelayCount();
            } else {
                updateShareCnt();
            }
        },
        cancel: function (res) {
            //alert('已取消');
        },
        fail: function (res) {
            alert("页面加载中，请稍候再试。");
        }     
    }); 
});
function allInfosByFeeds(data){
    isLoading = true;
    var url = "../allInfosByFeeds.do";
    $.ajax({
        url : url,
        type : 'POST',
        dataType : 'json',
        async : true,
        data : {
            "time":$("#feeds-time-up").val()
        },
        success:function(data){
            //data.infoList = [{"updatedDate":"2016-08-19 16:54:47.0","infoType":"1","infoID":"6f50cc14-9551-414a-bea9-00806d0a506b","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/7d402f93-b37f-40e7-9925-4de162c876b1.png","updatedBy":"","id":"3c324b78-59b0-4c2e-8431-ab5631ef3518","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"记忆","openid":"orE5ys-u6HOVVc1u7cO5P0xSqyV0","createdDate":"","infoTitle":"ccnncnc ncnck1"},{"updatedDate":"2016-08-19 16:16:42.0","infoType":"1","infoID":"7a38ef2f-cdeb-4a9b-b394-5f9da668ab0d","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/7d402f93-b37f-40e7-9925-4de162c876b1.png","updatedBy":"","id":"9b55549e-e8e8-44ca-b0c5-e44636b5962e","relayCount":1,"contentImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/ac28e48a-a5fb-446b-9eb1-951ec62bd32c.png","browseCount":3,"createdBy":"","isAuth":"N","name":"记忆","openid":"orE5ys-u6HOVVc1u7cO5P0xSqyV0","createdDate":"","infoTitle":"我婆婆破婆婆going"},{"updatedDate":"2016-08-22 10:24:22.0","infoType":"5","infoID":"35654533-8372-45e9-9cfb-1978afc0f7c9","authorImgUrl":"","updatedBy":"","id":"30f32dd2-f7a7-427b-9a90-f21c6cf64738","relayCount":0,"contentImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/crawlerImg_b07a24a3-68c0-4ce8-bd57-c15c3e33a97a.png","browseCount":1,"createdBy":"","isAuth":"N","name":"流泪","openid":"orE5ys0jO33qwN11DS-yig6Z1xVM","createdDate":"","infoTitle":"Node.js写爬虫系列之第1章"},{"updatedDate":"2016-08-15 17:31:49.0","infoType":"1","infoID":"05f06b07-2406-4b92-9d6b-19cdd06e2b18","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/20bdf8c9-d9b6-40a8-ad4b-8b930b7ac626.png","updatedBy":"","id":"a480f0c6-865d-4483-a184-64847fe41537","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"荣誉院长","openid":"orE5ys5JR9SsO6LR1APCM4IaFMmg","createdDate":"","infoTitle":"还嗯"},{"updatedDate":"2016-08-17 15:38:18.0","infoType":"1","infoID":"15dbbceb-a3f9-42c3-b053-940a276c489e","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/20bdf8c9-d9b6-40a8-ad4b-8b930b7ac626.png","updatedBy":"","id":"f6c943d7-a8f6-419a-b8c3-99b84129018f","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"荣誉院长","openid":"orE5ys5JR9SsO6LR1APCM4IaFMmg","createdDate":"","infoTitle":"精明你"},{"updatedDate":"2016-08-12 18:40:15.0","infoType":"1","infoID":"18c00872-dc52-41a8-ba60-37d5232ff7b8","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/20bdf8c9-d9b6-40a8-ad4b-8b930b7ac626.png","updatedBy":"","id":"d5a0b5d7-7c28-406d-8fb8-b58d9edf873d","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"荣誉院长","openid":"orE5ys5JR9SsO6LR1APCM4IaFMmg","createdDate":"","infoTitle":"明你明明"},{"updatedDate":"2016-08-16 20:01:12.0","infoType":"1","infoID":"193b764a-3a68-42da-b2af-d8663a052147","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/20bdf8c9-d9b6-40a8-ad4b-8b930b7ac626.png","updatedBy":"","id":"5aae44ef-2b7f-4622-8685-92152f1230e8","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"荣誉院长","openid":"orE5ys5JR9SsO6LR1APCM4IaFMmg","createdDate":"","infoTitle":"老婆公公你一直在"}];
            isLoading = false;
            if(data.infoList.length!=0){
                $("#feeds-time-up").val(data.infoList[0].time);
                var that = data.infoList;
                var html = AceTemplate.format("feedsTmpl",that);
                $("#infoData1").prepend(html);
            }else{
                $(".pullDownLabel").removeClass("pullDownLabelloading");
                $('.pullDownLabel').html('没有更多文章了');
            }
            setTimeout(function(){
                mScroll.refresh();
                setTimeout(function(){
                    $(".pullDownLabel").addClass("pullDownLabelloading");
                },1000);
            },800);
        },
        error:function(err){
            isLoading = false;
            console.log("err");
            setTimeout(function(){mScroll.refresh();},500);
        }
    });
}
function showFeeds(data,feedsGoodList){
    //data = [{"updatedDate":"2016-08-19 16:54:47.0","infoType":"1","infoID":"6f50cc14-9551-414a-bea9-00806d0a506b","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/7d402f93-b37f-40e7-9925-4de162c876b1.png","updatedBy":"","id":"3c324b78-59b0-4c2e-8431-ab5631ef3518","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"记忆","openid":"orE5ys-u6HOVVc1u7cO5P0xSqyV0","createdDate":"","infoTitle":"ccnncnc ncnck1"},{"updatedDate":"2016-08-19 16:16:42.0","infoType":"1","infoID":"7a38ef2f-cdeb-4a9b-b394-5f9da668ab0d","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/7d402f93-b37f-40e7-9925-4de162c876b1.png","updatedBy":"","id":"9b55549e-e8e8-44ca-b0c5-e44636b5962e","relayCount":1,"contentImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/ac28e48a-a5fb-446b-9eb1-951ec62bd32c.png","browseCount":3,"createdBy":"","isAuth":"N","name":"记忆","openid":"orE5ys-u6HOVVc1u7cO5P0xSqyV0","createdDate":"","infoTitle":"我婆婆破婆婆going"},{"updatedDate":"2016-08-22 10:24:22.0","infoType":"5","infoID":"35654533-8372-45e9-9cfb-1978afc0f7c9","authorImgUrl":"","updatedBy":"","id":"30f32dd2-f7a7-427b-9a90-f21c6cf64738","relayCount":0,"contentImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/crawlerImg_b07a24a3-68c0-4ce8-bd57-c15c3e33a97a.png","browseCount":1,"createdBy":"","isAuth":"N","name":"流泪","openid":"orE5ys0jO33qwN11DS-yig6Z1xVM","createdDate":"","infoTitle":"Node.js写爬虫系列之第1章"},{"updatedDate":"2016-08-15 17:31:49.0","infoType":"1","infoID":"05f06b07-2406-4b92-9d6b-19cdd06e2b18","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/20bdf8c9-d9b6-40a8-ad4b-8b930b7ac626.png","updatedBy":"","id":"a480f0c6-865d-4483-a184-64847fe41537","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"荣誉院长","openid":"orE5ys5JR9SsO6LR1APCM4IaFMmg","createdDate":"","infoTitle":"还嗯"},{"updatedDate":"2016-08-17 15:38:18.0","infoType":"1","infoID":"15dbbceb-a3f9-42c3-b053-940a276c489e","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/20bdf8c9-d9b6-40a8-ad4b-8b930b7ac626.png","updatedBy":"","id":"f6c943d7-a8f6-419a-b8c3-99b84129018f","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"荣誉院长","openid":"orE5ys5JR9SsO6LR1APCM4IaFMmg","createdDate":"","infoTitle":"精明你"},{"updatedDate":"2016-08-12 18:40:15.0","infoType":"1","infoID":"18c00872-dc52-41a8-ba60-37d5232ff7b8","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/20bdf8c9-d9b6-40a8-ad4b-8b930b7ac626.png","updatedBy":"","id":"d5a0b5d7-7c28-406d-8fb8-b58d9edf873d","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"荣誉院长","openid":"orE5ys5JR9SsO6LR1APCM4IaFMmg","createdDate":"","infoTitle":"明你明明"},{"updatedDate":"2016-08-16 20:01:12.0","infoType":"1","infoID":"193b764a-3a68-42da-b2af-d8663a052147","authorImgUrl":"http://test1-iobs.pingan.com.cn/download/iobs-bucket/20bdf8c9-d9b6-40a8-ad4b-8b930b7ac626.png","updatedBy":"","id":"5aae44ef-2b7f-4622-8685-92152f1230e8","relayCount":0,"contentImgUrl":"","browseCount":1,"createdBy":"","isAuth":"N","name":"荣誉院长","openid":"orE5ys5JR9SsO6LR1APCM4IaFMmg","createdDate":"","infoTitle":"老婆公公你一直在"}];
    var that = data;
    var html = AceTemplate.format("feedsTmpl",that);
    $("#infoData1").append(html);
    if($("#feeds-time").val()=='0'){
        //如果是首页，记录顶部时间
        $("#feeds-time-up").val(data[0].time);
        //加载最热hot-tuijian
        if($("#tuijian-hot").length==0){
            if(feedsGoodList.length!=0){
                var htmlx = AceTemplate.format("hot-tuijian",feedsGoodList);
                $("#pullDown").after(htmlx);
            }
        }
    }
    if(pageSize == data.length){
        $("#feeds-time").val(data[data.length-1].time);
        var behind = "<dl id = \"btnMore\" style = \"text-align:center;padding-bottom:20px;\">上拉加载更多...</dl>"
        $("#infoData1").append(behind);
        $("#infoData1").trigger("create");
    }
    if(page == 1){
        setTimeout(function(){initNewIScroll();},500);
    }else {
        mScroll.refresh();
    }
}
function GetRandomNum(Min,Max)
{   
    var Range = Max - Min;   
    var Rand = Math.random();   
    return(Min + Math.round(Rand * Range));   
}
function goToFeedsArticle(dom){
    if(isCheck=='N'){
        //if(isCheck=='Y'){
            $("#send-message").css("display","block");
            return ;
    }
    var infoType = $(dom).attr("data-infoType");
    var infoId = $(dom).attr("data-infoID");
    var ysopenID =  $(dom).attr("data-openid");
    if("2" == infoType){
        //window.location.href="infoDetail.jsp?"+(isHost=="1"?"visitTag=agent_jm&":"")+"infoId=" + id + "&openId=" +openid+"&articleType=3";
        window.location.href="/family_chat/readArticle/"+infoId+".do?id=" + infoId + "&articleType=2&feedsType=1&secShareOpenid=ovOzrs_GVFO4qGMy8aT3I8BkF0do";
    }else if("5" == infoType){
        window.location.href="/family_chat/readArticle/"+infoId+".do?id="+infoId+"&articleType=5&feedsType=1&infoCode=discover&ysopenId="+ysopenID+"&secShareOpenid=ovOzrs_GVFO4qGMy8aT3I8BkF0do";
    }else if("1"==infoType||"4"==infoType){
        window.location.href="/family_chat/readArticle/"+infoId+".do?id="+infoId+"&queryType=ACTIVITY&articleType=1&feedsType=1&secShareOpenid=ovOzrs_GVFO4qGMy8aT3I8BkF0do";
    }
}
</script>
<script type="text/html" id="feedsTmpl">
for(var i in this){
    <li data-infoType="#{this[i].infoType}" data-infoID="#{this[i].infoID}" data-openid="#{this[i].openid}" style="border-top:1px solid #dddddd;background-color:#fff;padding-right:10px;overflow: hidden;">
        <div onclick="goToShop('#{this[i].openid}')">
            <img src="#{this[i].authorImgUrl==''?"/family_chat/images/cards/default_head.png":this[i].authorImgUrl}" style="width: 40px;border-radius: 50%;margin-top: 5px;">
            <sapn style="display: inline-block;position: relative;bottom: 17px;margin-left:10px;">#{this[i].name}</span>
            <img src="" />
        </div>
        <div style="margin-left:60px;height:80px;background-color:#f8f8f8;" onclick="goToFeedsArticle(this)" data-infoType="#{this[i].infoType}" data-infoID="#{this[i].infoID}" data-openid="#{this[i].openid}">
            <div style="width: 70px;margin-top:5px;margin-left:5px;background-image: url('#{(this[i].contentImgUrl==0||this[i].contentImgUrl=='')?'suiji/'+GetRandomNum(0,69)+'.png':this[i].contentImgUrl}');display: inline-block;float: left;background-repeat:no-repeat;background-size: 100% 100%;">
                <div style="padding-top:100%"></div>        
            </div>
            <div style="display:inline-block;float:left;width:100%;margin-right:-75px;margin-top:5px;height:70px;-webkit-line-clamp:3;display:-webkit-box;overflow: hidden;text-overflow: ellipsis;">
                <div style="margin-left:10px;margin-top:5px;margin-right:5px;color:#333;padding-right: 70px;">#{this[i].infoTitle}</div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="margin-top:10px;margin-left: 60px;margin-bottom: 5px;color:#a7a7a7">
            <span style="font-size:14px;">#{this[i].updatedDate}</span>
            <div style="width: 100px;height:20px;display: inline-block;float:right;">
            <span style="margin-right:20px;position: relative;">
                <div style="background-image: url('images/feeds-share.png');width: 20px;height: 20px;background-position: 0 -30px;background-size: 100%;display:inline-block;margin-right:5px;"></div><span style="position:absolute;top:-6px;left:23px;">#{this[i].relayCount}</span>
            </span>
            <span style="position: relative;">
                <div style="background-image: url('images/feeds-share.png');width: 20px;height: 20px;background-position: 0 -5px;background-size: 100%;display:inline-block;"></div><span style="position:absolute;top:-6px;left:23px;">#{this[i].browseCount}</span>
            </span>
            </div>
        </div>
    </div>
    </li>
}
</script>


<script type="text/html" id="serResultTmpl">
var that = this;
for(var i = 0 ; i< that.length; i++){
    var rCount = parseInt(that[i].relayCount) > 10000 ? ((parseInt(parseInt(that[i].relayCount) / 10000)) + "." + (parseInt(parseInt(that[i].relayCount) % 10000 / 1000)) + "万") : that[i].relayCount;
    var bCount = parseInt(that[i].browseCount) > 10000 ? ((parseInt(parseInt(that[i].browseCount) / 10000)) + "." + (parseInt(parseInt(that[i].browseCount) % 10000 / 1000)) + "万") : that[i].browseCount;
    <li class="my_li" id="res_li">
    if(comeFlag == "editor"){
        <a onclick="gotoSet('#{that[i].id}','#{that[i].title}','#{that[i].relayCount}');" class="ui-link" href="#page1">
    }else{
        <a href="#" onclick="gotoDetailPage('#{that[i].id}');" class="ui-link">
    }
        <img class="my_img" src="#{that[i].coverImgUrl}">
        <div style="height:57px;overflow:hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;line-height:24px;padding-top:5px;">
            <div class="li_title">#{changeHtmlStyle(that[i].title)}</div>
        </div>
    <div class="li_tip">
        <span class="fr" style="margin-right:15px;">
            <div class="show-litter-png1" style="background-position: 0 -24px;width: 18px;margin-right:5px;"></div>
                <span style="display:inline-block;height:20px;line-height:20px;font-size:15px;">#{rCount}</span>
        </span>
        <span class="m_r12">
            <div class="show-litter-png1" style="background-position: 0 -1px;width: 18px;margin-right:5px;"></div>
            <span style="display:inline-block;height:20px;line-height:20px;font-size:15px;">#{bCount}</span>
        </span>
    </div>
    </a>
</li>
}
<div id="res_li" style="padding: 10px;width: 100%;text-align: center;color: #a9a9a9;"><span>没有更多相关文章了</span></div>
</script>
<script type="text/html" id="hot-tuijian">
<div id="tuijian-hot">
  <div id="tuijian-icon"></div>
  <ul id="tuijian-ul">
    for(var i=0;i<(this.length<3?this.length:3);i++){
        <li onclick="goToFeedsArticle(this)" data-infoType="#{this[i].infoType}" data-infoID="#{this[i].infoID}" data-openid="#{this[i].openid}">#{this[i].infoTitle}</li>
    }
  </ul>
</div>
</script>
</html>


