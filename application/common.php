<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;


function compress_html($string){
    return trim(preg_replace(array("/> *([^ ]*) *</","/<!--[^!]*-->/","'/\*[^*]*\*/'","/\r\n/","/\n/","/\t/",'/>[ ]+</',"/\s(?=\s)/"),array(">\\1<",'','','','','','><',''),$string));
}


function recursiveRemoveDirectory($directory)
{
    foreach(glob("{$directory}/*") as $file)
    {
        if(is_dir($file)) {
            recursiveRemoveDirectory($file);
        } else {
            unlink($file);
        }
    }
    rmdir($directory);
}



function httpGet($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_URL, $url);
    $res = curl_exec($curl);
    curl_close($curl);
    return $res;
}


function randomCode($n) {
    /*$str_1 = range('a','z');
    $str_2 = range('A', 'Z');*/
    $str_3 = range(0,9);
    //$strArr = array_merge($str_1,$str_2,$str_3);
    //随机产生6位随机数
    $strCode = '';
    for($i=0;$i<=$n;$i++) {
        $strCode .= $str_3[mt_rand(0,9)];
    }
    return $strCode;
}


function jssdk($member,$wecha_id=''){
    require_once "public/weixin/jssdk.php";
    $jssdk = new JSSDK($member['m_appid'], $member['m_appsecret']);
    $signPackage = $jssdk->GetSignPackage();
    $res = json_decode(file_get_contents("access_token-".$member['m_appid'].".json"),true);

//var_dump($res);
    if($wecha_id){
        if(!isset($res['errcode'])){
            $access_token = $res['access_token'];
            $res1 = json_decode(httpGet("https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$wecha_id),true);
            //var_dump($res1);exit;
            if(!isset($res1['errcode'])){

                //weixin data
                $userinfo = Db::name("Userinfo")->where("wecha_id='".$wecha_id."'")->find();
                $us['wecha_id'] = $wecha_id;
                $us['mid'] = $member['m_id'];
                $us['wechaname'] = $res1['nickname'];
                $us['sex'] = $res1['sex'];
                $us['wechahead'] = $res1['headimgurl'];
                $us['city'] = $res1['city'];
                $us['province'] = $res1['province'];
                $us['country'] = $res1['country'];
                $us['subscribe_time'] = $res1['subscribe_time'];
                if($userinfo){
                    $condition['id'] = $userinfo['id'];
                    Db::name("Userinfo")->where($condition)->update($us);
            }else{
                Db::name("Userinfo")->insert($us);
            }
            //END
    }
}
}

}



function html2rgb($color)
{
    if ($color[0] == '#')
        $color = substr($color, 1);

    if (strlen($color) == 6)
        list($r, $g, $b) = array($color[0].$color[1],
                                 $color[2].$color[3],
                                 $color[4].$color[5]);
    elseif (strlen($color) == 3)
        list($r, $g, $b) = array($color[0].$color[0], $color[1].$color[1], $color[2].$color[2]);
    else
        return false;

    $r = hexdec($r); $g = hexdec($g); $b = hexdec($b);

    return array($r, $g, $b);
}

//获取栏目
function get_article_type($typeid=''){
      $type = Cache::get("article_type");
      if(empty($type)){
          $type = Db::name("article_type")->select();
          Cache::set("article_type",$type);
      }
      if($typeid==''){
        return $type;
      }else{
          foreach($type as $t){
              if($t['id'] == $typeid){
                    return $t;
                }
            }
      }
      return '';
}
//END


//竖方向文字
function scrivi($FF,$p,$outFile,$quality=100)
{

                list($image_width, $height, $type, $attr) = getimagesize($p);
                if($type == 1){
                                $imgResource = imagecreatefromgif($p);
                }elseif($type == 2){
                                $imgResource = imagecreatefromjpeg($p);
                }elseif($type == 3){
                                $imgResource = imagecreatefrompng($p);
                                imagesavealpha($imgResource,true);
                }

                foreach ($FF as $value) {
                    $color = $value["color"];
                    $fontSize = $value["fontSize"];
                    $x = $value["x"];
                    $y = $value["y"];
                    $text = $value["text"];
                    $fontPath = $value["fontPath"];
                    $margin = $value["margin"];//字体间隔
                    $split_length = $value["split_length"]; //多少字数换行
                    $wrap = $value["wrap"];//换行间隔
                    $direction = $value["direction"]; //方向

                    $textcolor      =   imagecolorallocate($imgResource, $color[0],$color[1], $color[2]);
                    preg_match_all('/./u',$text,$arr);
                    $text_a = array_chunk($arr[0], $split_length);
                    foreach($text_a as $aa){
                        if($direction == 1){ //横向
                            $y = $y + $wrap;
                            $xx = $x;
                        }
                        if($direction == 2){ //竖向
                            $x = $x + $wrap;
                            $yy = $y;
                        }
                        foreach($aa as $char) {
                            $textCoords =   imagettfbbox($fontSize, 0, $fontPath, $char);
                            if($direction == 1){ //横向
                                imagettftext($imgResource, $fontSize, 0, $xx, $y, $textcolor,$fontPath,$char);
                                $xx +=  $margin;
                            }
                            if($direction == 2){ //竖向
                                imagettftext($imgResource, $fontSize, 0, $x, $yy, $textcolor,$fontPath,$char);
                                $yy  +=  $margin;
                            }
                        }
                    }
                }

                //unlink($p);

                if($type == 1){
                                $outFile =  $outFile.".gif";
                                imagegif($imgResource, $outFile);
                }elseif($type == 2){
                                $outFile =  $outFile.".jpg";
                                imagejpeg($imgResource, $outFile, $quality);
                }elseif($type == 3){
                                $outFile =  $outFile.".png";
                                imagepng($imgResource, $outFile );
                }
        imagejpeg($imgResource,$outFile,$quality);
        imagedestroy($imgResource);
        return $outFile;
}








function curl_file_get_contents($durl){
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $durl);
   curl_setopt($ch, CURLOPT_TIMEOUT, 2);
   curl_setopt($ch, CURLOPT_USERAGENT, _USERAGENT_);
   curl_setopt($ch, CURLOPT_REFERER,_REFERER_);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $r = curl_exec($ch);
   curl_close($ch);
   return $r;
 }
