<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"/var/www/html/www/whyaojin.cn/application/index/view/member_index_edit.html";i:1507610104;s:64:"/var/www/html/www/whyaojin.cn/application/index/view/footer.html";i:1507610103;}*/ ?>

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
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo config("config.ss_web_root"); ?>/dist/css/skins/_all-skins.min.css">

     <!-- jQuery 2.1.4 -->
      <script src="<?php echo config("config.ss_web_root"); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>


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


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="margin-left:0px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="text-align:center;">
              <?php echo $head; ?>
          </h1>
          <ol class="breadcrumb">
              <li><a href="<?php echo url("article/index",['mid'=>$member['m_id']]); ?>"><i class="fa fa-dashboard"></i> 首页</a></li>
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
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" id="form1" action="<?php echo url("member/index",["act"=>"update","mid"=>$fan['mid']]); ?>" class="pageForm required-validate">
                  <div class="box-body">

                      <div class="form-group">
                          <label>姓名：</label>
                          <input type="text" name="username" value="<?php echo $vo['username']; ?>" class="form-control required"  >
                      </div>
                      <div class="form-group">
                          <label>电话：</label>
                          <input type="text" name="tel" value="<?php echo $vo['tel']; ?>" class="form-control required number"  >
                      </div>
                      <div class="form-group">
                          <label>QQ：</label>
                          <input type="text" name="qq" value="<?php echo $vo['qq']; ?>" class="form-control "  >
                      </div>
                      <div class="form-group">
                          <label>公司地址：</label>
                          <input type="text" name="address" value="<?php echo $vo['address']; ?>" class="form-control "  >
                      </div>
                      <div class="form-group">
                            <label>头像</label>
                            <div class="input-group">
                                <input type="text" id="picurl" name="picurl" class="form-control " value="<?php echo $vo['picurl']; ?>">
                                <span class="input-group-addon"><a href="javascript:void();" onclick="upyunWapPicUpload('picurl')"><i class="fa fa-fw fa-upload"></i>点击上传</a></span>
                                <span class="input-group-addon"><a href="javascript:void();" onclick="viewImg('picurl')"><i class="fa fa-fw fa-share"></i>预览</a></span>
                            </div>
                        </div>  


                        <div class="form-group">
                            <label>个人微信二维码</label>
                            <div class="input-group">
                                <input type="text" id="wxPicurl" name="wxPicurl" class="form-control " value="<?php echo $vo['wxPicurl']; ?>">
                                <span class="input-group-addon"><a href="javascript:void();" onclick="upyunWapPicUpload('wxPicurl')"><i class="fa fa-fw fa-upload"></i>点击上传</a></span>
                                <span class="input-group-addon"><a href="javascript:void();" onclick="viewImg('wxPicurl')"><i class="fa fa-fw fa-share"></i>预览</a></span>
                            </div>
                        </div>


                      <div class="form-group">
                          <label>个人介绍</label>
                          <textarea id="content" name="summary" style="width:100%;height:80px;"><?php echo $vo['summary']; ?></textarea>
                      </div>

                      <div class="form-group">
                          <label>微站选择模板:</label>
                          <select name="template" class="form-control select2">
                              <?php
                              $tmp = think\Db::name('features')->where("className='Member'")->find();
                              $list = think\Db::name('template')->where("typeid=".$tmp['id'])->select();
                              foreach($list as $f){
                              ?>
                              <option value="<?php echo $f['folder']; ?>"  <?php if($vo['template'] == $f['folder']){  ?>selected <?php } ?> ><?php echo $f['title']; ?></option>
                              <?php } ?>
                          </select>
                      </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer" style="text-align:center;">
                    <button  id="sub" class="btn btn-primary">提交</button>
                  </div>
                </form> 
              </div><!-- /.box -->

            </div><!--/.col (left) -->

          </div>   <!-- /.row -->
        </section><!-- /.content -->

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


      </div><!-- /.content-wrapper -->


    </div><!-- ./wrapper -->

    <script src="<?php echo config("config.ss_web_root"); ?>/artDialog/jquery.artDialog.js?skin=default"></script>
    <script src="<?php echo config("config.ss_web_root"); ?>/artDialog/plugins/iframeTools.js"></script>
    <script src="<?php echo config("config.ss_web_root"); ?>/upyun.js?2013"></script>


<!-- Select2 -->
<script src="<?php echo config("config.ss_web_root"); ?>/plugins/select2/select2.full.min.js"></script>
<script>
$(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
        }
 );
</script>  



  </body>
</html>
