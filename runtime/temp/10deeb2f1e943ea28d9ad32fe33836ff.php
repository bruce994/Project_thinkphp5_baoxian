<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"/var/www/html/www/whyaojin.cn/application/member/view/poster_index_edit.html";i:1507608926;s:63:"/var/www/html/www/whyaojin.cn/application/member/view/head.html";i:1507608923;s:65:"/var/www/html/www/whyaojin.cn/application/member/view/footer.html";i:1507608922;}*/ ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo \think\Config::get('SITENAME'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/misc/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/misc/ionicons.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/plugins/select2/select2.min.css">
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
                  <img src="<?php echo cookie(config('config.ss_auth_member_key'))['avatar'];?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo cookie(config('config.ss_auth_member_key'))['m_username'];?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo cookie(config('config.ss_auth_member_key'))['avatar'];?>" class="img-circle" alt="User Image">
                    <p>
                    最后登陆时间：<?php echo date("m-d H:s",cookie(config('config.ss_auth_member_key'))['m_addtime']);?>
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
              <img src="<?php echo cookie(config('config.ss_auth_member_key'))['avatar'];?>" class="img-circle" alt="User Image">
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
            <?php
                $m_auth = explode(",",cookie(config('config.ss_auth_member_key'))['m_auth']);
             
            foreach($features as $f){
            if($f['className'] == "Article" &&  (in_array($f['id'],$m_auth)  )  ){
            ?>
            <li class="treeview <?php if(request()->param("ss") == 1){echo "active";} ?>">
            <a href="javascript:void(0);">
                <i class="fa fa-child"></i><span>资讯素材</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo url("article/index",array("ss"=>1)); ?>"><i class="fa fa-circle-o"></i>资讯设置</a></li>
                <li><a href="<?php echo url("article/randomPic",array("ss"=>1)); ?>"><i class="fa fa-circle-o"></i>随机图片管理</a></li>
                <li><a href="<?php echo url("article/type",array("ss"=>1)); ?>"><i class="fa fa-circle-o"></i>资讯分类</a></li>
                <li><a href="<?php echo url("article/articleList",array("ss"=>1)); ?>"><i class="fa fa-circle-o"></i>资讯素材</a></li>
            </ul>
            </li>
            <?php } }  
            foreach($features as $f){
            if($f['className'] == "Poster" &&  (in_array($f['id'],$m_auth)  )  ){
            ?>
            <li class="treeview <?php if(request()->param("ss") == 11){echo "active";} ?>">
            <a href="javascript:void(0);">
                <i class="fa fa-child"></i><span>海报管理</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo url("poster/index",array("ss"=>11)); ?>"><i class="fa fa-circle-o"></i>海报管理</a></li>
                <li><a href="<?php echo url("poster/form",array("ss"=>11)); ?>"><i class="fa fa-circle-o"></i>报名管理</a></li>
            </ul>
            </li>
            <?php } } ?>



            <li class="treeview <?php if(request()->param("ss") == 12){echo "active";} ?>">
            <a href="#">
                <i class="fa   fa-adn"></i><span>粉丝广告管理</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo url("index/fans",array("ss"=>12)); ?>"><i class="fa fa-circle-o"></i>粉丝管理</a></li>
                <li><a href="<?php echo url("index/ad",array("ss"=>12)); ?>"><i class="fa fa-circle-o"></i>顶部广告管理</a></li>
            </ul>
            </li>

            
           <li class="treeview <?php if(request()->param("ss") == 2){echo "active";} ?>"">
            <a href="#">
              <i class="fa  fa-cog"></i><span>微信设置</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo url("index/weixin",array("ss"=>2)); ?>"><i class="fa fa-circle-o"></i>接口配置</a></li>                
              <!--<li><a href="<?php echo url("System/wxPay",array("ss"=>2)); ?>"><i class="fa fa-circle-o"></i>微信支付配置</a></li>-->
              <li><a href="<?php echo url("index/diyMenu",array("ss"=>2)); ?>"><i class="fa fa-circle-o"></i>自定义菜单</a></li>                
              <li><a href="<?php echo url("index/reply",array("ss"=>2)); ?>"><i class="fa fa-circle-o"></i>自定义回复</a></li>                
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
                  <h3 class="box-title"><?php echo $title; ?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" id="form1" action="<?php echo $url; ?>" class="pageForm required-validate">
                    <div class="box-body">



                        <div class="form-group">
                            <label>活动是否开启状态</label>
                            启用　<input type="radio" id="auth" value = '1' name="status" <?php if($vo['status'] == 1): ?>checked<?php endif; ?>>&nbsp;&nbsp;&nbsp;关闭　<input type="radio" id="auth2" value = "0" name="status" <?php if($vo['status'] == 0): ?>checked<?php endif; ?>>
                        </div> 


                        <div class="form-group">
                            <label>活动是否开启报名</label>
                            启用　<input type="radio" id="auth" value = '1' name="isBao" <?php if($vo['isBao'] == 1): ?>checked<?php endif; ?>>&nbsp;&nbsp;&nbsp;关闭　<input type="radio" id="auth2" value = "0" name="isBao" <?php if($vo['isBao'] == 0): ?>checked<?php endif; ?>>
                        </div> 


                        <div class="form-group">
                            <label>照片是否必填：</label>
                            是　<input type="radio" id="isCheck_3" value = '1' name="isCheck_3" <?php if($vo['isCheck_3'] == 1): ?>checked<?php endif; ?>>&nbsp;&nbsp;&nbsp;否　<input type="radio" id="isCheck_32" value = "0" name="isCheck_3" <?php if($vo['isCheck_3'] == 0): ?>checked<?php endif; ?>>     
                        </div>   



                        <div class="form-group">
                            <label>活动主题：</label>
                            <input type="text" name="title"  class="form-control required"  value="<?php echo $vo['title']; ?>">
                        </div>




                        <div class="form-group">
                            <label>报名背景图</label><small>（最佳尺寸640*1000 宽为640 <a href="http://20160905.zz.lanrenmb.com/upload/d/b/e/d/58cb5803a041e.png"  target="_blank">点击查看参考</a>）</small>
                            <div class="input-group">
                                <input type="text" id="picurl2" name="picurl2" class="form-control" value="<?php echo $vo['picurl2']; ?>">
                                <span class="input-group-addon"><a href="javascript:void();" onclick="upyunWapPicUpload('picurl2')"><i class="fa fa-fw fa-upload"></i>点击上传</a></span>
                                <span class="input-group-addon"><a href="javascript:void();" onclick="viewImg('picurl2')"><i class="fa fa-fw fa-share"></i>预览</a></span>
                            </div>
                        </div>  


                        <div class="form-group">
                            <label>示例图</label><small>（最佳尺寸640*1000 宽为640 <a href="http://20160905.zz.lanrenmb.com/upload/b/3/d/f/58cb559c5af53.png"  target="_blank">点击查看参考</a>）</small>
                            <div class="input-group">
                                <input type="text" id="picurl1" name="picurl1" class="form-control" value="<?php echo $vo['picurl1']; ?>">
                                <span class="input-group-addon"><a href="javascript:void();" onclick="upyunWapPicUpload('picurl1')"><i class="fa fa-fw fa-upload"></i>点击上传</a></span>
                                <span class="input-group-addon"><a href="javascript:void();" onclick="viewImg('picurl1')"><i class="fa fa-fw fa-share"></i>预览</a></span>
                            </div>
                        </div>  






                        <div class="form-group">
                            <label>海报图片</label><small>（该图片必须透明png格式;最佳尺寸640*1000 宽为640  <a href="http://20160905.zz.lanrenmb.com/upload/1/e/4/2/58cb5b092a6f3.png"  target="_blank">点击查看参考</a>）</small>
                            <div class="input-group">
                                <input type="text" id="picurl" name="picurl" class="form-control" value="<?php echo $vo['picurl']; ?>">
                                <span class="input-group-addon"><a href="javascript:void();" onclick="upyunWapPicUpload('picurl',0,0)"><i class="fa fa-fw fa-upload"></i>点击上传</a></span>
                                <span class="input-group-addon"><a href="javascript:void();" onclick="viewImg('picurl')"><i class="fa fa-fw fa-share"></i>预览</a></span>
                            </div>
                        </div>  




                        <div class="form-group">
                            <label>合成海报页面顶部关键字：</label>
                            <input type="text" name="keyword"  class="form-control"  value="<?php echo $vo['keyword']; ?>">
                        </div>




                        <!-- Date range -->
                        <div class="form-group">
                            <label>活动开始时间：</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>  
                                </div>
                                <input type="text" class="form-control pull-right" id="statdate" name="statdate" value="<?php echo date("Y-m-d H:i",$vo['statdate']); ?>">
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->


                        <!-- Date range -->
                        <div class="form-group">
                            <label>活动结束时间：</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="enddate" name="enddate" value="<?php echo date("Y-m-d H:i",$vo['enddate']); ?>">
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->


                        <div class="form-group">
                            <label>微信关注图片</label><small>(微信二维码)</small>
                            <div class="input-group">
                                <input type="text" id="wx_picurl" name="wx_picurl" class="form-control" value="<?php echo $vo['wx_picurl']; ?>">
                                <span class="input-group-addon"><a href="javascript:void();" onclick="upyunWapPicUpload('wx_picurl')"><i class="fa fa-fw fa-upload"></i>点击上传</a></span>
                                <span class="input-group-addon"><a href="javascript:void();" onclick="viewImg('wx_picurl')"><i class="fa fa-fw fa-share"></i>预览</a></span>
                            </div>
                        </div>

<!--
                        <div class="form-group">
                            <label>设置点赞限制时间：</label><small>(小时)</small>
                            <input type="text" name="hour" value="<?php echo $vo['hour']; ?>"  class="form-control "  >
                        </div>


                        <div class="form-group">
                            <label>限制每人小时点赞数： </label><small>(小时数以上面设置为准)</small>
                            <input type="text" name="cknums"   class="form-control number"  value="<?php echo $vo['cknums']; ?>" >
                        </div>
-->


                        <div class="form-group">
                            <label>活动参位第几位基数： </label><small>(后继依次递增)</small>
                            <input type="text" name="base_num"   class="form-control number"  value="<?php echo $vo['base_num']; ?>" >
                        </div>



                        <div class="form-group">
                            <div class="row"><div class="col-lg-12"><label>用户上传图合并坐标设置</label>
                                </div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon"> X坐标 </span><input type="text" class="form-control required number" name="poster_x" value="<?php echo $vo['poster_x']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">Y坐标</span><input type="text" class="form-control required number" name="poster_y" value="<?php echo $vo['poster_y']; ?>"></div></div>
                        </div></div>

                        <div class="form-group">
                            <div class="row"><div class="col-lg-12"><label>用户上传图缩放大小</label><small>为0不缩放</small>
                                </div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon"> 缩放宽度 </span><input type="text" class="form-control required number" name="poster_width" value="<?php echo $vo['poster_width']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">缩放高度</span><input type="text" class="form-control required number" name="poster_height" value="<?php echo $vo['poster_height']; ?>"></div></div>
                        </div></div>


                        <!--
                        <div class="form-group">
                            <div class="row"><div class="col-lg-12"><label>二维码坐标设置</label><small>若不想要带参数二维码请设置宽度和高度为1</small>
                                </div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon"> X坐标 </span><input type="text" class="form-control required number" name="qrcode_x" value="<?php echo $vo['qrcode_x']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">Y坐标</span><input type="text" class="form-control required number" name="qrcode_y" value="<?php echo $vo['qrcode_y']; ?>"></div></div><div class="col-lg-3"><div class="input-group"><span class="input-group-addon">宽度</span><input type="text" class="form-control required number" name="qrcode_width" value="<?php echo $vo['qrcode_width']; ?>"></div></div><div class="col-lg-3"><div class="input-group"><span class="input-group-addon">高度</span><input type="text" class="form-control required number" name="qrcode_height" value="<?php echo $vo['qrcode_height']; ?>"></div></div>
                        </div></div>
                        -->


                        <div class="form-group">
                            <div class="row"><div class="col-lg-12"><label>第一行文字设置</label><small></small>

                                </div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon"> X坐标 </span><input type="text" class="form-control required number" name="field_1_x" value="<?php echo $vo['field_1_x']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">Y坐标</span><input type="text" class="form-control required number" name="field_1_y" value="<?php echo $vo['field_1_y']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">字体大小</span><input type="text" class="form-control required number" name="field_1_size" value="<?php echo $vo['field_1_size']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">字体颜色</span><input type="text" class="form-control required colorpick " name="field_1_color" value="<?php echo $vo['field_1_color']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">字体</span>
                                        <select name="field_1_font"  class="form-control ">
                                            <option value="FZLTH8K.TTF"  <?php if($vo['field_1_font'] == 'FZLTH8K.TTF'){ ?>selected <?php } ?> >方正字体</option>
                                        </select>

                                </div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">字体间距</span><input type="text" class="form-control required number  " name="field_1_margin" value="<?php echo $vo['field_1_margin']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">换行字数</span><input type="text" class="form-control required number " name="field_1_split_length" value="<?php echo $vo['field_1_split_length']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">间行距离</span><input type="text" class="form-control required number " name="field_1_wrap" value="<?php echo $vo['field_1_wrap']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">文字方向</span><select name="field_1_direction"  class="form-control ">
                                            <option value="1"  <?php if($vo['field_1_direction'] == 1){ ?>selected <?php } ?> >横向</option>
                                            <option value="2" <?php if($vo['field_1_direction'] == 2){ ?>selected <?php } ?> >竖向</option>
                                </select></div></div>
                                

                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">显示文本</span><input type="text" class="form-control required  " name="field_1_text" value="<?php echo $vo['field_1_text']; ?>"></div></div>


                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">是否启用</span> 是　<input type="radio"  value = '1' name="field_1_isCheck" <?php if($vo['field_1_isCheck'] == 1): ?>checked<?php endif; ?>>&nbsp;&nbsp;&nbsp;否　<input type="radio" value = "0" name="field_1_isCheck" <?php if($vo['field_1_isCheck'] == 0): ?>checked<?php endif; ?>> </div></div>


                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">关联字段</span> <select name="field_1_connect"  class="form-control ">
                                            <option value="" ></option>
                                            <option value="username"  <?php if($vo['field_1_connect'] == 'username'){ ?>selected <?php } ?> >姓名</option>
                                            <option value="tel"  <?php if($vo['field_1_connect'] == 'tel'){ ?>selected <?php } ?> >电话</option>
                                </select> </div></div>


                        </div></div>

                        <div class="form-group">
                            <div class="row"><div class="col-lg-12"><label>第二行文字设置</label>
                                </div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon"> X坐标 </span><input type="text" class="form-control required number" name="field_2_x" value="<?php echo $vo['field_2_x']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">Y坐标</span><input type="text" class="form-control required number" name="field_2_y" value="<?php echo $vo['field_2_y']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">字体大小</span><input type="text" class="form-control required number" name="field_2_size" value="<?php echo $vo['field_2_size']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">字体颜色</span><input type="text" class="form-control required colorpick " name="field_2_color" value="<?php echo $vo['field_2_color']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">字体</span>
                                        <select name="field_2_font"  class="form-control ">
                                            <option value="FZLTH8K.TTF"  <?php if($vo['field_2_font'] == 'FZLTH8K.TTF'){ ?>selected <?php } ?> >方正字体</option>
                                        </select>

                                </div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">字体间距</span><input type="text" class="form-control required number  " name="field_2_margin" value="<?php echo $vo['field_2_margin']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">换行字数</span><input type="text" class="form-control required number " name="field_2_split_length" value="<?php echo $vo['field_2_split_length']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">间行距离</span><input type="text" class="form-control required number " name="field_2_wrap" value="<?php echo $vo['field_2_wrap']; ?>"></div></div>
                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">文字方向</span><select name="field_2_direction"  class="form-control ">
                                            <option value="1"  <?php if($vo['field_2_direction'] == 1){ ?>selected <?php } ?> >横向</option>
                                            <option value="2" <?php if($vo['field_2_direction'] == 2){ ?>selected <?php } ?> >竖向</option>
                                </select></div></div>
                                

                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">显示文本</span><input type="text" class="form-control required  " name="field_2_text" value="<?php echo $vo['field_2_text']; ?>"></div></div>



                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">是否启用</span> 是　<input type="radio"  value = '1' name="field_2_isCheck" <?php if($vo['field_2_isCheck'] == 1): ?>checked<?php endif; ?>>&nbsp;&nbsp;&nbsp;否　<input type="radio" value = "0" name="field_2_isCheck" <?php if($vo['field_2_isCheck'] == 0): ?>checked<?php endif; ?>> </div></div>

                                <div class="col-lg-3"><div class="input-group"><span class="input-group-addon">关联字段</span> <select name="field_2_connect"  class="form-control ">
                                            <option value="" ></option>
                                            <option value="username"  <?php if($vo['field_2_connect'] == 'username'){ ?>selected <?php } ?> >姓名</option>
                                            <option value="tel"  <?php if($vo['field_2_connect'] == 'tel'){ ?>selected <?php } ?> >电话</option>
                                </select> </div></div>



                        </div></div>


                        <div class="form-group">
                            <label>报名是否人工审核：</label>
                            是　<input type="radio" id="isCheck" value = '1' name="isCheck" <?php if($vo['isCheck'] == 1): ?>checked<?php endif; ?>>&nbsp;&nbsp;&nbsp;否　<input type="radio" id="isCheck2" value = "0" name="isCheck" <?php if($vo['isCheck'] == 0): ?>checked<?php endif; ?>>     
                        </div>   






                 <div class="form-group">
                        <label>模板界面风格：</label>
                        <div class="input-group">
                            <?php
                            $tmp = '';
                            foreach($list as $tt){
                                if($tt['id'] == $vo['template']){
                                    $tmp = $tt['title'];
                                }   
                            }

                            //自定义模板
                            if(empty($tmp) && $vo['template']){
                                 $tmp = '您的个性化模板';
                            }
                            //END

                            ?>
                            <input type="text" id="template_a" class="form-control" value="<?php echo $tmp; ?>" readonly>
                            <span class="input-group-addon"><a href="javascript:void();" data-toggle="modal" data-target="#myModal88"><i class="fa fa-fw fa-check-square-o"></i>点击选择模板</a></span>
                        </div>
                    </div>  

<!--dialog-->
<style>
.modal-dialog {
  width: 95%;
  height: auto;
  padding: 0;
}

.modal-content {
  height: auto;
  border-radius: 0;
}
</style>
         <div id="myModal88" class="modal fade" tabindex="-1" role="dialog">
             <div class="modal-dialog " role="document">
                 <div class="modal-content">
                     <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title">模板选择</h4></div>

                     <div class="modal-body" style="text-align:center;">

                         <div class="container-fluid">
                             <div class="row">
                                 <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                     <neq name="list.picurl" value="">
                                         <div class="col-md-4" >
                                             <p style="text-align:center;">
                                             <b><?php echo $list['title']; ?></b>
                                             </p>
                                             <p style="text-align:center;">
                                             <img src="<?php echo $list['picurl']; ?>" width="320" height="580">
                                             </p>
                                             <p style="text-align:center;border-bottom-style: solid;border-width: 1px;padding-bottom: 5px;">
                                             选中：<input type="radio" id="template<?php echo $list['id']; ?>" value="<?php echo $list['id']; ?>" name="template" <?php if($list['id'] == $vo['template']){ ?>checked <?php } ?> onclick="template_cc('<?php echo $list['title']; ?>')">
                                             </p>               
                                         </div>
                                     </neq>
                                 <?php endforeach; endif; else: echo "" ;endif;  if(!empty($_SESSION["member"]['m_template'])){  ?>
                                 <div class="col-md-4" >
                                     <p style="text-align:center;">
                                     <b>您的个性化模板</b>
                                     </p>
                                     <p style="text-align:center;">
                                     <img src="/Public/images/gexinghua.png" width="320" height="580">
                                     </p>
                                     <p style="text-align:center;border-bottom-style: solid;border-width: 1px;padding-bottom: 5px;">
                                     选中：<input type="radio" id="template<?php echo $_SESSION["member"]['m_id']; ?>" value="<?php echo $_SESSION["member"]['m_template']; ?>" name="template" <?php if($_SESSION["member"]['m_template'] == $vo['template']){ ?>checked <?php } ?> onclick="template_cc('您的个性化模板')">
                                     </p>               
                                 </div>
                                 <?php } ?>

                             </div>
                         </div>                 


                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                     </div>
                 </div>
             </div>
         </div>            
         <!--END dialog-->

         <script type="text/javascript">
            function template_cc(vv){
                $("#myModal88").modal('hide');
                $("#template_a").val(vv);
            }
         </script>





                        


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


  <!-- date-range-picker -->
  <script src="<?php echo config("config.ss_web_root"); ?>/misc/moment.min.js"></script>
  <script src="<?php echo config("config.ss_web_root"); ?>/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/plugins/daterangepicker/daterangepicker-bs3.css">
    <script>
      $(function () {
        //Date range picker with time picker
        $('#statdate').daterangepicker({singleDatePicker: true, timePickerIncrement: 1,timePicker: true,timePicker12Hour:false, format: 'YYYY-MM-DD HH:mm'});
        $('#enddate').daterangepicker({singleDatePicker: true, timePickerIncrement: 1,timePicker: true,timePicker12Hour:false, format: 'YYYY-MM-DD HH:mm'});
      });
    </script>


<link href="<?php echo config("config.ss_web_root"); ?>/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
<script src="<?php echo config("config.ss_web_root"); ?>/plugins/colorpicker/bootstrap-colorpicker.js"></script><script>
$(function(){
        $('.colorpick').colorpicker();
        });
    </script>


  </body>
</html>
