//tealium universal tag - utag.sync ut4.0.201904012206, Copyright 2019 Tealium.com Inc. All Rights Reserved.
var TNL=(function(){var _hasGeneralNelson=navigator.userAgent.match(/GeneralNelson/i),_hasUtagDataObj=typeof utag_data!==undefined,_utagDataObj={},_isDev,count=0,dmp={cookie:'aam_uuid',destination:'',enabled:'',passed_segments:'',truncated_segments:'',scriptId:'tnl_dmp',timeout:150,uuid_pttn:/[0-9]{38,55}/g,url:'https://wellsfargobankna.demdex.net/event?d_rtbd=json&d_cb=testandlearn',invoke:function(){dmp.enabled=true;document.write('<scr'+'ipt id="'+dmp.scriptId+'" type="text/javascript" src="'+dmp.url+'"></scr'+'ipt>');}},dmpCookieVal,mtTagPath,enabled=true,globalPackages=['mmpackage-1.17.js','//service.maxymiser.net/platform/us/api/utils/uh.js'],globalHashes={"dT/EgUxPyRbVncsypN4IbTO0g/HJH/JiDoq9hMzUmDk=":"NR_PROD_MSTL-760_HomePage_Desktop,0","FbiWKu2OF+zJIfYCNa790icqlJDHpwudhCba66acqb0=":"NR_PROD_MSTL-760_HomePage_Desktop,1"},excluded=[],whitelist=[{uri:'/',device:'desktop',dmp:false}];function _hasUtagDataProps(obj,purpose){for(var keys=Object.keys(obj),i=0,end=keys.length;i<end;i++){var key=keys[i],_val=obj[key];if(purpose==='_sanitizeUtagDataObj'){if(typeof _val==='undefined'){return false;}else{if(key!=='mt_tag_path'){_val=_val.toLowerCase();_utagDataObj[key]=((key==='device_type'&&_val==='tablet')?'desktop':_val);}}
if(i===end-1){var _notNativeApp=(_utagDataObj.page_type==='browser');return _notNativeApp;}}else if(purpose==='_personalization'){if(utag_data[key]===obj[key]){count++;}
if(i===end-1){return(count===end?true:false)
count=0;}}}}
function _hasCampaign(){var _arr=[excluded,whitelist],_arrType,_isIncludeURI;for(i=0;i<_arr.length;i++){_arrType=_arr[i];_isIncludeURI=(i===0?false:true);for(j=0;j<_arrType.length;j++){matchURI(_arrType[j],_isIncludeURI);}}}
function matchURI(whitelist,bool){var _uri=new RegExp(whitelist.uri+'(\/|)(?:(home|index|)(\/|\.jhtml|\.html|\.htm|)?)$',"i"),_include=bool,_isURIMatch=(_uri.test(window.location.pathname)===true),_isDeviceMatch=(_utagDataObj.device_type===whitelist.device||whitelist.device==='both'),_hasURIAndDeviceMatch=_isURIMatch&&_isDeviceMatch,_criteria=(typeof whitelist.criteria!=='undefined'?_hasUtagDataProps(whitelist.criteria,'_personalization'):true);if(_hasURIAndDeviceMatch&&_criteria){if(_include){whitelist.dmp?dmp.invoke():invokeTestAndLearn();}else{return _include;}}}
function getCookie(name){var matches=document.cookie.match(new RegExp("(?:^|; )"+name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g,'\\$1')+"=([^;]*)"));return matches?decodeURIComponent(matches[1]):undefined;}
function invokeTestAndLearn(){dmpCookieVal=getCookie(dmp.cookie);if(dmpCookieVal!==undefined&&dmp.uuid_pttn.test(dmpCookieVal)===true){TNL.uuid=dmpCookieVal;}
TNL.mtTagPath=mtTagPath;document.write('<scr'+'ipt type="text/javascript" src="'+mtTagPath+'mmapi-1.14.js'+'"></scr'+'ipt>');}
function init(){_utagDataObj={app_id:utag_data.app_id,device_type:utag_data.device_type,environment:utag_data.environment,lang_pref:utag_data.lang_pref,mt_tag_path:utag_data.mt_tag_path,page_type:utag_data.page_type};if(_hasUtagDataProps(_utagDataObj,'_sanitizeUtagDataObj')){_isDev=(_utagDataObj.environment!=='production'&&_utagDataObj.environment!=='prod'&&_utagDataObj.environment!=='staging');dmp.destination=(_isDev?'tnl-qa':'tnl-prod');satisfied_criteria=(_utagDataObj.app_id==='www'&&_utagDataObj.page_type==='browser'&&_utagDataObj.lang_pref==='en');mtTagPath=(typeof _utagDataObj.mt_tag_path!==undefined?_utagDataObj.mt_tag_path+'tnl/':'');}
if(satisfied_criteria){_hasCampaign();}}
return{dmp:dmp,enable:enabled,globalHashes:globalHashes,globalPackages:globalPackages,hasGeneralNelson:_hasGeneralNelson,init:init,invokeTestAndLearn:invokeTestAndLearn,mtTagPath:mtTagPath,hasUtagDataObj:_hasUtagDataObj}})();function testandlearn(data){try{var dmpData=JSON.stringify(data),dmpObj,segments=null;document.getElementById(TNL.dmp.scriptId).parentNode.removeChild(document.getElementById(TNL.dmp.scriptId));TNL.uuid=JSON.parse(dmpData).uuid;if(JSON.parse(dmpData).stuff&&JSON.parse(dmpData).stuff.length>0){dmpObj=JSON.parse(dmpData).stuff;dmpObj.forEach(function(segment){if(TNL.hasUtagDataObj){if(segment.cn===TNL.dmp.destination){segments=segment.cv.replace(/^(id\=)/g,'');}}});if(segments!==null&&segments.length>0){if(segments.length>255){TNL.dmp.passed_segments=segments.substr(0,255);TNL.dmp.truncated_segments=segments.substr(255);}
TNL.dmp.segments='dmp_segments='+(segments.split(',').sort());}}}catch(e){}
TNL.invokeTestAndLearn();if(TNL.dmp.truncated_segments!==undefined){var elem=new Image(0,0),url=TNL.mtTagPath+'mt.gif?',reqParams='app=TNL&wfaCookie='+utag_data.mcid+'&aam_uuid='+TNL.uuid+'&segments='+segments+'&truncated_segments='+TNL.dmp.truncated_segments;elem.src=url+reqParams;document.head.appendChild(elem);}}
if(TNL.enable&&TNL.hasUtagDataObj&&!TNL.hasGeneralNelson){TNL.init();}
var CryptoJS=CryptoJS||function(h,s){var f={},t=f.lib={},g=function(){},j=t.Base={extend:function(a){g.prototype=this;var c=new g;a&&c.mixIn(a);c.hasOwnProperty("init")||(c.init=function(){c.$super.init.apply(this,arguments)});c.init.prototype=c;c.$super=this;return c},create:function(){var a=this.extend();a.init.apply(a,arguments);return a},init:function(){},mixIn:function(a){for(var c in a)a.hasOwnProperty(c)&&(this[c]=a[c]);a.hasOwnProperty("toString")&&(this.toString=a.toString)},clone:function(){return this.init.prototype.extend(this)}},q=t.WordArray=j.extend({init:function(a,c){a=this.words=a||[];this.sigBytes=c!=s?c:4*a.length},toString:function(a){return(a||u).stringify(this)},concat:function(a){var c=this.words,d=a.words,b=this.sigBytes;a=a.sigBytes;this.clamp();if(b%4)
for(var e=0;e<a;e++)c[b+e>>>2]|=(d[e>>>2]>>>24-8*(e%4)&255)<<24-8*((b+e)%4);else if(65535<d.length)
for(e=0;e<a;e+=4)c[b+e>>>2]=d[e>>>2];else c.push.apply(c,d);this.sigBytes+=a;return this},clamp:function(){var a=this.words,c=this.sigBytes;a[c>>>2]&=4294967295<<32-8*(c%4);a.length=h.ceil(c/4)},clone:function(){var a=j.clone.call(this);a.words=this.words.slice(0);return a},random:function(a){for(var c=[],d=0;d<a;d+=4)c.push(4294967296*h.random()|0);return new q.init(c,a)}}),v=f.enc={},u=v.Hex={stringify:function(a){var c=a.words;a=a.sigBytes;for(var d=[],b=0;b<a;b++){var e=c[b>>>2]>>>24-8*(b%4)&255;d.push((e>>>4).toString(16));d.push((e&15).toString(16))}
return d.join("")},parse:function(a){for(var c=a.length,d=[],b=0;b<c;b+=2)d[b>>>3]|=parseInt(a.substr(b,2),16)<<24-4*(b%8);return new q.init(d,c/2)}},k=v.Latin1={stringify:function(a){var c=a.words;a=a.sigBytes;for(var d=[],b=0;b<a;b++)d.push(String.fromCharCode(c[b>>>2]>>>24-8*(b%4)&255));return d.join("")},parse:function(a){for(var c=a.length,d=[],b=0;b<c;b++)d[b>>>2]|=(a.charCodeAt(b)&255)<<24-8*(b%4);return new q.init(d,c)}},l=v.Utf8={stringify:function(a){try{return decodeURIComponent(escape(k.stringify(a)))}catch(c){throw Error("Malformed UTF-8 data");}},parse:function(a){return k.parse(unescape(encodeURIComponent(a)))}},x=t.BufferedBlockAlgorithm=j.extend({reset:function(){this._data=new q.init;this._nDataBytes=0},_append:function(a){"string"==typeof a&&(a=l.parse(a));this._data.concat(a);this._nDataBytes+=a.sigBytes},_process:function(a){var c=this._data,d=c.words,b=c.sigBytes,e=this.blockSize,f=b/(4*e),f=a?h.ceil(f):h.max((f|0)-this._minBufferSize,0);a=f*e;b=h.min(4*a,b);if(a){for(var m=0;m<a;m+=e)this._doProcessBlock(d,m);m=d.splice(0,a);c.sigBytes-=b}
return new q.init(m,b)},clone:function(){var a=j.clone.call(this);a._data=this._data.clone();return a},_minBufferSize:0});t.Hasher=x.extend({cfg:j.extend(),init:function(a){this.cfg=this.cfg.extend(a);this.reset()},reset:function(){x.reset.call(this);this._doReset()},update:function(a){this._append(a);this._process();return this},finalize:function(a){a&&this._append(a);return this._doFinalize()},blockSize:16,_createHelper:function(a){return function(c,d){return(new a.init(d)).finalize(c)}},_createHmacHelper:function(a){return function(c,d){return(new w.HMAC.init(a,d)).finalize(c)}}});var w=f.algo={};return f}(Math);(function(h){for(var s=CryptoJS,f=s.lib,t=f.WordArray,g=f.Hasher,f=s.algo,j=[],q=[],v=function(a){return 4294967296*(a-(a|0))|0},u=2,k=0;64>k;){var l;a:{l=u;for(var x=h.sqrt(l),w=2;w<=x;w++)
if(!(l%w)){l=!1;break a}
l=!0}
l&&(8>k&&(j[k]=v(h.pow(u,0.5))),q[k]=v(h.pow(u,1/3)),k++);u++}
var a=[],f=f.SHA256=g.extend({_doReset:function(){this._hash=new t.init(j.slice(0))},_doProcessBlock:function(c,d){for(var b=this._hash.words,e=b[0],f=b[1],m=b[2],h=b[3],p=b[4],j=b[5],k=b[6],l=b[7],n=0;64>n;n++){if(16>n)a[n]=c[d+n]|0;else{var r=a[n-15],g=a[n-2];a[n]=((r<<25|r>>>7)^(r<<14|r>>>18)^r>>>3)+a[n-7]+((g<<15|g>>>17)^(g<<13|g>>>19)^g>>>10)+a[n-16]}
r=l+((p<<26|p>>>6)^(p<<21|p>>>11)^(p<<7|p>>>25))+(p&j^~p&k)+q[n]+a[n];g=((e<<30|e>>>2)^(e<<19|e>>>13)^(e<<10|e>>>22))+(e&f^e&m^f&m);l=k;k=j;j=p;p=h+r|0;h=m;m=f;f=e;e=r+g|0}
b[0]=b[0]+e|0;b[1]=b[1]+f|0;b[2]=b[2]+m|0;b[3]=b[3]+h|0;b[4]=b[4]+p|0;b[5]=b[5]+j|0;b[6]=b[6]+k|0;b[7]=b[7]+l|0},_doFinalize:function(){var a=this._data,d=a.words,b=8*this._nDataBytes,e=8*a.sigBytes;d[e>>>5]|=128<<24-e%32;d[(e+64>>>9<<4)+14]=h.floor(b/4294967296);d[(e+64>>>9<<4)+15]=b;a.sigBytes=4*d.length;this._process();return this._hash},clone:function(){var a=g.clone.call(this);a._hash=this._hash.clone();return a}});s.SHA256=g._createHelper(f);s.HmacSHA256=g._createHmacHelper(f)})(Math);(function(){var C=CryptoJS;var C_lib=C.lib;var WordArray=C_lib.WordArray;var C_enc=C.enc;var Base64=C_enc.Base64={stringify:function(wordArray){var words=wordArray.words;var sigBytes=wordArray.sigBytes;var map=this._map;wordArray.clamp();var base64Chars=[];for(var i=0;i<sigBytes;i+=3){var byte1=(words[i>>>2]>>>(24-(i%4)*8))&0xff;var byte2=(words[(i+1)>>>2]>>>(24-((i+1)%4)*8))&0xff;var byte3=(words[(i+2)>>>2]>>>(24-((i+2)%4)*8))&0xff;var triplet=(byte1<<16)|(byte2<<8)|byte3;for(var j=0;(j<4)&&(i+j*0.75<sigBytes);j++){base64Chars.push(map.charAt((triplet>>>(6*(3-j)))&0x3f));}}
var paddingChar=map.charAt(64);if(paddingChar){while(base64Chars.length%4){base64Chars.push(paddingChar);}}
return base64Chars.join('');},parse:function(base64Str){var base64StrLength=base64Str.length;var map=this._map;var paddingChar=map.charAt(64);if(paddingChar){var paddingIndex=base64Str.indexOf(paddingChar);if(paddingIndex!=-1){base64StrLength=paddingIndex;}}
var words=[];var nBytes=0;for(var i=0;i<base64StrLength;i++){if(i%4){var bits1=map.indexOf(base64Str.charAt(i-1))<<((i%4)*2);var bits2=map.indexOf(base64Str.charAt(i))>>>(6-(i%4)*2);words[nBytes>>>2]|=(bits1|bits2)<<(24-(nBytes%4)*8);nBytes++;}}
return WordArray.create(words,nBytes);},_map:'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/='};}());