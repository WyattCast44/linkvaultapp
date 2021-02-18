/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/livewire-turbolinks.js":
/*!*********************************************!*\
  !*** ./resources/js/livewire-turbolinks.js ***!
  \*********************************************/
/***/ ((module, exports, __webpack_require__) => {

eval("var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;(function (factory) {\n   true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),\n\t\t__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?\n\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :\n\t\t__WEBPACK_AMD_DEFINE_FACTORY__),\n\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : 0;\n})(function () {\n  'use strict';\n\n  if (typeof window.livewire === 'undefined') {\n    throw 'Livewire Turbolinks Plugin: window.Livewire is undefined. Make sure @livewireScripts is placed above this script include';\n  }\n\n  var firstTime = true;\n\n  function wireTurboAfterFirstVisit() {\n    // We only want this handler to run AFTER the first load.\n    if (firstTime) {\n      firstTime = false;\n      return;\n    }\n\n    window.Livewire.restart();\n  }\n\n  function wireTurboBeforeCache() {\n    document.querySelectorAll('[wire\\\\:id]').forEach(function (el) {\n      var component = el.__livewire;\n      var dataObject = {\n        fingerprint: component.fingerprint,\n        serverMemo: component.serverMemo,\n        effects: component.effects\n      };\n      el.setAttribute('wire:initial-data', JSON.stringify(dataObject));\n    });\n  }\n\n  document.addEventListener(\"turbo:load\", wireTurboAfterFirstVisit);\n  document.addEventListener(\"turbo:before-cache\", wireTurboBeforeCache);\n  document.addEventListener(\"turbolinks:load\", wireTurboAfterFirstVisit);\n  document.addEventListener(\"turbolinks:before-cache\", wireTurboBeforeCache);\n  Livewire.hook('beforePushState', function (state) {\n    if (!state.turbolinks) state.turbolinks = {};\n  });\n  Livewire.hook('beforeReplaceState', function (state) {\n    if (!state.turbolinks) state.turbolinks = {};\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbGl2ZXdpcmUtdHVyYm9saW5rcy5qcz83MDQwIl0sIm5hbWVzIjpbImZhY3RvcnkiLCJkZWZpbmUiLCJ3aW5kb3ciLCJsaXZld2lyZSIsImZpcnN0VGltZSIsIndpcmVUdXJib0FmdGVyRmlyc3RWaXNpdCIsIkxpdmV3aXJlIiwicmVzdGFydCIsIndpcmVUdXJib0JlZm9yZUNhY2hlIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImVsIiwiY29tcG9uZW50IiwiX19saXZld2lyZSIsImRhdGFPYmplY3QiLCJmaW5nZXJwcmludCIsInNlcnZlck1lbW8iLCJlZmZlY3RzIiwic2V0QXR0cmlidXRlIiwiSlNPTiIsInN0cmluZ2lmeSIsImFkZEV2ZW50TGlzdGVuZXIiLCJob29rIiwic3RhdGUiLCJ0dXJib2xpbmtzIl0sIm1hcHBpbmdzIjoiQUFBQyw2RUFBVUEsT0FBVixFQUFtQjtBQUNoQixVQUE2Q0Msb0NBQU9ELE9BQUQ7QUFBQTtBQUFBO0FBQUE7QUFBQSxrR0FBbkQsR0FDSUEsQ0FESjtBQUVILENBSEEsRUFHRSxZQUFZO0FBQ1g7O0FBRUEsTUFBSSxPQUFPRSxNQUFNLENBQUNDLFFBQWQsS0FBMkIsV0FBL0IsRUFBNEM7QUFDeEMsVUFBTSwwSEFBTjtBQUNIOztBQUVELE1BQUlDLFNBQVMsR0FBRyxJQUFoQjs7QUFFQSxXQUFTQyx3QkFBVCxHQUFvQztBQUNoQztBQUNBLFFBQUlELFNBQUosRUFBZTtBQUNYQSxlQUFTLEdBQUcsS0FBWjtBQUNBO0FBQ0g7O0FBRURGLFVBQU0sQ0FBQ0ksUUFBUCxDQUFnQkMsT0FBaEI7QUFDSDs7QUFFRCxXQUFTQyxvQkFBVCxHQUFnQztBQUM1QkMsWUFBUSxDQUFDQyxnQkFBVCxDQUEwQixhQUExQixFQUF5Q0MsT0FBekMsQ0FBaUQsVUFBVUMsRUFBVixFQUFjO0FBQzNELFVBQU1DLFNBQVMsR0FBR0QsRUFBRSxDQUFDRSxVQUFyQjtBQUNBLFVBQU1DLFVBQVUsR0FBRztBQUNmQyxtQkFBVyxFQUFFSCxTQUFTLENBQUNHLFdBRFI7QUFFZkMsa0JBQVUsRUFBRUosU0FBUyxDQUFDSSxVQUZQO0FBR2ZDLGVBQU8sRUFBRUwsU0FBUyxDQUFDSztBQUhKLE9BQW5CO0FBS0FOLFFBQUUsQ0FBQ08sWUFBSCxDQUFnQixtQkFBaEIsRUFBcUNDLElBQUksQ0FBQ0MsU0FBTCxDQUFlTixVQUFmLENBQXJDO0FBQ0gsS0FSRDtBQVNIOztBQUVETixVQUFRLENBQUNhLGdCQUFULENBQTBCLFlBQTFCLEVBQXdDakIsd0JBQXhDO0FBQ0FJLFVBQVEsQ0FBQ2EsZ0JBQVQsQ0FBMEIsb0JBQTFCLEVBQWdEZCxvQkFBaEQ7QUFDQUMsVUFBUSxDQUFDYSxnQkFBVCxDQUEwQixpQkFBMUIsRUFBNkNqQix3QkFBN0M7QUFDQUksVUFBUSxDQUFDYSxnQkFBVCxDQUEwQix5QkFBMUIsRUFBcURkLG9CQUFyRDtBQUNBRixVQUFRLENBQUNpQixJQUFULENBQWMsaUJBQWQsRUFBaUMsVUFBQUMsS0FBSyxFQUFJO0FBQ3RDLFFBQUksQ0FBQ0EsS0FBSyxDQUFDQyxVQUFYLEVBQXVCRCxLQUFLLENBQUNDLFVBQU4sR0FBbUIsRUFBbkI7QUFDMUIsR0FGRDtBQUdBbkIsVUFBUSxDQUFDaUIsSUFBVCxDQUFjLG9CQUFkLEVBQW9DLFVBQUFDLEtBQUssRUFBSTtBQUN6QyxRQUFJLENBQUNBLEtBQUssQ0FBQ0MsVUFBWCxFQUF1QkQsS0FBSyxDQUFDQyxVQUFOLEdBQW1CLEVBQW5CO0FBQzFCLEdBRkQ7QUFJSCxDQTdDQSxDQUFEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2xpdmV3aXJlLXR1cmJvbGlua3MuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gKGZhY3RvcnkpIHtcbiAgICB0eXBlb2YgZGVmaW5lID09PSAnZnVuY3Rpb24nICYmIGRlZmluZS5hbWQgPyBkZWZpbmUoZmFjdG9yeSkgOlxuICAgICAgICBmYWN0b3J5KCk7XG59KChmdW5jdGlvbiAoKSB7XG4gICAgJ3VzZSBzdHJpY3QnO1xuXG4gICAgaWYgKHR5cGVvZiB3aW5kb3cubGl2ZXdpcmUgPT09ICd1bmRlZmluZWQnKSB7XG4gICAgICAgIHRocm93ICdMaXZld2lyZSBUdXJib2xpbmtzIFBsdWdpbjogd2luZG93LkxpdmV3aXJlIGlzIHVuZGVmaW5lZC4gTWFrZSBzdXJlIEBsaXZld2lyZVNjcmlwdHMgaXMgcGxhY2VkIGFib3ZlIHRoaXMgc2NyaXB0IGluY2x1ZGUnO1xuICAgIH1cblxuICAgIHZhciBmaXJzdFRpbWUgPSB0cnVlO1xuXG4gICAgZnVuY3Rpb24gd2lyZVR1cmJvQWZ0ZXJGaXJzdFZpc2l0KCkge1xuICAgICAgICAvLyBXZSBvbmx5IHdhbnQgdGhpcyBoYW5kbGVyIHRvIHJ1biBBRlRFUiB0aGUgZmlyc3QgbG9hZC5cbiAgICAgICAgaWYgKGZpcnN0VGltZSkge1xuICAgICAgICAgICAgZmlyc3RUaW1lID0gZmFsc2U7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB3aW5kb3cuTGl2ZXdpcmUucmVzdGFydCgpO1xuICAgIH1cblxuICAgIGZ1bmN0aW9uIHdpcmVUdXJib0JlZm9yZUNhY2hlKCkge1xuICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbd2lyZVxcXFw6aWRdJykuZm9yRWFjaChmdW5jdGlvbiAoZWwpIHtcbiAgICAgICAgICAgIGNvbnN0IGNvbXBvbmVudCA9IGVsLl9fbGl2ZXdpcmU7XG4gICAgICAgICAgICBjb25zdCBkYXRhT2JqZWN0ID0ge1xuICAgICAgICAgICAgICAgIGZpbmdlcnByaW50OiBjb21wb25lbnQuZmluZ2VycHJpbnQsXG4gICAgICAgICAgICAgICAgc2VydmVyTWVtbzogY29tcG9uZW50LnNlcnZlck1lbW8sXG4gICAgICAgICAgICAgICAgZWZmZWN0czogY29tcG9uZW50LmVmZmVjdHNcbiAgICAgICAgICAgIH07XG4gICAgICAgICAgICBlbC5zZXRBdHRyaWJ1dGUoJ3dpcmU6aW5pdGlhbC1kYXRhJywgSlNPTi5zdHJpbmdpZnkoZGF0YU9iamVjdCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwidHVyYm86bG9hZFwiLCB3aXJlVHVyYm9BZnRlckZpcnN0VmlzaXQpO1xuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJ0dXJibzpiZWZvcmUtY2FjaGVcIiwgd2lyZVR1cmJvQmVmb3JlQ2FjaGUpO1xuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJ0dXJib2xpbmtzOmxvYWRcIiwgd2lyZVR1cmJvQWZ0ZXJGaXJzdFZpc2l0KTtcbiAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwidHVyYm9saW5rczpiZWZvcmUtY2FjaGVcIiwgd2lyZVR1cmJvQmVmb3JlQ2FjaGUpO1xuICAgIExpdmV3aXJlLmhvb2soJ2JlZm9yZVB1c2hTdGF0ZScsIHN0YXRlID0+IHtcbiAgICAgICAgaWYgKCFzdGF0ZS50dXJib2xpbmtzKSBzdGF0ZS50dXJib2xpbmtzID0ge307XG4gICAgfSk7XG4gICAgTGl2ZXdpcmUuaG9vaygnYmVmb3JlUmVwbGFjZVN0YXRlJywgc3RhdGUgPT4ge1xuICAgICAgICBpZiAoIXN0YXRlLnR1cmJvbGlua3MpIHN0YXRlLnR1cmJvbGlua3MgPSB7fTtcbiAgICB9KTtcblxufSkpKTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/livewire-turbolinks.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
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
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	__webpack_require__("./resources/js/livewire-turbolinks.js");
/******/ 	// This entry module used 'module' so it can't be inlined
/******/ })()
;