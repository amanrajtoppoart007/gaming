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

/***/ "./resources/src/js/custom/documentation/general/jkanban/rich.js":
/*!***********************************************************************!*\
  !*** ./resources/src/js/custom/documentation/general/jkanban/rich.js ***!
  \***********************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTJKanbanDemoRich = function () {\n  // Private functions\n  var exampleRich = function exampleRich() {\n    var kanban = new jKanban({\n      element: '#kt_docs_jkanban_rich',\n      gutter: '0',\n      click: function click(el) {\n        alert(el.innerHTML);\n      },\n      boards: [{\n        'id': '_backlog',\n        'title': 'Backlog',\n        'class': 'light-dark',\n        'item': [{\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-success me-3\\\">\\n                        \\t            <img alt=\\\"Pic\\\" src=\\\"\".concat(hostUrl, \"media/avatars/150-1.jpg\\\" />\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">SEO Optimization</span>\\n                        \\t            <span class=\\\"badge badge-light-success\\\">In progress</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \")\n        }, {\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-success me-3\\\">\\n                        \\t            <span class=\\\"symbol-label fs-4\\\">A.D</span>\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">Finance</span>\\n                        \\t            <span class=\\\"badge badge-light-danger\\\">Pending</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \"\n        }]\n      }, {\n        'id': '_todo',\n        'title': 'To Do',\n        'class': 'light-danger',\n        'item': [{\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-success me-3\\\">\\n                        \\t            <img alt=\\\"Pic\\\" src=\\\"\".concat(hostUrl, \"media/avatars/150-2.jpg\\\" />\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">Server Setup</span>\\n                        \\t            <span class=\\\"badge badge-light-info\\\">Completed</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \")\n        }, {\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-success me-3\\\">\\n                        \\t            <img alt=\\\"Pic\\\" src=\\\"\".concat(hostUrl, \"media/avatars/150-3.jpg\\\" />\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">Report Generation</span>\\n                        \\t            <span class=\\\"badge badge-light-warning\\\">Due</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \")\n        }]\n      }, {\n        'id': '_working',\n        'title': 'Working',\n        'class': 'light-primary',\n        'item': [{\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-success me-3\\\">\\n                            \\t         <img alt=\\\"Pic\\\" src=\\\"\".concat(hostUrl, \"media/avatars/150-1.jpg\\\" />\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">Marketing</span>\\n                        \\t            <span class=\\\"badge badge-light-danger\\\">Planning</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \")\n        }, {\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-light-info me-3\\\">\\n                        \\t            <span class=\\\"symbol-label fs-4\\\">A.P</span>\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">Finance</span>\\n                        \\t            <span class=\\\"badge badge-light-primary\\\">Done</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \"\n        }]\n      }, {\n        'id': '_done',\n        'title': 'Done',\n        'class': 'light-success',\n        'item': [{\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-success me-3\\\">\\n                        \\t            <img alt=\\\"Pic\\\" src=\\\"\".concat(hostUrl, \"media/avatars/150-4.jpg\\\" />\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">SEO Optimization</span>\\n                        \\t            <span class=\\\"badge badge-light-success\\\">In progress</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \")\n        }, {\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-success me-3\\\">\\n                        \\t            <img alt=\\\"Pic\\\" src=\\\"\".concat(hostUrl, \"media/avatars/150-5.jpg\\\" />\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">Product Team</span>\\n                        \\t            <span class=\\\"badge badge-light-danger\\\">In progress</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \")\n        }]\n      }, {\n        'id': '_deploy',\n        'title': 'Deploy',\n        'class': 'light-primary',\n        'item': [{\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-light-warning me-3\\\">\\n                        \\t            <span class=\\\"symbol-label fs-4\\\">D.L</span>\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">SEO Optimization</span>\\n                        \\t            <span class=\\\"badge badge-light-success\\\">In progress</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \"\n        }, {\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                        \\t        <div class=\\\"symbol symbol-light-danger me-3\\\">\\n                        \\t            <span class=\\\"symbol-label fs-4\\\">E.K</span>\\n                        \\t        </div>\\n                        \\t        <div class=\\\"d-flex flex-column align-items-start\\\">\\n                        \\t            <span class=\\\"text-dark-50 fw-bold mb-1\\\">Requirement Study</span>\\n                        \\t            <span class=\\\"badge badge-light-warning\\\">Scheduled</span>\\n                        \\t        </div>\\n                        \\t    </div>\\n                            \"\n        }]\n      }]\n    });\n    var toDoButton = document.getElementById('addToDo');\n    toDoButton.addEventListener('click', function () {\n      kanban.addElement('_todo', {\n        'title': \"\\n                        <div class=\\\"d-flex align-items-center\\\">\\n                            <div class=\\\"symbol symbol-light-primary me-3\\\">\\n                                <img alt=\\\"Pic\\\" src=\\\"\".concat(hostUrl, \"media/avatars/150-6.jpg\\\" />\\n                            </div>\\n                            <div class=\\\"d-flex flex-column align-items-start\\\">\\n                                <span class=\\\"text-dark-50 fw-bold mb-1\\\">Requirement Study</span>\\n                                <span class=\\\"badge badge-light-success\\\">Scheduled</span>\\n                            </div>\\n                        </div>\\n                    \")\n      });\n    });\n    var addBoardDefault = document.getElementById('addDefault');\n    addBoardDefault.addEventListener('click', function () {\n      kanban.addBoards([{\n        'id': '_default',\n        'title': 'New Board',\n        'class': 'light-primary',\n        'item': [{\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                                    <div class=\\\"symbol symbol-success me-3\\\">\\n                                        <img alt=\\\"Pic\\\" src=\\\"\".concat(hostUrl, \"media/avatars/150-7.jpg\\\" />\\n                                    </div>\\n                                    <div class=\\\"d-flex flex-column align-items-start\\\">\\n                                        <span class=\\\"text-dark-50 fw-bold mb-1\\\">Payment Modules</span>\\n                                        <span class=\\\"badge badge-light-primary\\\">In development</span>\\n                                    </div>\\n                                </div>\\n                        \")\n        }, {\n          'title': \"\\n                                <div class=\\\"d-flex align-items-center\\\">\\n                                    <div class=\\\"symbol symbol-success me-3\\\">\\n                                        <img alt=\\\"Pic\\\" src=\\\"\".concat(hostUrl, \"media/avatars/150-8.jpg\\\" />\\n                                    </div>\\n                                    <div class=\\\"d-flex flex-column align-items-start\\\">\\n                                    <span class=\\\"text-dark-50 fw-bold mb-1\\\">New Project</span>\\n                                    <span class=\\\"badge badge-light-danger\\\">Pending</span>\\n                                </div>\\n                            </div>\\n                        \")\n        }]\n      }]);\n    });\n    var removeBoard = document.getElementById('removeBoard');\n    removeBoard.addEventListener('click', function () {\n      kanban.removeBoard('_done');\n    });\n  };\n\n  return {\n    // Public Functions\n    init: function init() {\n      exampleRich();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTJKanbanDemoRich.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2dlbmVyYWwvamthbmJhbi9yaWNoLmpzLmpzIiwibWFwcGluZ3MiOiJDQUVBOztBQUNBLElBQUlBLGlCQUFpQixHQUFHLFlBQVc7QUFDL0I7QUFDQSxNQUFJQyxXQUFXLEdBQUcsU0FBZEEsV0FBYyxHQUFXO0FBQ3pCLFFBQUlDLE1BQU0sR0FBRyxJQUFJQyxPQUFKLENBQVk7QUFDckJDLE1BQUFBLE9BQU8sRUFBRSx1QkFEWTtBQUVyQkMsTUFBQUEsTUFBTSxFQUFFLEdBRmE7QUFHckJDLE1BQUFBLEtBQUssRUFBRSxlQUFTQyxFQUFULEVBQWE7QUFDaEJDLFFBQUFBLEtBQUssQ0FBQ0QsRUFBRSxDQUFDRSxTQUFKLENBQUw7QUFDSCxPQUxvQjtBQU1yQkMsTUFBQUEsTUFBTSxFQUFFLENBQUM7QUFDRCxjQUFNLFVBREw7QUFFRCxpQkFBUyxTQUZSO0FBR0QsaUJBQVMsWUFIUjtBQUlELGdCQUFRLENBQUM7QUFDRCxxUEFHK0JDLE9BSC9CO0FBREMsU0FBRCxFQWFKO0FBQ0k7QUFESixTQWJJO0FBSlAsT0FBRCxFQWdDSjtBQUNJLGNBQU0sT0FEVjtBQUVJLGlCQUFTLE9BRmI7QUFHSSxpQkFBUyxjQUhiO0FBSUksZ0JBQVEsQ0FBQztBQUNELHFQQUcrQkEsT0FIL0I7QUFEQyxTQUFELEVBYUo7QUFDSSxxUEFHK0JBLE9BSC9CO0FBREosU0FiSTtBQUpaLE9BaENJLEVBZ0VKO0FBQ0ksY0FBTSxVQURWO0FBRUksaUJBQVMsU0FGYjtBQUdJLGlCQUFTLGVBSGI7QUFJSSxnQkFBUSxDQUFDO0FBQ0Qsc1BBR2dDQSxPQUhoQztBQURDLFNBQUQsRUFhSjtBQUNJO0FBREosU0FiSTtBQUpaLE9BaEVJLEVBZ0dKO0FBQ0ksY0FBTSxPQURWO0FBRUksaUJBQVMsTUFGYjtBQUdJLGlCQUFTLGVBSGI7QUFJSSxnQkFBUSxDQUFDO0FBQ0QscVBBRytCQSxPQUgvQjtBQURDLFNBQUQsRUFhSjtBQUNJLHFQQUcrQkEsT0FIL0I7QUFESixTQWJJO0FBSlosT0FoR0ksRUFnSUo7QUFDSSxjQUFNLFNBRFY7QUFFSSxpQkFBUyxRQUZiO0FBR0ksaUJBQVMsZUFIYjtBQUlJLGdCQUFRLENBQUM7QUFDRDtBQURDLFNBQUQsRUFhSjtBQUNJO0FBREosU0FiSTtBQUpaLE9BaElJO0FBTmEsS0FBWixDQUFiO0FBeUtBLFFBQUlDLFVBQVUsR0FBR0MsUUFBUSxDQUFDQyxjQUFULENBQXdCLFNBQXhCLENBQWpCO0FBQ0FGLElBQUFBLFVBQVUsQ0FBQ0csZ0JBQVgsQ0FBNEIsT0FBNUIsRUFBcUMsWUFBVztBQUM1Q2IsTUFBQUEsTUFBTSxDQUFDYyxVQUFQLENBQ0ksT0FESixFQUNhO0FBQ0wscU9BR2tDTCxPQUhsQztBQURLLE9BRGI7QUFlSCxLQWhCRDtBQWtCQSxRQUFJTSxlQUFlLEdBQUdKLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixZQUF4QixDQUF0QjtBQUNBRyxJQUFBQSxlQUFlLENBQUNGLGdCQUFoQixDQUFpQyxPQUFqQyxFQUEwQyxZQUFXO0FBQ2pEYixNQUFBQSxNQUFNLENBQUNnQixTQUFQLENBQ0ksQ0FBQztBQUNHLGNBQU0sVUFEVDtBQUVHLGlCQUFTLFdBRlo7QUFHRyxpQkFBUyxlQUhaO0FBSUcsZ0JBQVEsQ0FBQztBQUNELHlQQUdrQ1AsT0FIbEM7QUFEQyxTQUFELEVBV0Q7QUFDQyx5UEFHa0NBLE9BSGxDO0FBREQsU0FYQztBQUpYLE9BQUQsQ0FESjtBQStCSCxLQWhDRDtBQWtDQSxRQUFJUSxXQUFXLEdBQUdOLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixhQUF4QixDQUFsQjtBQUNBSyxJQUFBQSxXQUFXLENBQUNKLGdCQUFaLENBQTZCLE9BQTdCLEVBQXNDLFlBQVc7QUFDN0NiLE1BQUFBLE1BQU0sQ0FBQ2lCLFdBQVAsQ0FBbUIsT0FBbkI7QUFDSCxLQUZEO0FBR0gsR0FwT0Q7O0FBc09BLFNBQU87QUFDSDtBQUNBQyxJQUFBQSxJQUFJLEVBQUUsZ0JBQVc7QUFDYm5CLE1BQUFBLFdBQVc7QUFDZDtBQUpFLEdBQVA7QUFNSCxDQTlPdUIsRUFBeEIsQyxDQWdQQTs7O0FBQ0FvQixNQUFNLENBQUNDLGtCQUFQLENBQTBCLFlBQVc7QUFDakN0QixFQUFBQSxpQkFBaUIsQ0FBQ29CLElBQWxCO0FBQ0gsQ0FGRCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9zcmMvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qa2FuYmFuL3JpY2guanM/NDI1NiJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtUSkthbmJhbkRlbW9SaWNoID0gZnVuY3Rpb24oKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGV4YW1wbGVSaWNoID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgdmFyIGthbmJhbiA9IG5ldyBqS2FuYmFuKHtcclxuICAgICAgICAgICAgZWxlbWVudDogJyNrdF9kb2NzX2prYW5iYW5fcmljaCcsXHJcbiAgICAgICAgICAgIGd1dHRlcjogJzAnLFxyXG4gICAgICAgICAgICBjbGljazogZnVuY3Rpb24oZWwpIHtcclxuICAgICAgICAgICAgICAgIGFsZXJ0KGVsLmlubmVySFRNTCk7XHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIGJvYXJkczogW3tcclxuICAgICAgICAgICAgICAgICAgICAnaWQnOiAnX2JhY2tsb2cnLFxyXG4gICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICdCYWNrbG9nJyxcclxuICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnbGlnaHQtZGFyaycsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2l0ZW0nOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogYFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwic3ltYm9sIHN5bWJvbC1zdWNjZXNzIG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8aW1nIGFsdD1cIlBpY1wiIHNyYz1cIiR7aG9zdFVybH1tZWRpYS9hdmF0YXJzLzE1MC0xLmpwZ1wiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggZmxleC1jb2x1bW4gYWxpZ24taXRlbXMtc3RhcnRcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInRleHQtZGFyay01MCBmdy1ib2xkIG1iLTFcIj5TRU8gT3B0aW1pemF0aW9uPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgICAgIDxzcGFuIGNsYXNzPVwiYmFkZ2UgYmFkZ2UtbGlnaHQtc3VjY2Vzc1wiPkluIHByb2dyZXNzPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYCxcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogYFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwic3ltYm9sIHN5bWJvbC1zdWNjZXNzIG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInN5bWJvbC1sYWJlbCBmcy00XCI+QS5EPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwiZC1mbGV4IGZsZXgtY29sdW1uIGFsaWduLWl0ZW1zLXN0YXJ0XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJ0ZXh0LWRhcmstNTAgZnctYm9sZCBtYi0xXCI+RmluYW5jZTwvc3Bhbj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cImJhZGdlIGJhZGdlLWxpZ2h0LWRhbmdlclwiPlBlbmRpbmc8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBgLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgXVxyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICAnaWQnOiAnX3RvZG8nLFxyXG4gICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICdUbyBEbycsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2NsYXNzJzogJ2xpZ2h0LWRhbmdlcicsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2l0ZW0nOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogYFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwic3ltYm9sIHN5bWJvbC1zdWNjZXNzIG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8aW1nIGFsdD1cIlBpY1wiIHNyYz1cIiR7aG9zdFVybH1tZWRpYS9hdmF0YXJzLzE1MC0yLmpwZ1wiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggZmxleC1jb2x1bW4gYWxpZ24taXRlbXMtc3RhcnRcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInRleHQtZGFyay01MCBmdy1ib2xkIG1iLTFcIj5TZXJ2ZXIgU2V0dXA8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJiYWRnZSBiYWRnZS1saWdodC1pbmZvXCI+Q29tcGxldGVkPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYCxcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogYFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwic3ltYm9sIHN5bWJvbC1zdWNjZXNzIG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8aW1nIGFsdD1cIlBpY1wiIHNyYz1cIiR7aG9zdFVybH1tZWRpYS9hdmF0YXJzLzE1MC0zLmpwZ1wiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggZmxleC1jb2x1bW4gYWxpZ24taXRlbXMtc3RhcnRcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInRleHQtZGFyay01MCBmdy1ib2xkIG1iLTFcIj5SZXBvcnQgR2VuZXJhdGlvbjwvc3Bhbj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cImJhZGdlIGJhZGdlLWxpZ2h0LXdhcm5pbmdcIj5EdWU8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBgLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgXVxyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICAnaWQnOiAnX3dvcmtpbmcnLFxyXG4gICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICdXb3JraW5nJyxcclxuICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnbGlnaHQtcHJpbWFyeScsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2l0ZW0nOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogYFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwic3ltYm9sIHN5bWJvbC1zdWNjZXNzIG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICAgPGltZyBhbHQ9XCJQaWNcIiBzcmM9XCIke2hvc3RVcmx9bWVkaWEvYXZhdGFycy8xNTAtMS5qcGdcIiAvPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwiZC1mbGV4IGZsZXgtY29sdW1uIGFsaWduLWl0ZW1zLXN0YXJ0XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJ0ZXh0LWRhcmstNTAgZnctYm9sZCBtYi0xXCI+TWFya2V0aW5nPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgICAgIDxzcGFuIGNsYXNzPVwiYmFkZ2UgYmFkZ2UtbGlnaHQtZGFuZ2VyXCI+UGxhbm5pbmc8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBgLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiBgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImQtZmxleCBhbGlnbi1pdGVtcy1jZW50ZXJcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgIDxkaXYgY2xhc3M9XCJzeW1ib2wgc3ltYm9sLWxpZ2h0LWluZm8gbWUtM1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgICAgIDxzcGFuIGNsYXNzPVwic3ltYm9sLWxhYmVsIGZzLTRcIj5BLlA8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggZmxleC1jb2x1bW4gYWxpZ24taXRlbXMtc3RhcnRcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInRleHQtZGFyay01MCBmdy1ib2xkIG1iLTFcIj5GaW5hbmNlPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgICAgIDxzcGFuIGNsYXNzPVwiYmFkZ2UgYmFkZ2UtbGlnaHQtcHJpbWFyeVwiPkRvbmU8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBgLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgXVxyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICAnaWQnOiAnX2RvbmUnLFxyXG4gICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICdEb25lJyxcclxuICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnbGlnaHQtc3VjY2VzcycsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2l0ZW0nOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogYFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwic3ltYm9sIHN5bWJvbC1zdWNjZXNzIG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8aW1nIGFsdD1cIlBpY1wiIHNyYz1cIiR7aG9zdFVybH1tZWRpYS9hdmF0YXJzLzE1MC00LmpwZ1wiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggZmxleC1jb2x1bW4gYWxpZ24taXRlbXMtc3RhcnRcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInRleHQtZGFyay01MCBmdy1ib2xkIG1iLTFcIj5TRU8gT3B0aW1pemF0aW9uPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgICAgIDxzcGFuIGNsYXNzPVwiYmFkZ2UgYmFkZ2UtbGlnaHQtc3VjY2Vzc1wiPkluIHByb2dyZXNzPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYCxcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogYFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwic3ltYm9sIHN5bWJvbC1zdWNjZXNzIG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8aW1nIGFsdD1cIlBpY1wiIHNyYz1cIiR7aG9zdFVybH1tZWRpYS9hdmF0YXJzLzE1MC01LmpwZ1wiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggZmxleC1jb2x1bW4gYWxpZ24taXRlbXMtc3RhcnRcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInRleHQtZGFyay01MCBmdy1ib2xkIG1iLTFcIj5Qcm9kdWN0IFRlYW08L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJiYWRnZSBiYWRnZS1saWdodC1kYW5nZXJcIj5JbiBwcm9ncmVzczwvc3Bhbj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGAsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICBdXHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgICdpZCc6ICdfZGVwbG95JyxcclxuICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiAnRGVwbG95JyxcclxuICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnbGlnaHQtcHJpbWFyeScsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2l0ZW0nOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogYFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwic3ltYm9sIHN5bWJvbC1saWdodC13YXJuaW5nIG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInN5bWJvbC1sYWJlbCBmcy00XCI+RC5MPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwiZC1mbGV4IGZsZXgtY29sdW1uIGFsaWduLWl0ZW1zLXN0YXJ0XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJ0ZXh0LWRhcmstNTAgZnctYm9sZCBtYi0xXCI+U0VPIE9wdGltaXphdGlvbjwvc3Bhbj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cImJhZGdlIGJhZGdlLWxpZ2h0LXN1Y2Nlc3NcIj5JbiBwcm9ncmVzczwvc3Bhbj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGAsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICd0aXRsZSc6IGBcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwiZC1mbGV4IGFsaWduLWl0ZW1zLWNlbnRlclwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgPGRpdiBjbGFzcz1cInN5bWJvbCBzeW1ib2wtbGlnaHQtZGFuZ2VyIG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHQgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInN5bWJvbC1sYWJlbCBmcy00XCI+RS5LPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICA8ZGl2IGNsYXNzPVwiZC1mbGV4IGZsZXgtY29sdW1uIGFsaWduLWl0ZW1zLXN0YXJ0XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJ0ZXh0LWRhcmstNTAgZnctYm9sZCBtYi0xXCI+UmVxdWlyZW1lbnQgU3R1ZHk8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJiYWRnZSBiYWRnZS1saWdodC13YXJuaW5nXCI+U2NoZWR1bGVkPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBcdCAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFx0ICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYCxcclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIF1cclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgXVxyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICB2YXIgdG9Eb0J1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdhZGRUb0RvJyk7XHJcbiAgICAgICAgdG9Eb0J1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBrYW5iYW4uYWRkRWxlbWVudChcclxuICAgICAgICAgICAgICAgICdfdG9kbycsIHtcclxuICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiBgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwic3ltYm9sIHN5bWJvbC1saWdodC1wcmltYXJ5IG1lLTNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGFsdD1cIlBpY1wiIHNyYz1cIiR7aG9zdFVybH1tZWRpYS9hdmF0YXJzLzE1MC02LmpwZ1wiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggZmxleC1jb2x1bW4gYWxpZ24taXRlbXMtc3RhcnRcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInRleHQtZGFyay01MCBmdy1ib2xkIG1iLTFcIj5SZXF1aXJlbWVudCBTdHVkeTwvc3Bhbj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz1cImJhZGdlIGJhZGdlLWxpZ2h0LXN1Y2Nlc3NcIj5TY2hlZHVsZWQ8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgYFxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICApO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICB2YXIgYWRkQm9hcmREZWZhdWx0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2FkZERlZmF1bHQnKTtcclxuICAgICAgICBhZGRCb2FyZERlZmF1bHQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAga2FuYmFuLmFkZEJvYXJkcyhcclxuICAgICAgICAgICAgICAgIFt7XHJcbiAgICAgICAgICAgICAgICAgICAgJ2lkJzogJ19kZWZhdWx0JyxcclxuICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiAnTmV3IEJvYXJkJyxcclxuICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnbGlnaHQtcHJpbWFyeScsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2l0ZW0nOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogYFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJkLWZsZXggYWxpZ24taXRlbXMtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJzeW1ib2wgc3ltYm9sLXN1Y2Nlc3MgbWUtM1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBhbHQ9XCJQaWNcIiBzcmM9XCIke2hvc3RVcmx9bWVkaWEvYXZhdGFycy8xNTAtNy5qcGdcIiAvPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImQtZmxleCBmbGV4LWNvbHVtbiBhbGlnbi1pdGVtcy1zdGFydFwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJ0ZXh0LWRhcmstNTAgZnctYm9sZCBtYi0xXCI+UGF5bWVudCBNb2R1bGVzPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJiYWRnZSBiYWRnZS1saWdodC1wcmltYXJ5XCI+SW4gZGV2ZWxvcG1lbnQ8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICBgfSx7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiBgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImQtZmxleCBhbGlnbi1pdGVtcy1jZW50ZXJcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cInN5bWJvbCBzeW1ib2wtc3VjY2VzcyBtZS0zXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nIGFsdD1cIlBpY1wiIHNyYz1cIiR7aG9zdFVybH1tZWRpYS9hdmF0YXJzLzE1MC04LmpwZ1wiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwiZC1mbGV4IGZsZXgtY29sdW1uIGFsaWduLWl0ZW1zLXN0YXJ0XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPVwidGV4dC1kYXJrLTUwIGZ3LWJvbGQgbWItMVwiPk5ldyBQcm9qZWN0PC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz1cImJhZGdlIGJhZGdlLWxpZ2h0LWRhbmdlclwiPlBlbmRpbmc8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgYH1cclxuICAgICAgICAgICAgICAgICAgICBdXHJcbiAgICAgICAgICAgICAgICB9XVxyXG4gICAgICAgICAgICApXHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgICAgIHZhciByZW1vdmVCb2FyZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdyZW1vdmVCb2FyZCcpO1xyXG4gICAgICAgIHJlbW92ZUJvYXJkLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIGthbmJhbi5yZW1vdmVCb2FyZCgnX2RvbmUnKTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgZXhhbXBsZVJpY2goKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1RKS2FuYmFuRGVtb1JpY2guaW5pdCgpO1xyXG59KTtcclxuIl0sIm5hbWVzIjpbIktUSkthbmJhbkRlbW9SaWNoIiwiZXhhbXBsZVJpY2giLCJrYW5iYW4iLCJqS2FuYmFuIiwiZWxlbWVudCIsImd1dHRlciIsImNsaWNrIiwiZWwiLCJhbGVydCIsImlubmVySFRNTCIsImJvYXJkcyIsImhvc3RVcmwiLCJ0b0RvQnV0dG9uIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImFkZEV2ZW50TGlzdGVuZXIiLCJhZGRFbGVtZW50IiwiYWRkQm9hcmREZWZhdWx0IiwiYWRkQm9hcmRzIiwicmVtb3ZlQm9hcmQiLCJpbml0IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/src/js/custom/documentation/general/jkanban/rich.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/src/js/custom/documentation/general/jkanban/rich.js"]();
/******/ 	
/******/ })()
;