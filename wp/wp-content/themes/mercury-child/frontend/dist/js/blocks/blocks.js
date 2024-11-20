<<<<<<< Updated upstream
var e,t={8829:()=>{},2025:()=>{},8529:()=>{},3117:()=>{},477:()=>{},1839:()=>{},2453:()=>{},4783:()=>{},7755:()=>{function e(e){e.offsetHeight<e.scrollHeight||e.offsetWidth<e.scrollWidth?e.closest(".lb-clipping").classList.add("lb-clipping--hidden"):e.closest(".lb-clipping").classList.remove("lb-clipping--hidden","lb-clipping--showed")}document.querySelectorAll(".lb-clipping").forEach((function(t){var n=t.querySelector(".lb-clipping__content"),r=t.querySelector(".lb-clipping__toggle--more"),o=t.querySelector(".lb-clipping__toggle--less");r.addEventListener("click",(function(){t.classList.remove("lb-clipping--hidden"),t.classList.add("lb-clipping--showed")})),o.addEventListener("click",(function(){t.classList.add("lb-clipping--hidden"),t.classList.remove("lb-clipping--showed")})),window.addEventListener("resize",(function(){return e(n)})),e(n)}))},2619:()=>{},6949:()=>{!function(){var e=document.body,t=document.getElementById("cmplz-cookiebanner-container"),n=["age-restriction"];if(t){var r=new MutationObserver((function(){n.some((function(t){return e.classList.contains(t)}))||(setTimeout((function(){e.classList.remove("cb-hide")}),4e3),r.disconnect())}));n.some((function(t){return e.classList.contains(t)}))&&(e.classList.add("cb-hide"),r.observe(e,{attributes:!0,attributeFilter:["class"]}))}}()},5773:()=>{},633:()=>{},7519:()=>{},4341:()=>{},2133:()=>{},4295:()=>{},637:()=>{},1459:()=>{},3461:()=>{},5249:()=>{},3185:()=>{},5576:()=>{},4975:()=>{},7549:()=>{},4597:()=>{},9861:()=>{},4409:()=>{},4209:()=>{},6601:()=>{},2115:(e,t,n)=>{var r=n(467),o=n(4756),i=n.n(o);function l(){(arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.body).querySelectorAll(".lb-promo-button:not(.lb-button--initiated)").forEach((function(e){e.addEventListener("click",(function(){return function(e){return c.apply(this,arguments)}(e)})),e.classList.add("lb-button--initiated")}))}function c(){return(c=(0,r.A)(i().mark((function e(t){var n,r;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(t){e.next=2;break}return e.abrupt("return");case 2:if(e.prev=2,null===(n=navigator)||void 0===n||null===(n=n.clipboard)||void 0===n||!n.writeText){e.next=6;break}return e.next=6,navigator.clipboard.writeText(t.dataset.code);case 6:if(t){e.next=8;break}return e.abrupt("return");case 8:(r=t.querySelector(".lb-button__content")).innerHTML=t.dataset.text,setTimeout((function(){r.innerHTML=t.dataset.code}),2e3),e.next=16;break;case 13:e.prev=13,e.t0=e.catch(2),console.error(e.t0);case 16:case"end":return e.stop()}}),e,null,[[2,13]])})))).apply(this,arguments)}window.initPromoButton=l,l()},3791:()=>{},4069:(e,t,n)=>{var r=n(1236);document.querySelectorAll(".lb-related-posts").forEach((function(e){new r.A(e,{slidesPerView:"auto",spaceBetween:8,freeMode:!0,breakpoints:{768:{slidesPerView:3,freeMode:!1,spaceBetween:20}}})}))},3725:()=>{},8219:(e,t,n)=>{var r=n(4467),o=n(3611),i=n(1236),l=n(9636);function c(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}(0,o.M_)("relinkingList",{callbacks:{initSlider:function(){var e=(0,o.V6)().ref,t=e.querySelector(".lb-relinking-list__slider"),n=e.querySelector(".lb-relinking-list__slider-next"),a=e.querySelector(".lb-relinking-list__slider-prev");new i.A(t,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?c(Object(n),!0).forEach((function(t){(0,r.A)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):c(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({slidesPerView:"auto",modules:[l.Vx],navigation:{nextEl:n,prevEl:a}},e.querySelector(".lb-relinking-list__slider--only-mobile")?{breakpoints:{576:{enabled:!1}}}:{}))}},actions:{showMore:function(){var e;(0,o.SD)().isLimited=!1,null===(e=(0,o.V6)().ref)||void 0===e||e.closest('[data-wp-interactive="relinkingList"]').querySelectorAll(".lb-relinking-item").forEach((function(e){e.hidden=!1,e.style.display=""}))}}})},8274:()=>{function e(){(arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.body).querySelectorAll(".lb-review-card:not(.lb-review-card--initiated)").forEach((function(e){e.querySelectorAll(".lb-review-card__read-more, .lb-review-card__read-less").forEach((function(e){return e.addEventListener("click",t)})),e.classList.add("lb-review-card--initiated")}))}function t(e){var t=e.target.closest(".lb-review-card");t.classList.toggle("lb-review-card--mr_closed"),t.classList.toggle("lb-review-card--mr_expanded")}function n(){(arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.body).querySelectorAll(".lb-compact-casino-bonus-card:not(.lb-compact-casino-bonus-card--initiated)").forEach((function(e){!function(e){var t=e.querySelector(".lb-compact-casino-bonus-card__tc-more");if(t){t.addEventListener("click",r);var n=e.querySelector(".lb-compact-casino-bonus-card__tc-content");n.scrollHeight>n.clientHeight&&(t.style.display=null)}}(e),e.classList.add("lb-compact-casino-bonus-card--initiated")}))}function r(e){e.target.closest(".lb-compact-casino-bonus-card__tc--truncated").classList.remove("lb-compact-casino-bonus-card__tc--truncated"),e.target.style.display="none"}e(),window.CasinoCardsInit=e,window.initCompactReviewBonus=n,n()},6337:()=>{},5087:(e,t,n)=>{var r,o=n(4467),i=n(467),l=n(4756),c=n.n(l),a=n(5373),s=n.n(a),d=(null===(r=document.querySelector('link[rel="https://api.w.org/"]'))||void 0===r?void 0:r.href)||"/wp-json/",u=n(3029),v=n(2901),b=function(){return(0,v.A)((function e(t){var n=this;if((0,u.A)(this,e),(0,o.A)(this,"content",null),(0,o.A)(this,"templateContent",null),(0,o.A)(this,"overlay",null),(0,o.A)(this,"body",null),(0,o.A)(this,"handleEscClose",(function(e){"Escape"===e.key&&n.closeModal()})),"string"==typeof t){var r=document.querySelector(t);if(r instanceof HTMLTemplateElement)this.templateContent=r.content.cloneNode(!0),this.modal=this.templateContent.querySelector(".lb-modal__overlay");else{if(!(r instanceof HTMLElement))throw new Error("Element not found with the provided selector or invalid HTML element.");this.modal=r.cloneNode(!0)}}else if(t instanceof HTMLTemplateElement)this.templateContent=t.content.cloneNode(!0),this.modal=this.templateContent.querySelector(".lb-modal__overlay");else{if(!(t instanceof HTMLElement))throw new Error("Invalid element provided");this.modal=t.cloneNode(!0)}this.setupModal(),this.attachModal()}),[{key:"setupModal",value:function(){var e,t,n=this;document.addEventListener("keydown",this.handleEscClose),null===(e=this.modal.querySelector("[data-close]"))||void 0===e||e.addEventListener("click",(function(){return n.closeModal()})),this.overlay=this.modal,null===(t=this.overlay)||void 0===t||t.addEventListener("click",(function(e){e.target===n.overlay&&n.closeModal()})),this.body=this.modal.querySelector(".lb-modal__body"),this.content=this.modal.querySelector(".lb-modal__content")}},{key:"attachModal",value:function(){document.body.appendChild(this.modal)}},{key:"openModal",value:function(){var e=this;this.modal.classList.remove("lb-modal--animating-out"),this.modal.classList.add("lb-modal--active"),setTimeout((function(){e.modal.classList.add("lb-modal--animating-in"),e.modal.focus(),e.disableScroll()}),60)}},{key:"closeModal",value:function(){var e=this;this.modal.classList.remove("lb-modal--animating-in"),this.modal.classList.add("lb-modal--animating-out"),this.modal.classList.remove("lb-modal--active"),this.enableScroll(),this.modal.addEventListener("transitionend",(function(){return e.destroy()}))}},{key:"destroy",value:function(){this.modal.remove(),document.removeEventListener("keydown",this.handleEscClose)}},{key:"setBody",value:function(e,t){var n=t?this.body.querySelector(t):this.body;n.innerHTML="","string"==typeof e?n.innerHTML=e:n.appendChild(e)}},{key:"setTitle",value:function(e){var t=this.content.querySelector(".lb-modal__title"),n=this.content.querySelector(".lb-modal__subtitle"),r=this.content.querySelector(".lb-modal__header");if(!t){var o='<div class="lb-modal__header">\n      <div class="lb-modal__title">\n      '.concat(e,"\n      </div>\n      ").concat(null!=n&&n.innerHTML?'<div class="lb-modal__subtitle">\n      '.concat(n.innerHTML,"\n      </div>"):"","\n      </div>");null==r||r.remove(),this.content.insertAdjacentHTML("afterbegin",o)}t.innerHTML=e}},{key:"removeTitle",value:function(){var e=this.content.querySelector(".lb-modal__title"),t=this.content.querySelector(".lb-modal__subtitle"),n=this.content.querySelector(".lb-modal__header");e&&!t?null==n||n.remove():e&&e.remove()}},{key:"setSubtitle",value:function(e){var t=this.content.querySelector(".lb-modal__title"),n=this.content.querySelector(".lb-modal__subtitle"),r=this.content.querySelector(".lb-modal__header");if(!n){var o='<div class="lb-modal__header">\n      '.concat(null!=t&&t.innerHTML?'<div class="lb-modal__title">\n      '.concat(t.title,"\n      </div>"):"",'\n    \n       <div class="lb-modal__subtitle">\n      ').concat(e,"\n      </div>\n      </div>");null==r||r.remove(),this.content.insertAdjacentHTML("afterbegin",o)}n.innerHTML=e}},{key:"removeSubtitle",value:function(){var e=this.content.querySelector(".lb-modal__title"),t=this.content.querySelector(".lb-modal__subtitle"),n=this.content.querySelector(".lb-modal__header");!e&&t?null==n||n.remove():t&&t.remove()}},{key:"disableScroll",value:function(){document.body.style.overflow="hidden",document.documentElement.style.scrollbarGutter="stable"}},{key:"enableScroll",value:function(){document.body.style.overflow="",document.documentElement.style.scrollbarGutter=""}}])}(),p=n(1236),f=n(9636);function m(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function h(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?m(Object(n),!0).forEach((function(t){(0,o.A)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):m(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var y,w,_,g=null;function O(e){return S.apply(this,arguments)}function S(){return S=(0,i.A)(c().mark((function e(t){var n,r,o,i,l,a=arguments;return c().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=a.length>1&&void 0!==a[1]?a[1]:1,r=t.querySelector(".lb-review-list__load-more"),o=q(r.dataset.query,{paged:n},x(t)),i=!1,r.classList.add("lb-button--pending"),t.classList.add("lb-review-list--loading"),r.disabled=!0,e.prev=7,e.next=10,L(o);case 10:l=e.sent,E(t,l.html,l.page,l.total_pages),e.next=18;break;case 14:e.prev=14,e.t0=e.catch(7),"AbortError"===e.t0.name&&(i=!0),console.error(e.t0);case 18:if(!i){e.next=20;break}return e.abrupt("return");case 20:t.classList.remove("lb-review-list--loading"),r.classList.remove("lb-button--pending"),r.disabled=!1;case 23:case"end":return e.stop()}}),e,null,[[7,14]])}))),S.apply(this,arguments)}function L(e){return k.apply(this,arguments)}function k(){return(k=(0,i.A)(c().mark((function e(t){var n,r,o;return c().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return null===(n=g)||void 0===n||n.abort(),g=new AbortController,e.next=4,fetch("".concat(d,"aces/v1/html/reviews?").concat(t||""),{signal:g.signal});case 4:return r=e.sent,e.next=7,r.json();case 7:return o=e.sent,e.abrupt("return",o);case 9:case"end":return e.stop()}}),e)})))).apply(this,arguments)}function q(e,t,n){var r,o=s().parse(e);return o.query=h(h({},null===(r=o)||void 0===r?void 0:r.query),t),o=h(h({},o),n),s().stringify(o)}function E(e,t,n,r){var o=e.querySelector(".lb-review-list__list"),i=e.querySelector(".lb-review-list__load-more");1==n&&(o.innerHTML=""),o.insertAdjacentHTML("beforeend",t),window.CasinoCardsInit(o),window.initPromoButton(o),i.dataset.currentPage=n+"",i.dataset.totalPages=r+"",+i.dataset.currentPage>=+i.dataset.totalPages?i.style.display="none":i.style.display=""}function T(){return(T=(0,i.A)(c().mark((function e(t){var n,r,o,i,l,a,s,d,u;return c().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(r=document.querySelector("#ref-review-list"),t&&r){e.next=3;break}return e.abrupt("return");case 3:if(o=t.dataset.refItems,i=t.dataset.type,l=JSON.parse(t.dataset.refConfig),o&&JSON.parse(o).length){e.next=8;break}return e.abrupt("return");case 8:return a=new b(r),l.title&&a.setTitle(l.title),l.subtitle&&a.setSubtitle(l.subtitle),l.hideTitle&&a.removeTitle(),l.hideSubtitle&&a.removeSubtitle(),a.openModal(),s=JSON.parse(o),d=null!==(n=l.limit)&&void 0!==n?n:-1,e.next=18,L(q("",{post__in:s,post_type:i,post_status:["publish","draft","private"],posts_per_page:d,orderby:-1!=d&&s.length>d?"rand":""},{card_variant:"compact-bet"}));case 18:u=e.sent,a.setBody(u.html,".lb-review-list__list"),window.initCompactReviewBonus(a.modal);case 21:case"end":return e.stop()}}),e)})))).apply(this,arguments)}function x(e){var t=e.querySelector(".lb-review-list__cat-filter");return t?Object.fromEntries(new FormData(t)):{}}y=document.querySelectorAll(".lb-review-list__load-more"),w=document.querySelectorAll(".lb-review-list__cat-filter"),_=document.querySelectorAll(".lb-review-list"),y.forEach((function(e){e.addEventListener("click",(function(){!function(e){var t=e.querySelector(".lb-review-list__load-more");O(e,(+t.dataset.currentPage||1)+1)}(e.closest(".lb-review-list"))}))})),w.forEach((function(e){e.addEventListener("change",(function(){O(e.closest(".lb-review-list"),1)}))})),_.forEach((function(e){e.addEventListener("click",(function(t){t.target.closest("button.lb-review-card__play")&&function(e){T.apply(this,arguments)}(e)})),function(e){var t=e.querySelector(".lb-review-list__cat-filter > .swiper");if(t){var n=e.querySelector(".lb-review-list__cat-filter-nav-next"),r=e.querySelector(".lb-review-list__cat-filter-nav-prev");new p.A(t,{slidesPerView:"auto",spaceBetween:0,modules:[f.Vx],navigation:{nextEl:n,prevEl:r}})}}(e)}))},5133:()=>{!function(){var e=document.querySelector(".lb-scroll-to-top"),t=document.querySelector(".lb-scroll-to-top .lb-button");function n(){(document.documentElement.scrollTop||document.body.scrollTop)>=1e3?e.classList.remove("lb-scroll-to-top--hidden"):e.classList.add("lb-scroll-to-top--hidden")}t&&(t.addEventListener("click",(function(){window.scrollTo({top:0,left:0,behavior:"smooth"})})),window.addEventListener("scroll",n),n())}()},8445:(e,t,n)=>{var r=n(467),o=n(4756),i=n.n(o);function l(){return l=(0,r.A)(i().mark((function e(){var t;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if((t=document.querySelectorAll(".lb-share-links__copy")).length){e.next=3;break}return e.abrupt("return");case 3:t.forEach((function(e){var t=!1;e.addEventListener("click",function(){var n=(0,r.A)(i().mark((function n(r){var o,l;return i().wrap((function(n){for(;;)switch(n.prev=n.next){case 0:if(r.preventDefault(),!t){n.next=3;break}return n.abrupt("return");case 3:if(t=!0,n.prev=4,null===(o=navigator)||void 0===o||null===(o=o.clipboard)||void 0===o||!o.writeText){n.next=8;break}return n.next=8,navigator.clipboard.writeText(e.dataset.href);case 8:l=e.innerHTML,e.innerHTML=l.replace("icon-link","icon-check"),setTimeout((function(){e.innerHTML=l,t=!1}),1500),n.next=16;break;case 13:n.prev=13,n.t0=n.catch(4),console.error(n.t0);case 16:case"end":return n.stop()}}),n,null,[[4,13]])})));return function(e){return n.apply(this,arguments)}}())}));case 4:case"end":return e.stop()}}),e)}))),l.apply(this,arguments)}!function(){l.apply(this,arguments)}()},8065:()=>{},9429:()=>{},3545:()=>{},6421:()=>{},8841:()=>{},9477:(e,t,n)=>{var r=n(4506);document.querySelectorAll(".ez-toc-link").forEach((function(e){e.addEventListener("click",(function(t){t.preventDefault();var n=(0,r.A)(document.querySelectorAll("h1,h2,h3,h4,h5,h6")).find((function(t){return t.textContent.includes(e.textContent)}));if(n){var o=document.querySelector(".lb-header"),i=document.querySelector("#wpadminbar");console.log((null==o?void 0:o.clientHeight)||0,(null==i?void 0:i.clientHeight)||0),window.scrollTo({top:n.offsetTop-((null==o?void 0:o.clientHeight)||0)-((null==i?void 0:i.clientHeight)||0),behavior:"smooth"})}}))}))},858:(e,t,n)=>{n(4467),n(3986),n(467),n(3029),n(2901),n(4756),n(2425),n(5361)},5521:()=>{},6653:()=>{},2634:()=>{}},n={};function r(e){var o=n[e];if(void 0!==o)return o.exports;var i=n[e]={exports:{}};return t[e](i,i.exports,r),i.exports}r.m=t,e=[],r.O=(t,n,o,i)=>{if(!n){var l=1/0;for(d=0;d<e.length;d++){for(var[n,o,i]=e[d],c=!0,a=0;a<n.length;a++)(!1&i||l>=i)&&Object.keys(r.O).every((e=>r.O[e](n[a])))?n.splice(a--,1):(c=!1,i<l&&(l=i));if(c){e.splice(d--,1);var s=o();void 0!==s&&(t=s)}}return t}i=i||0;for(var d=e.length;d>0&&e[d-1][2]>i;d--)e[d]=e[d-1];e[d]=[n,o,i]},r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={617:0};r.O.j=t=>0===e[t];var t=(t,n)=>{var o,i,[l,c,a]=n,s=0;if(l.some((t=>0!==e[t]))){for(o in c)r.o(c,o)&&(r.m[o]=c[o]);if(a)var d=a(r)}for(t&&t(n);s<l.length;s++)i=l[s],r.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return r.O(d)},n=self.webpackChunk_mercury_child_wp=self.webpackChunk_mercury_child_wp||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})(),r.O(void 0,[757],(()=>r(8829))),r.O(void 0,[757],(()=>r(2025))),r.O(void 0,[757],(()=>r(3117))),r.O(void 0,[757],(()=>r(8529))),r.O(void 0,[757],(()=>r(477))),r.O(void 0,[757],(()=>r(1839))),r.O(void 0,[757],(()=>r(2453))),r.O(void 0,[757],(()=>r(4783))),r.O(void 0,[757],(()=>r(7755))),r.O(void 0,[757],(()=>r(2619))),r.O(void 0,[757],(()=>r(6949))),r.O(void 0,[757],(()=>r(5773))),r.O(void 0,[757],(()=>r(633))),r.O(void 0,[757],(()=>r(7519))),r.O(void 0,[757],(()=>r(4341))),r.O(void 0,[757],(()=>r(2133))),r.O(void 0,[757],(()=>r(4295))),r.O(void 0,[757],(()=>r(637))),r.O(void 0,[757],(()=>r(1459))),r.O(void 0,[757],(()=>r(5249))),r.O(void 0,[757],(()=>r(3461))),r.O(void 0,[757],(()=>r(3185))),r.O(void 0,[757],(()=>r(5576))),r.O(void 0,[757],(()=>r(4975))),r.O(void 0,[757],(()=>r(7549))),r.O(void 0,[757],(()=>r(4597))),r.O(void 0,[757],(()=>r(9861))),r.O(void 0,[757],(()=>r(4409))),r.O(void 0,[757],(()=>r(4209))),r.O(void 0,[757],(()=>r(6601))),r.O(void 0,[757],(()=>r(2115))),r.O(void 0,[757],(()=>r(3791))),r.O(void 0,[757],(()=>r(4069))),r.O(void 0,[757],(()=>r(3725))),r.O(void 0,[757],(()=>r(8219))),r.O(void 0,[757],(()=>r(8274))),r.O(void 0,[757],(()=>r(6337))),r.O(void 0,[757],(()=>r(5087))),r.O(void 0,[757],(()=>r(5133))),r.O(void 0,[757],(()=>r(8445))),r.O(void 0,[757],(()=>r(8065))),r.O(void 0,[757],(()=>r(9429))),r.O(void 0,[757],(()=>r(3545))),r.O(void 0,[757],(()=>r(6421))),r.O(void 0,[757],(()=>r(8841))),r.O(void 0,[757],(()=>r(9477))),r.O(void 0,[757],(()=>r(858))),r.O(void 0,[757],(()=>r(5521)));var o=r.O(void 0,[757],(()=>r(6653)));o=r.O(o);
=======
/******/ var __webpack_modules__ = ({

/***/ "./src/blocks/age-gate-banner/age-gate-banner.scss":
/*!*********************************************************!*\
  !*** ./src/blocks/age-gate-banner/age-gate-banner.scss ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/author-block/author-block.scss":
/*!***************************************************!*\
  !*** ./src/blocks/author-block/author-block.scss ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/badge-group/badge-group.scss":
/*!*************************************************!*\
  !*** ./src/blocks/badge-group/badge-group.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/badge/badge.scss":
/*!*************************************!*\
  !*** ./src/blocks/badge/badge.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/blockquote/blockquote.scss":
/*!***********************************************!*\
  !*** ./src/blocks/blockquote/blockquote.scss ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/bonus-card/bonus-card.scss":
/*!***********************************************!*\
  !*** ./src/blocks/bonus-card/bonus-card.scss ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/breadcrumbs/breadcrumbs.scss":
/*!*************************************************!*\
  !*** ./src/blocks/breadcrumbs/breadcrumbs.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/button/button.scss":
/*!***************************************!*\
  !*** ./src/blocks/button/button.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/clipping/clipping.scss":
/*!*******************************************!*\
  !*** ./src/blocks/clipping/clipping.scss ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/contributor-list/contributor-list.scss":
/*!***********************************************************!*\
  !*** ./src/blocks/contributor-list/contributor-list.scss ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/cookie-banner/cookie-banner.scss":
/*!*****************************************************!*\
  !*** ./src/blocks/cookie-banner/cookie-banner.scss ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/ea-accordion/ea-accordion.scss":
/*!***************************************************!*\
  !*** ./src/blocks/ea-accordion/ea-accordion.scss ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/featured-icon/featured-icon.scss":
/*!*****************************************************!*\
  !*** ./src/blocks/featured-icon/featured-icon.scss ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/group-list/group-list.scss":
/*!***********************************************!*\
  !*** ./src/blocks/group-list/group-list.scss ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/hero-author-banner/hero-author-banner.scss":
/*!***************************************************************!*\
  !*** ./src/blocks/hero-author-banner/hero-author-banner.scss ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/hero-banner/hero-banner.scss":
/*!*************************************************!*\
  !*** ./src/blocks/hero-banner/hero-banner.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/hero-review-banner/hero-review-banner.scss":
/*!***************************************************************!*\
  !*** ./src/blocks/hero-review-banner/hero-review-banner.scss ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/latest-posts/latest-posts.scss":
/*!***************************************************!*\
  !*** ./src/blocks/latest-posts/latest-posts.scss ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/layout/layout.scss":
/*!***************************************!*\
  !*** ./src/blocks/layout/layout.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/link-with-icon-list/link-with-icon-list.scss":
/*!*****************************************************************!*\
  !*** ./src/blocks/link-with-icon-list/link-with-icon-list.scss ***!
  \*****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/link-with-icon/link-with-icon.scss":
/*!*******************************************************!*\
  !*** ./src/blocks/link-with-icon/link-with-icon.scss ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/logo-text/logo-text.scss":
/*!*********************************************!*\
  !*** ./src/blocks/logo-text/logo-text.scss ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/page-not-found/page-not-found.scss":
/*!*******************************************************!*\
  !*** ./src/blocks/page-not-found/page-not-found.scss ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/pagination/pagination.scss":
/*!***********************************************!*\
  !*** ./src/blocks/pagination/pagination.scss ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/post-author/post-author.scss":
/*!*************************************************!*\
  !*** ./src/blocks/post-author/post-author.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/post-card/post-card.scss":
/*!*********************************************!*\
  !*** ./src/blocks/post-card/post-card.scss ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/post-card/post-outlined-card.scss":
/*!******************************************************!*\
  !*** ./src/blocks/post-card/post-outlined-card.scss ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/post-footer/post-footer.scss":
/*!*************************************************!*\
  !*** ./src/blocks/post-footer/post-footer.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/post-header/post-header.scss":
/*!*************************************************!*\
  !*** ./src/blocks/post-header/post-header.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/post-info/post-info.scss":
/*!*********************************************!*\
  !*** ./src/blocks/post-info/post-info.scss ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/post-list/post-list.scss":
/*!*********************************************!*\
  !*** ./src/blocks/post-list/post-list.scss ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/promo-bonus/promo-bonus.scss":
/*!*************************************************!*\
  !*** ./src/blocks/promo-bonus/promo-bonus.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/promo-button/promo-button.scss":
/*!***************************************************!*\
  !*** ./src/blocks/promo-button/promo-button.scss ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/ref-review-modal/ref-review-modal.scss":
/*!***********************************************************!*\
  !*** ./src/blocks/ref-review-modal/ref-review-modal.scss ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/related-posts/related-posts.scss":
/*!*****************************************************!*\
  !*** ./src/blocks/related-posts/related-posts.scss ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/relinking-item/relinking-block.scss":
/*!********************************************************!*\
  !*** ./src/blocks/relinking-item/relinking-block.scss ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/relinking-item/relinking-item.scss":
/*!*******************************************************!*\
  !*** ./src/blocks/relinking-item/relinking-item.scss ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/relinking-list/relinking-list.scss":
/*!*******************************************************!*\
  !*** ./src/blocks/relinking-list/relinking-list.scss ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/review-card/variants/bonus-card/style.scss":
/*!***************************************************************!*\
  !*** ./src/blocks/review-card/variants/bonus-card/style.scss ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/review-card/variants/compact-bet/style.scss":
/*!****************************************************************!*\
  !*** ./src/blocks/review-card/variants/compact-bet/style.scss ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/review-card/variants/compact-review-bonus/style.scss":
/*!*************************************************************************!*\
  !*** ./src/blocks/review-card/variants/compact-review-bonus/style.scss ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/review-card/variants/default/style.scss":
/*!************************************************************!*\
  !*** ./src/blocks/review-card/variants/default/style.scss ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/review-details/review-details.scss":
/*!*******************************************************!*\
  !*** ./src/blocks/review-details/review-details.scss ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/review-list/review-list.scss":
/*!*************************************************!*\
  !*** ./src/blocks/review-list/review-list.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/scroll-to-top/scroll-to-top.scss":
/*!*****************************************************!*\
  !*** ./src/blocks/scroll-to-top/scroll-to-top.scss ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/share-links/share-links.scss":
/*!*************************************************!*\
  !*** ./src/blocks/share-links/share-links.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/sidebar/sidebar.scss":
/*!*****************************************!*\
  !*** ./src/blocks/sidebar/sidebar.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/sites-linking/sites-linking.scss":
/*!*****************************************************!*\
  !*** ./src/blocks/sites-linking/sites-linking.scss ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/social-link/social-link.scss":
/*!*************************************************!*\
  !*** ./src/blocks/social-link/social-link.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/step-list/step-list.scss":
/*!*********************************************!*\
  !*** ./src/blocks/step-list/step-list.scss ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/tag-list/tag-list.scss":
/*!*******************************************!*\
  !*** ./src/blocks/tag-list/tag-list.scss ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/toc/toc.scss":
/*!*********************************!*\
  !*** ./src/blocks/toc/toc.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/tooltip/tooltip.scss":
/*!*****************************************!*\
  !*** ./src/blocks/tooltip/tooltip.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/user-block/user-block.scss":
/*!***********************************************!*\
  !*** ./src/blocks/user-block/user-block.scss ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/width-container/width-container.scss":
/*!*********************************************************!*\
  !*** ./src/blocks/width-container/width-container.scss ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/age-gate-banner/age-gate-banner.ts":
/*!*******************************************************!*\
  !*** ./src/blocks/age-gate-banner/age-gate-banner.ts ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _age_gate_banner_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./age-gate-banner.scss */ "./src/blocks/age-gate-banner/age-gate-banner.scss");


/***/ }),

