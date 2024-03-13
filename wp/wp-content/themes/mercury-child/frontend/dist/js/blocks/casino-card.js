/******/ var __webpack_modules__ = ({

/***/ "./src/blocks/casino-card/variants/compact-casino-bonus/style.scss":
/*!*************************************************************************!*\
  !*** ./src/blocks/casino-card/variants/compact-casino-bonus/style.scss ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/casino-card/variants/default/style.scss":
/*!************************************************************!*\
  !*** ./src/blocks/casino-card/variants/default/style.scss ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/blocks/casino-card/variants/compact-casino-bonus/index.ts":
/*!***********************************************************************!*\
  !*** ./src/blocks/casino-card/variants/compact-casino-bonus/index.ts ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style.scss */ "./src/blocks/casino-card/variants/compact-casino-bonus/style.scss");

function init(zone = document.body) {
  zone.querySelectorAll('.lb-compact-casino-bonus-card:not(.lb-compact-casino-bonus-card--initiated)').forEach(el => {
    initTcMore(el);
    el.classList.add('lb-compact-casino-bonus-card--initiated');
  });
}
function initTcMore(el) {
  const btn = el.querySelector('.lb-compact-casino-bonus-card__tc-more');
  if (!btn) return;
  btn.addEventListener('click', show);
  const content = el.querySelector('.lb-compact-casino-bonus-card__tc-content');
  if (content.scrollHeight > content.clientHeight) btn.style.display = null;
}
function show(e) {
  const container = e.target.closest('.lb-compact-casino-bonus-card__tc--truncated');
  container.classList.remove('lb-compact-casino-bonus-card__tc--truncated');
  e.target.style.display = 'none';
}
init();

/***/ }),

/***/ "./src/blocks/casino-card/variants/default/index.ts":
/*!**********************************************************!*\
  !*** ./src/blocks/casino-card/variants/default/index.ts ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style.scss */ "./src/blocks/casino-card/variants/default/style.scss");

function init(zone = document.body) {
  zone.querySelectorAll('.lb-casino-card:not(.lb-casino-card--initiated)').forEach(el => {
    const btns = el.querySelectorAll('.lb-casino-card__read-more, .lb-casino-card__read-less');
    btns.forEach(btn => btn.addEventListener('click', toggle));
    el.classList.add('lb-casino-card--initiated');
  });
}
function toggle(e) {
  const container = e.target.closest('.lb-casino-card');
  container.classList.toggle('lb-casino-card--mr_closed');
  container.classList.toggle('lb-casino-card--mr_expanded');
}
init();
window.CasinoCardsInit = init;

/***/ }),

/***/ "./src/blocks/casino-card/variants/index.ts":
/*!**************************************************!*\
  !*** ./src/blocks/casino-card/variants/index.ts ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _default__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./default */ "./src/blocks/casino-card/variants/default/index.ts");
/* harmony import */ var _compact_casino_bonus__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./compact-casino-bonus */ "./src/blocks/casino-card/variants/compact-casino-bonus/index.ts");



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
/************************************************************************/
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
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!***********************************************!*\
  !*** ./src/blocks/casino-card/casino-card.ts ***!
  \***********************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _variants__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./variants */ "./src/blocks/casino-card/variants/index.ts");

})();


//# sourceMappingURL=casino-card.js.map