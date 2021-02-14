(window.vcvWebpackJsonp4x=window.vcvWebpackJsonp4x||[]).push([[0],{"./node_modules/raw-loader/index.js!./singleImage/editor.css":function(e,t){e.exports=".vce-single-image-container {\n  min-height: 1em;\n}\n"},"./node_modules/raw-loader/index.js!./singleImage/styles.css":function(e,t){e.exports='a.vce-single-image-inner {\n  color: transparent;\n  border-bottom: 0;\n  text-decoration: none;\n  box-shadow: none;\n}\n\na.vce-single-image-inner:hover,\na.vce-single-image-inner:focus {\n  text-decoration: none;\n  box-shadow: none;\n  border-bottom: 0;\n}\n\n.vce-single-image-inner {\n  display: inline-block;\n  vertical-align: top;\n  line-height: 1;\n  max-width: 100%;\n  position: relative;\n}\n\n.vce-single-image-wrapper {\n  display: inline-block;\n  max-width: 100%;\n  overflow: hidden;\n  vertical-align: top;\n}\n\n.vce-single-image-wrapper img {\n  vertical-align: top;\n  max-width: 100%;\n}\n\n.vce-single-image--border-rounded {\n  border-radius: 5px;\n  overflow: hidden;\n}\n\n.vce-single-image--border-round {\n  border-radius: 50%;\n  overflow: hidden;\n}\n\n.vce-single-image--align-center {\n  text-align: center;\n}\n\n.vce-single-image--align-right {\n  text-align: right;\n}\n\n.vce-single-image--align-left {\n  text-align: left;\n}\n\n.vce-single-image-wrapper figure {\n  margin: 0;\n}\n\n.vce-single-image-wrapper figcaption {\n  font-style: italic;\n  margin-top: 10px;\n}\n\n.vce-single-image-wrapper figcaption[hidden] {\n  display: none;\n}\n\n.vce-single-image-inner.vce-single-image--absolute .vce-single-image:not([data-dynamic-natural-size="true"]) {\n  position: absolute;\n  top: 0;\n  left: 0;\n  width: 100%;\n  object-fit: cover;\n  height: 100%;\n}\n\n.vce-single-image-container .vce-single-image-inner .vce-single-image {\n  box-shadow: none;\n}\n'},"./singleImage/index.js":function(e,t,a){"use strict";a.r(t);var i=a("./node_modules/vc-cake/index.js"),n=a.n(i),s=a("./node_modules/@babel/runtime/helpers/extends.js"),l=a.n(s),r=a("./node_modules/@babel/runtime/helpers/typeof.js"),o=a.n(r),c=a("./node_modules/@babel/runtime/helpers/classCallCheck.js"),g=a.n(c),u=a("./node_modules/@babel/runtime/helpers/createClass.js"),p=a.n(u),d=a("./node_modules/@babel/runtime/helpers/assertThisInitialized.js"),m=a.n(d),h=a("./node_modules/@babel/runtime/helpers/possibleConstructorReturn.js"),v=a.n(h),b=a("./node_modules/@babel/runtime/helpers/getPrototypeOf.js"),f=a.n(b),w=a("./node_modules/@babel/runtime/helpers/inherits.js"),y=a.n(w),I=a("./node_modules/@babel/runtime/helpers/defineProperty.js"),x=a.n(I),S=a("./node_modules/react/index.js"),k=a.n(S);function z(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}var E=Object(i.getService)("api"),j=Object(i.getService)("renderProcessor"),C=Object(i.getService)("utils"),O=C.getBlockRegexp,_=C.parseDynamicBlock,L=O(),R=function(e){y()(i,e);var t,a=(t=i,function(){var e,a=f()(t);if(z()){var i=f()(this).constructor;e=Reflect.construct(a,arguments,i)}else e=a.apply(this,arguments);return v()(this,e)});function i(e){var t;return g()(this,i),t=a.call(this,e),x()(m()(t),"promise",null),t.state={imgElement:null,parsedWidth:null,parsedHeight:null,naturalWidth:null,naturalHeight:null},t.setImage=t.setImage.bind(m()(t)),t.setImageState=t.setImageState.bind(m()(t)),t.setError=t.setError.bind(m()(t)),t}return p()(i,[{key:"componentDidMount",value:function(){var e=this;this.promise=new window.Promise((function(t,a){e.resolve=t,e.setImage(e.props)})),j.add(this.promise)}},{key:"componentWillUnmount",value:function(){this.resolve&&this.resolve(!0),i.image&&i.image.removeEventListener("load",this.setImageState),i.image&&i.image.removeEventListener("error",this.setError)}},{key:"componentDidUpdate",value:function(e,t){e.atts.image!==this.props.atts.image?this.setImage(this.props):(e.atts.size!==this.props.atts.size||e.atts.shape!==this.props.atts.shape)&&this.resetImageSizeState()}},{key:"parseSize",value:function(e,t,a,i){var n=!0;"string"==typeof e?e=e.replace(/\s/g,"").replace(/px/g,"").toLowerCase().split("x"):"object"===o()(e)&&(n=e.crop,e=[e.width,e.height]),a=parseInt(a),i=parseInt(i);var s=parseInt(e[0])<a,l=parseInt(e[1])<i;if(n)e[0]=parseInt(e[0])<a?parseInt(e[0]):a,e[1]=parseInt(e[1])<i?parseInt(e[1]):i;else{if(e[0]=s?parseInt(e[0]):a,e[1]=l?parseInt(e[1]):i,s&&!l){var r=e[0]/a;e[1]=parseInt(i*r)}if(l&&!s){var c=e[1]/i;e[0]=parseInt(a*c)}if(l&&s)if(i<a){var g=e[0]/a;e[1]=parseInt(i*g)}else{var u=e[1]/i;e[0]=parseInt(a*u)}}if(t){var p=e[0]>=e[1]?e[1]:e[0];e={width:p,height:p}}else e={width:e[0],height:e[1]};return e}},{key:"checkRelatedSize",value:function(e){var t=null;return window.vcvImageSizes&&window.vcvImageSizes[e]&&(t=window.vcvImageSizes[e]),t}},{key:"getSizes",value:function(e,t){var a=e.size,i=e.shape,n="";return{width:(n=(a=a.replace(/\s/g,"").replace(/px/g,"").toLowerCase()).match(/\d+(x)\d+/)?this.parseSize(a,"round"===i,t.width,t.height):(n=this.checkRelatedSize(a))?this.parseSize(n,"round"===i,t.width,t.height):this.parseSize({width:t.width,height:t.height},"round"===i,t.width,t.height)).width,height:n.height}}},{key:"setImage",value:function(e){var t=this.getImageUrl(e.atts.image);i.image&&i.image.removeEventListener("load",this.setImageState),i.image&&i.image.removeEventListener("error",this.setError),i.image=new window.Image,i.image.addEventListener("load",this.setImageState),i.image.addEventListener("error",this.setError),t?i.image.src=t:this.setError(),t||this.setState({imgElement:null,parsedWidth:null,parsedHeight:null,naturalWidth:null,naturalHeight:null})}},{key:"setImageState",value:function(e){var t=this,a=e.currentTarget,i=this.getSizes(this.props.atts,a);this.setState({imgElement:a,parsedWidth:i.width,parsedHeight:i.height,naturalWidth:a.width,naturalHeight:a.height},(function(){t.resolve&&t.resolve(!0)}))}},{key:"resetImageSizeState",value:function(){var e=this.getSizes(this.props.atts,this.state.imgElement);this.setState({parsedWidth:e.width,parsedHeight:e.height})}},{key:"setError",value:function(){this.resolve&&this.resolve(!1)}},{key:"getImageShortcode",value:function(e){var t=e.props,a=e.classes,i=e.isDefaultImage,n=e.src,s=e.isDynamicImage,l=e.naturalSizes,r='[vcvSingleImage class="'.concat(a,'" data-width="').concat(this.state.parsedWidth||0,'" data-height="').concat(this.state.parsedHeight||0,'" src="').concat(n,'" data-img-src="').concat(t["data-img-src"],'"'),o=t.alt,c=t.title;if(i&&(r+=' data-default-image="true"'),s){var g=_(this.props.rawAtts.image.full);r+=' data-dynamic="'.concat(g.blockAtts.value,'"');var u=new URL(g.blockAtts.currentValue),p=new URLSearchParams(u.search);o=p.get("alt"),c=p.get("title"),l&&(r+=' data-dynamic-natural-size="true"')}return r+=' alt="'.concat(o,'" title="').concat(c,'" ]')}},{key:"render",value:function(){var e=this.props,t=e.id,a=e.atts,i=e.editor,n=a.shape,s=a.clickableOptions,r=a.showCaption,o=a.customClass,c=a.size,g=a.alignment,u=a.metaCustomId,p=a.image,d="vce-single-image-container",m="vce-single-image-inner vce-single-image--absolute",h={},v={},b={},f="div",w={},y=this.getImageUrl(p),I=this.props.rawAtts.image&&this.props.rawAtts.image.full,x=Array.isArray("string"==typeof I&&I.match(L));w["data-img-src"]=y,w.alt=p&&p.alt?p.alt:"",w.title=p&&p.title?p.title:"";var S=p.caption;if(x){var z=new URL(p.full),E=new URLSearchParams(z.search);w.alt=E.get("alt")?E.get("alt"):"",w.title=E.get("title")?E.get("title"):"",S=E.get("caption")?E.get("caption"):""}if("string"==typeof o&&o&&(d+=" "+o),"url"===s&&p&&p.link&&p.link.url){f="a";var j=p.link;h={href:j.url,title:j.title,target:j.targetBlank?"_blank":void 0,rel:j.relNofollow?"nofollow":void 0}}else"imageNewTab"===s?(f="a",h={href:y,target:"_blank"}):"lightbox"===s?(f="a",h={href:y,"data-lightbox":"lightbox-".concat(t)}):"zoom"===s?m+=" vce-single-image-zoom-container":"photoswipe"===s&&(f="a",h={href:y,"data-photoswipe-image":t,"data-photoswipe-index":0},b["data-photoswipe-item"]="photoswipe-".concat(t),r&&(h["data-photoswipe-caption"]=p.caption),v["data-photoswipe-gallery"]=t);g&&(d+=" vce-single-image--align-".concat(g)),"rounded"===n&&(m+=" vce-single-image--border-rounded"),"round"===n&&(m+=" vce-single-image--border-round"),u&&(v.id=u);var C=this.applyDO("all"),O=!!S,_=k.a.createElement("figcaption",{hidden:O},S),R=p&&p.urls&&p.urls.length?p.urls[0]:p;R&&R.filter&&"normal"!==R.filter&&(m+=" vce-image-filter--".concat(R.filter));var W="",D=!1;x&&(1===this.state.naturalWidth&&1===this.state.naturalHeight||(!c||"full"===c)&&"round"!==n)&&(h["data-vce-delete-attr"]="style",D=!0);var N={props:w,classes:"vce-single-image",isDefaultImage:!(p&&p.id),src:y,isDynamicImage:x,naturalSizes:D};return y&&(W=k.a.createElement("img",l()({className:"".concat("vce-single-image"," vcvhelper"),src:y},w,{"data-vcvs-html":this.getImageShortcode(N)}))),c&&"full"!==c||"round"===n||x||(W=k.a.createElement("img",l()({className:"vce-single-image",src:y},w))),k.a.createElement("div",l()({className:d},i,v),k.a.createElement("div",l()({className:"vce vce-single-image-wrapper"},b,{id:"el-"+t},C),k.a.createElement("figure",null,k.a.createElement(f,l()({},h,{className:m,ref:"imageContainer",style:{paddingBottom:"".concat(this.state.parsedHeight/this.state.parsedWidth*100,"%"),width:this.state.parsedWidth}}),W),_)))}}]),i}(E.elementComponent);x()(R,"image",null),(0,n.a.getService("cook").add)(a("./singleImage/settings.json"),(function(e){e.add(R)}),{css:a("./node_modules/raw-loader/index.js!./singleImage/styles.css"),editorCss:a("./node_modules/raw-loader/index.js!./singleImage/editor.css")},"")},"./singleImage/settings.json":function(e){e.exports=JSON.parse('{"image":{"type":"attachimage","access":"public","value":"single-image.jpg","options":{"label":"Image","multiple":false,"dynamicField":true,"defaultValue":"single-image.jpg","onChange":{"rules":{"clickableOptions":{"rule":"value","options":{"value":"url"}}},"actions":[{"action":"attachImageUrls"}]},"url":false,"imageFilter":true}},"shape":{"type":"buttonGroup","access":"public","value":"square","options":{"label":"Shape","values":[{"label":"Square","value":"square","icon":"vcv-ui-icon-attribute-shape-square"},{"label":"Rounded","value":"rounded","icon":"vcv-ui-icon-attribute-shape-rounded"},{"label":"Round","value":"round","icon":"vcv-ui-icon-attribute-shape-round"}]}},"designOptions":{"type":"designOptions","access":"public","value":{},"options":{"label":"Design Options"}},"editFormTab1":{"type":"group","access":"protected","value":["clickableOptions","showCaption","image","shape","size","alignment","metaCustomId","customClass"],"options":{"label":"General"}},"metaEditFormTabs":{"type":"group","access":"protected","value":["editFormTab1","designOptions"]},"relatedTo":{"type":"group","access":"protected","value":["General"]},"metaOrder":{"type":"number","access":"protected","value":4},"customClass":{"type":"string","access":"public","value":"","options":{"label":"Extra class name","description":"Add an extra class name to the element and refer to it from Custom CSS option."}},"size":{"type":"string","access":"public","value":"large","options":{"label":"Size","description":"Enter image size (Example: \'thumbnail\', \'medium\', \'large\', \'full\' or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height))."}},"clickableOptions":{"type":"dropdown","access":"public","value":"","options":{"label":"OnClick action","values":[{"label":"None","value":""},{"label":"Lightbox","value":"lightbox"},{"label":"PhotoSwipe","value":"photoswipe"},{"label":"Zoom","value":"zoom"},{"label":"Open Image in New Tab","value":"imageNewTab"},{"label":"Link selector","value":"url"}]}},"showCaption":{"type":"toggle","access":"public","value":false,"options":{"label":"Show image caption in gallery view","onChange":{"rules":{"clickableOptions":{"rule":"value","options":{"value":"photoswipe"}}},"actions":[{"action":"toggleVisibility"}]}}},"alignment":{"type":"buttonGroup","access":"public","value":"left","options":{"label":"Alignment","values":[{"label":"Left","value":"left","icon":"vcv-ui-icon-attribute-alignment-left"},{"label":"Center","value":"center","icon":"vcv-ui-icon-attribute-alignment-center"},{"label":"Right","value":"right","icon":"vcv-ui-icon-attribute-alignment-right"}]}},"metaCustomId":{"type":"customId","access":"public","value":"","options":{"label":"Element ID","description":"Apply unique ID to element to link directly to it by using #your_id (for element ID use lowercase input only)."}},"tag":{"access":"protected","type":"string","value":"singleImage"},"metaPublicJs":{"access":"protected","type":"string","value":{"libraries":[{"rules":{"clickableOptions":{"rule":"value","options":{"value":"zoom"}}},"libPaths":["public/dist/singleImage.min.js"]}]}},"sharedAssetsLibrary":{"access":"protected","type":"string","value":{"libraries":[{"rules":{"clickableOptions":{"rule":"value","options":{"value":"lightbox"}}},"libsNames":["lightbox"]},{"rules":{"clickableOptions":{"rule":"value","options":{"value":"zoom"}}},"libsNames":["zoom"]},{"rules":{"clickableOptions":{"rule":"value","options":{"value":"photoswipe"}}},"libsNames":["photoswipe"]}]}}}')}},[["./singleImage/index.js"]]]);