/***/ "./src/blocks/author-block/author-block.ts":
/*!*************************************************!*\
  !*** ./src/blocks/author-block/author-block.ts ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _author_block_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./author-block.scss */ "./src/blocks/author-block/author-block.scss");


/***/ }),

/***/ "./src/blocks/badge-group/badge-group.ts":
/*!***********************************************!*\
  !*** ./src/blocks/badge-group/badge-group.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _badge_group_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./badge-group.scss */ "./src/blocks/badge-group/badge-group.scss");


/***/ }),

/***/ "./src/blocks/badge/badge.ts":
/*!***********************************!*\
  !*** ./src/blocks/badge/badge.ts ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _badge_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./badge.scss */ "./src/blocks/badge/badge.scss");


/***/ }),

/***/ "./src/blocks/blockquote/blockquote.ts":
/*!*********************************************!*\
  !*** ./src/blocks/blockquote/blockquote.ts ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _blockquote_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./blockquote.scss */ "./src/blocks/blockquote/blockquote.scss");


/***/ }),

/***/ "./src/blocks/bonus-card/bonus-card.ts":
/*!*********************************************!*\
  !*** ./src/blocks/bonus-card/bonus-card.ts ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _bonus_card_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bonus-card.scss */ "./src/blocks/bonus-card/bonus-card.scss");


