<?php
/**
 * 基础函数
 * @author 979137@qq.com
 * @copyright (c)2016, SINA Inc.
 * @version $Id$
 */
header('Content-type: text/html; charset=utf-8');

$dbconfig = require_once dirname(__FILE__).'/../../mysqlconf.php';
include_once('../mysql.class.php');


$cfg['tb_pre'] = $dbconfig['DB_PREFIX'];
$cfg['db_charset'] = 'utf8';
$cfg['sqlerr'] = '1';
$cfg['errlog'] = '1';
$cfg['timediff'] = '0';


function db_connect($fresh = false) {
    global $dbconfig,$cfg;
    $fr_time = time();
    define('FR_ROOT', str_replace("\\", '/', dirname(__FILE__)));
    define('CACHE_ROOT', $cfg['cache_dir'] ? $cfg['cache_dir'] : FR_ROOT.'/cache');
    define('DATA_ROOT', FR_ROOT.'/data');
    $db = new db_mysql();
    $db->halt = $cfg['sqlerr'];
    $db->connect($dbconfig['DB_HOST'], $dbconfig['DB_USER'], $dbconfig['DB_PWD'], $dbconfig['DB_NAME'],0);
    return $db;
}

function load_config($key = NULL) {
    global $dbconfig;
    static $_G = NULL;
    if (is_null($_G)) {
        $db = db_connect();

        $sql_a = "select * from ".$dbconfig['DB_PREFIX']."thirdparty";
        $query = $db->query( $sql_a );
        while ( $v = $db->fetch_array( $query ) ){
            $_G[$v['item']] = $v['value'];
        }
    }
    return is_null($key) ? $_G : (isset($_G[$key]) ? $_G[$key] : null);
}

function save_ticket($ticket) {
    global $dbconfig;
    $db = db_connect();
    $sql = "REPLACE INTO ".$dbconfig['DB_PREFIX']."thirdparty(item,value,uptime) VALUES ('ticket','%s','%s')";
    $sql = sprintf($sql, strip_tags($ticket), date('Y-m-d H:i:s'));
    return $db->query($sql);
}

function read_ticket() {
    return load_config('ticket');
}

function api_call($url, $post = NULL, $decode = true) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    $data = curl_exec($ch);
    curl_close($ch);
    return $decode ? json_decode($data, true) : $data;
}

function get_component_token() {
    static $token = NULL;
    if (!is_null($token))
        return $token;
    $url = 'https://api.weixin.qq.com/cgi-bin/component/api_component_token';
    $arg = array(
        'component_appid' => load_config('AppID'),
        'component_appsecret' => load_config('AppSecret'),
        'component_verify_ticket' => read_ticket(),
    );

//var_dump($arg);exit;
    $ret = api_call($url, json_encode($arg));
//var_dump($ret);exit;
    if ($ret && !empty($ret['component_access_token'])) {
        $token = $ret['component_access_token'];
        return $token;
    }
    return false;
}

function get_pre_authcode() {
    static $code = NULL;
    if (!is_null($code))
        return $code;
    $token = get_component_token();
    if (!$token)
        return false;
    $url = 'https://api.weixin.qq.com/cgi-bin/component/api_create_preauthcode?component_access_token='.$token;
    $arg = array(
        'component_appid' => load_config('AppID'),
    );
    $ret = api_call($url, json_encode($arg));
    if ($ret && !empty($ret['pre_auth_code'])) {
        $code = $ret['pre_auth_code'];
        return $code;
    }
    return false;
}

function get_authorizer_token($authcode) {
    static $info = array();
    $key = md5(__FUNCTION__.$authcode);
    if (isset($info[$key]))
        return $info[$key];
    $token = get_component_token();
    if (!$token)
        return false;
    $url = 'https://api.weixin.qq.com/cgi-bin/component/api_query_auth?component_access_token='.$token;
    $arg = array(
        'component_appid' => load_config('AppID'),
        'authorization_code' => $authcode,
    );
    $ret = api_call($url, json_encode($arg));
    if ($ret && !empty($ret['authorization_info'])) {
        $info[$key] = $ret['authorization_info'];
        return $info[$key];
    }
    return false;
}

function get_authorizer_info($appid) {
    $token = get_component_token();
    if (!$token)
        return false;
    $url = 'https://api.weixin.qq.com/cgi-bin/component/api_get_authorizer_info?component_access_token='.$token;
    $arg = array(
        'component_appid' => load_config('AppID'),
        'authorizer_appid' => $appid,
    );
    $ret = api_call($url, json_encode($arg));
    if ($ret && !empty($ret['authorizer_info'])) {
        $info[$key] = $ret['authorizer_info'];
        return $info[$key];
    }
    return false;
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








