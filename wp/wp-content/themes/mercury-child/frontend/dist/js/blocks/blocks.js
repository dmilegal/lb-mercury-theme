<<<<<<< HEAD
/******/ var __webpack_modules__ = ({

/***/ "./node_modules/es-errors/eval.js":
/*!****************************************!*\
  !*** ./node_modules/es-errors/eval.js ***!
  \****************************************/
/***/ ((module) => {



/** @type {import('./eval')} */
module.exports = EvalError;


/***/ }),

/***/ "./node_modules/es-errors/range.js":
/*!*****************************************!*\
  !*** ./node_modules/es-errors/range.js ***!
  \*****************************************/
/***/ ((module) => {



/** @type {import('./range')} */
module.exports = RangeError;


/***/ }),

/***/ "./node_modules/es-errors/ref.js":
/*!***************************************!*\
  !*** ./node_modules/es-errors/ref.js ***!
  \***************************************/
/***/ ((module) => {



/** @type {import('./ref')} */
module.exports = ReferenceError;


/***/ }),

/***/ "./node_modules/es-errors/syntax.js":
/*!******************************************!*\
  !*** ./node_modules/es-errors/syntax.js ***!
  \******************************************/
/***/ ((module) => {



/** @type {import('./syntax')} */
module.exports = SyntaxError;


/***/ }),

/***/ "./node_modules/es-errors/type.js":
/*!****************************************!*\
  !*** ./node_modules/es-errors/type.js ***!
  \****************************************/
/***/ ((module) => {



/** @type {import('./type')} */
module.exports = TypeError;


/***/ }),

/***/ "./node_modules/es-errors/uri.js":
/*!***************************************!*\
  !*** ./node_modules/es-errors/uri.js ***!
  \***************************************/
/***/ ((module) => {



/** @type {import('./uri')} */
module.exports = URIError;


/***/ }),

/***/ "./node_modules/function-bind/implementation.js":
/*!******************************************************!*\
  !*** ./node_modules/function-bind/implementation.js ***!
  \******************************************************/
/***/ ((module) => {



/* eslint no-invalid-this: 1 */

var ERROR_MESSAGE = 'Function.prototype.bind called on incompatible ';
var toStr = Object.prototype.toString;
var max = Math.max;
var funcType = '[object Function]';

var concatty = function concatty(a, b) {
    var arr = [];

    for (var i = 0; i < a.length; i += 1) {
        arr[i] = a[i];
    }
    for (var j = 0; j < b.length; j += 1) {
        arr[j + a.length] = b[j];
    }

    return arr;
};

var slicy = function slicy(arrLike, offset) {
    var arr = [];
    for (var i = offset || 0, j = 0; i < arrLike.length; i += 1, j += 1) {
        arr[j] = arrLike[i];
    }
    return arr;
};

var joiny = function (arr, joiner) {
    var str = '';
    for (var i = 0; i < arr.length; i += 1) {
        str += arr[i];
        if (i + 1 < arr.length) {
            str += joiner;
        }
    }
    return str;
};

module.exports = function bind(that) {
    var target = this;
    if (typeof target !== 'function' || toStr.apply(target) !== funcType) {
        throw new TypeError(ERROR_MESSAGE + target);
    }
    var args = slicy(arguments, 1);

    var bound;
    var binder = function () {
        if (this instanceof bound) {
            var result = target.apply(
                this,
                concatty(args, arguments)
            );
            if (Object(result) === result) {
                return result;
            }
            return this;
        }
        return target.apply(
            that,
            concatty(args, arguments)
        );

    };

    var boundLength = max(0, target.length - args.length);
    var boundArgs = [];
    for (var i = 0; i < boundLength; i++) {
        boundArgs[i] = '$' + i;
    }

    bound = Function('binder', 'return function (' + joiny(boundArgs, ',') + '){ return binder.apply(this,arguments); }')(binder);

    if (target.prototype) {
        var Empty = function Empty() {};
        Empty.prototype = target.prototype;
        bound.prototype = new Empty();
        Empty.prototype = null;
    }

    return bound;
};


/***/ }),

/***/ "./node_modules/has-symbols/shams.js":
/*!*******************************************!*\
  !*** ./node_modules/has-symbols/shams.js ***!
  \*******************************************/
/***/ ((module) => {



/* eslint complexity: [2, 18], max-statements: [2, 33] */
module.exports = function hasSymbols() {
	if (typeof Symbol !== 'function' || typeof Object.getOwnPropertySymbols !== 'function') { return false; }
	if (typeof Symbol.iterator === 'symbol') { return true; }

	var obj = {};
	var sym = Symbol('test');
	var symObj = Object(sym);
	if (typeof sym === 'string') { return false; }

	if (Object.prototype.toString.call(sym) !== '[object Symbol]') { return false; }
	if (Object.prototype.toString.call(symObj) !== '[object Symbol]') { return false; }

	// temp disabled per https://github.com/ljharb/object.assign/issues/17
	// if (sym instanceof Symbol) { return false; }
	// temp disabled per https://github.com/WebReflection/get-own-property-symbols/issues/4
	// if (!(symObj instanceof Symbol)) { return false; }

	// if (typeof Symbol.prototype.toString !== 'function') { return false; }
	// if (String(sym) !== Symbol.prototype.toString.call(sym)) { return false; }

	var symVal = 42;
	obj[sym] = symVal;
	for (sym in obj) { return false; } // eslint-disable-line no-restricted-syntax, no-unreachable-loop
	if (typeof Object.keys === 'function' && Object.keys(obj).length !== 0) { return false; }

	if (typeof Object.getOwnPropertyNames === 'function' && Object.getOwnPropertyNames(obj).length !== 0) { return false; }

	var syms = Object.getOwnPropertySymbols(obj);
	if (syms.length !== 1 || syms[0] !== sym) { return false; }

	if (!Object.prototype.propertyIsEnumerable.call(obj, sym)) { return false; }

	if (typeof Object.getOwnPropertyDescriptor === 'function') {
		var descriptor = Object.getOwnPropertyDescriptor(obj, sym);
		if (descriptor.value !== symVal || descriptor.enumerable !== true) { return false; }
	}

	return true;
};


/***/ }),

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

/***/ "./src/blocks/lang-label/lang-label.scss":
/*!***********************************************!*\
  !*** ./src/blocks/lang-label/lang-label.scss ***!
  \***********************************************/
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

/***/ "./src/blocks/post-card/post-card.scss":
/*!*********************************************!*\
  !*** ./src/blocks/post-card/post-card.scss ***!
  \*********************************************/
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

/***/ "./node_modules/qs/lib/formats.js":
/*!****************************************!*\
  !*** ./node_modules/qs/lib/formats.js ***!
  \****************************************/
/***/ ((module) => {



var replace = String.prototype.replace;
var percentTwenties = /%20/g;

var Format = {
    RFC1738: 'RFC1738',
    RFC3986: 'RFC3986'
};

module.exports = {
    'default': Format.RFC3986,
    formatters: {
        RFC1738: function (value) {
            return replace.call(value, percentTwenties, '+');
        },
        RFC3986: function (value) {
            return String(value);
        }
    },
    RFC1738: Format.RFC1738,
    RFC3986: Format.RFC3986
};


/***/ }),

/***/ "./node_modules/qs/lib/utils.js":
/*!**************************************!*\
  !*** ./node_modules/qs/lib/utils.js ***!
  \**************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {



var formats = __webpack_require__(/*! ./formats */ "./node_modules/qs/lib/formats.js");

var has = Object.prototype.hasOwnProperty;
var isArray = Array.isArray;

var hexTable = (function () {
    var array = [];
    for (var i = 0; i < 256; ++i) {
        array.push('%' + ((i < 16 ? '0' : '') + i.toString(16)).toUpperCase());
    }

    return array;
}());

var compactQueue = function compactQueue(queue) {
    while (queue.length > 1) {
        var item = queue.pop();
        var obj = item.obj[item.prop];

        if (isArray(obj)) {
            var compacted = [];

            for (var j = 0; j < obj.length; ++j) {
                if (typeof obj[j] !== 'undefined') {
                    compacted.push(obj[j]);
                }
            }

            item.obj[item.prop] = compacted;
        }
    }
};

var arrayToObject = function arrayToObject(source, options) {
    var obj = options && options.plainObjects ? Object.create(null) : {};
    for (var i = 0; i < source.length; ++i) {
        if (typeof source[i] !== 'undefined') {
            obj[i] = source[i];
        }
    }

    return obj;
};

var merge = function merge(target, source, options) {
    /* eslint no-param-reassign: 0 */
    if (!source) {
        return target;
    }

    if (typeof source !== 'object') {
        if (isArray(target)) {
            target.push(source);
        } else if (target && typeof target === 'object') {
            if ((options && (options.plainObjects || options.allowPrototypes)) || !has.call(Object.prototype, source)) {
                target[source] = true;
            }
        } else {
            return [target, source];
        }

        return target;
    }

    if (!target || typeof target !== 'object') {
        return [target].concat(source);
    }

    var mergeTarget = target;
    if (isArray(target) && !isArray(source)) {
        mergeTarget = arrayToObject(target, options);
    }

    if (isArray(target) && isArray(source)) {
        source.forEach(function (item, i) {
            if (has.call(target, i)) {
                var targetItem = target[i];
                if (targetItem && typeof targetItem === 'object' && item && typeof item === 'object') {
                    target[i] = merge(targetItem, item, options);
                } else {
                    target.push(item);
                }
            } else {
                target[i] = item;
            }
        });
        return target;
    }

    return Object.keys(source).reduce(function (acc, key) {
        var value = source[key];

        if (has.call(acc, key)) {
            acc[key] = merge(acc[key], value, options);
        } else {
            acc[key] = value;
        }
        return acc;
    }, mergeTarget);
};

var assign = function assignSingleSource(target, source) {
    return Object.keys(source).reduce(function (acc, key) {
        acc[key] = source[key];
        return acc;
    }, target);
};

var decode = function (str, decoder, charset) {
    var strWithoutPlus = str.replace(/\+/g, ' ');
    if (charset === 'iso-8859-1') {
        // unescape never throws, no try...catch needed:
        return strWithoutPlus.replace(/%[0-9a-f]{2}/gi, unescape);
    }
    // utf-8
    try {
        return decodeURIComponent(strWithoutPlus);
    } catch (e) {
        return strWithoutPlus;
    }
};

var limit = 1024;

/* eslint operator-linebreak: [2, "before"] */

var encode = function encode(str, defaultEncoder, charset, kind, format) {
    // This code was originally written by Brian White (mscdex) for the io.js core querystring library.
    // It has been adapted here for stricter adherence to RFC 3986
    if (str.length === 0) {
        return str;
    }

    var string = str;
    if (typeof str === 'symbol') {
        string = Symbol.prototype.toString.call(str);
    } else if (typeof str !== 'string') {
        string = String(str);
    }

    if (charset === 'iso-8859-1') {
        return escape(string).replace(/%u[0-9a-f]{4}/gi, function ($0) {
            return '%26%23' + parseInt($0.slice(2), 16) + '%3B';
        });
    }

    var out = '';
    for (var j = 0; j < string.length; j += limit) {
        var segment = string.length >= limit ? string.slice(j, j + limit) : string;
        var arr = [];

        for (var i = 0; i < segment.length; ++i) {
            var c = segment.charCodeAt(i);
            if (
                c === 0x2D // -
                || c === 0x2E // .
                || c === 0x5F // _
                || c === 0x7E // ~
                || (c >= 0x30 && c <= 0x39) // 0-9
                || (c >= 0x41 && c <= 0x5A) // a-z
                || (c >= 0x61 && c <= 0x7A) // A-Z
                || (format === formats.RFC1738 && (c === 0x28 || c === 0x29)) // ( )
            ) {
                arr[arr.length] = segment.charAt(i);
                continue;
            }

            if (c < 0x80) {
                arr[arr.length] = hexTable[c];
                continue;
            }

            if (c < 0x800) {
                arr[arr.length] = hexTable[0xC0 | (c >> 6)]
                    + hexTable[0x80 | (c & 0x3F)];
                continue;
            }

            if (c < 0xD800 || c >= 0xE000) {
                arr[arr.length] = hexTable[0xE0 | (c >> 12)]
                    + hexTable[0x80 | ((c >> 6) & 0x3F)]
                    + hexTable[0x80 | (c & 0x3F)];
                continue;
            }

            i += 1;
            c = 0x10000 + (((c & 0x3FF) << 10) | (segment.charCodeAt(i) & 0x3FF));

            arr[arr.length] = hexTable[0xF0 | (c >> 18)]
                + hexTable[0x80 | ((c >> 12) & 0x3F)]
                + hexTable[0x80 | ((c >> 6) & 0x3F)]
                + hexTable[0x80 | (c & 0x3F)];
        }

        out += arr.join('');
    }

    return out;
};

var compact = function compact(value) {
    var queue = [{ obj: { o: value }, prop: 'o' }];
    var refs = [];

    for (var i = 0; i < queue.length; ++i) {
        var item = queue[i];
        var obj = item.obj[item.prop];

        var keys = Object.keys(obj);
        for (var j = 0; j < keys.length; ++j) {
            var key = keys[j];
            var val = obj[key];
            if (typeof val === 'object' && val !== null && refs.indexOf(val) === -1) {
                queue.push({ obj: obj, prop: key });
                refs.push(val);
            }
        }
    }

    compactQueue(queue);

    return value;
};

var isRegExp = function isRegExp(obj) {
    return Object.prototype.toString.call(obj) === '[object RegExp]';
};

var isBuffer = function isBuffer(obj) {
    if (!obj || typeof obj !== 'object') {
        return false;
    }

    return !!(obj.constructor && obj.constructor.isBuffer && obj.constructor.isBuffer(obj));
};

var combine = function combine(a, b) {
    return [].concat(a, b);
};

var maybeMap = function maybeMap(val, fn) {
    if (isArray(val)) {
        var mapped = [];
        for (var i = 0; i < val.length; i += 1) {
            mapped.push(fn(val[i]));
        }
        return mapped;
    }
    return fn(val);
};

module.exports = {
    arrayToObject: arrayToObject,
    assign: assign,
    combine: combine,
    compact: compact,
    decode: decode,
    encode: encode,
    isBuffer: isBuffer,
    isRegExp: isRegExp,
    maybeMap: maybeMap,
    merge: merge
};


/***/ }),

