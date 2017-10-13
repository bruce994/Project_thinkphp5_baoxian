<?php
namespace app\member\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;

use app\member\controller\Base;

class Index extends Base
{

    public function index()
    {
        return $this->fetch();
    }

    public function pwd()
    {
      $this->assign('head', '密码修改');
        if (request()->isPost()) {
            if (empty(input("post.password"))){
              $this->error('密码不能为空');
            }else{
                $result = Db::name('member')->where('m_id', $this->auth['m_id'] )->update(['m_password' => md5(input("post.password"))]);
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
          $result = Db::name('member')->where('m_id', $this->auth['m_id'] )->update($post);
          if($result){
              cookie::clear(config('cookie.prefix'));
              $this->success('修改成功！，请重新登陆',url("Base/login"));
          }else{
            $this->error('修改失败');
          }
        }
        return $this->fetch();
    }



    public function weixin()
    {
        $this->assign('head', '微信公众号平台');
        $this->assign('title', '设置');
        $this->assign('url', url(request()->controller().'/'.request()->action(),["act"=>"update","ss"=>input('ss')]));
        $map['m_id'] = ['=',$this->mid];
        if(input('act') == 'update'){
            $post = input('post.');
            $this->update($map,$post,$this->url,'member');
        }
        $vo = $this->edit($map,'member');
        $this->assign('vo', $vo);
        return $this->fetch();
    }


 public function diymenu()
    {
      $this->assign('head', '自定义菜单管理');
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

            $pp = Db::name("Diymenu")->where("pid=0 and mid=".$this->mid)->field("id,title")->select();
            $this->assign ( 'pp', $pp );

            $reply = Db::name("Reply")->where("mid=".$this->mid." and keyword<>''  ")->order('addtime')->field('keyword')->select();
            $this->assign ( 'reply', $reply );

          return $this->fetch('index_diymenu_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $this->update($map,$post,$this->url);
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['mid'] = $this->mid;
          $this->insert($post,$this->url);
      }
      else{
        $map['mid'] = ['=',$this->mid];
        $map['pid'] = ['=',0];
        $list = $this->home($map,['id'=>'desc']);
        $this->assign('list', $list);
        return $this->fetch();
      }
    }



    public function greatemenu() {
        $str = array();
        $list = Db::name("Diymenu")->where("pid=0 and mid=".$this->mid)->order("sort")->select();
        foreach ($list as $value) {
            $list2 = Db::name("diymenu")->where("pid=".$value['id'])->order("sort")->select();
            $tmp3 = array();
            foreach ($list2 as $value2) {
                $tmp2 = array();
                if($value2['typeid'] == "0"){
                    $tmp2['type'] = "click";
                    $tmp2['name'] = urlencode($value2['title']);
                    $tmp2['key'] = urlencode($value2['keyword']);
                }
                if($value2['typeid'] == "1"){
                    $tmp2['type'] = "view";
                    $tmp2['name'] = urlencode($value2['title']);
                    $tmp2['url'] = $value2['url'];
                }
                $tmp3[] = $tmp2;
            }
            if(empty($tmp3)){//没有子菜单
                $tmp2 = array();
                if($value['typeid'] == "0"){
                    $tmp2['type'] = "click";
                    $tmp2['name'] = urlencode($value['title']);
                    $tmp2['key'] = urlencode($value['keyword']);
                }
                if($value['typeid'] == "1"){
                    $tmp2['type'] = "view";
                    $tmp2['name'] = urlencode($value['title']);
                    $tmp2['url'] = $value['url'];
                }
                $tmp[] = $tmp2;
            }else{
                $tmp[] = array("name"=>urlencode($value["title"]),"sub_button"=>$tmp3);
            }
        }
        $str["button"] = $tmp;
        $content =  json_encode($str);
        $content = urldecode($content);

        $member = Db::name("Member")->where("m_id=".$this->mid)->field("m_appid,m_appsecret")->find();
        if($member['m_appid'] && $member['m_appsecret'] ){
            $res = json_decode(httpGet("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$member['m_appid']."&secret=".$member['m_appsecret']),true);
            if(!isset($res['errcode'])){
                $access_token = $res['access_token'];

                $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
                curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $res = curl_exec($ch);
                if (curl_errno($ch)) {
                    echo 'Errno'.curl_error($ch);exit;
                }
                curl_close($ch);
                $res = json_decode($res,true);

                if(!empty($res['errcode'])){
                    $this->error ('生成失败！'.$res['errcode']);
                }
                else{
                    $this->success ('生成成功！' );
                }
            }
            else{
                $this->error ('生成失败！'.$res['errcode']);
            }
        }
        else{
            $this->error ('生成失败！appid appsecret 为空！');
        }
    }


 public function reply()
    {
      $this->assign('head', '微信自定义回复管理');
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
          $vo = $this->edit($map);
          $this->assign('vo', $vo);

          return $this->fetch('index_reply_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $this->update($map,$post,$this->url);
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['mid'] = $this->mid;
          $post['addtime'] = $this->time;
          $this->insert($post,$this->url);
      }
      else{
        $map['mid'] = ['=',$this->mid];
        $list = $this->home($map,['id'=>'desc']);
        $this->assign('list', $list);
        return $this->fetch();
      }
    }



public function fans()
    {
      $map['mid'] = ['=',$this->mid];
      $this->assign('head', '粉丝管理');
      if(input('act') == 'del'){
         $map['id'] = ['in',input('id')];
         $this->delete($map,$this->url,'userinfo');
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
          $vo = $this->edit($map,'userinfo');;
          $this->assign('vo', $vo);
          return $this->fetch('index_fans_edit');
      }else{
       if(input('wechaname')){
           $map['wechaname'] = ['like','%'.input('wechaname').'%'];
        }
        $list = $this->home($map,['id'=>'desc'],'userinfo');
        $this->assign('list', $list);
        return $this->fetch();
      }
    }

public function ad()
    {
      $features = Cache::get("features");
      if(empty($features)){
          $map['status'] = ['=',1];
          $features = Db::name("features")->where($map)->select();
          Cache::set("features",$features);
      }
      $this->assign('features', $features);


      $map['mid'] = ['=',$this->mid];
      $this->assign('head', '广告管理');
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
          $vo = $this->edit($map);
          $this->assign('vo', $vo);

          if($vo){
              $features = Db::name("features")->where(['id'=>['=',$vo['featuresId']]])->find();
              $table = $features['className'];
          }else{
                if(isset($features[0])){
                      $table = $features[0]['className'];
                      if(input('featuresId')){
                          $features = Db::name("features")->where(['id'=>['=',input("featuresId")]])->find();
                          $table = $features['className'];
                      }
                  }
          }
          $vlist = Db::name($table)->where(['status'=>['=','1']])->select();
          $this->assign('vlist', $vlist);

          return $this->fetch('index_ad_edit');
      }elseif(input('act') == 'update'){
          $map['id'] = ['=',input('id')];
          $post = input('post.');
          $this->update($map,$post,$this->url);
      }elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['mid'] = $this->mid;
          $post['addtime'] = $this->time;
          $this->insert($post,$this->url);
      }else{
        $list = $this->home($map,['id'=>'desc']);
        $this->assign('list', $list);
        return $this->fetch();
      }
    }


}