/***/ }),

/***/ "./src/blocks/breadcrumbs/breadcrumbs.ts":
/*!***********************************************!*\
  !*** ./src/blocks/breadcrumbs/breadcrumbs.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _breadcrumbs_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./breadcrumbs.scss */ "./src/blocks/breadcrumbs/breadcrumbs.scss");


/***/ }),

/***/ "./src/blocks/button/button.ts":
/*!*************************************!*\
  !*** ./src/blocks/button/button.ts ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _button_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./button.scss */ "./src/blocks/button/button.scss");


/***/ }),

/***/ "./src/blocks/clipping/clipping.ts":
/*!*****************************************!*\
  !*** ./src/blocks/clipping/clipping.ts ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _clipping_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./clipping.scss */ "./src/blocks/clipping/clipping.scss");

function init() {
  var els = document.querySelectorAll('.lb-clipping');
  els.forEach(function (container) {
    var textContainer = container.querySelector('.lb-clipping__content');
    var showBtn = container.querySelector('.lb-clipping__toggle--more');
    var lessBtn = container.querySelector('.lb-clipping__toggle--less');
    showBtn.addEventListener('click', function () {
      container.classList.remove('lb-clipping--hidden');
      container.classList.add('lb-clipping--showed');
    });
    lessBtn.addEventListener('click', function () {
      container.classList.add('lb-clipping--hidden');
      container.classList.remove('lb-clipping--showed');
    });
    window.addEventListener('resize', function () {
      return showReadMoreButton(textContainer);
    });
    showReadMoreButton(textContainer);
  });
}
function showReadMoreButton(element) {
  if (element.offsetHeight < element.scrollHeight || element.offsetWidth < element.scrollWidth) {
    element.closest('.lb-clipping').classList.add('lb-clipping--hidden');
  } else {
    element.closest('.lb-clipping').classList.remove('lb-clipping--hidden', 'lb-clipping--showed');
  }
}
init();

