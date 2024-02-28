/******/ var __webpack_modules__ = ({

/***/ "./public/fonts/lhicon/stylesheet.css":
/*!********************************************!*\
  !*** ./public/fonts/lhicon/stylesheet.css ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./public/fonts/poppins/stylesheet.css":
/*!*********************************************!*\
  !*** ./public/fonts/poppins/stylesheet.css ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/editor/editor.scss":
/*!********************************!*\
  !*** ./src/editor/editor.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/editor/blocks/index.ts":
/*!************************************!*\
  !*** ./src/editor/blocks/index.ts ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _variations__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./variations */ "./src/editor/blocks/variations/index.ts");
/* harmony import */ var _styles__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./styles */ "./src/editor/blocks/styles/index.ts");



/***/ }),

/***/ "./src/editor/blocks/styles/index.ts":
/*!*******************************************!*\
  !*** ./src/editor/blocks/styles/index.ts ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _media_text__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./media-text */ "./src/editor/blocks/styles/media-text.ts");


/***/ }),

/***/ "./src/editor/blocks/styles/media-text.ts":
/*!************************************************!*\
  !*** ./src/editor/blocks/styles/media-text.ts ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   S: () => (/* binding */ S)
/* harmony export */ });
const S = wp.domReady(function () {
  wp.blocks.registerBlockStyle('core/media-text', {
    name: 'media-text-bordered',
    label: 'Bordered'
  });
  /* wp.blocks.registerBlockVariation('core/media-text', {
    name: 'lb-logo-text',
    title: 'Logo & Text',
    //isDefault: true,
    attributes: {
      className: 'lb-media-text--style_logo',
      mediaPosition: 'left',
      mediaSizeSlug: 'medium',
      verticalAlignment: 'top',
    },
    supports: {
      mediaWidth: false,
    },
    innerBlocks: [
      [
        'core/heading',
        {
          level: 3,
          size: 'text-lg',
          placeholder: 'Enter title...',
        },
      ],
      [
        'core/paragraph',
        {
          placeholder: 'Start writing your text...',
        },
      ],
    ],
  })*/
});

/***/ }),

/***/ "./src/editor/blocks/variations/index.ts":
/*!***********************************************!*\
  !*** ./src/editor/blocks/variations/index.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _list__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./list */ "./src/editor/blocks/variations/list.ts");
/* harmony import */ var _list__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_list__WEBPACK_IMPORTED_MODULE_0__);


/***/ }),

/***/ "./src/editor/blocks/variations/list.ts":
/*!**********************************************!*\
  !*** ./src/editor/blocks/variations/list.ts ***!
  \**********************************************/
/***/ (() => {

wp.domReady(function () {
  /* wp.blocks.registerBlockVariation('core/media-text', {
    name: 'lb-logo-text',
    title: 'Logo & Text',
    //isDefault: true,
    attributes: {
      className: 'lb-media-text--style_logo',
      mediaPosition: 'left',
      mediaSizeSlug: 'medium',
      verticalAlignment: 'top',
    },
    supports: {
      mediaWidth: false,
    },
    innerBlocks: [
      [
        'core/heading',
        {
          level: 3,
          size: 'text-lg',
          placeholder: 'Enter title...',
        },
      ],
      [
        'core/paragraph',
        {
          placeholder: 'Start writing your text...',
        },
      ],
    ],
  })*/
});

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
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!******************************!*\
  !*** ./src/editor/editor.ts ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var fonts_poppins_stylesheet_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! fonts/poppins/stylesheet.css */ "./public/fonts/poppins/stylesheet.css");
/* harmony import */ var fonts_lhicon_stylesheet_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! fonts/lhicon/stylesheet.css */ "./public/fonts/lhicon/stylesheet.css");
/* harmony import */ var _editor_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./editor.scss */ "./src/editor/editor.scss");
/* harmony import */ var _blocks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./blocks */ "./src/editor/blocks/index.ts");




})();


//# sourceMappingURL=editor.js.map