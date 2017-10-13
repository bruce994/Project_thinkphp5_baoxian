var ResourceAction = {
	RESOURCE_TYPE_ARTICLE : '0',
	RESOURCE_TYPE_ORIGINAL : '1',
	RESOURCE_TYPE_SHARE : '2',
	RESOURCE_TYPE_MICROSHOP : '3',
	ACTION_TYPE_READ : '0',
	ACTION_TYPE_SHARE : '1',
	ACTION_TYPE_PRAISE : '2',
	ACTION_TYPE_COMMENT : '3',
	ACTION_TYPE_FOLLOW : '4',
	ACTION_TYPE_INNERMSG : '5',
	ACTION_TYPE_ABOUTME : '6',
	ACTION_TYPE_CONNECTME : '7',
	ACTION_TYPE_CALLME : '8',
	ACTION_TYPE_WECHAT : '9',
	ACTION_TYPE_EDIT : '10',
	ACTION_TYPE_UNFOLDMENU : '11',
	ACTION_TYPE_COLSEMENU : '12',
	ACTION_TYPE_QUESTION : '13',
	ACTION_TYPE_UNFOLDASK : '14',
	ACTION_TYPE_DELINFO : '15',
	ACTION_TYPE_HEADIMG : '16',
	ACTION_TYPE_CARDNAME : '17',
	ACTION_TYPE_TELPHONE : '18',
	ACTION_TYPE_COMPANTY : '19',
	ACTION_TYPE_CITY : '20',
	ACTION_TYPE_ADDTHINGS : '21',
	ACTION_TYPE_ADDTHINGS : '22',
	ACTION_TYPE_ADDTHINGS : '23',
	ACTION_TYPE_ADDTHINGS : '24',
	ACTION_TYPE_ADDTHINGS : '25',
	ACTION_TYPE_ADDTHINGS : '26',
	ACTION_TYPE_ADDTHINGS : '27',
	ACTION_TYPE_ADDTHINGS : '28',
	ACTION_TYPE_ADDTHINGS : '29',
	ACTION_TYPE_ADDTHINGS : '30',
	ACTION_TYPE_ADDTHINGS : '31',
	ACTION_TYPE_ADDTHINGS : '32',
	ACTION_TYPE_ADDTHINGS : '33',
	ACTION_TYPE_ADDTHINGS : '34',
	ACTION_TYPE_ADDTHINGS : '35',
	ACTION_TYPE_ADDTHINGS : '36',
	ACTION_TYPE_ADDTHINGS : '37',
	ACTION_TYPE_ADDTHINGS : '38',
	ACTION_TYPE_ADDTHINGS : '39',
	ACTION_TYPE_ADDTHINGS : '40',
	ACTION_TYPE_ADDTHINGS : '41',
	ACTION_TYPE_ADDTHINGS : '42',
	ACTION_TYPE_GUESTINFO : '43',
	ACTION_TYPE_GUESTINFO : '44',
	ACTION_TYPE_GUESTINFO : '45',
	ACTION_TYPE_GUESTINFO : '46',
	ACTION_TYPE_MICROCARD : '47',
	ACTION_TYPE_MICROCARD : '48',
	ACTION_TYPE_MICROCARD : '49',
	ACTION_TYPE_PLAYIMG : 'playImage',
	ACTION_TYPE_ARTICLEMANAGE : '50',
	ACTION_TYPE_ARTICLEMANAGE : '51',
	ACTION_TYPE_FOLLOWME : '54',
	ACTION_TYPE_CONSUTING : '53',
	ACTION_TYPE_ZIXUNDIANJI : '52',
	ACTION_TYPE_GUESTINFO : '-1',
	ACTION_TYPE_GOTODETAILPAGE : '55',
	ACTION_TYPE_PUBLISHINFO : '56',
	ACTION_TYPE_GUESTCONSULT : '57',
	ACTION_TYPE_TODOMYIMG : '58',
	ACTION_TYPE_PERSONALSPREAD : '59',
	ACTION_TYPE_MICROSHOPREAD : '60',
	ACTION_TYPE_MICROSHOPSHARE : '61',
	ACTION_TYPE_INFOREAD : '62',
	ACTION_TYPE_INFOSHARE : '63'
};
function recordAction(o) {

    return; //by wang

	$.ajax({
		url : '/family_chat/resourceAction/record.do',
		type : 'POST',
		dataType : 'json',
		data : o
	});
}
function recordActionSimple(actionType) {
	o = {
		resourceId : $('#resourceId').attr('value'),
		resourceType : $('#resourceType').attr('value'),
		actionType : actionType
	};
	recordAction(o);
}
function follow(shopid) {
	recordActionSimple(ResourceAction.ACTION_TYPE_FOLLOW);
	$.get('/family_chat/follow/orangeAppInfo.do', function(data) {
		requestOpenId(data.appId, data.contextPath + 'follow/doFollow/'
				+ shopid + '.do');
	}, 'json');
};
function requestOpenId(appId, url) {
	window.location.href = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='
			+ appId
			+ '&redirect_uri='
			+ encodeURIComponent(url)
			+ '&response_type=code&scope=snsapi_base&state=123#wechat_redirect';
}
function timeColFit(s) {
	var s = '' + s;
	return s.length > 1 ? s : '0' + s;
}
$(function() {
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
function recordClick(type) {


    return; //by wang
	$.ajax({
		url : '/family_chat/recordClickCount.do',
		type : 'POST',
		dataType : 'json',
		data : {
			"url" : type
		}
	});
}
window.onerror = function(errorMessage, scriptURI, lineNumber, columnNumber,
		errorObj) {
    return;

	var phoneMsg = navigator.userAgent;
	$.ajax({
		url : '/family_chat/JSError/saveFrontJSError.do',
		type : 'POST',
		dataType : 'json',
		data : {
			"errorMessage" : errorMessage,
			"scriptURI" : scriptURI,
			"lineNumber" : lineNumber,
			"columnNumber" : columnNumber,
			"errorObj" : errorObj,
			"phoneMsg" : phoneMsg
		}
	});
}
