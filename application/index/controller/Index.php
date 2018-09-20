<?php
namespace app\index\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;


use app\index\controller\Base;

class Index extends Base
{
    public function index()
    {
      if(input('act') == 'insert'){
          $post = input('post.');
          $post['mid'] = 1;
          $post['addtime'] = time();
          $result = Db::name('article_list')->insert($post);
          if($result){
              $this->success('提交成功！');
          }else{
              $this->error('提交失败！');
            }
        }
        return $this->fetch();
    }



    public function insert2()
    {
        $post = input('post.');
        $post['mid'] = 1;
        $post['addtime'] = time();
        $result = Db::name('article_list')->insert($post);
        if($result){
            $this->success('提交成功！');
        }else{
            $this->error('提交失败！');
        }
    }





}
