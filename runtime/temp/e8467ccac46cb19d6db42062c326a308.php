<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"/var/www/html/www/whyaojin.cn/application/admin/view/index_features.html";i:1507610120;s:62:"/var/www/html/www/whyaojin.cn/application/admin/view/head.html";i:1507610120;s:64:"/var/www/html/www/whyaojin.cn/application/admin/view/footer.html";i:1507610120;}*/ ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo config("config.ss_site_name"); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo config('config.ss_web_root'); ?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo config('config.ss_web_root'); ?>/misc/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo config('config.ss_web_root'); ?>/misc/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo config('config.ss_web_root'); ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo config('config.ss_web_root'); ?>/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo config('config.ss_web_root'); ?>/dist/css/no-more-tables.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo config('config.ss_web_root'); ?>/misc/html5shiv.min.js"></script>
        <script src="<?php echo config('config.ss_web_root'); ?>/misc/respond.min.js"></script>
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
            <div class="col-xs-12">
              <div class="box">
                  <div class="box-header">
                      <div style="float:left;margin:0 8px;">
                        <a href="<?php echo url("index/features",array("act"=>"add","ss"=>1)); ?>" class="btn btn-block btn-default btn-sm"><i class="fa fa-fw fa-plus"></i>添加</a>
                      </div>
                      <div style="float:left;">
                        <a href="#" id="ids0" class="btn btn-block btn-default btn-sm" onclick="action('act/del/id/','ids0');"> <i class="fa fa-fw fa-remove"></i>
                         删 除
                       </a>
                       </div>
                  </div><!-- /.box-header -->
                <div class="box-body">
                    <section id="no-more-tables">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>选择<input type="checkbox" onclick="addids_all()" ></th>
                        <th>编号</th>
                        <th>名称</th>
                        <th>是否启用</th>
                        <th>对应类名</th>
                        <th>排序</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr>
                      <td data-title="选择">
                      <input name="id" value="<?php echo $vo['id']; ?>" type="checkbox" onclick="addids(this)"></td>
                      <td data-title="编号"><?php echo $vo['id']; ?></td>
                      <td data-title="名称"><?php echo $vo['title']; ?></td>
                      <td data-title="是否启用">
                             <?php if($vo['status'] == '0'): ?>
                                <span class="label label-danger">关闭</span>
                             <?php endif; if($vo['status'] == '1'): ?>
                                <span class="label label-success">启用</span>
                             <?php endif; ?>
                      </td>
                      <td data-title="对应类名"><?php echo $vo['className']; ?></td>
                      <td data-title="排序"><?php echo $vo['sort']; ?></td>
                      <td data-title="操作">
                         <a title="编辑" href="<?php echo url("index/features",array("act"=>"edit","id"=>$vo['id'],"ss"=>1)); ?>"><i class="fa fa-fw fa-edit"></i></a> |
                        <a  href="javascript:void(0);" data-toggle="modal" data-target="#lc_confirm" onclick="lr_confirm('确定删除？','<?php echo url("index/features",array("act"=>"del","id"=>$vo['id'],"ss"=>1)); ?>');"><i class="fa fa-fw fa-remove"></i></a>
                      </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    </tbody>
                  </table>
                  </section>

                </div><!-- /.box-body -->

                <div class="row" style="margin-left:5px;">
                  <div class="col-sm-5"><div class="dataTables_info"><?php echo $list->total(); ?> 条记录 <?php echo $list->currentPage(); ?>/<?php echo $list->lastPage(); ?> 页</div></div>
                  <div class="col-sm-6">
                    <div class="dataTables_paginate paging_simple_numbers">
                    <ul class="pagination">
                      <?php echo $list->render(); ?>
                   </ul>
                  </div>
                  </div>
                </div>

              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
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





  </body>
</html>
