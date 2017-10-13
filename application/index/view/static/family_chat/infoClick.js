//获得系统basePath
function getBasePath() {
   var local = window.location;
    var contextPath = local.pathname.split("/")[1];
    var basePath = local.protocol+"//"+local.host+"/"+contextPath;
    return basePath;
}

function addInfoClick(infoCode){

return; // by wang


	$.ajax({
		url : getBasePath()+"/clickRecord/addInfoClick.do",
		type : 'POST',
		dataType : 'json',
		async : true,
		data : {
			recordType :"1",//默认为资讯栏目
			contentType :infoCode
		}
	});
}