/***/ "./node_modules/qs/node_modules/call-bind/callBound.js":
/*!*************************************************************!*\
  !*** ./node_modules/qs/node_modules/call-bind/callBound.js ***!
  \*************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {



var GetIntrinsic = __webpack_require__(/*! get-intrinsic */ "./node_modules/qs/node_modules/get-intrinsic/index.js");

var callBind = __webpack_require__(/*! ./ */ "./node_modules/qs/node_modules/call-bind/index.js");

var $indexOf = callBind(GetIntrinsic('String.prototype.indexOf'));

module.exports = function callBoundIntrinsic(name, allowMissing) {
	var intrinsic = GetIntrinsic(name, !!allowMissing);
	if (typeof intrinsic === 'function' && $indexOf(name, '.prototype.') > -1) {
		return callBind(intrinsic);
	}
	return intrinsic;
};


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
  const els = document.querySelectorAll('.lb-clipping');
  els.forEach(container => {
    const textContainer = container.querySelector('.lb-clipping__content');
    const showBtn = container.querySelector('.lb-clipping__toggle--more');
    const lessBtn = container.querySelector('.lb-clipping__toggle--less');
    showBtn.addEventListener('click', () => {
      container.classList.remove('lb-clipping--hidden');
      container.classList.add('lb-clipping--showed');
    });
    lessBtn.addEventListener('click', () => {
      container.classList.add('lb-clipping--hidden');
      container.classList.remove('lb-clipping--showed');
    });
    window.addEventListener('resize', () => showReadMoreButton(textContainer));
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
  const body = document.body;
  const content = document.getElementById('cmplz-cookiebanner-container');
  const list = ['age-restriction'];
  if (!content) return;
  function checkAgeRestriction() {
    if (list.some(cl => body.classList.contains(cl))) {
      // Если класс есть, элемент должен быть скрыт дольше
      body.classList.add('cb-hide');

      // Начинаем наблюдение за body
      observer.observe(body, observerOptions);
    }
  }

  // Обработчик для наблюдения за изменениями классов на body
  const observer = new MutationObserver(() => {
    if (!list.some(cl => body.classList.contains(cl))) {
      // Если классы удалены, запускаем анимацию через 4с
      setTimeout(() => {
        body.classList.remove('cb-hide');
      }, 4000);
      observer.disconnect();
    }
  });

  // Опции для наблюдения за изменениями атрибутов (классов)
  const observerOptions = {
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

/***/ "./src/blocks/lang-label/lang-label.ts":
/*!*********************************************!*\
  !*** ./src/blocks/lang-label/lang-label.ts ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _lang_label_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./lang-label.scss */ "./src/blocks/lang-label/lang-label.scss");


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

/***/ "./src/blocks/post-card/post-card.ts":
/*!*******************************************!*\
  !*** ./src/blocks/post-card/post-card.ts ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _post_card_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./post-card.scss */ "./src/blocks/post-card/post-card.scss");


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
/* harmony import */ var _promo_button_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./promo-button.scss */ "./src/blocks/promo-button/promo-button.scss");

