<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/var/www/html/www/whyaojin.cn/application/admin/view/index_system.html";i:1507610121;s:62:"/var/www/html/www/whyaojin.cn/application/admin/view/head.html";i:1507610120;s:64:"/var/www/html/www/whyaojin.cn/application/admin/view/footer.html";i:1507610120;}*/ ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo config("config.ss_site_name"); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/misc/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/misc/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo config("config.ss_web_root"); ?>/misc/html5shiv.min.js"></script>
        <script src="<?php echo config("config.ss_web_root"); ?>/misc/respond.min.js"></script>
    <![endif]-->
    <style>
      .color-palette {
        height: 35px;
        line-height: 35px;
        text-align: center;
      }
      .color-palette-set {
        margin-bottom: 15px;
      }
      .color-palette span {
        display: none;
        font-size: 12px;
      }
      .color-palette:hover span {
        display: block;
      }
      .color-palette-box h4 {
        position: absolute;
        top: 100%;
        left: 25px;
        margin-top: -40px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 12px;
        display: block;
        z-index: 7;
      }
    </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      
         <!-- jQuery 2.1.4 -->
      <script src="<?php echo config("config.ss_web_root"); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo url("Index/index"); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>后台</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><?php echo config("config.ss_site_name"); ?></b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown messages-menu">
                <a href="tel:<?php echo config("config.ss_site_tel"); ?>">
                  电话:<?php echo config("config.ss_site_tel"); ?>
                </a>
              </li>

                <li class="dropdown messages-menu">
                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo config("config.ss_site_qq"); ?>&amp;site=qq&amp;menu=yes" target="_blank">
                  QQ:<?php echo config("config.ss_site_qq"); ?>
                </a>
              </li>

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo cookie(config('config.ss_auth_key'))['avatar'];?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo cookie(config('config.ss_auth_key'))['username'];?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo cookie(config('config.ss_auth_key'))['avatar'];?>" class="img-circle" alt="User Image">
                    <p>
                    最后登陆时间：<?php echo date("m-d H:s",cookie(config('config.ss_auth_key'))['login_time']);?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo url("Index/pwd",array("ss"=>4)); ?>" class="btn btn-default btn-flat">改密</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo url("Base/logout"); ?>"  class="btn btn-default btn-flat">退出</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo cookie(config('config.ss_auth_key'))['avatar'];?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo cookie(config('user_auth_key'))['username'];?></p>
              <a href="#"><i class="fa fa-circle text-success"></i>在线</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">功能管理</li>


            <li class="treeview <?php if(request()->param("ss") == 1){echo "active";} ?>">
            <a href="javascript:void(0);">
                <i class="fa fa-cog"></i><span>系统设置</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo url("Index/system",array("ss"=>1)); ?>"><i class="fa fa-circle-o"></i>基本设置</a></li>
                <li><a href="<?php echo url("Index/admin",array("ss"=>1)); ?>"><i class="fa fa-circle-o"></i>管理员列表</a></li>
                <li><a href="<?php echo url("Index/features",array("ss"=>1)); ?>"><i class="fa fa-circle-o"></i>功能管理</a></li>
                <li><a href="<?php echo url("index/template",array("ss"=>1)); ?>"><i class="fa fa-circle-o"></i>模板管理</a></li>
                <!--<li><a href="<?php echo url("System/pay",array("ss"=>1)); ?>"><i class="fa fa-circle-o"></i>支付项目</a></li>-->
            </ul>
            </li>

            <li class="treeview <?php if(request()->param("ss") == 2){echo "active";} ?>">
            <a href="#">
                <i class="fa fa-user"></i><span>会员管理</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <!-- <li><a href="<?php echo url("Member/member_group",array("ss"=>2)); ?>"><i class="fa fa-circle-o"></i>会员组管理</a></li>-->
                <li><a href="<?php echo url("Member/member",array("ss"=>2)); ?>"><i class="fa fa-circle-o"></i>会员管理</a></li>
                <li><a href="<?php echo url("Member/notice",array("ss"=>2)); ?>"><i class="fa fa-circle-o"></i>会员公告</a></li>
            </ul>
            </li>



            <li class="treeview <?php if(request()->param("ss") == 4){echo "active";} ?>">
            <a href="#">
                <i class="fa fa-gears"></i><span>个人设置</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo url("Index/setting",array("ss"=>4)); ?>"><i class="fa fa-circle-o"></i><span>个人配置</span></a></li>
              <li><a href="<?php echo url("Index/pwd",array("ss"=>4)); ?>"><i class="fa fa-circle-o"></i><span>修改密码</span></a></li>
            </ul>
            </li>

            <li><a href="<?php echo url("Index/clear"); ?>"><i class="fa fa-circle-o text-yellow"></i> <span>清空缓存</span></a></li>
            <li><a href="<?php echo url("Base/logout"); ?>"><i class="fa fa-circle-o text-red"></i> <span>退出</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              <?php echo $head; ?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo url("Index/index"); ?>"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li class="active"><?php echo $head; ?></li>
          </ol>
        </section>

 <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">修改</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" id="form1" action="<?php echo url("Index/system"); ?>" class="pageForm required-validate">
                  <div class="box-body">
                      <div class="form-group">
                          <label>网站名称：</label>
                          <input type="text" name="ss_site_name" value="<?php echo config("config.ss_site_name"); ?>" class="form-control required"  >
                      </div>


                    <div class="form-group">
                          <label>网站域名：</label>
                          <input type="text" name="ss_site_domain" value="<?php echo config("config.ss_site_domain"); ?>" class="form-control required" >
                      </div>


                      <div class="form-group">
                          <label>文件上传大小(M)：</label>
                          <input type="text" name="ss_upload_size" value="<?php echo config("config.ss_upload_size"); ?>" class="form-control required" >
                      </div>

                       <div class="form-group">
                          <label>文件上传类型：</label>
                          <input type="text" name="ss_upload_type" value="<?php echo config("config.ss_upload_type"); ?>"  class="form-control required" >
                      </div>

                      <div class="form-group">
                          <label>QQ：</label>
                          <input type="text" name="ss_site_qq" value="<?php echo config("config.ss_site_qq"); ?>" class="form-control required" >
                      </div>

                      <div class="form-group">
                          <label>是否启用上传缩略图：</label>
                          <br/>
                          <label>是<input type="radio" id="ss_thumb" value = '1' name="ss_thumb" <?php if(config('config.ss_thumb') == "1"){ ?>checked <?php } ?> > &nbsp;&nbsp;
                          </label>
                          <label>
                            否<input type="radio" id="ss_thumb2" value = "0" name="ss_thumb" <?php if(config('config.ss_thumb') == "0"){ ?>checked <?php } ?>  >
                          </label>
                      </div>

                      <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                              <label>缩略图片大小控制</label>
                            </div>
                            <div class="col-lg-6">
                              <div class="input-group">
                                <span class="input-group-addon">
                                  宽(px)
                                </span>
                                <input type="text" class="form-control number" name="ss_thumb_width" value="<?php echo config("config.ss_thumb_width"); ?>">
                              </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                              <div class="input-group">
                                <span class="input-group-addon">
                                   高(px)
                                </span>
                                <input type="text" class="form-control number" name="ss_thumb_height" value="<?php echo config("config.ss_thumb_height"); ?>">
                              </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                          </div><!-- /.row -->
                          </div>




                      <div class="form-group">
                          <label>站长Email：</label>
                          <input type="text" name="ss_site_email" value="<?php echo config("config.ss_site_email"); ?>"  class="form-control required" >
                      </div>

                       <div class="form-group">
                          <label>网站关键词：</label>
                          <input type="text" name="ss_site_keyword" value="<?php echo config("config.ss_site_keyword"); ?>"  class="form-control required" >
                      </div>

                      <div class="form-group">
                          <label>网站描述：</label>
                          <br/>
                          <textarea name="ss_site_description" style="width:100%;height:8em;" class="input_text required"><?php echo config("config.ss_site_description"); ?></textarea>
                      </div>

                      <div class="form-group">
                          <label>电话：</label>
                          <input type="text" name="ss_site_tel" value="<?php echo config("config.ss_site_tel"); ?>"  class="form-control required" >
                      </div>

                <div class="form-group">
                      <label>站点logo：</label>
                      <div class="input-group">
                        <input type="text" id="ss_site_logo" name="ss_site_logo" class="form-control" value="<?php echo config("config.ss_site_logo"); ?>">
                        <span class="input-group-addon"><a href="javascript:void();" onclick="upyunWapPicUpload('ss_site_logo')"><i class="fa fa-fw fa-upload"></i>点击上传</a></span>
            <span class="input-group-addon"><a href="javascript:void();" onclick="viewImg('ss_site_logo')"><i class="fa fa-fw fa-share"></i>预览</a></span>
                      </div>
                  </div>


                  <div class="form-group">
                      <label>底部版权：</label>
                      <input type="text" name="ss_site_copyright" value="<?php echo htmlentities(config("config.ss_site_copyright")) ;?>"  class="form-control required" >
                  </div>


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button  id="sub" class="btn btn-primary">提交</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->

          </div>   <!-- /.row -->
        </section><!-- /.content -->



      </div><!-- /.content-wrapper -->


      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 3.0
        </div>
        <?php echo config("config.ss_site_copyright"); ?>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">


          </div><!-- /.tab-pane -->

        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>


    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo config("config.ss_web_root"); ?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo config("config.ss_web_root"); ?>/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo config("config.ss_web_root"); ?>/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo config("config.ss_web_root"); ?>/dist/js/demo.js"></script>


