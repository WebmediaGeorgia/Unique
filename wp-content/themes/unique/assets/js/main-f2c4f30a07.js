/*! For license information please see main.js.LICENSE.txt */
(() => {
  var e = {
      882: () => {
        "use strict";
        function e(e) {
          this.type = e;
        }
        (e.prototype.init = function () {
          const e = this;
          (this.оbjects = []),
            (this.daClassname = "_dynamic_adapt_"),
            (this.nodes = document.querySelectorAll("[data-da]"));
          for (let e = 0; e < this.nodes.length; e++) {
            const t = this.nodes[e],
              n = t.dataset.da.trim().split(","),
              o = {};
            (o.element = t),
              (o.parent = t.parentNode),
              (o.destination = document.querySelector(n[0].trim())),
              (o.breakpoint = n[1] ? n[1].trim() : "767"),
              (o.place = n[2] ? n[2].trim() : "last"),
              (o.index = this.indexInParent(o.parent, o.element)),
              this.оbjects.push(o);
          }
          this.arraySort(this.оbjects),
            (this.mediaQueries = Array.prototype.map.call(
              this.оbjects,
              function (e) {
                return (
                  "(" +
                  this.type +
                  "-width: " +
                  e.breakpoint +
                  "px)," +
                  e.breakpoint
                );
              },
              this
            )),
            (this.mediaQueries = Array.prototype.filter.call(
              this.mediaQueries,
              function (e, t, n) {
                return Array.prototype.indexOf.call(n, e) === t;
              }
            ));
          for (let t = 0; t < this.mediaQueries.length; t++) {
            const n = this.mediaQueries[t],
              o = String.prototype.split.call(n, ","),
              i = window.matchMedia(o[0]),
              a = o[1],
              r = Array.prototype.filter.call(this.оbjects, function (e) {
                return e.breakpoint === a;
              });
            i.addListener(function () {
              e.mediaHandler(i, r);
            }),
              this.mediaHandler(i, r);
          }
        }),
          (e.prototype.mediaHandler = function (e, t) {
            if (e.matches)
              for (let e = 0; e < t.length; e++) {
                const n = t[e];
                (n.index = this.indexInParent(n.parent, n.element)),
                  this.moveTo(n.place, n.element, n.destination);
              }
            else
              for (let e = 0; e < t.length; e++) {
                const n = t[e];
                n.element.classList.contains(this.daClassname) &&
                  this.moveBack(n.parent, n.element, n.index);
              }
          }),
          (e.prototype.moveTo = function (e, t, n) {
            t.classList.add(this.daClassname),
              "last" === e || e >= n.children.length
                ? n.insertAdjacentElement("beforeend", t)
                : "first" !== e
                ? n.children[e].insertAdjacentElement("beforebegin", t)
                : n.insertAdjacentElement("afterbegin", t);
          }),
          (e.prototype.moveBack = function (e, t, n) {
            t.classList.remove(this.daClassname),
              void 0 !== e.children[n]
                ? e.children[n].insertAdjacentElement("beforebegin", t)
                : e.insertAdjacentElement("beforeend", t);
          }),
          (e.prototype.indexInParent = function (e, t) {
            const n = Array.prototype.slice.call(e.children);
            return Array.prototype.indexOf.call(n, t);
          }),
          (e.prototype.arraySort = function (e) {
            "min" === this.type
              ? Array.prototype.sort.call(e, function (e, t) {
                  return e.breakpoint === t.breakpoint
                    ? e.place === t.place
                      ? 0
                      : "first" === e.place || "last" === t.place
                      ? -1
                      : "last" === e.place || "first" === t.place
                      ? 1
                      : e.place - t.place
                    : e.breakpoint - t.breakpoint;
                })
              : Array.prototype.sort.call(e, function (e, t) {
                  return e.breakpoint === t.breakpoint
                    ? e.place === t.place
                      ? 0
                      : "first" === e.place || "last" === t.place
                      ? 1
                      : "last" === e.place || "first" === t.place
                      ? -1
                      : t.place - e.place
                    : t.breakpoint - e.breakpoint;
                });
          }),
          new e("max").init();
      },
      367: () => {
        document.querySelectorAll(".accordion__header").forEach((e) => {
          e.addEventListener("click", () => {
            const t = document.querySelector(".accordion__header.active");
            t &&
              t !== e &&
              (t.classList.toggle("active"),
              (t.nextElementSibling.style.maxHeight = 0)),
              e.classList.toggle("active");
            const n = e.nextElementSibling;
            e.classList.contains("active")
              ? (n.style.maxHeight = n.scrollHeight + "px")
              : (n.style.maxHeight = 0);
          });
        });
      },
      533: () => {
        const e = document.querySelectorAll(".author-first"),
          t = document.querySelectorAll(".author-second"),
          n = document.querySelectorAll(".author-third"),
          o = document.querySelectorAll(".author-fourth"),
          i = document.querySelectorAll(".author-fifth"),
          a = document.querySelectorAll(".author-sixth"),
          r = document.querySelectorAll(".author-seventh");
        !(async function e(t) {
          for (let e = 0; e < t.length; e++)
            await new Promise((n) =>
              setTimeout(() => {
                t[e].forEach((e) => {
                  e.classList.toggle("change");
                }),
                  n();
              }, 700)
            );
          setTimeout(() => e(t.reverse()), 700);
        })([
          a,
          e,
          document.querySelectorAll(".author-nineth"),
          n,
          r,
          t,
          document.querySelectorAll(".author-tenth"),
          o,
          i,
        ]);
      },
      598: () => {
        function e(e) {
          var t = !0,
            n = !1,
            o = null,
            i = {
              text: !0,
              search: !0,
              url: !0,
              tel: !0,
              email: !0,
              password: !0,
              number: !0,
              date: !0,
              month: !0,
              week: !0,
              time: !0,
              datetime: !0,
              "datetime-local": !0,
            };
          function a(e) {
            return !!(
              e &&
              e !== document &&
              "HTML" !== e.nodeName &&
              "BODY" !== e.nodeName &&
              "classList" in e &&
              "contains" in e.classList
            );
          }
          function r(e) {
            e.classList.contains("focus-visible") ||
              (e.classList.add("focus-visible"),
              e.setAttribute("data-focus-visible-added", ""));
          }
          function s(e) {
            t = !1;
          }
          function l() {
            document.addEventListener("mousemove", c),
              document.addEventListener("mousedown", c),
              document.addEventListener("mouseup", c),
              document.addEventListener("pointermove", c),
              document.addEventListener("pointerdown", c),
              document.addEventListener("pointerup", c),
              document.addEventListener("touchmove", c),
              document.addEventListener("touchstart", c),
              document.addEventListener("touchend", c);
          }
          function c(e) {
            (e.target.nodeName && "html" === e.target.nodeName.toLowerCase()) ||
              ((t = !1),
              document.removeEventListener("mousemove", c),
              document.removeEventListener("mousedown", c),
              document.removeEventListener("mouseup", c),
              document.removeEventListener("pointermove", c),
              document.removeEventListener("pointerdown", c),
              document.removeEventListener("pointerup", c),
              document.removeEventListener("touchmove", c),
              document.removeEventListener("touchstart", c),
              document.removeEventListener("touchend", c));
          }
          document.addEventListener(
            "keydown",
            function (n) {
              n.metaKey ||
                n.altKey ||
                n.ctrlKey ||
                (a(e.activeElement) && r(e.activeElement), (t = !0));
            },
            !0
          ),
            document.addEventListener("mousedown", s, !0),
            document.addEventListener("pointerdown", s, !0),
            document.addEventListener("touchstart", s, !0),
            document.addEventListener(
              "visibilitychange",
              function (e) {
                "hidden" === document.visibilityState && (n && (t = !0), l());
              },
              !0
            ),
            l(),
            e.addEventListener(
              "focus",
              function (e) {
                var n, o, s;
                a(e.target) &&
                  (t ||
                    ((o = (n = e.target).type),
                    ("INPUT" === (s = n.tagName) && i[o] && !n.readOnly) ||
                      ("TEXTAREA" === s && !n.readOnly) ||
                      n.isContentEditable)) &&
                  r(e.target);
              },
              !0
            ),
            e.addEventListener(
              "blur",
              function (e) {
                var t;
                a(e.target) &&
                  (e.target.classList.contains("focus-visible") ||
                    e.target.hasAttribute("data-focus-visible-added")) &&
                  ((n = !0),
                  window.clearTimeout(o),
                  (o = window.setTimeout(function () {
                    n = !1;
                  }, 100)),
                  (t = e.target).hasAttribute("data-focus-visible-added") &&
                    (t.classList.remove("focus-visible"),
                    t.removeAttribute("data-focus-visible-added")));
              },
              !0
            ),
            e.nodeType === Node.DOCUMENT_FRAGMENT_NODE && e.host
              ? e.host.setAttribute("data-js-focus-visible", "")
              : e.nodeType === Node.DOCUMENT_NODE &&
                (document.documentElement.classList.add("js-focus-visible"),
                document.documentElement.setAttribute(
                  "data-js-focus-visible",
                  ""
                ));
        }
        if ("undefined" != typeof window && "undefined" != typeof document) {
          var t;
          window.applyFocusVisiblePolyfill = e;
          try {
            t = new CustomEvent("focus-visible-polyfill-ready");
          } catch (e) {
            (t = document.createEvent("CustomEvent")).initCustomEvent(
              "focus-visible-polyfill-ready",
              !1,
              !1,
              {}
            );
          }
          window.dispatchEvent(t);
        }
        "undefined" != typeof document && e(document);
      },
      2: function (e, t, n) {
        var o, i;
        window.Element &&
          !Element.prototype.closest &&
          (Element.prototype.closest = function (e) {
            var t,
              n = (this.document || this.ownerDocument).querySelectorAll(e),
              o = this;
            do {
              for (t = n.length; 0 <= --t && n.item(t) !== o; );
            } while (t < 0 && (o = o.parentElement));
            return o;
          }),
          (function () {
            function e(e, t) {
              t = t || { bubbles: !1, cancelable: !1, detail: void 0 };
              var n = document.createEvent("CustomEvent");
              return n.initCustomEvent(e, t.bubbles, t.cancelable, t.detail), n;
            }
            "function" != typeof window.CustomEvent &&
              ((e.prototype = window.Event.prototype),
              (window.CustomEvent = e));
          })(),
          (function () {
            for (
              var e = 0, t = ["ms", "moz", "webkit", "o"], n = 0;
              n < t.length && !window.requestAnimationFrame;
              ++n
            )
              (window.requestAnimationFrame =
                window[t[n] + "RequestAnimationFrame"]),
                (window.cancelAnimationFrame =
                  window[t[n] + "CancelAnimationFrame"] ||
                  window[t[n] + "CancelRequestAnimationFrame"]);
            window.requestAnimationFrame ||
              (window.requestAnimationFrame = function (t, n) {
                var o = new Date().getTime(),
                  i = Math.max(0, 16 - (o - e)),
                  a = window.setTimeout(function () {
                    t(o + i);
                  }, i);
                return (e = o + i), a;
              }),
              window.cancelAnimationFrame ||
                (window.cancelAnimationFrame = function (e) {
                  clearTimeout(e);
                });
          })(),
          (i =
            void 0 !== n.g
              ? n.g
              : "undefined" != typeof window
              ? window
              : this),
          (o = function () {
            return (function (e) {
              "use strict";
              var t = {
                  ignore: "[data-scroll-ignore]",
                  header: null,
                  topOnEmptyHash: !0,
                  speed: 500,
                  speedAsDuration: !1,
                  durationMax: null,
                  durationMin: null,
                  clip: !0,
                  offset: 0,
                  easing: "easeInOutCubic",
                  customEasing: null,
                  updateURL: !0,
                  popstate: !0,
                  emitEvents: !0,
                },
                n = function () {
                  var e = {};
                  return (
                    Array.prototype.forEach.call(arguments, function (t) {
                      for (var n in t) {
                        if (!t.hasOwnProperty(n)) return;
                        e[n] = t[n];
                      }
                    }),
                    e
                  );
                },
                o = function (e) {
                  "#" === e.charAt(0) && (e = e.substr(1));
                  for (
                    var t,
                      n = String(e),
                      o = n.length,
                      i = -1,
                      a = "",
                      r = n.charCodeAt(0);
                    ++i < o;

                  ) {
                    if (0 === (t = n.charCodeAt(i)))
                      throw new InvalidCharacterError(
                        "Invalid character: the input contains U+0000."
                      );
                    a +=
                      (1 <= t && t <= 31) ||
                      127 == t ||
                      (0 === i && 48 <= t && t <= 57) ||
                      (1 === i && 48 <= t && t <= 57 && 45 === r)
                        ? "\\" + t.toString(16) + " "
                        : 128 <= t ||
                          45 === t ||
                          95 === t ||
                          (48 <= t && t <= 57) ||
                          (65 <= t && t <= 90) ||
                          (97 <= t && t <= 122)
                        ? n.charAt(i)
                        : "\\" + n.charAt(i);
                  }
                  return "#" + a;
                },
                i = function () {
                  return Math.max(
                    document.body.scrollHeight,
                    document.documentElement.scrollHeight,
                    document.body.offsetHeight,
                    document.documentElement.offsetHeight,
                    document.body.clientHeight,
                    document.documentElement.clientHeight
                  );
                },
                a = function (t, n, o) {
                  0 === t && document.body.focus(),
                    o ||
                      (t.focus(),
                      document.activeElement !== t &&
                        (t.setAttribute("tabindex", "-1"),
                        t.focus(),
                        (t.style.outline = "none")),
                      e.scrollTo(0, n));
                },
                r = function (t, n, o, i) {
                  if (n.emitEvents && "function" == typeof e.CustomEvent) {
                    var a = new CustomEvent(t, {
                      bubbles: !0,
                      detail: { anchor: o, toggle: i },
                    });
                    document.dispatchEvent(a);
                  }
                };
              return function (s, l) {
                var c,
                  d,
                  u,
                  m,
                  p = {
                    cancelScroll: function (e) {
                      cancelAnimationFrame(m),
                        (m = null),
                        e || r("scrollCancel", c);
                    },
                    animateScroll: function (o, s, l) {
                      p.cancelScroll();
                      var d = n(c || t, l || {}),
                        h =
                          "[object Number]" ===
                          Object.prototype.toString.call(o),
                        f = h || !o.tagName ? null : o;
                      if (h || f) {
                        var v = e.pageYOffset;
                        d.header &&
                          !u &&
                          (u = document.querySelector(d.header));
                        var y,
                          b,
                          g,
                          E,
                          w,
                          A,
                          L,
                          S,
                          x = (function (t) {
                            return t
                              ? ((n = t),
                                parseInt(e.getComputedStyle(n).height, 10) +
                                  t.offsetTop)
                              : 0;
                            var n;
                          })(u),
                          q = h
                            ? o
                            : (function (t, n, o, a) {
                                var r = 0;
                                if (t.offsetParent)
                                  for (
                                    ;
                                    (r += t.offsetTop), (t = t.offsetParent);

                                  );
                                return (
                                  (r = Math.max(r - n - o, 0)),
                                  a && (r = Math.min(r, i() - e.innerHeight)),
                                  r
                                );
                              })(
                                f,
                                x,
                                parseInt(
                                  "function" == typeof d.offset
                                    ? d.offset(o, s)
                                    : d.offset,
                                  10
                                ),
                                d.clip
                              ),
                          O = q - v,
                          C = i(),
                          k = 0,
                          T =
                            ((y = O),
                            (g = (b = d).speedAsDuration
                              ? b.speed
                              : Math.abs((y / 1e3) * b.speed)),
                            b.durationMax && g > b.durationMax
                              ? b.durationMax
                              : b.durationMin && g < b.durationMin
                              ? b.durationMin
                              : parseInt(g, 10)),
                          M = function (t) {
                            var n, i, l;
                            E || (E = t),
                              (k += t - E),
                              (A =
                                v +
                                O *
                                  ((i = w =
                                    1 < (w = 0 === T ? 0 : k / T) ? 1 : w),
                                  "easeInQuad" === (n = d).easing &&
                                    (l = i * i),
                                  "easeOutQuad" === n.easing &&
                                    (l = i * (2 - i)),
                                  "easeInOutQuad" === n.easing &&
                                    (l =
                                      i < 0.5
                                        ? 2 * i * i
                                        : (4 - 2 * i) * i - 1),
                                  "easeInCubic" === n.easing && (l = i * i * i),
                                  "easeOutCubic" === n.easing &&
                                    (l = --i * i * i + 1),
                                  "easeInOutCubic" === n.easing &&
                                    (l =
                                      i < 0.5
                                        ? 4 * i * i * i
                                        : (i - 1) * (2 * i - 2) * (2 * i - 2) +
                                          1),
                                  "easeInQuart" === n.easing &&
                                    (l = i * i * i * i),
                                  "easeOutQuart" === n.easing &&
                                    (l = 1 - --i * i * i * i),
                                  "easeInOutQuart" === n.easing &&
                                    (l =
                                      i < 0.5
                                        ? 8 * i * i * i * i
                                        : 1 - 8 * --i * i * i * i),
                                  "easeInQuint" === n.easing &&
                                    (l = i * i * i * i * i),
                                  "easeOutQuint" === n.easing &&
                                    (l = 1 + --i * i * i * i * i),
                                  "easeInOutQuint" === n.easing &&
                                    (l =
                                      i < 0.5
                                        ? 16 * i * i * i * i * i
                                        : 1 + 16 * --i * i * i * i * i),
                                  n.customEasing && (l = n.customEasing(i)),
                                  l || i)),
                              e.scrollTo(0, Math.floor(A)),
                              (function (t, n) {
                                var i = e.pageYOffset;
                                if (
                                  t == n ||
                                  i == n ||
                                  (v < n && e.innerHeight + i) >= C
                                )
                                  return (
                                    p.cancelScroll(!0),
                                    a(o, n, h),
                                    r("scrollStop", d, o, s),
                                    !(m = E = null)
                                  );
                              })(A, q) ||
                                ((m = e.requestAnimationFrame(M)), (E = t));
                          };
                        0 === e.pageYOffset && e.scrollTo(0, 0),
                          (L = o),
                          (S = d),
                          h ||
                            (history.pushState &&
                              S.updateURL &&
                              history.pushState(
                                {
                                  smoothScroll: JSON.stringify(S),
                                  anchor: L.id,
                                },
                                document.title,
                                L === document.documentElement
                                  ? "#top"
                                  : "#" + L.id
                              )),
                          "matchMedia" in e &&
                          e.matchMedia("(prefers-reduced-motion)").matches
                            ? a(o, Math.floor(q), !1)
                            : (r("scrollStart", d, o, s),
                              p.cancelScroll(!0),
                              e.requestAnimationFrame(M));
                      }
                    },
                  },
                  h = function (t) {
                    if (
                      !t.defaultPrevented &&
                      !(
                        0 !== t.button ||
                        t.metaKey ||
                        t.ctrlKey ||
                        t.shiftKey
                      ) &&
                      "closest" in t.target &&
                      (d = t.target.closest(s)) &&
                      "a" === d.tagName.toLowerCase() &&
                      !t.target.closest(c.ignore) &&
                      d.hostname === e.location.hostname &&
                      d.pathname === e.location.pathname &&
                      /#/.test(d.href)
                    ) {
                      var n, i;
                      try {
                        n = o(decodeURIComponent(d.hash));
                      } catch (t) {
                        n = o(d.hash);
                      }
                      if ("#" === n) {
                        if (!c.topOnEmptyHash) return;
                        i = document.documentElement;
                      } else i = document.querySelector(n);
                      (i = i || "#top" !== n ? i : document.documentElement) &&
                        (t.preventDefault(),
                        (function (t) {
                          if (
                            history.replaceState &&
                            t.updateURL &&
                            !history.state
                          ) {
                            var n = e.location.hash;
                            (n = n || ""),
                              history.replaceState(
                                {
                                  smoothScroll: JSON.stringify(t),
                                  anchor: n || e.pageYOffset,
                                },
                                document.title,
                                n || e.location.href
                              );
                          }
                        })(c),
                        p.animateScroll(i, d));
                    }
                  },
                  f = function (e) {
                    if (
                      null !== history.state &&
                      history.state.smoothScroll &&
                      history.state.smoothScroll === JSON.stringify(c)
                    ) {
                      var t = history.state.anchor;
                      ("string" == typeof t &&
                        t &&
                        !(t = document.querySelector(
                          o(history.state.anchor)
                        ))) ||
                        p.animateScroll(t, null, { updateURL: !1 });
                    }
                  };
                return (
                  (p.destroy = function () {
                    c &&
                      (document.removeEventListener("click", h, !1),
                      e.removeEventListener("popstate", f, !1),
                      p.cancelScroll(),
                      (m = u = d = c = null));
                  }),
                  (function () {
                    if (
                      !(
                        "querySelector" in document &&
                        "addEventListener" in e &&
                        "requestAnimationFrame" in e &&
                        "closest" in e.Element.prototype
                      )
                    )
                      throw "Smooth Scroll: This browser does not support the required JavaScript methods and browser APIs.";
                    p.destroy(),
                      (c = n(t, l || {})),
                      (u = c.header ? document.querySelector(c.header) : null),
                      document.addEventListener("click", h, !1),
                      c.updateURL &&
                        c.popstate &&
                        e.addEventListener("popstate", f, !1);
                  })(),
                  p
                );
              };
            })(i);
          }.apply(t, [])),
          void 0 === o || (e.exports = o);
      },
    },
    t = {};
  function n(o) {
    var i = t[o];
    if (void 0 !== i) return i.exports;
    var a = (t[o] = { exports: {} });
    return e[o].call(a.exports, a, a.exports, n), a.exports;
  }
  (n.n = (e) => {
    var t = e && e.__esModule ? () => e.default : () => e;
    return n.d(t, { a: t }), t;
  }),
    (n.d = (e, t) => {
      for (var o in t)
        n.o(t, o) &&
          !n.o(e, o) &&
          Object.defineProperty(e, o, { enumerable: !0, get: t[o] });
    }),
    (n.g = (function () {
      if ("object" == typeof globalThis) return globalThis;
      try {
        return this || new Function("return this")();
      } catch (e) {
        if ("object" == typeof window) return window;
      }
    })()),
    (n.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t)),
    (() => {
      "use strict";
      n(598);
      const e = {
        windowEl: window,
        documentEl: document,
        htmlEl: document.documentElement,
        bodyEl: document.body,
      };
      var t = n(2);
      new (n.n(t)())('a[href*="#"]', {
        speed: 100,
        speedAsDuration: !0,
        easing: "linear",
        header: "[data-scroll-header]",
      });
      const o = () => {
        var t;
        const n =
            null === (t = document) || void 0 === t
              ? void 0
              : t.querySelectorAll(".fixed-block"),
          o = (document.body, parseInt(e.bodyEl.dataset.position, 10));
        n.forEach((e) => {
          e.style.paddingRight = "0px";
        }),
          (e.bodyEl.style.paddingRight = "0px"),
          (e.bodyEl.style.top = "auto"),
          e.bodyEl.classList.remove("dis-scroll"),
          window.scroll({ top: o, left: 0 }),
          e.bodyEl.removeAttribute("data-position"),
          (e.htmlEl.style.scrollBehavior = "smooth");
      };
      !(function () {
        var t, n, i, a;
        const r =
            null === (t = document) || void 0 === t
              ? void 0
              : t.querySelector("[data-burger]"),
          s = document.querySelector(".nav"),
          l =
            null === (n = document) || void 0 === n
              ? void 0
              : n.querySelector("[data-menu]"),
          c =
            null === (i = document) || void 0 === i
              ? void 0
              : i.querySelectorAll(".nav__link"),
          d =
            null === (a = document) || void 0 === a
              ? void 0
              : a.querySelector("[data-menu-overlay]"),
          u = document.querySelector(".header");
        null == r ||
          r.addEventListener("click", (t) => {
            null == r || r.classList.toggle("burger--active"),
              null == l || l.classList.toggle("menu--active"),
              null == u || u.classList.toggle("hide-backdrop-filter"),
              null != l && l.classList.contains("menu--active")
                ? (s.classList.add("mob-menu--show"),
                  null == r || r.setAttribute("aria-expanded", "true"),
                  null == r || r.setAttribute("aria-label", "Закрыть меню"),
                  (() => {
                    var t;
                    const n =
                        null === (t = document) || void 0 === t
                          ? void 0
                          : t.querySelectorAll(".fixed-block"),
                      o = window.scrollY,
                      i = window.innerWidth - e.bodyEl.offsetWidth + "px";
                    (e.htmlEl.style.scrollBehavior = "none"),
                      n.forEach((e) => {
                        e.style.paddingRight = i;
                      }),
                      (e.bodyEl.style.paddingRight = i),
                      e.bodyEl.classList.add("dis-scroll"),
                      (e.bodyEl.dataset.position = o),
                      (e.bodyEl.style.top = `-${o}px`);
                  })())
                : (s.classList.remove("mob-menu--show"),
                  null == r || r.setAttribute("aria-expanded", "false"),
                  null == r || r.setAttribute("aria-label", "Открыть меню"),
                  o());
          }),
          null == d ||
            d.addEventListener("click", () => {
              null == r || r.setAttribute("aria-expanded", "false"),
                null == r || r.setAttribute("aria-label", "Открыть меню"),
                r.classList.remove("burger--active"),
                l.classList.remove("menu--active"),
                o();
            }),
          null == c ||
            c.forEach((e) => {
              e.addEventListener("click", () => {
                null == r || r.setAttribute("aria-expanded", "false"),
                  null == r || r.setAttribute("aria-label", "Открыть меню"),
                  r.classList.remove("burger--active"),
                  l.classList.remove("menu--active"),
                  s.classList.remove("mob-menu--show"),
                  null == u || u.classList.remove("hide-backdrop-filter"),
                  o();
              });
            });
      })(),
        n(533),
        n(367),
        n(882);
    })();
})();
