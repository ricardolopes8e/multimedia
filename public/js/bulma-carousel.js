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
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ 3:
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

(function (global, factory) {
    ( false ? 'undefined' : _typeof(exports)) === 'object' && typeof module !== 'undefined' ? module.exports = factory() :  true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
				__WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : global.bulmaCarousel = factory();
})(this, function () {
    'use strict';

    var EventEmitter = function () {
        function EventEmitter() {
            var listeners = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];

            _classCallCheck(this, EventEmitter);

            this._listeners = new Map(listeners);
            this._middlewares = new Map();
        }

        _createClass(EventEmitter, [{
            key: 'listenerCount',
            value: function listenerCount(eventName) {
                if (!this._listeners.has(eventName)) {
                    return 0;
                }

                var eventListeners = this._listeners.get(eventName);
                return eventListeners.length;
            }
        }, {
            key: 'removeListeners',
            value: function removeListeners() {
                var _this = this;

                var eventName = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
                var middleware = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

                if (eventName !== null) {
                    if (Array.isArray(eventName)) {
                        name.forEach(function (e) {
                            return _this.removeListeners(e, middleware);
                        });
                    } else {
                        this._listeners.delete(eventName);

                        if (middleware) {
                            this.removeMiddleware(eventName);
                        }
                    }
                } else {
                    this._listeners = new Map();
                }
            }
        }, {
            key: 'middleware',
            value: function middleware(eventName, fn) {
                var _this2 = this;

                if (Array.isArray(eventName)) {
                    name.forEach(function (e) {
                        return _this2.middleware(e, fn);
                    });
                } else {
                    if (!Array.isArray(this._middlewares.get(eventName))) {
                        this._middlewares.set(eventName, []);
                    }

                    this._middlewares.get(eventName).push(fn);
                }
            }
        }, {
            key: 'removeMiddleware',
            value: function removeMiddleware() {
                var _this3 = this;

                var eventName = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

                if (eventName !== null) {
                    if (Array.isArray(eventName)) {
                        name.forEach(function (e) {
                            return _this3.removeMiddleware(e);
                        });
                    } else {
                        this._middlewares.delete(eventName);
                    }
                } else {
                    this._middlewares = new Map();
                }
            }
        }, {
            key: 'on',
            value: function on(name, callback) {
                var _this4 = this;

                var once = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

                if (Array.isArray(name)) {
                    name.forEach(function (e) {
                        return _this4.on(e, callback);
                    });
                } else {
                    name = name.toString();
                    var split = name.split(/,|, | /);

                    if (split.length > 1) {
                        split.forEach(function (e) {
                            return _this4.on(e, callback);
                        });
                    } else {
                        if (!Array.isArray(this._listeners.get(name))) {
                            this._listeners.set(name, []);
                        }

                        this._listeners.get(name).push({ once: once, callback: callback });
                    }
                }
            }
        }, {
            key: 'once',
            value: function once(name, callback) {
                this.on(name, callback, true);
            }
        }, {
            key: 'emit',
            value: function emit(name, data) {
                var _this5 = this;

                var silent = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

                name = name.toString();
                var listeners = this._listeners.get(name);
                var middlewares = null;
                var doneCount = 0;
                var execute = silent;

                if (Array.isArray(listeners)) {
                    listeners.forEach(function (listener, index) {
                        // Start Middleware checks unless we're doing a silent emit
                        if (!silent) {
                            middlewares = _this5._middlewares.get(name);
                            // Check and execute Middleware
                            if (Array.isArray(middlewares)) {
                                middlewares.forEach(function (middleware) {
                                    middleware(data, function () {
                                        var newData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

                                        if (newData !== null) {
                                            data = newData;
                                        }
                                        doneCount++;
                                    }, name);
                                });

                                if (doneCount >= middlewares.length) {
                                    execute = true;
                                }
                            } else {
                                execute = true;
                            }
                        }

                        // If Middleware checks have been passed, execute
                        if (execute) {
                            if (listener.once) {
                                listeners[index] = null;
                            }
                            listener.callback(data);
                        }
                    });

                    // Dirty way of removing used Events
                    while (listeners.indexOf(null) !== -1) {
                        listeners.splice(listeners.indexOf(null), 1);
                    }
                }
            }
        }]);

        return EventEmitter;
    }();

    var supportsPassive = false;
    try {
        var opts = Object.defineProperty({}, 'passive', {
            get: function get() {
                supportsPassive = true;
            }
        });
        window.addEventListener("testPassive", null, opts);
        window.removeEventListener("testPassive", null, opts);
    } catch (e) {}

    var Carousel = function (_EventEmitter) {
        _inherits(Carousel, _EventEmitter);

        function Carousel(selector) {
            _classCallCheck(this, Carousel);

            var _this6 = _possibleConstructorReturn(this, (Carousel.__proto__ || Object.getPrototypeOf(Carousel)).call(this));

            _this6._clickEvents = ['touchstart', 'click'];

            _this6.carousel = typeof selector === 'string' ? document.querySelector(selector) : selector;
            // An invalid selector or non-DOM node has been provided.
            if (!_this6.carousel) {
                throw new Error('An invalid selector or non-DOM node has been provided.');
            }

            /// Set default options and merge with instance defined
            _this6.options = Object.assign({}, {
                threshold: 50, //required min distance traveled to be considered swipe
                restraint: 100, // maximum distance allowed at the same time in perpendicular direction
                allowedTime: 500 // maximum time allowed to travel that distance
            });

            _this6.init();
            return _this6;
        }

        /**
         * Initiate all DOM element containing carousel class
         * @method
         * @return {Array} Array of all Carousel instances
         */


        _createClass(Carousel, [{
            key: 'init',


            /**
             * Initiate plugin
             * @method init
             * @return {void}
             */
            value: function init() {
                var _this7 = this;

                var forceHiddenNavigation = false;

                this.computedStyle = window.getComputedStyle(this.carousel);
                this.carouselWidth = parseInt(this.computedStyle.getPropertyValue('width'), 10);

                this.carouselContainer = this.carousel.querySelector('.carousel-container');
                this.carouselItems = this.carousel.querySelectorAll('.carousel-item');
                this.carouselItemsArray = Array.from(this.carouselItems);

                // Detect which animation is setup and auto-calculate size and transformation
                if (this.carousel.dataset.size && !this.carousel.classList.contains('carousel-animate-fade')) {
                    if (this.carousel.dataset.size >= this.carouselItemsArray.length) {
                        this.offset = 0;
                        forceHiddenNavigation = true;
                    } else {
                        this.offset = this.carouselWidth / this.carousel.dataset.size;
                    }

                    this.carouselContainer.style.left = 0 - this.offset + 'px';
                    this.carouselContainer.style.transform = 'translateX(' + this.offset + 'px)';
                    [].forEach.call(this.carouselItems, function (carouselItem) {
                        carouselItem.style.flexBasis = _this7.offset + 'px';
                    });
                }

                this._initNavigation(forceHiddenNavigation);

                // If animation is fade then force carouselContainer size (due to the position: absolute)
                if (this.carousel.classList.contains('carousel-animate-fade') && this.carouselItems.length) {
                    var img = this.carouselItems[0].querySelector('img');
                    var scale = 1;
                    if (img.naturalWidth) {
                        scale = this.carouselWidth / img.naturalWidth;
                        this.carouselContainer.style.height = img.naturalHeight * scale + 'px';
                    } else {
                        img.onload = function () {
                            scale = _this7.carouselWidth / img.naturalWidth;
                            _this7.carouselContainer.style.height = img.naturalHeight * scale + 'px';
                        };
                    }
                }

                this.currentItem = {
                    carousel: this.carousel,
                    node: null,
                    pos: -1
                };
                this.currentItem.node = this.carousel.querySelector('.carousel-item.is-active'), this.currentItem.pos = this.currentItem.node ? this.carouselItemsArray.indexOf(this.currentItem.node) : -1;
                if (!this.currentItem.node) {
                    this.currentItem.node = this.carouselItems[0];
                    this.currentItem.node.classList.add('is-active');
                    this.currentItem.pos = 0;
                }

                this._setOrder();

                if (this.carousel.dataset.autoplay && this.carousel.dataset.autoplay == 'true') {
                    this._autoPlay(this.carousel.dataset.delay || 5000);
                }

                this._bindEvents();

                this.emit('carousel:ready', this.currentItem);
            }

            /**
             * Initiate Navigation area and Previous/Next buttons
             * @method _initNavigation
             * @return {[type]}        [description]
             */

        }, {
            key: '_initNavigation',
            value: function _initNavigation() {
                var forceHidden = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;

                this.previousControl = this.carousel.querySelector('.carousel-nav-left');
                this.nextControl = this.carousel.querySelector('.carousel-nav-right');

                if (this.carouselItems.length <= 1 || forceHidden) {
                    if (this.carouselContainer) {
                        this.carouselContainer.style.left = '0';
                    }
                    if (this.previousControl) {
                        this.previousControl.style.display = 'none';
                    }
                    if (this.nextControl) {
                        this.nextControl.style.display = 'none';
                    }
                }
            }

            /**
             * Bind all events
             * @method _bindEvents
             * @return {void}
             */

        }, {
            key: '_bindEvents',
            value: function _bindEvents() {
                var _this8 = this;

                if (this.previousControl) {
                    this._clickEvents.forEach(function (clickEvent) {
                        _this8.previousControl.addEventListener(clickEvent, function (e) {
                            e.preventDefault();
                            _this8._slide('previous');
                            if (_this8._autoPlayInterval) {
                                clearInterval(_this8._autoPlayInterval);
                                _this8._autoPlay(_this8.carousel.dataset.delay || 5000);
                            }
                        }, supportsPassive ? { passive: true } : false);
                    });
                }

                if (this.nextControl) {
                    this._clickEvents.forEach(function (clickEvent) {
                        _this8.nextControl.addEventListener(clickEvent, function (e) {
                            e.preventDefault();
                            _this8._slide('next');
                            if (_this8._autoPlayInterval) {
                                clearInterval(_this8._autoPlayInterval);
                                _this8._autoPlay(_this8.carousel.dataset.delay || 5000);
                            }
                        }, supportsPassive ? { passive: true } : false);
                    });
                }

                // Bind swipe events
                this.carousel.addEventListener('touchstart', function (e) {
                    _this8._swipeStart(e);
                }, supportsPassive ? { passive: true } : false);
                this.carousel.addEventListener('touchmove', function (e) {
                    if (!supportsPassive) {
                        e.preventDefault();
                    }
                }, supportsPassive ? { passive: true } : false);
                this.carousel.addEventListener('touchend', function (e) {
                    _this8._swipeEnd(e);
                }, supportsPassive ? { passive: true } : false);
            }

            /**
             * Find next item to display
             * @method _next
             * @param  {Node} element Current Node element
             * @return {Node}         Next Node element
             */

        }, {
            key: '_next',
            value: function _next(element) {
                if (element.nextElementSibling) {
                    return element.nextElementSibling;
                } else {
                    return this.carouselItems[0];
                }
            }

            /**
             * Find previous item to display
             * @method _previous
             * @param  {Node}  element Current Node element
             * @return {Node}          Previous Node element
             */

        }, {
            key: '_previous',
            value: function _previous(element) {
                if (element.previousElementSibling) {
                    return element.previousElementSibling;
                } else {
                    return this.carouselItems[this.carouselItems.length - 1];
                }
            }

            /**
             * Update each item order
             * @method _setOrder
             */

        }, {
            key: '_setOrder',
            value: function _setOrder() {
                this.currentItem.node.style.order = '1';
                this.currentItem.node.style.zIndex = '1';
                var item = this.currentItem.node;
                var i = void 0,
                    j = void 0,
                    ref = void 0;
                for (i = j = 2, ref = this.carouselItemsArray.length; 2 <= ref ? j <= ref : j >= ref; i = 2 <= ref ? ++j : --j) {
                    item = this._next(item);
                    item.style.order = '' + i % this.carouselItemsArray.length;
                    item.style.zIndex = '0';
                }
            }

            /**
             * Save current position on start swiping
             * @method _swipeStart
             * @param  {Event}    e Swipe event
             * @return {void}
             */

        }, {
            key: '_swipeStart',
            value: function _swipeStart(e) {
                e.preventDefault();

                e = e ? e : window.event;
                e = 'changedTouches' in e ? e.changedTouches[0] : e;
                this._touch = {
                    start: {
                        time: new Date().getTime(), // record time when finger first makes contact with surface
                        x: e.pageX,
                        y: e.pageY
                    },
                    dist: {
                        x: 0,
                        y: 0
                    }
                };
            }

            /**
             * Save current position on end swiping
             * @method _swipeEnd
             * @param  {Event}  e swipe event
             * @return {void}
             */

        }, {
            key: '_swipeEnd',
            value: function _swipeEnd(e) {
                e.preventDefault();

                e = e ? e : window.event;
                e = 'changedTouches' in e ? e.changedTouches[0] : e;
                this._touch.dist = {
                    x: e.pageX - this._touch.start.x, // get horizontal dist traveled by finger while in contact with surface
                    y: e.pageY - this._touch.start.y // get vertical dist traveled by finger while in contact with surface
                };

                this._handleGesture();
            }

            /**
             * Identify the gestureand slide if necessary
             * @method _handleGesture
             * @return {void}
             */

        }, {
            key: '_handleGesture',
            value: function _handleGesture() {
                var elapsedTime = new Date().getTime() - this._touch.start.time; // get time elapsed
                if (elapsedTime <= this.options.allowedTime) {
                    // first condition for awipe met
                    if (Math.abs(this._touch.dist.x) >= this.options.threshold && Math.abs(this._touch.dist.y) <= this.options.restraint) {
                        // 2nd condition for horizontal swipe met
                        this._touch.dist.x < 0 ? this._slide('next') : this._slide('previous'); // if dist traveled is negative, it indicates left swipe
                    }
                }
            }

            /**
             * Update slides to display the wanted one
             * @method _slide
             * @param  {String} [direction='next'] Direction in which items need to move
             * @return {void}
             */

        }, {
            key: '_slide',
            value: function _slide() {
                var _this9 = this;

                var direction = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'next';

                if (this.carouselItems.length) {
                    this.oldItemNode = this.currentItem.node;
                    this.emit('carousel:slide:before', this.currentItem);
                    // initialize direction to change order
                    if (direction === 'previous') {
                        this.currentItem.node = this._previous(this.currentItem.node);
                        // add reverse class
                        if (!this.carousel.classList.contains('carousel-animate-fade')) {
                            this.carousel.classList.add('is-reversing');
                            this.carouselContainer.style.transform = 'translateX(' + -Math.abs(this.offset) + 'px)';
                        }
                    } else {
                        // Reorder items
                        this.currentItem.node = this._next(this.currentItem.node);
                        // re_slide reverse class
                        this.carousel.classList.remove('is-reversing');
                        this.carouselContainer.style.transform = 'translateX(' + Math.abs(this.offset) + 'px)';
                    }
                    this.currentItem.node.classList.add('is-active');
                    this.oldItemNode.classList.remove('is-active');

                    // Disable transition to instant change order
                    this.carousel.classList.remove('carousel-animated');
                    // Enable transition to animate order 1 to order 2
                    setTimeout(function () {
                        _this9.carousel.classList.add('carousel-animated');
                    }, 50);

                    this._setOrder();
                    this.emit('carousel:slide:after', this.currentItem);
                }
            }

            /**
             * Initiate autoplay system
             * @method _autoPlay
             * @param  {Number}  [delay=5000] Delay between slides in milliseconds
             * @return {void}
             */

        }, {
            key: '_autoPlay',
            value: function _autoPlay() {
                var _this10 = this;

                var delay = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 5000;

                this._autoPlayInterval = setInterval(function () {
                    _this10._slide('next');
                }, delay);
            }
        }], [{
            key: 'attach',
            value: function attach() {
                var selector = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '.carousel, .hero-carousel';

                var carouselInstances = new Array();

                var carousels = document.querySelectorAll(selector);
                [].forEach.call(carousels, function (carousel) {
                    setTimeout(function () {
                        carouselInstances.push(new Carousel(carousel));
                    }, 100);
                });
                return carouselInstances;
            }
        }]);

        return Carousel;
    }(EventEmitter);

    return Carousel;
});

/***/ }),

/***/ 9:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(3);


/***/ })

/******/ });