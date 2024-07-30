<<<<<<< HEAD
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

/***/ "./src/editor/blocks/styles/group.ts":
/*!*******************************************!*\
  !*** ./src/editor/blocks/styles/group.ts ***!
  \*******************************************/
/***/ (() => {

wp.domReady(function () {
  wp.blocks.registerBlockStyle('core/group', {
    name: 'group-bordered',
    label: 'Bordered'
  });
});

/***/ }),

/***/ "./src/editor/blocks/styles/index.ts":
/*!*******************************************!*\
  !*** ./src/editor/blocks/styles/index.ts ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _media_text__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./media-text */ "./src/editor/blocks/styles/media-text.ts");
/* harmony import */ var _list__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./list */ "./src/editor/blocks/styles/list.ts");
/* harmony import */ var _group__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./group */ "./src/editor/blocks/styles/group.ts");
/* harmony import */ var _group__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_group__WEBPACK_IMPORTED_MODULE_2__);




/***/ }),

/***/ "./src/editor/blocks/styles/list.ts":
/*!******************************************!*\
  !*** ./src/editor/blocks/styles/list.ts ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   S: () => (/* binding */ S)
/* harmony export */ });
var S = wp.domReady(function () {
  wp.blocks.registerBlockStyle('core/list', {
    name: 'list-bordered',
    label: 'Bordered'
  });
});

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
var S = wp.domReady(function () {
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

/***/ "./src/editor/blocks/variations/group-list.ts":
/*!****************************************************!*\
  !*** ./src/editor/blocks/variations/group-list.ts ***!
  \****************************************************/
/***/ (() => {

wp.domReady(function () {
  wp.blocks.registerBlockVariation('lb/group-list', {
    name: 'advantages',
    title: 'Advantages',
    icon: 'plus-alt',
    keywords: ['advantages', 'list', 'group', 'pros'],
    attributes: {
      data: {
        mark_ico: 'check',
        title: wp.i18n.__('Advantages', 'mercury-child')
      }
    }
  });
  wp.blocks.registerBlockVariation('lb/group-list', {
    name: 'disadvantages',
    title: 'Disadvantages',
    icon: 'minus',
    keywords: ['disadvantages', 'list', 'group', 'cons'],
    attributes: {
      data: {
        mark_ico: 'cross',
        title: wp.i18n.__('Disadvantages', 'mercury-child')
      }
    }
  });
  wp.blocks.registerBlockVariation('core/columns', {
    name: 'pros-cons',
    title: 'Pros & Cons',
    icon: 'star-half',
    keywords: ['pros', 'cons', 'compare', 'advantages', 'disadvantages'],
    attributes: {
      className: 'lb-pros-cons',
      templateLock: 'all',
      flexWrap: 'nowrap'
    },
    innerBlocks: [['core/column', {}, [['lb/group-list', {
      data: {
        mark_ico: 'check',
        title: wp.i18n.__('Advantages', 'mercury-child')
      }
    }]]], ['core/column', {}, [['lb/group-list', {
      data: {
        mark_ico: 'cross',
        title: wp.i18n.__('Disadvantages', 'mercury-child')
      }
    }]]]]
  });
});

/***/ }),

/***/ "./src/editor/blocks/variations/group.ts":
/*!***********************************************!*\
  !*** ./src/editor/blocks/variations/group.ts ***!
  \***********************************************/
/***/ (() => {

wp.domReady(function () {
  /*wp.blocks.registerBlockVariation('core/group', {
    name: 'advantages',
    title: 'Advantages',
    attributes: {
      className: 'is-style-group-bordered',
    },
    innerBlocks: [
      [
        'core/paragraph',
        {
          className: 'has-text-lg-font-size has-gray-900-color',
          placeholder: 'Enter title...',
        },
      ],
      [
        'core/list',
        {
          className: 'is-list-ico-check',
        },
        [
          [
            'core/list-item',
            {
              placeholder: 'Enter Advantages...',
            },
          ],
        ],
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
/* harmony import */ var _group__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./group */ "./src/editor/blocks/variations/group.ts");
/* harmony import */ var _group__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_group__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _group_list__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./group-list */ "./src/editor/blocks/variations/group-list.ts");
/* harmony import */ var _group_list__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_group_list__WEBPACK_IMPORTED_MODULE_2__);




/***/ }),

/***/ "./src/editor/blocks/variations/list.ts":
/*!**********************************************!*\
  !*** ./src/editor/blocks/variations/list.ts ***!
  \**********************************************/
/***/ (() => {

wp.domReady(function () {
  wp.blocks.registerBlockVariation('core/list', {
    name: 'list-with-ico-check',
    title: 'List - ✓ Icon',
    attributes: {
      className: 'is-list-ico-check'
    }
  });
  wp.blocks.registerBlockVariation('core/list', {
    name: 'list-with-ico-cross',
    title: 'List - ✘ Icon',
    attributes: {
      className: 'is-list-ico-cross'
    }
  });
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
/*!******************************!*\
  !*** ./src/editor/editor.ts ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var fonts_poppins_stylesheet_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! fonts/poppins/stylesheet.css */ "./public/fonts/poppins/stylesheet.css");
/* harmony import */ var fonts_lhicon_stylesheet_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! fonts/lhicon/stylesheet.css */ "./public/fonts/lhicon/stylesheet.css");
/* harmony import */ var _editor_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./editor.scss */ "./src/editor/editor.scss");
/* harmony import */ var _blocks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./blocks */ "./src/editor/blocks/index.ts");





//# sourceMappingURL=editor.js.map
=======
var e={8588:()=>{wp.domReady((function(){wp.blocks.registerBlockStyle("core/group",{name:"group-bordered",label:"Bordered"})}))},5461:()=>{wp.domReady((function(){wp.blocks.registerBlockVariation("lb/group-list",{name:"advantages",title:"Advantages",icon:"plus-alt",keywords:["advantages","list","group","pros"],attributes:{data:{mark_ico:"check",title:wp.i18n.__("Advantages","mercury-child")}}}),wp.blocks.registerBlockVariation("lb/group-list",{name:"disadvantages",title:"Disadvantages",icon:"minus",keywords:["disadvantages","list","group","cons"],attributes:{data:{mark_ico:"cross",title:wp.i18n.__("Disadvantages","mercury-child")}}}),wp.blocks.registerBlockVariation("core/columns",{name:"pros-cons",title:"Pros & Cons",icon:"star-half",keywords:["pros","cons","compare","advantages","disadvantages"],attributes:{className:"lb-pros-cons",templateLock:"all",flexWrap:"nowrap"},innerBlocks:[["core/column",{},[["lb/group-list",{data:{mark_ico:"check",title:wp.i18n.__("Advantages","mercury-child")}}]]],["core/column",{},[["lb/group-list",{data:{mark_ico:"cross",title:wp.i18n.__("Disadvantages","mercury-child")}}]]]]})}))},8560:()=>{wp.domReady((function(){}))},3195:()=>{wp.domReady((function(){wp.blocks.registerBlockVariation("core/list",{name:"list-with-ico-check",title:"List - ✓ Icon",attributes:{className:"is-list-ico-check"}}),wp.blocks.registerBlockVariation("core/list",{name:"list-with-ico-cross",title:"List - ✘ Icon",attributes:{className:"is-list-ico-cross"}})}))}},t={};function o(a){var r=t[a];if(void 0!==r)return r.exports;var s=t[a]={exports:{}};return e[a](s,s.exports,o),s.exports}o(3195),o(8560),o(5461),wp.domReady((function(){wp.blocks.registerBlockStyle("core/media-text",{name:"media-text-bordered",label:"Bordered"})})),wp.domReady((function(){wp.blocks.registerBlockStyle("core/list",{name:"list-bordered",label:"Bordered"})})),o(8588);
>>>>>>> a1bedd194c5e5fc7bcde65aad0fd8a24ae369fdf
