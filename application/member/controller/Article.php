<?php
namespace app\member\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;


use app\member\controller\Base;

class Article extends Base
{


 public function index()
    {
      $this->assign('head', '资讯设置');
        if (request()->isPost()) {
          $post = input('post.');
          $tmp = Db::name('article')->where('mid', $this->auth['m_id'])->find();
          if($tmp){
              $result = Db::name('article')->where('mid', $this->auth['m_id'])->update($post);
              $tid = $tmp['id'];
          }else{
              $post['mid'] = $this->mid;
              $result = Db::name('article')->insert($post);
              $tid = Db::name('article')->getLastInsID();
          }
          if($result){
              if($post['keyword']){
                    $tmp = Db::name('keyword')->where(['tid'=>$tid,'mid'=>$this->mid,'table'=>'article'])->find();
                    if($tmp){
                        Db::name('keyword')->where(['tid'=>$tid,'mid'=>$this->mid,'table'=>'article'])->update(['keyword'=>$post['keyword']]);
                    }else{
                        Db::name('keyword')->insert(['keyword'=>$post['keyword'],'tid'=>$tid,'mid'=>$this->mid,'table'=>'article']);
                    }
              }
              $this->success('修改成功！');
          }else{
            $this->error('修改失败');
          }
        }

      $map2['status'] = ['=',1];
      $controller = request()->controller();
      $features = Db::name("features")->where(['className'=>['=',$controller]])->field("id")->find();
      $map2['typeid'] = ['=',$features['id']];
      $list = Db::name("template")->where($map2)->select();
      $this->assign('list', $list);


      $map['mid'] = ['=',$this->mid];
      $vo = $this->edit($map,'article');;
      $this->assign('vo', $vo);
      $this->assign('vo', $vo);
      return $this->fetch();
    }




    public function articlelist()
    {
      $map['mid'] = ['=',$this->mid];
      $this->assign('head', '资讯素材管理');

      if(input('act') == 'del'){
         $map['id'] = ['in',input('id')];
         $this->delete($map,$this->url,'article_list');
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
          $vo = $this->edit($map,'article_list');;
          $this->assign('vo', $vo);
          return $this->fetch('article_articlelist_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $this->update($map,$post,$this->url,'article_list');
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['addtime'] = $this->time;
          $post['mid'] = $this->mid;
          $this->insert($post,$this->url,'article_list');
      }
      else{
        $list = $this->home($map,['id'=>'desc'],'article_list');
        $this->assign('list', $list);
        return $this->fetch();
      }
    }



    public function type()
    {
      $map['mid'] = ['=',$this->mid];
      $this->assign('head', '资讯分类管理');

      if(input('act') == 'del'){
         $map['id'] = ['in',input('id')];
         $this->delete($map,$this->url,'article_type');
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
          $vo = $this->edit($map,'article_type');;
          $this->assign('vo', $vo);
          return $this->fetch('article_type_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          Cache::rm("article_type");
          $this->update($map,$post,$this->url,'article_type');
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['mid'] = $this->mid;
          Cache::rm("article_type");
          $this->insert($post,$this->url,'article_type');
      }
      else{
        $list = $this->home($map,['sort'=>'asc'],'article_type');
        $this->assign('list', $list);
        return $this->fetch();
      }
    }



    public function randomPic()
    {
      $map['mid'] = ['=',$this->mid];
      $this->assign('head', '随机图片管理');

      if(input('act') == 'del'){
         $map['id'] = ['in',input('id')];
         $this->delete($map,$this->url,'article_randomPic');
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
          $vo = $this->edit($map,'article_randomPic');;
          $this->assign('vo', $vo);
          return $this->fetch('article_randomPic_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $this->update($map,$post,$this->url,'article_randomPic');
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['mid'] = $this->mid;
          $this->insert($post,$this->url,'article_randomPic');
      }
      else{
        $list = $this->home($map,['id'=>'desc'],'article_randomPic');
        $this->assign('list', $list);
        return $this->fetch('article_randomPic');
      }
    }



}