/***/ }),

/***/ "./src/blocks/contributor-list/contributor-list.ts":
/*!*********************************************************!*\
  !*** ./src/blocks/contributor-list/contributor-list.ts ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _contributor_list_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./contributor-list.scss */ "./src/blocks/contributor-list/contributor-list.scss");


/***/ }),

/***/ "./src/blocks/cookie-banner/cookie-banner.ts":
/*!***************************************************!*\
  !*** ./src/blocks/cookie-banner/cookie-banner.ts ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _cookie_banner_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./cookie-banner.scss */ "./src/blocks/cookie-banner/cookie-banner.scss");

(function () {
  var body = document.body;
  var content = document.getElementById('cmplz-cookiebanner-container');
  var list = ['age-restriction'];
  if (!content) return;
  function checkAgeRestriction() {
    if (list.some(function (cl) {
      return body.classList.contains(cl);
    })) {
      // Если класс есть, элемент должен быть скрыт дольше
      body.classList.add('cb-hide');

      // Начинаем наблюдение за body
      observer.observe(body, observerOptions);
    }
  }

  // Обработчик для наблюдения за изменениями классов на body
  var observer = new MutationObserver(function () {
    if (!list.some(function (cl) {
      return body.classList.contains(cl);
    })) {
      // Если классы удалены, запускаем анимацию через 4с
      setTimeout(function () {
        body.classList.remove('cb-hide');
      }, 4000);
      observer.disconnect();
    }
  });

  // Опции для наблюдения за изменениями атрибутов (классов)
  var observerOptions = {
    attributes: true,
    attributeFilter: ['class']
  };

  // Проверяем начальное состояние
  checkAgeRestriction();
})();

/***/ }),

/***/ "./src/blocks/ea-accordion/ea-accordion.ts":
/*!*************************************************!*\
  !*** ./src/blocks/ea-accordion/ea-accordion.ts ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ea_accordion_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ea-accordion.scss */ "./src/blocks/ea-accordion/ea-accordion.scss");


/***/ }),

/***/ "./src/blocks/featured-icon/featured-icon.ts":
/*!***************************************************!*\
  !*** ./src/blocks/featured-icon/featured-icon.ts ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _featured_icon_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./featured-icon.scss */ "./src/blocks/featured-icon/featured-icon.scss");


/***/ }),

/***/ "./src/blocks/group-list/group-list.ts":
/*!*********************************************!*\
  !*** ./src/blocks/group-list/group-list.ts ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _group_list_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./group-list.scss */ "./src/blocks/group-list/group-list.scss");


/***/ }),

/***/ "./src/blocks/hero-author-banner/hero-author-banner.ts":
/*!*************************************************************!*\
  !*** ./src/blocks/hero-author-banner/hero-author-banner.ts ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _hero_author_banner_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hero-author-banner.scss */ "./src/blocks/hero-author-banner/hero-author-banner.scss");


/***/ }),

/***/ "./src/blocks/hero-banner/hero-banner.ts":
/*!***********************************************!*\
  !*** ./src/blocks/hero-banner/hero-banner.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _hero_banner_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hero-banner.scss */ "./src/blocks/hero-banner/hero-banner.scss");


/***/ }),

/***/ "./src/blocks/hero-review-banner/hero-review-banner.ts":
/*!*************************************************************!*\
  !*** ./src/blocks/hero-review-banner/hero-review-banner.ts ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _hero_review_banner_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hero-review-banner.scss */ "./src/blocks/hero-review-banner/hero-review-banner.scss");


/***/ }),

/***/ "./src/blocks/latest-posts/latest-posts.ts":
/*!*************************************************!*\
  !*** ./src/blocks/latest-posts/latest-posts.ts ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _latest_posts_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./latest-posts.scss */ "./src/blocks/latest-posts/latest-posts.scss");


/***/ }),

/***/ "./src/blocks/layout/layout.ts":
/*!*************************************!*\
  !*** ./src/blocks/layout/layout.ts ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _layout_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./layout.scss */ "./src/blocks/layout/layout.scss");


/***/ }),

/***/ "./src/blocks/link-with-icon-list/link-with-icon-list.ts":
/*!***************************************************************!*\
  !*** ./src/blocks/link-with-icon-list/link-with-icon-list.ts ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _link_with_icon_list_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./link-with-icon-list.scss */ "./src/blocks/link-with-icon-list/link-with-icon-list.scss");


/***/ }),

/***/ "./src/blocks/link-with-icon/link-with-icon.ts":
/*!*****************************************************!*\
  !*** ./src/blocks/link-with-icon/link-with-icon.ts ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _link_with_icon_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./link-with-icon.scss */ "./src/blocks/link-with-icon/link-with-icon.scss");


/***/ }),

/***/ "./src/blocks/logo-text/logo-text.ts":
/*!*******************************************!*\
  !*** ./src/blocks/logo-text/logo-text.ts ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _logo_text_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./logo-text.scss */ "./src/blocks/logo-text/logo-text.scss");


/***/ }),

/***/ "./src/blocks/page-not-found/page-not-found.ts":
/*!*****************************************************!*\
  !*** ./src/blocks/page-not-found/page-not-found.ts ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _page_not_found_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./page-not-found.scss */ "./src/blocks/page-not-found/page-not-found.scss");


/***/ }),

/***/ "./src/blocks/pagination/pagination.ts":
/*!*********************************************!*\
  !*** ./src/blocks/pagination/pagination.ts ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _pagination_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./pagination.scss */ "./src/blocks/pagination/pagination.scss");


/***/ }),

/***/ "./src/blocks/post-author/post-author.ts":
/*!***********************************************!*\
  !*** ./src/blocks/post-author/post-author.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _post_author_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./post-author.scss */ "./src/blocks/post-author/post-author.scss");


/***/ }),

/***/ "./src/blocks/post-card/post-card.ts":
/*!*******************************************!*\
  !*** ./src/blocks/post-card/post-card.ts ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _post_card_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./post-card.scss */ "./src/blocks/post-card/post-card.scss");
/* harmony import */ var _post_outlined_card_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./post-outlined-card.scss */ "./src/blocks/post-card/post-outlined-card.scss");



/***/ }),

/***/ "./src/blocks/post-footer/post-footer.ts":
/*!***********************************************!*\
  !*** ./src/blocks/post-footer/post-footer.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _post_footer_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./post-footer.scss */ "./src/blocks/post-footer/post-footer.scss");


/***/ }),

/***/ "./src/blocks/post-header/post-header.ts":
/*!***********************************************!*\
  !*** ./src/blocks/post-header/post-header.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _post_header_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./post-header.scss */ "./src/blocks/post-header/post-header.scss");


/***/ }),

/***/ "./src/blocks/post-info/post-info.ts":
/*!*******************************************!*\
  !*** ./src/blocks/post-info/post-info.ts ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _post_info_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./post-info.scss */ "./src/blocks/post-info/post-info.scss");


/***/ }),

/***/ "./src/blocks/post-list/post-list.ts":
/*!*******************************************!*\
  !*** ./src/blocks/post-list/post-list.ts ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _post_list_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./post-list.scss */ "./src/blocks/post-list/post-list.scss");


/***/ }),

/***/ "./src/blocks/promo-bonus/promo-bonus.ts":
/*!***********************************************!*\
  !*** ./src/blocks/promo-bonus/promo-bonus.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _promo_bonus_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./promo-bonus.scss */ "./src/blocks/promo-bonus/promo-bonus.scss");


/***/ }),

/***/ "./src/blocks/promo-button/promo-button.ts":
/*!*************************************************!*\
  !*** ./src/blocks/promo-button/promo-button.ts ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/esm/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _promo_button_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./promo-button.scss */ "./src/blocks/promo-button/promo-button.scss");



//import { LbTooltip } from '@/shared/scripts/components/tooltip'

function init() {
  var container = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : document.body;
  var btns = container.querySelectorAll('.lb-promo-button:not(.lb-button--initiated)');
  btns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      return onCopy(btn);
    });
    btn.classList.add('lb-button--initiated');
  });
}
function onCopy(_x) {
  return _onCopy.apply(this, arguments);
}
function _onCopy() {
  _onCopy = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_0__["default"])( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark(function _callee(btn) {
    var _navigator, txtEl;
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap(function _callee$(_context) {
      while (1) switch (_context.prev = _context.next) {
        case 0:
          if (btn) {
            _context.next = 2;
            break;
          }
          return _context.abrupt("return");
        case 2:
          _context.prev = 2;
          if (!((_navigator = navigator) !== null && _navigator !== void 0 && (_navigator = _navigator.clipboard) !== null && _navigator !== void 0 && _navigator.writeText)) {
            _context.next = 6;
            break;
          }
          _context.next = 6;
          return navigator.clipboard.writeText(btn.dataset.code);
        case 6:
          if (btn) {
            _context.next = 8;
            break;
          }
          return _context.abrupt("return");
        case 8:
          txtEl = btn.querySelector('.lb-button__content');
          txtEl.innerHTML = btn.dataset.text;
          setTimeout(function () {
            txtEl.innerHTML = btn.dataset.code;
          }, 2000);
          _context.next = 16;
          break;
        case 13:
          _context.prev = 13;
          _context.t0 = _context["catch"](2);
          console.error(_context.t0);
        case 16:
        case "end":
          return _context.stop();
      }
    }, _callee, null, [[2, 13]]);
  }));
  return _onCopy.apply(this, arguments);
}
;
window.initPromoButton = init;

