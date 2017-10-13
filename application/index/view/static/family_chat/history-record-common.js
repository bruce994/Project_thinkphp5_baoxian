$(function() {
	readHistoryRecord();
});

/**
 * 分享流水记录
 */
function shareHistoryRecord(){
	data = {
		shareId: $('#openid').val(),
		shareArcticleId: $('#articleId').val()
	};
	$.ajax({
		url: '/family_chat/articleHistoryRecord/shareRecord.do',
		type: 'POST',
		dataType: 'json',
		data: data
	});
}

/**
 *阅读流水记录
 */
function readHistoryRecord(){
    return; //by wang

	data = {
			readId: $('#openid').val(),
			readArcticleId: $('#articleId').val()
		};
	$.ajax({
		url: '/family_chat/articleHistoryRecord/readRecord.do',
		type: 'POST',
		dataType: 'json',
		data: data
	});
}
