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

/***/ "./src/main/main.scss":
/*!****************************!*\
  !*** ./src/main/main.scss ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/main/scripts/components/dropdown.js":
/*!*************************************************!*\
  !*** ./src/main/scripts/components/dropdown.js ***!
  \*************************************************/
/***/ (() => {

;
(document.querySelectorAll('.lb-dropdown') ?? []).forEach(container => {
  const btnEl = container.querySelector('.lb-dropdown__header');
  btnEl.addEventListener('click', () => {
    if (container.classList.contains('lb-dropdown--state_opened')) {
      container.classList.remove('lb-dropdown--state_opened');
      container.classList.add('lb-dropdown--state_closed');
    } else {
      container.classList.remove('lb-dropdown--state_closed');
      container.classList.add('lb-dropdown--state_opened');
    }
  });
});

/***/ }),

/***/ "./src/main/scripts/components/index.js":
/*!**********************************************!*\
  !*** ./src/main/scripts/components/index.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _dropdown__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./dropdown */ "./src/main/scripts/components/dropdown.js");
/* harmony import */ var _dropdown__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_dropdown__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _mobile_menu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./mobile-menu */ "./src/main/scripts/components/mobile-menu.js");
/* harmony import */ var _mobile_menu__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_mobile_menu__WEBPACK_IMPORTED_MODULE_1__);



/***/ }),

/***/ "./src/main/scripts/components/mobile-menu.js":
/*!****************************************************!*\
  !*** ./src/main/scripts/components/mobile-menu.js ***!
  \****************************************************/
/***/ (() => {

// Search Block End
const $ = jQuery;
// Mobile Menu Open Start
$('#mobile-header-trigger').on('click', function () {
  $('.lb-mobile-menu').addClass('lb-mobile-menu--active');
  $('#mobile-header-trigger').addClass('is-active');
  $('body').css('overflow-y', 'hidden');
});
$('.lb-mobile-menu__close-button').on('click', closeMobileMenu);
$('.lb-mobile-menu').on('click', function (e) {
  if (e.target !== this) return;
  closeMobileMenu();
});
$('.menu-item-has-children > a').on('click', function (e) {
  e.preventDefault();
});
function closeMobileMenu() {
  $('.lb-mobile-menu').removeClass('lb-mobile-menu--active');
  $('#mobile-header-trigger').removeClass('is-active');
  $('body').css('overflow-y', '');
}

// Mobile Menu Open End

// Mobile Children Start

$('.lb-mobile-menu .menu-item-has-children>a').on('click', function (e) {
  e.preventDefault();
  let $parentLi = $(this).parent();
  $parentLi.addClass('toggled');
  if ($('.lb-mobile-menu .menu-item-has-children').hasClass('toggled')) {
    $parentLi.children('ul').toggle();
  }
  $parentLi.toggleClass('space-up');
  return false;
});

// Mobile Children End

/***/ }),

/***/ "./src/main/scripts/index.js":
/*!***********************************!*\
  !*** ./src/main/scripts/index.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components */ "./src/main/scripts/components/index.js");


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
/*!**************************!*\
  !*** ./src/main/main.ts ***!
  \**************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var fonts_poppins_stylesheet_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! fonts/poppins/stylesheet.css */ "./public/fonts/poppins/stylesheet.css");
/* harmony import */ var fonts_lhicon_stylesheet_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! fonts/lhicon/stylesheet.css */ "./public/fonts/lhicon/stylesheet.css");
/* harmony import */ var _main_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./main.scss */ "./src/main/main.scss");
/* harmony import */ var _scripts__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts */ "./src/main/scripts/index.js");







//# sourceMappingURL=main.js.map
=======
var e={3768:()=>{var e;(null!==(e=document.querySelectorAll(".lb-dropdown"))&&void 0!==e?e:[]).forEach((function(e){e.querySelector(".lb-dropdown__header").addEventListener("click",(function(){e.classList.contains("lb-dropdown--state_opened")?(e.classList.remove("lb-dropdown--state_opened"),e.classList.add("lb-dropdown--state_closed")):(e.classList.remove("lb-dropdown--state_closed"),e.classList.add("lb-dropdown--state_opened"))}))}))},2355:()=>{var e=jQuery;function o(){e(".lb-mobile-menu").removeClass("lb-mobile-menu--active"),e("#mobile-header-trigger").removeClass("is-active"),e("body").css("overflow-y","")}e("#mobile-header-trigger").on("click",(function(){e(".lb-mobile-menu").addClass("lb-mobile-menu--active"),e("#mobile-header-trigger").addClass("is-active"),e("body").css("overflow-y","hidden")})),e(".lb-mobile-menu__close-button").on("click",o),e(".lb-mobile-menu").on("click",(function(e){e.target===this&&o()})),e(".menu-item-has-children > a").on("click",(function(e){e.preventDefault()})),e(".lb-mobile-menu .menu-item-has-children>a").on("click",(function(o){o.preventDefault();var l=e(this).parent();return l.addClass("toggled"),e(".lb-mobile-menu .menu-item-has-children").hasClass("toggled")&&l.children("ul").toggle(),l.toggleClass("space-up"),!1}))}},o={};function l(t){var n=o[t];if(void 0!==n)return n.exports;var s=o[t]={exports:{}};return e[t](s,s.exports,l),s.exports}l(3768),l(2355);
>>>>>>> 1f5d16e59daa952a1e1f7659417d8233711b4ff4
