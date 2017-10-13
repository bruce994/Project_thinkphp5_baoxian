//自动操作记录分类
var ResourceAction = {
    RESOURCE_TYPE_ARTICLE: '0',
    RESOURCE_TYPE_ORIGINAL: '1',
    RESOURCE_TYPE_SHARE: '2',
    RESOURCE_TYPE_MICROSHOP: '3',

    ACTION_TYPE_READ: '0',//阅读
    ACTION_TYPE_SHARE: '1',//分享
    ACTION_TYPE_PRAISE: '2',//点赞
    ACTION_TYPE_COMMENT: '3',//评论
    ACTION_TYPE_FOLLOW: '4',//关注
    ACTION_TYPE_INNERMSG: '5',//
    ACTION_TYPE_ABOUTME: '6',//关于我
    ACTION_TYPE_CONNECTME: '7',//联系我
    ACTION_TYPE_CALLME: '8',//电话
    ACTION_TYPE_WECHAT: '9',//站内信
    ACTION_TYPE_EDIT: '10',//编辑
    ACTION_TYPE_UNFOLDMENU: '11',//咨询展开
    ACTION_TYPE_COLSEMENU:'12',//咨询关闭
    ACTION_TYPE_QUESTION:'13',//我来回答
    ACTION_TYPE_UNFOLDASK:'14',//问题展开
    ACTION_TYPE_DELINFO:'15',//删除文章
    ACTION_TYPE_HEADIMG:'16',//头像修改
    ACTION_TYPE_CARDNAME:'17',//姓名修改
    ACTION_TYPE_TELPHONE:'18',//手机修改
    ACTION_TYPE_COMPANTY:'19',//公司修改
    ACTION_TYPE_CITY:'20',//城市修改
    ACTION_TYPE_ADDTHINGS:'21',//点击“添加事项”
    ACTION_TYPE_ADDTHINGS:'22',//添加接触小结的次数
    ACTION_TYPE_ADDTHINGS:'23',//使用搜索功能的次数(次)
    ACTION_TYPE_ADDTHINGS:'24',//菜单“碎碎屏安”
    ACTION_TYPE_ADDTHINGS:'25',//投保指引文
    ACTION_TYPE_ADDTHINGS:'26',//碎碎产品介绍
    ACTION_TYPE_ADDTHINGS:'27',//立即投保按钮点击次数
    ACTION_TYPE_ADDTHINGS:'28',//每周一星
    ACTION_TYPE_ADDTHINGS:'29',//微站粉丝
    ACTION_TYPE_ADDTHINGS:'30',//微站排行
    ACTION_TYPE_ADDTHINGS:'31',//壹企业介绍
    ACTION_TYPE_ADDTHINGS:'32',//壹企业我要推荐
    ACTION_TYPE_ADDTHINGS:'33',//壹企业推荐记录
    ACTION_TYPE_ADDTHINGS:'34',//壹企业中将公告
    ACTION_TYPE_ADDTHINGS:'35',//本期榜单点击
    ACTION_TYPE_ADDTHINGS:'36',//上期榜单点击
    ACTION_TYPE_ADDTHINGS:'37',//我的文章
    ACTION_TYPE_ADDTHINGS:'38',//我要投稿
    ACTION_TYPE_ADDTHINGS:'39',//从榜单进入微站的总数
    ACTION_TYPE_ADDTHINGS:'40',//从榜单进入微站的总数
    ACTION_TYPE_ADDTHINGS:'41',//活动详情
    ACTION_TYPE_ADDTHINGS:'42',//历届明星
    ACTION_TYPE_GUESTINFO:'43',//获客通知入口点击
    ACTION_TYPE_GUESTINFO:'44',//获客通知提交
    ACTION_TYPE_GUESTINFO:'45',//获客通知获取信息
    ACTION_TYPE_GUESTINFO:'46',//获客通知读取信息
    ACTION_TYPE_MICROCARD:'47',//新增贺卡数
    ACTION_TYPE_MICROCARD:'48',//分享次数
    ACTION_TYPE_MICROCARD:'49',//阅读次数
    ACTION_TYPE_PLAYIMG:'playImage',//趣图点击以前缀加图片ID形式
	ACTION_TYPE_ARTICLEMANAGE:'50',//阅读次数
	ACTION_TYPE_ARTICLEMANAGE:'51',//业务员发送评价的次数
	ACTION_TYPE_FOLLOWME:'54',
	ACTION_TYPE_CONSUTING:'53',
	ACTION_TYPE_ZIXUNDIANJI:'52',//资讯首页新建文章点击
	ACTION_TYPE_GUESTINFO:'-1', //新年签
	ACTION_TYPE_GOTODETAILPAGE: '55', // 点击进入资讯详情
	ACTION_TYPE_PUBLISHINFO: '56', // 发布资讯
	ACTION_TYPE_GUESTCONSULT: '57', // 获客通知点击立即咨询
	ACTION_TYPE_TODOMYIMG: '58', // 玩儿图点击生成预览
	ACTION_TYPE_PERSONALSPREAD: '59', // 个人推广菜单点击
	ACTION_TYPE_MICROSHOPREAD: '60', // 微站文章阅读点击
	ACTION_TYPE_MICROSHOPSHARE: '61', // 微站文章转发点击
	ACTION_TYPE_INFOREAD: '62', // 资讯文章阅读点击
	ACTION_TYPE_INFOSHARE: '63' // 资讯文章转发点击
};

