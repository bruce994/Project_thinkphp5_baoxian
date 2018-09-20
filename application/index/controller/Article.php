<?php
namespace app\index\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;


use app\index\controller\Base;

class Article extends Base
{


public function index()
{
    var_dump($this->fan);

    $map['mid'] = ['=',$this->mid];

    if(input("typeid")){
         $type =  Db::name("article_type")->where(['id'=>['=',input('typeid')]])->field('jump_url')->find();
         if($type['jump_url']){
             header('Location: '.$type['jump_url']);
             exit;
         }
     }


    if(input('act') == 'type'){
        $return = '{"advertiseArea":[],"status":"ok","lock":"1","classDefinition":[{"id":1,"consultTypeName":"资讯","consultTypeCode":"discover"},{"id":2,"consultTypeName":"海报","consultTypeCode":"productPromotion"}],"lock1":"1","lockForProduction":null}';
        echo  $return;
        exit;
    }elseif(input('act') == 'list'){

         $map1['status'] = ['=','1'];
         if(input("typeid")){
             $map1['typeid'] = ['=',input("typeid")];
         }
         $list = Db::name("article_list")->where(array_merge($map,$map1))->order(['addtime'=>'desc'])->paginate(input("pageSize"), false, ['query' => Request::instance()->param()]);
        foreach($list as $dd){
                    $data[] = ["summary"=>"","tabNum"=>"","updatedDate"=>"","infoType"=>"时事理财","effectDate"=>null,"infoCode"=>"","showCover"=>"2","production"=>"","updatedBy"=>"","content"=>"","id"=>$dd['id'],"author"=>"人民日报","relayCount"=>$dd['share'],"coverImgUrl"=>$dd['picurl'],"originalLink"=>"","title"=>$dd['title'],"browseCount"=>$dd['view'],"createdBy"=>"","cancleDate"=>null,"adFrom"=>"","isUp"=>"1","shortName"=>"","createdDate"=>date("Y-m-d H:i:s",$dd['addtime'])];

            }
        $list = json_encode($data);

        $data = array();
        $ads = $this->home($map,['addtime'=>'desc'],'ad');
        foreach($ads as $dd){
                            $data[] = ["url"=>$dd['url'],"summary"=>"","tabNum"=>"1","updatedDate"=>"","infoType"=>"时事理财","effectDate"=>null,"infoCode"=>"","showCover"=>"2","production"=>"","updatedBy"=>"","content"=>"","id"=>$dd['id'],"author"=>"","relayCount"=>23,"coverImgUrl"=>config('config.ss_site_domain').$dd['picurl'],"originalLink"=>"","title"=>$dd['title'],"browseCount"=>1098,"createdBy"=>"","cancleDate"=>null,"adFrom"=>"","isUp"=>"2","shortName"=>"","createdDate"=>date("Y-m-d H:i:s",$dd['addtime'])];

                    }
        $ads = json_encode($data);


        $return = '{"message":"success","body":{"infoList":'.$list.',"upInfos":'.$ads.'},"code":"200"}';
        echo  $return;
        exit;
    }


     return $this->fetch();
}


public function content()
{
   // var_dump($this->fan);
    $map['mid'] = ['=',$this->mid];
    $user = $this->fan;
    $member = $this->member;
    $this->assign('member', $member);
    $this->assign('user', $user);

     $map['id'] = ['=',input("id")];
     $vo = Db::name('article_list')->where($map)->find();
     if($vo['jump_url']){
         header('Location: '.$vo['jump_url']);
         exit;
     }

    if(input('act') == 'info'){
        $return = '  {"message":"success","body":{"parameter":"http://caap.pingan.com.cn","productionInfo":{},"info":{"summary":"'.$vo['title'].'","tabNum":"","updatedDate":"2017-09-20 11:24:58.0","infoType":"大话保险","effectDate":{"nanos":0,"time":1505944800000,"minutes":0,"seconds":0,"hours":6,"month":8,"timezoneOffset":-480,"year":117,"day":4,"date":21},"infoCode":"bigTalkInsurance","showCover":"2","production":"","updatedBy":"system","video":"'.compress_html(str_replace('"','\"',htmlspecialchars_decode($vo['video']))).'","content":"'.compress_html(str_replace('"','\"',htmlspecialchars_decode($vo['content']))).'","id":"4e165f3d-3a17-4490-a9f6-98558a31aec7","author":"保险论坛","relayCount":518,"coverImgUrl":"'.config('config.ss_site_domain').$vo['picurl'].'","originalLink":"","title":"'.$vo['title'].'","browseCount":'.$vo['view'].',"createdBy":"system","cancleDate":{"nanos":0,"time":253402271999000,"minutes":59,"seconds":59,"hours":23,"month":11,"timezoneOffset":-480,"year":8099,"day":5,"date":31},"adFrom":"0","isUp":"1","shortName":"","createdDate":"'.date("Y-m-d H:i:s",$vo['addtime']).'"}},"code":"200"}';
        echo  $return;
        exit;
    }elseif(input('act') == 'user'){
        //分享微信ID
        if(input("shareOpenId")){
            $user = Db::name('userinfo')->where(["wecha_id"=>input("shareOpenId")])->find();
        }
        //END

        $return = '{"cardName":"'.$user['wechaname'].'","flag":false,"address":"","headImage":"'.$user['wechahead'].'","company":"'.$user['username'].'","motton":"","microShopDTO":{"openID":"'.$user['wecha_id'].'","remark":"","templetID":"","updatedDate":"2017-08-23 12:59:48.0","type":"","version":0,"updatedBy":"system","id":"b0a80685-29ce-4538-835d-6830d3399d39","shopid":"'.$user['wecha_id'].'","createdBy":"system","description":"","shopName":"","photoUrl":"","createdDate":"2017-08-23 12:59:48.0","qrcodeImage":"'.$user['wxPicurl'].'"},"gender":1,"isCheck":"Y","wxID":"'.$user['wecha_id'].'","telphone":"'.$user['tel'].'"}';
        echo  $return;
        exit;
    }elseif(input('act') == 'edit'){
      $this->assign('head', '发布原创文章');
      $this->assign('title', '编辑');
      return $this->fetch('article_content_edit');
    } elseif(input('act') == 'updateShareCnt'){
           Db::name('article_list')->where(["id"=>input("id")])->setInc('share');
      }
    elseif(input('act') == 'insert'){
          $post = input('post.');
          $post['addtime'] = $this->time;
          $post['mid'] = $this->mid;
          $post['wecha_id'] = $user['wecha_id'];
          $this->insert($post,url("article/index",["mid"=>$user['mid']]),'article_list');
      }

     Db::name('article_list')->where($map)->setInc('view');
     return $this->fetch();
}


public function reprint(){
    $user = $this->fan;
    $member = $this->member;
    $this->assign('member', $member);

    if(input('act') == 'insert'){
          $post = input('post.');
          $post['addtime'] = $this->time;
          $post['mid'] = $this->mid;
          $post['wecha_id'] = $user['wecha_id'];

          $title = $content = '';
          if(input("url")){

                $source = httpGet(htmlspecialchars_decode(input("url")));


                preg_match("'<h2 class=\"rich_media_title\" id=\"activity-name\">(.*?)<\/h2>(.*?)<div class=\"rich_media_content \" id=\"js_content\">(.*?)<\/div>'si", $source, $match);
                if($match){
                    $title = $match[1];
                    $content = $match[3];

                    //$content = preg_replace('/<img(.*?)data-src=\"(.*?)\"/si', '<img src="$2&tp=webp&wxfrom=5&wx_lazy=1"', $content);

                    $content = preg_replace_callback('/<img(.*?)data-src=\"(.*?)\" data-type=\"(.*?)\"/si', function ($matches) {
                      $mm = explode(" ",microtime());
                      $path = ROOT_PATH . 'public' . DS . 'uploads';
                      $file = "public/uploads/weixin/".$mm[0].".".$matches[3];
                      file_put_contents(ROOT_PATH.$file,file_get_contents($matches[2]));
                      //$imagick = new \Imagick(ROOT_PATH.$file);
                      //$imagick_type_format = $imagick->getFormat();
                      return "<img src=\"/".$file."\"";
        }, $content);


//var_dump($content);
//exit;



                    preg_match("'<img src=\"(.*?)\"'si", $content, $match);
                    if($match){
                        $post['picurl'] = $match[1];
                    }else{
                        $random = Db::query("select picurl from ".config('database.prefix')."article_random_pic  where mid=".$this->mid." ORDER BY RAND()  limit 0,1");
                        if($random){
                            $post['picurl'] = $random[0]['picurl'];
                        }
                    }


                    $post['title'] = compress_html($title);

                    $map1['title'] = ['=',$post['title']];
                    $tmp = Db::name("article_list")->where($map1)->field('id')->find();
                    if($tmp){
                        $this->error('文章已存在,不要重复转载');
                    }

                    $post['content'] = compress_html($content);
                    $post['status'] = 0;
                }
          }
          if(empty($title) || empty($content)){
                $this->error('获取文章异常，请检查网址是否正确');
          }


          $this->insert($post,url("article/index",["mid"=>$user['mid']]),'article_list');
      }
     return $this->fetch();
}


}
