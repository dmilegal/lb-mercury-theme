/******/ var __webpack_modules__ = ({

/***/ "./src/blocks/casino-list/casino-list.scss":
/*!*************************************************!*\
  !*** ./src/blocks/casino-list/casino-list.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


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
  !*** ./src/blocks/casino-list/casino-list.ts ***!
  \***********************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _casino_list_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./casino-list.scss */ "./src/blocks/casino-list/casino-list.scss");

function init() {
  const btns = document.querySelectorAll('.lb-casino-list__load-more');
  btns.forEach(btn => {
    btn.addEventListener('click', triggetLoad);
  });
}
async function triggetLoad(e) {
  const btn = e.currentTarget;
  const container = btn.closest('.lb-casino-list');
  const preparedQuery = prepareQuery(btn.dataset.query, {
    paged: (+btn.dataset.currentPage || 1) + 1
  });
  btn.classList.add('lb-button--pending');
  btn.disabled = true;
  try {
    const data = await load(preparedQuery);
    render(data.html, container);
  } catch (error) {
    console.error(error);
  }
  btn.classList.remove('lb-button--pending');
  btn.disabled = false;
}
async function load(query) {
  const res = await fetch(`/wp-json/aces/v1/html/casinos?${query || ''}`);
  const data = await res.json();
  return data;
}
function prepareQuery(query, data) {
  const params = new URLSearchParams(query);
  Object.keys(data || {}).forEach(key => {
    params.set(key, data[key] + '');
  });
  return params.toString();
}
function render(html, container) {
  const listEl = container.querySelector('.lb-casino-list__list');
  const btn = container.querySelector('.lb-casino-list__load-more');
  listEl.insertAdjacentHTML('beforeend', html);
  window.CasinoCardsInit(listEl);
  btn.dataset.currentPage = (+btn.dataset.currentPage || 1) + 1 + '';
  if (+btn.dataset.currentPage >= +btn.dataset.totalPages) btn.style.display = 'none';
}
init();
})();


//# sourceMappingURL=casino-list.js.map