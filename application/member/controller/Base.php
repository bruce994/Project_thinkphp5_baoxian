<?php
namespace app\member\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;

class Base extends \think\Controller
{

    protected $auth;
    protected $url;
    protected $mid;
    protected $time;

    public function _initialize(){
      $controller = request()->controller();
      $action = request()->action();
      $action_exp = array("login");
      $auth = Cookie::get(config('config.ss_auth_member_key'));
      if(!in_array($action,$action_exp) && !input("pwd")){
          if(!$auth){
              $this->error('没有登录',url("Base/login"));
          }
      }
      $this->time = time();
      $this->auth = $auth;
      $this->mid = $auth['m_id'];
      $this->url = url($controller."/".$action,["ss"=>input('ss')]);

      $features = Cache::get("features");
      if(empty($features)){
          $map['status'] = ['=',1];
          $features = Db::name("features")->where($map)->select();
          Cache::set("features",$features);
      }
      $this->assign('features', $features);
      $this->assign('mid', $this->mid);

    }

    public function index()
    {
        return $this->fetch();
    }



    Public function home($map,$order,$table = ''){
          $action = $table ? $table : request()->action();
          $list = Db::name($action)->where($map)->order($order)->paginate(null, false, ['query' => Request::instance()->param()]);
          return $list;
    }


    Public function edit($map,$table = ''){
          $action = $table ? $table : request()->action();
          $vo = Db::name($action)->where($map)->find();
          return $vo;
    }

    public function delete($map,$url = '',$table=''){
          $action = $table ? $table : request()->action();
          $result = Db::name($action)->where($map)->delete();
          if($result){
              $this->success('删除成功！',$url);
          }else{
            $this->error('删除失败',$url);
          }
    }


    public function insert($post,$url = '',$table=''){
          $action = $table ? $table : request()->action();
          $result = Db::name($action)->insert($post);
          if($result){
              $this->success('添加成功！',$url);
          }else{
            $this->error('添加失败',$url);
          }
    }

    public function update($map,$post,$url = '',$table =''){
          $action = $table ? $table : request()->action();
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
              $auth = Db::name('member')->where('m_username', input("post.username"))->find();
              if(!$auth){
                  $this->error('帐号不存在');
              }elseif($auth['m_password'] != md5(input("post.password"))){
                $this->error('密码不正确');
              }else{
                Db::name('member')->where('m_username', input("post.username") )->update(['m_addtime' => time(),'m_ip'=>request()->ip()]);
                if (($key = array_search($auth['m_password'], $auth)) !== false) { //移除重要信息
                      unset($auth[$key]);
                 }
                 if(!$auth['avatar']){
                    $auth['avatar'] =  config('config.ss_web_root').'/dist/img/user2-160x160.jpg';
                 }
                 Cookie::set(config('config.ss_auth_member_key'),$auth);

                 $this->success('登陆成功！',url("Index/index"));
              }
            }
        }

        Cookie::set ( '_currentUrl_', request()->url());
        return $this->fetch();
    }



    public function directLogin()
    {
          $auth = Db::name('member')->where(['m_id'=>input("mid"),'m_password'=>input("pwd")])->find();
          if(!$auth){
              $this->error('帐号不存在');
          }else{
            if (($key = array_search($auth['m_password'], $auth)) !== false) { //移除重要信息
                  unset($auth[$key]);
             }
             if(!$auth['avatar']){
                $auth['avatar'] =  config('config.ss_web_root').'/dist/img/user2-160x160.jpg';
             }
             Cookie::set(config('config.ss_auth_member_key'),$auth);
             $this->success('登陆成功！',url("Index/index"));
          }
    }



}
