/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/src/js/custom/apps/inbox/compose.js":
/*!*******************************************************!*\
  !*** ./resources/src/js/custom/apps/inbox/compose.js ***!
  \*******************************************************/
/***/ ((module) => {

eval(" // Class definition\n\nvar KTAppInboxCompose = function () {\n  // Private variables\n  var _composeEl; // Private methods\n\n\n  var _init = function _init() {\n    KTAppInboxLib.initEditor(_composeEl, 'kt_inbox_compose_editor');\n    KTAppInboxLib.initAttachments(document.querySelector('#kt_inbox_compose_attachments'), 'kt_inbox_compose_editor');\n    KTAppInboxLib.initForm(document.querySelector('#kt_inbox_compose_form'), 'kt_inbox_compose_editor');\n  }; // Public methods\n\n\n  return {\n    // Public functions\n    init: function init() {\n      // Init variables\n      _composeEl = document.querySelector('#kt_inbox_compose');\n\n      if (_composeEl !== null) {\n        _init();\n      }\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTAppInboxCompose.init();\n}); // Webpack support\n\nif ( true && typeof module.exports !== 'undefined') {\n  module.exports = KTAppInboxCompose;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9hcHBzL2luYm94L2NvbXBvc2UuanMuanMiLCJtYXBwaW5ncyI6IkNBRUE7O0FBQ0EsSUFBSUEsaUJBQWlCLEdBQUcsWUFBVztBQUMvQjtBQUNBLE1BQUlDLFVBQUosQ0FGK0IsQ0FJL0I7OztBQUNBLE1BQUlDLEtBQUssR0FBRyxTQUFSQSxLQUFRLEdBQVc7QUFDbkJDLElBQUFBLGFBQWEsQ0FBQ0MsVUFBZCxDQUEwQkgsVUFBMUIsRUFBc0MseUJBQXRDO0FBQ0FFLElBQUFBLGFBQWEsQ0FBQ0UsZUFBZCxDQUErQkMsUUFBUSxDQUFDQyxhQUFULENBQXVCLCtCQUF2QixDQUEvQixFQUF3Rix5QkFBeEY7QUFDQUosSUFBQUEsYUFBYSxDQUFDSyxRQUFkLENBQXdCRixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsd0JBQXZCLENBQXhCLEVBQTBFLHlCQUExRTtBQUNILEdBSkQsQ0FMK0IsQ0FXL0I7OztBQUNBLFNBQU87QUFDSDtBQUNBRSxJQUFBQSxJQUFJLEVBQUUsZ0JBQVc7QUFDYjtBQUNBUixNQUFBQSxVQUFVLEdBQUdLLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixtQkFBdkIsQ0FBYjs7QUFFQSxVQUFLTixVQUFVLEtBQUssSUFBcEIsRUFBMkI7QUFDdkJDLFFBQUFBLEtBQUs7QUFDUjtBQUNKO0FBVEUsR0FBUDtBQVdILENBdkJ1QixFQUF4QixDLENBeUJBOzs7QUFDQVEsTUFBTSxDQUFDQyxrQkFBUCxDQUEwQixZQUFXO0FBQ2pDWCxFQUFBQSxpQkFBaUIsQ0FBQ1MsSUFBbEI7QUFDSCxDQUZELEUsQ0FJQTs7QUFDQSxJQUFJLFNBQWlDLE9BQU9HLE1BQU0sQ0FBQ0MsT0FBZCxLQUEwQixXQUEvRCxFQUE0RTtBQUN4RUQsRUFBQUEsTUFBTSxDQUFDQyxPQUFQLEdBQWlCYixpQkFBakI7QUFDSCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9zcmMvanMvY3VzdG9tL2FwcHMvaW5ib3gvY29tcG9zZS5qcz9jNTM2Il0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RBcHBJbmJveENvbXBvc2UgPSBmdW5jdGlvbigpIHtcclxuICAgIC8vIFByaXZhdGUgdmFyaWFibGVzXHJcbiAgICB2YXIgX2NvbXBvc2VFbDtcclxuXHJcbiAgICAvLyBQcml2YXRlIG1ldGhvZHNcclxuICAgIHZhciBfaW5pdCA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIEtUQXBwSW5ib3hMaWIuaW5pdEVkaXRvciggX2NvbXBvc2VFbCwgJ2t0X2luYm94X2NvbXBvc2VfZWRpdG9yJyApO1xyXG4gICAgICAgIEtUQXBwSW5ib3hMaWIuaW5pdEF0dGFjaG1lbnRzKCBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcja3RfaW5ib3hfY29tcG9zZV9hdHRhY2htZW50cycpLCAna3RfaW5ib3hfY29tcG9zZV9lZGl0b3InICk7XHJcbiAgICAgICAgS1RBcHBJbmJveExpYi5pbml0Rm9ybSggZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2t0X2luYm94X2NvbXBvc2VfZm9ybScpLCAna3RfaW5ib3hfY29tcG9zZV9lZGl0b3InICk7XHJcbiAgICB9XHJcblxyXG4gICAgLy8gUHVibGljIG1ldGhvZHNcclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gUHVibGljIGZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICAvLyBJbml0IHZhcmlhYmxlc1xyXG4gICAgICAgICAgICBfY29tcG9zZUVsID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2t0X2luYm94X2NvbXBvc2UnKTtcclxuXHJcbiAgICAgICAgICAgIGlmICggX2NvbXBvc2VFbCAhPT0gbnVsbCApIHtcclxuICAgICAgICAgICAgICAgIF9pbml0KCk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1RBcHBJbmJveENvbXBvc2UuaW5pdCgpO1xyXG59KTtcclxuXHJcbi8vIFdlYnBhY2sgc3VwcG9ydFxyXG5pZiAodHlwZW9mIG1vZHVsZSAhPT0gJ3VuZGVmaW5lZCcgJiYgdHlwZW9mIG1vZHVsZS5leHBvcnRzICE9PSAndW5kZWZpbmVkJykge1xyXG4gICAgbW9kdWxlLmV4cG9ydHMgPSBLVEFwcEluYm94Q29tcG9zZTtcclxufSJdLCJuYW1lcyI6WyJLVEFwcEluYm94Q29tcG9zZSIsIl9jb21wb3NlRWwiLCJfaW5pdCIsIktUQXBwSW5ib3hMaWIiLCJpbml0RWRpdG9yIiwiaW5pdEF0dGFjaG1lbnRzIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiaW5pdEZvcm0iLCJpbml0IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIiwibW9kdWxlIiwiZXhwb3J0cyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/src/js/custom/apps/inbox/compose.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/src/js/custom/apps/inbox/compose.js");
/******/ 	
/******/ })()
;