//import { LbTooltip } from '@/shared/scripts/components/tooltip'

function init(container = document.body) {
  const btns = container.querySelectorAll('.lb-promo-button:not(.lb-button--initiated)');
  btns.forEach(btn => {
    btn.addEventListener('click', () => onCopy(btn));
    btn.classList.add('lb-button--initiated');
  });
}
async function onCopy(btn) {
  if (!btn) return;
  try {
    if (navigator?.clipboard?.writeText) {
      await navigator.clipboard.writeText(btn.dataset.code);
    }
    if (!btn) return;
    const txtEl = btn.querySelector('.lb-button__content');
    txtEl.innerHTML = btn.dataset.text;
    setTimeout(() => {
      txtEl.innerHTML = btn.dataset.code;
    }, 2000);
  } catch (err) {
    console.error(err);
  }
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

/***/ "./src/blocks/review-card/review-card.ts":
/*!***********************************************!*\
  !*** ./src/blocks/review-card/review-card.ts ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _variants__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./variants */ "./src/blocks/review-card/variants/index.ts");


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

/***/ "./src/blocks/review-card/variants/default/index.ts":
/*!**********************************************************!*\
  !*** ./src/blocks/review-card/variants/default/index.ts ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style.scss */ "./src/blocks/review-card/variants/default/style.scss");

function init(zone = document.body) {
  zone.querySelectorAll('.lb-review-card:not(.lb-review-card--initiated)').forEach(el => {
    const btns = el.querySelectorAll('.lb-review-card__read-more, .lb-review-card__read-less');
    btns.forEach(btn => btn.addEventListener('click', toggle));
    el.classList.add('lb-review-card--initiated');
  });
}
function toggle(e) {
  const container = e.target.closest('.lb-review-card');
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
/* harmony import */ var qs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! qs */ "./node_modules/qs/lib/index.js");
/* harmony import */ var qs__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(qs__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _shared_scripts_consts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/shared/scripts/consts */ "./src/shared/scripts/consts.ts");
/* harmony import */ var _review_list_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./review-list.scss */ "./src/blocks/review-list/review-list.scss");
/* harmony import */ var _shared_scripts_components_modal__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @/shared/scripts/components/modal */ "./src/shared/scripts/components/modal.ts");




function init() {
  const btns = document.querySelectorAll('.lb-review-list__load-more');
  const listEls = document.querySelectorAll('.lb-review-list');
  btns.forEach(btn => {
    btn.addEventListener('click', triggetLoad);
  });
  listEls.forEach(el => {
    el.addEventListener('click', e => {
      if (e.target.closest('button.lb-review-card__play')) triggetRefModal(el);
    });
  });
}
async function triggetLoad(e) {
  const btn = e.currentTarget;
  const container = btn.closest('.lb-review-list');
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
  const res = await fetch(`${_shared_scripts_consts__WEBPACK_IMPORTED_MODULE_0__.API_URL}aces/v1/html/reviews?${query || ''}`);
  const data = await res.json();
  return data;
}
function prepareQuery(query, queryData, data) {
  let params = qs__WEBPACK_IMPORTED_MODULE_3___default().parse(query);
  params.query = {
    ...params?.query,
    ...queryData
  };
  params = {
    ...params,
    ...data
  };
  return qs__WEBPACK_IMPORTED_MODULE_3___default().stringify(params);
}
function render(html, container) {
  const listEl = container.querySelector('.lb-review-list__list');
  const btn = container.querySelector('.lb-review-list__load-more');
  listEl.insertAdjacentHTML('beforeend', html);
  window.CasinoCardsInit(listEl);
  window.initPromoButton(listEl);
  btn.dataset.currentPage = (+btn.dataset.currentPage || 1) + 1 + '';
  if (+btn.dataset.currentPage >= +btn.dataset.totalPages) btn.style.display = 'none';
}
async function triggetRefModal(container) {
  const modalEl = document.querySelector('#ref-review-list');
  if (!container || !modalEl) return;
  const list = container.dataset.refItems;
  const type = container.dataset.type;
  if (!list || !JSON.parse(list).length) return;
  const modal = new _shared_scripts_components_modal__WEBPACK_IMPORTED_MODULE_2__.Modal(modalEl);
  modal.openModal();
  const data = await load(prepareQuery('', {
    post__in: JSON.parse(list),
    post_type: type,
    posts_per_page: -1
  }, {
    card_variant: 'compact-bet'
  }));
  modal.setBody(data.html, '.lb-review-list__list');
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
  const container = document.querySelector('.lb-scroll-to-top');
  const btn = document.querySelector('.lb-scroll-to-top .lb-button');
  if (!btn) return;
  btn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth'
    });
  });
  window.addEventListener('scroll', handle);
  function handle() {
    const pageOffset = document.documentElement.scrollTop || document.body.scrollTop;
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
/* harmony import */ var _share_links_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./share-links.scss */ "./src/blocks/share-links/share-links.scss");

