<?php
/**
 * 授权事件接收URL
 * @author 979137@qq.com
 * @copyright (c)2016, SINA Inc.
 * @version $Id$
 */
require(__DIR__.'/base.php');
require(__DIR__.'/src/wxBizMsgCrypt.php');

$_G = load_config();
if ($_G['debug']) {

	$_G['aeskey'] = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFG";
	$_G['token'] = "pamtest";
	$_GET['timestamp'] = "1409304348";
	$_GET['nonce'] = "xxxxxx";
	$_G['AppID'] = "wxb11529c136998cb6";
}
$post_xml = <<<EOT
<xml>
<Encrypt><![CDATA[43wbLtV+lt1jhSpjDn53q0n7/EGC+IbCLnAMbKQcEJTubXn5JRSpof8LjcTOPPPtsqFE67X33+QSnaPwHIL4N3WMo17Psc6HGumvvoExXQUv3hUyLnbuDwn8WG6eo1GSbGh2b/Ra9j0cwLJgZap/Hi/xAO1HSrL7JiWQkgOJ1H8fzlsevdZjW0OiK1seT/iwCDRiJRz0qhvZ7OR3NeIdL15iw/s9F/voxmE4ca4aQ1M4FT8NljOnmHhMIhErHxTF/Lb5GZa5f7QokoNRJEYZtdpzfP9Mvql9kJRtIangw0zFDSw7eV1x41h8V1Msq4/8pVQ6pUnSk06M1F+6OmE9xFaWjR/Qk4V50l+ycTOkGdxH/xa/2S/l4lHrIYkdep9vKmd0vXnvgJsBFIgeERCauBIbLGvRwJEpsyq8faK9POwowAmQlJgqmM70UF3/babgqvvXQinoGOVaoSfUs7/paxDfzRxd388pt4XOvBm0qKWN1taEduU2U4DRoOEHRrBgb96qLz3D4NbdBtMMEPRNmsI0jNu8TFl61LEdjGRFcs5Dlej8eJW+z7PnJ97aNOQU3qOk2+6GNCYPxxnOcnUeeTkg8w/Ka8QaRwNYX3n4dKoaUH1sT7g31XniYd5sGk4MoD7FG+su4GJkIOivu8E31XvNJP5bHJLEEK02+DP1WhoQUBl9qSmsQzn2sga5+eY2hk+CN0PQw/RKBxS0uWxZ6g==]]></Encrypt>
<MsgSignature><![CDATA[205671589613569ea3d056e5686599a420aa1be4]]></MsgSignature>
<TimeStamp>1409304348</TimeStamp>
<Nonce><![CDATA[xxxxxx]]></Nonce>
</xml>
EOT;
$post_xml = $_G['debug'] ? $post_xml : file_get_contents('php://input');


$xml_tree = new DOMDocument();
$xml_tree->loadXML($post_xml);
$array_e = $xml_tree->getElementsByTagName('Encrypt');
$array_s = $xml_tree->getElementsByTagName('MsgSignature');
$encrypt = $array_e->item(0)->nodeValue;
$msg_sign = $array_s->item(0)->nodeValue;

$format = "<xml><ToUserName><![CDATA[toUser]]></ToUserName><Encrypt><![CDATA[%s]]></Encrypt></xml>";
$from_xml = sprintf($format, $encrypt);


//var_dump($_G);

$pc = new WXBizMsgCrypt($_G['token'], $_G['aeskey'], $_G['AppID']);
// 第三方收到公众号平台发送的消息
$msg = '';
$errCode = $pc->decryptMsg($msg_sign, $_GET['timestamp'], $_GET['nonce'], $from_xml, $msg);
if ($errCode == 0) {
	print("解密后: " . $msg . "\n");
} else {
	print($errCode . "\n");
}



$xml_tree = new DOMDocument();
$xml_tree->loadXML($msg);
$ticket = $xml_tree->getElementsByTagName('component_verify_ticket')->item(0)->nodeValue;
$ret = $ticket && save_ticket($ticket);
//error_log(var_export($ticket,true));
//error_log(var_export($ret,true));
if ($ret && !$_G['debug']) {
    echo 'success';
    exit;
}
var_export($ticket);
var_export($ret);
