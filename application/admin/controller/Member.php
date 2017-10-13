<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;


use app\admin\controller\Base;

class Member extends Base
{


    public function member()
    {
      $features = Cache::get("features");
      if(empty($features)){
          $map['status'] = ['=',1];
          $features = Db::name("features")->where($map)->select();
          Cache::set("features",$features);
      }
      $this->assign('features', $features);

      $this->assign('head', '会员管理');

      $group = Cache::get("memberGroup");
      if(empty($group)){
          $group = Db::name("Member_group")->select();
          Cache::set("memberGroup",$group);
      }
      $this->assign('group', $group);

      if(input('act') == 'del'){
         $map['m_id'] = ['in',input('id')];
         $this->delete($map,$this->url);
      }elseif(input('act') == 'edit' || input('act') == 'add'){
          if(input('act') == 'add'){
            $this->assign('title', '添加');
            $this->assign('url', url(request()->controller().'/'.request()->action(),["act"=>"insert","ss"=>input('ss')]));
          }
          if(input('act') == 'edit'){
              $this->assign('title', '编辑');
              $this->assign('url', url(request()->controller().'/'.request()->action(),["act"=>"update","m_id"=>input('id'),"ss"=>input('ss')]));
          }
          $map['m_id'] = ['=',input('id')];
          $vo = $this->edit($map);
          $this->assign('vo', $vo);
          return $this->fetch('member_index_edit');
      }elseif(input('act') == 'update'){
          $map['m_id'] = ['=',input('m_id')];
          $post = input('post.');
          if(isset($post['m_auth'])){
              $post['m_auth'] = implode(',',$post['m_auth']);
          }
          if(empty($post['m_password'])){
             unset($post['m_password']);
          }else{
            $post['m_password'] = md5($post['m_password']);
          }
          $this->update($map,$post,$this->url);
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['m_password'] = md5($post['m_password']);
          $this->insert($post,$this->url);
      }
      else{
        $map = [];
        if(input('m_username')){
           $map['m_username'] = ['like','%'.input('m_username').'%'];
        }
        $list = $this->home($map,['m_id'=>'desc']);
        $this->assign('list', $list);
        return $this->fetch('member_index');
      }
    }


        public function member_group()
        {
           $this->assign('head', '会员组管理');

          if(input('act') == 'del'){
             $map['id'] = ['in',input('id')];
             $this->delete($map,$this->url);
          }elseif(input('act') == 'edit' || input('act') == 'add'){
              if(input('act') == 'add'){
                $this->assign('title', '添加');
                $this->assign('url', url(request()->controller().'/'.request()->action(),array("act"=>"insert","ss"=>input('ss'))));
              }
              if(input('act') == 'edit'){
                  $this->assign('title', '编辑');
                  $this->assign('url', url(request()->controller().'/'.request()->action(),array("act"=>"update","id"=>input('id'),"ss"=>input('ss'))));
              }
              $map['id'] = ['=',input('id')];
              $vo = $this->edit($map);;
              $this->assign('vo', $vo);
              return $this->fetch('member_group_edit');
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
            return $this->fetch('member_group');
          }
        }



    public function notice()
    {
      $this->assign('head', '会员公告');
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
          return $this->fetch('member_notice_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $this->update($map,$post,$this->url);
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['addtime'] = time();
          $this->insert($post,$this->url);
      }
      else{
        $map = [];
        $list = $this->home($map,['id'=>'desc']);
        $this->assign('list', $list);
        return $this->fetch();
      }
    }









}
