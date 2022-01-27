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

/***/ "./resources/src/js/custom/documentation/charts/flotcharts/tracking.js":
/*!*****************************************************************************!*\
  !*** ./resources/src/js/custom/documentation/charts/flotcharts/tracking.js ***!
  \*****************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTFlotDemoTracking = function () {\n  // Private functions\n  var exampleTracking = function exampleTracking() {\n    var sin = [],\n        cos = [];\n\n    for (var i = 0; i < 14; i += 0.1) {\n      sin.push([i, Math.sin(i)]);\n      cos.push([i, Math.cos(i)]);\n    }\n\n    var plot = $.plot($(\"#kt_docs_flot_tracking\"), [{\n      data: sin,\n      label: \"sin(x) = -0.00\",\n      lines: {\n        lineWidth: 1\n      },\n      shadowSize: 0\n    }, {\n      data: cos,\n      label: \"cos(x) = -0.00\",\n      lines: {\n        lineWidth: 1\n      },\n      shadowSize: 0\n    }], {\n      colors: [KTUtil.getCssVariableValue('--bs-active-primary'), KTUtil.getCssVariableValue('--bs-active-warning')],\n      series: {\n        lines: {\n          show: true\n        }\n      },\n      crosshair: {\n        mode: \"x\"\n      },\n      grid: {\n        hoverable: true,\n        autoHighlight: false,\n        tickColor: KTUtil.getCssVariableValue('--bs-light-dark'),\n        borderColor: KTUtil.getCssVariableValue('--bs-light-dark'),\n        borderWidth: 1\n      },\n      yaxis: {\n        min: -1.2,\n        max: 1.2\n      }\n    });\n    var legends = $(\"#kt_docs_flot_tracking .legendLabel\");\n    legends.each(function () {\n      // fix the widths so they don't jump around\n      $(this).css('width', $(this).width());\n    });\n    var updateLegendTimeout = null;\n    var latestPosition = null;\n\n    function updateLegend() {\n      updateLegendTimeout = null;\n      var pos = latestPosition;\n      var axes = plot.getAxes();\n      if (pos.x < axes.xaxis.min || pos.x > axes.xaxis.max || pos.y < axes.yaxis.min || pos.y > axes.yaxis.max) return;\n      var i,\n          j,\n          dataset = plot.getData();\n\n      for (i = 0; i < dataset.length; ++i) {\n        var series = dataset[i]; // find the nearest points, x-wise\n\n        for (j = 0; j < series.data.length; ++j) {\n          if (series.data[j][0] > pos.x) break;\n        } // now interpolate\n\n\n        var y,\n            p1 = series.data[j - 1],\n            p2 = series.data[j];\n        if (p1 == null) y = p2[1];else if (p2 == null) y = p1[1];else y = p1[1] + (p2[1] - p1[1]) * (pos.x - p1[0]) / (p2[0] - p1[0]);\n        legends.eq(i).text(series.label.replace(/=.*/, \"= \" + y.toFixed(2)));\n      }\n    }\n\n    $(\"#kt_docs_flot_tracking\").bind(\"plothover\", function (event, pos, item) {\n      latestPosition = pos;\n      if (!updateLegendTimeout) updateLegendTimeout = setTimeout(updateLegend, 50);\n    });\n  };\n\n  return {\n    // Public Functions\n    init: function init() {\n      exampleTracking();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTFlotDemoTracking.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2NoYXJ0cy9mbG90Y2hhcnRzL3RyYWNraW5nLmpzLmpzIiwibWFwcGluZ3MiOiJDQUVBOztBQUNBLElBQUlBLGtCQUFrQixHQUFHLFlBQVk7QUFDakM7QUFDQSxNQUFJQyxlQUFlLEdBQUcsU0FBbEJBLGVBQWtCLEdBQVk7QUFDOUIsUUFBSUMsR0FBRyxHQUFHLEVBQVY7QUFBQSxRQUNMQyxHQUFHLEdBQUcsRUFERDs7QUFFTixTQUFLLElBQUlDLENBQUMsR0FBRyxDQUFiLEVBQWdCQSxDQUFDLEdBQUcsRUFBcEIsRUFBd0JBLENBQUMsSUFBSSxHQUE3QixFQUFrQztBQUNqQ0YsTUFBQUEsR0FBRyxDQUFDRyxJQUFKLENBQVMsQ0FBQ0QsQ0FBRCxFQUFJRSxJQUFJLENBQUNKLEdBQUwsQ0FBU0UsQ0FBVCxDQUFKLENBQVQ7QUFDQUQsTUFBQUEsR0FBRyxDQUFDRSxJQUFKLENBQVMsQ0FBQ0QsQ0FBRCxFQUFJRSxJQUFJLENBQUNILEdBQUwsQ0FBU0MsQ0FBVCxDQUFKLENBQVQ7QUFDQTs7QUFFRCxRQUFJRyxJQUFJLEdBQUdDLENBQUMsQ0FBQ0QsSUFBRixDQUFPQyxDQUFDLENBQUMsd0JBQUQsQ0FBUixFQUFvQyxDQUFDO0FBQy9DQyxNQUFBQSxJQUFJLEVBQUVQLEdBRHlDO0FBRS9DUSxNQUFBQSxLQUFLLEVBQUUsZ0JBRndDO0FBRy9DQyxNQUFBQSxLQUFLLEVBQUU7QUFDTkMsUUFBQUEsU0FBUyxFQUFFO0FBREwsT0FId0M7QUFNL0NDLE1BQUFBLFVBQVUsRUFBRTtBQU5tQyxLQUFELEVBTzVDO0FBQ0ZKLE1BQUFBLElBQUksRUFBRU4sR0FESjtBQUVGTyxNQUFBQSxLQUFLLEVBQUUsZ0JBRkw7QUFHRkMsTUFBQUEsS0FBSyxFQUFFO0FBQ05DLFFBQUFBLFNBQVMsRUFBRTtBQURMLE9BSEw7QUFNRkMsTUFBQUEsVUFBVSxFQUFFO0FBTlYsS0FQNEMsQ0FBcEMsRUFjUDtBQUNIQyxNQUFB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c291cmNlcy9zcmMvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vY2hhcnRzL2Zsb3RjaGFydHMvdHJhY2tpbmcuanM/ODc2NSJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtURmxvdERlbW9UcmFja2luZyA9IGZ1bmN0aW9uICgpIHtcclxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcbiAgICB2YXIgZXhhbXBsZVRyYWNraW5nID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIHZhciBzaW4gPSBbXSxcclxuXHRcdFx0Y29zID0gW107XHJcblx0XHRmb3IgKHZhciBpID0gMDsgaSA8IDE0OyBpICs9IDAuMSkge1xyXG5cdFx0XHRzaW4ucHVzaChbaSwgTWF0aC5zaW4oaSldKTtcclxuXHRcdFx0Y29zLnB1c2goW2ksIE1hdGguY29zKGkpXSk7XHJcblx0XHR9XHJcblxyXG5cdFx0dmFyIHBsb3QgPSAkLnBsb3QoJChcIiNrdF9kb2NzX2Zsb3RfdHJhY2tpbmdcIiksIFt7XHJcblx0XHRcdGRhdGE6IHNpbixcclxuXHRcdFx0bGFiZWw6IFwic2luKHgpID0gLTAuMDBcIixcclxuXHRcdFx0bGluZXM6IHtcclxuXHRcdFx0XHRsaW5lV2lkdGg6IDEsXHJcblx0XHRcdH0sXHJcblx0XHRcdHNoYWRvd1NpemU6IDBcclxuXHRcdH0sIHtcclxuXHRcdFx0ZGF0YTogY29zLFxyXG5cdFx0XHRsYWJlbDogXCJjb3MoeCkgPSAtMC4wMFwiLFxyXG5cdFx0XHRsaW5lczoge1xyXG5cdFx0XHRcdGxpbmVXaWR0aDogMSxcclxuXHRcdFx0fSxcclxuXHRcdFx0c2hhZG93U2l6ZTogMFxyXG5cdFx0fV0sIHtcclxuXHRcdFx0Y29sb3JzOiBbS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtYWN0aXZlLXByaW1hcnknKSwgS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtYWN0aXZlLXdhcm5pbmcnKV0sXHJcblx0XHRcdHNlcmllczoge1xyXG5cdFx0XHRcdGxpbmVzOiB7XHJcblx0XHRcdFx0XHRzaG93OiB0cnVlXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XHRjcm9zc2hhaXI6IHtcclxuXHRcdFx0XHRtb2RlOiBcInhcIlxyXG5cdFx0XHR9LFxyXG5cdFx0XHRncmlkOiB7XHJcblx0XHRcdFx0aG92ZXJhYmxlOiB0cnVlLFxyXG5cdFx0XHRcdGF1dG9IaWdobGlnaHQ6IGZhbHNlLFxyXG5cdFx0XHRcdHRpY2tDb2xvcjogS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtbGlnaHQtZGFyaycpLFxyXG5cdFx0XHRcdGJvcmRlckNvbG9yOiBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1saWdodC1kYXJrJyksXHJcblx0XHRcdFx0Ym9yZGVyV2lkdGg6IDFcclxuXHRcdFx0fSxcclxuXHRcdFx0eWF4aXM6IHtcclxuXHRcdFx0XHRtaW46IC0xLjIsXHJcblx0XHRcdFx0bWF4OiAxLjJcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblxyXG5cdFx0dmFyIGxlZ2VuZHMgPSAkKFwiI2t0X2RvY3NfZmxvdF90cmFja2luZyAubGVnZW5kTGFiZWxcIik7XHJcblx0XHRsZWdlbmRzLmVhY2goZnVuY3Rpb24oKSB7XHJcblx0XHRcdC8vIGZpeCB0aGUgd2lkdGhzIHNvIHRoZXkgZG9uJ3QganVtcCBhcm91bmRcclxuXHRcdFx0JCh0aGlzKS5jc3MoJ3dpZHRoJywgJCh0aGlzKS53aWR0aCgpKTtcclxuXHRcdH0pO1xyXG5cclxuXHRcdHZhciB1cGRhdGVMZWdlbmRUaW1lb3V0ID0gbnVsbDtcclxuXHRcdHZhciBsYXRlc3RQb3NpdGlvbiA9IG51bGw7XHJcblxyXG5cdFx0ZnVuY3Rpb24gdXBkYXRlTGVnZW5kKCkge1xyXG5cdFx0XHR1cGRhdGVMZWdlbmRUaW1lb3V0ID0gbnVsbDtcclxuXHJcblx0XHRcdHZhciBwb3MgPSBsYXRlc3RQb3NpdGlvbjtcclxuXHJcblx0XHRcdHZhciBheGVzID0gcGxvdC5nZXRBeGVzKCk7XHJcblx0XHRcdGlmIChwb3MueCA8IGF4ZXMueGF4aXMubWluIHx8IHBvcy54ID4gYXhlcy54YXhpcy5tYXggfHwgcG9zLnkgPCBheGVzLnlheGlzLm1pbiB8fCBwb3MueSA+IGF4ZXMueWF4aXMubWF4KSByZXR1cm47XHJcblxyXG5cdFx0XHR2YXIgaSwgaiwgZGF0YXNldCA9IHBsb3QuZ2V0RGF0YSgpO1xyXG5cdFx0XHRmb3IgKGkgPSAwOyBpIDwgZGF0YXNldC5sZW5ndGg7ICsraSkge1xyXG5cdFx0XHRcdHZhciBzZXJpZXMgPSBkYXRhc2V0W2ldO1xyXG5cclxuXHRcdFx0XHQvLyBmaW5kIHRoZSBuZWFyZXN0IHBvaW50cywgeC13aXNlXHJcblx0XHRcdFx0Zm9yIChqID0gMDsgaiA8IHNlcmllcy5kYXRhLmxlbmd0aDsgKytqKVxyXG5cdFx0XHRcdFx0aWYgKHNlcmllcy5kYXRhW2pdWzBdID4gcG9zLngpIGJyZWFrO1xyXG5cclxuXHRcdFx0XHQvLyBub3cgaW50ZXJwb2xhdGVcclxuXHRcdFx0XHR2YXIgeSwgcDEgPSBzZXJpZXMuZGF0YVtqIC0gMV0sXHJcblx0XHRcdFx0XHRwMiA9IHNlcmllcy5kYXRhW2pdO1xyXG5cclxuXHRcdFx0XHRpZiAocDEgPT0gbnVsbCkgeSA9IHAyWzFdO1xyXG5cdFx0XHRcdGVsc2UgaWYgKHAyID09IG51bGwpIHkgPSBwMVsxXTtcclxuXHRcdFx0XHRlbHNlIHkgPSBwMVsxXSArIChwMlsxXSAtIHAxWzFdKSAqIChwb3MueCAtIHAxWzBdKSAvIChwMlswXSAtIHAxWzBdKTtcclxuXHJcblx0XHRcdFx0bGVnZW5kcy5lcShpKS50ZXh0KHNlcmllcy5sYWJlbC5yZXBsYWNlKC89LiovLCBcIj0gXCIgKyB5LnRvRml4ZWQoMikpKTtcclxuXHRcdFx0fVxyXG5cdFx0fVxyXG5cclxuXHRcdCQoXCIja3RfZG9jc19mbG90X3RyYWNraW5nXCIpLmJpbmQoXCJwbG90aG92ZXJcIiwgZnVuY3Rpb24oZXZlbnQsIHBvcywgaXRlbSkge1xyXG5cdFx0XHRsYXRlc3RQb3NpdGlvbiA9IHBvcztcclxuXHRcdFx0aWYgKCF1cGRhdGVMZWdlbmRUaW1lb3V0KSB1cGRhdGVMZWdlbmRUaW1lb3V0ID0gc2V0VGltZW91dCh1cGRhdGVMZWdlbmQsIDUwKTtcclxuXHRcdH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgZXhhbXBsZVRyYWNraW5nKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XHJcbiAgICBLVEZsb3REZW1vVHJhY2tpbmcuaW5pdCgpO1xyXG59KTtcclxuIl0sIm5hbWVzIjpbIktURmxvdERlbW9UcmFja2luZyIsImV4YW1wbGVUcmFja2luZyIsInNpbiIsImNvcyIsImkiLCJwdXNoIiwiTWF0aCIsInBsb3QiLCIkIiwiZGF0YSIsImxhYmVsIiwibGluZXMiLCJsaW5lV2lkdGgiLCJzaGFkb3dTaXplIiwiY29sb3JzIiwiS1RVdGlsIiwiZ2V0Q3NzVmFyaWFibGVWYWx1ZSIsInNlcmllcyIsInNob3ciLCJjcm9zc2hhaXIiLCJtb2RlIiwiZ3JpZCIsImhvdmVyYWJsZSIsImF1dG9IaWdobGlnaHQiLCJ0aWNrQ29sb3IiLCJib3JkZXJDb2xvciIsImJvcmRlcldpZHRoIiwieWF4aXMiLCJtaW4iLCJtYXgiLCJsZWdlbmRzIiwiZWFjaCIsImNzcyIsIndpZHRoIiwidXBkYXRlTGVnZW5kVGltZW91dCIsImxhdGVzdFBvc2l0aW9uIiwidXBkYXRlTGVnZW5kIiwicG9zIiwiYXhlcyIsImdldEF4ZXMiLCJ4IiwieGF4aXMiLCJ5IiwiaiIsImRhdGFzZXQiLCJnZXREYXRhIiwibGVuZ3RoIiwicDEiLCJwMiIsImVxIiwidGV4dCIsInJlcGxhY2UiLCJ0b0ZpeGVkIiwiYmluZCIsImV2ZW50IiwiaXRlbSIsInNldFRpbWVvdXQiLCJpbml0Iiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/src/js/custom/documentation/charts/flotcharts/tracking.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/src/js/custom/documentation/charts/flotcharts/tracking.js"]();
/******/ 	
/******/ })()
;