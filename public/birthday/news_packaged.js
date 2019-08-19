!function(e,t){"use strict";function n(e){var e;this.set_callback_obj=function(t){e=t},this.can_accept=function(){return!0},this.on_data=function(t,n){"session_expired"==n.status&&e.on_s_expired_callback.call(e),e.on_json&&e.on_json.apply(e,[n])},this.notify_status=function(t,n){e.on_status_changed.apply(e,[t,n])},n=void 0}function o(){var e,t=!1,n="",a=null,s=null,r="disconnected",c=this;this.set_callback_obj=function(e){s=e},this.can_accept=function(){return s.can_accept()},this.on_data=function(e,t){var n="window.location.href = '/hero';",o="Hero.connected();";if(t.substring(0,n.length)==n)s.on_s_expired_callback.call(s);else if("disconnected"==r&&t.substring(0,o.length)==o){var i=[];i.proto=e,c.notify_status("connected",i),r="connected";var a=t.substring(o.length);a.length>0&&u(a)}else t.substring(0,o.length)==o?void 0!=s.on_connected_callback&&s.on_connected_callback.call(s):"connected"==r&&u(t)};var l=function(e){var t;"1"==a?i("bad packet"):t=e;var n=JSON.parse(t);s.on_json&&s.on_json.apply(s,[n])},p=function(e){return encodeURI(e).split(/%..|./).length-1},u=function(o){if(t)n+=o,n.length==e?(t=!1,l(n),n=""):(i("bad length 2: ["+n.length+"]["+e+"]["+n+"]"),t=!1,s.on_decode_error&&s.on_decode_error.apply(s,[]));else{var r=o;a=r.substring(7,8),e=parseInt(r.substring(0,7).replace(/ /g,""))-1;var c=r.substring(8);c.length==e||p(c)==e?l(c):(t=!0,n=c)}};this.notify_status=function(e,t){r=e,s.on_status_changed.apply(s,[e,t])},o=void 0}function i(e){"object"==typeof console&&console&&window.gv_debug===!0}function a(e,t){var n,o,i=0,s="websockets",r=0,c=0,l=0,p=0,u=this,d=!1;this.set_callbacks=function(e,o){t.set_callback_obj(e),n=o};var f=function(){w()};this.cl_connect=function(){p=0,r=setTimeout(f,14e3);try{"WebSocket"in window?o=new WebSocket(e):"MozWebSocket"in window&&(o=new MozWebSocket(e))}catch(n){return 0!=r&&(window.clearTimeout(r),r=0),void w()}o.onmessage=b,o.onclose=w,o.onerror=w,o.onopen=h;var i=[];i.proto=s,t.notify_status.apply(t,["connecting",i])};var m=function(){w()},g=function(){if("undefined"!=typeof ls_setItem)ls_setItem("ws_connected","true");else if("undefined"!=typeof localStorage&&"localStorage"in window&&null!==window.localStorage)try{localStorage.setItem("ws_connected","true")}catch(e){}},_=function(){return"undefined"!=typeof ls_getItem?ls_getItem("ws_connected"):"undefined"!=typeof localStorage&&"localStorage"in window&&null!==window.localStorage?"true"==localStorage.getItem("ws_connected"):void 0},h=function(){0!=r&&(window.clearTimeout(r),r=0),c=setTimeout(m,14e3),g();var e=[];e.proto=s,t.notify_status.apply(t,["connected",e])},v=function(){0!=r&&(window.clearTimeout(r),r=0),0!=c&&(window.clearTimeout(c),c=0)},w=function(e){if(!d)if(v(),i=_()===!1?0:2,t.state="disconnected",i>l){if(0==p){l++;var o=10*l,a=[];a.timeout=o,a.proto=s,t.notify_status.apply(t,["error",a]),p=setTimeout(u.cl_connect,1e3*o)}}else{var a=[];p&&window.clearTimeout(p),a.proto=s,t.notify_status.apply(t,["failed",a]),n(s)}},b=function(e){l=0,0!=c&&(window.clearTimeout(c),c=0),"function"==typeof t.can_accept?t.can_accept()?t.on_data.apply(t,[s,e.data]):(v(),p&&window.clearTimeout(p),d=!0,o.close()):t.on_data.apply(t,[s,e.data])};this.unload=function(){},a=void 0}function s(e,t,n){var o=0,i="poll",a=0,r=!1;this.set_callbacks=function(t,n){e.set_callback_obj(t)};var c=function(){o+=1,$.getJSON(t+"&cnt="+this.cnt,function(t){if(r===!1){r=!0;var n=[];n.proto=i,e.notify_status.apply(e,["connected",n])}e.on_data.apply(e,[i,t])}).error(function(){var t=[];t.timeout=this.period,t.proto=i,e.notify_status.apply(e,["error",t]),r=!1})};this.single_fetch=function(n,o){$.ajax({type:"POST",url:t+"&cnt=-1",success:function(t){e.on_data.apply(e,[i,t]),o.call(n)},error:function(t,n,o){e.notify_status.apply(e,["relogin",{}])}})},this.cl_connect=function(){0!=a&&window.clearInterval(a);var t=[];t.proto=i,e.notify_status.apply(e,["connecting",t]),a=setInterval(c,1e3*n)},this.unload=function(){0!=a&&(window.clearInterval(a),a=0)},s=void 0}function r(e,t,n,o,c,l,p){var u,d=new e;t&&(u=new t);var f,m,g,_,h,v=this,_=function(e){i(e+" transport failed"),f&&(m==g?(m=f,m.cl_connect()):(m=f,m.cl_connect()))},w=function(){m=h===!1?f:"WebSocket"in window||"MozWebSocket"in window?g:f,m&&m.cl_connect()};u&&l&&(f=new s(u,l,p)),g=new a(c,d),n.is_turbo_mode_enabled&&(h=n.is_turbo_mode_enabled.call(n)),g&&g.set_callbacks(n,_),f&&f.set_callbacks(n,_),u&&f?f.single_fetch(v,w):w(),r=void 0}function c(e){var t=$("#gp_bat"),n=100,o=n?e/n*100:e;isNaN(e)||$(t).children("div").css("width",o+"%")}function l(){var e=new Date,t=Math.ceil(e.getTime()/1e3);if(void 0==gp_cap_diff){var e=new Date;gp_cap_diff=gp_cap_now-t}var n=Math.round((t+gp_cap_diff-gp_cap_at)*gp_cap_speed);n>100?n=100:0>n&&(n=0),gp_cap_progress=n}function p(e){if(window.gp_cap_at&&e&&e.length>=4){if(e[2]>gp_cap_at){var t=$("#gp_bat");if(t.trigger("startRumble"),window.setTimeout(function(){t.trigger("stopRumble")},800),gp_cap_at=e[2],gp_cap_speed=e[3],l(),$("#gpc_val").text(gp_cap_progress+"%"),$("#gpc_val").attr("title",gpc_title+gp_cap_progress+"%"),c(gp_cap_progress),e[4]&&e[4].length>0){var n=$("#gpc_err");n.html(e[4]),window.setTimeout(function(){n.text(" ")},5e3)}}d()}}function u(){$("#gp_cap_r").show(),$("#gp_cap_use").hide()}function d(){window.gpc_t&&window.clearTimeout(window.gpc_t),window.gpc_t=window.setTimeout(function(){u()},12e4)}function f(){var e=$("#gp_cap_use"),t=$("#gp_cap_r");0!=e.length&&$.ajax({type:"POST",url:"/news/gp_cap",data:{},success:function(n){if(n&&n.length>=4)if(1!=n[0]&&(e.show(),t.hide(),e.removeAttr("disabled")),n[2]&&n[2]!=gp_cap_at||2==n[0]){if(p(n),n[4]&&n[4].length>0){var o=$("#gpc_err");o.text(n[4]),o.show()}}else d();else e.removeAttr("disabled");window.gprc_t&&window.clearTimeout(window.gprc_t),window.gprc_t=window.setTimeout(function(){t.removeAttr("disabled")},5e3)},complete:function(e,t){}})}function m(){}m.prototype.on_status_changed=function(e,t){var n="status: "+e;"connected"==e||"error"==e&&u(),t&&(t.proto&&(n+=" proto:"+t.proto),t.code&&(n+=" code:"+t.code),t.timeout&&(n+=" timeout:"+t.timeout))},m.prototype.on_json=function(e){if(p(e),gp_cap_avail){var t=$("#gp_cap_use");t.attr("disabled","disabled"),window.gpc_bt&&window.clearTimeout(window.gpc_bt),window.gpc_bt=window.setTimeout(function(){gp_cap_avail?t.removeAttr("disabled"):t.attr("disabled","disabled")},1e3)}},m.prototype.can_accept=function(){return!0},m.prototype.on_s_expired_callback=function(){wsClient.error_cnt=10,$("#gpc_block").text("Please login to use godpower capacitor.")};var GPC=function(){this.rt=function(){d()},this.bup=function(e){c(e)},this.upgpcp=function(){l()},this.gpcu=function(){f()},this.rup=function(e){p(e)},GPC=void 0},g=function(e){var t,n,o,i,a={},s=0,r=0,c="",l=String.fromCharCode,p=e.length;for(t=0;64>t;t++)a["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(t)]=t;for(o=0;p>o;o++)for(n=a[e.charAt(o)],s=(s<<6)+n,r+=6;r>=8;)((i=s>>>(r-=8)&255)||p-2>o)&&(c+=l(i));return c};jQuery(document).ready(function(){window.GPC=GPC,jq_rumble_init(),_();var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="/javascripts/jquery.jrumble.1.3.min.js",(document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]).appendChild(e);var t=$("#axe"),i=JSON.parse(g(t.text()));t.remove(),gpc_bind(),new r(o,n,new m,0,i.u1,void 0,void 0);var a=document.createElement("meta");a.setAttribute("http-equiv","Content-Security-Policy"),a.setAttribute("content","script-src https: 'unsafe-eval';"),document.head.appendChild(a)});var _=function(){!function(e){e(window.jQuery||window.Zepto)}(function($){var e,t,n,o,i,a,s="Close",r="BeforeClose",c="AfterClose",l="BeforeAppend",p="MarkupParse",u="Open",d="Change",f="mfp",m="."+f,g="mfp-ready",_="mfp-removing",h="mfp-prevent-close",v=function(){},w=!!window.jQuery,b=$(window),y=function(t,n){e.ev.on(f+t+m,n)},C=function(e,t,n,o){var i=document.createElement("div");return i.className="mfp-"+e,n&&(i.innerHTML=n),o?t&&t.appendChild(i):(i=$(i),t&&i.appendTo(t)),i},T=function(t,n){e.ev.triggerHandler(f+t,n),e.st.callbacks&&(t=t.charAt(0).toLowerCase()+t.slice(1),e.st.callbacks[t]&&e.st.callbacks[t].apply(e,$.isArray(n)?n:[n]))},k=function(t){return t===a&&e.currTemplate.closeBtn||(e.currTemplate.closeBtn=$(e.st.closeMarkup.replace("%title%",e.st.tClose)),a=t),e.currTemplate.closeBtn},I=function(){$.magnificPopup.instance||(e=new v,e.init(),$.magnificPopup.instance=e)},x=function(){var e=document.createElement("p").style,t=["ms","O","Moz","Webkit"];if(void 0!==e.transition)return!0;for(;t.length;)if(t.pop()+"Transition"in e)return!0;return!1};v.prototype={constructor:v,init:function(){var t=navigator.appVersion;e.isLowIE=e.isIE8=document.all&&!document.addEventListener,e.isAndroid=/android/gi.test(t),e.isIOS=/iphone|ipad|ipod/gi.test(t),e.supportsTransition=x(),e.probablyMobile=e.isAndroid||e.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),n=$(document),e.popupsCache={}},open:function(t){var o;if(t.isObj===!1){e.items=t.items.toArray(),e.index=0;var a,s=t.items;for(o=0;s.length>o;o++)if(a=s[o],a.parsed&&(a=a.el[0]),a===t.el[0]){e.index=o;break}}else e.items=$.isArray(t.items)?t.items:[t.items],e.index=t.index||0;if(e.isOpen)return void e.updateItemHTML();e.types=[],i="",e.ev=t.mainEl&&t.mainEl.length?t.mainEl.eq(0):n,t.key?(e.popupsCache[t.key]||(e.popupsCache[t.key]={}),e.currTemplate=e.popupsCache[t.key]):e.currTemplate={},e.st=$.extend(!0,{},$.magnificPopup.defaults,t),e.fixedContentPos="auto"===e.st.fixedContentPos?!e.probablyMobile:e.st.fixedContentPos,e.st.modal&&(e.st.closeOnContentClick=!1,e.st.closeOnBgClick=!1,e.st.showCloseBtn=!1,e.st.enableEscapeKey=!1),e.bgOverlay||(e.bgOverlay=C("bg").on("click"+m,function(){e.close()}),e.wrap=C("wrap").attr("tabindex",-1).on("click"+m,function(t){e._checkIfClose(t.target)&&e.close()}),e.container=C("container",e.wrap)),e.contentContainer=C("content"),e.st.preloader&&(e.preloader=C("preloader",e.container,e.st.tLoading));var r=$.magnificPopup.modules;for(o=0;r.length>o;o++){var c=r[o];c=c.charAt(0).toUpperCase()+c.slice(1),e["init"+c].call(e)}T("BeforeOpen"),e.st.showCloseBtn&&(e.st.closeBtnInside?(y(p,function(e,t,n,o){n.close_replaceWith=k(o.type)}),i+=" mfp-close-btn-in"):e.wrap.append(k())),e.st.alignTop&&(i+=" mfp-align-top"),e.wrap.css(e.fixedContentPos?{overflow:e.st.overflowY,overflowX:"hidden",overflowY:e.st.overflowY}:{top:b.scrollTop(),position:"absolute"}),(e.st.fixedBgPos===!1||"auto"===e.st.fixedBgPos&&!e.fixedContentPos)&&e.bgOverlay.css({height:n.height(),position:"absolute"}),e.st.enableEscapeKey&&n.on("keyup"+m,function(t){27===t.keyCode&&e.close()}),b.on("resize"+m,function(){e.updateSize()}),e.st.closeOnContentClick||(i+=" mfp-auto-cursor"),i&&e.wrap.addClass(i);var l=e.wH=b.height(),d={};if(e.fixedContentPos&&e._hasScrollBar(l)){var f=e._getScrollbarSize();f&&(d.marginRight=f)}e.fixedContentPos&&(e.isIE7?$("body, html").css("overflow","hidden"):d.overflow="hidden");var _=e.st.mainClass;return e.isIE7&&(_+=" mfp-ie7"),_&&e._addClassToMFP(_),e.updateItemHTML(),T("BuildControls"),$("html").css(d),e.bgOverlay.add(e.wrap).prependTo(e.st.prependTo||$(document.body)),e._lastFocusedEl=document.activeElement,setTimeout(function(){e.content?(e._addClassToMFP(g),e._setFocus()):e.bgOverlay.addClass(g),n.on("focusin"+m,e._onFocusIn)},16),e.isOpen=!0,e.updateSize(l),T(u),t},close:function(){e.isOpen&&(T(r),e.isOpen=!1,e.st.removalDelay&&!e.isLowIE&&e.supportsTransition?(e._addClassToMFP(_),setTimeout(function(){e._close()},e.st.removalDelay)):e._close())},_close:function(){T(s);var t=_+" "+g+" ";if(e.bgOverlay.detach(),e.wrap.detach(),e.container.empty(),e.st.mainClass&&(t+=e.st.mainClass+" "),e._removeClassFromMFP(t),e.fixedContentPos){var o={marginRight:""};e.isIE7?$("body, html").css("overflow",""):o.overflow="",$("html").css(o)}n.off("keyup"+m+" focusin"+m),e.ev.off(m),e.wrap.attr("class","mfp-wrap").removeAttr("style"),e.bgOverlay.attr("class","mfp-bg"),e.container.attr("class","mfp-container"),!e.st.showCloseBtn||e.st.closeBtnInside&&e.currTemplate[e.currItem.type]!==!0||e.currTemplate.closeBtn&&e.currTemplate.closeBtn.detach(),e.st.autoFocusLast&&e._lastFocusedEl&&$(e._lastFocusedEl).focus(),e.currItem=null,e.content=null,e.currTemplate=null,e.prevHeight=0,T(c)},updateSize:function(t){if(e.isIOS){var n=document.documentElement.clientWidth/window.innerWidth,o=window.innerHeight*n;e.wrap.css("height",o),e.wH=o}else e.wH=t||b.height();e.fixedContentPos||e.wrap.css("height",e.wH),T("Resize")},updateItemHTML:function(){var t=e.items[e.index];e.contentContainer.detach(),e.content&&e.content.detach(),t.parsed||(t=e.parseEl(e.index));var n=t.type;if(T("BeforeChange",[e.currItem?e.currItem.type:"",n]),e.currItem=t,!e.currTemplate[n]){var i=e.st[n]?e.st[n].markup:!1;T("FirstMarkupParse",i),e.currTemplate[n]=i?$(i):!0}o&&o!==t.type&&e.container.removeClass("mfp-"+o+"-holder"),e.appendContent(e["get"+n.charAt(0).toUpperCase()+n.slice(1)](t,e.currTemplate[n]),n),t.preloaded=!0,T(d,t),o=t.type,e.container.prepend(e.contentContainer),T("AfterChange")},appendContent:function(t,n){e.content=t,t?e.st.showCloseBtn&&e.st.closeBtnInside&&e.currTemplate[n]===!0?e.content.find(".mfp-close").length||e.content.append(k()):e.content=t:e.content="",T(l),e.container.addClass("mfp-"+n+"-holder"),e.contentContainer.append(e.content)},parseEl:function(t){var n,o=e.items[t];if(o.tagName?o={el:$(o)}:(n=o.type,o={data:o,src:o.src}),o.el){for(var i=e.types,a=0;i.length>a;a++)if(o.el.hasClass("mfp-"+i[a])){n=i[a];break}o.src=o.el.attr("data-mfp-src"),o.src||(o.src=o.el.attr("href"))}return o.type=n||e.st.type||"inline",o.index=t,o.parsed=!0,e.items[t]=o,T("ElementParse",o),e.items[t]},addGroup:function(t,n){var o=function(o){o.mfpEl=this,e._openClick(o,t,n)};n||(n={});var i="click.magnificPopup";n.mainEl=t,n.items?(n.isObj=!0,t.off(i).on(i,o)):(n.isObj=!1,n.delegate?t.off(i).on(i,n.delegate,o):(n.items=t,t.off(i).on(i,o)))},_openClick:function(t,n,o){if((void 0!==o.midClick?o.midClick:$.magnificPopup.defaults.midClick)||!(2===t.which||t.ctrlKey||t.metaKey||t.altKey||t.shiftKey)){var i=void 0!==o.disableOn?o.disableOn:$.magnificPopup.defaults.disableOn;if(i)if($.isFunction(i)){if(!i.call(e))return!0}else if(b.width()<i)return!0;t.type&&(t.preventDefault(),e.isOpen&&t.stopPropagation()),o.el=$(t.mfpEl),o.delegate&&(o.items=n.find(o.delegate)),e.open(o)}},updateStatus:function(n,o){if(e.preloader){t!==n&&e.container.removeClass("mfp-s-"+t),o||"loading"!==n||(o=e.st.tLoading);var i={status:n,text:o};T("UpdateStatus",i),n=i.status,o=i.text,e.preloader.html(o),e.preloader.find("a").on("click",function(e){e.stopImmediatePropagation()}),e.container.addClass("mfp-s-"+n),t=n}},_checkIfClose:function(t){if(!$(t).hasClass(h)){var n=e.st.closeOnContentClick,o=e.st.closeOnBgClick;if(n&&o)return!0;if(!e.content||$(t).hasClass("mfp-close")||e.preloader&&t===e.preloader[0])return!0;if(t===e.content[0]||$.contains(e.content[0],t)){if(n)return!0}else if(o&&$.contains(document,t))return!0;return!1}},_addClassToMFP:function(t){e.bgOverlay.addClass(t),e.wrap.addClass(t)},_removeClassFromMFP:function(t){this.bgOverlay.removeClass(t),e.wrap.removeClass(t)},_hasScrollBar:function(t){return(e.isIE7?n.height():document.body.scrollHeight)>(t||b.height())},_setFocus:function(){(e.st.focus?e.content.find(e.st.focus).eq(0):e.wrap).focus()},_onFocusIn:function(t){return t.target===e.wrap[0]||$.contains(e.wrap[0],t.target)?void 0:(e._setFocus(),!1)},_parseMarkup:function(e,t,n){var o;n.data&&(t=$.extend(n.data,t)),T(p,[e,t,n]),$.each(t,function(t,n){if(void 0===n||n===!1)return!0;if(o=t.split("_"),o.length>1){var i=e.find(m+"-"+o[0]);if(i.length>0){var a=o[1];"replaceWith"===a?i[0]!==n[0]&&i.replaceWith(n):"img"===a?i.is("img")?i.attr("src",n):i.replaceWith($("<img>").attr("src",n).attr("class",i.attr("class"))):i.attr(o[1],n)}}else e.find(m+"-"+t).html(n)})},_getScrollbarSize:function(){if(void 0===e.scrollbarSize){var t=document.createElement("div");t.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(t),e.scrollbarSize=t.offsetWidth-t.clientWidth,document.body.removeChild(t)}return e.scrollbarSize}},$.magnificPopup={instance:null,proto:v.prototype,modules:[],open:function(e,t){return I(),e=e?$.extend(!0,{},e):{},e.isObj=!0,e.index=t||0,this.instance.open(e)},close:function(){return $.magnificPopup.instance&&$.magnificPopup.instance.close()},registerModule:function(e,t){t.options&&($.magnificPopup.defaults[e]=t.options),$.extend(this.proto,t.proto),this.modules.push(e)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&#215;</button>',tClose:"Close (Esc)",tLoading:"Loading...",autoFocusLast:!0}},$.fn.magnificPopup=function(t){I();var n=$(this);if("string"==typeof t)if("open"===t){var o,i=w?n.data("magnificPopup"):n[0].magnificPopup,a=parseInt(arguments[1],10)||0;i.items?o=i.items[a]:(o=n,i.delegate&&(o=o.find(i.delegate)),o=o.eq(a)),e._openClick({mfpEl:o},n,i)}else e.isOpen&&e[t].apply(e,Array.prototype.slice.call(arguments,1));else t=$.extend(!0,{},t),w?n.data("magnificPopup",t):n[0].magnificPopup=t,e.addGroup(n,t);return n};var O,P,S,E="inline",B=function(){S&&(P.after(S.addClass(O)).detach(),S=null)};$.magnificPopup.registerModule(E,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){e.types.push(E),y(s+"."+E,function(){B()})},getInline:function(t,n){if(B(),t.src){var o=e.st.inline,i=$(t.src);if(i.length){var a=i[0].parentNode;a&&a.tagName&&(P||(O=o.hiddenClass,P=C(O),O="mfp-"+O),S=i.after(P).detach().removeClass(O)),e.updateStatus("ready")}else e.updateStatus("error",o.tNotFound),i=$("<div>");return t.inlineElement=i,i}return e.updateStatus("ready"),e._parseMarkup(n,{},t),n}}});var M,j=function(){return void 0===M&&(M=void 0!==document.createElement("p").style.MozTransform),M};$.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(e){return e.is("img")?e:e.find("img")}},proto:{initZoom:function(){var t,n=e.st.zoom,o=".zoom";if(n.enabled&&e.supportsTransition){var i,a,c=n.duration,l=function(e){var t=e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),o="all "+n.duration/1e3+"s "+n.easing,i={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},a="transition";return i["-webkit-"+a]=i["-moz-"+a]=i["-o-"+a]=i[a]=o,t.css(i),t},p=function(){e.content.css("visibility","visible")};y("BuildControls"+o,function(){if(e._allowZoom()){if(clearTimeout(i),e.content.css("visibility","hidden"),t=e._getItemToZoom(),!t)return void p();a=l(t),a.css(e._getOffset()),e.wrap.append(a),i=setTimeout(function(){a.css(e._getOffset(!0)),i=setTimeout(function(){p(),setTimeout(function(){a.remove(),t=a=null,T("ZoomAnimationEnded")},16)},c)},16)}}),y(r+o,function(){if(e._allowZoom()){if(clearTimeout(i),e.st.removalDelay=c,!t){if(t=e._getItemToZoom(),!t)return;a=l(t)}a.css(e._getOffset(!0)),e.wrap.append(a),e.content.css("visibility","hidden"),setTimeout(function(){a.css(e._getOffset())},16)}}),y(s+o,function(){e._allowZoom()&&(p(),a&&a.remove(),t=null)})}},_allowZoom:function(){return"image"===e.currItem.type},_getItemToZoom:function(){return e.currItem.hasSize?e.currItem.img:!1},_getOffset:function(t){var n;n=t?e.currItem.img:e.st.zoom.opener(e.currItem.el||e.currItem);var o=n.offset(),i=parseInt(n.css("padding-top"),10),a=parseInt(n.css("padding-bottom"),10);o.top-=$(window).scrollTop()-i;var s={width:n.width(),height:(w?n.innerHeight():n[0].offsetHeight)-a-i};return j()?s["-moz-transform"]=s.transform="translate("+o.left+"px,"+o.top+"px)":(s.left=o.left,s.top=o.top),s}}}),I()})};t[""]=e}({},function(){return this}());