async function init() {
  const linkBtns = document.querySelectorAll('.lb-share-links__copy');
  if (!linkBtns.length) return;
  linkBtns.forEach(linkBtn => {
    let copiedDelay = false;
    linkBtn.addEventListener('click', async e => {
      e.preventDefault();
      if (copiedDelay) return;
      copiedDelay = true;
      try {
        if (navigator?.clipboard?.writeText) {
          await navigator.clipboard.writeText(linkBtn.dataset.href);
        }
        const prevHtml = linkBtn.innerHTML;
        linkBtn.innerHTML = prevHtml.replace('icon-link', 'icon-check');
        setTimeout(() => {
          linkBtn.innerHTML = prevHtml;
          copiedDelay = false;
        }, 1500);
      } catch (err) {
        console.error(err);
      }
    });
  });
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
/* harmony import */ var _toc_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./toc.scss */ "./src/blocks/toc/toc.scss");

document.querySelectorAll('.ez-toc-link').forEach(el => {
  el.addEventListener('click', e => {
    e.preventDefault();
    const elementWithText = [...document.querySelectorAll('h1,h2,h3,h4,h5,h6')].find(sEl => sEl.textContent.includes(el.textContent));
    if (!elementWithText) return;
    const headerEl = document.querySelector('.lb-header');
    const adminBarEl = document.querySelector('#wpadminbar');
    console.log(headerEl?.clientHeight || 0, adminBarEl?.clientHeight || 0);
    window.scrollTo({
      top: elementWithText.offsetTop - (headerEl?.clientHeight || 0) - (adminBarEl?.clientHeight || 0),
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
class Modal {
  templateContent = null;
  overlay = null;
  body = null;
  constructor(element) {
    if (typeof element === 'string') {
      const elem = document.querySelector(element);
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
  setupModal() {
    document.addEventListener('keydown', this.handleEscClose);

    // Attach event listeners for closing the modal
    this.modal.querySelector('[data-close]')?.addEventListener('click', () => this.closeModal());
    this.overlay = this.modal;
    this.overlay?.addEventListener('click', event => {
      if (event.target === this.overlay) {
        this.closeModal();
      }
    });
    this.body = this.modal.querySelector('.lb-modal__body');
  }
  attachModal() {
    document.body.appendChild(this.modal);
  }
  handleEscClose = event => {
    if (event.key === 'Escape') {
      this.closeModal();
    }
  };
  openModal() {
    this.modal.classList.remove('lb-modal--animating-out');
    this.modal.classList.add('lb-modal--active');
    setTimeout(() => {
      this.modal.classList.add('lb-modal--animating-in');
      this.modal.focus();
      this.disableScroll();
    }, 60);
  }
  closeModal() {
    this.modal.classList.remove('lb-modal--animating-in');
    this.modal.classList.add('lb-modal--animating-out');
    this.modal.classList.remove('lb-modal--active');
    this.enableScroll();
    this.modal.addEventListener('transitionend', () => this.destroy());
  }
  destroy() {
    this.modal.remove();
    document.removeEventListener('keydown', this.handleEscClose);
  }
  setBody(content, specificSelector) {
    const container = specificSelector ? this.body.querySelector(specificSelector) : this.body;
    container.innerHTML = '';
    if (typeof content === 'string') {
      container.innerHTML = content;
    } else {
      container.appendChild(content);
    }
  }
  disableScroll() {
    document.body.style.overflow = 'hidden';
    document.documentElement.style.scrollbarGutter = 'stable';
  }
  enableScroll() {
    document.body.style.overflow = '';
    document.documentElement.style.scrollbarGutter = '';
  }
}

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
/* harmony import */ var _floating_ui_dom__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @floating-ui/dom */ "./node_modules/@floating-ui/dom/dist/floating-ui.dom.mjs");
/* harmony import */ var _floating_ui_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @floating-ui/dom */ "./node_modules/@floating-ui/core/dist/floating-ui.core.mjs");

class LbTooltip {
  constructor(reference, floating, params) {
    this.reference = reference;
    this.floating = floating;
    this.params = params;
  }
  async computePosition() {
    const {
      offset,
      ...params
    } = this.params;
    this.cp = await (0,_floating_ui_dom__WEBPACK_IMPORTED_MODULE_0__.computePosition)(this.reference, this.floating, {
      ...params,
      middleware: [(0,_floating_ui_dom__WEBPACK_IMPORTED_MODULE_1__.offset)(offset || 0)]
    }).then(({
      x,
      y
    }) => {
      Object.assign(this.floating.style, {
        left: `${x}px`,
        top: `${y}px`
      });
      return arguments[0];
    });
    return this;
  }
  show() {
    this.floating.classList.remove('lb-tooltip--hidden');
    setTimeout(() => {
      this.floating.classList.add('lb-tooltip--showed');
      this.computePosition();
    });
  }
  hide() {
    this.floating.classList.remove('lb-tooltip--showed');
    this.floating.classList.add('lb-tooltip--hidden');
  }
}

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
const API_URL = document.querySelector('link[rel="https://api.w.org/"]')?.href || '/wp-json/';

/***/ }),

/***/ "?4f7e":
/*!********************************!*\
  !*** ./util.inspect (ignored) ***!
  \********************************/
/***/ (() => {

/* (ignored) */

/***/ }),

/***/ "./node_modules/@floating-ui/utils/dist/floating-ui.utils.dom.mjs":
/*!************************************************************************!*\
  !*** ./node_modules/@floating-ui/utils/dist/floating-ui.utils.dom.mjs ***!
  \************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   getComputedStyle: () => (/* binding */ getComputedStyle),
/* harmony export */   getContainingBlock: () => (/* binding */ getContainingBlock),
/* harmony export */   getDocumentElement: () => (/* binding */ getDocumentElement),
/* harmony export */   getNearestOverflowAncestor: () => (/* binding */ getNearestOverflowAncestor),
/* harmony export */   getNodeName: () => (/* binding */ getNodeName),
/* harmony export */   getNodeScroll: () => (/* binding */ getNodeScroll),
/* harmony export */   getOverflowAncestors: () => (/* binding */ getOverflowAncestors),
/* harmony export */   getParentNode: () => (/* binding */ getParentNode),
/* harmony export */   getWindow: () => (/* binding */ getWindow),
/* harmony export */   isContainingBlock: () => (/* binding */ isContainingBlock),
/* harmony export */   isElement: () => (/* binding */ isElement),
/* harmony export */   isHTMLElement: () => (/* binding */ isHTMLElement),
/* harmony export */   isLastTraversableNode: () => (/* binding */ isLastTraversableNode),
/* harmony export */   isNode: () => (/* binding */ isNode),
/* harmony export */   isOverflowElement: () => (/* binding */ isOverflowElement),
/* harmony export */   isShadowRoot: () => (/* binding */ isShadowRoot),
/* harmony export */   isTableElement: () => (/* binding */ isTableElement),
/* harmony export */   isWebKit: () => (/* binding */ isWebKit)
/* harmony export */ });
function getNodeName(node) {
  if (isNode(node)) {
    return (node.nodeName || '').toLowerCase();
  }
  // Mocked nodes in testing environments may not be instances of Node. By
  // returning `#document` an infinite loop won't occur.
  // https://github.com/floating-ui/floating-ui/issues/2317
  return '#document';
}
function getWindow(node) {
  var _node$ownerDocument;
  return (node == null || (_node$ownerDocument = node.ownerDocument) == null ? void 0 : _node$ownerDocument.defaultView) || window;
}
function getDocumentElement(node) {
  var _ref;
  return (_ref = (isNode(node) ? node.ownerDocument : node.document) || window.document) == null ? void 0 : _ref.documentElement;
}
function isNode(value) {
  return value instanceof Node || value instanceof getWindow(value).Node;
}
function isElement(value) {
  return value instanceof Element || value instanceof getWindow(value).Element;
}
function isHTMLElement(value) {
  return value instanceof HTMLElement || value instanceof getWindow(value).HTMLElement;
}
function isShadowRoot(value) {
  // Browsers without `ShadowRoot` support.
  if (typeof ShadowRoot === 'undefined') {
    return false;
  }
  return value instanceof ShadowRoot || value instanceof getWindow(value).ShadowRoot;
}
function isOverflowElement(element) {
  const {
    overflow,
    overflowX,
    overflowY,
    display
  } = getComputedStyle(element);
  return /auto|scroll|overlay|hidden|clip/.test(overflow + overflowY + overflowX) && !['inline', 'contents'].includes(display);
}
function isTableElement(element) {
  return ['table', 'td', 'th'].includes(getNodeName(element));
}
function isContainingBlock(element) {
  const webkit = isWebKit();
  const css = getComputedStyle(element);

  // https://developer.mozilla.org/en-US/docs/Web/CSS/Containing_block#identifying_the_containing_block
  return css.transform !== 'none' || css.perspective !== 'none' || (css.containerType ? css.containerType !== 'normal' : false) || !webkit && (css.backdropFilter ? css.backdropFilter !== 'none' : false) || !webkit && (css.filter ? css.filter !== 'none' : false) || ['transform', 'perspective', 'filter'].some(value => (css.willChange || '').includes(value)) || ['paint', 'layout', 'strict', 'content'].some(value => (css.contain || '').includes(value));
}
function getContainingBlock(element) {
  let currentNode = getParentNode(element);
  while (isHTMLElement(currentNode) && !isLastTraversableNode(currentNode)) {
    if (isContainingBlock(currentNode)) {
      return currentNode;
    } else {
      currentNode = getParentNode(currentNode);
    }
  }
  return null;
}
function isWebKit() {
  if (typeof CSS === 'undefined' || !CSS.supports) return false;
  return CSS.supports('-webkit-backdrop-filter', 'none');
}
function isLastTraversableNode(node) {
  return ['html', 'body', '#document'].includes(getNodeName(node));
}
function getComputedStyle(element) {
  return getWindow(element).getComputedStyle(element);
}
function getNodeScroll(element) {
  if (isElement(element)) {
    return {
      scrollLeft: element.scrollLeft,
      scrollTop: element.scrollTop
    };
  }
  return {
    scrollLeft: element.pageXOffset,
    scrollTop: element.pageYOffset
  };
}
function getParentNode(node) {
  if (getNodeName(node) === 'html') {
    return node;
  }
  const result =
  // Step into the shadow DOM of the parent of a slotted node.
  node.assignedSlot ||
  // DOM Element detected.
  node.parentNode ||
  // ShadowRoot detected.
  isShadowRoot(node) && node.host ||
  // Fallback.
  getDocumentElement(node);
  return isShadowRoot(result) ? result.host : result;
}
function getNearestOverflowAncestor(node) {
  const parentNode = getParentNode(node);
  if (isLastTraversableNode(parentNode)) {
    return node.ownerDocument ? node.ownerDocument.body : node.body;
  }
  if (isHTMLElement(parentNode) && isOverflowElement(parentNode)) {
    return parentNode;
  }
  return getNearestOverflowAncestor(parentNode);
}
function getOverflowAncestors(node, list, traverseIframes) {
  var _node$ownerDocument2;
  if (list === void 0) {
    list = [];
  }
  if (traverseIframes === void 0) {
    traverseIframes = true;
  }
  const scrollableAncestor = getNearestOverflowAncestor(node);
  const isBody = scrollableAncestor === ((_node$ownerDocument2 = node.ownerDocument) == null ? void 0 : _node$ownerDocument2.body);
  const win = getWindow(scrollableAncestor);
  if (isBody) {
    return list.concat(win, win.visualViewport || [], isOverflowElement(scrollableAncestor) ? scrollableAncestor : [], win.frameElement && traverseIframes ? getOverflowAncestors(win.frameElement) : []);
  }
  return list.concat(scrollableAncestor, getOverflowAncestors(scrollableAncestor, [], traverseIframes));
}




/***/ }),

