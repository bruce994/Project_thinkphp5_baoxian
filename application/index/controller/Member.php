<?php
namespace app\index\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;


use app\index\controller\Base;

class Member extends Base
{


public function index()
{
    $user = $this->fan;
    $member = $this->member;
    $this->assign('member', $member);

     $map['mid'] = ['=',$this->mid];
     if(input('act') == 'edit' ){
          $this->assign('head', '个人信息设置');
          $vo = $this->edit(['wecha_id'=>['=',$user['wecha_id']]],'userinfo');;
          $this->assign('vo', $vo);
          return $this->fetch('member_index_edit');
      }elseif(input('act') == 'insert'){
      }elseif(input('act') == 'update'){
          $map['wecha_id'] = ['=',$user['wecha_id']];
          $post = input('post.');
          //重新设置cookie
        $fan = Db::name('userinfo')->where(['id'=>$user['id']])->find();
        Cookie::set('fan_'.$member['m_id'],$fan,config("config.ss_cookie_time"));
          //END
          $this->update($map,$post,url('member/index',['mid'=>$member['m_id']]),'userinfo');
      }


     $ads = Db::name('ad')->where($map)->order(['addtime'=>'desc'])->select();
     $this->assign('ads', $ads);


    $tmp = Db::name('template')->where(['folder'=>$user['template']])->field('id')->find();

    $map1['isWzShow'] = ['=',1];
    $type = Db::name('article_type')->where(array_merge($map,$map1,['template'=>$tmp['id']]))->order(['sort'=>'asc'])->select();
     $this->assign('type', $type);

    if(input("openid")){
        $map2['wecha_id'] = ['=',input('openid')];
        $tmp_user = Db::name('userinfo')->where(['wecha_id'=>input('openid')])->field('wechahead')->find();
        $user['wechahead'] = $tmp_user['wechahead'];
    }else{
        $map2['wecha_id'] = ['=',$user['wecha_id']];
    }
    $list = $this->home(array_merge($map,$map2),['addtime'=>'desc'],'article_list');
    $this->assign('list', $list);

    $this->assign('user', $user);

     return $this->fetch($user['template']);
}






}
