<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Cookie;



use app\admin\controller\Base;

class Upyun extends \think\Controller
{

    public function wap()
    {
        return $this->fetch();
    }

    public function upload(){
        $files = request()->file('upload');
        if(!is_array($files)){
            $files = array($files);
        }
        foreach($files as $file){
            $path = ROOT_PATH . 'public' . DS . 'uploads';
            $info = $file->validate(['size'=>config('config.ss_upload_size')*1024*1024,'ext'=>config('config.ss_upload_type')]);
            if($info){
                $des = $info->getInfo();
                if(strstr($des['type'],'text')){
                    $info = $file->move(ROOT_PATH,'');
                    $msg = $info->getSaveName();
                    $error = 0;
                }
                elseif(strstr($des['type'],'image')){
                    $info = $file->move($path);
                    if(config('config.ss_thumb') && input('width') !== "0"){
                      $image = \think\Image::open($path."/".$info->getSaveName());
                      $width = $image->width();
                      if(config('config.ss_thumb_width') <  $width){
                        $path_1 = "/".str_replace($info->getFilename(),'thumb_'.$info->getFilename(),$info->getSaveName());
                        $image->thumb(config('config.ss_thumb_width'), config('config.ss_thumb_height'))->save($path.$path_1);
                        $msg = '/public' . DS . 'uploads'.$path_1;
                        $error = 0;
                      }else{
                        $msg = '/public' . DS . 'uploads/'.$info->getSaveName();
                        $error = 0;
                      }
                    }else{
                       $msg = '/public' . DS . 'uploads/'.$info->getSaveName();
                       $error = 0;
                    }
                }else{
                   $msg = '/public' . DS . 'uploads/'.$info->getSaveName();
                   $error = 0;
                }
            }else{
                // 上传失败获取错误信息
                $msg = $file->getError();
                $error = 1;
            }
        }

        //编辑器
        if(isset($_GET['CKEditor'])){
                $funcNum = $_GET['CKEditorFuncNum'] ;
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$msg', '$msg');</script>";
                exit;
        }
        //END

        $msg  = str_replace('/','MM',$msg);
        $this->redirect('Upyun/wap', ['error' => $error,'msg'=>$msg]);
    }


}