/***/ "./node_modules/@floating-ui/utils/dist/floating-ui.utils.mjs":
/*!********************************************************************!*\
  !*** ./node_modules/@floating-ui/utils/dist/floating-ui.utils.mjs ***!
  \********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   alignments: () => (/* binding */ alignments),
/* harmony export */   clamp: () => (/* binding */ clamp),
/* harmony export */   createCoords: () => (/* binding */ createCoords),
/* harmony export */   evaluate: () => (/* binding */ evaluate),
/* harmony export */   expandPaddingObject: () => (/* binding */ expandPaddingObject),
/* harmony export */   floor: () => (/* binding */ floor),
/* harmony export */   getAlignment: () => (/* binding */ getAlignment),
/* harmony export */   getAlignmentAxis: () => (/* binding */ getAlignmentAxis),
/* harmony export */   getAlignmentSides: () => (/* binding */ getAlignmentSides),
/* harmony export */   getAxisLength: () => (/* binding */ getAxisLength),
/* harmony export */   getExpandedPlacements: () => (/* binding */ getExpandedPlacements),
/* harmony export */   getOppositeAlignmentPlacement: () => (/* binding */ getOppositeAlignmentPlacement),
/* harmony export */   getOppositeAxis: () => (/* binding */ getOppositeAxis),
/* harmony export */   getOppositeAxisPlacements: () => (/* binding */ getOppositeAxisPlacements),
/* harmony export */   getOppositePlacement: () => (/* binding */ getOppositePlacement),
/* harmony export */   getPaddingObject: () => (/* binding */ getPaddingObject),
/* harmony export */   getSide: () => (/* binding */ getSide),
/* harmony export */   getSideAxis: () => (/* binding */ getSideAxis),
/* harmony export */   max: () => (/* binding */ max),
/* harmony export */   min: () => (/* binding */ min),
/* harmony export */   placements: () => (/* binding */ placements),
/* harmony export */   rectToClientRect: () => (/* binding */ rectToClientRect),
/* harmony export */   round: () => (/* binding */ round),
/* harmony export */   sides: () => (/* binding */ sides)
/* harmony export */ });
/**
 * Custom positioning reference element.
 * @see https://floating-ui.com/docs/virtual-elements
 */