/*async function onCopy(btn: HTMLElement) {
  if (!btn) return

  try {
    if (navigator?.clipboard?.writeText) {
      await navigator.clipboard.writeText(btn.dataset.code)
    }

    const tp = document.getElementById(btn.getAttribute('aria-describedby'))

    if (!tp) return

    const tooltip = await new LbTooltip(btn, tp, {
      placement: 'bottom',
      offset: 2,
    })

    tooltip.show()

    setTimeout(() => {
      tooltip.hide()
    }, 2000)
  } catch (err) {
    console.error(err)
  }
}*/

init();

/***/ }),

/***/ "./src/blocks/ref-review-modal/ref-review-modal.ts":
/*!*********************************************************!*\
  !*** ./src/blocks/ref-review-modal/ref-review-modal.ts ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ref_review_modal_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ref-review-modal.scss */ "./src/blocks/ref-review-modal/ref-review-modal.scss");


/***/ }),

/***/ "./src/blocks/related-posts/related-posts.ts":
/*!***************************************************!*\
  !*** ./src/blocks/related-posts/related-posts.ts ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _related_posts_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./related-posts.scss */ "./src/blocks/related-posts/related-posts.scss");
/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/css */ "./node_modules/swiper/swiper.css");
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.mjs");



function initRelatedPosts() {
  var containers = document.querySelectorAll('.lb-related-posts');
  containers.forEach(function (container) {
    new swiper__WEBPACK_IMPORTED_MODULE_2__["default"](container, {
      slidesPerView: 'auto',
      spaceBetween: 8,
      freeMode: true,
      breakpoints: {
        768: {
          slidesPerView: 3,
          freeMode: false,
          spaceBetween: 20
        }
      }
    });
  });
}
initRelatedPosts();

/***/ }),

/***/ "./src/blocks/relinking-item/relinking-item.ts":
/*!*****************************************************!*\
  !*** ./src/blocks/relinking-item/relinking-item.ts ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _relinking_item_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./relinking-item.scss */ "./src/blocks/relinking-item/relinking-item.scss");
/* harmony import */ var _relinking_block_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./relinking-block.scss */ "./src/blocks/relinking-item/relinking-block.scss");



/***/ }),

/***/ "./src/blocks/relinking-list/relinking-list.ts":
/*!*****************************************************!*\
  !*** ./src/blocks/relinking-list/relinking-list.ts ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/esm/defineProperty.js");
/* harmony import */ var _wordpress_interactivity__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/interactivity */ "./node_modules/@wordpress/interactivity/build-module/index.js");
/* harmony import */ var _relinking_list_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./relinking-list.scss */ "./src/blocks/relinking-list/relinking-list.scss");
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.mjs");
/* harmony import */ var swiper_modules__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! swiper/modules */ "./node_modules/swiper/modules/index.mjs");
/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! swiper/css */ "./node_modules/swiper/swiper.css");
/* harmony import */ var swiper_css_navigation__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! swiper/css/navigation */ "./node_modules/swiper/modules/navigation.css");

function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__["default"])(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }






(0,_wordpress_interactivity__WEBPACK_IMPORTED_MODULE_1__.store)('relinkingList', {
  callbacks: {
    initSlider: function initSlider() {
      var _getElement = (0,_wordpress_interactivity__WEBPACK_IMPORTED_MODULE_1__.getElement)(),
        ref = _getElement.ref;
      var container = ref.querySelector('.lb-relinking-list__slider');
      var nextEl = ref.querySelector('.lb-relinking-list__slider-next');
      var prevEl = ref.querySelector('.lb-relinking-list__slider-prev');
      new swiper__WEBPACK_IMPORTED_MODULE_3__["default"](container, _objectSpread({
        slidesPerView: 'auto',
        modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_4__.Navigation],
        // Navigation arrows
        navigation: {
          nextEl: nextEl,
          prevEl: prevEl
        }
      }, !!ref.querySelector('.lb-relinking-list__slider--only-mobile') ? {
        breakpoints: {
          // when window width is >= 320px
          576: {
            enabled: false
          }
        }
      } : {}));
    }
  },
  actions: {
    showMore: function showMore() {
      var _el$ref;
      var context = (0,_wordpress_interactivity__WEBPACK_IMPORTED_MODULE_1__.getContext)();
      context.isLimited = false;
      var el = (0,_wordpress_interactivity__WEBPACK_IMPORTED_MODULE_1__.getElement)();
      (_el$ref = el.ref) === null || _el$ref === void 0 || _el$ref.closest('[data-wp-interactive="relinkingList"]').querySelectorAll('.lb-relinking-item').forEach(function (el) {
        el.hidden = false;
        el.style.display = '';
      });
    }
  }
});

/***/ }),

/***/ "./src/blocks/review-card/review-card.ts":
/*!***********************************************!*\
  !*** ./src/blocks/review-card/review-card.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _variants__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./variants */ "./src/blocks/review-card/variants/index.ts");


/***/ }),

/***/ "./src/blocks/review-card/variants/bonus-card/index.ts":
/*!*************************************************************!*\
  !*** ./src/blocks/review-card/variants/bonus-card/index.ts ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style.scss */ "./src/blocks/review-card/variants/bonus-card/style.scss");


/***/ }),

/***/ "./src/blocks/review-card/variants/compact-bet/index.ts":
/*!**************************************************************!*\
  !*** ./src/blocks/review-card/variants/compact-bet/index.ts ***!
  \**************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style.scss */ "./src/blocks/review-card/variants/compact-bet/style.scss");


/***/ }),

/***/ "./src/blocks/review-card/variants/compact-review-bonus/index.ts":
/*!***********************************************************************!*\
  !*** ./src/blocks/review-card/variants/compact-review-bonus/index.ts ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style.scss */ "./src/blocks/review-card/variants/compact-review-bonus/style.scss");

function init() {
  var zone = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : document.body;
  zone.querySelectorAll('.lb-compact-casino-bonus-card:not(.lb-compact-casino-bonus-card--initiated)').forEach(function (el) {
    initTcMore(el);
    el.classList.add('lb-compact-casino-bonus-card--initiated');
  });
}
function initTcMore(el) {
  var btn = el.querySelector('.lb-compact-casino-bonus-card__tc-more');
  if (!btn) return;
  btn.addEventListener('click', show);
  var content = el.querySelector('.lb-compact-casino-bonus-card__tc-content');
  if (content.scrollHeight > content.clientHeight) btn.style.display = null;
}
function show(e) {
  var container = e.target.closest('.lb-compact-casino-bonus-card__tc--truncated');
  container.classList.remove('lb-compact-casino-bonus-card__tc--truncated');
  e.target.style.display = 'none';
}
window.initCompactReviewBonus = init;
init();

/***/ }),

/***/ "./src/blocks/review-card/variants/default/index.ts":
/*!**********************************************************!*\
  !*** ./src/blocks/review-card/variants/default/index.ts ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style.scss */ "./src/blocks/review-card/variants/default/style.scss");

function init() {
  var zone = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : document.body;
  zone.querySelectorAll('.lb-review-card:not(.lb-review-card--initiated)').forEach(function (el) {
    var btns = el.querySelectorAll('.lb-review-card__read-more, .lb-review-card__read-less');
    btns.forEach(function (btn) {
      return btn.addEventListener('click', toggle);
    });
    el.classList.add('lb-review-card--initiated');
  });
}
function toggle(e) {
  var container = e.target.closest('.lb-review-card');
  container.classList.toggle('lb-review-card--mr_closed');
  container.classList.toggle('lb-review-card--mr_expanded');
}
init();
window.CasinoCardsInit = init;

/***/ }),

/***/ "./src/blocks/review-card/variants/index.ts":
/*!**************************************************!*\
  !*** ./src/blocks/review-card/variants/index.ts ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _default__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./default */ "./src/blocks/review-card/variants/default/index.ts");
/* harmony import */ var _compact_review_bonus__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./compact-review-bonus */ "./src/blocks/review-card/variants/compact-review-bonus/index.ts");
/* harmony import */ var _compact_bet__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./compact-bet */ "./src/blocks/review-card/variants/compact-bet/index.ts");
/* harmony import */ var _bonus_card__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./bonus-card */ "./src/blocks/review-card/variants/bonus-card/index.ts");





/***/ }),

/***/ "./src/blocks/review-details/review-details.ts":
/*!*****************************************************!*\
  !*** ./src/blocks/review-details/review-details.ts ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _review_details_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./review-details.scss */ "./src/blocks/review-details/review-details.scss");


/***/ }),

/***/ "./src/blocks/review-list/review-list.ts":
/*!***********************************************!*\
  !*** ./src/blocks/review-list/review-list.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/esm/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/esm/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var qs__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! qs */ "./node_modules/qs/lib/index.js");
/* harmony import */ var qs__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(qs__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var _shared_scripts_consts__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @/shared/scripts/consts */ "./src/shared/scripts/consts.ts");
/* harmony import */ var _review_list_scss__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./review-list.scss */ "./src/blocks/review-list/review-list.scss");
/* harmony import */ var _shared_scripts_components_modal__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @/shared/scripts/components/modal */ "./src/shared/scripts/components/modal.ts");
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.mjs");
/* harmony import */ var swiper_modules__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! swiper/modules */ "./node_modules/swiper/modules/index.mjs");



function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__["default"])(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }






