(self.webpackChunk_mercury_child_wp=self.webpackChunk_mercury_child_wp||[]).push([[694],{6037:(t,e,n)=>{n.d(e,{oo:()=>L});var i=n(1347),o=n(5983),c=n(7317);function l(t){const e=(0,c.Dx)(t);let n=parseFloat(e.width)||0,o=parseFloat(e.height)||0;const l=(0,c.Re)(t),r=l?t.offsetWidth:n,f=l?t.offsetHeight:o,s=(0,i.NM)(n)!==r||(0,i.NM)(o)!==f;return s&&(n=r,o=f),{width:n,height:o,$:s}}function r(t){return(0,c.kK)(t)?t:t.contextElement}function f(t){const e=r(t);if(!(0,c.Re)(e))return(0,i.ze)(1);const n=e.getBoundingClientRect(),{width:o,height:f,$:s}=l(e);let h=(s?(0,i.NM)(n.width):n.width)/o,u=(s?(0,i.NM)(n.height):n.height)/f;return h&&Number.isFinite(h)||(h=1),u&&Number.isFinite(u)||(u=1),{x:h,y:u}}const s=(0,i.ze)(0);function h(t){const e=(0,c.Jj)(t);return(0,c.Pf)()&&e.visualViewport?{x:e.visualViewport.offsetLeft,y:e.visualViewport.offsetTop}:s}function u(t,e,n,o){void 0===e&&(e=!1),void 0===n&&(n=!1);const l=t.getBoundingClientRect(),s=r(t);let u=(0,i.ze)(1);e&&(o?(0,c.kK)(o)&&(u=f(o)):u=f(t));const d=function(t,e,n){return void 0===e&&(e=!1),!(!n||e&&n!==(0,c.Jj)(t))&&e}(s,n,o)?h(s):(0,i.ze)(0);let p=(l.left+d.x)/u.x,g=(l.top+d.y)/u.y,a=l.width/u.x,x=l.height/u.y;if(s){const t=(0,c.Jj)(s),e=o&&(0,c.kK)(o)?(0,c.Jj)(o):o;let n=t.frameElement;for(;n&&o&&e!==t;){const t=f(n),e=n.getBoundingClientRect(),i=(0,c.Dx)(n),o=e.left+(n.clientLeft+parseFloat(i.paddingLeft))*t.x,l=e.top+(n.clientTop+parseFloat(i.paddingTop))*t.y;p*=t.x,g*=t.y,a*=t.x,x*=t.y,p+=o,g+=l,n=(0,c.Jj)(n).frameElement}}return(0,i.JB)({width:a,height:x,x:p,y:g})}const d=[":popover-open",":modal"];function p(t){let e=!1,n=0,i=0;if(d.forEach((n=>{!function(n){try{e=e||t.matches(n)}catch(t){}}(n)})),e){const e=(0,c.gQ)(t);if(e){const t=e.getBoundingClientRect();n=t.x,i=t.y}}return[e,n,i]}function g(t){return u((0,c.tF)(t)).left+(0,c.Lw)(t).scrollLeft}function a(t,e,n){let o;if("viewport"===e)o=function(t,e){const n=(0,c.Jj)(t),i=(0,c.tF)(t),o=n.visualViewport;let l=i.clientWidth,r=i.clientHeight,f=0,s=0;if(o){l=o.width,r=o.height;const t=(0,c.Pf)();(!t||t&&"fixed"===e)&&(f=o.offsetLeft,s=o.offsetTop)}return{width:l,height:r,x:f,y:s}}(t,n);else if("document"===e)o=function(t){const e=(0,c.tF)(t),n=(0,c.Lw)(t),o=t.ownerDocument.body,l=(0,i.Fp)(e.scrollWidth,e.clientWidth,o.scrollWidth,o.clientWidth),r=(0,i.Fp)(e.scrollHeight,e.clientHeight,o.scrollHeight,o.clientHeight);let f=-n.scrollLeft+g(t);const s=-n.scrollTop;return"rtl"===(0,c.Dx)(o).direction&&(f+=(0,i.Fp)(e.clientWidth,o.clientWidth)-l),{width:l,height:r,x:f,y:s}}((0,c.tF)(t));else if((0,c.kK)(e))o=function(t,e){const n=u(t,!0,"fixed"===e),o=n.top+t.clientTop,l=n.left+t.clientLeft,r=(0,c.Re)(t)?f(t):(0,i.ze)(1);return{width:t.clientWidth*r.x,height:t.clientHeight*r.y,x:l*r.x,y:o*r.y}}(e,n);else{const n=h(t);o={...e,x:e.x-n.x,y:e.y-n.y}}return(0,i.JB)(o)}function x(t,e){const n=(0,c.Ow)(t);return!(n===e||!(0,c.kK)(n)||(0,c.Py)(n))&&("fixed"===(0,c.Dx)(n).position||x(n,e))}function y(t,e,n,o){const l=(0,c.Re)(e),r=(0,c.tF)(e),f="fixed"===n,s=u(t,!0,f,e);let h={scrollLeft:0,scrollTop:0};const d=(0,i.ze)(0);if(l||!l&&!f)if(("body"!==(0,c.wk)(e)||(0,c.ao)(r))&&(h=(0,c.Lw)(e)),l){const t=u(e,!0,f,e);d.x=t.x+e.clientLeft,d.y=t.y+e.clientTop}else r&&(d.x=g(r));let a=s.left+h.scrollLeft-d.x,x=s.top+h.scrollTop-d.y;const[y,w,m]=p(o);return y&&(a+=w,x+=m,l&&(a+=e.clientLeft,x+=e.clientTop)),{x:a,y:x,width:s.width,height:s.height}}function w(t,e){return(0,c.Re)(t)&&"fixed"!==(0,c.Dx)(t).position?e?e(t):t.offsetParent:null}function m(t,e){const n=(0,c.Jj)(t);if(!(0,c.Re)(t))return n;let i=w(t,e);for(;i&&(0,c.Ze)(i)&&"static"===(0,c.Dx)(i).position;)i=w(i,e);return i&&("html"===(0,c.wk)(i)||"body"===(0,c.wk)(i)&&"static"===(0,c.Dx)(i).position&&!(0,c.hT)(i))?n:i||(0,c.gQ)(t)||n}const R={convertOffsetParentRelativeRectToViewportRelativeRect:function(t){let{elements:e,rect:n,offsetParent:o,strategy:l}=t;const r=(0,c.tF)(o),[s]=e?p(e.floating):[!1];if(o===r||s)return n;let h={scrollLeft:0,scrollTop:0},d=(0,i.ze)(1);const g=(0,i.ze)(0),a=(0,c.Re)(o);if((a||!a&&"fixed"!==l)&&(("body"!==(0,c.wk)(o)||(0,c.ao)(r))&&(h=(0,c.Lw)(o)),(0,c.Re)(o))){const t=u(o);d=f(o),g.x=t.x+o.clientLeft,g.y=t.y+o.clientTop}return{width:n.width*d.x,height:n.height*d.y,x:n.x*d.x-h.scrollLeft*d.x+g.x,y:n.y*d.y-h.scrollTop*d.y+g.y}},getDocumentElement:c.tF,getClippingRect:function(t){let{element:e,boundary:n,rootBoundary:o,strategy:l}=t;const r=[..."clippingAncestors"===n?function(t,e){const n=e.get(t);if(n)return n;let i=(0,c.Kx)(t,[],!1).filter((t=>(0,c.kK)(t)&&"body"!==(0,c.wk)(t))),o=null;const l="fixed"===(0,c.Dx)(t).position;let r=l?(0,c.Ow)(t):t;for(;(0,c.kK)(r)&&!(0,c.Py)(r);){const e=(0,c.Dx)(r),n=(0,c.hT)(r);n||"fixed"!==e.position||(o=null),(l?!n&&!o:!n&&"static"===e.position&&o&&["absolute","fixed"].includes(o.position)||(0,c.ao)(r)&&!n&&x(t,r))?i=i.filter((t=>t!==r)):o=e,r=(0,c.Ow)(r)}return e.set(t,i),i}(e,this._c):[].concat(n),o],f=r[0],s=r.reduce(((t,n)=>{const o=a(e,n,l);return t.top=(0,i.Fp)(o.top,t.top),t.right=(0,i.VV)(o.right,t.right),t.bottom=(0,i.VV)(o.bottom,t.bottom),t.left=(0,i.Fp)(o.left,t.left),t}),a(e,f,l));return{width:s.right-s.left,height:s.bottom-s.top,x:s.left,y:s.top}},getOffsetParent:m,getElementRects:async function(t){const e=this.getOffsetParent||m,n=this.getDimensions;return{reference:y(t.reference,await e(t.floating),t.strategy,t.floating),floating:{x:0,y:0,...await n(t.floating)}}},getClientRects:function(t){return Array.from(t.getClientRects())},getDimensions:function(t){const{width:e,height:n}=l(t);return{width:e,height:n}},getScale:f,isElement:c.kK,isRTL:function(t){return"rtl"===(0,c.Dx)(t).direction}},L=(t,e,n)=>{const i=new Map,c={platform:R,...n},l={...c.platform,_c:i};return(0,o.oo)(t,e,{...c,platform:l})}}}]);