function fcAlert(content, handler) {
	init(false, content);
	$('#okMsgBtn').on('click', function() {
		$('#msgOuter').remove();
		if (handler) {
            handler.call(this);
		}
	});
}

function init(isConfirm, content) {
	var msg_str = $(getMsgDomStr(isConfirm));

	$('body').prepend(msg_str);
	$('#msgContent').text(content);
	
	$('#msgDiv').css('margin-top', ($(window).height() - $('#msgDiv').height()) / 2 + 'px');
	
	$('#msgOuter').fadeIn(50);
}

function initSubmit(isConfirm, content) {
	var msg_str = $(getMsgSubmitDomStr(isConfirm));

	$('body').prepend(msg_str);
	$('#msgSubmitContent').text(content);
	
	$('#msgSubmitDiv').css('margin-top', ($(window).height() - $('#msgSubmitDiv').height()) / 2 + 'px');
	
	$('#msgSubmitOuter').fadeIn(50);
}

function getMsgDomStr(isConfirm) {
    return '<div id="msgOuter" style="width:100%; height:100%; position:fixed; display:none; z-index:9999; background-color:rgba(0, 0, 0, 0.46);">' + 
    '<div id="msgDiv" style="width:220px; height:110px; border-radius:0.25em; margin: auto; ">' +
    '	<table style="width:100%; height:100%; border:none; border-collapse:collapse">' +
    '		<tr height=70%><td ' + (isConfirm ? 'colspan="2" ' : '') + 'style="border:none; text-align:center; vertical-align:middle; font-size:14; color:#666666;background-color: white;border-radius:0.25em 0.25em 0 0 ;"><span id="msgContent"></span></td></tr>' +
    
    '		<tr height="30%">' +
    (isConfirm ? '<td id="cancelMsgBtn" style="border:none; background-color:white; border-bottom-left-radius:0.25em; border-top: 1px solid #9A9A9A; border-right: 1px solid #9A9A9A; text-align:center; color:#666;width:50%;">取消</td>' : '') +
    (isConfirm ? '<td id="okMsgBtn" style="border:none; background-color:white;border-top: 1px solid #9A9A9A; border-radius:0 0 0.25em 0 ; text-align:center; color:#666;width:50%;text-shadow:none;">确定</td>' : '<td id="okMsgBtn" style="border:none; background-color:white; border-top: 1px solid #9A9A9A;border-radius:0 0 0.25em 0.25em ; text-align:center; color:#666;width:50%;text-shadow:none;">确定</td>') +

    '		</tr>' +
    '	</table>' +
    '</div>' +
    '</div>';
}

function getMsgSubmitDomStr(isConfirm) {
    return '<div id="msgSubmitOuter" style="width:100%; height:100%; position:fixed; display:none; z-index:9999; background-color:rgba(0, 0, 0, 0.46);">' + 
    '<div id="msgSubmitDiv" style="width:220px; height:110px; border-radius:0.25em; margin: auto; ">' +
    '	<table style="width:100%; height:100%; border:none; border-collapse:collapse">' +
    '		<tr height=70%><td ' + (isConfirm ? 'colspan="2" ' : '') + 'style="border:none; text-align:center; vertical-align:middle; font-size:14; color:#666666;background-color: white;border-radius:0.25em 0.25em 0 0 ;"><span id="msgSubmitContent"></span></td></tr>' +
    
    '		<tr height="30%">' +
    (isConfirm ? '<td id="cancelMsgSubmitBtn" style="border:none; background-color:white; border-bottom-left-radius:0.25em; border-top: 1px solid #9A9A9A; border-right: 1px solid #9A9A9A; text-align:center; color:#666;width:50%;">返回</td>' : '') +
    (isConfirm ? '<td id="okMsgSubmitBtn" style="border:none; background-color:white;border-top: 1px solid #9A9A9A; border-radius:0 0 0.25em 0 ; text-align:center; color:#666;width:50%;text-shadow:none;">提交</td>' : '<td id="okMsgSubmitBtn" style="border:none; background-color:white; border-top: 1px solid #9A9A9A;border-radius:0 0 0.25em 0.25em ; text-align:center; color:#666;width:50%;text-shadow:none;">提交</td>') +

    '		</tr>' +
    '	</table>' +
    '</div>' +
    '</div>';
}

function fcConfirm(content, handler) {
	init(true, content);
	$('#okMsgBtn').on('click', function() {
		$('#msgOuter').remove();
		if (handler) {
            handler.call(this, 'ok');
		}
	});
	$('#cancelMsgBtn').on('click', function() {
		$('#msgOuter').remove();
		if (handler) {
            handler.call(this, 'no');
		}
	});
}

function fcSubmitConfirm(content, handler) {
	initSubmit(true, content);
	$('#okMsgSubmitBtn').on('click', function() {
		$('#msgSubmitOuter').remove();
		if (handler) {
            handler.call(this, 'ok');
		}
	});
	$('#cancelMsgSubmitBtn').on('click', function() {
		$('#msgSubmitOuter').remove();
		if (handler) {
            handler.call(this, 'no');
		}
	});
}
/*����������*/
function Toast_msg(content, length,handler) {
	init_toast(content);
    setTimeout(function(){
    	$('#toast_msgOuter').remove();
    	if (handler) {
            handler.call(this, 'ok');
		}
    }, length);
}

function init_toast(content) {
	var msg_str = $(getMsgDomStr_toast(content));
	$('body').prepend(msg_str);	
}

function getMsgDomStr_toast(content) {
    return '<div id="toast_msgOuter" style="margin: 10%;position: fixed;z-index: 9999;bottom: 10%;width: 80%;display: -webkit-box;display: flex;  justify-content: center;-webkit-box-pack: center;">' 
    +'<div style=" text-align: center; flex-grow: 0;-webkit-box-flex: 0;border-radius:30px;padding-left: 2em;padding-right: 2em;padding-top: 0.25em;padding-bottom: 0.25em;color: #fff;background-color: rgba(0, 0, 0, 0.458824); line-height: 1em;">'
    +content+'</div></div>';
}
