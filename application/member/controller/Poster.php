<?php
namespace app\member\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;


use app\member\controller\Base;

class Poster extends Base
{


    public function index()
    {
      $map['mid'] = ['=',$this->mid];
      $this->assign('head', '海报管理');

      if(input('act') == 'del'){
         $map['id'] = ['in',input('id')];
          $map3['tid'] = ['in',input('id')];
          Db::name('keyword')->where($map3)->delete();
         $this->delete($map,$this->url,'poster');
      }elseif(input('act') == 'edit' || input('act') == 'add'){
          $map2['status'] = ['=',1];
          $controller = request()->controller();
          $features = Db::name("features")->where(['className'=>['=',$controller]])->field("id")->find();
          $map2['typeid'] = ['=',$features['id']];
          $list = Db::name("template")->where($map2)->select();
          $this->assign('list', $list);

          if(input('act') == 'add'){
            $this->assign('title', '添加');
            $this->assign('url', url(request()->controller().'/'.request()->action(),["act"=>"insert","ss"=>input('ss')]));
          }
          if(input('act') == 'edit'){
              $this->assign('title', '编辑');
              $this->assign('url', url(request()->controller().'/'.request()->action(),["act"=>"update","id"=>input('id'),"ss"=>input('ss')]));
          }
          $map['id'] = ['=',input('id')];
          $vo = $this->edit($map,'poster');;
          $this->assign('vo', $vo);
          return $this->fetch('poster_index_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $post['statdate'] = strtotime($post['statdate']);
          $post['enddate'] = strtotime($post['enddate']);
          if($post['keyword']){
                $tmp = Db::name('keyword')->where(['tid'=>input('id'),'mid'=>$this->mid,'table'=>'poster'])->find();
                if($tmp){
                    Db::name('keyword')->where(['tid'=>input('id'),'mid'=>$this->mid,'table'=>'poster'])->update(['keyword'=>$post['keyword']]);
                }else{
                    Db::name('keyword')->insert(['keyword'=>$post['keyword'],'tid'=>input('id'),'mid'=>$this->mid,'table'=>'poster']);
                }
          }
          $this->update($map,$post,$this->url,'poster');
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['addtime'] = $this->time;
          $post['statdate'] = strtotime($post['statdate']);
          $post['enddate'] = strtotime($post['enddate']);
          $post['mid'] = $this->mid;
          $result = Db::name('poster')->insertGetId($post);
          if($post['keyword'] && $result){
            Db::name('keyword')->insert(['keyword'=>$post['keyword'],'tid'=>$result,'mid'=>$this->mid,'table'=>'poster']);
          }
         if($result){
              $this->success('添加成功！',$this->url);
          }else{
            $this->error('添加失败',$this->url);
          }
      }
      else{
        $list = $this->home($map,['id'=>'desc'],'poster');
        $this->assign('list', $list);
        return $this->fetch();
      }
    }


public function form()
    {
          $map['mid'] = ['=',$this->mid];
          $this->assign('head', '报名管理');

          $map2['status'] = ['=',1];
          $map2['mid'] = ['=',$this->mid];
          $poster = Db::name("poster")->where($map2)->select();
          $this->assign('poster', $poster);

      if(input('act') == 'del'){
         $map['id'] = ['in',input('id')];
         $this->delete($map,$this->url,'poster_form');
      }elseif(input('act') == 'edit' || input('act') == 'add'){
          if(input('act') == 'add'){
            $this->assign('title', '添加');
            $this->assign('url', url(request()->controller().'/'.request()->action(),["act"=>"insert","ss"=>input('ss')]));
          }
          if(input('act') == 'edit'){
              $this->assign('title', '编辑');
              $this->assign('url', url(request()->controller().'/'.request()->action(),["act"=>"update","id"=>input('id'),"ss"=>input('ss')]));
          }
          $map['id'] = ['=',input('id')];
          $vo = $this->edit($map,'poster_form');;
          $this->assign('vo', $vo);
          return $this->fetch('poster_form_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $this->update($map,$post,$this->url,'poster_form');
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['addtime'] = $this->time;
          $post['mid'] = $this->mid;
          $this->insert($post,$this->url,'poster_form');
      }
      else{
       if(input('field_1')){
           $map['field_1'] = ['like','%'.input('field_1').'%'];
        }
       if(input('field_2')){
           $map['field_2'] = ['like','%'.input('field_2').'%'];
        }
       if(input('pid')){
           $map['pid'] = ['=',input('pid')];
        }
        $list = $this->home($map,['id'=>'desc'],'poster_form');
        $this->assign('list', $list);
        return $this->fetch();
      }
    }




}
