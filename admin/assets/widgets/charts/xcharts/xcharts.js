!function(){function a(a){return _.chain(_.range(a,10)).reverse().map(function(a){return'g[data-index="'+a+'"]'}).value().join(", ")}function b(a,b){var c=a.getAttribute("class");return(null!==c?c.replace(/color\d+/g,""):"")+" color"+b}function c(a,b){return _.chain(a).pluck("data").flatten().pluck(b).uniq().filter(function(a){return void 0!==a&&null!==a}).value().sort(d3.ascending)}function d(a,b){var c,d,e=a[0],f=a[1];return e===f&&(d=Math.max(Math.round(e/10),4),e-=d,f+=d),c=f-e,e=e?e-c/10:e,e=a[0]>0?Math.max(e,0):e,f=f?f+c/10:f,f=a[1]<0?Math.min(f,0):f,[e,f]}function e(a,b,c,e){var f,g=_.chain(b).pluck("data").flatten().value();return f={x:d3.extent(g,function(a){return a.x}),y:d3.extent(g,function(a){return a.y})},_.each([c,e],function(b,c){var e,h=c?"y":"x";f[h]=d3.extent(g,function(a){return a[h]}),"ordinal"!==b&&_.each([h+"Min",h+"Max"],function(c,g){"time"!==b&&(e=d(f[h])),a.hasOwnProperty(c)&&null!==a[c]?f[h][g]=a[c]:"time"!==b&&(f[h][g]=e[g])})}),f}function f(){var a=document;return!!a.createElementNS&&!!a.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect}function g(a,b,c,d){var e,g=this;return g._options=d=_.defaults(d||{},m),f()===!1?d.unsupported(c):(g._selector=c,g._container=d3.select(c),g._drawSvg(),g._mainStorage={},g._compStorage={},b=_.clone(b),a&&!b.type&&(b.type=a),g.setData(b),void d3.select(window).on("resize.for."+c,function(){e&&clearTimeout(e),e=setTimeout(function(){e=null,g._resize()},500)}))}var g,h={},i={},j={};(function(){var a=this,b=a._,c={},d=Array.prototype,e=Object.prototype,f=Function.prototype,g=d.push,h=d.slice,i=d.concat,j=e.toString,k=e.hasOwnProperty,l=d.forEach,m=d.map,n=d.reduce,o=d.reduceRight,p=d.filter,q=d.every,r=d.some,s=d.indexOf,t=d.lastIndexOf,u=Array.isArray,v=Object.keys,w=f.bind,x=function(a){return a instanceof x?a:this instanceof x?void(this._wrapped=a):new x(a)};"undefined"!=typeof exports?("undefined"!=typeof module&&module.exports&&(exports=module.exports=x),exports._=x):a._=x,x.VERSION="1.4.3";var y=x.each=x.forEach=function(a,b,d){if(null!=a)if(l&&a.forEach===l)a.forEach(b,d);else if(a.length===+a.length){for(var e=0,f=a.length;f>e;e++)if(b.call(d,a[e],e,a)===c)return}else for(var g in a)if(x.has(a,g)&&b.call(d,a[g],g,a)===c)return};x.map=x.collect=function(a,b,c){var d=[];return null==a?d:m&&a.map===m?a.map(b,c):(y(a,function(a,e,f){d[d.length]=b.call(c,a,e,f)}),d)};var z="Reduce of empty array with no initial value";x.reduce=x.foldl=x.inject=function(a,b,c,d){var e=arguments.length>2;if(null==a&&(a=[]),n&&a.reduce===n)return d&&(b=x.bind(b,d)),e?a.reduce(b,c):a.reduce(b);if(y(a,function(a,f,g){e?c=b.call(d,c,a,f,g):(c=a,e=!0)}),!e)throw new TypeError(z);return c},x.reduceRight=x.foldr=function(a,b,c,d){var e=arguments.length>2;if(null==a&&(a=[]),o&&a.reduceRight===o)return d&&(b=x.bind(b,d)),e?a.reduceRight(b,c):a.reduceRight(b);var f=a.length;if(f!==+f){var g=x.keys(a);f=g.length}if(y(a,function(h,i,j){i=g?g[--f]:--f,e?c=b.call(d,c,a[i],i,j):(c=a[i],e=!0)}),!e)throw new TypeError(z);return c},x.find=x.detect=function(a,b,c){var d;return A(a,function(a,e,f){return b.call(c,a,e,f)?(d=a,!0):void 0}),d},x.filter=x.select=function(a,b,c){var d=[];return null==a?d:p&&a.filter===p?a.filter(b,c):(y(a,function(a,e,f){b.call(c,a,e,f)&&(d[d.length]=a)}),d)},x.reject=function(a,b,c){return x.filter(a,function(a,d,e){return!b.call(c,a,d,e)},c)},x.every=x.all=function(a,b,d){b||(b=x.identity);var e=!0;return null==a?e:q&&a.every===q?a.every(b,d):(y(a,function(a,f,g){return(e=e&&b.call(d,a,f,g))?void 0:c}),!!e)};var A=x.some=x.any=function(a,b,d){b||(b=x.identity);var e=!1;return null==a?e:r&&a.some===r?a.some(b,d):(y(a,function(a,f,g){return e||(e=b.call(d,a,f,g))?c:void 0}),!!e)};x.contains=x.include=function(a,b){return null==a?!1:s&&a.indexOf===s?-1!=a.indexOf(b):A(a,function(a){return a===b})},x.invoke=function(a,b){var c=h.call(arguments,2);return x.map(a,function(a){return(x.isFunction(b)?b:a[b]).apply(a,c)})},x.pluck=function(a,b){return x.map(a,function(a){return a[b]})},x.where=function(a,b){return x.isEmpty(b)?[]:x.filter(a,function(a){for(var c in b)if(b[c]!==a[c])return!1;return!0})},x.max=function(a,b,c){if(!b&&x.isArray(a)&&a[0]===+a[0]&&65535>a.length)return Math.max.apply(Math,a);if(!b&&x.isEmpty(a))return-1/0;var d={computed:-1/0,value:-1/0};return y(a,function(a,e,f){var g=b?b.call(c,a,e,f):a;g>=d.computed&&(d={value:a,computed:g})}),d.value},x.min=function(a,b,c){if(!b&&x.isArray(a)&&a[0]===+a[0]&&65535>a.length)return Math.min.apply(Math,a);if(!b&&x.isEmpty(a))return 1/0;var d={computed:1/0,value:1/0};return y(a,function(a,e,f){var g=b?b.call(c,a,e,f):a;d.computed>g&&(d={value:a,computed:g})}),d.value},x.shuffle=function(a){var b,c=0,d=[];return y(a,function(a){b=x.random(c++),d[c-1]=d[b],d[b]=a}),d};var B=function(a){return x.isFunction(a)?a:function(b){return b[a]}};x.sortBy=function(a,b,c){var d=B(b);return x.pluck(x.map(a,function(a,b,e){return{value:a,index:b,criteria:d.call(c,a,b,e)}}).sort(function(a,b){var c=a.criteria,d=b.criteria;if(c!==d){if(c>d||void 0===c)return 1;if(d>c||void 0===d)return-1}return a.index<b.index?-1:1}),"value")};var C=function(a,b,c,d){var e={},f=B(b||x.identity);return y(a,function(b,g){var h=f.call(c,b,g,a);d(e,h,b)}),e};x.groupBy=function(a,b,c){return C(a,b,c,function(a,b,c){(x.has(a,b)?a[b]:a[b]=[]).push(c)})},x.countBy=function(a,b,c){return C(a,b,c,function(a,b){x.has(a,b)||(a[b]=0),a[b]++})},x.sortedIndex=function(a,b,c,d){c=null==c?x.identity:B(c);for(var e=c.call(d,b),f=0,g=a.length;g>f;){var h=f+g>>>1;e>c.call(d,a[h])?f=h+1:g=h}return f},x.toArray=function(a){return a?x.isArray(a)?h.call(a):a.length===+a.length?x.map(a,x.identity):x.values(a):[]},x.size=function(a){return null==a?0:a.length===+a.length?a.length:x.keys(a).length},x.first=x.head=x.take=function(a,b,c){return null==a?void 0:null==b||c?a[0]:h.call(a,0,b)},x.initial=function(a,b,c){return h.call(a,0,a.length-(null==b||c?1:b))},x.last=function(a,b,c){return null==a?void 0:null==b||c?a[a.length-1]:h.call(a,Math.max(a.length-b,0))},x.rest=x.tail=x.drop=function(a,b,c){return h.call(a,null==b||c?1:b)},x.compact=function(a){return x.filter(a,x.identity)};var D=function(a,b,c){return y(a,function(a){x.isArray(a)?b?g.apply(c,a):D(a,b,c):c.push(a)}),c};x.flatten=function(a,b){return D(a,b,[])},x.without=function(a){return x.difference(a,h.call(arguments,1))},x.uniq=x.unique=function(a,b,c,d){x.isFunction(b)&&(d=c,c=b,b=!1);var e=c?x.map(a,c,d):a,f=[],g=[];return y(e,function(c,d){(b?d&&g[g.length-1]===c:x.contains(g,c))||(g.push(c),f.push(a[d]))}),f},x.union=function(){return x.uniq(i.apply(d,arguments))},x.intersection=function(a){var b=h.call(arguments,1);return x.filter(x.uniq(a),function(a){return x.every(b,function(b){return x.indexOf(b,a)>=0})})},x.difference=function(a){var b=i.apply(d,h.call(arguments,1));return x.filter(a,function(a){return!x.contains(b,a)})},x.zip=function(){for(var a=h.call(arguments),b=x.max(x.pluck(a,"length")),c=Array(b),d=0;b>d;d++)c[d]=x.pluck(a,""+d);return c},x.object=function(a,b){if(null==a)return{};for(var c={},d=0,e=a.length;e>d;d++)b?c[a[d]]=b[d]:c[a[d][0]]=a[d][1];return c},x.indexOf=function(a,b,c){if(null==a)return-1;var d=0,e=a.length;if(c){if("number"!=typeof c)return d=x.sortedIndex(a,b),a[d]===b?d:-1;d=0>c?Math.max(0,e+c):c}if(s&&a.indexOf===s)return a.indexOf(b,c);for(;e>d;d++)if(a[d]===b)return d;return-1},x.lastIndexOf=function(a,b,c){if(null==a)return-1;var d=null!=c;if(t&&a.lastIndexOf===t)return d?a.lastIndexOf(b,c):a.lastIndexOf(b);for(var e=d?c:a.length;e--;)if(a[e]===b)return e;return-1},x.range=function(a,b,c){1>=arguments.length&&(b=a||0,a=0),c=arguments[2]||1;for(var d=Math.max(Math.ceil((b-a)/c),0),e=0,f=Array(d);d>e;)f[e++]=a,a+=c;return f};var E=function(){};x.bind=function(a,b){var c,d;if(a.bind===w&&w)return w.apply(a,h.call(arguments,1));if(!x.isFunction(a))throw new TypeError;return c=h.call(arguments,2),d=function(){if(!(this instanceof d))return a.apply(b,c.concat(h.call(arguments)));E.prototype=a.prototype;var e=new E;E.prototype=null;var f=a.apply(e,c.concat(h.call(arguments)));return Object(f)===f?f:e}},x.bindAll=function(a){var b=h.call(arguments,1);return 0==b.length&&(b=x.functions(a)),y(b,function(b){a[b]=x.bind(a[b],a)}),a},x.memoize=function(a,b){var c={};return b||(b=x.identity),function(){var d=b.apply(this,arguments);return x.has(c,d)?c[d]:c[d]=a.apply(this,arguments)}},x.delay=function(a,b){var c=h.call(arguments,2);return setTimeout(function(){return a.apply(null,c)},b)},x.defer=function(a){return x.delay.apply(x,[a,1].concat(h.call(arguments,1)))},x.throttle=function(a,b){var c,d,e,f,g=0,h=function(){g=new Date,e=null,f=a.apply(c,d)};return function(){var i=new Date,j=b-(i-g);return c=this,d=arguments,0>=j?(clearTimeout(e),e=null,g=i,f=a.apply(c,d)):e||(e=setTimeout(h,j)),f}},x.debounce=function(a,b,c){var d,e;return function(){var f=this,g=arguments,h=function(){d=null,c||(e=a.apply(f,g))},i=c&&!d;return clearTimeout(d),d=setTimeout(h,b),i&&(e=a.apply(f,g)),e}},x.once=function(a){var b,c=!1;return function(){return c?b:(c=!0,b=a.apply(this,arguments),a=null,b)}},x.wrap=function(a,b){return function(){var c=[a];return g.apply(c,arguments),b.apply(this,c)}},x.compose=function(){var a=arguments;return function(){for(var b=arguments,c=a.length-1;c>=0;c--)b=[a[c].apply(this,b)];return b[0]}},x.after=function(a,b){return 0>=a?b():function(){return 1>--a?b.apply(this,arguments):void 0}},x.keys=v||function(a){if(a!==Object(a))throw new TypeError("Invalid object");var b=[];for(var c in a)x.has(a,c)&&(b[b.length]=c);return b},x.values=function(a){var b=[];for(var c in a)x.has(a,c)&&b.push(a[c]);return b},x.pairs=function(a){var b=[];for(var c in a)x.has(a,c)&&b.push([c,a[c]]);return b},x.invert=function(a){var b={};for(var c in a)x.has(a,c)&&(b[a[c]]=c);return b},x.functions=x.methods=function(a){var b=[];for(var c in a)x.isFunction(a[c])&&b.push(c);return b.sort()},x.extend=function(a){return y(h.call(arguments,1),function(b){if(b)for(var c in b)a[c]=b[c]}),a},x.pick=function(a){var b={},c=i.apply(d,h.call(arguments,1));return y(c,function(c){c in a&&(b[c]=a[c])}),b},x.omit=function(a){var b={},c=i.apply(d,h.call(arguments,1));for(var e in a)x.contains(c,e)||(b[e]=a[e]);return b},x.defaults=function(a){return y(h.call(arguments,1),function(b){if(b)for(var c in b)null==a[c]&&(a[c]=b[c])}),a},x.clone=function(a){return x.isObject(a)?x.isArray(a)?a.slice():x.extend({},a):a},x.tap=function(a,b){return b(a),a};var F=function(a,b,c,d){if(a===b)return 0!==a||1/a==1/b;if(null==a||null==b)return a===b;a instanceof x&&(a=a._wrapped),b instanceof x&&(b=b._wrapped);var e=j.call(a);if(e!=j.call(b))return!1;switch(e){case"[object String]":return a==b+"";case"[object Number]":return a!=+a?b!=+b:0==a?1/a==1/b:a==+b;case"[object Date]":case"[object Boolean]":return+a==+b;case"[object RegExp]":return a.source==b.source&&a.global==b.global&&a.multiline==b.multiline&&a.ignoreCase==b.ignoreCase}if("object"!=typeof a||"object"!=typeof b)return!1;for(var f=c.length;f--;)if(c[f]==a)return d[f]==b;c.push(a),d.push(b);var g=0,h=!0;if("[object Array]"==e){if(g=a.length,h=g==b.length)for(;g--&&(h=F(a[g],b[g],c,d)););}else{var i=a.constructor,k=b.constructor;if(i!==k&&!(x.isFunction(i)&&i instanceof i&&x.isFunction(k)&&k instanceof k))return!1;for(var l in a)if(x.has(a,l)&&(g++,!(h=x.has(b,l)&&F(a[l],b[l],c,d))))break;if(h){for(l in b)if(x.has(b,l)&&!g--)break;h=!g}}return c.pop(),d.pop(),h};x.isEqual=function(a,b){return F(a,b,[],[])},x.isEmpty=function(a){if(null==a)return!0;if(x.isArray(a)||x.isString(a))return 0===a.length;for(var b in a)if(x.has(a,b))return!1;return!0},x.isElement=function(a){return!(!a||1!==a.nodeType)},x.isArray=u||function(a){return"[object Array]"==j.call(a)},x.isObject=function(a){return a===Object(a)},y(["Arguments","Function","String","Number","Date","RegExp"],function(a){x["is"+a]=function(b){return j.call(b)=="[object "+a+"]"}}),x.isArguments(arguments)||(x.isArguments=function(a){return!(!a||!x.has(a,"callee"))}),x.isFunction=function(a){return"function"==typeof a},x.isFinite=function(a){return isFinite(a)&&!isNaN(parseFloat(a))},x.isNaN=function(a){return x.isNumber(a)&&a!=+a},x.isBoolean=function(a){return a===!0||a===!1||"[object Boolean]"==j.call(a)},x.isNull=function(a){return null===a},x.isUndefined=function(a){return void 0===a},x.has=function(a,b){return k.call(a,b)},x.noConflict=function(){return a._=b,this},x.identity=function(a){return a},x.times=function(a,b,c){for(var d=Array(a),e=0;a>e;e++)d[e]=b.call(c,e);return d},x.random=function(a,b){return null==b&&(b=a,a=0),a+(0|Math.random()*(b-a+1))};var G={escape:{"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;","/":"&#x2F;"}};G.unescape=x.invert(G.escape);var H={escape:RegExp("["+x.keys(G.escape).join("")+"]","g"),unescape:RegExp("("+x.keys(G.unescape).join("|")+")","g")};x.each(["escape","unescape"],function(a){x[a]=function(b){return null==b?"":(""+b).replace(H[a],function(b){return G[a][b]})}}),x.result=function(a,b){if(null==a)return null;var c=a[b];return x.isFunction(c)?c.call(a):c},x.mixin=function(a){y(x.functions(a),function(b){var c=x[b]=a[b];x.prototype[b]=function(){var a=[this._wrapped];return g.apply(a,arguments),M.call(this,c.apply(x,a))}})};var I=0;x.uniqueId=function(a){var b=""+ ++I;return a?a+b:b},x.templateSettings={evaluate:/<%([\s\S]+?)%>/g,interpolate:/<%=([\s\S]+?)%>/g,escape:/<%-([\s\S]+?)%>/g};var J=/(.)^/,K={"'":"'","\\":"\\","\r":"r","\n":"n","	":"t","\u2028":"u2028","\u2029":"u2029"},L=/\\|'|\r|\n|\t|\u2028|\u2029/g;x.template=function(a,b,c){c=x.defaults({},c,x.templateSettings);var d=RegExp([(c.escape||J).source,(c.interpolate||J).source,(c.evaluate||J).source].join("|")+"|$","g"),e=0,f="__p+='";a.replace(d,function(b,c,d,g,h){return f+=a.slice(e,h).replace(L,function(a){return"\\"+K[a]}),c&&(f+="'+\n((__t=("+c+"))==null?'':_.escape(__t))+\n'"),d&&(f+="'+\n((__t=("+d+"))==null?'':__t)+\n'"),g&&(f+="';\n"+g+"\n__p+='"),e=h+b.length,b}),f+="';\n",c.variable||(f="with(obj||{}){\n"+f+"}\n"),f="var __t,__p='',__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,'');};\n"+f+"return __p;\n";try{var g=Function(c.variable||"obj","_",f)}catch(h){throw h.source=f,h}if(b)return g(b,x);var i=function(a){return g.call(this,a,x)};return i.source="function("+(c.variable||"obj")+"){\n"+f+"}",i},x.chain=function(a){return x(a).chain()};var M=function(a){return this._chain?x(a).chain():a};x.mixin(x),y(["pop","push","reverse","shift","sort","splice","unshift"],function(a){var b=d[a];x.prototype[a]=function(){var c=this._wrapped;return b.apply(c,arguments),"shift"!=a&&"splice"!=a||0!==c.length||delete c[0],M.call(this,c)}}),y(["concat","join","slice"],function(a){var b=d[a];x.prototype[a]=function(){return M.call(this,b.apply(this._wrapped,arguments))}}),x.extend(x.prototype,{chain:function(){return this._chain=!0,this},value:function(){return this._wrapped}})}).call(this),j={getInsertionPoint:a,colorClass:b};var k=.25;i.ordinal=function(a,b,d,e){var f=c(a,b);return d3.scale.ordinal().domain(f).rangeRoundBands(d,k)},i.linear=function(a,b,c,d){return d3.scale.linear().domain(d).nice().rangeRound(c)},i.exponential=function(a,b,c,d){return d3.scale.pow().exponent(.65).domain(d).nice().rangeRound(c)},i.time=function(a,b,c,d){return d3.time.scale().domain(_.map(d,function(a){return new Date(a)})).range(c)},i.xy=function(a,b,c,d){var f=a._options,h=e(f,b,c,d),i={},j=[f.axisPaddingLeft,a._width],k=[a._height,f.axisPaddingTop];return _.each([c,d],function(a,c){var d=0===c?"x":"y",e=0===c?j:k,f=g.getScale(a);i[d]=f(b,d,e,h[d])}),i},function(){function a(a,b,c,d){a.xScale2=d3.scale.ordinal().domain(d3.range(0,c.length)).rangeRoundBands([0,a.xScale.rangeBand()],.08)}function b(a,b,c,d,e){var h,k,l=a.yZero;h=a._g.selectAll(g+c).data(d,function(a){return a.className}),h.enter().insert("g",i).attr("data-index",f).style("opacity",0).attr("class",function(a,b){var d=_.uniq((c+a.className).split(".")).join(" ");return d+" bar "+j.colorClass(this,b)}).attr("transform",function(b,c){return"translate("+a.xScale2(c)+",0)"}),k=h.selectAll("rect").data(function(a){return a.data},function(a){return a.x}),k.enter().append("rect").attr("width",0).attr("rx",3).attr("ry",3).attr("x",function(b){return a.xScale(b.x)+a.xScale2.rangeBand()/2}).attr("height",function(b){return Math.abs(l-a.yScale(b.y))}).attr("y",function(b){return b.y<0?l:a.yScale(b.y)}).on("mouseover",e.mouseover).on("mouseout",e.mouseout).on("click",e.click),b.barGroups=h,b.bars=k}function c(a,b,c){var d=a.yZero;b.barGroups.attr("class",function(a,b){return j.colorClass(this,b)}).transition().duration(c).style("opacity",1).attr("transform",function(b,c){return"translate("+a.xScale2(c)+",0)"}),b.bars.transition().duration(c).attr("width",a.xScale2.rangeBand()).attr("x",function(b){return a.xScale(b.x)}).attr("height",function(b){return Math.abs(d-a.yScale(b.y))}).attr("y",function(b){return b.y<0?d:a.yScale(b.y)})}function d(a,b,c){b.bars.exit().transition().duration(c).attr("width",0).remove(),b.barGroups.exit().transition().duration(c).style("opacity",0).remove()}function e(a,b,c){var d=a.xScale2?a.xScale2.rangeBand()/2:0;delete a.xScale2,b.bars.transition().duration(c).attr("width",0).attr("x",function(b){return a.xScale(b.x)+d})}var f=2,g="g.bar",i=j.getInsertionPoint(f);h.bar={postUpdateScale:a,enter:b,update:c,exit:d,destroy:e}}(),function(){function a(a,b,c,d,h){function i(a){return[a.data]}var k,l,m,n=a._options.interpolation,o=function(b,c){return a.xScale2||a.xScale.rangeBand?a.xScale(b.x)+a.xScale.rangeBand()/2:a.xScale(b.x)},p=function(b){return a.yScale(b.y)},q=d3.svg.line().x(o).interpolate(n),r=d3.svg.area().x(o).y1(a.yZero).interpolate(n);k=a._g.selectAll(f+c).data(d,function(a){return a.className}),k.enter().insert("g",g).attr("data-index",e).attr("class",function(a,b){var d=_.uniq((c+a.className).split(".")).join(" ");return d+" line "+j.colorClass(this,b)}),l=k.selectAll("path.fill").data(i),l.enter().append("path").attr("class","fill").style("opacity",0).attr("d",r.y0(p)),m=k.selectAll("path.line").data(i),m.enter().append("path").attr("class","line").style("opacity",0).attr("d",q.y(p)),b.lineContainers=k,b.lineFills=l,b.linePaths=m,b.lineX=o,b.lineY=p,b.lineA=r,b.line=q}function b(a,b,c){b.lineContainers.attr("class",function(a,b){return j.colorClass(this,b)}),b.lineFills.transition().duration(c).style("opacity",1).attr("d",b.lineA.y0(b.lineY)),b.linePaths.transition().duration(c).style("opacity",1).attr("d",b.line.y(b.lineY))}function c(a,b){b.linePaths.exit().style("opacity",0).remove(),b.lineFills.exit().style("opacity",0).remove(),b.lineContainers.exit().remove()}function d(a,b,c){b.linePaths.transition().duration(c).style("opacity",0),b.lineFills.transition().duration(c).style("opacity",0)}var e=3,f="g.line",g=j.getInsertionPoint(e);h.line={enter:a,update:b,exit:c,destroy:d}}(),function(){function a(a,b,c,d,f){var g;e.enter(a,b,c,d,f),g=b.lineContainers.selectAll("circle").data(function(a){return a.data},function(a){return a.x}),g.enter().append("circle").style("opacity",0).attr("cx",b.lineX).attr("cy",b.lineY).attr("r",5).on("mouseover",f.mouseover).on("mouseout",f.mouseout).on("click",f.click),b.lineCircles=g}function b(a,b,c){e.update.apply(null,_.toArray(arguments)),b.lineCircles.transition().duration(c).style("opacity",1).attr("cx",b.lineX).attr("cy",b.lineY)}function c(a,b){b.lineCircles.exit().remove(),e.exit.apply(null,_.toArray(arguments))}function d(a,b,c){e.destroy.apply(null,_.toArray(arguments)),b.lineCircles&&b.lineCircles.transition().duration(c).style("opacity",0)}var e=h.line;h["line-dotted"]={enter:a,update:b,exit:c,destroy:d}}(),function(){function a(a,b,c,d,e){f.enter(a,b,c,d,e)}function b(a){function b(a,b){return a+b.y}var c=_.map(a,function(a){var c=a.data.length,d=_.clone(a.data);for(a=_.clone(a);c;)c-=1,d[c]=_.clone(a.data[c]),d[c].y0=a.data[c].y,d[c].y=_.reduce(_.first(a.data,c),b,a.data[c].y);return _.extend(a,{data:d})});return c}function c(a){a.hasOwnProperty("cumulativeOMainData")&&(a._mainData=a.cumulativeOMainData,delete a.cumulativeOMainData,a._compData=a.cumulativeOCompData,delete a.cumulativeOCompData)}function d(a,d){c(a),a.cumulativeOMainData=a._mainData,a._mainData=b(a._mainData),a.cumulativeOCompData=a._compData,a._compData=b(a._compData)}function e(a,b,d){c(a),f.destroy.apply(null,_.toArray(arguments))}var f=h["line-dotted"];h.cumulative={preUpdateScale:d,enter:a,update:f.update,exit:f.exit,destroy:e}}();var l=[[]],m={mouseover:function(a,b){},mouseout:function(a,b){},click:function(a,b){},axisPaddingTop:0,axisPaddingRight:0,axisPaddingBottom:5,axisPaddingLeft:20,paddingTop:0,paddingRight:0,paddingBottom:20,paddingLeft:60,tickHintX:10,tickFormatX:function(a){return a},tickHintY:10,tickFormatY:function(a){return a},xMin:null,xMax:null,yMin:null,yMax:null,dataFormatX:function(a){return a},dataFormatY:function(a){return a},unsupported:function(a){d3.select(a).text("SVG is not supported on your browser")},empty:function(a,b,c){},notempty:function(a,b){},timing:750,interpolation:"monotone",sortX:function(a,b){return a.x||b.x?a.x<b.x?-1:1:0}};return g.setVis=function(a,b){if(h.hasOwnProperty(a))throw'Cannot override vis type "'+a+'".';h[a]=b},g.getVis=function(a){if(!h.hasOwnProperty(a))throw'Vis type "'+a+'" does not exist.';return _.clone(h[a])},g.setScale=function(a,b){if(i.hasOwnProperty(a))throw'Scale type "'+a+'" already exists.';i[a]=b},g.getScale=function(a){if(!i.hasOwnProperty(a))throw'Scale type "'+a+'" does not exist.';return i[a]},g.visutils=j,_.defaults(g.prototype,{setType:function(a,b){var c=this;if(!c._type||a!==c._type){if(!h.hasOwnProperty(a))throw'Vis type "'+a+'" is not defined.';c._type&&c._destroy(c._vis,c._mainStorage),c._type=a,c._vis=h[a],b||c._draw()}},setData:function(a){function b(a){var b=_.map(_.clone(a.data),function(a){var b=_.clone(a);return a.hasOwnProperty("x")&&(b.x=d.dataFormatX(a.x)),a.hasOwnProperty("y")&&(b.y=d.dataFormatY(a.y)),b}).sort(d.sortX);return _.extend(_.clone(a),{data:b})}var c=this,d=c._options,e=_.clone(a);if(!a.hasOwnProperty("main"))throw'No "main" key found in given chart data.';switch(a.type){case"bar":a.xScale="ordinal";break;case void 0:a.type=c._type}d.xMin=isNaN(parseInt(a.xMin,10))?d.xMin:a.xMin,d.xMax=isNaN(parseInt(a.xMax,10))?d.xMax:a.xMax,d.yMin=isNaN(parseInt(a.yMin,10))?d.yMin:a.yMin,d.yMax=isNaN(parseInt(a.yMax,10))?d.yMax:a.yMax,c._vis&&c._destroy(c._vis,c._mainStorage),c.setType(a.type,!0),e.main=_.map(e.main,b),c._mainData=e.main,c._xScaleType=e.xScale,c._yScaleType=e.yScale,e.hasOwnProperty("comp")?(e.comp=_.map(e.comp,b),c._compData=e.comp):c._compData=[],c._draw()},setScale:function(a,b){var c=this;switch(a){case"x":c._xScaleType=b;break;case"y":c._yScaleType=b;break;default:throw'Cannot change scale of unknown axis "'+a+'".'}c._draw()},_drawSvg:function(){var a,b,c,d=this,e=d._container,f=d._options,g=parseInt(e.style("width").replace("px",""),10),h=parseInt(e.style("height").replace("px",""),10);a=e.selectAll("svg").data(l),a.enter().append("svg").attr("height",h).attr("width",g).attr("class","xchart"),a.transition().attr("width",g).attr("height",h),b=a.selectAll("g").data(l),b.enter().append("g").attr("transform","translate("+f.paddingLeft+","+f.paddingTop+")"),c=b.selectAll("g.scale").data(l),c.enter().append("g").attr("class","scale"),d._svg=a,d._g=b,d._gScale=c,d._height=h-f.paddingTop-f.paddingBottom-f.axisPaddingTop-f.axisPaddingBottom,d._width=g-f.paddingLeft-f.paddingRight-f.axisPaddingLeft-f.axisPaddingRight},_resize:function(a){var b=this;b._drawSvg(),b._draw()},_drawAxes:function(){if(!this._noData){var a,b,c,d,e,f,g,h=this,i=h._options,j=h._gScale.transition().duration(i.timing),k=i.tickHintX,m=i.tickHintY,n=h._height+i.axisPaddingTop+i.axisPaddingBottom;d3.svg.line().x(function(a){return a});d=d3.svg.axis().scale(h.xScale).ticks(k).tickSize(-h._height).tickFormat(i.tickFormatX).orient("bottom"),c=h._gScale.selectAll("g.axisX").data(l),c.enter().append("g").attr("class","axis axisX").attr("transform","translate(0,"+n+")"),c.call(d),g=h._gScale.selectAll(".axisX g")[0],g.length>h._width/80&&(g.sort(function(a,b){var c=/translate\(([^,)]+)/;return a=a.getAttribute("transform").match(c),b=b.getAttribute("transform").match(c),parseFloat(a[1],10)-parseFloat(b[1],10)}),d3.selectAll(g).filter(function(a,b){return b%(Math.ceil(g.length/k)+1)}).remove()),f=d3.svg.axis().scale(h.yScale).ticks(m).tickSize(-h._width-i.axisPaddingRight-i.axisPaddingLeft).tickFormat(i.tickFormatY).orient("left"),e=h._gScale.selectAll("g.axisY").data(l),e.enter().append("g").attr("class","axis axisY").attr("transform","translate(0,0)"),j.selectAll("g.axisY").call(f),a=h._gScale.selectAll("g.axisZero").data([[]]),a.enter().append("g").attr("class","axisZero"),b=a.selectAll("line").data([[]]),b.enter().append("line").attr("x1",0).attr("x2",h._width+i.axisPaddingLeft+i.axisPaddingRight).attr("y1",h.yZero).attr("y2",h.yZero),b.transition().duration(i.timing).attr("y1",h.yZero).attr("y2",h.yZero)}},_updateScale:function(){var a,b,c=this,d=function(){return _.union(c._mainData,c._compData)},e=d(),f=c._vis;delete c.xScale,delete c.yScale,delete c.yZero,f.hasOwnProperty("preUpdateScale")&&f.preUpdateScale(c,e,c._mainData,c._compData),e=d(),a=i.xy(c,e,c._xScaleType,c._yScaleType),c.xScale=a.x,c.yScale=a.y,b=c.yScale.domain()[0],c.yZero=b>0?c.yScale(b):c.yScale(0),f.hasOwnProperty("postUpdateScale")&&f.postUpdateScale(c,e,c._mainData,c._compData)},_enter:function(a,b,c,d){var e=this,f={click:e._options.click,mouseover:e._options.mouseover,mouseout:e._options.mouseout};e._checkVisMethod(a,"enter"),a.enter(e,b,d,c,f)},_update:function(a,b){var c=this;c._checkVisMethod(a,"update"),a.update(c,b,c._options.timing)},_exit:function(a,b){var c=this;c._checkVisMethod(a,"exit"),a.exit(c,b,c._options.timing)},_destroy:function(a,b){var c=this;c._checkVisMethod(a,"destroy");try{a.destroy(c,b,c._options.timing)}catch(d){}},_draw:function(){var a,b,c=this,d=c._options;c._noData=0===_.flatten(_.pluck(c._mainData,"data").concat(_.pluck(c._compData,"data"))).length,c._updateScale(),c._drawAxes(),c._enter(c._vis,c._mainStorage,c._mainData,".main"),c._exit(c._vis,c._mainStorage),c._update(c._vis,c._mainStorage),a=_.chain(c._compData).groupBy(function(a){return a.type}),b=a.keys(),_.each(c._compStorage,function(a,d){if(-1===b.indexOf(d).value()){var e=h[d];c._enter(e,a,[],".comp."+d.replace(/\W+/g,"")),c._exit(e,a)}}),a.each(function(a,b){var d,e=h[b];c._compStorage.hasOwnProperty(b)||(c._compStorage[b]={}),d=c._compStorage[b],c._enter(e,d,a,".comp."+b.replace(/\W+/g,"")),c._exit(e,d),c._update(e,d)}),c._noData?d.empty(c,c._selector,c._mainData):d.notempty(c,c._selector)},_checkVisMethod:function(a,b){var c=this;if(!a[b])throw'Required method "'+b+'" not found on vis type "'+c._type+'".'}}),"function"==typeof define&&define.amd&&"object"==typeof define.amd?void define(function(){return g}):void(window.xChart=g)}();