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

/***/ "./resources/src/js/custom/documentation/general/jstree/ajax.js":
/*!**********************************************************************!*\
  !*** ./resources/src/js/custom/documentation/general/jstree/ajax.js ***!
  \**********************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTJSTreeAjax = function () {\n  // Private functions\n  var exampleAjax = function exampleAjax() {\n    $(\"#kt_docs_jstree_ajax\").jstree({\n      \"core\": {\n        \"themes\": {\n          \"responsive\": false\n        },\n        // so that create works\n        \"check_callback\": true,\n        'data': {\n          'url': function url(node) {\n            return 'https://preview.keenthemes.com/api/jstree/ajax_data.php'; // Demo API endpoint -- Replace this URL with your set endpoint\n          },\n          'data': function data(node) {\n            return {\n              'parent': node.id\n            };\n          }\n        }\n      },\n      \"types\": {\n        \"default\": {\n          \"icon\": \"fa fa-folder text-primary\"\n        },\n        \"file\": {\n          \"icon\": \"fa fa-file  text-primary\"\n        }\n      },\n      \"state\": {\n        \"key\": \"demo3\"\n      },\n      \"plugins\": [\"dnd\", \"state\", \"types\"]\n    });\n  };\n\n  return {\n    // Public Functions\n    init: function init() {\n      exampleAjax();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTJSTreeAjax.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2dlbmVyYWwvanN0cmVlL2FqYXguanMuanMiLCJtYXBwaW5ncyI6IkNBRUE7O0FBQ0EsSUFBSUEsWUFBWSxHQUFHLFlBQVc7QUFDMUI7QUFDQSxNQUFJQyxXQUFXLEdBQUcsU0FBZEEsV0FBYyxHQUFXO0FBQ3pCQyxJQUFBQSxDQUFDLENBQUMsc0JBQUQsQ0FBRCxDQUEwQkMsTUFBMUIsQ0FBaUM7QUFDN0IsY0FBUTtBQUNKLGtCQUFVO0FBQ04sd0JBQWM7QUFEUixTQUROO0FBSUo7QUFDQSwwQkFBa0IsSUFMZDtBQU1KLGdCQUFRO0FBQ0osaUJBQU8sYUFBU0MsSUFBVCxFQUFlO0FBQ2xCLG1CQUFPLHlEQUFQLENBRGtCLENBQ2dEO0FBQ3JFLFdBSEc7QUFJSixrQkFBUSxjQUFTQSxJQUFULEVBQWU7QUFDbkIsbUJBQU87QUFDSCx3QkFBVUEsSUFBSSxDQUFDQztBQURaLGFBQVA7QUFHSDtBQVJHO0FBTkosT0FEcUI7QUFrQjdCLGVBQVM7QUFDTCxtQkFBVztBQUNQLGtCQUFRO0FBREQsU0FETjtBQUlMLGdCQUFRO0FBQ0osa0JBQVE7QUFESjtBQUpILE9BbEJvQjtBQTBCN0IsZUFBUztBQUNMLGVBQU87QUFERixPQTFCb0I7QUE2QjdCLGlCQUFXLENBQUMsS0FBRCxFQUFRLE9BQVIsRUFBaUIsT0FBakI7QUE3QmtCLEtBQWpDO0FBK0JILEdBaENEOztBQWtDQSxTQUFPO0FBQ0g7QUFDQUMsSUFBQUEsSUFBSSxFQUFFLGdCQUFXO0FBQ2JMLE1BQUFBLFdBQVc7QUFDZDtBQUpFLEdBQVA7QUFNSCxDQTFDa0IsRUFBbkIsQyxDQTRDQTs7O0FBQ0FNLE1BQU0sQ0FBQ0Msa0JBQVAsQ0FBMEIsWUFBVztBQUNqQ1IsRUFBQUEsWUFBWSxDQUFDTSxJQUFiO0FBQ0gsQ0FGRCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9zcmMvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qc3RyZWUvYWpheC5qcz9iODZlIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RKU1RyZWVBamF4ID0gZnVuY3Rpb24oKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGV4YW1wbGVBamF4ID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJChcIiNrdF9kb2NzX2pzdHJlZV9hamF4XCIpLmpzdHJlZSh7XHJcbiAgICAgICAgICAgIFwiY29yZVwiOiB7XHJcbiAgICAgICAgICAgICAgICBcInRoZW1lc1wiOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgXCJyZXNwb25zaXZlXCI6IGZhbHNlXHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgLy8gc28gdGhhdCBjcmVhdGUgd29ya3NcclxuICAgICAgICAgICAgICAgIFwiY2hlY2tfY2FsbGJhY2tcIjogdHJ1ZSxcclxuICAgICAgICAgICAgICAgICdkYXRhJzoge1xyXG4gICAgICAgICAgICAgICAgICAgICd1cmwnOiBmdW5jdGlvbihub2RlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAnaHR0cHM6Ly9wcmV2aWV3LmtlZW50aGVtZXMuY29tL2FwaS9qc3RyZWUvYWpheF9kYXRhLnBocCc7IC8vIERlbW8gQVBJIGVuZHBvaW50IC0tIFJlcGxhY2UgdGhpcyBVUkwgd2l0aCB5b3VyIHNldCBlbmRwb2ludFxyXG4gICAgICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgICAgICAgICAgJ2RhdGEnOiBmdW5jdGlvbihub2RlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAncGFyZW50Jzogbm9kZS5pZFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9O1xyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgXCJ0eXBlc1wiOiB7XHJcbiAgICAgICAgICAgICAgICBcImRlZmF1bHRcIjoge1xyXG4gICAgICAgICAgICAgICAgICAgIFwiaWNvblwiOiBcImZhIGZhLWZvbGRlciB0ZXh0LXByaW1hcnlcIlxyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIFwiZmlsZVwiOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgXCJpY29uXCI6IFwiZmEgZmEtZmlsZSAgdGV4dC1wcmltYXJ5XCJcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgXCJzdGF0ZVwiOiB7XHJcbiAgICAgICAgICAgICAgICBcImtleVwiOiBcImRlbW8zXCJcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgXCJwbHVnaW5zXCI6IFtcImRuZFwiLCBcInN0YXRlXCIsIFwidHlwZXNcIl1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgZXhhbXBsZUFqYXgoKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1RKU1RyZWVBamF4LmluaXQoKTtcclxufSk7XHJcbiJdLCJuYW1lcyI6WyJLVEpTVHJlZUFqYXgiLCJleGFtcGxlQWpheCIsIiQiLCJqc3RyZWUiLCJub2RlIiwiaWQiLCJpbml0IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/src/js/custom/documentation/general/jstree/ajax.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/src/js/custom/documentation/general/jstree/ajax.js"]();
/******/ 	
/******/ })()
;