var ep = window.ep || {}; ep.bundles = ep.bundles || []; ep.bundles = ep.bundles.concat('bundled/underscore.js','underscore/underscore.js');
(function(){var K=this;var S=K._;var ao={};var ag=Array.prototype,U=Object.prototype,N=Function.prototype;var O=ag.slice,I=ag.unshift,J=U.toString,aa=U.hasOwnProperty;var ac=ag.forEach,ah=ag.map,Y=ag.reduce,al=ag.reduceRight,ad=ag.filter,ap=ag.every,Z=ag.some,M=ag.indexOf,ak=ag.lastIndexOf,an=Array.isArray,W=Object.keys,af=N.bind;var Q=function(a){return new aj(a)};if(typeof exports!=="undefined"){if(typeof module!=="undefined"&&module.exports){exports=module.exports=Q}exports._=Q}else{K._=Q}Q.VERSION="1.3.1";var am=Q.each=Q.forEach=function(e,f,a){if(e==null){return}if(ac&&e.forEach===ac){e.forEach(f,a)}else{if(e.length===+e.length){for(var b=0,d=e.length;b<d;b++){if(b in e&&f.call(a,e[b],b,e)===ao){return}}}else{for(var c in e){if(Q.has(e,c)){if(f.call(a,e[c],c,e)===ao){return}}}}}};Q.map=Q.collect=function(a,b,c){var d=[];if(a==null){return d}if(ah&&a.map===ah){return a.map(b,c)}am(a,function(e,g,f){d[d.length]=b.call(c,e,g,f)});if(a.length===+a.length){d.length=a.length}return d};Q.reduce=Q.foldl=Q.inject=function(e,a,d,b){var c=arguments.length>2;if(e==null){e=[]}if(Y&&e.reduce===Y){if(b){a=Q.bind(a,b)}return c?e.reduce(a,d):e.reduce(a)}am(e,function(f,h,g){if(!c){d=f;c=true}else{d=a.call(b,d,f,h,g)}});if(!c){throw new TypeError("Reduce of empty array with no initial value")}return d};Q.reduceRight=Q.foldr=function(f,a,d,b){var c=arguments.length>2;if(f==null){f=[]}if(al&&f.reduceRight===al){if(b){a=Q.bind(a,b)}return c?f.reduceRight(a,d):f.reduceRight(a)}var e=Q.toArray(f).reverse();if(b&&!c){a=Q.bind(a,b)}return c?Q.reduce(e,a,d,b):Q.reduce(e,a)};Q.find=Q.detect=function(a,b,c){var d;V(a,function(e,g,f){if(b.call(c,e,g,f)){d=e;return true}});return d};Q.filter=Q.select=function(a,b,c){var d=[];if(a==null){return d}if(ad&&a.filter===ad){return a.filter(b,c)}am(a,function(e,g,f){if(b.call(c,e,g,f)){d[d.length]=e}});return d};Q.reject=function(a,b,c){var d=[];if(a==null){return d}am(a,function(e,g,f){if(!b.call(c,e,g,f)){d[d.length]=e}});return d};Q.every=Q.all=function(a,b,c){var d=true;if(a==null){return d}if(ap&&a.every===ap){return a.every(b,c)}am(a,function(e,g,f){if(!(d=d&&b.call(c,e,g,f))){return ao}});return d};var V=Q.some=Q.any=function(a,b,c){b||(b=Q.identity);var d=false;if(a==null){return d}if(Z&&a.some===Z){return a.some(b,c)}am(a,function(e,g,f){if(d||(d=b.call(c,e,g,f))){return ao}});return !!d};Q.include=Q.contains=function(a,b){var c=false;if(a==null){return c}if(M&&a.indexOf===M){return a.indexOf(b)!=-1}c=V(a,function(d){return d===b});return c};Q.invoke=function(b,a){var c=O.call(arguments,2);return Q.map(b,function(d){return(Q.isFunction(a)?a||d:d[a]).apply(d,c)})};Q.pluck=function(a,b){return Q.map(a,function(c){return c[b]})};Q.max=function(a,b,c){if(!b&&Q.isArray(a)){return Math.max.apply(Math,a)}if(!b&&Q.isEmpty(a)){return -Infinity}var d={computed:-Infinity};am(a,function(e,h,f){var g=b?b.call(c,e,h,f):e;g>=d.computed&&(d={value:e,computed:g})});return d.value};Q.min=function(a,b,c){if(!b&&Q.isArray(a)){return Math.min.apply(Math,a)}if(!b&&Q.isEmpty(a)){return Infinity}var d={computed:Infinity};am(a,function(e,h,f){var g=b?b.call(c,e,h,f):e;g<d.computed&&(d={value:e,computed:g})});return d.value};Q.shuffle=function(a){var c=[],b;am(a,function(e,d,f){if(d==0){c[0]=e}else{b=Math.floor(Math.random()*(d+1));c[d]=c[b];c[b]=e}});return c};Q.sortBy=function(a,b,c){return Q.pluck(Q.map(a,function(e,d,f){return{value:e,criteria:b.call(c,e,d,f)}}).sort(function(e,f){var g=e.criteria,d=f.criteria;return g<d?-1:g>d?1:0}),"value")};Q.groupBy=function(b,a){var d={};var c=Q.isFunction(a)?a:function(e){return e[a]};am(b,function(e,g){var f=c(e,g);(d[f]||(d[f]=[])).push(e)});return d};Q.sortedIndex=function(e,f,b){b||(b=Q.identity);var d=0,a=e.length;while(d<a){var c=(d+a)>>1;b(e[c])<b(f)?d=c+1:a=c}return d};Q.toArray=function(a){if(!a){return[]}if(a.toArray){return a.toArray()}if(Q.isArray(a)){return O.call(a)}if(Q.isArguments(a)){return O.call(a)}return Q.values(a)};Q.size=function(a){return Q.toArray(a).length};Q.first=Q.head=function(a,b,c){return(b!=null)&&!c?O.call(a,0,b):a[0]};Q.initial=function(a,b,c){return O.call(a,0,a.length-((b==null)||c?1:b))};Q.last=function(a,b,c){if((b!=null)&&!c){return O.call(a,Math.max(a.length-b,0))}else{return a[a.length-1]}};Q.rest=Q.tail=function(a,c,b){return O.call(a,(c==null)||b?1:c)};Q.compact=function(a){return Q.filter(a,function(b){return !!b})};Q.flatten=function(a,b){return Q.reduce(a,function(d,c){if(Q.isArray(c)){return d.concat(b?c:Q.flatten(c))}d[d.length]=c;return d},[])};Q.without=function(a){return Q.difference(a,O.call(arguments,1))};Q.uniq=Q.unique=function(e,a,b){var c=b?Q.map(e,b):e;var d=[];Q.reduce(c,function(h,f,g){if(0==g||(a===true?Q.last(h)!=f:!Q.include(h,f))){h[h.length]=f;d[d.length]=e[g]}return h},[]);return d};Q.union=function(){return Q.uniq(Q.flatten(arguments,true))};Q.intersection=Q.intersect=function(a){var b=O.call(arguments,1);return Q.filter(Q.uniq(a),function(c){return Q.every(b,function(d){return Q.indexOf(d,c)>=0})})};Q.difference=function(a){var b=Q.flatten(O.call(arguments,1));return Q.filter(a,function(c){return !Q.include(b,c)})};Q.zip=function(){var d=O.call(arguments);var a=Q.max(Q.pluck(d,"length"));var b=new Array(a);for(var c=0;c<a;c++){b[c]=Q.pluck(d,""+c)}return b};Q.indexOf=function(e,b,a){if(e==null){return -1}var c,d;if(a){c=Q.sortedIndex(e,b);return e[c]===b?c:-1}if(M&&e.indexOf===M){return e.indexOf(b)}for(c=0,d=e.length;c<d;c++){if(c in e&&e[c]===b){return c}}return -1};Q.lastIndexOf=function(a,b){if(a==null){return -1}if(ak&&a.lastIndexOf===ak){return a.lastIndexOf(b)}var c=a.length;while(c--){if(c in a&&a[c]===b){return c}}return -1};Q.range=function(e,a,f){if(arguments.length<=1){a=e||0;e=0}f=arguments[2]||1;var c=Math.max(Math.ceil((a-e)/f),0);var d=0;var b=new Array(c);while(d<c){b[d++]=e;e+=f}return b};var ai=function(){};Q.bind=function L(a,c){var b,d;if(a.bind===af&&af){return af.apply(a,O.call(arguments,1))}if(!Q.isFunction(a)){throw new TypeError}d=O.call(arguments,2);return b=function(){if(!(this instanceof b)){return a.apply(c,d.concat(O.call(arguments)))}ai.prototype=a.prototype;var e=new ai;var f=a.apply(e,d.concat(O.call(arguments)));if(Object(f)===f){return f}return e}};Q.bindAll=function(a){var b=O.call(arguments,1);if(b.length==0){b=Q.functions(a)}am(b,function(c){a[c]=Q.bind(a[c],a)});return a};Q.memoize=function(a,b){var c={};b||(b=Q.identity);return function(){var d=b.apply(this,arguments);return Q.has(c,d)?c[d]:(c[d]=a.apply(this,arguments))}};Q.delay=function(b,a){var c=O.call(arguments,2);return setTimeout(function(){return b.apply(b,c)},a)};Q.defer=function(a){return Q.delay.apply(Q,[a,1].concat(O.call(arguments,1)))};Q.throttle=function(g,e){var a,d,f,h,b;var c=Q.debounce(function(){b=h=false},e);return function(){a=this;d=arguments;var i=function(){f=null;if(b){g.apply(a,d)}c()};if(!f){f=setTimeout(i,e)}if(h){b=true}else{g.apply(a,d)}c();h=true}};Q.debounce=function(c,a){var b;return function(){var e=this,f=arguments;var d=function(){b=null;c.apply(e,f)};clearTimeout(b);b=setTimeout(d,a)}};Q.once=function(a){var c=false,b;return function(){if(c){return b}c=true;return b=a.apply(this,arguments)}};Q.wrap=function(b,a){return function(){var c=[b].concat(O.call(arguments,0));return a.apply(this,c)}};Q.compose=function(){var a=arguments;return function(){var c=arguments;for(var b=a.length-1;b>=0;b--){c=[a[b].apply(this,c)]}return c[0]}};Q.after=function(a,b){if(a<=0){return b()}return function(){if(--a<1){return b.apply(this,arguments)}}};Q.keys=W||function(a){if(a!==Object(a)){throw new TypeError("Invalid object")}var b=[];for(var c in a){if(Q.has(a,c)){b[b.length]=c}}return b};Q.values=function(a){return Q.map(a,Q.identity)};Q.functions=Q.methods=function(a){var b=[];for(var c in a){if(Q.isFunction(a[c])){b.push(c)}}return b.sort()};Q.extend=function(a){am(O.call(arguments,1),function(c){for(var b in c){a[b]=c[b]}});return a};Q.defaults=function(a){am(O.call(arguments,1),function(c){for(var b in c){if(a[b]==null){a[b]=c[b]}}});return a};Q.clone=function(a){if(!Q.isObject(a)){return a}return Q.isArray(a)?a.slice():Q.extend({},a)};Q.tap=function(a,b){b(a);return a};function R(a,b,c){if(a===b){return a!==0||1/a==1/b}if(a==null||b==null){return a===b}if(a._chain){a=a._wrapped}if(b._chain){b=b._wrapped}if(a.isEqual&&Q.isFunction(a.isEqual)){return a.isEqual(b)}if(b.isEqual&&Q.isFunction(b.isEqual)){return b.isEqual(a)}var f=J.call(a);if(f!=J.call(b)){return false}switch(f){case"[object String]":return a==String(b);case"[object Number]":return a!=+a?b!=+b:(a==0?1/a==1/b:a==+b);case"[object Date]":case"[object Boolean]":return +a==+b;case"[object RegExp]":return a.source==b.source&&a.global==b.global&&a.multiline==b.multiline&&a.ignoreCase==b.ignoreCase}if(typeof a!="object"||typeof b!="object"){return false}var e=c.length;while(e--){if(c[e]==a){return true}}c.push(a);var g=0,d=true;if(f=="[object Array]"){g=a.length;d=g==b.length;if(d){while(g--){if(!(d=g in a==g in b&&R(a[g],b[g],c))){break}}}}else{if("constructor" in a!="constructor" in b||a.constructor!=b.constructor){return false}for(var h in a){if(Q.has(a,h)){g++;if(!(d=Q.has(b,h)&&R(a[h],b[h],c))){break}}}if(d){for(h in b){if(Q.has(b,h)&&!(g--)){break}}d=!g}}c.pop();return d}Q.isEqual=function(a,b){return R(a,b,[])};Q.isEmpty=function(a){if(Q.isArray(a)||Q.isString(a)){return a.length===0}for(var b in a){if(Q.has(a,b)){return false}}return true};Q.isElement=function(a){return !!(a&&a.nodeType==1)};Q.isArray=an||function(a){return J.call(a)=="[object Array]"};Q.isObject=function(a){return a===Object(a)};Q.isArguments=function(a){return J.call(a)=="[object Arguments]"};if(!Q.isArguments(arguments)){Q.isArguments=function(a){return !!(a&&Q.has(a,"callee"))}}Q.isFunction=function(a){return J.call(a)=="[object Function]"};Q.isString=function(a){return J.call(a)=="[object String]"};Q.isNumber=function(a){return J.call(a)=="[object Number]"};Q.isNaN=function(a){return a!==a};Q.isBoolean=function(a){return a===true||a===false||J.call(a)=="[object Boolean]"};Q.isDate=function(a){return J.call(a)=="[object Date]"};Q.isRegExp=function(a){return J.call(a)=="[object RegExp]"};Q.isNull=function(a){return a===null};Q.isUndefined=function(a){return a===void 0};Q.has=function(a,b){return aa.call(a,b)};Q.noConflict=function(){K._=S;return this};Q.identity=function(a){return a};Q.times=function(a,b,c){for(var d=0;d<a;d++){b.call(c,d)}};Q.escape=function(a){return(""+a).replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#x27;").replace(/\//g,"&#x2F;")};Q.mixin=function(a){am(Q.functions(a),function(b){T(b,Q[b]=a[b])})};var ae=0;Q.uniqueId=function(b){var a=ae++;return b?b+a:a};Q.templateSettings={evaluate:/<%([\s\S]+?)%>/g,interpolate:/<%=([\s\S]+?)%>/g,escape:/<%-([\s\S]+?)%>/g};var P=/.^/;var X=function(a){return a.replace(/\\\\/g,"\\").replace(/\\'/g,"'")};Q.template=function(a,b){var e=Q.templateSettings;var d="var __p=[],print=function(){__p.push.apply(__p,arguments);};with(obj||{}){__p.push('"+a.replace(/\\/g,"\\\\").replace(/'/g,"\\'").replace(e.escape||P,function(g,f){return"',_.escape("+X(f)+"),'"}).replace(e.interpolate||P,function(g,f){return"',"+X(f)+",'"}).replace(e.evaluate||P,function(g,f){return"');"+X(f).replace(/[\r\n\t]/g," ")+";__p.push('"}).replace(/\r/g,"\\r").replace(/\n/g,"\\n").replace(/\t/g,"\\t")+"');}return __p.join('');";var c=new Function("obj","_",d);if(b){return c(b,Q)}return function(f){return c.call(this,f,Q)}};Q.chain=function(a){return Q(a).chain()};var aj=function(a){this._wrapped=a};Q.prototype=aj.prototype;var ab=function(a,b){return b?Q(a).chain():a};var T=function(b,a){aj.prototype[b]=function(){var c=O.call(arguments);I.call(c,this._wrapped);return ab(a.apply(Q,c),this._chain)}};Q.mixin(Q);am(["pop","push","reverse","shift","sort","splice","unshift"],function(b){var a=ag[b];aj.prototype[b]=function(){var d=this._wrapped;a.apply(d,arguments);var c=d.length;if((b=="shift"||b=="splice")&&c===0){delete d[0]}return ab(d,this._chain)}});am(["concat","join","slice"],function(b){var a=ag[b];aj.prototype[b]=function(){return ab(a.apply(this._wrapped,arguments),this._chain)}});aj.prototype.chain=function(){this._chain=true;return this};aj.prototype.value=function(){return this._wrapped}}).call(this);