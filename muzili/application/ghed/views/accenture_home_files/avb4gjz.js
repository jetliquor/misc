/*{"version":"17154015","k":"1.5.2","mac":"1:6d8eeb1d8faf784f13166c6a53a214b482955e74836c3212045bac9b1757a252","created":"2013-04-25T11:04:11Z"}*/
/*
 * For font license information, see the CSS file loaded by this JavaScript.
 */
;(function(window,document,undefined){
var g=void 0,k=!0,l=null,m=!1;function n(a){return function(){return this[a]}}var ca=this;function da(a,c){var b=a.split("."),e=ca;!(b[0]in e)&&e.execScript&&e.execScript("var "+b[0]);for(var d;b.length&&(d=b.shift());)!b.length&&c!==g?e[d]=c:e=e[d]?e[d]:e[d]={}}ca.Ua=k;function ea(a,c,b){return a.call.apply(a.bind,arguments)}
function fa(a,c,b){if(!a)throw Error();if(2<arguments.length){var e=Array.prototype.slice.call(arguments,2);return function(){var b=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(b,e);return a.apply(c,b)}}return function(){return a.apply(c,arguments)}}function q(a,c,b){q=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?ea:fa;return q.apply(l,arguments)}var ga=Date.now||function(){return+new Date};
function r(a,c){this.Ja=a;this.na=c||a;this.k=this.na.document;this.v=g}r.prototype.createElement=function(a,c,b){a=this.k.createElement(a);if(c)for(var e in c)c.hasOwnProperty(e)&&("style"==e?this.aa(a,c[e]):a.setAttribute(e,c[e]));b&&a.appendChild(this.k.createTextNode(b));return a};function s(a,c,b){a=a.k.getElementsByTagName(c)[0];a||(a=document.documentElement);a&&a.lastChild&&a.insertBefore(b,a.lastChild)}function ha(a){function c(){document.body?a():setTimeout(c,0)}c()}
function t(a,c){for(var b=a.className.split(/\s+/),e=0,d=b.length;e<d;e++)if(b[e]==c)return;b.push(c);a.className=b.join(" ").replace(/\s+/g," ").replace(/^\s+|\s+$/,"")}function u(a,c){for(var b=a.className.split(/\s+/),e=[],d=0,f=b.length;d<f;d++)b[d]!=c&&e.push(b[d]);a.className=e.join(" ").replace(/\s+/g," ").replace(/^\s+|\s+$/,"")}function ia(a,c){for(var b=a.className.split(/\s+/),e=0,d=b.length;e<d;e++)if(b[e]==c)return k;return m}
r.prototype.aa=function(a,c){this.Z()?a.setAttribute("style",c):a.style.cssText=c};r.prototype.Z=function(){if(this.v===g){var a=this.k.createElement("p");a.innerHTML='<a style="top:1px;">w</a>';this.v=/top/.test(a.getElementsByTagName("a")[0].getAttribute("style"))}return this.v};function v(a,c,b){this.Sa=a;this.ca=c;this.Ra=b}da("internalWebfont.BrowserInfo",v);v.prototype.Ca=n("Sa");v.prototype.hasWebFontSupport=v.prototype.Ca;v.prototype.Da=n("ca");v.prototype.hasWebKitFallbackBug=v.prototype.Da;
v.prototype.Ea=n("Ra");v.prototype.hasWebKitMetricsBug=v.prototype.Ea;function w(a,c,b,e,d,f,h,j){this.B=a;this.Qa=c;this.xa=b;this.wa=e;this.Ma=d;this.La=f;this.va=h;this.s=j}da("internalWebfont.UserAgent",w);w.prototype.getName=n("B");w.prototype.getName=w.prototype.getName;w.prototype.getVersion=n("Qa");w.prototype.getVersion=w.prototype.getVersion;w.prototype.getEngine=n("xa");w.prototype.getEngine=w.prototype.getEngine;w.prototype.getEngineVersion=n("wa");w.prototype.getEngineVersion=w.prototype.getEngineVersion;
w.prototype.getPlatform=n("Ma");w.prototype.getPlatform=w.prototype.getPlatform;w.prototype.getPlatformVersion=n("La");w.prototype.getPlatformVersion=w.prototype.getPlatformVersion;w.prototype.getDocumentMode=n("va");w.prototype.getDocumentMode=w.prototype.getDocumentMode;w.prototype.Aa=n("s");w.prototype.getBrowserInfo=w.prototype.Aa;function ja(a,c){this.c=a;this.r=c}var ka=new w("Unknown","Unknown","Unknown","Unknown","Unknown","Unknown",g,new v(m,m,m));
ja.prototype.parse=function(){var a;if(-1!=this.c.indexOf("MSIE")){a=x(this);var c=y(this),b=z(this.c,/(MSIE [\d\w\.]+)/,1);if(""!=b){var e=b.split(" "),b=e[0],e=e[1],d=B(e),f=B(c);a=new w(b,e,b,e,a,c,C(this.r),new v("Windows"==a&&6<=d.h||"Windows Phone"==a&&8<=f.h,m,m))}else a=new w("MSIE","Unknown","MSIE","Unknown",a,c,C(this.r),new v(m,m,m))}else if(-1!=this.c.indexOf("Opera"))a=la(this);else if(/AppleWeb(K|k)it/.test(this.c)){a=x(this);var c=y(this),b=z(this.c,/AppleWeb(?:K|k)it\/([\d\.\+]+)/,
1),h=m;""==b&&(b="Unknown");e=B(b);h=B(c);d="Unknown";-1!=this.c.indexOf("Chrome")||-1!=this.c.indexOf("CrMo")||-1!=this.c.indexOf("CriOS")?d="Chrome":/Silk\/\d/.test(this.c)?d="Silk":"BlackBerry"==a||"Android"==a?d="BuiltinBrowser":-1!=this.c.indexOf("Safari")?d="Safari":-1!=this.c.indexOf("AdobeAIR")&&(d="AdobeAIR");f="Unknown";"BuiltinBrowser"==d?f="Unknown":/Silk\/\d/.test(this.c)?f=z(this.c,/Silk\/([\d\._]+)/,1):-1!=this.c.indexOf("Version/")?f=z(this.c,/Version\/([\d\.\w]+)/,1):"Chrome"==d?
f=z(this.c,/(Chrome|CrMo|CriOS)\/([\d\.]+)/,2):"AdobeAIR"==d&&(f=z(this.c,/AdobeAIR\/([\d\.]+)/,1));"AdobeAIR"==d?(h=B(f),h=2<h.h||2==h.h&&5<=h.u):h="BlackBerry"==a?10<=h.h:"Android"==a?2<h.h||2==h.h&&1<h.u:526<=e.h||525<=e.h&&13<=e.u;a=new w(d,f,"AppleWebKit",b,a,c,C(this.r),new v(h,536>e.h||536==e.h&&11>e.u,"iPhone"==a||"iPad"==a||"iPod"==a||"Macintosh"==a))}else-1!=this.c.indexOf("Gecko")?(c=a="Unknown",b=m,-1!=this.c.indexOf("Firefox")?(a="Firefox",e=z(this.c,/Firefox\/([\d\w\.]+)/,1),""!=e&&
(b=B(e),c=e,b=3<=b.h&&5<=b.u)):-1!=this.c.indexOf("Mozilla")&&(a="Mozilla"),e=z(this.c,/rv:([^\)]+)/,1),""==e?e="Unknown":b||(b=B(e),b=1<b.h||1==b.h&&9<b.u||1==b.h&&9==b.u&&2<=b.Ka||e.match(/1\.9\.1b[123]/)!=l||e.match(/1\.9\.1\.[\d\.]+/)!=l),a=new w(a,c,"Gecko",e,x(this),y(this),C(this.r),new v(b,m,m))):a=ka;return a};
function x(a){var c=z(a.c,/(iPod|iPad|iPhone|Android|Windows Phone|BB\d{2}|BlackBerry)/,1);if(""!=c)return/BB\d{2}/.test(c)&&(c="BlackBerry"),c;a=z(a.c,/(Linux|Mac_PowerPC|Macintosh|Windows|CrOS)/,1);return""!=a?("Mac_PowerPC"==a&&(a="Macintosh"),a):"Unknown"}
function y(a){var c=z(a.c,/(OS X|Windows NT|Android|CrOS) ([^;)]+)/,2);return c||(c=z(a.c,/Windows Phone( OS)? ([^;)]+)/,2))||(c=z(a.c,/(iPhone )?OS ([\d_]+)/,2))||(c=z(a.c,/Linux ([i\d]+)/,1))?c:(a=z(a.c,/(BB\d{2}|BlackBerry).*?Version\/([^\s]*)/,2))?a:"Unknown"}
function la(a){var c="Unknown",b="Unknown",e=z(a.c,/(Presto\/[\d\w\.]+)/,1);""!=e?(b=e.split("/"),c=b[0],b=b[1]):(-1!=a.c.indexOf("Gecko")&&(c="Gecko"),e=z(a.c,/rv:([^\)]+)/,1),""!=e&&(b=e));if(-1!=a.c.indexOf("Opera Mini/"))return e=z(a.c,/Opera Mini\/([\d\.]+)/,1),""==e&&(e="Unknown"),new w("OperaMini",e,c,b,x(a),y(a),C(a.r),new v(m,m,m));if(-1!=a.c.indexOf("Version/")){var d=z(a.c,/Version\/([\d\.]+)/,1);if(""!=d)return e=B(d),new w("Opera",d,c,b,x(a),y(a),C(a.r),new v(10<=e.h,m,m))}d=z(a.c,/Opera[\/ ]([\d\.]+)/,
1);return""!=d?(e=B(d),new w("Opera",d,c,b,x(a),y(a),C(a.r),new v(10<=e.h,m,m))):new w("Opera","Unknown",c,b,x(a),y(a),C(a.r),new v(m,m,m))}function B(a){a=/([0-9]+)(?:\.([0-9]+)(?:\.([0-9]+)?)?)?/.exec(a);var c={};a&&(c.h=parseInt(a[1]||-1,10),c.u=parseInt(a[2]||-1,10),c.Ka=parseInt(a[3]||-1,10));return c}function z(a,c,b){return(a=a.match(c))&&a[b]?a[b]:""}function C(a){if(a.documentMode)return a.documentMode}function ma(a){this.Ha=a||"-"}
ma.prototype.g=function(a){for(var c=[],b=0;b<arguments.length;b++)c.push(arguments[b].replace(/[\W_]+/g,"").toLowerCase());return c.join(this.Ha)};function na(a,c,b){this.e=a;this.j=c;this.T=b;this.n="wf";this.l=new ma("-")}function E(a){u(a.j,a.l.g(a.n,"loading"));ia(a.j,a.l.g(a.n,"active"))||t(a.j,a.l.g(a.n,"inactive"));F(a,"inactive")}function F(a,c,b){if(a.T[c])if(b)a.T[c](b.getName(),G(b));else a.T[c]()}
function H(a,c){this.B=a;this.da=4;this.O="n";var b=(c||"n4").match(/^([nio])([1-9])$/i);b&&(this.O=b[1],this.da=parseInt(b[2],10))}H.prototype.getName=n("B");function oa(a){var c=[];a=a.B.split(/,\s*/);for(var b=0;b<a.length;b++){var e=a[b].replace(/['"]/g,"");-1==e.indexOf(" ")?c.push(e):c.push("'"+e+"'")}return c.join(",")}function G(a){return a.O+a.da}function pa(a){var c="normal",b=a.da+"00";"o"===a.O?c="oblique":"i"===a.O&&(c="italic");return"font-style:"+c+";font-weight:"+b+";"}
function I(a,c){this.e=a;this.I=c;this.w=this.e.createElement("span",{"aria-hidden":"true"},this.I)}function J(a,c){a.e.aa(a.w,"position:absolute;top:-999px;left:-999px;font-size:300px;width:auto;height:auto;line-height:normal;margin:0;padding:0;font-variant:normal;white-space:nowrap;font-family:"+oa(c)+";"+pa(c))}function K(a){s(a.e,"body",a.w)}I.prototype.remove=function(){var a=this.w;a.parentNode&&a.parentNode.removeChild(a)};
function qa(a,c,b,e,d,f,h,j){this.ea=a;this.Ga=c;this.e=b;this.t=e;this.I=j||"BESbswy";this.s=d;this.J={};this.ba=f||5E3;this.oa=h||l;this.H=this.G=l;a=new I(this.e,this.I);K(a);for(var p in M)M.hasOwnProperty(p)&&(J(a,new H(M[p],G(this.t))),this.J[M[p]]=a.w.offsetWidth);a.remove()}var M={Xa:"serif",Wa:"sans-serif",Va:"monospace"};
qa.prototype.start=function(){this.G=new I(this.e,this.I);K(this.G);this.H=new I(this.e,this.I);K(this.H);this.Oa=ga();J(this.G,new H(this.t.getName()+",serif",G(this.t)));J(this.H,new H(this.t.getName()+",sans-serif",G(this.t)));ra(this)};function sa(a,c,b){for(var e in M)if(M.hasOwnProperty(e)&&c===a.J[M[e]]&&b===a.J[M[e]])return k;return m}
function ra(a){var c=a.G.w.offsetWidth,b=a.H.w.offsetWidth;c===a.J.serif&&b===a.J["sans-serif"]||a.s.ca&&sa(a,c,b)?ga()-a.Oa>=a.ba?a.s.ca&&sa(a,c,b)&&(a.oa===l||a.oa.hasOwnProperty(a.t.getName()))?N(a,a.ea):N(a,a.Ga):setTimeout(q(function(){ra(this)},a),25):N(a,a.ea)}function N(a,c){a.G.remove();a.H.remove();c(a.t)}function P(a,c,b,e){this.e=c;this.z=b;this.W=0;this.ra=this.ma=m;this.ba=e;this.s=a.s}
P.prototype.watch=function(a,c,b,e){var d=a.length;if(0===d&&e)E(this.z);else{this.W+=d;e&&(this.ma=e);for(e=0;e<d;e++){var f=a[e],h=c[f.getName()],j=this.z,p=f;t(j.j,j.l.g(j.n,p.getName(),G(p).toString(),"loading"));F(j,"fontloading",p);j=q(this.ya,this);p=q(this.za,this);(new b(j,p,this.e,f,this.s,this.ba,l,h)).start()}}};
P.prototype.ya=function(a){var c=this.z;u(c.j,c.l.g(c.n,a.getName(),G(a).toString(),"loading"));u(c.j,c.l.g(c.n,a.getName(),G(a).toString(),"inactive"));t(c.j,c.l.g(c.n,a.getName(),G(a).toString(),"active"));F(c,"fontactive",a);this.ra=k;ta(this)};P.prototype.za=function(a){var c=this.z;u(c.j,c.l.g(c.n,a.getName(),G(a).toString(),"loading"));ia(c.j,c.l.g(c.n,a.getName(),G(a).toString(),"active"))||t(c.j,c.l.g(c.n,a.getName(),G(a).toString(),"inactive"));F(c,"fontinactive",a);ta(this)};
function ta(a){0==--a.W&&a.ma&&(a.ra?(a=a.z,u(a.j,a.l.g(a.n,"loading")),u(a.j,a.l.g(a.n,"inactive")),t(a.j,a.l.g(a.n,"active")),F(a,"active")):E(a.z))}function Q(a,c){this.Ja=a;this.na=c||a;this.k=document;this.v=g}Q.prototype=r.prototype;Q.prototype.Ba=function(){return this.k.location.hostname};
function ua(a,c,b){var e=a.k.getElementsByTagName("head")[0];if(e){var d=a.k.createElement("script");d.src=c;var f=m;d.onload=d.onreadystatechange=function(){if(!f&&(!this.readyState||"loaded"==this.readyState||"complete"==this.readyState))f=k,b&&b(),d.onload=d.onreadystatechange=l,"HEAD"==d.parentNode.tagName&&e.removeChild(d)};e.appendChild(d)}}Q.prototype.aa=function(a,c){this.Z()?a.setAttribute("style",c):a.style.cssText=c};
Q.prototype.Z=function(){if(this.v===g){var a=this.k.createElement("p");a.innerHTML='<a style="top:1px;">w</a>';this.v=/top/.test(a.getElementsByTagName("a")[0].getAttribute("style"))}return this.v};function va(a){for(var c=a.Na.join(","),b=[],e=0;e<a.ha.length;e++){var d=a.ha[e];b.push(d.name+":"+d.value+";")}return c+"{"+b.join("")+"}"}function R(a,c,b,e){this.F=a;this.L=c;this.Fa=b;this.Ya=e;this.ja={};this.ia={}}R.prototype.A=function(a){return a?(this.ja[a.P]||this.L).slice(0):this.L.slice(0)};
R.prototype.watch=function(a,c,b){var e=[],d={};xa(this,c,e,d);a(e,d,b)};function xa(a,c,b,e){b.push(a.F);e[a.F]=a.A(c);a=a.ia[c.P]||[];for(c=0;c<a.length;c++){for(var d=a[c],f=d.F,h=m,j=0;j<b.length;j++)b[j]==f&&(h=k);h||(b.push(f),e[f]=d.A())}}function ya(a,c){this.F=a;this.L=c}ya.prototype.A=n("L");function S(a,c,b){this.Fa=a;this.P=c;this.la=b}function za(){this.ta=this.Ta=this.p=this.M=this.N=k}function T(a){Aa.S.push(a)}
function U(a){this.e=a;this.ua=this.q=this.c=this.R=l;this.m=[];this.K=[];this.sa=this.X=this.U=this.V=l}function Ba(a,c){a.c=c;if(a.R){var b;a:{b=a.R;for(var e=a.c,d=a.ua,f=0;f<b.S.length;f++){var h=b.S[f],j=e,p=d;p||(p=new za);if(h.la&&h.la(j.getName(),j.getVersion(),j.getEngine(),j.getEngineVersion(),j.getPlatform(),j.getPlatformVersion(),j.getDocumentMode(),p)){b=h;break a}}b=l}a.q=b}}U.prototype.supportsConfiguredBrowser=function(){return!!this.q};
U.prototype.init=function(){if(0<this.K.length){for(var a=[],c=0;c<this.K.length;c++)a.push(va(this.K[c]));var c=this.e,a=a.join(""),b=this.e.k.createElement("style");b.setAttribute("type","text/css");b.styleSheet?b.styleSheet.cssText=a:b.appendChild(document.createTextNode(a));s(c,"head",b)}};
U.prototype.load=function(a,c){var b=this.q.P;if(this.X){var e;e=this.X;var d=e.C[b];e=d?Ca(e,d):l;for(d=0;d<this.m.length;d++){for(var f=this.m[d],h=this.q,j=e,p=[],Pa=f.F.split(",")[0].replace(/"|'/g,""),O=f.A(),L=p,A=g,D=[],wa={},aa=0;aa<O.length;aa++)A=O[aa],0<A.length&&!wa[A]&&(wa[A]=k,D.push(A));O=D;j=j.qa?j.qa(Pa,O,L):O;h=h.P;f.ja[h]=j;f.ia[h]=p}}if(this.V){e=[];if(this.U){e=new Da(this.e,this.q,this.m);d=[];f=this.U.D[b]||[];for(p=0;p<f.length;p++){a:switch(f[p]){case "observeddomain":h=new Ea(e.e);
break a;case "fontmask":h=new Fa(e.q,e.m);break a;default:h=l}h&&d.push(h)}e=d}d=[];for(f=0;f<e.length;f++)d.push(e[f].toString());b=this.V.g("https:"==this.e.k.location.protocol,{format:b,extras:d});s(this.e,"head",this.e.createElement("link",{rel:"stylesheet",href:b}))}if(a){var ba=this,Ra=this.q;ha(function(){for(var b=0;b<ba.m.length;b++)ba.m[b].watch(a,Ra,c&&b==ba.m.length-1)})}};U.prototype.collectFontFamilies=function(a,c){for(var b=0;b<this.m.length;b++)xa(this.m[b],this.q,a,c)};
U.prototype.performOptionalActions=function(){if(this.$){var a=this,c=this.c,b=this.e;ha(function(){var e=a.$;if(e.pa){var d=window.__adobewebfontsappname__,d=d?d.toString().substr(0,20):"",e=e.pa.g("https:"==b.k.location.protocol,{host:encodeURIComponent(b.k.location.hostname),app:encodeURIComponent(d),_:(+new Date).toString()}),f=new Image(1,1);f.src=e;f.onload=function(){f.onload=l}}e=a.$;e.ga&&(e=e.ga.g(c,b),s(b,"body",e))})}};
function Ga(a,c,b,e,d){this.Ia=a;this.e=c;this.c=b;this.j=e;this.fa=d;this.o=[]}Ga.prototype.Q=function(a){this.o.push(a)};Ga.prototype.load=function(a,c){var b=a,e=c||{};if("string"==typeof b)b=[b];else if(!b||!b.length)e=b||{},b=[];if(b.length)for(var d=this,f=b.length,h=0;h<b.length;h++){var j=this.Ia.g("https:"==this.e.k.location.protocol,{id:encodeURIComponent(b[h])});ua(this.e,j,function(){0==--f&&Ha(d,e)})}else Ha(this,e)};
function Ha(a,c){if(0!=a.o.length){for(var b=new na(a.e,a.j,c),e=m,d=0;d<a.o.length;d++)a.o[d].init(),e=e||a.o[d].supportsConfiguredBrowser();if(e){t(b.j,b.l.g(b.n,"loading"));F(b,"loading");for(var f=new P(a.c,a.e,b),b=function(a,b,c){for(var d=[],e=0;e<a.length;e+=1){var L=a[e];if(b[L])for(var A=b[L],D=0;D<A.length;D+=1)d.push(new H(L,A[D]));else d.push(new H(L))}f.watch(d,{},qa,c)},e=0;e<a.o.length;e++)d=a.o[e],d.supportsConfiguredBrowser()&&(d.load(b,e==a.o.length-1),d.performOptionalActions(window))}else E(b);
a.o=[]}}function Ia(a,c){this.ka=a;this.fa=c;this.o=[]}Ia.prototype.Q=function(a){this.o.push(a)};Ia.prototype.load=function(){var a=this.ka.__webfonttypekitmodule__;if(a)for(var c=0;c<this.o.length;c++){var b=this.o[c],e=a[b.sa];if(e){var d=this.fa;e(function(a,c,e){c=[];var p={};Ba(b,a);b.supportsConfiguredBrowser()&&(b.init(),b.load(l,d),b.collectFontFamilies(c,p),b.performOptionalActions(window));e(b.supportsConfiguredBrowser(),c,p)})}}};function Ja(a,c){this.B=a;this.qa=c}
Ja.prototype.getName=n("B");function Ka(a){var c=V;Ca(c,a.getName())||c.Y.push(a)}function Ca(a,c){for(var b=0;b<a.Y.length;b++){var e=a.Y[b];if(c===e.getName())return e}return l}function Da(a,c,b){this.e=a;this.q=c;this.m=b}function Ea(a){this.e=a}Ea.prototype.toString=function(){return encodeURIComponent(this.e.Ba?this.e.k.location.hostname:document.location.hostname)};function Fa(a,c){this.q=a;this.m=c}
Fa.prototype.toString=function(){for(var a=[],c=0;c<this.m.length;c++)for(var b=this.m[c],e=b.A(),b=b.A(this.q),d=0;d<e.length;d++){var f;a:{for(f=0;f<b.length;f++)if(e[d]===b[f]){f=k;break a}f=m}a.push(f?1:0)}a=a.join("");a=a.replace(/^0+/,"");c=[];for(e=a.length;0<e;e-=4)b=a.slice(0>e-4?0:e-4,e),c.unshift(parseInt(b,2).toString(16));return c.join("")};function W(a){this.Pa=a}
W.prototype.g=function(a,c){var b=c||{},e=this.Pa.replace(/\{\/?([^*}]*)(\*?)\}/g,function(a,c,e){return e&&b[c]?"/"+b[c].join("/"):b[c]||""});e.match(/^\/\//)&&(e=(a?"https:":"http:")+e);return e.replace(/\/*\?*($|\?)/,"$1")};var Aa=new function(){this.S=[]};T(new S("air-linux-win","a",function(a,c,b,e,d,f){if(b=m||("Windows"==d&&"Unknown"==f?k:m)||("Ubuntu"==d||"Linux"==d?k:m))a:{if("AdobeAIR"==a&&(a=/([0-9]+.[0-9]+)/.exec(c))){a=2.5<=parseFloat(a[1]);break a}a=m}else a=m;return a}));
T(new S("air-osx","b",function(a,c,b,e,d,f){if(!(b=m))b=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&b?(d=parseInt(b[1],10),f=parseInt(b[3],10),b=10<d||10==d&&4<=f):b="Macintosh"==d&&"Unknown"==f?k:m;if(b)a:{if("AdobeAIR"==a&&(a=/([0-9]+.[0-9]+)/.exec(c))){a=2.5<=parseFloat(a[1]);break a}a=m}else a=m;return a}));
T(new S("builtin-android2to3-android4plus","a",function(a,c,b,e,d,f,h,j){if(!(c=m))b=/([0-9]+).([0-9]+)/.exec(f),j.p&&"Android"==d&&b?(c=parseInt(b[1],10),b=parseInt(b[2],10),c=2==c&&2<=b||3==c&&1>b):c=m;c||(f=/([0-9]+).([0-9]+)/.exec(f),j.p&&"Android"==d&&f?(d=parseInt(f[1],10),j=parseInt(f[2],10),c=4==d&&1<=j||4<d):c=m);return!c?m:"BuiltinBrowser"==a}));
T(new S("builtin-android3to4","f",function(a,c,b,e,d,f,h,j){if(!(c=m))f=/([0-9]+).([0-9]+)/.exec(f),j.p&&"Android"==d&&f?(d=parseInt(f[1],10),j=parseInt(f[2],10),c=3==d&&1<=j||4==d&&1>j):c=m;return!c?m:"BuiltinBrowser"==a}));T(new S("builtin-bb10plus","d",function(a,c,b,e,d,f,h,j){c=m||j.ta&&10<=parseInt(f,10);return!c?m:"BuiltinBrowser"==a}));
T(new S("chrome4to5-linux-osx-win2003-win7plus-winvista-winxp","a",function(a,c,b,e,d,f){b=(b=m||("Windows"==d&&"5.1"==f?k:m)||("Windows"==d&&"5.2"==f?k:m))||("Windows"==d&&"6.0"==f?k:m);b||(e=/^([0-9]+).([0-9]+)/.exec(f),"Windows"==d&&e?(b=parseInt(e[1],10),e=parseInt(e[2],10),b=6<b||6==b&&1<=e):b=m);b||(b=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&b?(f=parseInt(b[1],10),b=parseInt(b[3],10),b=10<f||10==f&&4<=b):b="Macintosh"==d&&"Unknown"==f?k:m);if(b=b||("Ubuntu"==d||"Linux"==d?k:m))a:{if("Chrome"==
a&&(d=/([0-9]+.[0-9]+).([0-9]+).([0-9]+)/.exec(c)))if(a=parseFloat(d[1]),c=parseInt(d[2],10),d=parseInt(d[3],10),!(6<=a)&&(4<a||4==a&&249<c||4==a&&249==c&&4<=d)){a=k;break a}a=m}else a=m;return a}));
T(new S("chrome6plus-androidany-chromeos-ipad5plus-iphone5plus-linux-osx-win2003-win7plus-winvista-winxp","d",function(a,c,b,e,d,f,h,j){b=(b=m||("Windows"==d&&"5.1"==f?k:m)||("Windows"==d&&"5.2"==f?k:m))||("Windows"==d&&"6.0"==f?k:m);b||(e=/^([0-9]+).([0-9]+)/.exec(f),"Windows"==d&&e?(b=parseInt(e[1],10),e=parseInt(e[2],10),b=6<b||6==b&&1<=e):b=m);b||(e=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&e?(b=parseInt(e[1],10),e=parseInt(e[3],10),b=10<b||10==b&&4<=e):b="Macintosh"==d&&"Unknown"==f?k:
m);b=(b=(b=b||("Ubuntu"==d||"Linux"==d?k:m))||j.p&&"Android"==d)||"CrOS"==d;b||(b=j.M&&"iPad"==d?(b=/^([0-9]+)_([0-9]+)/.exec(f))?5<=parseInt(b[1],10):m:m);b||(b=j.N&&("iPhone"==d||"iPod"==d)?(d=/^([0-9]+)_([0-9]+)/.exec(f))?5<=parseInt(d[1],10):m:m);if(b)a:{if("Chrome"==a&&(a=/([0-9]+.[0-9]+).([0-9]+).([0-9]+)/.exec(c))&&6<=parseFloat(a[1])){a=k;break a}a=g}else a=m;return a}));
T(new S("chrome6plus-ipad4-iphone4","a",function(a,c,b,e,d,f,h,j){if(!(b=m))a:{if(j.M&&"iPad"==d&&(b=/^([0-9]+)_([0-9]+)/.exec(f))){e=parseInt(b[2],10);b=4==parseInt(b[1],10)&&2<=e;break a}b=m}if(!b)a:{if(j.N&&("iPhone"==d||"iPod"==d))if(d=/^([0-9]+)_([0-9]+)/.exec(f)){f=parseInt(d[2],10);b=4==parseInt(d[1],10)&&2<=f;break a}b=m}if(b)a:{if("Chrome"==a&&(a=/([0-9]+.[0-9]+).([0-9]+).([0-9]+)/.exec(c))&&6<=parseFloat(a[1])){a=k;break a}a=g}else a=m;return a}));
T(new S("ff35-linux-win2003-win7plus-winvista-winxp","a",function(a,c,b,e,d,f){a=(a=m||("Windows"==d&&"5.1"==f?k:m)||("Windows"==d&&"5.2"==f?k:m))||("Windows"==d&&"6.0"==f?k:m);a||(a=/^([0-9]+).([0-9]+)/.exec(f),"Windows"==d&&a?(f=parseInt(a[1],10),a=parseInt(a[2],10),a=6<f||6==f&&1<=a):a=m);(a=a||("Ubuntu"==d||"Linux"==d?k:m))?"Gecko"==b?(b=/1.9.1b[1-3]{1}/,e=/1.9.1/.test(e)&&!b.test(e)):e=m:e=m;return e}));
T(new S("ff35-osx","b",function(a,c,b,e,d,f){if(!(a=m))a=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&a?(d=parseInt(a[1],10),f=parseInt(a[3],10),a=10<d||10==d&&4<=f):a="Macintosh"==d&&"Unknown"==f?k:m;a?"Gecko"==b?(b=/1.9.1b[1-3]{1}/,e=/1.9.1/.test(e)&&!b.test(e)):e=m:e=m;return e}));
T(new S("ff36plus-androidany-linux-osx-win2003-win7plus-winvista-winxp","d",function(a,c,b,e,d,f,h,j){a=(a=m||("Windows"==d&&"5.1"==f?k:m)||("Windows"==d&&"5.2"==f?k:m))||("Windows"==d&&"6.0"==f?k:m);a||(c=/^([0-9]+).([0-9]+)/.exec(f),"Windows"==d&&c?(a=parseInt(c[1],10),c=parseInt(c[2],10),a=6<a||6==a&&1<=c):a=m);a||(a=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&a?(f=parseInt(a[1],10),a=parseInt(a[3],10),a=10<f||10==f&&4<=a):a="Macintosh"==d&&"Unknown"==f?k:m);if(a=(a=a||("Ubuntu"==d||"Linux"==
d?k:m))||j.p&&"Android"==d)a:{if("Gecko"==b&&(e=/([0-9]+.[0-9]+)(.([0-9]+)|)/.exec(e))){b=parseFloat(e[1]);e=parseInt(e[3],10);b=1.9<b||1.9<=b&&1<e;break a}b=m}else b=m;return b}));
T(new S("ie6to8-win2003-win7plus-winvista-winxp","i",function(a,c,b,e,d,f,h){b=(b=m||("Windows"==d&&"5.1"==f?k:m)||("Windows"==d&&"5.2"==f?k:m))||("Windows"==d&&"6.0"==f?k:m);b||(f=/^([0-9]+).([0-9]+)/.exec(f),"Windows"==d&&f?(d=parseInt(f[1],10),f=parseInt(f[2],10),b=6<d||6==d&&1<=f):b=m);h=b?"MSIE"==a?(a=/([0-9]+.[0-9]+)/.exec(c))?6<=parseFloat(a[1])&&(h===g||9>h):m:g:m;return h}));
T(new S("ie9plus-win7plus-winvista","d",function(a,c,b,e,d,f,h){if(!(c=m))b=/^([0-9]+).([0-9]+)/.exec(f),"Windows"==d&&b?(c=parseInt(b[1],10),b=parseInt(b[2],10),c=6<c||6==c&&1<=b):c=m;a=(d=c||("Windows"==d&&"6.0"==f?k:m))?"MSIE"==a?9<=h:g:m;return a}));T(new S("ieany-winphone8plus","d",function(a,c,b,e,d,f,h,j){if(!(c=m))f=/^([0-9]+)/.exec(f),c=j.Ta&&"Windows Phone"==d&&f?8<=parseInt(f[1],10):m;return!c?m:"MSIE"==a}));
T(new S("opera10-linux-win2003-win7plus-winvista-winxp","a",function(a,c,b,e,d,f){b=(b=m||("Windows"==d&&"5.1"==f?k:m)||("Windows"==d&&"5.2"==f?k:m))||("Windows"==d&&"6.0"==f?k:m);b||(b=/^([0-9]+).([0-9]+)/.exec(f),"Windows"==d&&b?(f=parseInt(b[1],10),b=parseInt(b[2],10),b=6<f||6==f&&1<=b):b=m);(b=b||("Ubuntu"==d||"Linux"==d?k:m))?"Opera"==a?(a=parseFloat(c),a=10.54<=a&&11.1>a):a=m:a=m;return a}));
T(new S("opera10-osx","b",function(a,c,b,e,d,f){if(!(b=m))b=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&b?(d=parseInt(b[1],10),f=parseInt(b[3],10),b=10<d||10==d&&4<=f):b="Macintosh"==d&&"Unknown"==f?k:m;b?"Opera"==a?(a=parseFloat(c),a=10.54<=a&&11.1>a):a=m:a=m;return a}));
T(new S("opera11plus-androidany-linux-osx-win2003-win7plus-winvista-winxp","d",function(a,c,b,e,d,f,h,j){b=(b=m||("Windows"==d&&"5.1"==f?k:m)||("Windows"==d&&"5.2"==f?k:m))||("Windows"==d&&"6.0"==f?k:m);b||(e=/^([0-9]+).([0-9]+)/.exec(f),"Windows"==d&&e?(b=parseInt(e[1],10),e=parseInt(e[2],10),b=6<b||6==b&&1<=e):b=m);b||(b=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&b?(f=parseInt(b[1],10),b=parseInt(b[3],10),b=10<f||10==f&&4<=b):b="Macintosh"==d&&"Unknown"==f?k:m);b=(b=b||("Ubuntu"==d||"Linux"==
d?k:m))||j.p&&"Android"==d;return!b?m:"Opera"==a?11.1<=parseFloat(c):m}));T(new S("safari3to5-osx","b",function(a,c,b,e,d,f){if(!(c=m))c=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&c?(d=parseInt(c[1],10),f=parseInt(c[3],10),c=10<d||10==d&&4<=f):c="Macintosh"==d&&"Unknown"==f?k:m;if(c)a:{if("Safari"==a&&"AppleWebKit"==b&&(a=/([0-9]+.[0-9]+)/.exec(e))){a=parseFloat(a[1]);a=525.13<=a&&534.5>a;break a}a=m}else a=m;return a}));
T(new S("safari3to5-win2003-win7plus-winvista-winxp","a",function(a,c,b,e,d,f){c=(c=m||("Windows"==d&&"5.1"==f?k:m)||("Windows"==d&&"5.2"==f?k:m))||("Windows"==d&&"6.0"==f?k:m);c||(f=/^([0-9]+).([0-9]+)/.exec(f),"Windows"==d&&f?(d=parseInt(f[1],10),f=parseInt(f[2],10),c=6<d||6==d&&1<=f):c=m);if(c)a:{if("Safari"==a&&"AppleWebKit"==b&&(a=/([0-9]+.[0-9]+)/.exec(e))){a=parseFloat(a[1]);a=525.13<=a&&534.5>a;break a}a=m}else a=m;return a}));
T(new S("safari5plus-osx-win2003-win7plus-winvista-winxp","d",function(a,c,b,e,d,f){c=(c=m||("Windows"==d&&"5.1"==f?k:m)||("Windows"==d&&"5.2"==f?k:m))||("Windows"==d&&"6.0"==f?k:m);if(!c){var h=/^([0-9]+).([0-9]+)/.exec(f);"Windows"==d&&h?(c=parseInt(h[1],10),h=parseInt(h[2],10),c=6<c||6==c&&1<=h):c=m}c||(c=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&c?(d=parseInt(c[1],10),f=parseInt(c[3],10),c=10<d||10==d&&4<=f):c="Macintosh"==d&&"Unknown"==f?k:m);if(c)a:{if("Safari"==a&&"AppleWebKit"==b&&
(a=/([0-9]+.[0-9]+)/.exec(e))){a=534.5<=parseFloat(a[1]);break a}a=m}else a=m;return a}));
T(new S("safariany-ipad4-iphone4","a",function(a,c,b,e,d,f,h,j){if(!(c=m))a:{if(j.M&&"iPad"==d&&(c=/^([0-9]+)_([0-9]+)/.exec(f))){e=parseInt(c[2],10);c=4==parseInt(c[1],10)&&2<=e;break a}c=m}if(!c)a:{if(j.N&&("iPhone"==d||"iPod"==d))if(f=/^([0-9]+)_([0-9]+)/.exec(f)){j=parseInt(f[2],10);c=4==parseInt(f[1],10)&&2<=j;break a}c=m}return!c?m:"Safari"==a&&"AppleWebKit"==b||"Unknown"==a&&"AppleWebKit"==b&&("iPhone"==d||"iPad"==d)?k:m}));
T(new S("safariany-ipad5plus-iphone5plus","d",function(a,c,b,e,d,f,h,j){if(!(c=m))c=j.M&&"iPad"==d?(c=/^([0-9]+)_([0-9]+)/.exec(f))?5<=parseInt(c[1],10):m:m;c||(c=j.N&&("iPhone"==d||"iPod"==d)?(f=/^([0-9]+)_([0-9]+)/.exec(f))?5<=parseInt(f[1],10):m:m);return!c?m:"Safari"==a&&"AppleWebKit"==b||"Unknown"==a&&"AppleWebKit"==b&&("iPhone"==d||"iPad"==d)?k:m}));
T(new S("silk1to2-android2to3-osx","a",function(a,c,b,e,d,f,h,j){if(!(b=m))e=/([0-9]+).([0-9]+)/.exec(f),j.p&&"Android"==d&&e?(b=parseInt(e[1],10),e=parseInt(e[2],10),b=2==b&&2<=e||3==b&&1>e):b=m;b||(b=/^([0-9]+)(_|.)([0-9]+)/.exec(f),"Macintosh"==d&&b?(d=parseInt(b[1],10),f=parseInt(b[3],10),b=10<d||10==d&&4<=f):b="Macintosh"==d&&"Unknown"==f?k:m);return!b?m:j.p&&"Silk"==a?2>parseInt(c,10):m}));
T(new S("silk2plus-android3to4-linux","f",function(a,c,b,e,d,f,h,j){if(!(b=m))b=/([0-9]+).([0-9]+)/.exec(f),j.p&&"Android"==d&&b?(f=parseInt(b[1],10),b=parseInt(b[2],10),b=3==f&&1<=b||4==f&&1>b):b=m;d=b||("Ubuntu"==d||"Linux"==d?k:m);return!d?m:j.p&&"Silk"==a?2<=parseInt(c,10):m}));
T(new S("silk2plus-android4plus","a",function(a,c,b,e,d,f,h,j){if(!(b=m))f=/([0-9]+).([0-9]+)/.exec(f),j.p&&"Android"==d&&f?(d=parseInt(f[1],10),f=parseInt(f[2],10),b=4==d&&1<=f||4<d):b=m;return!b?m:j.p&&"Silk"==a?2<=parseInt(c,10):m}));var V=new function(){this.Y=[];this.C={}};Ka(new Ja("AllFonts",function(a,c){return c}));
Ka(new Ja("DefaultFourFontsWithSingleFvdFamilies",function(a,c,b){for(var e=0;e<c.length;e++){var d=c[e],f=a.replace(/(-1|-2)$/,"").slice(0,28)+"-"+d;b.push(new ya(f,[d]))}a={};for(d=0;d<c.length;d++)b=c[d],e=b.charAt(1),(a[e]||(a[e]=[])).push(b);b=[[4,3,2,1,5,6,7,8,9],[7,8,9,6,5,4,3,2,1]];e=[];for(d=0;d<b.length;d++)for(var f=b[d],h=0;h<f.length;h++){var j=f[h];if(a[j]){e=e.concat(a[j]);break}}b=e;e={};a=[];for(d=0;d<b.length;d++)f=b[d],e[f]||(e[f]=k,a.push(f));b=[];for(e=0;e<c.length;e++){d=c[e];
for(f=0;f<a.length;f++)h=a[f],h==d&&b.push(h)}return b}));V.C.a="AllFonts";V.C.b="AllFonts";V.C.d="AllFonts";V.C.f="AllFonts";V.C.i="DefaultFourFontsWithSingleFvdFamilies";var X=new function(){this.D={}};X.D.a=[];X.D.b=[];X.D.d=[];X.D.f=["observeddomain"];X.D.i=["observeddomain","fontmask"];var La=(new ja(navigator.userAgent,document)).parse();window.Typekit||(window.Typekit={});
if(!window.Typekit.load){var Ma=function(a,c){setTimeout(a,c)},Y=new Ga(new W("//fonts.accenture.com/{id}.js"),new Q(window),La,document.documentElement,Ma),Z=new Ia(window,Ma);window.Typekit.load=function(){Y.load.apply(Y,arguments)};window.Typekit.addKit=function(){Y.Q.apply(Y,arguments)}}var Na=l,Oa,$,Na=new W("//p.typekit.net/p.gif?a=666245&f=16481.16492.16495&h={host}&ht=sh&k=avb4gjz&s=1&_={_}");Oa=new function(){var a=Na;this.ga=l;this.pa=a};$=new U(new Q(window));$.sa="avb4gjz";$.V=new W("//fonts.accenture.com/k/avb4gjz-{format}.css?3bb2a6e53c9684ffdc9a9afe135b2a62d0c5cfebd5c62bc6cb59539a88c806f483a54f4ade03b9db56688ba15af5c3adf7e0b29eabf8c1e378adeb794fb1ba02d0e0fb76d2dfb4a64bd40af907ab3f1dfc4629818cd076da70");
$.$=Oa;$.m.push(new R("rotis-sans-serif",["n4","i4","n7"]));$.K.push(new function(){this.Na=[".tk-rotis-sans-serif"];this.ha=[{value:'"rotis-sans-serif",sans-serif',name:"font-family"}]});$.R=Aa;$.U=X;$.X=V;var Qa;if(Qa=Z)Qa=!!Z.ka.__webfonttypekitmodule__;Qa?(Z.Q($),Z.load()):(Ba($,La),window.Typekit.addKit($));
})(this,document);