<!--dialog-->
<div id="lr_confirm" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body" id="lr_config_msg">
         Are you sure?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="lr_del">确定</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
function lr_confirm(msg,url){
 $("#lr_config_msg").html(msg);
 $('#lr_confirm').modal({backdrop: 'static', keyboard: false })
        .one('click', '#lr_del', function (e) {
            location.href = url;
        });
}
</script>
<!--/.dialog-->


<script src="<?php echo config("config.ss_web_root"); ?>/misc/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo config("config.ss_web_root"); ?>/misc/regional.zh.js" type="text/javascript"></script>
<style type="text/css">
span.error {   overflow:hidden; width:165px; height:21px; padding:0 3px; line-height:21px; background:#F00; color:#FFF; top:5px; left:318px;}
label.alt {display:block; overflow:hidden; position:absolute;line-height:20px}
.textInput, input.focus, input.required, input.error, input.readonly, input.disabled,
</style>

<script type="text/javascript">
$.validator.setDefaults({errorElement:"span"});
$(document).ready(function()
{
  $('#sub').click (function () {
    var $form=$("#form1");
    if(!$form.valid()){
    return false;}
    $("form").submit();
  });
});
</script>





<script type="text/javascript">
      var ids = "";
      function addids(bb){
          if($(bb).is(':checked')){
            ids+=","+$(bb).val();
          }else{
             ids = ids.replace(","+$(bb).val(),"");
          }
          //console.log(ids);
      }
      var is_all = true;
      function addids_all(){
        if(is_all){
          $("input[name='id']").attr("checked","true");
          is_all = false;

          $("input[name='id']:checkbox:checked").each(function(){
            ids+=","+$(this).val();
          });
        }else{
          $("input[name='id']").removeAttr("checked");
          is_all = true;
          ids = "";
        }
      }

      function action(aa,bb){
        if(ids == ""){
          alert("请选择"); return;
        }
        if(ids !==""){
          ids = ids.substring(1);
        }
        console.log(ids);
        tmp = "/index.php?s=<?php echo request()->module(); ?>/<?php echo request()->controller(); ?>/<?php echo request()->action(); ?>/"+aa;
        $("#"+bb).attr("href",tmp+ids);
      }
    </script>



    </div><!-- ./wrapper -->




<script src="<?php echo config("config.ss_web_root"); ?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo config("config.ss_web_root"); ?>/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo config("config.ss_web_root"); ?>/upyun.js?2013"></script>



  </body>
</html>
