"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunk"] = self["webpackChunk"] || []).push([["accordion"],{

/***/ "./assets/controllers/accordion.js":
/*!*****************************************!*\
  !*** ./assets/controllers/accordion.js ***!
  \*****************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _stimulus_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../stimulus.js */ \"./assets/stimulus.js\");\n/* harmony import */ var _scss_accordion_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../scss/accordion.scss */ \"./assets/scss/accordion.scss\");\nfunction _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\nfunction _toPropertyKey(arg) { var key = _toPrimitive(arg, \"string\"); return typeof key === \"symbol\" ? key : String(key); }\nfunction _toPrimitive(input, hint) { if (typeof input !== \"object\" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || \"default\"); if (typeof res !== \"object\") return res; throw new TypeError(\"@@toPrimitive must return a primitive value.\"); } return (hint === \"string\" ? String : Number)(input); }\n\n\nclass AccordionController extends _stimulus_js__WEBPACK_IMPORTED_MODULE_0__.Controller {\n  closeAccordions() {\n    this.accordionOutlets.forEach(accordion => {\n      if (accordion.element !== this.element) {\n        accordion.element.classList.remove('active');\n        accordion.contentTarget.style.maxHeight = '0';\n      }\n    });\n  }\n  activateAccordion() {\n    this.closeAccordions();\n    if (this.element.classList.contains('active')) {\n      this.contentTarget.style.maxHeight = '0';\n    } else {\n      this.contentTarget.style.maxHeight = this.contentTarget.scrollHeight + 'px';\n    }\n    this.element.classList.toggle('active');\n  }\n}\n_defineProperty(AccordionController, \"outlets\", ['accordion']);\n_defineProperty(AccordionController, \"targets\", ['content']);\napplication.register('accordion', AccordionController);\n\n//# sourceURL=webpack:///./assets/controllers/accordion.js?");

/***/ }),

/***/ "./assets/scss/accordion.scss":
/*!************************************!*\
  !*** ./assets/scss/accordion.scss ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack:///./assets/scss/accordion.scss?");

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["stimulus"], function() { return __webpack_exec__("./assets/controllers/accordion.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);