var signal = null;
function init() {
  var btns = document.querySelectorAll('.lb-review-list__load-more');
  var filterForm = document.querySelectorAll('.lb-review-list__cat-filter');
  var listEls = document.querySelectorAll('.lb-review-list');
  btns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var container = btn.closest('.lb-review-list');
      nextPaga(container);
    });
  });
  filterForm.forEach(function (form) {
    form.addEventListener('change', function () {
      var container = form.closest('.lb-review-list');
      filter(container);
    });
  });
  listEls.forEach(function (el) {
    el.addEventListener('click', function (e) {
      if (e.target.closest('button.lb-review-card__play')) triggetRefModal(el);
    });
    initCatFilterSlider(el);
  });
}
function nextPaga(container) {
  var btn = container.querySelector('.lb-review-list__load-more');
  triggerLoad(container, (+btn.dataset.currentPage || 1) + 1);
}
function filter(container) {
  triggerLoad(container, 1);
}
function triggerLoad(_x) {
  return _triggerLoad.apply(this, arguments);
}
function _triggerLoad() {
  _triggerLoad = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__["default"])( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_2___default().mark(function _callee(container) {
    var page,
      btn,
      preparedQuery,
      continueLoad,
      data,
      _args = arguments;
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_2___default().wrap(function _callee$(_context) {
      while (1) switch (_context.prev = _context.next) {
        case 0:
          page = _args.length > 1 && _args[1] !== undefined ? _args[1] : 1;
          btn = container.querySelector('.lb-review-list__load-more');
          preparedQuery = prepareQuery(btn.dataset.query, {
            paged: page
          }, getFilterData(container));
          continueLoad = false;
          btn.classList.add('lb-button--pending');
          container.classList.add('lb-review-list--loading');
          btn.disabled = true;
          _context.prev = 7;
          _context.next = 10;
          return load(preparedQuery);
        case 10:
          data = _context.sent;
          render(container, data.html, data.page, data.total_pages);
          _context.next = 18;
          break;
        case 14:
          _context.prev = 14;
          _context.t0 = _context["catch"](7);
          if (_context.t0.name === 'AbortError') continueLoad = true;
          console.error(_context.t0);
        case 18:
          if (!continueLoad) {
            _context.next = 20;
            break;
          }
          return _context.abrupt("return");
        case 20:
          container.classList.remove('lb-review-list--loading');
          btn.classList.remove('lb-button--pending');
          btn.disabled = false;
        case 23:
        case "end":
          return _context.stop();
      }
    }, _callee, null, [[7, 14]]);
  }));
  return _triggerLoad.apply(this, arguments);
}
function load(_x2) {
  return _load.apply(this, arguments);
}
function _load() {
  _load = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__["default"])( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_2___default().mark(function _callee2(query) {
    var _signal;
    var res, data;
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_2___default().wrap(function _callee2$(_context2) {
      while (1) switch (_context2.prev = _context2.next) {
        case 0:
          (_signal = signal) === null || _signal === void 0 || _signal.abort();
          signal = new AbortController();
          _context2.next = 4;
          return fetch("".concat(_shared_scripts_consts__WEBPACK_IMPORTED_MODULE_3__.API_URL, "aces/v1/html/reviews?").concat(query || ''), {
            signal: signal.signal
          });
        case 4:
          res = _context2.sent;
          _context2.next = 7;
          return res.json();
        case 7:
          data = _context2.sent;
          return _context2.abrupt("return", data);
        case 9:
        case "end":
          return _context2.stop();
      }
    }, _callee2);
  }));
  return _load.apply(this, arguments);
}
function prepareQuery(query, queryData, data) {
  var _params;
  var params = qs__WEBPACK_IMPORTED_MODULE_8___default().parse(query);
  params.query = _objectSpread(_objectSpread({}, (_params = params) === null || _params === void 0 ? void 0 : _params.query), queryData);
  params = _objectSpread(_objectSpread({}, params), data);
  return qs__WEBPACK_IMPORTED_MODULE_8___default().stringify(params);
}
function render(container, html, page, total_pages) {
  var listEl = container.querySelector('.lb-review-list__list');
  var btn = container.querySelector('.lb-review-list__load-more');
  if (page == 1) {
    listEl.innerHTML = '';
  }
  listEl.insertAdjacentHTML('beforeend', html);
  window.CasinoCardsInit(listEl);
  window.initPromoButton(listEl);
  btn.dataset.currentPage = page + '';
  btn.dataset.totalPages = total_pages + '';
  if (+btn.dataset.currentPage >= +btn.dataset.totalPages) btn.style.display = 'none';else btn.style.display = '';
}
function triggetRefModal(_x3) {
  return _triggetRefModal.apply(this, arguments);
}
function _triggetRefModal() {
  _triggetRefModal = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__["default"])( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_2___default().mark(function _callee3(container) {
    var _config$limit;
    var modalEl, list, type, config, modal, listIn, limit, data;
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_2___default().wrap(function _callee3$(_context3) {
      while (1) switch (_context3.prev = _context3.next) {
        case 0:
          modalEl = document.querySelector('#ref-review-list');
          if (!(!container || !modalEl)) {
            _context3.next = 3;
            break;
          }
          return _context3.abrupt("return");
        case 3:
          list = container.dataset.refItems;
          type = container.dataset.type;
          config = JSON.parse(container.dataset.refConfig);
          if (!(!list || !JSON.parse(list).length)) {
            _context3.next = 8;
            break;
          }
          return _context3.abrupt("return");
        case 8:
          modal = new _shared_scripts_components_modal__WEBPACK_IMPORTED_MODULE_5__.Modal(modalEl);
          if (config.title) modal.setTitle(config.title);
          if (config.subtitle) modal.setSubtitle(config.subtitle);
          if (config.hideTitle) modal.removeTitle();
          if (config.hideSubtitle) modal.removeSubtitle();
          modal.openModal();
          listIn = JSON.parse(list);
          limit = (_config$limit = config.limit) !== null && _config$limit !== void 0 ? _config$limit : -1;
          _context3.next = 18;
          return load(prepareQuery('', {
            post__in: listIn,
            post_type: type,
            post_status: ['publish', 'draft', 'private'],
            posts_per_page: limit,
            orderby: limit != -1 && listIn.length > limit ? 'rand' : ''
          }, {
            card_variant: 'compact-bet'
          }));
        case 18:
          data = _context3.sent;
          modal.setBody(data.html, '.lb-review-list__list');
          window.initCompactReviewBonus(modal.modal);
        case 21:
        case "end":
          return _context3.stop();
      }
    }, _callee3);
  }));
  return _triggetRefModal.apply(this, arguments);
}
function getFilterData(container) {
  var form = container.querySelector('.lb-review-list__cat-filter');
  if (!form) return {};
  var filterData = Object.fromEntries(new FormData(form));
  return filterData;
}
function initCatFilterSlider(container) {
  var catContainer = container.querySelector('.lb-review-list__cat-filter > .swiper');
  if (!catContainer) return;
  var nextEl = container.querySelector('.lb-review-list__cat-filter-nav-next');
  var prevEl = container.querySelector('.lb-review-list__cat-filter-nav-prev');
  new swiper__WEBPACK_IMPORTED_MODULE_6__["default"](catContainer, {
    slidesPerView: 'auto',
    spaceBetween: 0,
    modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_7__.Navigation],
    navigation: {
      nextEl: nextEl,
      prevEl: prevEl
    }
  });
}
init();

/***/ }),

/***/ "./src/blocks/scroll-to-top/scroll-to-top.ts":
/*!***************************************************!*\
  !*** ./src/blocks/scroll-to-top/scroll-to-top.ts ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scroll_to_top_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scroll-to-top.scss */ "./src/blocks/scroll-to-top/scroll-to-top.scss");

function init() {
  var container = document.querySelector('.lb-scroll-to-top');
  var btn = document.querySelector('.lb-scroll-to-top .lb-button');
  if (!btn) return;
  btn.addEventListener('click', function () {
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth'
    });
  });
  window.addEventListener('scroll', handle);
  function handle() {
    var pageOffset = document.documentElement.scrollTop || document.body.scrollTop;
    if (pageOffset >= 1000) {
      container.classList.remove('lb-scroll-to-top--hidden');
    } else {
      container.classList.add('lb-scroll-to-top--hidden');
    }
  }
  handle();
}
init();

/***/ }),

/***/ "./src/blocks/share-links/share-links.ts":
/*!***********************************************!*\
  !*** ./src/blocks/share-links/share-links.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/esm/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _share_links_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./share-links.scss */ "./src/blocks/share-links/share-links.scss");



function init() {
  return _init.apply(this, arguments);
}
function _init() {
  _init = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_0__["default"])( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark(function _callee2() {
    var linkBtns;
    return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap(function _callee2$(_context2) {
      while (1) switch (_context2.prev = _context2.next) {
        case 0:
          linkBtns = document.querySelectorAll('.lb-share-links__copy');
          if (linkBtns.length) {
            _context2.next = 3;
            break;
          }
          return _context2.abrupt("return");
        case 3:
          linkBtns.forEach(function (linkBtn) {
            var copiedDelay = false;
            linkBtn.addEventListener('click', /*#__PURE__*/function () {
              var _ref = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_0__["default"])( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark(function _callee(e) {
                var _navigator, prevHtml;
                return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap(function _callee$(_context) {
                  while (1) switch (_context.prev = _context.next) {
                    case 0:
                      e.preventDefault();
                      if (!copiedDelay) {
                        _context.next = 3;
                        break;
                      }
                      return _context.abrupt("return");
                    case 3:
                      copiedDelay = true;
                      _context.prev = 4;
                      if (!((_navigator = navigator) !== null && _navigator !== void 0 && (_navigator = _navigator.clipboard) !== null && _navigator !== void 0 && _navigator.writeText)) {
                        _context.next = 8;
                        break;
                      }
                      _context.next = 8;
                      return navigator.clipboard.writeText(linkBtn.dataset.href);
                    case 8:
                      prevHtml = linkBtn.innerHTML;
                      linkBtn.innerHTML = prevHtml.replace('icon-link', 'icon-check');
                      setTimeout(function () {
                        linkBtn.innerHTML = prevHtml;
                        copiedDelay = false;
                      }, 1500);
                      _context.next = 16;
                      break;
                    case 13:
                      _context.prev = 13;
                      _context.t0 = _context["catch"](4);
                      console.error(_context.t0);
                    case 16:
                    case "end":
                      return _context.stop();
                  }
                }, _callee, null, [[4, 13]]);
              }));
              return function (_x) {
                return _ref.apply(this, arguments);
              };
            }());
          });
        case 4:
        case "end":
          return _context2.stop();
      }
    }, _callee2);
  }));
  return _init.apply(this, arguments);
}
init();

/***/ }),

/***/ "./src/blocks/sidebar/sidebar.ts":
/*!***************************************!*\
  !*** ./src/blocks/sidebar/sidebar.ts ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sidebar_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sidebar.scss */ "./src/blocks/sidebar/sidebar.scss");


/***/ }),

