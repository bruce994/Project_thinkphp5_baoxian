<?php
namespace app\index\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;


use app\index\controller\Base;

class Poster extends Base
{


public function index()
{
    $user = $this->fan;
    $member = $this->member;
    $this->assign('member', $member);

      $map['id'] = ['=',input('id')];
      $vo = $this->edit($map,'poster');;
      $this->assign('vo', $vo);

     $map['mid'] = ['=',$this->mid];
     if(input('act') == 'edit' ){
          return $this->fetch('poster_edit');
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['addtime'] = $this->time;
          $post['mid'] = $this->mid;
          $post['pid'] = input('id');
          if(input("wecha_id")){
              $post['wecha_id'] = input('wecha_id');
          }

          $post['field_1'] =  $vo['field_1_connect'] ? $user['username'] : input('field_1');
          $post['field_2'] = $vo['field_2_connect'] ? $user['tel'] : input('field_2');

          $result = Db::name('poster_form')->insert($post);
          if($result){
              $id = Db::name('poster_form')->getLastInsID();

              if($vo['field_1_isCheck'] && !input("field_1")){
                  $this->error($vo['field_1_text'].'为必填项');
                }elseif($vo['field_2_isCheck'] && !input("field_2")){
                    $this->error($vo['field_2_text'].'为必填项');
                }elseif($vo['isCheck_3'] && !input("picurl")){
                    $this->error('上传照片为必填项');
            }

                     //图片合并
                    $merge = ROOT_PATH.$vo['picurl'];
                    $outFile = ROOT_PATH."public/uploads/poster/".$id.".jpg";
                    if(!empty(input('picurl'))){
                        $poster = ROOT_PATH.input('picurl');
                        if($vo['poster_width'] && $vo['poster_height'] ){
                          $im = new \Imagick($poster);
                          $im->resizeImage($vo['poster_width'], $vo['poster_height'], \Imagick::FILTER_LANCZOS, 0.9);//缩放
                          $im->writeImage($poster);
                        }

                        $src1 = new \Imagick($merge); //png
                        $src2= new \Imagick($poster);

                        $output = new \Imagick();
                        $output->newimage( $src1->getImageWidth(),$src1->getImageHeight(), "none" );
                        $output->compositeImage($src2, \Imagick::COMPOSITE_DEFAULT, $vo['poster_x'], $vo['poster_y']);
                        $output->compositeimage($src1, \Imagick::COMPOSITE_OVER, 0, 0); //png 放在最后
                        $output->writeimage($outFile);
                        $output->destroy();

                    }else{
                        if(strstr(strtolower($merge),".png")){
                            $im = new \Imagick($merge);
                            $im->setImageFormat('jpg');
                            $im->writeImage($outFile);
                            $im->clear();
                            $im->destroy();
                        }
                    }
                    //END
//echo $outFile;exit;

                        //文字处理
                        $FF = array(
                            array(
                                'text'=> $post['field_1'] ,
                                'fontSize'=>$vo['field_1_size'],
                                'x'=>$vo['field_1_x'],
                                'y'=>$vo['field_1_y'],
                                'fontPath'=>ROOT_PATH.'public/uploads/font/'.$vo['field_1_font'],
                                'margin'=>$vo['field_1_margin'],
                                'split_length'=>$vo['field_1_split_length'],
                                'wrap'=>$vo['field_1_wrap'],
                                'direction'=>$vo['field_1_direction'],
                                'color'=>html2rgb($vo['field_1_color'])),
                            array(
                                'text'=> $post['field_2'] ,
                                'fontSize'=>$vo['field_2_size'],
                                'x'=>$vo['field_2_x'],
                                'y'=>$vo['field_2_y'],
                                'fontPath'=>ROOT_PATH.'public/uploads/font/'.$vo['field_2_font'],
                                'margin'=>$vo['field_2_margin'],
                                'split_length'=>$vo['field_2_split_length'],
                                'wrap'=>$vo['field_2_wrap'],
                                'direction'=>$vo['field_2_direction'],
                                'color'=>html2rgb($vo['field_2_color']))
                    );

                     $poster = scrivi($FF,$outFile,ROOT_PATH."public/uploads/poster/".$id,100);

                      $poster = str_replace(ROOT_PATH,'/',$poster);
                      $data = ['posterTime'=>$this->time,'posterUrl'=>$poster];
                      Db::name('poster_form')->where(["id"=>$id])->update($data);

                    //添加二维码

                    //END
              $this->success('生成海报成功！',url("poster/index",['act'=>"create",'mid'=>$member['m_id'],"id"=>input("pid"),"fid"=>$id]));
          }else{
              $this->success('生成海报失败！');
          }
      }elseif(input('act') == 'create'){
          $form = Db::name('poster_form')->where(["id"=>input("fid")])->find();
          $this->assign('form', $form);
          return $this->fetch('poster_create');
      }

     $map1['mid'] = ['=',$this->mid];
     $map1['status'] = ['=',1];
     $list = $this->home($map1,['id'=>'desc'],'poster');
     $this->assign('list', $list);
     return $this->fetch();
}






}
