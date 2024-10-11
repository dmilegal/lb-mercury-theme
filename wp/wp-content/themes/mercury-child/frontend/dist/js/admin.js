/******/ var __webpack_modules__ = ({

/***/ "./public/fonts/lhicon/stylesheet.css":
/*!********************************************!*\
  !*** ./public/fonts/lhicon/stylesheet.css ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


<<<<<<< HEAD
/***/ }),

/***/ "./src/admin/listing-bonus-category-bonus.ts":
/*!***************************************************!*\
  !*** ./src/admin/listing-bonus-category-bonus.ts ***!
  \***************************************************/
/***/ (() => {

(function ($) {
  if (!acf) return;
  // Добавляем фильтр для модификации данных AJAX-запроса select2
  acf.add_filter('select2_ajax_data', function (data, args, $input, field, instance) {
    var _instance$data, _instance$data2;
    // Проверяем, что это поле 'bonus_category' (замените на ваш ключ поля)
    if (((_instance$data = instance.data) === null || _instance$data === void 0 || (_instance$data = _instance$data.field) === null || _instance$data === void 0 ? void 0 : _instance$data.get('key')) === 'field_668d9b8bce1ad_block' || ((_instance$data2 = instance.data) === null || _instance$data2 === void 0 || (_instance$data2 = _instance$data2.field) === null || _instance$data2 === void 0 ? void 0 : _instance$data2.get('key')) === 'field_668d9b8bce1ad_tpl') {
      var bonusEls = acf.findFields({
        key: 'field_670ea17e4269d_block',
        sibling: field
      });
      if (!bonusEls.length) {
        bonusEls = acf.findFields({
          key: 'field_670ea17e4269d_tpl',
          sibling: field
        });
      }
      if (!bonusEls.length) return;

      // Получаем значение из поля 'bonus' (замените на ваш ключ поля)
      var bonusField = $(bonusEls[0]).data('acf');
      if (!bonusField) return;
      var bonusValue = bonusField.val();
      // Добавляем параметр 'bonus' в данные AJAX-запроса
      data.bonus = bonusValue || '';
    }

    // Возвращаем измененные данные
    return data;
  });
})(jQuery);

=======
>>>>>>> 96d5cd7 (up)
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
<<<<<<< HEAD
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
=======
>>>>>>> 96d5cd7 (up)
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
/*!****************************!*\
  !*** ./src/admin/admin.ts ***!
  \****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var fonts_lhicon_stylesheet_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! fonts/lhicon/stylesheet.css */ "./public/fonts/lhicon/stylesheet.css");
<<<<<<< HEAD
/* harmony import */ var _listing_bonus_category_bonus__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./listing-bonus-category-bonus */ "./src/admin/listing-bonus-category-bonus.ts");
/* harmony import */ var _listing_bonus_category_bonus__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_listing_bonus_category_bonus__WEBPACK_IMPORTED_MODULE_1__);

=======
>>>>>>> 96d5cd7 (up)


//# sourceMappingURL=admin.js.map