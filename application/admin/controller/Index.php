<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;

use app\admin\controller\Base;

class Index extends Base
{


    public function index()
    {
        //var_dump($_COOKIE);
        return $this->fetch();
    }


    public function pwd()
    {
      $this->assign('head', '密码修改');
        if (request()->isPost()) {
            if (empty(input("post.password"))){
              $this->error('密码不能为空');
            }else{
                $result = Db::name('admin')->where('id', $this->auth['id'] )->update(['password' => md5(input("post.password"))]);
                if($result){
                    cookie::clear(config('cookie.prefix'));
                    $this->success('修改成功！，请重新登陆',url("Base/login"));
                }else{
                  $this->error('修改失败');
                }
            }
        }
        return $this->fetch();
    }





    public function setting()
    {
      $this->assign('head', '个人设置');
        if (request()->isPost()) {
          $post = input('post.');
          $result = Db::name('admin')->where('id', $this->auth['id'] )->update($post);
          if($result){
              cookie::clear(config('cookie.prefix'));
              $this->success('修改成功！，请重新登陆',url("Base/login"));
          }else{
            $this->error('修改失败');
          }
        }
        return $this->fetch();
    }

    public function system()
    {

      $this->assign('head', '系统设置');

        if (request()->isPost()) {
            $post = input('post.');
            $post['ss_web_root'] = config('config.ss_web_root');
            $post['ss_auth_key'] = config('config.ss_auth_key');
            file_put_contents(APP_PATH.'/extra/config.php', ""."<?php\n return	".var_export($post,true).";\n?>");
        		recursiveRemoveDirectory(RUNTIME_PATH);
            $this->success('修改成功！');
        }
        return $this->fetch();
    }


    public function clear()
    {
      recursiveRemoveDirectory(RUNTIME_PATH);
      $this->success('清除成功！',url("Index"));
    }

    public function admin()
    {
      $this->assign('head', '管理员列表');
      if(input('act') == 'del'){
         $map['id'] = ['in',input('id')];
         $this->delete($map,$this->url);
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
          $vo = $this->edit($map);;
          $this->assign('vo', $vo);
          return $this->fetch('index_admin_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          if(empty($post['password'])){
             unset($post['password']);
          }else{
            $post['password'] = md5($post['password']);
          }
          $this->update($map,$post,$this->url);
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['password'] = md5($post['password']);
          $this->insert($post,$this->url);
      }
      else{
        $map = [];
        $list = $this->home($map,['id'=>'desc']);
        $this->assign('list', $list);
        return $this->fetch();
      }
    }

    public function features()
    {
      $this->assign('head', '功能管理');
      if(input('act') == 'del'){
         $map['id'] = ['in',input('id')];
         $this->delete($map,$this->url);
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
          $vo = $this->edit($map);;
          $this->assign('vo', $vo);
          return $this->fetch('index_features_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $this->update($map,$post,$this->url);
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $this->insert($post,$this->url);
      }
      else{
        $map = [];
        $list = $this->home($map,['sort'=>'asc']);
        $this->assign('list', $list);
        return $this->fetch();
      }
    }


    public function template()
    {
      $this->assign('head', '模板管理');
      $features = Cache::get("features");
      if(empty($features)){
          $map['status'] = ['=',1];
          $features = Db::name("features")->where($map)->select();
          Cache::set("features",$features);
      }
      $this->assign('features', $features);

      if(input('act') == 'del'){
         $map['id'] = ['in',input('id')];
         $this->delete($map,$this->url);
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
          $vo = $this->edit($map);;
          $this->assign('vo', $vo);
          return $this->fetch('index_template_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $this->update($map,$post,$this->url);
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $this->insert($post,$this->url);
      }
      else{
        $map = [];
        $list = $this->home($map,['sort'=>'asc']);
        $this->assign('list', $list);
        return $this->fetch();
      }
    }


}
