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

/***/ "./resources/src/js/custom/documentation/forms/multiselectsplitter.js":
/*!****************************************************************************!*\
  !*** ./resources/src/js/custom/documentation/forms/multiselectsplitter.js ***!
  \****************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTFormsMultiselectsplitterDemos = function () {\n  // Private functions\n  var example1 = function example1() {\n    $(\"#kt_multiselectsplitter_example_1\").multiselectsplitter();\n  };\n\n  var example2 = function example2() {\n    $('#kt_multiselectsplitter_example_2').multiselectsplitter({\n      selectSize: 7,\n      clearOnFirstChange: true,\n      groupCounter: true\n    });\n  };\n\n  var example3 = function example3() {\n    $('#kt_multiselectsplitter_example_3').multiselectsplitter({\n      groupCounter: true,\n      maximumSelected: 2\n    });\n  };\n\n  var example4 = function example4() {\n    $('#kt_multiselectsplitter_example_4').multiselectsplitter({\n      groupCounter: true,\n      maximumSelected: 3,\n      onlySameGroup: true\n    });\n  };\n\n  var example5 = function example5() {\n    $('#kt_multiselectsplitter_example_5').multiselectsplitter({\n      size: 6,\n      groupCounter: true,\n      maximumSelected: 2,\n      maximumAlert: function maximumAlert(maximumSelected) {\n        alert(\"You choose \" + (maximumSelected + 1) + \" options. Are you crazy ?\");\n      },\n      createFirstSelect: function createFirstSelect(label, $originalSelect) {\n        return \"<option class=\\\"text-success\\\">prefix - \" + label + \"</option>\";\n      },\n      createSecondSelect: function createSecondSelect(label, $firstSelect) {\n        return \"<option class=\\\"text-danger\\\"> ??? </option>\";\n      }\n    });\n  };\n\n  return {\n    // Public Functions\n    init: function init() {\n      example1();\n      example2();\n      example3();\n      example4();\n      example5();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsMultiselectsplitterDemos.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2Zvcm1zL211bHRpc2VsZWN0c3BsaXR0ZXIuanMuanMiLCJtYXBwaW5ncyI6IkNBRUE7O0FBQ0EsSUFBSUEsK0JBQStCLEdBQUcsWUFBVztBQUM3QztBQUNBLE1BQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFXLEdBQVc7QUFDdEJDLElBQUFBLENBQUMsQ0FBQyxtQ0FBRCxDQUFELENBQXVDQyxtQkFBdkM7QUFDSCxHQUZEOztBQUlBLE1BQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFXLEdBQVc7QUFDdEJGLElBQUFBLENBQUMsQ0FBQyxtQ0FBRCxDQUFELENBQXVDQyxtQkFBdkMsQ0FBMkQ7QUFDN0RFLE1BQUFBLFVBQVUsRUFBRSxDQURpRDtBQUV2REMsTUFBQUEsa0JBQWtCLEVBQUUsSUFGbUM7QUFHN0RDLE1BQUFBLFlBQVksRUFBRTtBQUgrQyxLQUEzRDtBQUtILEdBTkQ7O0FBUUEsTUFBSUMsUUFBUSxHQUFHLFNBQVhBLFFBQVcsR0FBVztBQUN0Qk4sSUFBQUEsQ0FBQyxDQUFDLG1DQUFELENBQUQsQ0FBdUNDLG1CQUF2QyxDQUEyRDtBQUM3REksTUFBQUEsWUFBWSxFQUFFLElBRCtDO0FBRXZERSxNQUFBQSxlQUFlLEVBQUU7QUFGc0MsS0FBM0Q7QUFJSCxHQUxEOztBQU9BLE1BQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFXLEdBQVc7QUFDdEJSLElBQUFBLENBQUMsQ0FBQyxtQ0FBRCxDQUFELENBQXVDQyxtQkFBdkMsQ0FBMkQ7QUFDN0RJLE1BQUFBLFlBQVksRUFBRSxJQUQrQztBQUV2REUsTUFBQUEsZUFBZSxFQUFFLENBRnNDO0FBR3ZERSxNQUFBQSxhQUFhLEVBQUU7QUFId0MsS0FBM0Q7QUFLSCxHQU5EOztBQVFBLE1BQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFXLEdBQVc7QUFDdEJWLElBQUFBLENBQUMsQ0FBQyxtQ0FBRCxDQUFELENBQXVDQyxtQkFBdkMsQ0FBMkQ7QUFDN0RVLE1BQUFBLElBQUksRUFBRSxDQUR1RDtBQUU3RE4sTUFBQUEsWUFBWSxFQUFFLElBRitDO0FBR3ZERSxNQUFBQSxlQUFlLEVBQUUsQ0FIc0M7QUFJdkRLLE1BQUFBLFlBQVksRUFBRSxzQkFBU0wsZUFBVCxFQUEwQjtBQUNwQ00sUUFBQUEsS0FBSyxDQUFDLGlCQUFrQk4sZUFBZSxHQUFHLENBQXBDLElBQTBDLDJCQUEzQyxDQUFMO0FBQ0gsT0FOc0Q7QUFPdkRPLE1BQUFBLGlCQUFpQixFQUFFLDJCQUFVQyxLQUFWLEVBQWlCQyxlQUFqQixFQUFrQztBQUNqRCxlQUFPLDZDQUE2Q0QsS0FBN0MsR0FBcUQsV0FBNUQ7QUFDSCxPQVRzRDtBQVV2REUsTUFBQUEsa0JBQWtCLEVBQUUsNEJBQVVGLEtBQVYsRUFBaUJHLFlBQWpCLEVBQStCO0FBQy9DLGVBQU8sOENBQVA7QUFDSDtBQVpzRCxLQUEzRDtBQWNILEdBZkQ7O0FBaUJBLFNBQU87QUFDSDtBQUNBQyxJQUFBQSxJQUFJLEVBQUUsZ0JBQVc7QUFDYnBCLE1BQUFBLFFBQVE7QUFDUkcsTUFBQUEsUUFBUTtBQUNSSSxNQUFBQSxRQUFRO0FBQ1JFLE1BQUFBLFFBQVE7QUFDUkUsTUFBQUEsUUFBUTtBQUNYO0FBUkUsR0FBUDtBQVVILENBeERxQyxFQUF0QyxDLENBMERBOzs7QUFDQVUsTUFBTSxDQUFDQyxrQkFBUCxDQUEwQixZQUFXO0FBQ2pDdkIsRUFBQUEsK0JBQStCLENBQUNxQixJQUFoQztBQUNILENBRkQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2Zvcm1zL211bHRpc2VsZWN0c3BsaXR0ZXIuanM/NzBiZCJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtURm9ybXNNdWx0aXNlbGVjdHNwbGl0dGVyRGVtb3MgPSBmdW5jdGlvbigpIHtcclxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcbiAgICB2YXIgZXhhbXBsZTEgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICAkKFwiI2t0X211bHRpc2VsZWN0c3BsaXR0ZXJfZXhhbXBsZV8xXCIpLm11bHRpc2VsZWN0c3BsaXR0ZXIoKTtcclxuICAgIH1cclxuXHJcbiAgICB2YXIgZXhhbXBsZTIgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICAkKCcja3RfbXVsdGlzZWxlY3RzcGxpdHRlcl9leGFtcGxlXzInKS5tdWx0aXNlbGVjdHNwbGl0dGVyKHtcclxuICAgIFx0XHRzZWxlY3RTaXplOiA3LFxyXG4gICAgICAgICAgICBjbGVhck9uRmlyc3RDaGFuZ2U6IHRydWUsXHJcbiAgICBcdFx0Z3JvdXBDb3VudGVyOiB0cnVlXHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGV4YW1wbGUzID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJCgnI2t0X211bHRpc2VsZWN0c3BsaXR0ZXJfZXhhbXBsZV8zJykubXVsdGlzZWxlY3RzcGxpdHRlcih7XHJcbiAgICBcdFx0Z3JvdXBDb3VudGVyOiB0cnVlLFxyXG4gICAgICAgICAgICBtYXhpbXVtU2VsZWN0ZWQ6IDJcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICB2YXIgZXhhbXBsZTQgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICAkKCcja3RfbXVsdGlzZWxlY3RzcGxpdHRlcl9leGFtcGxlXzQnKS5tdWx0aXNlbGVjdHNwbGl0dGVyKHtcclxuICAgIFx0XHRncm91cENvdW50ZXI6IHRydWUsXHJcbiAgICAgICAgICAgIG1heGltdW1TZWxlY3RlZDogMyxcclxuICAgICAgICAgICAgb25seVNhbWVHcm91cDogdHJ1ZVxyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHZhciBleGFtcGxlNSA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICQoJyNrdF9tdWx0aXNlbGVjdHNwbGl0dGVyX2V4YW1wbGVfNScpLm11bHRpc2VsZWN0c3BsaXR0ZXIoe1xyXG4gICAgXHRcdHNpemU6IDYsXHJcbiAgICBcdFx0Z3JvdXBDb3VudGVyOiB0cnVlLFxyXG4gICAgICAgICAgICBtYXhpbXVtU2VsZWN0ZWQ6IDIsXHJcbiAgICAgICAgICAgIG1heGltdW1BbGVydDogZnVuY3Rpb24obWF4aW11bVNlbGVjdGVkKSB7XHJcbiAgICAgICAgICAgICAgICBhbGVydChcIllvdSBjaG9vc2UgXCIgKyAoIG1heGltdW1TZWxlY3RlZCArIDEgKSArIFwiIG9wdGlvbnMuIEFyZSB5b3UgY3JhenkgP1wiKTtcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgY3JlYXRlRmlyc3RTZWxlY3Q6IGZ1bmN0aW9uIChsYWJlbCwgJG9yaWdpbmFsU2VsZWN0KSB7IFxyXG4gICAgICAgICAgICAgICAgcmV0dXJuIFwiPG9wdGlvbiBjbGFzcz1cXFwidGV4dC1zdWNjZXNzXFxcIj5wcmVmaXggLSBcIiArIGxhYmVsICsgXCI8L29wdGlvbj5cIjtcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgY3JlYXRlU2Vjb25kU2VsZWN0OiBmdW5jdGlvbiAobGFiZWwsICRmaXJzdFNlbGVjdCkgeyBcclxuICAgICAgICAgICAgICAgIHJldHVybiBcIjxvcHRpb24gY2xhc3M9XFxcInRleHQtZGFuZ2VyXFxcIj4gPz8/IDwvb3B0aW9uPlwiO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgcmV0dXJuIHtcclxuICAgICAgICAvLyBQdWJsaWMgRnVuY3Rpb25zXHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIGV4YW1wbGUxKCk7XHJcbiAgICAgICAgICAgIGV4YW1wbGUyKCk7XHJcbiAgICAgICAgICAgIGV4YW1wbGUzKCk7XHJcbiAgICAgICAgICAgIGV4YW1wbGU0KCk7XHJcbiAgICAgICAgICAgIGV4YW1wbGU1KCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbigpIHtcclxuICAgIEtURm9ybXNNdWx0aXNlbGVjdHNwbGl0dGVyRGVtb3MuaW5pdCgpO1xyXG59KTtcclxuIl0sIm5hbWVzIjpbIktURm9ybXNNdWx0aXNlbGVjdHNwbGl0dGVyRGVtb3MiLCJleGFtcGxlMSIsIiQiLCJtdWx0aXNlbGVjdHNwbGl0dGVyIiwiZXhhbXBsZTIiLCJzZWxlY3RTaXplIiwiY2xlYXJPbkZpcnN0Q2hhbmdlIiwiZ3JvdXBDb3VudGVyIiwiZXhhbXBsZTMiLCJtYXhpbXVtU2VsZWN0ZWQiLCJleGFtcGxlNCIsIm9ubHlTYW1lR3JvdXAiLCJleGFtcGxlNSIsInNpemUiLCJtYXhpbXVtQWxlcnQiLCJhbGVydCIsImNyZWF0ZUZpcnN0U2VsZWN0IiwibGFiZWwiLCIkb3JpZ2luYWxTZWxlY3QiLCJjcmVhdGVTZWNvbmRTZWxlY3QiLCIkZmlyc3RTZWxlY3QiLCJpbml0IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/src/js/custom/documentation/forms/multiselectsplitter.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/src/js/custom/documentation/forms/multiselectsplitter.js"]();
/******/ 	
/******/ })()
;