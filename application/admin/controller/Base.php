<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;

class Base extends \think\Controller
{

    protected $auth;
    protected $url;

    public function _initialize(){
      $controller = request()->controller();
      $action = request()->action();
      $action_exp = array("login");
      $auth = Cookie::get(config('config.ss_auth_key'));
      if(!in_array($action,$action_exp)){
          if(!$auth){
              $this->error('没有登录',url("Base/login"));
          }
      }
      $this->auth = $auth;
      $this->url = url($controller."/".$action,["ss"=>input('ss')]);
    }

    public function index()
    {
        return $this->fetch();
    }



    Public function home($map,$order){
          $action = request()->action();
          $list = Db::name($action)->where($map)->order($order)->paginate(null, false, ['query' => Request::instance()->param()]);
          return $list;
    }


    Public function edit($map){
          $action = request()->action();
          $vo = Db::name($action)->where($map)->find();
          return $vo;
    }

    public function delete($map,$url = ''){
          $action = request()->action();
          $result = Db::name($action)->where($map)->delete();
          if($result){
              $this->success('删除成功！',$url);
          }else{
            $this->error('删除失败',$url);
          }
    }


    public function insert($post,$url = ''){
          $action = request()->action();
          $result = Db::name($action)->insert($post);
          if($result){
              $this->success('添加成功！',$url);
          }else{
            $this->error('添加失败',$url);
          }
    }

    public function update($map,$post,$url = ''){
          $action = request()->action();
          $result = Db::name($action)->where($map)->update($post);
          if($result){
              $this->success('更新成功！',$url);
          }else{
            $this->error('更新失败',$url);
          }
    }



    public function logout(){
      cookie::clear(config('cookie.prefix'));
      $this->success('退出成功！',url("Base/login"));
    }

    public function login()
    {
        if (request()->isPost()) {
            $this->assign ( 'jumpUrl', input('cookie._currentUrl_'));
            if(empty(input("post.username"))) {
        			$this->error('帐号不能为空！');
        		}elseif (empty($_POST['password'])){
        			$this->error('密码不能为空');
        		}elseif(input("post.username") && input("post.password")){
              $auth = Db::name('admin')->where('username', input("post.username"))->find();
              if(!$auth){
                  $this->error('帐号不存在');
              }elseif($auth['password'] != md5(input("post.password"))){
                $this->error('密码不正确');
              }else{
                Db::name('admin')->where('username', input("post.username") )->update(['login_time' => time(),'ip'=>request()->ip()]);
                if (($key = array_search($auth['password'], $auth)) !== false) { //移除重要信息
                      unset($auth[$key]);
                 }
                 if(!$auth['avatar']){
                    $auth['avatar'] =  config('config.ss_web_root').'/dist/img/user2-160x160.jpg';
                 }
                 Cookie::set(config('config.ss_auth_key'),$auth);

                 $this->success('登陆成功！',url("Index/index"));
              }
            }
        }

        Cookie::set ( '_currentUrl_', request()->url());
        return $this->fetch();
    }



}