/***/ "./src/blocks/sites-linking/sites-linking.ts":
/*!***************************************************!*\
  !*** ./src/blocks/sites-linking/sites-linking.ts ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sites_linking_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sites-linking.scss */ "./src/blocks/sites-linking/sites-linking.scss");


/***/ }),

/***/ "./src/blocks/social-link/social-link.ts":
/*!***********************************************!*\
  !*** ./src/blocks/social-link/social-link.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _social_link_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./social-link.scss */ "./src/blocks/social-link/social-link.scss");


/***/ }),

/***/ "./src/blocks/step-list/step-list.ts":
/*!*******************************************!*\
  !*** ./src/blocks/step-list/step-list.ts ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _step_list_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./step-list.scss */ "./src/blocks/step-list/step-list.scss");


/***/ }),

/***/ "./src/blocks/tag-list/tag-list.ts":
/*!*****************************************!*\
  !*** ./src/blocks/tag-list/tag-list.ts ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _tag_list_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./tag-list.scss */ "./src/blocks/tag-list/tag-list.scss");


/***/ }),

/***/ "./src/blocks/toc/toc.ts":
/*!*******************************!*\
  !*** ./src/blocks/toc/toc.ts ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ "./node_modules/@babel/runtime/helpers/esm/toConsumableArray.js");
/* harmony import */ var _toc_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./toc.scss */ "./src/blocks/toc/toc.scss");


document.querySelectorAll('.ez-toc-link').forEach(function (el) {
  el.addEventListener('click', function (e) {
    e.preventDefault();
    var elementWithText = (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__["default"])(document.querySelectorAll('h1,h2,h3,h4,h5,h6')).find(function (sEl) {
      return sEl.textContent.includes(el.textContent);
    });
    if (!elementWithText) return;
    var headerEl = document.querySelector('.lb-header');
    var adminBarEl = document.querySelector('#wpadminbar');
    console.log((headerEl === null || headerEl === void 0 ? void 0 : headerEl.clientHeight) || 0, (adminBarEl === null || adminBarEl === void 0 ? void 0 : adminBarEl.clientHeight) || 0);
    window.scrollTo({
      top: elementWithText.offsetTop - ((headerEl === null || headerEl === void 0 ? void 0 : headerEl.clientHeight) || 0) - ((adminBarEl === null || adminBarEl === void 0 ? void 0 : adminBarEl.clientHeight) || 0),
      behavior: 'smooth'
    });
  });
});

/***/ }),

/***/ "./src/blocks/tooltip/tooltip.ts":
/*!***************************************!*\
  !*** ./src/blocks/tooltip/tooltip.ts ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _shared_scripts_components_tooltip__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/shared/scripts/components/tooltip */ "./src/shared/scripts/components/tooltip.ts");
/* harmony import */ var _tooltip_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./tooltip.scss */ "./src/blocks/tooltip/tooltip.scss");


_shared_scripts_components_tooltip__WEBPACK_IMPORTED_MODULE_0__.LbTooltip;

/***/ }),

/***/ "./src/blocks/user-block/user-block.ts":
/*!*********************************************!*\
  !*** ./src/blocks/user-block/user-block.ts ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _user_block_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./user-block.scss */ "./src/blocks/user-block/user-block.scss");


/***/ }),

/***/ "./src/blocks/width-container/width-container.ts":
/*!*******************************************************!*\
  !*** ./src/blocks/width-container/width-container.ts ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _width_container_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./width-container.scss */ "./src/blocks/width-container/width-container.scss");


/***/ }),

/***/ "./src/shared/scripts/components/modal.ts":
/*!************************************************!*\
  !*** ./src/shared/scripts/components/modal.ts ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   Modal: () => (/* binding */ Modal)
/* harmony export */ });
/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/classCallCheck */ "./node_modules/@babel/runtime/helpers/esm/classCallCheck.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/esm/createClass.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/esm/defineProperty.js");



var Modal = /*#__PURE__*/function () {
  function Modal(element) {
    var _this = this;
    (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__["default"])(this, Modal);
    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__["default"])(this, "content", null);
    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__["default"])(this, "templateContent", null);
    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__["default"])(this, "overlay", null);
    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__["default"])(this, "body", null);
    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__["default"])(this, "handleEscClose", function (event) {
      if (event.key === 'Escape') {
        _this.closeModal();
      }
    });
    if (typeof element === 'string') {
      var elem = document.querySelector(element);
      if (elem instanceof HTMLTemplateElement) {
        this.templateContent = elem.content.cloneNode(true);
        this.modal = this.templateContent.querySelector('.lb-modal__overlay');
      } else if (elem instanceof HTMLElement) {
        this.modal = elem.cloneNode(true);
      } else {
        throw new Error('Element not found with the provided selector or invalid HTML element.');
      }
    } else if (element instanceof HTMLTemplateElement) {
      this.templateContent = element.content.cloneNode(true);
      this.modal = this.templateContent.querySelector('.lb-modal__overlay');
    } else if (element instanceof HTMLElement) {
      this.modal = element.cloneNode(true);
    } else {
      throw new Error('Invalid element provided');
    }
    this.setupModal();
    this.attachModal();
  }
  return (0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__["default"])(Modal, [{
    key: "setupModal",
    value: function setupModal() {
      var _this$modal$querySele,
        _this2 = this,
        _this$overlay;
      document.addEventListener('keydown', this.handleEscClose);

      // Attach event listeners for closing the modal
      (_this$modal$querySele = this.modal.querySelector('[data-close]')) === null || _this$modal$querySele === void 0 || _this$modal$querySele.addEventListener('click', function () {
        return _this2.closeModal();
      });
      this.overlay = this.modal;
      (_this$overlay = this.overlay) === null || _this$overlay === void 0 || _this$overlay.addEventListener('click', function (event) {
        if (event.target === _this2.overlay) {
          _this2.closeModal();
        }
      });
      this.body = this.modal.querySelector('.lb-modal__body');
      this.content = this.modal.querySelector('.lb-modal__content');
    }
  }, {
    key: "attachModal",
    value: function attachModal() {
      document.body.appendChild(this.modal);
    }
  }, {
    key: "openModal",
    value: function openModal() {
      var _this3 = this;
      this.modal.classList.remove('lb-modal--animating-out');
      this.modal.classList.add('lb-modal--active');
      setTimeout(function () {
        _this3.modal.classList.add('lb-modal--animating-in');
        _this3.modal.focus();
        _this3.disableScroll();
      }, 60);
    }
  }, {
    key: "closeModal",
    value: function closeModal() {
      var _this4 = this;
      this.modal.classList.remove('lb-modal--animating-in');
      this.modal.classList.add('lb-modal--animating-out');
      this.modal.classList.remove('lb-modal--active');
      this.enableScroll();
      this.modal.addEventListener('transitionend', function () {
        return _this4.destroy();
      });
    }
  }, {
    key: "destroy",
    value: function destroy() {
      this.modal.remove();
      document.removeEventListener('keydown', this.handleEscClose);
    }
  }, {
    key: "setBody",
    value: function setBody(content, specificSelector) {
      var container = specificSelector ? this.body.querySelector(specificSelector) : this.body;
      container.innerHTML = '';
      if (typeof content === 'string') {
        container.innerHTML = content;
      } else {
        container.appendChild(content);
      }
    }
  }, {
    key: "setTitle",
    value: function setTitle(title) {
      var titleEl = this.content.querySelector('.lb-modal__title');
      var subtitleEl = this.content.querySelector('.lb-modal__subtitle');
      var headerEl = this.content.querySelector('.lb-modal__header');
      if (!titleEl) {
        var newHeader = "<div class=\"lb-modal__header\">\n      <div class=\"lb-modal__title\">\n      ".concat(title, "\n      </div>\n      ").concat(subtitleEl !== null && subtitleEl !== void 0 && subtitleEl.innerHTML ? "<div class=\"lb-modal__subtitle\">\n      ".concat(subtitleEl.innerHTML, "\n      </div>") : '', "\n      </div>");
        headerEl === null || headerEl === void 0 || headerEl.remove();
        this.content.insertAdjacentHTML('afterbegin', newHeader);
      }
      titleEl.innerHTML = title;
    }
  }, {
    key: "removeTitle",
    value: function removeTitle() {
      var titleEl = this.content.querySelector('.lb-modal__title');
      var subtitleEl = this.content.querySelector('.lb-modal__subtitle');
      var headerEl = this.content.querySelector('.lb-modal__header');
      if (titleEl && !subtitleEl) {
        headerEl === null || headerEl === void 0 || headerEl.remove();
      } else if (titleEl) {
        titleEl.remove();
      }
    }
  }, {
    key: "setSubtitle",
    value: function setSubtitle(subtitle) {
      var titleEl = this.content.querySelector('.lb-modal__title');
      var subtitleEl = this.content.querySelector('.lb-modal__subtitle');
      var headerEl = this.content.querySelector('.lb-modal__header');
      if (!subtitleEl) {
        var newHeader = "<div class=\"lb-modal__header\">\n      ".concat(titleEl !== null && titleEl !== void 0 && titleEl.innerHTML ? "<div class=\"lb-modal__title\">\n      ".concat(titleEl.title, "\n      </div>") : '', "\n    \n       <div class=\"lb-modal__subtitle\">\n      ").concat(subtitle, "\n      </div>\n      </div>");
        headerEl === null || headerEl === void 0 || headerEl.remove();
        this.content.insertAdjacentHTML('afterbegin', newHeader);
      }
      subtitleEl.innerHTML = subtitle;
    }
  }, {
    key: "removeSubtitle",
    value: function removeSubtitle() {
      var titleEl = this.content.querySelector('.lb-modal__title');
      var subtitleEl = this.content.querySelector('.lb-modal__subtitle');
      var headerEl = this.content.querySelector('.lb-modal__header');
      if (!titleEl && subtitleEl) {
        headerEl === null || headerEl === void 0 || headerEl.remove();
      } else if (subtitleEl) {
        subtitleEl.remove();
      }
    }
  }, {
    key: "disableScroll",
    value: function disableScroll() {
      document.body.style.overflow = 'hidden';
      document.documentElement.style.scrollbarGutter = 'stable';
    }
  }, {
    key: "enableScroll",
    value: function enableScroll() {
      document.body.style.overflow = '';
      document.documentElement.style.scrollbarGutter = '';
    }
  }]);
}();

/***/ }),

/***/ "./src/shared/scripts/components/tooltip.ts":
/*!**************************************************!*\
  !*** ./src/shared/scripts/components/tooltip.ts ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   LbTooltip: () => (/* binding */ LbTooltip)