const sides = ['top', 'right', 'bottom', 'left'];
const alignments = ['start', 'end'];
const placements = /*#__PURE__*/sides.reduce((acc, side) => acc.concat(side, side + "-" + alignments[0], side + "-" + alignments[1]), []);
const min = Math.min;
const max = Math.max;
const round = Math.round;
const floor = Math.floor;
const createCoords = v => ({
  x: v,
  y: v
});
const oppositeSideMap = {
  left: 'right',
  right: 'left',
  bottom: 'top',
  top: 'bottom'
};
const oppositeAlignmentMap = {
  start: 'end',
  end: 'start'
};
function clamp(start, value, end) {
  return max(start, min(value, end));
}
function evaluate(value, param) {
  return typeof value === 'function' ? value(param) : value;
}
function getSide(placement) {
  return placement.split('-')[0];
}
function getAlignment(placement) {
  return placement.split('-')[1];
}
function getOppositeAxis(axis) {
  return axis === 'x' ? 'y' : 'x';
}
function getAxisLength(axis) {
  return axis === 'y' ? 'height' : 'width';
}
function getSideAxis(placement) {
  return ['top', 'bottom'].includes(getSide(placement)) ? 'y' : 'x';
}
function getAlignmentAxis(placement) {
  return getOppositeAxis(getSideAxis(placement));
}
function getAlignmentSides(placement, rects, rtl) {
  if (rtl === void 0) {
    rtl = false;
  }
  const alignment = getAlignment(placement);
  const alignmentAxis = getAlignmentAxis(placement);
  const length = getAxisLength(alignmentAxis);
  let mainAlignmentSide = alignmentAxis === 'x' ? alignment === (rtl ? 'end' : 'start') ? 'right' : 'left' : alignment === 'start' ? 'bottom' : 'top';
  if (rects.reference[length] > rects.floating[length]) {
    mainAlignmentSide = getOppositePlacement(mainAlignmentSide);
  }
  return [mainAlignmentSide, getOppositePlacement(mainAlignmentSide)];
}
function getExpandedPlacements(placement) {
  const oppositePlacement = getOppositePlacement(placement);
  return [getOppositeAlignmentPlacement(placement), oppositePlacement, getOppositeAlignmentPlacement(oppositePlacement)];
}
function getOppositeAlignmentPlacement(placement) {
  return placement.replace(/start|end/g, alignment => oppositeAlignmentMap[alignment]);
}
function getSideList(side, isStart, rtl) {
  const lr = ['left', 'right'];
  const rl = ['right', 'left'];
  const tb = ['top', 'bottom'];
  const bt = ['bottom', 'top'];
  switch (side) {
    case 'top':
    case 'bottom':
      if (rtl) return isStart ? rl : lr;
      return isStart ? lr : rl;
    case 'left':
    case 'right':
      return isStart ? tb : bt;
    default:
      return [];
  }
}
function getOppositeAxisPlacements(placement, flipAlignment, direction, rtl) {
  const alignment = getAlignment(placement);
  let list = getSideList(getSide(placement), direction === 'start', rtl);
  if (alignment) {
    list = list.map(side => side + "-" + alignment);
    if (flipAlignment) {
      list = list.concat(list.map(getOppositeAlignmentPlacement));
    }
  }
  return list;
}
function getOppositePlacement(placement) {
  return placement.replace(/left|right|bottom|top/g, side => oppositeSideMap[side]);
}
function expandPaddingObject(padding) {
  return {
    top: 0,
    right: 0,
    bottom: 0,
    left: 0,
    ...padding
  };
}
function getPaddingObject(padding) {
  return typeof padding !== 'number' ? expandPaddingObject(padding) : {
    top: padding,
    right: padding,
    bottom: padding,
    left: padding
  };
}
function rectToClientRect(rect) {
  return {
    ...rect,
    top: rect.y,
    left: rect.x,
    right: rect.x + rect.width,
    bottom: rect.y + rect.height
  };
}




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
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/age-gate-banner/age-gate-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/author-block/author-block.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/badge/badge.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/badge-group/badge-group.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/blockquote/blockquote.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/bonus-card/bonus-card.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/breadcrumbs/breadcrumbs.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/button/button.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/clipping/clipping.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/contributor-list/contributor-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/cookie-banner/cookie-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/ea-accordion/ea-accordion.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/featured-icon/featured-icon.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/group-list/group-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/hero-author-banner/hero-author-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/hero-banner/hero-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/hero-review-banner/hero-review-banner.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/lang-label/lang-label.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/logo-text/logo-text.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/page-not-found/page-not-found.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/pagination/pagination.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/post-card/post-card.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/post-footer/post-footer.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/post-header/post-header.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/post-info/post-info.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/post-list/post-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/promo-bonus/promo-bonus.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/promo-button/promo-button.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/ref-review-modal/ref-review-modal.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/review-card/review-card.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/review-details/review-details.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/review-list/review-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/scroll-to-top/scroll-to-top.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/share-links/share-links.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/sidebar/sidebar.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/social-link/social-link.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/step-list/step-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/tag-list/tag-list.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/toc/toc.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/tooltip/tooltip.ts")))
/******/ __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/user-block/user-block.ts")))
/******/ var __webpack_exports__ = __webpack_require__.O(undefined, ["libs/chk-blocks-chk-mdl-index-mdl","libs/chk-blocks-chk-mdl-floating-ui.dom-mdl","libs/chk-blocks-chk-mdl-floating-ui.core-mdl","libs/chk-blocks-chk-mdl-stringify-mdl","libs/chk-blocks-chk-mdl-parse-mdl"], () => (__webpack_require__("./src/blocks/width-container/width-container.ts")))
/******/ __webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 

