webpackJsonp([0],[
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _Navbar = __webpack_require__(1);

var _Navbar2 = _interopRequireDefault(_Navbar);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var navbar = new _Navbar2.default(jQuery);

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Navbar = function () {
    function Navbar($) {
        _classCallCheck(this, Navbar);

        this.menuIcon = $(".navbar__menu-icon");
        this.menu = $(".menu");
        this.container = $(".navbar__container");
        this.events();
    }

    _createClass(Navbar, [{
        key: "events",
        value: function events() {
            this.menuIcon.on("click", this.toggleMenu.bind(this));
        }
    }, {
        key: "toggleMenu",
        value: function toggleMenu() {
            this.menuIcon.toggleClass("navbar__menu-icon--close-x");
            this.menu.toggleClass("menu--visible");
            this.container.toggleClass("navbar__container--visible");
        }
    }]);

    return Navbar;
}();

exports.default = Navbar;

/***/ })
],[0]);