/* harmony export */ });
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/esm/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_objectWithoutProperties__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/objectWithoutProperties */ "./node_modules/@babel/runtime/helpers/esm/objectWithoutProperties.js");
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/esm/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/classCallCheck */ "./node_modules/@babel/runtime/helpers/esm/classCallCheck.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/esm/createClass.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _floating_ui_dom__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @floating-ui/dom */ "./node_modules/@floating-ui/dom/dist/floating-ui.dom.mjs");
/* harmony import */ var _floating_ui_dom__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @floating-ui/dom */ "./node_modules/@floating-ui/core/dist/floating-ui.core.mjs");





var _excluded = ["offset"];

function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__["default"])(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }

var LbTooltip = /*#__PURE__*/function () {
  function LbTooltip(reference, floating, params) {
    (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_3__["default"])(this, LbTooltip);
    this.reference = reference;
    this.floating = floating;
    this.params = params;
  }
  return (0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_4__["default"])(LbTooltip, [{
    key: "computePosition",
    value: function () {
      var _computePosition2 = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_2__["default"])( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_5___default().mark(function _callee() {
        var _arguments = arguments,
          _this = this;
        var _this$params, offset, params;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_5___default().wrap(function _callee$(_context) {
          while (1) switch (_context.prev = _context.next) {
            case 0:
              _this$params = this.params, offset = _this$params.offset, params = (0,_babel_runtime_helpers_objectWithoutProperties__WEBPACK_IMPORTED_MODULE_1__["default"])(_this$params, _excluded);
              _context.next = 3;
              return (0,_floating_ui_dom__WEBPACK_IMPORTED_MODULE_6__.computePosition)(this.reference, this.floating, _objectSpread(_objectSpread({}, params), {}, {
                middleware: [(0,_floating_ui_dom__WEBPACK_IMPORTED_MODULE_7__.offset)(offset || 0)]
              })).then(function (_ref) {
                var x = _ref.x,
                  y = _ref.y;
                Object.assign(_this.floating.style, {
                  left: "".concat(x, "px"),
                  top: "".concat(y, "px")
                });
                return _arguments[0];
              });
            case 3:
              this.cp = _context.sent;
              return _context.abrupt("return", this);
            case 5:
            case "end":
              return _context.stop();
          }
        }, _callee, this);
      }));
      function computePosition() {
        return _computePosition2.apply(this, arguments);
      }
      return computePosition;
    }()
  }, {
    key: "show",
    value: function show() {
      var _this2 = this;
      this.floating.classList.remove('lb-tooltip--hidden');
      setTimeout(function () {
        _this2.floating.classList.add('lb-tooltip--showed');
        _this2.computePosition();
      });
    }
  }, {
    key: "hide",
    value: function hide() {
      this.floating.classList.remove('lb-tooltip--showed');
      this.floating.classList.add('lb-tooltip--hidden');
    }
  }]);
}();

/***/ }),

/***/ "./src/shared/scripts/consts.ts":
/*!**************************************!*\
  !*** ./src/shared/scripts/consts.ts ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   API_URL: () => (/* binding */ API_URL)
/* harmony export */ });
var _document$querySelect;
var API_URL = ((_document$querySelect = document.querySelector('link[rel="https://api.w.org/"]')) === null || _document$querySelect === void 0 ? void 0 : _document$querySelect.href) || '/wp-json/';

/***/ }),

/***/ "?4f7e":
/*!********************************!*\
  !*** ./util.inspect (ignored) ***!
  \********************************/
/***/ (() => {

/* (ignored) */

/***/ })

/******/ });
/************************************************************************/
/******/ // The module cache
/******/ var __webpack_module_cache__ = {};
/******/ 
/******/ // The require function
/******/ function __webpack_require__(moduleId) {
/******/ 	// Check if module is in cache
/******/ 	var cachedModule = __webpack_module_cache__[moduleId];
/******/ 	if (cachedModule !== undefined) {
/******/ 		return cachedModule.exports;
/******/ 	}
/******/ 	// Create a new module (and put it into the cache)
/******/ 	var module = __webpack_module_cache__[moduleId] = {
/******/ 		// no module.id needed
/******/ 		// no module.loaded needed
/******/ 		exports: {}
/******/ 	};
/******/ 
/******/ 	// Execute the module function
/******/ 	__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 
/******/ 	// Return the exports of the module
/******/ 	return module.exports;
/******/ }
/******/ 
/******/ // expose the modules object (__webpack_modules__)
/******/ __webpack_require__.m = __webpack_modules__;
/******/ 
/************************************************************************/
/******/ /* webpack/runtime/chunk loaded */
/******/ (() => {
/******/ 	var deferred = [];
/******/ 	__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 		if(chunkIds) {
/******/ 			priority = priority || 0;
/******/ 			for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 			deferred[i] = [chunkIds, fn, priority];
/******/ 			return;
/******/ 		}
/******/ 		var notFulfilled = Infinity;
/******/ 		for (var i = 0; i < deferred.length; i++) {
/******/ 			var [chunkIds, fn, priority] = deferred[i];
/******/ 			var fulfilled = true;
/******/ 			for (var j = 0; j < chunkIds.length; j++) {
/******/ 				if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 					chunkIds.splice(j--, 1);
/******/ 				} else {
/******/ 					fulfilled = false;
/******/ 					if(priority < notFulfilled) notFulfilled = priority;
/******/ 				}
/******/ 			}
/******/ 			if(fulfilled) {
/******/ 				deferred.splice(i--, 1)
/******/ 				var r = fn();
/******/ 				if (r !== undefined) result = r;
/******/ 			}
/******/ 		}
/******/ 		return result;
/******/ 	};
/******/ })();
/******/ 
/******/ /* webpack/runtime/compat get default export */
/******/ (() => {
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = (module) => {
/******/ 		var getter = module && module.__esModule ?
/******/ 			() => (module['default']) :
/******/ 			() => (module);
/******/ 		__webpack_require__.d(getter, { a: getter });
/******/ 		return getter;
/******/ 	};
/******/ })();
/******/ 
/******/ /* webpack/runtime/define property getters */
/******/ (() => {
/******/ 	// define getter functions for harmony exports
/******/ 	__webpack_require__.d = (exports, definition) => {
/******/ 		for(var key in definition) {
/******/ 			if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 				Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 			}
/******/ 		}
/******/ 	};
/******/ })();
/******/ 
/******/ /* webpack/runtime/global */
/******/ (() => {
/******/ 	__webpack_require__.g = (function() {
/******/ 		if (typeof globalThis === 'object') return globalThis;
/******/ 		try {
/******/ 			return this || new Function('return this')();
/******/ 		} catch (e) {
/******/ 			if (typeof window === 'object') return window;
/******/ 		}
/******/ 	})();
/******/ })();
/******/ 
/******/ /* webpack/runtime/hasOwnProperty shorthand */
/******/ (() => {
/******/ 	__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ })();
/******/ 
/******/ /* webpack/runtime/make namespace object */
/******/ (() => {
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = (exports) => {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/ })();
/******/ 
/******/ /* webpack/runtime/jsonp chunk loading */
/******/ (() => {
/******/ 	// no baseURI
/******/ 	
/******/ 	// object to store loaded and loading chunks
/******/ 	// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 	// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 	var installedChunks = {
/******/ 		"blocks": 0
/******/ 	};
/******/ 	
/******/ 	// no chunk on demand loading
/******/ 	
/******/ 	// no prefetching
/******/ 	
/******/ 	// no preloaded
/******/ 	
/******/ 	// no HMR
/******/ 	
/******/ 	// no HMR manifest
/******/ 	
/******/ 	__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 	
/******/ 	// install a JSONP callback for chunk loading
/******/ 	var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 		var [chunkIds, moreModules, runtime] = data;
/******/ 		// add "moreModules" to the modules object,
/******/ 		// then flag all "chunkIds" as loaded and fire callback
/******/ 		var moduleId, chunkId, i = 0;
/******/ 		if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 		}
/******/ 		if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 		for(;i < chunkIds.length; i++) {
/******/ 			chunkId = chunkIds[i];
/******/ 			if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 				installedChunks[chunkId][0]();
/******/ 			}
/******/ 			installedChunks[chunkId] = 0;
/******/ 		}
/******/ 		return __webpack_require__.O(result);
/******/ 	}
/******/ 	
/******/ 	var chunkLoadingGlobal = self["webpackChunk_mercury_child_wp"] = self["webpackChunk_mercury_child_wp"] || [];
/******/ 	chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 	chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ })();
/******/ 
/************************************************************************/
/******/ 
/******/ // startup
/******/ // Load entry module and return exports
/******/ // This entry module depends on other loaded chunks and execution need to be delayed
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/age-gate-banner/age-gate-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/author-block/author-block.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/badge/badge.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/badge-group/badge-group.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/blockquote/blockquote.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/bonus-card/bonus-card.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/breadcrumbs/breadcrumbs.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/button/button.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/clipping/clipping.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/contributor-list/contributor-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/cookie-banner/cookie-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/ea-accordion/ea-accordion.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/featured-icon/featured-icon.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/group-list/group-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/hero-author-banner/hero-author-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/hero-banner/hero-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/hero-review-banner/hero-review-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/latest-posts/latest-posts.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/layout/layout.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/link-with-icon/link-with-icon.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/link-with-icon-list/link-with-icon-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/logo-text/logo-text.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/page-not-found/page-not-found.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/pagination/pagination.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/post-author/post-author.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/post-card/post-card.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/post-footer/post-footer.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/post-header/post-header.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/post-info/post-info.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/post-list/post-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/promo-bonus/promo-bonus.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/promo-button/promo-button.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/ref-review-modal/ref-review-modal.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/related-posts/related-posts.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/relinking-item/relinking-item.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/relinking-list/relinking-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/review-card/review-card.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/review-details/review-details.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/review-list/review-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/scroll-to-top/scroll-to-top.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/share-links/share-links.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/sidebar/sidebar.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/sites-linking/sites-linking.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/social-link/social-link.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/step-list/step-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/tag-list/tag-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/toc/toc.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/tooltip/tooltip.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/user-block/user-block.ts")))
/******/ var __webpack_exports__ = __webpack_require__.O(undefined, ["libs/chk-blocks-chk.lib"], () => (__webpack_require__("./src/blocks/width-container/width-container.ts")))
/******/ __webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 

//# sourceMappingURL=blocks.js.map
>>>>>>> Stashed changes
