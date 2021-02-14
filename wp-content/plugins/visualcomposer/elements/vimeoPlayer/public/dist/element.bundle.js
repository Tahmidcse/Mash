(window.vcvWebpackJsonp4x=window.vcvWebpackJsonp4x||[]).push([[0],{"./node_modules/raw-loader/index.js!./vimeoPlayer/editor.css":function(e,t){e.exports='[data-vcv-element-disabled="true"] .vce-vim-video-player-inner::after {\n  content: "";\n  position: absolute;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  z-index: 999;\n}\n\n.vce-vim-video-player {\n  min-height: 1em;\n}\n'},"./node_modules/raw-loader/index.js!./vimeoPlayer/styles.css":function(e,t){e.exports='/* ----------------------------------------------\n * Vimeo Video Player\n * ---------------------------------------------- */\n.vce-vim-video-player-wrapper {\n  display: inline-block;\n  max-width: 100%;\n  vertical-align: top;\n  overflow: hidden;\n}\n.vce-vim-video-player-inner {\n  position: relative;\n}\n.vce-vim-video-player-inner::before {\n  content: \'\';\n  width: 100%;\n  display: block;\n  padding-top: 56%;\n}\n[data-vcv-element-disabled="true"] .vce-vim-video-player-inner::after {\n  content: "";\n  position: absolute;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  z-index: 999;\n}\n.vce-vim-video-player-iframe {\n  position: absolute;\n  top: 0;\n  left: 0;\n  width: 100%;\n  height: 100%;\n  margin: 0;\n}\n.vce-vim-video-player--align-center {\n  text-align: center;\n}\n.vce-vim-video-player--align-right {\n  text-align: right;\n}\n.vce-vim-video-player--align-left {\n  text-align: left;\n}\n'},"./vimeoPlayer/index.js":function(e,t,a){"use strict";a.r(t);var o=a("./node_modules/vc-cake/index.js"),n=a.n(o),i=a("./node_modules/@babel/runtime/helpers/extends.js"),l=a.n(i),s=a("./node_modules/@babel/runtime/helpers/classCallCheck.js"),c=a.n(s),r=a("./node_modules/@babel/runtime/helpers/createClass.js"),d=a.n(r),u=a("./node_modules/@babel/runtime/helpers/possibleConstructorReturn.js"),p=a.n(u),v=a("./node_modules/@babel/runtime/helpers/getPrototypeOf.js"),m=a.n(v),y=a("./node_modules/@babel/runtime/helpers/inherits.js"),g=a.n(y),b=a("./node_modules/react/index.js"),h=a.n(b);function f(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}var x=function(e){g()(o,e);var t,a=(t=o,function(){var e,a=m()(t);if(f()){var o=m()(this).constructor;e=Reflect.construct(a,arguments,o)}else e=a.apply(this,arguments);return p()(this,e)});function o(){return c()(this,o),a.apply(this,arguments)}return d()(o,[{key:"validUnits",value:function(e){switch(e){case"px":case"em":case"rem":case"%":case"vw":case"vh":return e;default:return"px"}}},{key:"render",value:function(){var e,t,a,o=this.props,i=o.id,s=o.atts,c=o.editor,r=s.customClass,d=s.videoPlayer,u=s.alignment,p=s.size,v=s.customSize,m=s.advanced,y=s.metaCustomId,g="vce-vim-video-player",b=m&&s.autopause?1:0,f=m&&s.autoplay?1:0,x=m&&s.loop?1:0,w=m?s.color.slice(1):"00adef",C=/https?:\/\/(?:www\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^/]*)\/videos\/|album\/(\d+)\/video\/|)(\d+)(?:$|\/|\?)/,P={};if("string"==typeof r&&r&&(g=g.concat(" ".concat(r))),u&&(g+=" vce-vim-video-player--align-".concat(u)),p)if(g+=" vce-vim-video-player--size-".concat(p),"custom"===p)if(/^[0-9.]+$/.test(v))t="".concat(parseFloat(v),"px");else if(parseFloat(v)){var j=v.slice(parseFloat(v).toString().length);t="".concat(parseFloat(v)).concat(this.validUnits(j))}else t="560px";else t="".concat(p.slice(0,p.indexOf("x")),"px");d.match(C)&&(a=d.match(C)[3]);y&&(P.id=y),e="//player.vimeo.com/video/".concat(a,"?autopause=").concat(b,"&autoplay=").concat(f,"&muted=").concat(f,"&color=").concat(w,"&loop=").concat(x);var k="<iframe class='vce-vim-video-player-iframe' src='".concat(e,"' frameBorder='0' allowFullScreen='true' />");"backend"===n.a.env("editor")&&(e="//player.vimeo.com/video/".concat(a,"?autopause=").concat(b,"&autoplay=false&color=").concat(w,"&loop=").concat(x));var S=this.applyDO("all");return h.a.createElement("div",l()({className:g},P,c,{"data-vcv-element-disabled":!0}),h.a.createElement("div",l()({className:"vce vce-vim-video-player-wrapper",id:"el-"+i,style:{width:t}},S),h.a.createElement("div",{className:"vce-vim-video-player-inner"},h.a.createElement("div",{className:"vcvhelper","data-vcvs-html":k},h.a.createElement("iframe",{className:"vce-vim-video-player-iframe",src:e,frameBorder:"0",allowFullScreen:!0})))))}}]),o}(n.a.getService("api").elementComponent);(0,n.a.getService("cook").add)(a("./vimeoPlayer/settings.json"),(function(e){e.add(x)}),{css:a("./node_modules/raw-loader/index.js!./vimeoPlayer/styles.css"),editorCss:a("./node_modules/raw-loader/index.js!./vimeoPlayer/editor.css")},"")},"./vimeoPlayer/settings.json":function(e){e.exports=JSON.parse('{"videoPlayer":{"type":"string","access":"public","value":"https://vimeo.com/channels/staffpicks/181907337","options":{"label":"Vimeo video link","description":"Enter link to Vimeo video.","link":true}},"alignment":{"type":"buttonGroup","access":"public","value":"left","options":{"label":"Alignment","values":[{"label":"Left","value":"left","icon":"vcv-ui-icon-attribute-alignment-left"},{"label":"Center","value":"center","icon":"vcv-ui-icon-attribute-alignment-center"},{"label":"Right","value":"right","icon":"vcv-ui-icon-attribute-alignment-right"}]}},"size":{"type":"dropdown","access":"public","value":"560x315","options":{"label":"Size","values":[{"label":"560x315","value":"560x315"},{"label":"1280x720","value":"1280x720"},{"label":"853x480","value":"853x480"},{"label":"640x360","value":"640x360"},{"label":"Custom size","value":"custom"}]}},"customSize":{"type":"string","access":"public","value":"","options":{"label":"Custom width","description":"Enter custom width and the height will be automatically calculated for 16:9 aspect ratio.","onChange":{"rules":{"size":{"rule":"value","options":{"value":"custom"}}},"actions":[{"action":"toggleVisibility"}]}}},"customClass":{"type":"string","access":"public","value":"","options":{"label":"Extra class name","description":"Add an extra class name to the element and refer to it from Custom CSS option."}},"advanced":{"type":"toggle","access":"public","value":false,"options":{"label":"Advanced options"}},"autopause":{"type":"toggle","access":"public","value":false,"options":{"label":"Autopause","description":"Enables or disables pausing this video when another video is played.","onChange":{"rules":{"advanced":{"rule":"toggle"}},"actions":[{"action":"toggleVisibility"}]}}},"autoplay":{"type":"toggle","access":"public","value":false,"options":{"label":"Autoplay","description":"Automatically start to play the video when the player loads. The sound will be muted until the users\' first interaction with the video.","onChange":{"rules":{"advanced":{"rule":"toggle"}},"actions":[{"action":"toggleVisibility"}]}}},"color":{"type":"color","access":"public","value":"#fff","options":{"label":"Controls color","format":"hex","disableAlpha":true,"showTransparent":false,"description":"Specify the color of the video controls.","onChange":{"rules":{"advanced":{"rule":"toggle"}},"actions":[{"action":"toggleVisibility"}]}}},"loop":{"type":"toggle","access":"public","value":false,"options":{"label":"Repeat video","description":"Play the video again when it reaches the end.","onChange":{"rules":{"advanced":{"rule":"toggle"}},"actions":[{"action":"toggleVisibility"}]}}},"designOptions":{"type":"designOptions","access":"public","value":{},"options":{"label":"Design Options"}},"editFormTab1":{"type":"group","access":"protected","value":["videoPlayer","size","customSize","alignment","advanced","autopause","autoplay","color","loop","metaCustomId","customClass"],"options":{"label":"General"}},"metaEditFormTabs":{"type":"group","access":"protected","value":["editFormTab1","designOptions"]},"relatedTo":{"type":"group","access":"protected","value":["General"]},"metaBackendLabels":{"type":"group","access":"protected","value":[{"value":["videoPlayer"]}]},"metaCustomId":{"type":"customId","access":"public","value":"","options":{"label":"Element ID","description":"Apply unique ID to element to link directly to it by using #your_id (for element ID use lowercase input only)."}},"tag":{"access":"protected","type":"string","value":"vimeoPlayer"}}')}},[["./vimeoPlayer/index.js"]]]);