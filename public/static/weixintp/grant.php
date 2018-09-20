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
    $_GET['signature'] = '1e07d9a3cc004afd6b3ab2aeb602cf5c1d0f5bf3';
    $_GET['timestamp'] = '1453278689';
    $_GET['nonce'] = '1822090411';
    $_GET['encrypt_type'] = 'aes';
    $_GET['msg_signature'] = 'b1da7b6e6085314990c681546b9cabce84b25b7c';
}
$post_xml = <<<EOT
<xml>
<AppId><![CDATA[wxbb1e086116ac58f7]]></AppId>
<Encrypt><![CDATA[h3bcomFRFf5nQUnQyuuhUkvp/3OPMLTHigjZdy6Pyfrk2ZykFBgEmxElNaXmpyRM8bzEn+vMiT/fjvE5JjNnScZQqgJuEs31b0CVUA9mvI4nJFyxB3hVzCjOaMwGWPwA3ibhbO9XNyOBGVqVeYnTHCxRyO4kwQf4h9Z49wIwg2GG6Lqvg/8S8qHD5jd3nNSCL+zKbLZPy+a7wp+XLrq/y8flFAzYHrokKGnqS3DXo/v0AdDPRCo3sHDqEUQratMiM4yhK3c26mY5NGnp1KtAyx9YJ1OA6uMVadSDAcZyyzGc23qwoEtTmrubmQ8dWWFHUVQvVZjIv4Meo4U1CJl9oYkYBPeVVlcJ21UW1AjnxnfRgq9zcargynorFFPNZ6BZfS+APfZxpbAMTx7zeNAryZkTTGJykxsDbvbdcBGGuz91HZk1UxiarpnuL17KERQRrRaJwsJX3oJNeMEy4FDVFA==]]></Encrypt>
</xml>
EOT;
$post_xml = $_G['debug'] ? $post_xml : file_get_contents('php://input');

$xml_tree = new DOMDocument();
$xml_tree->loadXML($post_xml);
$appid = $xml_tree->getElementsByTagName('appid')->item(0)->nodeValue;
$encrypt = $xml_tree->getElementsByTagName('Encrypt')->item(0)->nodeValue;
$msg_sign = $_GET['msg_signature'];
$times = $_GET['timestamp'];
$nonce = $_GET['nonce'];

$decrypt_msg = '';
$encrypt_ing = <<<EOT
<xml>
<ToUserName><![CDATA[toUser]]></ToUserName>
<Encrypt><![CDATA[{$encrypt}]]></Encrypt>
</xml>
EOT;

$pc = new WXBizMsgCrypt($_G['token'], $_G['aeskey'], $_G['AppID']);
$code = $pc->decryptMsg($msg_sign, $times, $nonce, $encrypt_ing, $decrypt_msg);
if($code == 0 ){

	$xml_tree->loadXML($decrypt_msg);
	$ticket = $xml_tree->getElementsByTagName('ComponentVerifyTicket')->item(0)->nodeValue;
	$ret = $ticket && save_ticket($ticket);
	error_log(var_export($ticket,true));
	error_log(var_export($ret,true));
	if ($ret && !$_G['debug']) {
	    echo 'success';
	    exit;
	}

}else {
	error_log(111111);
	print($code . '');
	exit();
}