//记录动作
function recordAction(o) {


    return; //by wang

	$.ajax({
		url: '/family_chat/resourceAction/record.do',
		type: 'POST',
		dataType: 'json',
		data: o
	});
}

/**
 * 记录动作，只传入动作类型,resourceId和resourceType从隐藏域取之，用于一个页面多个地方监控记彄1�7
 * @param actionType
 */
function recordActionSimple(actionType) {
	o = {
		resourceId: $('#resourceId').attr('value'),
		resourceType: $('#resourceType').attr('value'),
		actionType: actionType
	};
	recordAction(o);
}

//点击关注，获取金橙的appid和appSecret
function follow(shopid) {
    //记录关注动作
    recordActionSimple(ResourceAction.ACTION_TYPE_FOLLOW);

	$.get('/family_chat/follow/orangeAppInfo.do', function(data) {
		requestOpenId(data.appId, data.contextPath + 'follow/doFollow/' + shopid + '.do');
	}, 'json');
};


function requestOpenId(appId, url) {
    window.location.href = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=' + appId +
        '&redirect_uri=' + encodeURIComponent(url) +
            '&response_type=code&scope=snsapi_base&state=123#wechat_redirect';
	//window.location.href = url;
}

function timeColFit(s) {
	var s = '' + s;
	return s.length > 1 ? s : '0' + s;
}

$(function(){
	initRecordAction();
	initRecordClick();
});
function initRecordAction() {
	$('[recordaction]').each(function(index, element) {
		var recordaction = $(element).attr('recordaction');
		var info = $.trim(recordaction).split(' ');
		$(element).on(info[0], function() {
			recordActionSimple(info[1]);
		});
	});
}


function initRecordClick() {
	$('[recordclick]').each(function(index, element) {
		var recordaction = $(element).attr('recordclick');
		var info = $.trim(recordaction).split(' ');
		$(element).on(info[0], function() {
			recordClick(info[1]);
		});
	});
}
//记录动作
function recordClick(type) {

return;  //by wang

	$.ajax({
		url: '/family_chat/recordClickCount.do',
		type: 'POST',
		dataType: 'json',
		data: {"url":type}
	});
}
//限时加分
function scoreClick(openid,type) {
	$.ajax({
		url: '/family_chat/ZybScore/scoreClickCount.do',
		type: 'POST',
		dataType: 'json',
		data: {
			"openid":openid,
			"type":type
			},
	   "success":function(data){
				for(var i in data){
					//alert(i+":"+data[i]);
				}
		}
	});
}
//errorMessage  错误信息
//scriptURI 出错文件
//lineNumber 出错代码的行号
//columnNumber 出错代码的列号
//errorObj 错误的详细信息
//重点获取设备信息，方便重现，即：ua信息
window.onerror = function(errorMessage,scriptURI,lineNumber,columnNumber,errorObj){
    return;


	var phoneMsg = navigator.userAgent;
	$.ajax({
		url: '/family_chat/JSError/saveFrontJSError.do',
		type: 'POST',
		dataType: 'json',
		data: {
			"errorMessage":errorMessage,
			"scriptURI":scriptURI,
			"lineNumber":lineNumber,
			"columnNumber":columnNumber,
			"errorObj":errorObj,
			"phoneMsg":phoneMsg
		}
	});
}


