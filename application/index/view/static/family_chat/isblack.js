$(function(){
    //$("#pencilIcon").css("display", "none");
    return;


	var url = "../expose/isBlack.do";
	$.ajax({
		url : url,
		type : 'POST',
		dataType : 'json',
		async : true,
		success : function(data) {
			var isBlack = data.isBlack;
			if(isBlack>0){
				$("#pencilIcon").css("display", "none");
			}
		},
		error : function(e) {
			// alert("获取个人中心数据异常");
		}
	});
});
