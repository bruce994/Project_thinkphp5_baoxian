var AceTemplate=AceTemplate||{};(function(){var logger={log:function(text){window.console&&console.log(text)}};var htmlDecodeDict={"quot":'"',"lt":"<","gt":">","amp":"&","nbsp":" "};var htmlEncodeDict={'"':"quot","<":"lt",">":"gt","&":"amp"," ":"nbsp"};var lib={g:function(id){if(typeof id!="string")return id;return document.getElementById(id)},decodeHTML:function(html){return String(html).replace(/&(quot|lt|gt|amp|nbsp);/ig,function(all,key){return htmlDecodeDict[key]}).replace(/&#u([a-f\d]{4});/ig,function(all,hex){return String.fromCharCode(parseInt("0x"+hex))}).replace(/&#(\d+);/ig,function(all,number){return String.fromCharCode(+number)})},encodeHTML:function(html){return String(html).replace(/["<>& ]/g,function(all){return"&"+htmlEncodeDict[all]+";"})},elementText:function(element){if(!element||!element.tagName)return"";if(/^(input|textarea)$/i.test(element.tagName))return element.value;return lib.decodeHTML(element.innerHTML)}};var readerCaches={};var registerAll=false;function analyse(template){var body=[],processItem=[];body.push("with(this){");body.push(template.replace(/[\r\n]+/g,"\n").replace(/^\n+|\s+$/mg,"").replace(/((^\s*[<>!#^&\u0000-\u0008\u007F-\uffff].*$|^.*[<>]\s*$|^(?!\s*(else|do|try|finally)\s*$)[^'":;,\[\]{}()\n\/]+$|^(\s*(([\w-]+\s*=\s*"[^"]*")|([\w-]+\s*=\s*'[^']*')))+\s*$|^\s*([.#][\w-.]+(:\w+)?(\s*|,))*(?!(else|do|while|try|return)\b)[.#]?[\w-.*]+(:\w+)?\s*\{.*$)\s?)+/mg,function(expression){expression=['"',expression.replace(/&none;/g,"").replace(/["'\\]/g,"\\$&").replace(/\n/g,"\\n").replace(/(!?#)\{(.*?)\}/g,function(all,flag,template){template=template.replace(/\\n/g,"\n").replace(/\\([\\'"])/g,"$1");var identifier=/^[a-z$][\w+$]+$/i.test(template)&&!(/^(true|false|NaN|null|this)$/.test(template));return['",',identifier?['typeof ',template,'=="undefined"?"":'].join(""):"",(flag=="#"?'_encode_':""),'(',template,'),"'].join("")}),'"'].join("").replace(/^"",|,""$/g,"");if(expression)return['_output_.push(',expression,');'].join("");else return""}));body.push("}");var result=new Function("_output_","_encode_","helper",body.join(""));return result}AceTemplate.format=function(id,data,helper){if(!id)return"";var reader,element;if(typeof id=="object"&&id.tagName){element=id;id=element.getAttribute("id")}helper=helper||this;reader=readerCaches[id];if(!reader){if(!/[^\w-]/.test(id)){if(!element){element=lib.g(id)}reader=this.register(id,element)}else{reader=analyse(id)}}var output=[];reader.call(data||"",output,lib.encodeHTML,helper);return output.join("")};AceTemplate.register=function(id,target){if(!arguments.length&&!registerAll){registerAll=true;var scripts=document.getElementsByTagName("script");for(var i=0;i<scripts.length;i++){var script=scripts[i];if(/^(text\/template)$/i.test(script.getAttribute("type"))){var id=script.getAttribute("id");id&&arguments.callee.call(this,id,script)}}}if(!id)return;if(readerCaches[id]){return readerCaches[id]}if(typeof target!="string"){if(typeof target=="undefined"){target=lib.g(id)}target=lib.elementText(target)}return readerCaches[id]=analyse(target)};AceTemplate.unregister=function(id){delete readerCaches[id]}})();