
(function($){$.tools=$.tools||{version:'@VERSION'};$.tools.scrollable={conf:{activeClass:'active',circular:false,clonedClass:'cloned',disabledClass:'disabled',easing:'swing',initialIndex:0,item:'> *',items:'.items',keyboard:true,mousewheel:false,next:'.next',prev:'.prev',size:1,speed:400,vertical:false,touch:true,wheelSpeed:0,lastviewcolumncount:0}};function dim(el,key){var v=parseInt(el.css(key),10);if(v){return v;}
var s=el[0].currentStyle;return s&&s.width&&parseInt(s.width,10);}
function find(root,query){var el=$(query);return el.length<2?el:root.parent().find(query);}
var current;function Scrollable(root,conf){var self=this,fire=root.add(self),itemWrap=root.children(),index=0,vertical=conf.vertical;if(!current){current=self;}
if(itemWrap.length>1){itemWrap=$(conf.items,root);}
if(conf.size>1){conf.circular=false;}
$.extend(self,{getConf:function(){return conf;},getIndex:function(){return index;},getSize:function(){return self.getItems().size();},getNaviButtons:function(){return prev.add(next);},getRoot:function(){return root;},getItemWrap:function(){return itemWrap;},getItems:function(){return itemWrap.find(conf.item).not("."+conf.clonedClass);},move:function(offset,time){return self.seekTo(index+offset,time);},next:function(time){return self.move(conf.size,time);},prev:function(time){return self.move(-conf.size,time);},begin:function(time){return self.seekTo(0,time);},end:function(time){return self.seekTo(self.getSize()-1,time);},focus:function(){current=self;return self;},addItem:function(item){item=$(item);if(!conf.circular){itemWrap.append(item);next.removeClass("disabled");}else{itemWrap.children().last().before(item);itemWrap.children().first().replaceWith(item.clone().addClass(conf.clonedClass));}
fire.trigger("onAddItem",[item]);return self;},seekTo:function(i,time,fn){if(!i.jquery){i*=1;}
if(conf.circular&&i<=0&&index<=0&&time!==0){return self;}
if(!conf.circular&&i<0||i>self.getSize()||i<-1){return self;}
var item=i;if(i.jquery){i=self.getItems().index(i);}else{item=self.getItems().eq(i);}
var e=$.Event("onBeforeSeek");if(!fn){fire.trigger(e,[i,time]);if(e.isDefaultPrevented()||!item.length){return self;}}
if(i>(self.getSize()-conf.lastviewcolumncount)){return self;}
var props=vertical?{top:-item.position().top}:{left:-item.position().left};index=i;current=self;if(time===undefined){time=conf.speed;}
itemWrap.animate(props,time,conf.easing,fn||function(){fire.trigger("onSeek",[i]);});return self;}});$.each(['onBeforeSeek','onSeek','onAddItem'],function(i,name){if($.isFunction(conf[name])){$(self).bind(name,conf[name]);}
self[name]=function(fn){if(fn){$(self).bind(name,fn);}
return self;};});if(conf.circular){var cloned1=self.getItems().slice(-1).clone().prependTo(itemWrap),cloned2=self.getItems().eq(1).clone().appendTo(itemWrap);cloned1.add(cloned2).addClass(conf.clonedClass);self.onBeforeSeek(function(e,i,time){if(e.isDefaultPrevented()){return;}
if(i==self.getSize()){self.seekTo(0,time,function(){self.begin(0);});}});var hidden_parents=root.parents().add(root).filter(function(){if($(this).css('display')==='none'){return true;}});if(hidden_parents.length){hidden_parents.show();self.seekTo(0,0,function(){});hidden_parents.hide();}
else{self.seekTo(0,0,function(){});}}
var prev=find(root,conf.prev).click(function(e){self.prev();}),next=find(root,conf.next).click(function(e){self.next();});if(!conf.circular){self.onBeforeSeek(function(e,i){setTimeout(function(){if(!e.isDefaultPrevented()){prev.toggleClass(conf.disabledClass,i<=0);next.toggleClass(conf.disabledClass,i>=self.getSize()-1);}},1);});if(!conf.initialIndex){prev.addClass(conf.disabledClass);}}
if(self.getSize()<2){prev.add(next).addClass(conf.disabledClass);}
if(conf.mousewheel&&$.fn.mousewheel){root.mousewheel(function(e,delta){if(conf.mousewheel){self.move(delta<0?1:-1,conf.wheelSpeed||50);return false;}});}
if(conf.touch){var touch={};itemWrap[0].ontouchstart=function(e){var t=e.touches[0];touch.x=t.clientX;touch.y=t.clientY;};itemWrap[0].ontouchmove=function(e){if(e.touches.length==1&&!itemWrap.is(":animated")){var t=e.touches[0],deltaX=touch.x-t.clientX,deltaY=touch.y-t.clientY;self[vertical&&deltaY>0||!vertical&&deltaX>0?'next':'prev']();e.preventDefault();}};}
if(conf.keyboard){$(document).bind("keydown.scrollable",function(evt){if(!conf.keyboard||evt.altKey||evt.ctrlKey||evt.metaKey||$(evt.target).is(":input")){return;}
if(conf.keyboard!='static'&&current!=self){return;}
var key=evt.keyCode;if(vertical&&(key==38||key==40)){self.move(key==38?-1:1);return evt.preventDefault();}
if(!vertical&&(key==37||key==39)){self.move(key==37?-1:1);return evt.preventDefault();}});}
if(conf.initialIndex){self.seekTo(conf.initialIndex,0,function(){});}}
$.fn.scrollable=function(conf){var el=this.data("scrollable");if(el){return el;}
conf=$.extend({},$.tools.scrollable.conf,conf);this.each(function(){el=new Scrollable($(this),conf);$(this).data("scrollable",el);});return conf.api?el:this;};})(jQuery);(function($){var t=$.tools.scrollable;t.autoscroll={conf:{autoplay:true,interval:3000,autopause:true}};$.fn.autoscroll=function(conf){if(typeof conf=='number'){conf={interval:conf};}
var opts=$.extend({},t.autoscroll.conf,conf),ret;this.each(function(){var api=$(this).data("scrollable"),root=api.getRoot(),timer,stopped=false;function scroll(){if(timer)clearTimeout(timer);timer=setTimeout(function(){api.next();},opts.interval);}
if(api){ret=api;}
api.play=function(){if(timer){return;}
stopped=false;root.bind('onSeek',scroll);scroll();};api.pause=function(){timer=clearTimeout(timer);root.unbind('onSeek',scroll);};api.resume=function(){stopped||api.play();};api.stop=function(){stopped=true;api.pause();};if(opts.autopause){root.add(api.getNaviButtons()).hover(api.pause,api.resume);}
if(opts.autoplay){api.play();}});return opts.api?ret:this;};})(jQuery);(function($){var t=$.tools.scrollable;t.navigator={conf:{navi:'.navi',naviItem:null,activeClass:'active',indexed:false,idPrefix:null,history:false}};function find(root,query){var el=$(query);return el.length<2?el:root.parent().find(query);}
$.fn.navigator=function(conf){if(typeof conf=='string'){conf={navi:conf};}
conf=$.extend({},t.navigator.conf,conf);var ret;this.each(function(){var api=$(this).data("scrollable"),navi=conf.navi.jquery?conf.navi:find(api.getRoot(),conf.navi),buttons=api.getNaviButtons(),cls=conf.activeClass,hashed=conf.history&&!!history.pushState,size=api.getConf().size;if(api){ret=api;}
api.getNaviButtons=function(){return buttons.add(navi);};if(hashed){history.pushState({i:0},'');$(window).bind("popstate",function(evt){var s=evt.originalEvent.state;if(s){api.seekTo(s.i);}});}
function doClick(el,i,e){api.seekTo(i);e.preventDefault();if(hashed){history.pushState({i:i},'');}}
function els(){return navi.find(conf.naviItem||'> *');}
function addItem(i){var item=$("<"+(conf.naviItem||'a')+"/>").click(function(e){doClick($(this),i,e);});if(i===0){item.addClass(cls);}
if(conf.indexed){item.text(i+1);}
if(conf.idPrefix){item.attr("id",conf.idPrefix+i);}
return item.appendTo(navi);}
if(els().length){els().each(function(i){$(this).click(function(e){doClick($(this),i,e);});});}else{$.each(api.getItems(),function(i){if(i%size==0)addItem(i);});}
api.onBeforeSeek(function(e,index){setTimeout(function(){if(!e.isDefaultPrevented()){var i=index/size,el=els().eq(i);if(el.length){els().removeClass(cls).eq(i).addClass(cls);}}},1);});api.onAddItem(function(e,item){var i=api.getItems().index(item);if(i%size==0)addItem(i);});});return conf.api?ret:this;};})(jQuery);(function($){$.tools=$.tools||{version:'@VERSION'};$.tools.tabs={conf:{tabs:'a',current:'current',onBeforeClick:null,onClick:null,effect:'default',initialEffect:false,initialIndex:0,event:'click',rotate:false,isTwitterFeed:false,twitterFeedSize:260,slideUpSpeed:400,slideDownSpeed:400,history:false},addEffect:function(name,fn){effects[name]=fn;}};var effects={'default':function(i,done){this.getPanes().hide().eq(i).show();done.call();},fade:function(i,done){var conf=this.getConf(),speed=conf.fadeOutSpeed,panes=this.getPanes();if(speed){panes.fadeOut(speed);}else{panes.hide();}
panes.eq(i).fadeIn(conf.fadeInSpeed,done);},slide:function(i,done){var conf=this.getConf();this.getPanes().slideUp(conf.slideUpSpeed);this.getPanes().eq(i).slideDown(conf.slideDownSpeed,done);},ajax:function(i,done){this.getPanes().eq(0).load(this.getTabs().eq(i).attr("href"),done);}};var
animating,w;$.tools.tabs.addEffect("horizontal",function(i,done){if(animating)return;var nextPane=this.getPanes().eq(i),currentPane=this.getCurrentPane();w||(w=this.getPanes().eq(0).width());animating=true;nextPane.show();currentPane.animate({width:0},{step:function(now){nextPane.css("width",w-now);},complete:function(){$(this).hide();done.call();animating=false;}});if(!currentPane.length){done.call();animating=false;}});function Tabs(root,paneSelector,conf){var self=this,trigger=root.add(this),tabs=root.find(conf.tabs),panes=paneSelector.jquery?paneSelector:root.children(paneSelector),current;if(!tabs.length){tabs=root.children();}
if(!panes.length){panes=root.parent().find(paneSelector);}
if(!panes.length){panes=$(paneSelector);}
$.extend(this,{click:function(i,e){var tab=tabs.eq(i),firstRender=!root.data('tabs');if(typeof i=='string'&&i.replace("#","")){tab=tabs.filter("[href*=\""+i.replace("#","")+"\"]");i=Math.max(tabs.index(tab),0);}
if(conf.rotate){var last=tabs.length-1;if(i<0){return self.click(last,e);}
if(i>last){return self.click(0,e);}}
if(!tab.length){if(current>=0){return self;}
i=conf.initialIndex;tab=tabs.eq(i);}
if(i===current){return self;}
e=e||$.Event();e.type="onBeforeClick";trigger.trigger(e,[i]);if(e.isDefaultPrevented()){return;}
if(conf.isTwitterFeed&&!firstRender){var nextFeed=$('#TwitterFeed>div:eq('+i+')>a');var trunc=truncate(nextFeed,conf.size);nextFeed.text(trunc);}
var effect=firstRender?conf.initialEffect&&conf.effect||'default':conf.effect;effects[effect].call(self,i,function(){current=i;e.type="onClick";trigger.trigger(e,[i]);});tabs.removeClass(conf.current);tab.addClass(conf.current);return self;},getConf:function(){return conf;},getTabs:function(){return tabs;},getPanes:function(){return panes;},getCurrentPane:function(){return panes.eq(current);},getCurrentTab:function(){return tabs.eq(current);},getIndex:function(){return current;},next:function(){return self.click(current+1);},prev:function(){return self.click(current-1);},destroy:function(){tabs.unbind(conf.event).removeClass(conf.current);panes.find("a[href^=\"#\"]").unbind("click.T");return self;}});$.each("onBeforeClick,onClick".split(","),function(i,name){if($.isFunction(conf[name])){$(self).bind(name,conf[name]);}
self[name]=function(fn){if(fn){$(self).bind(name,fn);}
return self;};});if(conf.history&&$.fn.history){$.tools.history.init(tabs);conf.event='history';}
tabs.each(function(i){$(this).bind(conf.event,function(e){self.click(i,e);return e.preventDefault();});});panes.find("a[href^=\"#\"]").bind("click.T",function(e){self.click($(this).attr("href"),e);});if(location.hash&&conf.tabs=="a"&&root.find("[href=\""+location.hash+"\"]").length){self.click(location.hash);}else{if(conf.initialIndex===0||conf.initialIndex>0){self.click(conf.initialIndex);}}}
$.fn.tabs=function(paneSelector,conf){var el=this.data("tabs");if(el){el.destroy();this.removeData("tabs");}
if($.isFunction(conf)){conf={onBeforeClick:conf};}
conf=$.extend({},$.tools.tabs.conf,conf);this.each(function(){el=new Tabs($(this),paneSelector,conf);$(this).data("tabs",el);});return conf.api?el:this;};})(jQuery);(function($){var tool;tool=$.tools.tabs.slideshow={conf:{next:'.forward',prev:'.backward',disabledClass:'disabled',autoplay:false,autopause:true,interval:3000,clickable:true,api:false}};function Slideshow(root,conf){var self=this,fire=root.add(this),tabs=root.data("tabs"),timer,stopped=true;function find(query){var el=$(query);return el.length<2?el:root.parent().find(query);}
var nextButton=find(conf.next).click(function(){tabs.next();});var prevButton=find(conf.prev).click(function(){tabs.prev();});function next(){timer=setTimeout(function(){tabs.next();},conf.interval);}
$.extend(self,{getTabs:function(){return tabs;},getConf:function(){return conf;},play:function(){if(timer){return self;}
var e=$.Event("onBeforePlay");fire.trigger(e);if(e.isDefaultPrevented()){return self;}
stopped=false;fire.trigger("onPlay");fire.bind('onClick',next);next();return self;},pause:function(){if(!timer){return self;}
var e=$.Event("onBeforePause");fire.trigger(e);if(e.isDefaultPrevented()){return self;}
timer=clearTimeout(timer);fire.trigger("onPause");fire.unbind('onClick',next);return self;},resume:function(){stopped||self.play();},stop:function(){self.pause();stopped=true;}});$.each("onBeforePlay,onPlay,onBeforePause,onPause".split(","),function(i,name){if($.isFunction(conf[name])){$(self).bind(name,conf[name]);}
self[name]=function(fn){return $(self).bind(name,fn);};});if(conf.autopause){tabs.getTabs().add(nextButton).add(prevButton).add(tabs.getPanes()).hover(self.pause,self.resume);}
if(conf.autoplay){self.play();}
if(conf.clickable){tabs.getPanes().click(function(){tabs.next();});}
if(!tabs.getConf().rotate){var disabled=conf.disabledClass;if(!tabs.getIndex()){prevButton.addClass(disabled);}
tabs.onBeforeClick(function(e,i){prevButton.toggleClass(disabled,!i);nextButton.toggleClass(disabled,i==tabs.getTabs().length-1);});}}
$.fn.slideshow=function(conf){var el=this.data("slideshow");if(el){return el;}
conf=$.extend({},tool.conf,conf);this.each(function(){el=new Slideshow($(this),conf);$(this).data("slideshow",el);});return conf.api?el:this;};})(jQuery);var truncate=function($element,limit){var str,width,bits,i;str=$element.text();width=parseInt($element.width());if("string"!==typeof str){return'';}
bits=str.split('');if(width>limit){for(i=bits.length-1;i>-1;--i){width=parseInt($element.width());if(width>limit){bits.length=i;$element.text(bits.join('')+"...");}
else{bits.length=i;break;}}
bits.push('...');}
return bits.join('');};