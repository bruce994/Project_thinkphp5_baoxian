<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"/var/www/html/www/whyaojin.cn/application/view/msg.html";i:1493877902;}*/ ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo config("config.ss_site_name"); ?>提示信息</title>
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

  <!-- jQuery 2.1.4 -->
  <script src="<?php echo config("config.ss_web_root"); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>

  <?php if(isset($misc)){echo $misc;} ?>

  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">


      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container" style="text-align:center;">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              提示信息
              <small><?php echo config("config.ss_site_name"); ?></small>
            </h1>
          </section>

          <!-- Main content -->
          <section class="content" >
            <?php switch ($code) {case 1:?>
              <div class="callout callout-info">
                <p><?php echo(strip_tags($msg));?></p>
              </div>
            <?php break;case 0:?>
              <div class="callout callout-danger">
                <p><?php echo(strip_tags($msg));?></p>
              </div>
            <?php break;} ?>

            <div class="box box-default">
              <div class="box-body">
              页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
              </div><!-- /.box-body -->
            </div><!-- /.box -->



          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 3.0
        </div>
        <?php echo config("config.ss_site_copyright"); ?>
      </footer>

    </div><!-- ./wrapper -->


    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo config("config.ss_web_root"); ?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo config("config.ss_web_root"); ?>/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo config("config.ss_web_root"); ?>/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo config("config.ss_web_root"); ?>/dist/js/demo.js"></script>


    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>


  </body>
</html>