//# sourceMappingURL=blocks.js.map
=======
var e,t={8829:()=>{},2025:()=>{},8529:()=>{},3117:()=>{},477:()=>{},1839:()=>{},2453:()=>{},4783:()=>{},7755:()=>{function e(e){e.offsetHeight<e.scrollHeight||e.offsetWidth<e.scrollWidth?e.closest(".lb-clipping").classList.add("lb-clipping--hidden"):e.closest(".lb-clipping").classList.remove("lb-clipping--hidden","lb-clipping--showed")}document.querySelectorAll(".lb-clipping").forEach((function(t){var n=t.querySelector(".lb-clipping__content"),r=t.querySelector(".lb-clipping__toggle--more"),o=t.querySelector(".lb-clipping__toggle--less");r.addEventListener("click",(function(){t.classList.remove("lb-clipping--hidden"),t.classList.add("lb-clipping--showed")})),o.addEventListener("click",(function(){t.classList.add("lb-clipping--hidden"),t.classList.remove("lb-clipping--showed")})),window.addEventListener("resize",(function(){return e(n)})),e(n)}))},2619:()=>{},6949:()=>{!function(){var e=document.body,t=document.getElementById("cmplz-cookiebanner-container"),n=["age-restriction"];if(t){var r=new MutationObserver((function(){n.some((function(t){return e.classList.contains(t)}))||(setTimeout((function(){e.classList.remove("cb-hide")}),4e3),r.disconnect())}));n.some((function(t){return e.classList.contains(t)}))&&(e.classList.add("cb-hide"),r.observe(e,{attributes:!0,attributeFilter:["class"]}))}}()},5773:()=>{},633:()=>{},7519:()=>{},4341:()=>{},2133:()=>{},4295:()=>{},7842:()=>{},3185:()=>{},5576:()=>{},4975:()=>{},7549:()=>{},4597:()=>{},9861:()=>{},4409:()=>{},4209:()=>{},6601:()=>{},2115:(e,t,n)=>{var r=n(467),o=n(4756),i=n.n(o);function l(){(arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.body).querySelectorAll(".lb-promo-button:not(.lb-button--initiated)").forEach((function(e){e.addEventListener("click",(function(){return function(e){return c.apply(this,arguments)}(e)})),e.classList.add("lb-button--initiated")}))}function c(){return(c=(0,r.A)(i().mark((function e(t){var n,r;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(t){e.next=2;break}return e.abrupt("return");case 2:if(e.prev=2,null===(n=navigator)||void 0===n||null===(n=n.clipboard)||void 0===n||!n.writeText){e.next=6;break}return e.next=6,navigator.clipboard.writeText(t.dataset.code);case 6:if(t){e.next=8;break}return e.abrupt("return");case 8:(r=t.querySelector(".lb-button__content")).innerHTML=t.dataset.text,setTimeout((function(){r.innerHTML=t.dataset.code}),2e3),e.next=16;break;case 13:e.prev=13,e.t0=e.catch(2),console.error(e.t0);case 16:case"end":return e.stop()}}),e,null,[[2,13]])})))).apply(this,arguments)}window.initPromoButton=l,l()},3791:()=>{},3725:()=>{},8219:(e,t,n)=>{var r=n(4467),o=n(3611),i=n(1236),l=n(9636);function c(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}(0,o.M_)("relinkingList",{callbacks:{initSlider:function(){var e=(0,o.V6)().ref,t=e.querySelector(".lb-relinking-list__slider"),n=e.querySelector(".lb-relinking-list__slider-next"),a=e.querySelector(".lb-relinking-list__slider-prev");new i.A(t,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?c(Object(n),!0).forEach((function(t){(0,r.A)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):c(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({slidesPerView:"auto",modules:[l.Vx],navigation:{nextEl:n,prevEl:a}},e.querySelector(".lb-relinking-list__slider--only-mobile")?{breakpoints:{576:{enabled:!1}}}:{}))}},actions:{showMore:function(){var e;(0,o.SD)().isLimited=!1,null===(e=(0,o.V6)().ref)||void 0===e||e.closest('[data-wp-interactive="relinkingList"]').querySelectorAll(".lb-relinking-item").forEach((function(e){e.hidden=!1,e.style.display=""}))}}})},8274:()=>{function e(){(arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.body).querySelectorAll(".lb-review-card:not(.lb-review-card--initiated)").forEach((function(e){e.querySelectorAll(".lb-review-card__read-more, .lb-review-card__read-less").forEach((function(e){return e.addEventListener("click",t)})),e.classList.add("lb-review-card--initiated")}))}function t(e){var t=e.target.closest(".lb-review-card");t.classList.toggle("lb-review-card--mr_closed"),t.classList.toggle("lb-review-card--mr_expanded")}function n(e){e.target.closest(".lb-compact-casino-bonus-card__tc--truncated").classList.remove("lb-compact-casino-bonus-card__tc--truncated"),e.target.style.display="none"}e(),window.CasinoCardsInit=e,function(){(arguments.length>0&&void 0!==arguments[0]?arguments[0]:document.body).querySelectorAll(".lb-compact-casino-bonus-card:not(.lb-compact-casino-bonus-card--initiated)").forEach((function(e){!function(e){var t=e.querySelector(".lb-compact-casino-bonus-card__tc-more");if(t){t.addEventListener("click",n);var r=e.querySelector(".lb-compact-casino-bonus-card__tc-content");r.scrollHeight>r.clientHeight&&(t.style.display=null)}}(e),e.classList.add("lb-compact-casino-bonus-card--initiated")}))}()},6337:()=>{},5087:(e,t,n)=>{var r,o,i,l=n(4467),c=n(467),a=n(4756),s=n.n(a),d=n(5373),u=n.n(d),v=(null===(r=document.querySelector('link[rel="https://api.w.org/"]'))||void 0===r?void 0:r.href)||"/wp-json/",p=n(3029),f=n(2901),b=function(){return(0,f.A)((function e(t){var n=this;if((0,p.A)(this,e),(0,l.A)(this,"templateContent",null),(0,l.A)(this,"overlay",null),(0,l.A)(this,"body",null),(0,l.A)(this,"handleEscClose",(function(e){"Escape"===e.key&&n.closeModal()})),"string"==typeof t){var r=document.querySelector(t);if(r instanceof HTMLTemplateElement)this.templateContent=r.content.cloneNode(!0),this.modal=this.templateContent.querySelector(".lb-modal__overlay");else{if(!(r instanceof HTMLElement))throw new Error("Element not found with the provided selector or invalid HTML element.");this.modal=r.cloneNode(!0)}}else if(t instanceof HTMLTemplateElement)this.templateContent=t.content.cloneNode(!0),this.modal=this.templateContent.querySelector(".lb-modal__overlay");else{if(!(t instanceof HTMLElement))throw new Error("Invalid element provided");this.modal=t.cloneNode(!0)}this.setupModal(),this.attachModal()}),[{key:"setupModal",value:function(){var e,t,n=this;document.addEventListener("keydown",this.handleEscClose),null===(e=this.modal.querySelector("[data-close]"))||void 0===e||e.addEventListener("click",(function(){return n.closeModal()})),this.overlay=this.modal,null===(t=this.overlay)||void 0===t||t.addEventListener("click",(function(e){e.target===n.overlay&&n.closeModal()})),this.body=this.modal.querySelector(".lb-modal__body")}},{key:"attachModal",value:function(){document.body.appendChild(this.modal)}},{key:"openModal",value:function(){var e=this;this.modal.classList.remove("lb-modal--animating-out"),this.modal.classList.add("lb-modal--active"),setTimeout((function(){e.modal.classList.add("lb-modal--animating-in"),e.modal.focus(),e.disableScroll()}),60)}},{key:"closeModal",value:function(){var e=this;this.modal.classList.remove("lb-modal--animating-in"),this.modal.classList.add("lb-modal--animating-out"),this.modal.classList.remove("lb-modal--active"),this.enableScroll(),this.modal.addEventListener("transitionend",(function(){return e.destroy()}))}},{key:"destroy",value:function(){this.modal.remove(),document.removeEventListener("keydown",this.handleEscClose)}},{key:"setBody",value:function(e,t){var n=t?this.body.querySelector(t):this.body;n.innerHTML="","string"==typeof e?n.innerHTML=e:n.appendChild(e)}},{key:"disableScroll",value:function(){document.body.style.overflow="hidden",document.documentElement.style.scrollbarGutter="stable"}},{key:"enableScroll",value:function(){document.body.style.overflow="",document.documentElement.style.scrollbarGutter=""}}])}();function h(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function m(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?h(Object(n),!0).forEach((function(t){(0,l.A)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):h(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function y(e){return g.apply(this,arguments)}function g(){return(g=(0,c.A)(s().mark((function e(t){var n,r,o;return s().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=t.currentTarget,r=n.closest(".lb-review-list"),o=_(n.dataset.query,{paged:(+n.dataset.currentPage||1)+1}),n.classList.add("lb-button--pending"),n.disabled=!0,e.prev=5,e.next=8,w(o);case 8:k(e.sent.html,r),e.next=15;break;case 12:e.prev=12,e.t0=e.catch(5),console.error(e.t0);case 15:n.classList.remove("lb-button--pending"),n.disabled=!1;case 17:case"end":return e.stop()}}),e,null,[[5,12]])})))).apply(this,arguments)}function w(e){return O.apply(this,arguments)}function O(){return(O=(0,c.A)(s().mark((function e(t){var n,r;return s().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,fetch("".concat(v,"aces/v1/html/reviews?").concat(t||""));case 2:return n=e.sent,e.next=5,n.json();case 5:return r=e.sent,e.abrupt("return",r);case 7:case"end":return e.stop()}}),e)})))).apply(this,arguments)}function _(e,t,n){var r,o=u().parse(e);return o.query=m(m({},null===(r=o)||void 0===r?void 0:r.query),t),o=m(m({},o),n),u().stringify(o)}function k(e,t){var n=t.querySelector(".lb-review-list__list"),r=t.querySelector(".lb-review-list__load-more");n.insertAdjacentHTML("beforeend",e),window.CasinoCardsInit(n),window.initPromoButton(n),r.dataset.currentPage=(+r.dataset.currentPage||1)+1+"",+r.dataset.currentPage>=+r.dataset.totalPages&&(r.style.display="none")}function L(){return(L=(0,c.A)(s().mark((function e(t){var n,r,o,i,l;return s().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(n=document.querySelector("#ref-review-list"),t&&n){e.next=3;break}return e.abrupt("return");case 3:if(r=t.dataset.refItems,o=t.dataset.type,r&&JSON.parse(r).length){e.next=7;break}return e.abrupt("return");case 7:return(i=new b(n)).openModal(),e.next=11,w(_("",{post__in:JSON.parse(r),post_type:o,posts_per_page:-1},{card_variant:"compact-bet"}));case 11:l=e.sent,i.setBody(l.html,".lb-review-list__list");case 13:case"end":return e.stop()}}),e)})))).apply(this,arguments)}o=document.querySelectorAll(".lb-review-list__load-more"),i=document.querySelectorAll(".lb-review-list"),o.forEach((function(e){e.addEventListener("click",y)})),i.forEach((function(e){e.addEventListener("click",(function(t){t.target.closest("button.lb-review-card__play")&&function(e){L.apply(this,arguments)}(e)}))}))},5133:()=>{!function(){var e=document.querySelector(".lb-scroll-to-top"),t=document.querySelector(".lb-scroll-to-top .lb-button");function n(){(document.documentElement.scrollTop||document.body.scrollTop)>=1e3?e.classList.remove("lb-scroll-to-top--hidden"):e.classList.add("lb-scroll-to-top--hidden")}t&&(t.addEventListener("click",(function(){window.scrollTo({top:0,left:0,behavior:"smooth"})})),window.addEventListener("scroll",n),n())}()},8445:(e,t,n)=>{var r=n(467),o=n(4756),i=n.n(o);function l(){return l=(0,r.A)(i().mark((function e(){var t;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if((t=document.querySelectorAll(".lb-share-links__copy")).length){e.next=3;break}return e.abrupt("return");case 3:t.forEach((function(e){var t=!1;e.addEventListener("click",function(){var n=(0,r.A)(i().mark((function n(r){var o,l;return i().wrap((function(n){for(;;)switch(n.prev=n.next){case 0:if(r.preventDefault(),!t){n.next=3;break}return n.abrupt("return");case 3:if(t=!0,n.prev=4,null===(o=navigator)||void 0===o||null===(o=o.clipboard)||void 0===o||!o.writeText){n.next=8;break}return n.next=8,navigator.clipboard.writeText(e.dataset.href);case 8:l=e.innerHTML,e.innerHTML=l.replace("icon-link","icon-check"),setTimeout((function(){e.innerHTML=l,t=!1}),1500),n.next=16;break;case 13:n.prev=13,n.t0=n.catch(4),console.error(n.t0);case 16:case"end":return n.stop()}}),n,null,[[4,13]])})));return function(e){return n.apply(this,arguments)}}())}));case 4:case"end":return e.stop()}}),e)}))),l.apply(this,arguments)}!function(){l.apply(this,arguments)}()},8065:()=>{},3545:()=>{},6421:()=>{},8841:()=>{},9477:(e,t,n)=>{var r=n(4506);document.querySelectorAll(".ez-toc-link").forEach((function(e){e.addEventListener("click",(function(t){t.preventDefault();var n=(0,r.A)(document.querySelectorAll("h1,h2,h3,h4,h5,h6")).find((function(t){return t.textContent.includes(e.textContent)}));if(n){var o=document.querySelector(".lb-header"),i=document.querySelector("#wpadminbar");console.log((null==o?void 0:o.clientHeight)||0,(null==i?void 0:i.clientHeight)||0),window.scrollTo({top:n.offsetTop-((null==o?void 0:o.clientHeight)||0)-((null==i?void 0:i.clientHeight)||0),behavior:"smooth"})}}))}))},858:(e,t,n)=>{n(4467),n(3986),n(467),n(3029),n(2901),n(4756),n(2425),n(5361)},5521:()=>{},6653:()=>{},2634:()=>{}},n={};function r(e){var o=n[e];if(void 0!==o)return o.exports;var i=n[e]={exports:{}};return t[e](i,i.exports,r),i.exports}r.m=t,e=[],r.O=(t,n,o,i)=>{if(!n){var l=1/0;for(d=0;d<e.length;d++){for(var[n,o,i]=e[d],c=!0,a=0;a<n.length;a++)(!1&i||l>=i)&&Object.keys(r.O).every((e=>r.O[e](n[a])))?n.splice(a--,1):(c=!1,i<l&&(l=i));if(c){e.splice(d--,1);var s=o();void 0!==s&&(t=s)}}return t}i=i||0;for(var d=e.length;d>0&&e[d-1][2]>i;d--)e[d]=e[d-1];e[d]=[n,o,i]},r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={617:0};r.O.j=t=>0===e[t];var t=(t,n)=>{var o,i,[l,c,a]=n,s=0;if(l.some((t=>0!==e[t]))){for(o in c)r.o(c,o)&&(r.m[o]=c[o]);if(a)var d=a(r)}for(t&&t(n);s<l.length;s++)i=l[s],r.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return r.O(d)},n=self.webpackChunk_mercury_child_wp=self.webpackChunk_mercury_child_wp||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})(),r.O(void 0,[757],(()=>r(8829))),r.O(void 0,[757],(()=>r(2025))),r.O(void 0,[757],(()=>r(3117))),r.O(void 0,[757],(()=>r(8529))),r.O(void 0,[757],(()=>r(477))),r.O(void 0,[757],(()=>r(1839))),r.O(void 0,[757],(()=>r(2453))),r.O(void 0,[757],(()=>r(4783))),r.O(void 0,[757],(()=>r(7755))),r.O(void 0,[757],(()=>r(2619))),r.O(void 0,[757],(()=>r(6949))),r.O(void 0,[757],(()=>r(5773))),r.O(void 0,[757],(()=>r(633))),r.O(void 0,[757],(()=>r(7519))),r.O(void 0,[757],(()=>r(4341))),r.O(void 0,[757],(()=>r(2133))),r.O(void 0,[757],(()=>r(4295))),r.O(void 0,[757],(()=>r(7842))),r.O(void 0,[757],(()=>r(3185))),r.O(void 0,[757],(()=>r(5576))),r.O(void 0,[757],(()=>r(4975))),r.O(void 0,[757],(()=>r(7549))),r.O(void 0,[757],(()=>r(4597))),r.O(void 0,[757],(()=>r(9861))),r.O(void 0,[757],(()=>r(4409))),r.O(void 0,[757],(()=>r(4209))),r.O(void 0,[757],(()=>r(6601))),r.O(void 0,[757],(()=>r(2115))),r.O(void 0,[757],(()=>r(3791))),r.O(void 0,[757],(()=>r(3725))),r.O(void 0,[757],(()=>r(8219))),r.O(void 0,[757],(()=>r(8274))),r.O(void 0,[757],(()=>r(6337))),r.O(void 0,[757],(()=>r(5087))),r.O(void 0,[757],(()=>r(5133))),r.O(void 0,[757],(()=>r(8445))),r.O(void 0,[757],(()=>r(8065))),r.O(void 0,[757],(()=>r(3545))),r.O(void 0,[757],(()=>r(6421))),r.O(void 0,[757],(()=>r(8841))),r.O(void 0,[757],(()=>r(9477))),r.O(void 0,[757],(()=>r(858))),r.O(void 0,[757],(()=>r(5521)));var o=r.O(void 0,[757],(()=>r(6653)));o=r.O(o);
>>>>>>> 1f5d16e59daa952a1e1f7659417d8233711b4ff4
