! function (t, e) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.Sweetalert2 = e()
}(this, function () {
    "use strict";

    function r(t) {
        return (r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
            return typeof t
        } : function (t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
        })(t)
    }

    function o(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
    }

    function i(t, e) {
        for (var n = 0; n < e.length; n++) {
            var o = e[n];
            o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(t, o.key, o)
        }
    }

    function a(t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t
    }

    function c() {
        return (c = Object.assign || function (t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = arguments[e];
                for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o])
            }
            return t
        }).apply(this, arguments)
    }

    function s(t) {
        return (s = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
            return t.__proto__ || Object.getPrototypeOf(t)
        })(t)
    }

    function u(t, e) {
        return (u = Object.setPrototypeOf || function (t, e) {
            return t.__proto__ = e, t
        })(t, e)
    }

    function l(t, e, n) {
        return (l = function () {
            if ("undefined" != typeof Reflect && Reflect.construct && !Reflect.construct.sham) {
                if ("function" == typeof Proxy) return 1;
                try {
                    return Date.prototype.toString.call(Reflect.construct(Date, [], function () {})), 1
                } catch (t) {
                    return
                }
            }
        }() ? Reflect.construct : function (t, e, n) {
            var o = [null];
            o.push.apply(o, e);
            var i = new(Function.bind.apply(t, o));
            return n && u(i, n.prototype), i
        }).apply(null, arguments)
    }

    function d(t, e) {
        return !e || "object" != typeof e && "function" != typeof e ? function (t) {
            if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return t
        }(t) : e
    }

    function p(t, e, n) {
        return (p = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
            var o = function (t, e) {
                for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = s(t)););
                return t
            }(t, e);
            if (o) {
                var i = Object.getOwnPropertyDescriptor(o, e);
                return i.get ? i.get.call(n) : i.value
            }
        })(t, e, n || t)
    }

    function f(e) {
        return Object.keys(e).map(function (t) {
            return e[t]
        })
    }

    function m(t) {
        return Array.prototype.slice.call(t)
    }

    function g(t) {
        console.error("".concat(q, " ").concat(t))
    }

    function h(t, e) {
        var n;
        n = '"'.concat(t, '" is deprecated and will be removed in the next major release. Please use "').concat(e, '" instead.'), -1 === D.indexOf(n) && (D.push(n), R(n))
    }

    function v(t) {
        return t && Promise.resolve(t) === t
    }

    function b(t) {
        return t instanceof Element || "object" === r(e = t) && e.jquery;
        var e
    }

    function t(t) {
        var e = {};
        for (var n in t) e[t[n]] = "swal2-" + t[n];
        return e
    }

    function y(t) {
        var e = z();
        return e ? e.querySelector(t) : null
    }

    function e(t) {
        return y(".".concat(t))
    }

    function n() {
        var t = W();
        return m(t.querySelectorAll(".".concat(_.icon)))
    }

    function w() {
        var t = n().filter(function (t) {
            return dt(t)
        });
        return t.length ? t[0] : null
    }

    function C() {
        return e(_.title)
    }

    function k() {
        return e(_.content)
    }

    function x() {
        return e(_.image)
    }

    function P() {
        return e(_["progress-steps"])
    }

    function A() {
        return e(_["validation-message"])
    }

    function B() {
        return y(".".concat(_.actions, " .").concat(_.confirm))
    }

    function E() {
        return y(".".concat(_.actions, " .").concat(_.cancel))
    }

    function S() {
        return e(_.actions)
    }

    function T() {
        return e(_.header)
    }

    function L() {
        return e(_.footer)
    }

    function O() {
        return e(_["timer-progress-bar"])
    }

    function M() {
        return e(_.close)
    }

    function H() {
        var t = m(W().querySelectorAll('[tabindex]:not([tabindex="-1"]):not([tabindex="0"])')).sort(function (t, e) {
                return t = parseInt(t.getAttribute("tabindex")), (e = parseInt(e.getAttribute("tabindex"))) < t ? 1 : t < e ? -1 : 0
            }),
            e = m(W().querySelectorAll('\n  a[href],\n  area[href],\n  input:not([disabled]),\n  select:not([disabled]),\n  textarea:not([disabled]),\n  button:not([disabled]),\n  iframe,\n  object,\n  embed,\n  [tabindex="0"],\n  [contenteditable],\n  audio[controls],\n  video[controls],\n  summary\n')).filter(function (t) {
                return "-1" !== t.getAttribute("tabindex")
            });
        return function (t) {
            for (var e = [], n = 0; n < t.length; n++) - 1 === e.indexOf(t[n]) && e.push(t[n]);
            return e
        }(t.concat(e)).filter(function (t) {
            return dt(t)
        })
    }

    function I() {
        return !K() && !document.body.classList.contains(_["no-backdrop"])
    }

    function j(t, e) {
        if (e) {
            for (var n = e.split(/\s+/), o = 0; o < n.length; o++)
                if (!t.classList.contains(n[o])) return;
            return 1
        }
    }

    function V(t, e, n) {
        var o, i;
        if (i = e, m((o = t).classList).forEach(function (t) {
                -1 === f(_).indexOf(t) && -1 === f(F).indexOf(t) && -1 === f(i.showClass).indexOf(t) && o.classList.remove(t)
            }), e.customClass && e.customClass[n]) {
            if ("string" != typeof e.customClass[n] && !e.customClass[n].forEach) return R("Invalid type of customClass.".concat(n, '! Expected string or iterable object, got "').concat(r(e.customClass[n]), '"'));
            st(t, e.customClass[n])
        }
    }
    var q = "SweetAlert2:",
        R = function (t) {
            console.warn("".concat(q, " ").concat(t))
        },
        D = [],
        N = function (t) {
            return "function" == typeof t ? t() : t
        },
        U = Object.freeze({
            cancel: "cancel",
            backdrop: "backdrop",
            close: "close",
            esc: "esc",
            timer: "timer"
        }),
        _ = t(["container", "shown", "height-auto", "iosfix", "popup", "modal", "no-backdrop", "toast", "toast-shown", "toast-column", "show", "hide", "close", "title", "header", "content", "html-container", "actions", "confirm", "cancel", "footer", "icon", "icon-content", "image", "input", "file", "range", "select", "radio", "checkbox", "label", "textarea", "inputerror", "validation-message", "progress-steps", "active-progress-step", "progress-step", "progress-step-line", "loading", "styled", "top", "top-start", "top-end", "top-left", "top-right", "center", "center-start", "center-end", "center-left", "center-right", "bottom", "bottom-start", "bottom-end", "bottom-left", "bottom-right", "grow-row", "grow-column", "grow-fullscreen", "rtl", "timer-progress-bar", "scrollbar-measure", "icon-success", "icon-warning", "icon-info", "icon-question", "icon-error"]),
        F = t(["success", "warning", "info", "question", "error"]),
        z = function () {
            return document.body.querySelector(".".concat(_.container))
        },
        W = function () {
            return e(_.popup)
        },
        K = function () {
            return document.body.classList.contains(_["toast-shown"])
        },
        Y = {
            previousBodyPadding: null
        };

    function Z(t, e) {
        if (!e) return null;
        switch (e) {
            case "select":
            case "textarea":
            case "file":
                return lt(t, _[e]);
            case "checkbox":
                return t.querySelector(".".concat(_.checkbox, " input"));
            case "radio":
                return t.querySelector(".".concat(_.radio, " input:checked")) || t.querySelector(".".concat(_.radio, " input:first-child"));
            case "range":
                return t.querySelector(".".concat(_.range, " input"));
            default:
                return lt(t, _.input)
        }
    }

    function Q(t) {
        if (t.focus(), "file" !== t.type) {
            var e = t.value;
            t.value = "", t.value = e
        }
    }

    function $(t, e, n) {
        t && e && ("string" == typeof e && (e = e.split(/\s+/).filter(Boolean)), e.forEach(function (e) {
            t.forEach ? t.forEach(function (t) {
                n ? t.classList.add(e) : t.classList.remove(e)
            }) : n ? t.classList.add(e) : t.classList.remove(e)
        }))
    }

    function J(t, e, n) {
        n || 0 === parseInt(n) ? t.style[e] = "number" == typeof n ? "".concat(n, "px") : n : t.style.removeProperty(e)
    }

    function X(t, e) {
        var n = 1 < arguments.length && void 0 !== e ? e : "flex";
        t.style.opacity = "", t.style.display = n
    }

    function G(t) {
        t.style.opacity = "", t.style.display = "none"
    }

    function tt(t, e, n) {
        e ? X(t, n) : G(t)
    }

    function et(t) {
        var e = window.getComputedStyle(t),
            n = parseFloat(e.getPropertyValue("animation-duration") || "0"),
            o = parseFloat(e.getPropertyValue("transition-duration") || "0");
        return 0 < n || 0 < o
    }

    function nt(t, e) {
        var n = 1 < arguments.length && void 0 !== e && e,
            o = O();
        dt(o) && (n && (o.style.transition = "none", o.style.width = "100%"), setTimeout(function () {
            o.style.transition = "width ".concat(t / 1e3, "s linear"), o.style.width = "0%"
        }, 10))
    }

    function ot() {
        return "undefined" == typeof window || "undefined" == typeof document
    }

    function it(t) {
        Xe.isVisible() && ct !== t.target.value && Xe.resetValidationMessage(), ct = t.target.value
    }

    function rt(t, e) {
        t instanceof HTMLElement ? e.appendChild(t) : "object" === r(t) ? mt(t, e) : t && (e.innerHTML = t)
    }

    function at(t, e) {
        var n = S(),
            o = B(),
            i = E();
        e.showConfirmButton || e.showCancelButton || G(n), V(n, e, "actions"), vt(o, "confirm", e), vt(i, "cancel", e), e.buttonsStyling ? function (t, e, n) {
            st([t, e], _.styled), n.confirmButtonColor && (t.style.backgroundColor = n.confirmButtonColor);
            n.cancelButtonColor && (e.style.backgroundColor = n.cancelButtonColor);
            var o = window.getComputedStyle(t).getPropertyValue("background-color");
            t.style.borderLeftColor = o, t.style.borderRightColor = o
        }(o, i, e) : (ut([o, i], _.styled), o.style.backgroundColor = o.style.borderLeftColor = o.style.borderRightColor = "", i.style.backgroundColor = i.style.borderLeftColor = i.style.borderRightColor = ""), e.reverseButtons && o.parentNode.insertBefore(i, o)
    }
    var ct, st = function (t, e) {
            $(t, e, !0)
        },
        ut = function (t, e) {
            $(t, e, !1)
        },
        lt = function (t, e) {
            for (var n = 0; n < t.childNodes.length; n++)
                if (j(t.childNodes[n], e)) return t.childNodes[n]
        },
        dt = function (t) {
            return !(!t || !(t.offsetWidth || t.offsetHeight || t.getClientRects().length))
        },
        pt = '\n <div aria-labelledby="'.concat(_.title, '" aria-describedby="').concat(_.content, '" class="').concat(_.popup, '" tabindex="-1">\n   <div class="').concat(_.header, '">\n     <ul class="').concat(_["progress-steps"], '"></ul>\n     <div class="').concat(_.icon, " ").concat(F.error, '"></div>\n     <div class="').concat(_.icon, " ").concat(F.question, '"></div>\n     <div class="').concat(_.icon, " ").concat(F.warning, '"></div>\n     <div class="').concat(_.icon, " ").concat(F.info, '"></div>\n     <div class="').concat(_.icon, " ").concat(F.success, '"></div>\n     <img class="').concat(_.image, '" />\n     <h2 class="').concat(_.title, '" id="').concat(_.title, '"></h2>\n     <button type="button" class="').concat(_.close, '"></button>\n   </div>\n   <div class="').concat(_.content, '">\n     <div id="').concat(_.content, '" class="').concat(_["html-container"], '"></div>\n     <input class="').concat(_.input, '" />\n     <input type="file" class="').concat(_.file, '" />\n     <div class="').concat(_.range, '">\n       <input type="range" />\n       <output></output>\n     </div>\n     <select class="').concat(_.select, '"></select>\n     <div class="').concat(_.radio, '"></div>\n     <label for="').concat(_.checkbox, '" class="').concat(_.checkbox, '">\n       <input type="checkbox" />\n       <span class="').concat(_.label, '"></span>\n     </label>\n     <textarea class="').concat(_.textarea, '"></textarea>\n     <div class="').concat(_["validation-message"], '" id="').concat(_["validation-message"], '"></div>\n   </div>\n   <div class="').concat(_.actions, '">\n     <button type="button" class="').concat(_.confirm, '">OK</button>\n     <button type="button" class="').concat(_.cancel, '">Cancel</button>\n   </div>\n   <div class="').concat(_.footer, '"></div>\n   <div class="').concat(_["timer-progress-bar"], '"></div>\n </div>\n').replace(/(^|\n)\s*/g, ""),
        ft = function (t) {
            var e;
            if ((e = z()) && (e.parentNode.removeChild(e), ut([document.documentElement, document.body], [_["no-backdrop"], _["toast-shown"], _["has-column"]])), ot()) g("SweetAlert2 requires document to initialize");
            else {
                var n = document.createElement("div");
                n.className = _.container, n.innerHTML = pt;
                var o, i, r, a, c, s, u, l, d, p, f, m, h = "string" == typeof (o = t.target) ? document.querySelector(o) : o;
                h.appendChild(n), i = t, (r = W()).setAttribute("role", i.toast ? "alert" : "dialog"), r.setAttribute("aria-live", i.toast ? "polite" : "assertive"), i.toast || r.setAttribute("aria-modal", "true"), a = h, "rtl" === window.getComputedStyle(a).direction && st(z(), _.rtl), c = k(), s = lt(c, _.input), u = lt(c, _.file), l = c.querySelector(".".concat(_.range, " input")), d = c.querySelector(".".concat(_.range, " output")), p = lt(c, _.select), f = c.querySelector(".".concat(_.checkbox, " input")), m = lt(c, _.textarea), s.oninput = it, u.onchange = it, p.onchange = it, f.onchange = it, m.oninput = it, l.oninput = function (t) {
                    it(t), d.value = l.value
                }, l.onchange = function (t) {
                    it(t), l.nextSibling.value = l.value
                }
            }
        },
        mt = function (t, e) {
            t.jquery ? ht(e, t) : e.innerHTML = t.toString()
        },
        ht = function (t, e) {
            if (t.innerHTML = "", 0 in e)
                for (var n = 0; n in e; n++) t.appendChild(e[n].cloneNode(!0));
            else t.appendChild(e.cloneNode(!0))
        },
        gt = function () {
            if (ot()) return !1;
            var t = document.createElement("div"),
                e = {
                    WebkitAnimation: "webkitAnimationEnd",
                    OAnimation: "oAnimationEnd oanimationend",
                    animation: "animationend"
                };
            for (var n in e)
                if (Object.prototype.hasOwnProperty.call(e, n) && void 0 !== t.style[n]) return e[n];
            return !1
        }();

    function vt(t, e, n) {
        var o;
        tt(t, n["show".concat((o = e).charAt(0).toUpperCase() + o.slice(1), "Button")], "inline-block"), t.innerHTML = n["".concat(e, "ButtonText")], t.setAttribute("aria-label", n["".concat(e, "ButtonAriaLabel")]), t.className = _[e], V(t, n, "".concat(e, "Button")), st(t, n["".concat(e, "ButtonClass")])
    }

    function bt(t, e) {
        var n = z();
        if (n) {
            var o, i, r, a;
            o = n, "string" == typeof (i = e.backdrop) ? o.style.background = i : i || st([document.documentElement, document.body], _["no-backdrop"]), !e.backdrop && e.allowOutsideClick && R('"allowOutsideClick" parameter requires `backdrop` parameter to be set to `true`'), r = n, (a = e.position) in _ ? st(r, _[a]) : (R('The "position" parameter is not valid, defaulting to "center"'), st(r, _.center)),
                function (t, e) {
                    if (e && "string" == typeof e) {
                        var n = "grow-".concat(e);
                        n in _ && st(t, _[n])
                    }
                }(n, e.grow), V(n, e, "container");
            var c = document.body.getAttribute("data-swal2-queue-step");
            c && (n.setAttribute("data-queue-step", c), document.body.removeAttribute("data-swal2-queue-step"))
        }
    }

    function yt(t, e) {
        t.placeholder && !e.inputPlaceholder || (t.placeholder = e.inputPlaceholder)
    }
    var wt = {
            promise: new WeakMap,
            innerParams: new WeakMap,
            domCache: new WeakMap
        },
        Ct = ["input", "file", "range", "select", "radio", "checkbox", "textarea"],
        kt = function (t) {
            if (!Bt[t.input]) return g('Unexpected type of input! Expected "text", "email", "password", "number", "tel", "select", "radio", "checkbox", "textarea", "file" or "url", got "'.concat(t.input, '"'));
            var e = At(t.input),
                n = Bt[t.input](e, t);
            X(n), setTimeout(function () {
                Q(n)
            })
        },
        xt = function (t, e) {
            var n = Z(k(), t);
            if (n)
                for (var o in ! function (t) {
                        for (var e = 0; e < t.attributes.length; e++) {
                            var n = t.attributes[e].name; - 1 === ["type", "value", "style"].indexOf(n) && t.removeAttribute(n)
                        }
                    }(n), e) "range" === t && "placeholder" === o || n.setAttribute(o, e[o])
        },
        Pt = function (t) {
            var e = At(t.input);
            t.customClass && st(e, t.customClass.input)
        },
        At = function (t) {
            var e = _[t] ? _[t] : _.input;
            return lt(k(), e)
        },
        Bt = {};
    Bt.text = Bt.email = Bt.password = Bt.number = Bt.tel = Bt.url = function (t, e) {
        return "string" == typeof e.inputValue || "number" == typeof e.inputValue ? t.value = e.inputValue : v(e.inputValue) || R('Unexpected type of inputValue! Expected "string", "number" or "Promise", got "'.concat(r(e.inputValue), '"')), yt(t, e), t.type = e.input, t
    }, Bt.file = function (t, e) {
        return yt(t, e), t
    }, Bt.range = function (t, e) {
        var n = t.querySelector("input"),
            o = t.querySelector("output");
        return n.value = e.inputValue, n.type = e.input, o.value = e.inputValue, t
    }, Bt.select = function (t, e) {
        if (t.innerHTML = "", e.inputPlaceholder) {
            var n = document.createElement("option");
            n.innerHTML = e.inputPlaceholder, n.value = "", n.disabled = !0, n.selected = !0, t.appendChild(n)
        }
        return t
    }, Bt.radio = function (t) {
        return t.innerHTML = "", t
    }, Bt.checkbox = function (t, e) {
        var n = Z(k(), "checkbox");
        return n.value = 1, n.id = _.checkbox, n.checked = Boolean(e.inputValue), t.querySelector("span").innerHTML = e.inputPlaceholder, t
    }, Bt.textarea = function (e, t) {
        if (e.value = t.inputValue, yt(e, t), "MutationObserver" in window) {
            var n = parseInt(window.getComputedStyle(W()).width),
                o = parseInt(window.getComputedStyle(W()).paddingLeft) + parseInt(window.getComputedStyle(W()).paddingRight);
            new MutationObserver(function () {
                var t = e.offsetWidth + o;
                W().style.width = n < t ? "".concat(t, "px") : null
            }).observe(e, {
                attributes: !0,
                attributeFilter: ["style"]
            })
        }
        return e
    };

    function Et(t, e) {
        var n, o, i, r, a, c = k().querySelector("#".concat(_.content));
        e.html ? (rt(e.html, c), X(c, "block")) : e.text ? (c.textContent = e.text, X(c, "block")) : G(c), n = t, o = e, i = k(), r = wt.innerParams.get(n), a = !r || o.input !== r.input, Ct.forEach(function (t) {
            var e = _[t],
                n = lt(i, e);
            xt(t, o.inputAttributes), n.className = e, a && G(n)
        }), o.input && (a && kt(o), Pt(o)), V(k(), e, "content")
    }

    function St() {
        return z().getAttribute("data-queue-step")
    }

    function Tt(t, s) {
        var u = P();
        if (!s.progressSteps || 0 === s.progressSteps.length) return G(u);
        X(u), u.innerHTML = "";
        var l = parseInt(void 0 === s.currentProgressStep ? St() : s.currentProgressStep);
        l >= s.progressSteps.length && R("Invalid currentProgressStep parameter, it should be less than progressSteps.length (currentProgressStep like JS arrays starts from 0)"), s.progressSteps.forEach(function (t, e) {
            var n, o, i, r, a = (n = t, o = document.createElement("li"), st(o, _["progress-step"]), o.innerHTML = n, o);
            if (u.appendChild(a), e === l && st(a, _["active-progress-step"]), e !== s.progressSteps.length - 1) {
                var c = (i = t, r = document.createElement("li"), st(r, _["progress-step-line"]), i.progressStepsDistance && (r.style.width = i.progressStepsDistance), r);
                u.appendChild(c)
            }
        })
    }

    function Lt(t, e) {
        var n, o, i, r, a = T();
        V(a, e, "header"), Tt(0, e),
            function (t, e) {
                var n = wt.innerParams.get(t);
                if (n && e.icon === n.icon && w()) V(w(), e, "icon");
                else if (Ht(), e.icon)
                    if (-1 !== Object.keys(F).indexOf(e.icon)) {
                        var o = y(".".concat(_.icon, ".").concat(F[e.icon]));
                        X(o), jt(o, e), It(), V(o, e, "icon"), st(o, e.showClass.icon)
                    } else g('Unknown icon! Expected "success", "error", "warning", "info" or "question", got "'.concat(e.icon, '"'))
            }(t, e),
            function (t) {
                var e = x();
                if (!t.imageUrl) return G(e);
                X(e), e.setAttribute("src", t.imageUrl), e.setAttribute("alt", t.imageAlt), J(e, "width", t.imageWidth), J(e, "height", t.imageHeight), e.className = _.image, V(e, t, "image")
            }(e), n = e, o = C(), tt(o, n.title || n.titleText), n.title && rt(n.title, o), n.titleText && (o.innerText = n.titleText), V(o, n, "title"), i = e, (r = M()).innerHTML = i.closeButtonHtml, V(r, i, "closeButton"), tt(r, i.showCloseButton), r.setAttribute("aria-label", i.closeButtonAriaLabel)
    }

    function Ot(t, e) {
        var n, o, i, r;
        n = e, o = W(), J(o, "width", n.width), J(o, "padding", n.padding), n.background && (o.style.background = n.background), Rt(o, n), bt(0, e), Lt(t, e), Et(t, e), at(0, e), i = e, r = L(), tt(r, i.footer), i.footer && rt(i.footer, r), V(r, i, "footer"), "function" == typeof e.onRender && e.onRender(W())
    }

    function Mt() {
        return B() && B().click()
    }
    var Ht = function () {
            for (var t = n(), e = 0; e < t.length; e++) G(t[e])
        },
        It = function () {
            for (var t = W(), e = window.getComputedStyle(t).getPropertyValue("background-color"), n = t.querySelectorAll("[class^=swal2-success-circular-line], .swal2-success-fix"), o = 0; o < n.length; o++) n[o].style.backgroundColor = e
        },
        jt = function (t, e) {
            if (t.innerHTML = "", e.iconHtml) t.innerHTML = Vt(e.iconHtml);
            else if ("success" === e.icon) t.innerHTML = '\n      <div class="swal2-success-circular-line-left"></div>\n      <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>\n      <div class="swal2-success-ring"></div> <div class="swal2-success-fix"></div>\n      <div class="swal2-success-circular-line-right"></div>\n    ';
            else if ("error" === e.icon) t.innerHTML = '\n      <span class="swal2-x-mark">\n        <span class="swal2-x-mark-line-left"></span>\n        <span class="swal2-x-mark-line-right"></span>\n      </span>\n    ';
            else {
                t.innerHTML = Vt({
                    question: "?",
                    warning: "!",
                    info: "i"
                } [e.icon])
            }
        },
        Vt = function (t) {
            return '<div class="'.concat(_["icon-content"], '">').concat(t, "</div>")
        },
        qt = [],
        Rt = function (t, e) {
            t.className = "".concat(_.popup, " ").concat(dt(t) ? e.showClass.popup : ""), e.toast ? (st([document.documentElement, document.body], _["toast-shown"]), st(t, _.toast)) : st(t, _.modal), V(t, e, "popup"), "string" == typeof e.customClass && st(t, e.customClass), e.icon && st(t, _["icon-".concat(e.icon)])
        };

    function Dt() {
        var t = W();
        t || Xe.fire(), t = W();
        var e = S(),
            n = B();
        X(e), X(n, "inline-block"), st([t, e], _.loading), n.disabled = !0, t.setAttribute("data-loading", !0), t.setAttribute("aria-busy", !0), t.focus()
    }

    function Nt() {
        return new Promise(function (t) {
            var e = window.scrollX,
                n = window.scrollY;
            Wt.restoreFocusTimeout = setTimeout(function () {
                Wt.previousActiveElement && Wt.previousActiveElement.focus ? (Wt.previousActiveElement.focus(), Wt.previousActiveElement = null) : document.body && document.body.focus(), t()
            }, 100), void 0 !== e && void 0 !== n && window.scrollTo(e, n)
        })
    }

    function Ut() {
        if (Wt.timeout) return function () {
            var t = O(),
                e = parseInt(window.getComputedStyle(t).width);
            t.style.removeProperty("transition"), t.style.width = "100%";
            var n = parseInt(window.getComputedStyle(t).width),
                o = parseInt(e / n * 100);
            t.style.removeProperty("transition"), t.style.width = "".concat(o, "%")
        }(), Wt.timeout.stop()
    }

    function _t() {
        if (Wt.timeout) {
            var t = Wt.timeout.start();
            return nt(t), t
        }
    }

    function Ft(t) {
        return Object.prototype.hasOwnProperty.call(Kt, t)
    }

    function zt(t) {
        return Zt[t]
    }
    var Wt = {},
        Kt = {
            title: "",
            titleText: "",
            text: "",
            html: "",
            footer: "",
            icon: void 0,
            iconHtml: void 0,
            toast: !1,
            animation: !0,
            showClass: {
                popup: "swal2-show",
                backdrop: "swal2-backdrop-show",
                icon: "swal2-icon-show"
            },
            hideClass: {
                popup: "swal2-hide",
                backdrop: "swal2-backdrop-hide",
                icon: "swal2-icon-hide"
            },
            customClass: void 0,
            target: "body",
            backdrop: !0,
            heightAuto: !0,
            allowOutsideClick: !0,
            allowEscapeKey: !0,
            allowEnterKey: !0,
            stopKeydownPropagation: !0,
            keydownListenerCapture: !1,
            showConfirmButton: !0,
            showCancelButton: !1,
            preConfirm: void 0,
            confirmButtonText: "OK",
            confirmButtonAriaLabel: "",
            confirmButtonColor: void 0,
            cancelButtonText: "Cancel",
            cancelButtonAriaLabel: "",
            cancelButtonColor: void 0,
            buttonsStyling: !0,
            reverseButtons: !1,
            focusConfirm: !0,
            focusCancel: !1,
            showCloseButton: !1,
            closeButtonHtml: "&times;",
            closeButtonAriaLabel: "Close this dialog",
            showLoaderOnConfirm: !1,
            imageUrl: void 0,
            imageWidth: void 0,
            imageHeight: void 0,
            imageAlt: "",
            timer: void 0,
            timerProgressBar: !1,
            width: void 0,
            padding: void 0,
            background: void 0,
            input: void 0,
            inputPlaceholder: "",
            inputValue: "",
            inputOptions: {},
            inputAutoTrim: !0,
            inputAttributes: {},
            inputValidator: void 0,
            validationMessage: void 0,
            grow: !1,
            position: "center",
            progressSteps: [],
            currentProgressStep: void 0,
            progressStepsDistance: void 0,
            onBeforeOpen: void 0,
            onOpen: void 0,
            onRender: void 0,
            onClose: void 0,
            onAfterClose: void 0,
            onDestroy: void 0,
            scrollbarPadding: !0
        },
        Yt = ["title", "titleText", "text", "html", "icon", "customClass", "allowOutsideClick", "allowEscapeKey", "showConfirmButton", "showCancelButton", "confirmButtonText", "confirmButtonAriaLabel", "confirmButtonColor", "cancelButtonText", "cancelButtonAriaLabel", "cancelButtonColor", "buttonsStyling", "reverseButtons", "imageUrl", "imageWidth", "imageHeight", "imageAlt", "progressSteps", "currentProgressStep"],
        Zt = {
            animation: 'showClass" and "hideClass'
        },
        Qt = ["allowOutsideClick", "allowEnterKey", "backdrop", "focusConfirm", "focusCancel", "heightAuto", "keydownListenerCapture"],
        $t = Object.freeze({
            isValidParameter: Ft,
            isUpdatableParameter: function (t) {
                return -1 !== Yt.indexOf(t)
            },
            isDeprecatedParameter: zt,
            argsToParams: function (o) {
                var i = {};
                return "object" !== r(o[0]) || b(o[0]) ? ["title", "html", "icon"].forEach(function (t, e) {
                    var n = o[e];
                    "string" == typeof n || b(n) ? i[t] = n : void 0 !== n && g("Unexpected type of ".concat(t, '! Expected "string" or "Element", got ').concat(r(n)))
                }) : c(i, o[0]), i
            },
            isVisible: function () {
                return dt(W())
            },
            clickConfirm: Mt,
            clickCancel: function () {
                return E() && E().click()
            },
            getContainer: z,
            getPopup: W,
            getTitle: C,
            getContent: k,
            getHtmlContainer: function () {
                return e(_["html-container"])
            },
            getImage: x,
            getIcon: w,
            getIcons: n,
            getCloseButton: M,
            getActions: S,
            getConfirmButton: B,
            getCancelButton: E,
            getHeader: T,
            getFooter: L,
            getFocusableElements: H,
            getValidationMessage: A,
            isLoading: function () {
                return W().hasAttribute("data-loading")
            },
            fire: function () {
                for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++) e[n] = arguments[n];
                return l(this, e)
            },
            mixin: function (n) {
                return function (t) {
                    function e() {
                        return o(this, e), d(this, s(e).apply(this, arguments))
                    }
                    return function (t, e) {
                        if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                        t.prototype = Object.create(e && e.prototype, {
                            constructor: {
                                value: t,
                                writable: !0,
                                configurable: !0
                            }
                        }), e && u(t, e)
                    }(e, t), a(e, [{
                        key: "_main",
                        value: function (t) {
                            return p(s(e.prototype), "_main", this).call(this, c({}, n, t))
                        }
                    }]), e
                }(this)
            },
            queue: function (t) {
                var r = this;
                qt = t;

                function a(t, e) {
                    qt = [], t(e)
                }
                var c = [];
                return new Promise(function (i) {
                    ! function e(n, o) {
                        n < qt.length ? (document.body.setAttribute("data-swal2-queue-step", n), r.fire(qt[n]).then(function (t) {
                            void 0 !== t.value ? (c.push(t.value), e(n + 1, o)) : a(i, {
                                dismiss: t.dismiss
                            })
                        })) : a(i, {
                            value: c
                        })
                    }(0)
                })
            },
            getQueueStep: St,
            insertQueueStep: function (t, e) {
                return e && e < qt.length ? qt.splice(e, 0, t) : qt.push(t)
            },
            deleteQueueStep: function (t) {
                void 0 !== qt[t] && qt.splice(t, 1)
            },
            showLoading: Dt,
            enableLoading: Dt,
            getTimerLeft: function () {
                return Wt.timeout && Wt.timeout.getTimerLeft()
            },
            stopTimer: Ut,
            resumeTimer: _t,
            toggleTimer: function () {
                var t = Wt.timeout;
                return t && (t.running ? Ut : _t)()
            },
            increaseTimer: function (t) {
                if (Wt.timeout) {
                    var e = Wt.timeout.increase(t);
                    return nt(e, !0), e
                }
            },
            isTimerRunning: function () {
                return Wt.timeout && Wt.timeout.isRunning()
            }
        });

    function Jt() {
        var t = wt.innerParams.get(this);
        if (t) {
            var e = wt.domCache.get(this);
            t.showConfirmButton || (G(e.confirmButton), t.showCancelButton || G(e.actions)), ut([e.popup, e.actions], _.loading), e.popup.removeAttribute("aria-busy"), e.popup.removeAttribute("data-loading"), e.confirmButton.disabled = !1, e.cancelButton.disabled = !1
        }
    }

    function Xt() {
        null === Y.previousBodyPadding && document.body.scrollHeight > window.innerHeight && (Y.previousBodyPadding = parseInt(window.getComputedStyle(document.body).getPropertyValue("padding-right")), document.body.style.paddingRight = "".concat(Y.previousBodyPadding + function () {
            var t = document.createElement("div");
            t.className = _["scrollbar-measure"], document.body.appendChild(t);
            var e = t.getBoundingClientRect().width - t.clientWidth;
            return document.body.removeChild(t), e
        }(), "px"))
    }

    function Gt() {
        return !!window.MSInputMethodContext && !!document.documentMode
    }

    function te() {
        var t = z(),
            e = W();
        t.style.removeProperty("align-items"), e.offsetTop < 0 && (t.style.alignItems = "flex-start")
    }
    var ee = function () {
            var n, o = z();
            o.ontouchstart = function (t) {
                var e;
                n = t.target === o || !((e = o).scrollHeight > e.clientHeight) && "INPUT" !== t.target.tagName
            }, o.ontouchmove = function (t) {
                n && (t.preventDefault(), t.stopPropagation())
            }
        },
        ne = {
            swalPromiseResolve: new WeakMap
        };

    function oe(t, e, n, o) {
        n ? ae(t, o) : (Nt().then(function () {
            return ae(t, o)
        }), Wt.keydownTarget.removeEventListener("keydown", Wt.keydownHandler, {
            capture: Wt.keydownListenerCapture
        }), Wt.keydownHandlerAdded = !1), e.parentNode && e.parentNode.removeChild(e), I() && (null !== Y.previousBodyPadding && (document.body.style.paddingRight = "".concat(Y.previousBodyPadding, "px"), Y.previousBodyPadding = null), function () {
            if (j(document.body, _.iosfix)) {
                var t = parseInt(document.body.style.top, 10);
                ut(document.body, _.iosfix), document.body.style.top = "", document.body.scrollTop = -1 * t
            }
        }(), "undefined" != typeof window && Gt() && window.removeEventListener("resize", te), m(document.body.children).forEach(function (t) {
            t.hasAttribute("data-previous-aria-hidden") ? (t.setAttribute("aria-hidden", t.getAttribute("data-previous-aria-hidden")), t.removeAttribute("data-previous-aria-hidden")) : t.removeAttribute("aria-hidden")
        })), ut([document.documentElement, document.body], [_.shown, _["height-auto"], _["no-backdrop"], _["toast-shown"], _["toast-column"]])
    }

    function ie(t) {
        var e = W();
        if (e) {
            var n = wt.innerParams.get(this);
            if (n && !j(e, n.hideClass.popup)) {
                var o = ne.swalPromiseResolve.get(this);
                ut(e, n.showClass.popup), st(e, n.hideClass.popup);
                var i = z();
                ut(i, n.showClass.backdrop), st(i, n.hideClass.backdrop),
                    function (t, e, n) {
                        var o = z(),
                            i = gt && et(e),
                            r = n.onClose,
                            a = n.onAfterClose;
                        if (r !== null && typeof r === "function") {
                            r(e)
                        }
                        if (i) {
                            re(t, e, o, a)
                        } else {
                            oe(t, o, K(), a)
                        }
                    }(this, e, n), o(t || {})
            }
        }
    }
    var re = function (t, e, n, o) {
            Wt.swalCloseEventFinishedCallback = oe.bind(null, t, n, K(), o), e.addEventListener(gt, function (t) {
                t.target === e && (Wt.swalCloseEventFinishedCallback(), delete Wt.swalCloseEventFinishedCallback)
            })
        },
        ae = function (t, e) {
            setTimeout(function () {
                "function" == typeof e && e(), t._destroy()
            })
        };

    function ce(t, e, n) {
        var o = wt.domCache.get(t);
        e.forEach(function (t) {
            o[t].disabled = n
        })
    }

    function se(t, e) {
        if (!t) return !1;
        if ("radio" === t.type)
            for (var n = t.parentNode.parentNode.querySelectorAll("input"), o = 0; o < n.length; o++) n[o].disabled = e;
        else t.disabled = e
    }
    var ue = function () {
            function n(t, e) {
                o(this, n), this.callback = t, this.remaining = e, this.running = !1, this.start()
            }
            return a(n, [{
                key: "start",
                value: function () {
                    return this.running || (this.running = !0, this.started = new Date, this.id = setTimeout(this.callback, this.remaining)), this.remaining
                }
            }, {
                key: "stop",
                value: function () {
                    return this.running && (this.running = !1, clearTimeout(this.id), this.remaining -= new Date - this.started), this.remaining
                }
            }, {
                key: "increase",
                value: function (t) {
                    var e = this.running;
                    return e && this.stop(), this.remaining += t, e && this.start(), this.remaining
                }
            }, {
                key: "getTimerLeft",
                value: function () {
                    return this.running && (this.stop(), this.start()), this.remaining
                }
            }, {
                key: "isRunning",
                value: function () {
                    return this.running
                }
            }]), n
        }(),
        le = {
            email: function (t, e) {
                return /^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9-]{2,24}$/.test(t) ? Promise.resolve() : Promise.resolve(e || "Invalid email address")
            },
            url: function (t, e) {
                return /^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._+~#=]{2,256}\.[a-z]{2,63}\b([-a-zA-Z0-9@:%_+.~#?&/=]*)$/.test(t) ? Promise.resolve() : Promise.resolve(e || "Invalid URL")
            }
        };

    function de(t) {
        var e, n;
        (e = t).inputValidator || Object.keys(le).forEach(function (t) {
            e.input === t && (e.inputValidator = le[t])
        }), t.showLoaderOnConfirm && !t.preConfirm && R("showLoaderOnConfirm is set to true, but preConfirm is not defined.\nshowLoaderOnConfirm should be used together with preConfirm, see usage example:\nhttps://sweetalert2.github.io/#ajax-request"), t.animation = N(t.animation), (n = t).target && ("string" != typeof n.target || document.querySelector(n.target)) && ("string" == typeof n.target || n.target.appendChild) || (R('Target parameter is not valid, defaulting to "body"'), n.target = "body"), "string" == typeof t.title && (t.title = t.title.split("\n").join("<br />")), ft(t)
    }

    function pe(t) {
        var e = z(),
            n = W();
        "function" == typeof t.onBeforeOpen && t.onBeforeOpen(n), xe(e, n, t), Ce(e, n), I() && ke(e, t.scrollbarPadding), K() || Wt.previousActiveElement || (Wt.previousActiveElement = document.activeElement), "function" == typeof t.onOpen && setTimeout(function () {
            return t.onOpen(n)
        })
    }

    function fe(t) {
        var e = W();
        if (t.target === e) {
            var n = z();
            e.removeEventListener(gt, fe), n.style.overflowY = "auto"
        }
    }

    function me(t, e) {
        "select" === e.input || "radio" === e.input ? Ee(t, e) : -1 !== ["text", "email", "number", "tel", "textarea"].indexOf(e.input) && v(e.inputValue) && Se(t, e)
    }

    function he(t, e) {
        t.disableButtons(), e.input ? Oe(t, e) : Me(t, e, !0)
    }

    function ge(t, e) {
        t.disableButtons(), e(U.cancel)
    }

    function ve(t, e) {
        t.closePopup({
            value: e
        })
    }

    function be(e, t, n, o) {
        t.keydownTarget && t.keydownHandlerAdded && (t.keydownTarget.removeEventListener("keydown", t.keydownHandler, {
            capture: t.keydownListenerCapture
        }), t.keydownHandlerAdded = !1), n.toast || (t.keydownHandler = function (t) {
            return je(e, t, o)
        }, t.keydownTarget = n.keydownListenerCapture ? window : W(), t.keydownListenerCapture = n.keydownListenerCapture, t.keydownTarget.addEventListener("keydown", t.keydownHandler, {
            capture: t.keydownListenerCapture
        }), t.keydownHandlerAdded = !0)
    }

    function ye(t, e, n) {
        var o = H(),
            i = 0;
        if (i < o.length) return (e += n) === o.length ? e = 0 : -1 === e && (e = o.length - 1), o[e].focus();
        W().focus()
    }

    function we(t, e, n) {
        wt.innerParams.get(t).toast ? Ne(t, e, n) : (_e(e), Fe(e), ze(t, e, n))
    }
    var Ce = function (t, e) {
            gt && et(e) ? (t.style.overflowY = "hidden", e.addEventListener(gt, fe)) : t.style.overflowY = "auto"
        },
        ke = function (t, e) {
            ! function () {
                if ((/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream || "MacIntel" === navigator.platform && 1 < navigator.maxTouchPoints) && !j(document.body, _.iosfix)) {
                    var t = document.body.scrollTop;
                    document.body.style.top = "".concat(-1 * t, "px"), st(document.body, _.iosfix), ee()
                }
            }(), "undefined" != typeof window && Gt() && (te(), window.addEventListener("resize", te)), m(document.body.children).forEach(function (t) {
                t === z() || function (t, e) {
                    if ("function" == typeof t.contains) return t.contains(e)
                }(t, z()) || (t.hasAttribute("aria-hidden") && t.setAttribute("data-previous-aria-hidden", t.getAttribute("aria-hidden")), t.setAttribute("aria-hidden", "true"))
            }), e && Xt(), setTimeout(function () {
                t.scrollTop = 0
            })
        },
        xe = function (t, e, n) {
            st(t, n.showClass.backdrop), X(e), st(e, n.showClass.popup), st([document.documentElement, document.body], _.shown), n.heightAuto && n.backdrop && !n.toast && st([document.documentElement, document.body], _["height-auto"])
        },
        Pe = function (t) {
            return t.checked ? 1 : 0
        },
        Ae = function (t) {
            return t.checked ? t.value : null
        },
        Be = function (t) {
            return t.files.length ? null !== t.getAttribute("multiple") ? t.files : t.files[0] : null
        },
        Ee = function (e, n) {
            function o(t) {
                return Te[n.input](i, Le(t), n)
            }
            var i = k();
            v(n.inputOptions) ? (Dt(), n.inputOptions.then(function (t) {
                e.hideLoading(), o(t)
            })) : "object" === r(n.inputOptions) ? o(n.inputOptions) : g("Unexpected type of inputOptions! Expected object, Map or Promise, got ".concat(r(n.inputOptions)))
        },
        Se = function (e, n) {
            var o = e.getInput();
            G(o), n.inputValue.then(function (t) {
                o.value = "number" === n.input ? parseFloat(t) || 0 : "".concat(t), X(o), o.focus(), e.hideLoading()
            }).catch(function (t) {
                g("Error in inputValue promise: ".concat(t)), o.value = "", X(o), o.focus(), e.hideLoading()
            })
        },
        Te = {
            select: function (t, e, i) {
                var r = lt(t, _.select);
                e.forEach(function (t) {
                    var e = t[0],
                        n = t[1],
                        o = document.createElement("option");
                    o.value = e, o.innerHTML = n, i.inputValue.toString() === e.toString() && (o.selected = !0), r.appendChild(o)
                }), r.focus()
            },
            radio: function (t, e, a) {
                var c = lt(t, _.radio);
                e.forEach(function (t) {
                    var e = t[0],
                        n = t[1],
                        o = document.createElement("input"),
                        i = document.createElement("label");
                    o.type = "radio", o.name = _.radio, o.value = e, a.inputValue.toString() === e.toString() && (o.checked = !0);
                    var r = document.createElement("span");
                    r.innerHTML = n, r.className = _.label, i.appendChild(o), i.appendChild(r), c.appendChild(i)
                });
                var n = c.querySelectorAll("input");
                n.length && n[0].focus()
            }
        },
        Le = function (e) {
            var n = [];
            return "undefined" != typeof Map && e instanceof Map ? e.forEach(function (t, e) {
                n.push([e, t])
            }) : Object.keys(e).forEach(function (t) {
                n.push([t, e[t]])
            }), n
        },
        Oe = function (e, n) {
            var o = function (t, e) {
                var n = t.getInput();
                if (!n) return null;
                switch (e.input) {
                    case "checkbox":
                        return Pe(n);
                    case "radio":
                        return Ae(n);
                    case "file":
                        return Be(n);
                    default:
                        return e.inputAutoTrim ? n.value.trim() : n.value
                }
            }(e, n);
            n.inputValidator ? (e.disableInput(), Promise.resolve().then(function () {
                return n.inputValidator(o, n.validationMessage)
            }).then(function (t) {
                e.enableButtons(), e.enableInput(), t ? e.showValidationMessage(t) : Me(e, n, o)
            })) : e.getInput().checkValidity() ? Me(e, n, o) : (e.enableButtons(), e.showValidationMessage(n.validationMessage))
        },
        Me = function (e, t, n) {
            (t.showLoaderOnConfirm && Dt(), t.preConfirm) ? (e.resetValidationMessage(), Promise.resolve().then(function () {
                return t.preConfirm(n, t.validationMessage)
            }).then(function (t) {
                dt(A()) || !1 === t ? e.hideLoading() : ve(e, void 0 === t ? n : t)
            })) : ve(e, n)
        },
        He = ["ArrowLeft", "ArrowRight", "ArrowUp", "ArrowDown", "Left", "Right", "Up", "Down"],
        Ie = ["Escape", "Esc"],
        je = function (t, e, n) {
            var o = wt.innerParams.get(t);
            o.stopKeydownPropagation && e.stopPropagation(), "Enter" === e.key ? Ve(t, e, o) : "Tab" === e.key ? qe(e, o) : -1 !== He.indexOf(e.key) ? Re() : -1 !== Ie.indexOf(e.key) && De(e, o, n)
        },
        Ve = function (t, e, n) {
            if (!e.isComposing && e.target && t.getInput() && e.target.outerHTML === t.getInput().outerHTML) {
                if (-1 !== ["textarea", "file"].indexOf(n.input)) return;
                Mt(), e.preventDefault()
            }
        },
        qe = function (t) {
            for (var e = t.target, n = H(), o = -1, i = 0; i < n.length; i++)
                if (e === n[i]) {
                    o = i;
                    break
                } t.shiftKey ? ye(0, o, -1) : ye(0, o, 1), t.stopPropagation(), t.preventDefault()
        },
        Re = function () {
            var t = B(),
                e = E();
            document.activeElement === t && dt(e) ? e.focus() : document.activeElement === e && dt(t) && t.focus()
        },
        De = function (t, e, n) {
            N(e.allowEscapeKey) && (t.preventDefault(), n(U.esc))
        },
        Ne = function (e, t, n) {
            t.popup.onclick = function () {
                var t = wt.innerParams.get(e);
                t.showConfirmButton || t.showCancelButton || t.showCloseButton || t.input || n(U.close)
            }
        },
        Ue = !1,
        _e = function (e) {
            e.popup.onmousedown = function () {
                e.container.onmouseup = function (t) {
                    e.container.onmouseup = void 0, t.target === e.container && (Ue = !0)
                }
            }
        },
        Fe = function (e) {
            e.container.onmousedown = function () {
                e.popup.onmouseup = function (t) {
                    e.popup.onmouseup = void 0, t.target !== e.popup && !e.popup.contains(t.target) || (Ue = !0)
                }
            }
        },
        ze = function (n, o, i) {
            o.container.onclick = function (t) {
                var e = wt.innerParams.get(n);
                Ue ? Ue = !1 : t.target === o.container && N(e.allowOutsideClick) && i(U.backdrop)
            }
        };
    var We = function (t, e, n) {
            var o = O();
            G(o), e.timer && (t.timeout = new ue(function () {
                n("timer"), delete t.timeout
            }, e.timer), e.timerProgressBar && (X(o), setTimeout(function () {
                nt(e.timer)
            })))
        },
        Ke = function (t, e) {
            if (!e.toast) return N(e.allowEnterKey) ? e.focusCancel && dt(t.cancelButton) ? t.cancelButton.focus() : e.focusConfirm && dt(t.confirmButton) ? t.confirmButton.focus() : void ye(0, -1, 1) : Ye()
        },
        Ye = function () {
            document.activeElement && "function" == typeof document.activeElement.blur && document.activeElement.blur()
        };
    var Ze, Qe = function (t) {
            for (var e in t) t[e] = new WeakMap
        },
        $e = Object.freeze({
            hideLoading: Jt,
            disableLoading: Jt,
            getInput: function (t) {
                var e = wt.innerParams.get(t || this),
                    n = wt.domCache.get(t || this);
                return n ? Z(n.content, e.input) : null
            },
            close: ie,
            closePopup: ie,
            closeModal: ie,
            closeToast: ie,
            enableButtons: function () {
                ce(this, ["confirmButton", "cancelButton"], !1)
            },
            disableButtons: function () {
                ce(this, ["confirmButton", "cancelButton"], !0)
            },
            enableInput: function () {
                return se(this.getInput(), !1)
            },
            disableInput: function () {
                return se(this.getInput(), !0)
            },
            showValidationMessage: function (t) {
                var e = wt.domCache.get(this);
                e.validationMessage.innerHTML = t;
                var n = window.getComputedStyle(e.popup);
                e.validationMessage.style.marginLeft = "-".concat(n.getPropertyValue("padding-left")), e.validationMessage.style.marginRight = "-".concat(n.getPropertyValue("padding-right")), X(e.validationMessage);
                var o = this.getInput();
                o && (o.setAttribute("aria-invalid", !0), o.setAttribute("aria-describedBy", _["validation-message"]), Q(o), st(o, _.inputerror))
            },
            resetValidationMessage: function () {
                var t = wt.domCache.get(this);
                t.validationMessage && G(t.validationMessage);
                var e = this.getInput();
                e && (e.removeAttribute("aria-invalid"), e.removeAttribute("aria-describedBy"), ut(e, _.inputerror))
            },
            getProgressSteps: function () {
                return wt.domCache.get(this).progressSteps
            },
            _main: function (t) {
                ! function (t) {
                    for (var e in t) Ft(i = e) || R('Unknown parameter "'.concat(i, '"')), t.toast && (o = e, -1 !== Qt.indexOf(o) && R('The parameter "'.concat(o, '" is incompatible with toasts'))), zt(n = e) && h(n, zt(n));
                    var n, o, i
                }(t), Wt.currentInstance && Wt.currentInstance._destroy(), Wt.currentInstance = this;
                var e = function (t) {
                    var e = c({}, Kt.showClass, t.showClass),
                        n = c({}, Kt.hideClass, t.hideClass),
                        o = c({}, Kt, t);
                    if (o.showClass = e, o.hideClass = n, t.animation === false) {
                        o.showClass = {
                            popup: "",
                            backdrop: "swal2-backdrop-show swal2-noanimation"
                        };
                        o.hideClass = {}
                    }
                    return o
                }(t);
                de(e), Object.freeze(e), Wt.timeout && (Wt.timeout.stop(), delete Wt.timeout), clearTimeout(Wt.restoreFocusTimeout);
                var n = function (t) {
                    var e = {
                        popup: W(),
                        container: z(),
                        content: k(),
                        actions: S(),
                        confirmButton: B(),
                        cancelButton: E(),
                        closeButton: M(),
                        validationMessage: A(),
                        progressSteps: P()
                    };
                    return wt.domCache.set(t, e), e
                }(this);
                return Ot(this, e), wt.innerParams.set(this, e),
                    function (n, o, i) {
                        return new Promise(function (t) {
                            var e = function t(e) {
                                n.closePopup({
                                    dismiss: e
                                })
                            };
                            ne.swalPromiseResolve.set(n, t);
                            We(Wt, i, e);
                            o.confirmButton.onclick = function () {
                                return he(n, i)
                            };
                            o.cancelButton.onclick = function () {
                                return ge(n, e)
                            };
                            o.closeButton.onclick = function () {
                                return e(U.close)
                            };
                            we(n, o, e);
                            be(n, Wt, i, e);
                            if (i.toast && (i.input || i.footer || i.showCloseButton)) {
                                st(document.body, _["toast-column"])
                            } else {
                                ut(document.body, _["toast-column"])
                            }
                            me(n, i);
                            pe(i);
                            Ke(o, i);
                            o.container.scrollTop = 0
                        })
                    }(this, n, e)
            },
            update: function (e) {
                var t = W(),
                    n = wt.innerParams.get(this);
                if (!t || j(t, n.hideClass.popup)) return R("You're trying to update the closed or closing popup, that won't work. Use the update() method in preConfirm parameter or show a new popup.");
                var o = {};
                Object.keys(e).forEach(function (t) {
                    Xe.isUpdatableParameter(t) ? o[t] = e[t] : R('Invalid parameter to update: "'.concat(t, '". Updatable params are listed here: https://github.com/sweetalert2/sweetalert2/blob/master/src/utils/params.js'))
                });
                var i = c({}, n, o);
                Ot(this, i), wt.innerParams.set(this, i), Object.defineProperties(this, {
                    params: {
                        value: c({}, this.params, e),
                        writable: !1,
                        enumerable: !0
                    }
                })
            },
            _destroy: function () {
                var t = wt.domCache.get(this),
                    e = wt.innerParams.get(this);
                e && (t.popup && Wt.swalCloseEventFinishedCallback && (Wt.swalCloseEventFinishedCallback(), delete Wt.swalCloseEventFinishedCallback), Wt.deferDisposalTimer && (clearTimeout(Wt.deferDisposalTimer), delete Wt.deferDisposalTimer), "function" == typeof e.onDestroy && e.onDestroy(), delete this.params, delete Wt.keydownHandler, delete Wt.keydownTarget, Qe(wt), Qe(ne))
            }
        });

    function Je() {
        if ("undefined" != typeof window) {
            "undefined" == typeof Promise && g("This package requires a Promise library, please include a shim to enable it in this browser (See: https://github.com/sweetalert2/sweetalert2/wiki/Migration-from-SweetAlert-to-SweetAlert2#1-ie-support)"), Ze = this;
            for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++) e[n] = arguments[n];
            var o = Object.freeze(this.constructor.argsToParams(e));
            Object.defineProperties(this, {
                params: {
                    value: o,
                    writable: !1,
                    enumerable: !0,
                    configurable: !0
                }
            });
            var i = this._main(this.params);
            wt.promise.set(this, i)
        }
    }
    Je.prototype.then = function (t) {
        return wt.promise.get(this).then(t)
    }, Je.prototype.finally = function (t) {
        return wt.promise.get(this).finally(t)
    }, c(Je.prototype, $e), c(Je, $t), Object.keys($e).forEach(function (t) {
        Je[t] = function () {
            if (Ze) return Ze[t].apply(Ze, arguments)
        }
    }), Je.DismissReason = U, Je.version = "9.7.1";
    var Xe = Je;
    return Xe.default = Xe
}), void 0 !== this && this.Sweetalert2 && (this.swal = this.sweetAlert = this.Swal = this.SweetAlert = this.Sweetalert2);