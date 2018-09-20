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
