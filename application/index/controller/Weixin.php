<?php
namespace app\index\controller;
use think\Db;
use think\Request;
use think\Cookie;
use think\Cache;

class Weixin extends \think\Controller
{

    public function index(){
        //define your token
        define("TOKEN", input('token'));
        $this->valid();
        $this->responseMsg();
    }


    public function valid()
    {
        $echoStr = input("echostr");
//valid signature , option
        if($this->checkSignature()){
            echo $echoStr;
    //exit;
        }
    }


    private function checkSignature()
    {
        $signature = input("signature");
        $timestamp = input("timestamp");
        $nonce = input("nonce");

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }


public function sendTemplateInfo($mid,$content,$appid,$appsecret){
            $content = urldecode($content);
            $time = time();
            //$token = $db->query("select access_token from  {$dbconfig['DB_PREFIX']}poster_access_token where mid=".$mid." AND addtime+6000 > ".$time)->fetch();
            //if($token){
              //  $access_token = $token['access_token'];
           // }else{
                $res = json_decode(httpGet("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret),true);
                if(!isset($res['errcode'])){
                   // $db->exec("INSERT INTO {$dbconfig['DB_PREFIX']}poster_access_token(mid,access_token,addtime) VALUES(".$mid.",'".$res['access_token']."',".$time.") ");
                }else{
                    return $res['errcode'];
                }
                $access_token = $res['access_token'];
           // }
            $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$access_token;
            $res = httpPost($url,$content);
            $res = json_decode($res,true);
            if(!empty($res['errcode'])){
                return $res['errcode'];
            }
            return 'success';

}



    public function responseMsg()
    {

        //get post data, May be due to the different environments
        // $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
         $postStr = file_get_contents("php://input");


        //extract post data
        if (!empty($postStr)){

            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $type=$postObj->MsgType;
            $subscribe=$postObj->Event;
            $eventKey=$postObj->EventKey; //菜单点击值
            $time = time();
            $textTpl = "<xml>
                <ToUserName><![CDATA[%s]]></ToUserName>
                <FromUserName><![CDATA[%s]]></FromUserName>
                <CreateTime>%s</CreateTime>
                <MsgType><![CDATA[%s]]></MsgType>
                <Content><![CDATA[%s]]></Content>
                <FuncFlag>0</FuncFlag>
                </xml>";
            //关注回复
            $eventTpl = "<xml>
                <ToUserName><![CDATA[%s]]></ToUserName>
                <FromUserName><![CDATA[%s]]></FromUserName>
                <CreateTime>%s</CreateTime>
                <MsgType><![CDATA[event]]></MsgType>
                <Event><![CDATA[subscribe]]></Event>
                </xml>";


            $rs =Db::name("member")->where("m_wxid = '".input('token')."'")->field("m_id,m_username,m_isSubscribe,m_isConnent,m_isReply,m_appid,m_appsecret")->find();
            if($rs['m_id']){
                define("MID", $rs['m_id']);
                define("ISREPLY", $rs['m_isReply']);
                define("ISCONNENT", $rs['m_isConnent']);
                define("ISSUBSCRIBE", $rs['m_isSubscribe']);
                define("APPID", $rs['m_appid']);
                define("APPSECRET", $rs['m_appsecret']);
                define("DOMAIN",config('config.ss_site_domain'));
            }else{
                echo 'error';exit;
            }


            switch ($type){
                    case "event":   //关注回复
                        if($subscribe == "LOCATION"){  //地址位置
                            echo "success";
                            exit;
                        }

                        $msgType = "text";
                        $num = 0;
                        $tmp2 = '';


                        $rs1 = Db::name("Reply")->where("mid = '".MID."' and keyword='' ")->field("id,typeid,title,picurl,jumpUrl,description")->find();
                        if($eventKey!=''){ //菜单点击值
                            $rs1 = '';
                            $tmp3 = " and keyword='".$eventKey."'";

                            //自定义菜单弹出多个图文列表
                            $list = Db::name("Reply")->where("typeid=2 and mid = '".MID."' and keyword='".$eventKey."' ")->field("id,typeid,title,picurl,jumpUrl,description")->select();
                            foreach ($list as $rs1) {
                                $num++;
                                if(empty($rs['picurl'])){
                                    $rs['picurl'] = DOMAIN.'/Public/images/weixin.jpg';
                                }
                                $tmp2 .="<item>
                                    <Title><![CDATA[".$rs1['title']."]]></Title>
                                    <Description><![CDATA[".strip_tags($rs1['description'])."]]></Description>
                                    <PicUrl><![CDATA[".DOMAIN.$rs1['picurl']."]]></PicUrl>
                                    <Url><![CDATA[".$rs1['jumpUrl']."]]></Url>
                                    </item>";
                            }
                            if($num>0){
                                $newsTpl="<xml>
                                    <ToUserName><![CDATA[".$fromUsername."]]></ToUserName>
                                    <FromUserName><![CDATA[".$toUsername."]]></FromUserName>
                                    <CreateTime>".$time."</CreateTime>
                                    <MsgType><![CDATA[news]]></MsgType>
                                    <ArticleCount>".$num."</ArticleCount>
                                    <Articles>
                                    ".$tmp2."
                                    </Articles>
                                    <FuncFlag>0</FuncFlag>
                                    </xml>";
                                echo $newsTpl;
                                exit;
                            }
                            //END
                            if($num == 0){ //自定义菜单弹出文本类型
                                $rs1 = Db::name("Reply")->where("mid = '".MID."' and keyword='".$eventKey."' ")->field("id,typeid,title,picurl,jumpUrl,description")->find();
                            }
                        }
                        if($rs1){
                            if($rs1['typeid'] == "1"){
                                $content = $rs1['description'];
                                  echo sprintf($textTpl, $fromUsername, $toUsername, $time, 'text', $content);
                                  exit;
                            }elseif ($rs1['typeid'] == "2") {
                                $num++;
                                $tmp2 .="<item>
                                    <Title><![CDATA[".$rs1['title']."]]></Title>
                                    <Description><![CDATA[".strip_tags($rs1['description'])."]]></Description>
                                    <PicUrl><![CDATA[".DOMAIN.$rs1['picurl']."]]></PicUrl>
                                    <Url><![CDATA[".$rs1['jumpUrl']."]]></Url>
                                    </item>";
                                    if(!empty($tmp2)){
                                                   $newsTpl="<xml>
                                                       <ToUserName><![CDATA[".$fromUsername."]]></ToUserName>
                                                       <FromUserName><![CDATA[".$toUsername."]]></FromUserName>
                                                       <CreateTime>".$time."</CreateTime>
                                                       <MsgType><![CDATA[news]]></MsgType>
                                                       <ArticleCount>".$num."</ArticleCount>
                                                       <Articles>
                                                       ".$tmp2."
                                                       </Articles>
                                                       <FuncFlag>0</FuncFlag>
                                                       </xml>";
                                                   echo $newsTpl;
                                                   exit;
                                               }

                            }
                        }





                        break;

                    case "text":

                            $num = 0;
                            $tmp2 = '';

                            $item = Db::name("keyword")->where("keyword='".$keyword."' AND mid=".MID)->field("tid,table")->find();
                            if($item){
                                $list = Db::name($item['table'])->where(['id'=>['=',$item['tid']]])->field("id,title,wx_picurl,wx_info")->select();
                                foreach ($list as $rs) {
                                    $num++;
                                    if(empty($rs['wx_picurl'])){
                                        $rs['wx_picurl'] = DOMAIN.'/Public/images/weixin.jpg';
                                    }
                                    $url = trim(DOMAIN,'/').url($item['table']."/index",["mid"=>MID,"id"=>$rs['id'],"wecha_id"=>$fromUsername]);
                                    $tmp2 .="<item>
                                        <Title><![CDATA[".$rs['title']."]]></Title>
                                        <Description><![CDATA[".strip_tags($rs['wx_info'])."]]></Description>
                                        <PicUrl><![CDATA[".DOMAIN.$rs['wx_picurl']."]]></PicUrl>
                                        <Url><![CDATA[".$url."]]></Url>
                                        </item>";
                                }
                            }


                            if($num > 0){
                                $newsTpl="<xml>
                                    <ToUserName><![CDATA[".$fromUsername."]]></ToUserName>
                                    <FromUserName><![CDATA[".$toUsername."]]></FromUserName>
                                    <CreateTime>".$time."</CreateTime>
                                    <MsgType><![CDATA[news]]></MsgType>
                                    <ArticleCount>".$num."</ArticleCount>
                                    <Articles>
                                    ".$tmp2."
                                    </Articles>
                                    <FuncFlag>0</FuncFlag>
                                    </xml>";
                                echo $newsTpl;
                                exit;
                            }


                          if($num == 0){
                                $cK = 0;
                                //自定义关键词
                                $rs1 = Db::name("Reply")->where("mid = '".MID."' and keyword='".$keyword."' ")->field("id,typeid,title,picurl,jumpUrl,description")->find();
                                if(!$rs1){
                                    $rs1 = Db::name("Reply")->where("mid = '".MID."' and keyword='' ")->field("id,typeid,title,picurl,jumpUrl,description")->find();
                                }
                                if($rs1){
                                       if($rs1['typeid'] == "1"){
                                              $content = $rs1['description'];
                                              echo sprintf($textTpl, $fromUsername, $toUsername, $time, 'text', $content);
                                              exit;
                                       }elseif ($rs1['typeid'] == "2") {
                                               $list = Db::name("Reply")->where("mid = '".MID."' and keyword='".$keyword."' ")->field("id,typeid,title,picurl,jumpUrl,description")->select();
                                   if(!$list){
                                        $list = Db::name("Reply")->where("mid = '".MID."' and keyword='' ")->field("id,typeid,title,picurl,jumpUrl,description")->select();
                                    }

                                                foreach ($list as $rs1) {
                                                                $num++;
                                                                $tmp2 .="<item>
                                                                <Title><![CDATA[".$rs1['title']."]]></Title>
                                                                <Description><![CDATA[".strip_tags($rs1['description'])."]]></Description>
                                                                <PicUrl><![CDATA[".DOMAIN.$rs1['picurl']."]]></PicUrl>
                                                                <Url><![CDATA[".$rs1['jumpUrl']."]]></Url>
                                                                </item>";
                                                }
                                               if(!empty($tmp2)){
                                                   $newsTpl="<xml>
                                                       <ToUserName><![CDATA[".$fromUsername."]]></ToUserName>
                                                       <FromUserName><![CDATA[".$toUsername."]]></FromUserName>
                                                       <CreateTime>".$time."</CreateTime>
                                                       <MsgType><![CDATA[news]]></MsgType>
                                                       <ArticleCount>".$num."</ArticleCount>
                                                       <Articles>
                                                       ".$tmp2."
                                                       </Articles>
                                                       <FuncFlag>0</FuncFlag>
                                                       </xml>";
                                                   echo $newsTpl;
                                                   exit;
                                               }

                                        }
                                }
                          }



                        break;


            }






            //echo sprintf($textTpl, $fromUsername, $toUsername, $time, 'text', 'fefefe'); exit;

        }

    }



}
