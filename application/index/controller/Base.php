<?php
namespace app\index\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;

class Base extends \think\Controller
{

    protected $member;
    protected $fan;
    protected $mid;
    protected $time;

    public function _initialize(){
        if(empty(input('mid'))){
            $this->error('mid未指定');
        }
        $map['m_id'] = ['=',input('mid')];
        $member = Db::name('member')->where($map)->find();
        if(empty($member)){
            $this->error('公众账号未找到');
        }
        $this->mid = input('mid');
        $this->member = $member;
        $this->time = time();



        //获取粉丝信息
        $fan = Cookie::get('fan_'.input('mid'));

        if(empty($fan)){
           //授权获取粉丝信息
            if($member['m_web_auth']){
                $contro = request()->controller();
                $action = request()->action();
                if(empty(input('auth'))){ //web网页授权
                    header('Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$member['m_appid'].'&redirect_uri='.config("config.ss_site_domain").'/oauth2.php&response_type=code&scope=snsapi_userinfo&state='.input('id').'AAA'.$member['m_id'].'AAA'.$contro.'AAA'.$action.'AAA'.input('shareOpenId').'#wechat_redirect');
                    exit;
                }
            }
            //END

            if(input('wecha_id')){

                //回复关键字获取粉丝信息
                if($member['m_isConnent']){
                    jssdk($member,input('wecha_id'));
                }
                //END

                $map = [];
                $map['wecha_id'] = ['=',input('wecha_id')];
                $fan = Db::name('userinfo')->where($map)->find();
                Cookie::set('fan_'.input('mid'),$fan,config("config.ss_cookie_time"));
            }
        }
        $this->fan = $fan;
        $this->assign('fan', $fan);

        if(empty($fan)) $this->error('未获取粉丝信息，请重新授权');
        //END
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



    public function getLoginStatus(){
        if(empty($this->fan)){

        }else{

        }
    }



}
