/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/*!************************************!*\
  !*** ./sample/coffee/modal.coffee ***!
  \************************************/
/***/ function(module, exports, __webpack_require__) {

	var itemNode, modalNode;
	
	modalNode = __webpack_require__(/*! ./modal.html */ 1);
	
	itemNode = __webpack_require__(/*! ./item.html */ 2);
	
	(function($) {
	  var $modalNode, album;
	  $modalNode = function(imageLists) {
	    var $elem, image, listNode, _i, _len;
	    $elem = $(modalNode);
	    for (_i = 0, _len = imageLists.length; _i < _len; _i++) {
	      image = imageLists[_i];
	      listNode = "<li>" + image + "</li>";
	      $(".modal-body ul", $elem).append(listNode);
	    }
	    return $elem;
	  };
	  album = function(opt) {
	    var url;
	    url = "/api.php/photo/list/default/";
	    $.get(url, {}, (function(_this) {
	      return function(data) {
	        console.log("data recieved", data);
	        $(_this).append($modalNode(data.list));
	        return $(".modal", _this).modal("show");
	      };
	    })(this));
	    return $(".modal", this.target);
	  };
	  return $.fn.album = album;
	})(jQuery);


/***/ },
/* 1 */
/*!**********************************!*\
  !*** ./sample/coffee/modal.html ***!
  \**********************************/
/***/ function(module, exports, __webpack_require__) {

	module.exports = "<div class=\"modal fade\">\n    <div class=\"modal-dialog\">\n        <div class=\"modal-content\">\n            <div class=\"modal-header\">\n                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>\n                <h4 class=\"modal-title\">Modal title</h4>\n            </div>\n            <div class=\"modal-body\">\n                <ul>\n                    <li>hogehoge</li>\n                </ul>\n            </div>\n            <div class=\"modal-footer\">\n                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\n                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>\n            </div>\n        </div><!-- /.modal-content -->\n    </div><!-- /.modal-dialog -->\n</div><!-- /.modal -->";

/***/ },
/* 2 */
/*!*********************************!*\
  !*** ./sample/coffee/item.html ***!
  \*********************************/
/***/ function(module, exports, __webpack_require__) {

	module.exports = "<div class=\"col-xs-3\">\n    <div class=\"thumbnail\">\n        <img src=\"" + __webpack_require__(!(function webpackMissingModule() { var e = new Error("Cannot find module \"./...\""); e.code = 'MODULE_NOT_FOUND'; throw e; }())) + "\" alt=\"...\">\n        <div class=\"caption\">\n            <h4>Thumbnail label</h4>\n            <p></p>\n            <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>\n        </div>\n    </div>\n</div>";

/***/ }
/******/ ])
//# sourceMappingURL=modal.js.map