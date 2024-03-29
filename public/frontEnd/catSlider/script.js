(function(i, g, c, h, e, k, f) { /*! Jssor */
  new(function() {});
  var d = i.$Jease$ = {
    $Swing: function(a) {
      return -c.cos(a * c.PI) / 2 + .5
    },
    $Linear: function(a) {
      return a
    },
    $InQuad: function(a) {
      return a * a
    },
    $OutQuad: function(a) {
      return -a * (a - 2)
    },
    $InOutQuad: function(a) {
      return (a *= 2) < 1 ? 1 / 2 * a * a : -1 / 2 * (--a * (a - 2) - 1)
    },
    $InCubic: function(a) {
      return a * a * a
    },
    $OutCubic: function(a) {
      return (a -= 1) * a * a + 1
    },
    $InOutCubic: function(a) {
      return (a *= 2) < 1 ? 1 / 2 * a * a * a : 1 / 2 * ((a -= 2) * a * a + 2)
    },
    $InQuart: function(a) {
      return a * a * a * a
    },
    $OutQuart: function(a) {
      return -((a -= 1) * a * a * a - 1)
    },
    $InOutQuart: function(a) {
      return (a *= 2) < 1 ? 1 / 2 * a * a * a * a : -1 / 2 * ((a -= 2) * a * a * a - 2)
    },
    $InQuint: function(a) {
      return a * a * a * a * a
    },
    $OutQuint: function(a) {
      return (a -= 1) * a * a * a * a + 1
    },
    $InOutQuint: function(a) {
      return (a *= 2) < 1 ? 1 / 2 * a * a * a * a * a : 1 / 2 * ((a -= 2) * a * a * a * a + 2)
    },
    $InSine: function(a) {
      return 1 - c.cos(c.PI / 2 * a)
    },
    $OutSine: function(a) {
      return c.sin(c.PI / 2 * a)
    },
    $InOutSine: function(a) {
      return -1 / 2 * (c.cos(c.PI * a) - 1)
    },
    $InExpo: function(a) {
      return a == 0 ? 0 : c.pow(2, 10 * (a - 1))
    },
    $OutExpo: function(a) {
      return a == 1 ? 1 : -c.pow(2, -10 * a) + 1
    },
    $InOutExpo: function(a) {
      return a == 0 || a == 1 ? a : (a *= 2) < 1 ? 1 / 2 * c.pow(2, 10 * (a - 1)) : 1 / 2 * (-c.pow(2, -10 * --a) + 2)
    },
    $InCirc: function(a) {
      return -(c.sqrt(1 - a * a) - 1)
    },
    $OutCirc: function(a) {
      return c.sqrt(1 - (a -= 1) * a)
    },
    $InOutCirc: function(a) {
      return (a *= 2) < 1 ? -1 / 2 * (c.sqrt(1 - a * a) - 1) : 1 / 2 * (c.sqrt(1 - (a -= 2) * a) + 1)
    },
    $InElastic: function(a) {
      if (!a || a == 1) return a;
      var b = .3,
        d = .075;
      return -(c.pow(2, 10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b))
    },
    $OutElastic: function(a) {
      if (!a || a == 1) return a;
      var b = .3,
        d = .075;
      return c.pow(2, -10 * a) * c.sin((a - d) * 2 * c.PI / b) + 1
    },
    $InOutElastic: function(a) {
      if (!a || a == 1) return a;
      var b = .45,
        d = .1125;
      return (a *= 2) < 1 ? -.5 * c.pow(2, 10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b) : c.pow(2, -10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b) * .5 + 1
    },
    $InBack: function(a) {
      var b = 1.70158;
      return a * a * ((b + 1) * a - b)
    },
    $OutBack: function(a) {
      var b = 1.70158;
      return (a -= 1) * a * ((b + 1) * a + b) + 1
    },
    $InOutBack: function(a) {
      var b = 1.70158;
      return (a *= 2) < 1 ? 1 / 2 * a * a * (((b *= 1.525) + 1) * a - b) : 1 / 2 * ((a -= 2) * a * (((b *= 1.525) + 1) * a + b) + 2)
    },
    $InBounce: function(a) {
      return 1 - d.$OutBounce(1 - a)
    },
    $OutBounce: function(a) {
      return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + .75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + .9375 : 7.5625 * (a -= 2.625 / 2.75) * a + .984375
    },
    $InOutBounce: function(a) {
      return a < 1 / 2 ? d.$InBounce(a * 2) * .5 : d.$OutBounce(a * 2 - 1) * .5 + .5
    },
    $GoBack: function(a) {
      return 1 - c.abs(2 - 1)
    },
    $InWave: function(a) {
      return 1 - c.cos(a * c.PI * 2)
    },
    $OutWave: function(a) {
      return c.sin(a * c.PI * 2)
    },
    $OutJump: function(a) {
      return 1 - ((a *= 2) < 1 ? (a = 1 - a) * a * a : (a -= 1) * a * a)
    },
    $InJump: function(a) {
      return (a *= 2) < 1 ? a * a * a : (a = 2 - a) * a * a
    },
    $Early: c.ceil,
    $Late: c.floor
  };
  i.$JssorEasing$ = {
    $EaseSwing: d.$Swing,
    $EaseLinear: d.$Linear,
    $EaseInQuad: d.$InQuad,
    $EaseOutQuad: d.$OutQuad,
    $EaseInOutQuad: d.$InOutQuad,
    $EaseInCubic: d.$InCubic,
    $EaseOutCubic: d.$OutCubic,
    $EaseInOutCubic: d.$InOutCubic,
    $EaseInQuart: d.$InQuart,
    $EaseOutQuart: d.$OutQuart,
    $EaseInOutQuart: d.$InOutQuart,
    $EaseInQuint: d.$InQuint,
    $EaseOutQuint: d.$OutQuint,
    $EaseInOutQuint: d.$InOutQuint,
    $EaseInSine: d.$InSine,
    $EaseOutSine: d.$OutSine,
    $EaseInOutSine: d.$InOutSine,
    $EaseInExpo: d.$InExpo,
    $EaseOutExpo: d.$OutExpo,
    $EaseInOutExpo: d.$InOutExpo,
    $EaseInCirc: d.$InCirc,
    $EaseOutCirc: d.$OutCirc,
    $EaseInOutCirc: d.$InOutCirc,
    $EaseInElastic: d.$InElastic,
    $EaseOutElastic: d.$OutElastic,
    $EaseInOutElastic: d.$InOutElastic,
    $EaseInBack: d.$InBack,
    $EaseOutBack: d.$OutBack,
    $EaseInOutBack: d.$InOutBack,
    $EaseInBounce: d.$InBounce,
    $EaseOutBounce: d.$OutBounce,
    $EaseInOutBounce: d.$InOutBounce,
    $EaseGoBack: d.$GoBack,
    $EaseInWave: d.$InWave,
    $EaseOutWave: d.$OutWave,
    $EaseOutJump: d.$OutJump,
    $EaseInJump: d.$InJump
  };
  var b = i.$Jssor$ = new function() {
    var j = this,
      yb = /\S+/g,
      K = 1,
      ib = 2,
      lb = 3,
      kb = 4,
      ob = 5,
      L, s = 0,
      l = 0,
      t = 0,
      A = 0,
      B = 0,
      E = navigator,
      tb = E.appName,
      o = E.userAgent,
      z = g.documentElement,
      q = parseFloat;

    function Gb() {
      if (!L) {
        L = {
          Qe: "ontouchstart" in i || "createTouch" in g
        };
        var a;
        if (E.pointerEnabled || (a = E.msPointerEnabled)) L.re = a ? "msTouchAction" : "touchAction"
      }
      return L
    }

    function v(h) {
      if (!s) {
        s = -1;
        if (tb == "Microsoft Internet Explorer" && !!i.attachEvent && !!i.ActiveXObject) {
          var e = o.indexOf("MSIE");
          s = K;
          t = q(o.substring(e + 5, o.indexOf(";", e))); /*@cc_on A=@_jscript_version@*/ ;
          l = g.documentMode || t
        } else if (tb == "Netscape" && !!i.addEventListener) {
          var d = o.indexOf("Firefox"),
            b = o.indexOf("Safari"),
            f = o.indexOf("Chrome"),
            c = o.indexOf("AppleWebKit");
          if (d >= 0) {
            s = ib;
            l = q(o.substring(d + 8))
          } else if (b >= 0) {
            var j = o.substring(0, b).lastIndexOf("/");
            s = f >= 0 ? kb : lb;
            l = q(o.substring(j + 1, b))
          } else {
            var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);
            if (a) {
              s = K;
              l = t = q(a[1])
            }
          }
          if (c >= 0) B = q(o.substring(c + 12))
        } else {
          var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);
          if (a) {
            s = ob;
            l = q(a[2])
          }
        }
      }
      return h == s
    }

    function r() {
      return v(K)
    }

    function hb() {
      return r() && (l < 6 || g.compatMode == "BackCompat")
    }

    function zb() {
      return v(ib)
    }

    function jb() {
      return v(lb)
    }

    function Cb() {
      return v(kb)
    }

    function nb() {
      return v(ob)
    }

    function db() {
      return jb() && B > 534 && B < 535
    }

    function H() {
      v();
      return B > 537 || l > 42 || s == K && l >= 11
    }

    function fb() {
      return r() && l < 9
    }

    function eb(a) {
      var b, c;
      return function(g) {
        if (!b) {
          b = e;
          var d = a.substr(0, 1).toUpperCase() + a.substr(1);
          n([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function(h, e) {
            var b = a;
            if (e) b = h + d;
            if (g.style[b] != f) return c = b
          })
        }
        return c
      }
    }

    function cb(b) {
      var a;
      return function(c) {
        a = a || eb(b)(c) || b;
        return a
      }
    }
    var M = cb("transform");

    function sb(a) {
      return {}.toString.call(a)
    }
    var pb = {};
    n(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(a) {
      pb["[object " + a + "]"] = a.toLowerCase()
    });

    function n(b, d) {
      var a, c;
      if (sb(b) == "[object Array]") {
        for (a = 0; a < b.length; a++)
          if (c = d(b[a], a, b)) return c
      } else
        for (a in b)
          if (c = d(b[a], a, b)) return c
    }

    function G(a) {
      return a == h ? String(a) : pb[sb(a)] || "object"
    }

    function qb(a) {
      for (var b in a) return e
    }

    function C(a) {
      try {
        return G(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
      } catch (b) {}
    }

    function p(a, b) {
      return {
        x: a,
        y: b
      }
    }

    function wb(b, a) {
      setTimeout(b, a || 0)
    }

    function D(b, d, c) {
      var a = !b || b == "inherit" ? "" : b;
      n(d, function(c) {
        var b = c.exec(a);
        if (b) {
          var d = a.substr(0, b.index),
            e = a.substr(b.index + b[0].length + 1, a.length - 1);
          a = d + e
        }
      });
      a = c + (!a.indexOf(" ") ? "" : " ") + a;
      return a
    }

    function R(b, a) {
      if (l < 9) b.style.filter = a
    }
    j.$Device = Gb;
    j.$IsBrowserIE = r;
    j.$IsBrowserIeQuirks = hb;
    j.$IsBrowserFireFox = zb;
    j.$IsBrowserSafari = jb;
    j.$IsBrowserChrome = Cb;
    j.$IsBrowserOpera = nb;
    j.eg = H;
    j.Qb = fb;
    eb("transform");
    j.$BrowserVersion = function() {
      return l
    };
    j.$BrowserEngineVersion = function() {
      return t || l
    };
    j.$WebKitVersion = function() {
      v();
      return B
    };
    j.$Delay = wb;

    function Y(a) {
      a.constructor === Y.caller && a.pe && a.pe.apply(a, Y.caller.arguments)
    }
    j.pe = Y;
    j.$GetElement = function(a) {
      if (j.cg(a)) a = g.getElementById(a);
      return a
    };

    function u(a) {
      return a || i.event
    }
    j.ce = u;
    j.$EvtSrc = function(b) {
      b = u(b);
      var a = b.target || b.srcElement || g;
      if (a.nodeType == 3) a = j.de(a);
      return a
    };
    j.be = function(a) {
      a = u(a);
      return {
        x: a.pageX || a.clientX || 0,
        y: a.pageY || a.clientY || 0
      }
    };
    j.$WindowSize = function() {
      var a = g.body;
      return {
        x: a.clientWidth || z.clientWidth,
        y: a.clientHeight || z.clientHeight
      }
    };

    function w(c, d, a) {
      if (a !== f) c.style[d] = a == f ? "" : a;
      else {
        var b = c.currentStyle || c.style;
        a = b[d];
        if (a == "" && i.getComputedStyle) {
          b = c.ownerDocument.defaultView.getComputedStyle(c, h);
          b && (a = b.getPropertyValue(d) || b[d])
        }
        return a
      }
    }

    function ab(b, c, a, d) {
      if (a !== f) {
        if (a == h) a = "";
        else d && (a += "px");
        w(b, c, a)
      } else return q(w(b, c))
    }

    function m(c, a) {
      var d = a ? ab : w,
        b;
      if (a & 4) b = cb(c);
      return function(e, f) {
        return d(e, b ? b(e) : c, f, a & 2)
      }
    }

    function Bb(b) {
      if (r() && t < 9) {
        var a = /opacity=([^)]*)/.exec(b.style.filter || "");
        return a ? q(a[1]) / 100 : 1
      } else return q(b.style.opacity || "1")
    }

    function Db(b, a, f) {
      if (r() && t < 9) {
        var h = b.style.filter || "",
          i = new RegExp(/[\s]*alpha\([^\)]*\)/g),
          e = c.round(100 * a),
          d = "";
        if (e < 100 || f) d = "alpha(opacity=" + e + ") ";
        var g = D(h, [i], d);
        R(b, g)
      } else b.style.opacity = a == 1 ? "" : c.round(a * 100) / 100
    }
    var N = {
      $Rotate: ["rotate"],
      $RotateX: ["rotateX"],
      $RotateY: ["rotateY"],
      $SkewX: ["skewX"],
      $SkewY: ["skewY"]
    };
    if (!H()) N = F(N, {
      $ScaleX: ["scaleX", 2],
      $ScaleY: ["scaleY", 2],
      $TranslateZ: ["translateZ", 1]
    });

    function O(d, a) {
      var c = "";
      if (a) {
        if (r() && l && l < 10) {
          delete a.$RotateX;
          delete a.$RotateY;
          delete a.$TranslateZ
        }
        b.$Each(a, function(d, b) {
          var a = N[b];
          if (a) {
            var e = a[1] || 0;
            if (P[b] != d) c += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")"
          }
        });
        if (H()) {
          if (a.$TranslateX || a.$TranslateY || a.$TranslateZ != f) c += " translate3d(" + (a.$TranslateX || 0) + "px," + (a.$TranslateY || 0) + "px," + (a.$TranslateZ || 0) + "px)";
          if (a.$ScaleX == f) a.$ScaleX = 1;
          if (a.$ScaleY == f) a.$ScaleY = 1;
          if (a.$ScaleX != 1 || a.$ScaleY != 1) c += " scale3d(" + a.$ScaleX + ", " + a.$ScaleY + ", 1)"
        }
      }
      d.style[M(d)] = c
    }
    j.ae = m("transformOrigin", 4);
    j.ig = m("backfaceVisibility", 4);
    j.zf = m("transformStyle", 4);
    j.Df = m("perspective", 6);
    j.Cf = m("perspectiveOrigin", 4);
    j.rf = function(a, b) {
      if (r() && t < 9 || t < 10 && hb()) a.style.zoom = b == 1 ? "" : b;
      else {
        var c = M(a),
          f = "scale(" + b + ")",
          e = a.style[c],
          g = new RegExp(/[\s]*scale\(.*?\)/g),
          d = D(e, [g], f);
        a.style[c] = d
      }
    };
    j.Zb = function(b, a) {
      return function(c) {
        c = u(c);
        var e = c.type,
          d = c.relatedTarget || (e == "mouseout" ? c.toElement : c.fromElement);
        (!d || d !== a && !j.uf(a, d)) && b(c)
      }
    };
    j.$AddEvent = function(a, c, d, b) {
      a = j.$GetElement(a);
      if (a.addEventListener) {
        c == "mousewheel" && a.addEventListener("DOMMouseScroll", d, b);
        a.addEventListener(c, d, b)
      } else if (a.attachEvent) {
        a.attachEvent("on" + c, d);
        b && a.setCapture && a.setCapture()
      }
    };
    j.Q = function(a, c, d, b) {
      a = j.$GetElement(a);
      if (a.removeEventListener) {
        c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
        a.removeEventListener(c, d, b)
      } else if (a.detachEvent) {
        a.detachEvent("on" + c, d);
        b && a.releaseCapture && a.releaseCapture()
      }
    };
    j.$FireEvent = function(c, b) {
      var a;
      if (g.createEvent) {
        a = g.createEvent("HTMLEvents");
        a.initEvent(b, k, k);
        c.dispatchEvent(a)
      } else {
        var d = "on" + b;
        a = g.createEventObject();
        c.fireEvent(d, a)
      }
    };
    j.$CancelEvent = function(a) {
      a = u(a);
      a.preventDefault && a.preventDefault();
      a.cancel = e;
      a.returnValue = k
    };
    j.$StopEvent = function(a) {
      a = u(a);
      a.stopPropagation && a.stopPropagation();
      a.cancelBubble = e
    };
    j.$CreateCallback = function(d, c) {
      var a = [].slice.call(arguments, 2),
        b = function() {
          var b = a.concat([].slice.call(arguments, 0));
          return c.apply(d, b)
        };
      return b
    };
    j.$InnerText = function(a, b) {
      if (b == f) return a.textContent || a.innerText;
      var c = g.createTextNode(b);
      j.tc(a);
      a.appendChild(c)
    };
    j.$InnerHtml = function(a, b) {
      if (b == f) return a.innerHTML;
      a.innerHTML = b
    };
    j.$ClearInnerHtml = function(a) {
      a.innerHTML = ""
    };
    j.$Children = function(d, c) {
      for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a);
      return b
    };

    function rb(a, c, e, b) {
      b = b || "u";
      for (a = a ? a.firstChild : h; a; a = a.nextSibling)
        if (a.nodeType == 1) {
          if (V(a, b) == c) return a;
          if (!e) {
            var d = rb(a, c, e, b);
            if (d) return d
          }
        }
    }
    j.$FindChild = rb;

    function T(a, d, f, b) {
      b = b || "u";
      var c = [];
      for (a = a ? a.firstChild : h; a; a = a.nextSibling)
        if (a.nodeType == 1) {
          V(a, b) == d && c.push(a);
          if (!f) {
            var e = T(a, d, f, b);
            if (e.length) c = c.concat(e)
          }
        }
      return c
    }

    function mb(a, c, d) {
      for (a = a ? a.firstChild : h; a; a = a.nextSibling)
        if (a.nodeType == 1) {
          if (a.tagName == c) return a;
          if (!d) {
            var b = mb(a, c, d);
            if (b) return b
          }
        }
    }
    j.Kf = mb;

    function gb(a, c, e) {
      var b = [];
      for (a = a ? a.firstChild : h; a; a = a.nextSibling)
        if (a.nodeType == 1) {
          (!c || a.tagName == c) && b.push(a);
          if (!e) {
            var d = gb(a, c, e);
            if (d.length) b = b.concat(d)
          }
        }
      return b
    }
    j.Hf = gb;
    j.Ef = function(b, a) {
      return b.getElementsByTagName(a)
    };

    function F() {
      var e = arguments,
        d, c, b, a, h = 1 & e[0],
        g = 1 + h;
      d = e[g - 1] || {};
      for (; g < e.length; g++)
        if (c = e[g])
          for (b in c) {
            a = c[b];
            if (a !== f) {
              a = c[b];
              var i = d[b];
              d[b] = h && (C(i) || C(a)) ? F(h, {}, i, a) : a
            }
          }
        return d
    }
    j.p = F;

    function Z(f, g) {
      var d = {},
        c, a, b;
      for (c in f) {
        a = f[c];
        b = g[c];
        if (a !== b) {
          var e;
          if (C(a) && C(b)) {
            a = Z(a, b);
            e = !qb(a)
          }!e && (d[c] = a)
        }
      }
      return d
    }
    j.dd = function(a) {
      return G(a) == "function"
    };
    j.cg = function(a) {
      return G(a) == "string"
    };
    j.hc = function(a) {
      return !isNaN(q(a)) && isFinite(a)
    };
    j.$Each = n;
    j.Rd = C;

    function S(a) {
      return g.createElement(a)
    }
    j.$CreateElement = S;
    j.$CreateDiv = function() {
      return S("DIV")
    };
    j.Nf = function() {
      return S("SPAN")
    };
    j.cd = function() {};

    function W(b, c, a) {
      if (a == f) return b.getAttribute(c);
      b.setAttribute(c, a)
    }

    function V(a, b) {
      return W(a, b) || W(a, "data-" + b)
    }
    j.$Attribute = W;
    j.$AttributeEx = V;

    function y(b, a) {
      if (a == f) return b.className;
      b.className = a
    }
    j.nd = y;

    function vb(b) {
      var a = {};
      n(b, function(b) {
        if (b != f) a[b] = b
      });
      return a
    }

    function xb(b, a) {
      return b.match(a || yb)
    }

    function Q(b, a) {
      return vb(xb(b || "", a))
    }
    j.sf = xb;

    function bb(b, c) {
      var a = "";
      n(c, function(c) {
        a && (a += b);
        a += c
      });
      return a
    }

    function J(a, c, b) {
      y(a, bb(" ", F(Z(Q(y(a)), Q(c)), Q(b))))
    }
    j.de = function(a) {
      return a.parentNode
    };
    j.R = function(a) {
      j.eb(a, "none")
    };
    j.B = function(a, b) {
      j.eb(a, b ? "none" : "")
    };
    j.xf = function(b, a) {
      b.removeAttribute(a)
    };
    j.kg = function() {
      return r() && l < 10
    };
    j.lg = function(d, a) {
      if (a) d.style.clip = "rect(" + c.round(a.$Top || a.H || 0) + "px " + c.round(a.$Right) + "px " + c.round(a.$Bottom) + "px " + c.round(a.$Left || a.F || 0) + "px)";
      else if (a !== f) {
        var h = d.style.cssText,
          g = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
          e = D(h, g, "");
        b.$CssCssText(d, e)
      }
    };
    j.T = function() {
      return +new Date
    };
    j.$AppendChild = function(b, a) {
      b.appendChild(a)
    };
    j.jc = function(b, a, c) {
      (c || a.parentNode).insertBefore(b, a)
    };
    j.wb = function(b, a) {
      a = a || b.parentNode;
      a && a.removeChild(b)
    };
    j.gg = function(a, b) {
      n(a, function(a) {
        j.wb(a, b)
      })
    };
    j.tc = function(a) {
      j.gg(j.$Children(a, e), a)
    };
    j.fg = function(a, b) {
      var c = j.de(a);
      b & 1 && j.u(a, (j.$CssWidth(c) - j.$CssWidth(a)) / 2);
      b & 2 && j.v(a, (j.$CssHeight(c) - j.$CssHeight(a)) / 2)
    };
    j.Pb = function(b, a) {
      return parseInt(b, a || 10)
    };
    j.og = q;
    j.uf = function(b, a) {
      var c = g.body;
      while (a && b !== a && c !== a) try {
        a = a.parentNode
      } catch (d) {
        return k
      }
      return b === a
    };

    function X(d, c, b) {
      var a = d.cloneNode(!c);
      !b && j.xf(a, "id");
      return a
    }
    j.$CloneNode = X;
    j.Db = function(d, f) {
      var a = new Image;

      function b(e, d) {
        j.Q(a, "load", b);
        j.Q(a, "abort", c);
        j.Q(a, "error", c);
        f && f(a, d)
      }

      function c(a) {
        b(a, e)
      }
      if (nb() && l < 11.6 || !d) b(!d);
      else {
        j.$AddEvent(a, "load", b);
        j.$AddEvent(a, "abort", c);
        j.$AddEvent(a, "error", c);
        a.src = d
      }
    };
    j.ag = function(d, a, e) {
      var c = d.length + 1;

      function b(b) {
        c--;
        if (a && b && b.src == a.src) a = b;
        !c && e && e(a)
      }
      n(d, function(a) {
        j.Db(a.src, b)
      });
      b()
    };
    j.Td = function(a, g, i, h) {
      if (h) a = X(a);
      var c = T(a, g);
      if (!c.length) c = b.Ef(a, g);
      for (var f = c.length - 1; f > -1; f--) {
        var d = c[f],
          e = X(i);
        y(e, y(d));
        b.$CssCssText(e, d.style.cssText);
        b.jc(e, d);
        b.wb(d)
      }
      return a
    };

    function Eb(a) {
      var l = this,
        p = "",
        r = ["av", "pv", "ds", "dn"],
        e = [],
        q, k = 0,
        h = 0,
        d = 0;

      function i() {
        J(a, q, e[d || k || h & 2 || h]);
        b.$Css(a, "pointer-events", d ? "none" : "")
      }

      function c() {
        k = 0;
        i();
        j.Q(g, "mouseup", c);
        j.Q(g, "touchend", c);
        j.Q(g, "touchcancel", c)
      }

      function o(a) {
        if (d) j.$CancelEvent(a);
        else {
          k = 4;
          i();
          j.$AddEvent(g, "mouseup", c);
          j.$AddEvent(g, "touchend", c);
          j.$AddEvent(g, "touchcancel", c)
        }
      }
      l.Hd = function(a) {
        if (a === f) return h;
        h = a & 2 || a & 1;
        i()
      };
      l.$Enable = function(a) {
        if (a === f) return !d;
        d = a ? 0 : 3;
        i()
      };
      l.$Elmt = a = j.$GetElement(a);
      var m = b.sf(y(a));
      if (m) p = m.shift();
      n(r, function(a) {
        e.push(p + a)
      });
      q = bb(" ", e);
      e.unshift("");
      j.$AddEvent(a, "mousedown", o);
      j.$AddEvent(a, "touchstart", o)
    }
    j.Rb = function(a) {
      return new Eb(a)
    };
    j.$Css = w;
    j.kb = m("overflow");
    j.v = m("top", 2);
    j.u = m("left", 2);
    j.$CssWidth = m("width", 2);
    j.$CssHeight = m("height", 2);
    j.wc = m("marginLeft", 2);
    j.uc = m("marginTop", 2);
    j.z = m("position");
    j.eb = m("display");
    j.L = m("zIndex", 1);
    j.Jb = function(b, a, c) {
      if (a != f) Db(b, a, c);
      else return Bb(b)
    };
    j.$CssCssText = function(a, b) {
      if (b != f) a.style.cssText = b;
      else return a.style.cssText
    };
    j.Re = function(b, a) {
      if (a === f) {
        a = w(b, "backgroundImage") || "";
        var c = /\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a) || [];
        return c[1]
      }
      w(b, "backgroundImage", a ? "url('" + a + "')" : "")
    };
    var U = {
      $Opacity: j.Jb,
      $Top: j.v,
      $Left: j.u,
      W: j.$CssWidth,
      U: j.$CssHeight,
      Kb: j.z,
      Nh: j.eb,
      $ZIndex: j.L
    };

    function x(g, l) {
      var e = fb(),
        b = H(),
        d = db(),
        i = M(g);

      function k(b, d, a) {
        var e = b.nb(p(-d / 2, -a / 2)),
          f = b.nb(p(d / 2, -a / 2)),
          g = b.nb(p(d / 2, a / 2)),
          h = b.nb(p(-d / 2, a / 2));
        b.nb(p(300, 300));
        return p(c.min(e.x, f.x, g.x, h.x) + d / 2, c.min(e.y, f.y, g.y, h.y) + a / 2)
      }

      function a(d, a) {
        a = a || {};
        var n = a.$TranslateZ || 0,
          p = (a.$RotateX || 0) % 360,
          q = (a.$RotateY || 0) % 360,
          u = (a.$Rotate || 0) % 360,
          l = a.$ScaleX,
          m = a.$ScaleY,
          g = a.Mh;
        if (l == f) l = 1;
        if (m == f) m = 1;
        if (g == f) g = 1;
        if (e) {
          n = 0;
          p = 0;
          q = 0;
          g = 0
        }
        var c = new Ab(a.$TranslateX, a.$TranslateY, n);
        c.$RotateX(p);
        c.$RotateY(q);
        c.Fe(u);
        c.Ee(a.$SkewX, a.$SkewY);
        c.$Scale(l, m, g);
        if (b) {
          c.$Move(a.F, a.H);
          d.style[i] = c.hf()
        } else if (!A || A < 9) {
          var o = "",
            h = {
              x: 0,
              y: 0
            };
          if (a.$OriginalWidth) h = k(c, a.$OriginalWidth, a.$OriginalHeight);
          j.uc(d, h.y);
          j.wc(d, h.x);
          o = c.gf();
          var s = d.style.filter,
            t = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),
            r = D(s, [t], o);
          R(d, r)
        }
      }
      x = function(e, c) {
        c = c || {};
        var i = c.F,
          k = c.H,
          g;
        n(U, function(a, b) {
          g = c[b];
          g !== f && a(e, g)
        });
        j.lg(e, c.$Clip);
        if (!b) {
          i != f && j.u(e, (c.Ad || 0) + i);
          k != f && j.v(e, (c.Bd || 0) + k)
        }
        if (c.kf)
          if (d) wb(j.$CreateCallback(h, O, e, c));
          else a(e, c)
      };
      j.qb = O;
      if (d) j.qb = x;
      if (e) j.qb = a;
      else if (!b) a = O;
      j.M = x;
      x(g, l)
    }
    j.qb = x;
    j.M = x;

    function Ab(j, k, o) {
      var d = this,
        b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, j || 0, k || 0, o || 0, 1],
        i = c.sin,
        g = c.cos,
        l = c.tan;

      function f(a) {
        return a * c.PI / 180
      }

      function n(a, b) {
        return {
          x: a,
          y: b
        }
      }

      function m(b, c, f, g, i, l, n, o, q, t, u, w, y, A, C, F, a, d, e, h, j, k, m, p, r, s, v, x, z, B, D, E) {
        return [b * a + c * j + f * r + g * z, b * d + c * k + f * s + g * B, b * e + c * m + f * v + g * D, b * h + c * p + f * x + g * E, i * a + l * j + n * r + o * z, i * d + l * k + n * s + o * B, i * e + l * m + n * v + o * D, i * h + l * p + n * x + o * E, q * a + t * j + u * r + w * z, q * d + t * k + u * s + w * B, q * e + t * m + u * v + w * D, q * h + t * p + u * x + w * E, y * a + A * j + C * r + F * z, y * d + A * k + C * s + F * B, y * e + A * m + C * v + F * D, y * h + A * p + C * x + F * E]
      }

      function e(c, a) {
        return m.apply(h, (a || b).concat(c))
      }
      d.$Scale = function(a, c, d) {
        if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1])
      };
      d.$Move = function(a, c, d) {
        b[12] += a || 0;
        b[13] += c || 0;
        b[14] += d || 0
      };
      d.$RotateX = function(c) {
        if (c) {
          a = f(c);
          var d = g(a),
            h = i(a);
          b = e([1, 0, 0, 0, 0, d, h, 0, 0, -h, d, 0, 0, 0, 0, 1])
        }
      };
      d.$RotateY = function(c) {
        if (c) {
          a = f(c);
          var d = g(a),
            h = i(a);
          b = e([d, 0, -h, 0, 0, 1, 0, 0, h, 0, d, 0, 0, 0, 0, 1])
        }
      };
      d.Fe = function(c) {
        if (c) {
          a = f(c);
          var d = g(a),
            h = i(a);
          b = e([d, h, 0, 0, -h, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
        }
      };
      d.Ee = function(a, c) {
        if (a || c) {
          j = f(a);
          k = f(c);
          b = e([1, l(k), 0, 0, l(j), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
        }
      };
      d.nb = function(c) {
        var a = e(b, [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, c.x, c.y, 0, 1]);
        return n(a[12], a[13])
      };
      d.hf = function() {
        return "matrix3d(" + b.join(",") + ")"
      };
      d.gf = function() {
        return "progid:DXImageTransform.Microsoft.Matrix(M11=" + b[0] + ", M12=" + b[4] + ", M21=" + b[1] + ", M22=" + b[5] + ", SizingMethod='auto expand')"
      }
    }
    new(function() {
      var a = this;

      function b(d, g) {
        for (var j = d[0].length, i = d.length, h = g[0].length, f = [], c = 0; c < i; c++)
          for (var k = f[c] = [], b = 0; b < h; b++) {
            for (var e = 0, a = 0; a < j; a++) e += d[c][a] * g[a][b];
            k[b] = e
          }
        return f
      }
      a.$ScaleX = function(b, c) {
        return a.Cd(b, c, 0)
      };
      a.$ScaleY = function(b, c) {
        return a.Cd(b, 0, c)
      };
      a.Cd = function(a, c, d) {
        return b(a, [
          [c, 0],
          [0, d]
        ])
      };
      a.nb = function(d, c) {
        var a = b(d, [
          [c.x],
          [c.y]
        ]);
        return p(a[0][0], a[1][0])
      }
    });
    var P = {
      Ad: 0,
      Bd: 0,
      F: 0,
      H: 0,
      $Zoom: 1,
      $ScaleX: 1,
      $ScaleY: 1,
      $Rotate: 0,
      $RotateX: 0,
      $RotateY: 0,
      $TranslateX: 0,
      $TranslateY: 0,
      $TranslateZ: 0,
      $SkewX: 0,
      $SkewY: 0
    };
    j.Dc = function(c, d) {
      var a = c || {};
      if (c)
        if (b.dd(c)) a = {
          fb: a
        };
        else if (b.dd(c.$Clip)) a.$Clip = {
        fb: c.$Clip
      };
      a.fb = a.fb || d;
      if (a.$Clip) a.$Clip.fb = a.$Clip.fb || d;
      return a
    };

    function ub(c, a) {
      var b = {};
      n(c, function(c, d) {
        var e = c;
        if (a[d] != f)
          if (j.hc(c)) e = c + a[d];
          else e = ub(c, a[d]);
        b[d] = e
      });
      return b
    }
    j.Xe = ub;
    j.wd = function(l, m, x, q, z, A, n) {
      var a = m;
      if (l) {
        a = {};
        for (var i in m) {
          var B = A[i] || 1,
            w = z[i] || [0, 1],
            g = (x - w[0]) / w[1];
          g = c.min(c.max(g, 0), 1);
          g = g * B;
          var u = c.floor(g);
          if (g != u) g -= u;
          var j = q.fb || d.$Linear,
            k, C = l[i],
            p = m[i];
          if (b.hc(p)) {
            j = q[i] || j;
            var y = j(g);
            k = C + p * y
          } else {
            k = b.p({
              Tb: {}
            }, l[i]);
            var v = q[i] || {};
            b.$Each(p.Tb || p, function(d, a) {
              j = v[a] || v.fb || j;
              var c = j(g),
                b = d * c;
              k.Tb[a] = b;
              k[a] += b
            })
          }
          a[i] = k
        }
        var t = b.$Each(m, function(b, a) {
          return P[a] != f
        });
        t && b.$Each(P, function(c, b) {
          if (a[b] == f && l[b] !== f) a[b] = l[b]
        });
        if (t) {
          if (a.$Zoom) a.$ScaleX = a.$ScaleY = a.$Zoom;
          a.$OriginalWidth = n.$OriginalWidth;
          a.$OriginalHeight = n.$OriginalHeight;
          a.kf = e
        }
      }
      if (m.$Clip && n.$Move) {
        var o = a.$Clip.Tb,
          s = (o.$Top || 0) + (o.$Bottom || 0),
          r = (o.$Left || 0) + (o.$Right || 0);
        a.$Left = (a.$Left || 0) + r;
        a.$Top = (a.$Top || 0) + s;
        a.$Clip.$Left -= r;
        a.$Clip.$Right -= r;
        a.$Clip.$Top -= s;
        a.$Clip.$Bottom -= s
      }
      if (a.$Clip && b.kg() && !a.$Clip.$Top && !a.$Clip.$Left && !a.$Clip.H && !a.$Clip.F && a.$Clip.$Right == n.$OriginalWidth && a.$Clip.$Bottom == n.$OriginalHeight) a.$Clip = h;
      return a
    }
  };

  function m() {
    var a = this,
      d = [];

    function h(a, b) {
      d.push({
        Fc: a,
        Ac: b
      })
    }

    function g(a, c) {
      b.$Each(d, function(b, e) {
        b.Fc == a && b.Ac === c && d.splice(e, 1)
      })
    }
    a.$On = a.addEventListener = h;
    a.$Off = a.removeEventListener = g;
    a.m = function(a) {
      var c = [].slice.call(arguments, 1);
      b.$Each(d, function(b) {
        b.Fc == a && b.Ac.apply(i, c)
      })
    }
  }
  var l = function(B, E, g, M, P, K) {
    B = B || 0;
    var a = this,
      q, n, o, v, C = 0,
      I, J, H, D, A = 0,
      j = 0,
      m = 0,
      z, l, d, f, p, y, w = [],
      x;

    function Q(a) {
      d += a;
      f += a;
      l += a;
      j += a;
      m += a;
      A += a
    }

    function u(o) {
      var h = o;
      if (p)
        if (!y && (h >= f || h < d) || y && h >= d) h = ((h - d) % p + p) % p + d;
      if (!z || v || j != h) {
        var i = c.min(h, f);
        i = c.max(i, d);
        if (!z || v || i != m) {
          if (K) {
            var k = (i - l) / (E || 1);
            if (g.$Reverse) k = 1 - k;
            var n = b.wd(P, K, k, I, H, J, g);
            if (x) b.$Each(n, function(b, a) {
              x[a] && x[a](M, b)
            });
            else b.M(M, n)
          }
          a.Jc(m - l, i - l);
          var r = m,
            q = m = i;
          b.$Each(w, function(b, c) {
            var a = !z && y || h <= j ? w[w.length - c - 1] : b;
            a.K(m - A)
          });
          j = h;
          z = e;
          a.Mb(r, q)
        }
      }
    }

    function F(a, b, e) {
      b && a.$Shift(f);
      if (!e) {
        d = c.min(d, a.Nb() + A);
        f = c.max(f, a.jb() + A)
      }
      w.push(a)
    }
    var r = i.requestAnimationFrame || i.webkitRequestAnimationFrame || i.mozRequestAnimationFrame || i.msRequestAnimationFrame;
    if (b.$IsBrowserSafari() && b.$BrowserVersion() < 7) r = h;
    r = r || function(a) {
      b.$Delay(a, g.$Interval)
    };

    function L() {
      if (q) {
        var d = b.T(),
          e = c.min(d - C, g.Wd),
          a = j + e * o;
        C = d;
        if (a * o >= n * o) a = n;
        u(a);
        if (!v && a * o >= n * o) N(D);
        else r(L)
      }
    }

    function t(g, h, i) {
      if (!q) {
        q = e;
        v = i;
        D = h;
        g = c.max(g, d);
        g = c.min(g, f);
        n = g;
        o = n < j ? -1 : 1;
        a.Kd();
        C = b.T();
        r(L)
      }
    }

    function N(b) {
      if (q) {
        v = q = D = k;
        a.Id();
        b && b()
      }
    }
    a.$Play = function(a, b, c) {
      t(a ? j + a : f, b, c)
    };
    a.Od = t;
    a.ob = N;
    a.Ze = function(a) {
      t(a)
    };
    a.ib = function() {
      return j
    };
    a.Zc = function() {
      return n
    };
    a.Cb = function() {
      return m
    };
    a.K = u;
    a.Ye = function() {
      u(f, e)
    };
    a.$Move = function(a) {
      u(j + a)
    };
    a.$IsPlaying = function() {
      return q
    };
    a.ff = function(a) {
      p = a
    };
    a.$Shift = Q;
    a.N = function(a, b) {
      F(a, 0, b)
    };
    a.Kc = function(a) {
      F(a, 1)
    };
    a.pd = function(a) {
      f += a
    };
    a.Nb = function() {
      return d
    };
    a.jb = function() {
      return f
    };
    a.Mb = a.Kd = a.Id = a.Jc = b.cd;
    a.Bc = b.T();
    g = b.p({
      $Interval: 16,
      Wd: 50
    }, g);
    p = g.Ec;
    y = g.ye;
    x = g.Be;
    d = l = B;
    f = B + E;
    J = g.$Round || {};
    H = g.$During || {};
    I = b.Dc(g.$Easing)
  };
  var o = i.$JssorSlideshowFormations$ = new function() {
    var h = this,
      b = 0,
      a = 1,
      f = 2,
      d = 3,
      s = 1,
      r = 2,
      t = 4,
      q = 8,
      w = 256,
      x = 512,
      v = 1024,
      u = 2048,
      j = u + s,
      i = u + r,
      o = x + s,
      m = x + r,
      n = w + t,
      k = w + q,
      l = v + t,
      p = v + q;

    function y(a) {
      return (a & r) == r
    }

    function z(a) {
      return (a & t) == t
    }

    function g(b, a, c) {
      c.push(a);
      b[a] = b[a] || [];
      b[a].push(c)
    }
    h.$FormationStraight = function(f) {
      for (var d = f.$Cols, e = f.$Rows, s = f.$Assembly, t = f.ec, r = [], a = 0, b = 0, p = d - 1, q = e - 1, h = t - 1, c, b = 0; b < e; b++)
        for (a = 0; a < d; a++) {
          switch (s) {
            case j:
              c = h - (a * e + (q - b));
              break;
            case l:
              c = h - (b * d + (p - a));
              break;
            case o:
              c = h - (a * e + b);
            case n:
              c = h - (b * d + a);
              break;
            case i:
              c = a * e + b;
              break;
            case k:
              c = b * d + (p - a);
              break;
            case m:
              c = a * e + (q - b);
              break;
            default:
              c = b * d + a
          }
          g(r, c, [b, a])
        }
      return r
    };
    h.$FormationSwirl = function(q) {
      var x = q.$Cols,
        y = q.$Rows,
        B = q.$Assembly,
        w = q.ec,
        A = [],
        z = [],
        u = 0,
        c = 0,
        h = 0,
        r = x - 1,
        s = y - 1,
        t, p, v = 0;
      switch (B) {
        case j:
          c = r;
          h = 0;
          p = [f, a, d, b];
          break;
        case l:
          c = 0;
          h = s;
          p = [b, d, a, f];
          break;
        case o:
          c = r;
          h = s;
          p = [d, a, f, b];
          break;
        case n:
          c = r;
          h = s;
          p = [a, d, b, f];
          break;
        case i:
          c = 0;
          h = 0;
          p = [f, b, d, a];
          break;
        case k:
          c = r;
          h = 0;
          p = [a, f, b, d];
          break;
        case m:
          c = 0;
          h = s;
          p = [d, b, f, a];
          break;
        default:
          c = 0;
          h = 0;
          p = [b, f, a, d]
      }
      u = 0;
      while (u < w) {
        t = h + "," + c;
        if (c >= 0 && c < x && h >= 0 && h < y && !z[t]) {
          z[t] = e;
          g(A, u++, [h, c])
        } else switch (p[v++ % p.length]) {
          case b:
            c--;
            break;
          case f:
            h--;
            break;
          case a:
            c++;
            break;
          case d:
            h++
        }
        switch (p[v % p.length]) {
          case b:
            c++;
            break;
          case f:
            h++;
            break;
          case a:
            c--;
            break;
          case d:
            h--
        }
      }
      return A
    };
    h.$FormationZigZag = function(p) {
      var w = p.$Cols,
        x = p.$Rows,
        z = p.$Assembly,
        v = p.ec,
        t = [],
        u = 0,
        c = 0,
        e = 0,
        q = w - 1,
        r = x - 1,
        y, h, s = 0;
      switch (z) {
        case j:
          c = q;
          e = 0;
          h = [f, a, d, a];
          break;
        case l:
          c = 0;
          e = r;
          h = [b, d, a, d];
          break;
        case o:
          c = q;
          e = r;
          h = [d, a, f, a];
          break;
        case n:
          c = q;
          e = r;
          h = [a, d, b, d];
          break;
        case i:
          c = 0;
          e = 0;
          h = [f, b, d, b];
          break;
        case k:
          c = q;
          e = 0;
          h = [a, f, b, f];
          break;
        case m:
          c = 0;
          e = r;
          h = [d, b, f, b];
          break;
        default:
          c = 0;
          e = 0;
          h = [b, f, a, f]
      }
      u = 0;
      while (u < v) {
        y = e + "," + c;
        if (c >= 0 && c < w && e >= 0 && e < x && typeof t[y] == "undefined") {
          g(t, u++, [e, c]);
          switch (h[s % h.length]) {
            case b:
              c++;
              break;
            case f:
              e++;
              break;
            case a:
              c--;
              break;
            case d:
              e--
          }
        } else {
          switch (h[s++ % h.length]) {
            case b:
              c--;
              break;
            case f:
              e--;
              break;
            case a:
              c++;
              break;
            case d:
              e++
          }
          switch (h[s++ % h.length]) {
            case b:
              c++;
              break;
            case f:
              e++;
              break;
            case a:
              c--;
              break;
            case d:
              e--
          }
        }
      }
      return t
    };
    h.$FormationStraightStairs = function(q) {
      var u = q.$Cols,
        v = q.$Rows,
        e = q.$Assembly,
        t = q.ec,
        r = [],
        s = 0,
        c = 0,
        d = 0,
        f = u - 1,
        h = v - 1,
        x = t - 1;
      switch (e) {
        case j:
        case m:
        case o:
        case i:
          var a = 0,
            b = 0;
          break;
        case k:
        case l:
        case n:
        case p:
          var a = f,
            b = 0;
          break;
        default:
          e = p;
          var a = f,
            b = 0
      }
      c = a;
      d = b;
      while (s < t) {
        if (z(e) || y(e)) g(r, x - s++, [d, c]);
        else g(r, s++, [d, c]);
        switch (e) {
          case j:
          case m:
            c--;
            d++;
            break;
          case o:
          case i:
            c++;
            d--;
            break;
          case k:
          case l:
            c--;
            d--;
            break;
          case p:
          case n:
          default:
            c++;
            d++
        }
        if (c < 0 || d < 0 || c > f || d > h) {
          switch (e) {
            case j:
            case m:
              a++;
              break;
            case k:
            case l:
            case o:
            case i:
              b++;
              break;
            case p:
            case n:
            default:
              a--
          }
          if (a < 0 || b < 0 || a > f || b > h) {
            switch (e) {
              case j:
              case m:
                a = f;
                b++;
                break;
              case o:
              case i:
                b = h;
                a++;
                break;
              case k:
              case l:
                b = h;
                a--;
                break;
              case p:
              case n:
              default:
                a = 0;
                b++
            }
            if (b > h) b = h;
            else if (b < 0) b = 0;
            else if (a > f) a = f;
            else if (a < 0) a = 0
          }
          d = b;
          c = a
        }
      }
      return r
    };
    h.$FormationSquare = function(i) {
      var a = i.$Cols || 1,
        b = i.$Rows || 1,
        j = [],
        d, e, f, h, k;
      f = a < b ? (b - a) / 2 : 0;
      h = a > b ? (a - b) / 2 : 0;
      k = c.round(c.max(a / 2, b / 2)) + 1;
      for (d = 0; d < a; d++)
        for (e = 0; e < b; e++) g(j, k - c.min(d + 1 + f, e + 1 + h, a - d + f, b - e + h), [e, d]);
      return j
    };
    h.$FormationRectangle = function(f) {
      var d = f.$Cols || 1,
        e = f.$Rows || 1,
        h = [],
        a, b, i;
      i = c.round(c.min(d / 2, e / 2)) + 1;
      for (a = 0; a < d; a++)
        for (b = 0; b < e; b++) g(h, i - c.min(a + 1, b + 1, d - a, e - b), [b, a]);
      return h
    };
    h.$FormationRandom = function(d) {
      for (var e = [], a, b = 0; b < d.$Rows; b++)
        for (a = 0; a < d.$Cols; a++) g(e, c.ceil(1e5 * c.random()) % 13, [b, a]);
      return e
    };
    h.$FormationCircle = function(d) {
      for (var e = d.$Cols || 1, f = d.$Rows || 1, h = [], a, i = e / 2 - .5, j = f / 2 - .5, b = 0; b < e; b++)
        for (a = 0; a < f; a++) g(h, c.round(c.sqrt(c.pow(b - i, 2) + c.pow(a - j, 2))), [a, b]);
      return h
    };
    h.$FormationCross = function(d) {
      for (var e = d.$Cols || 1, f = d.$Rows || 1, h = [], a, i = e / 2 - .5, j = f / 2 - .5, b = 0; b < e; b++)
        for (a = 0; a < f; a++) g(h, c.round(c.min(c.abs(b - i), c.abs(a - j))), [a, b]);
      return h
    };
    h.$FormationRectangleCross = function(f) {
      for (var h = f.$Cols || 1, i = f.$Rows || 1, j = [], a, d = h / 2 - .5, e = i / 2 - .5, k = c.max(d, e) + 1, b = 0; b < h; b++)
        for (a = 0; a < i; a++) g(j, c.round(k - c.max(d - c.abs(b - d), e - c.abs(a - e))) - 1, [a, b]);
      return j
    }
  };
  i.$JssorSlideshowRunner$ = function(n, s, q, u, z) {
    var f = this,
      v, g, a, y = 0,
      x = u.$TransitionsOrder,
      r, i = 8;

    function t(a) {
      if (a.$Top) a.H = a.$Top;
      if (a.$Left) a.F = a.$Left;
      b.$Each(a, function(a) {
        b.Rd(a) && t(a)
      })
    }

    function j(g, f) {
      var a = {
        $Interval: f,
        $Duration: 1,
        $Delay: 0,
        $Cols: 1,
        $Rows: 1,
        $Opacity: 0,
        $Zoom: 0,
        $Clip: 0,
        $Move: k,
        $SlideOut: k,
        $Reverse: k,
        $Formation: o.$FormationRandom,
        $Assembly: 1032,
        $ChessMode: {
          $Column: 0,
          $Row: 0
        },
        $Easing: d.$Swing,
        $Round: {},
        oc: [],
        $During: {}
      };
      b.p(a, g);
      t(a);
      a.ec = a.$Cols * a.$Rows;
      a.$Easing = b.Dc(a.$Easing, d.$Swing);
      a.af = c.ceil(a.$Duration / a.$Interval);
      a.Le = function(c, b) {
        c /= a.$Cols;
        b /= a.$Rows;
        var f = c + "x" + b;
        if (!a.oc[f]) {
          a.oc[f] = {
            W: c,
            U: b
          };
          for (var d = 0; d < a.$Cols; d++)
            for (var e = 0; e < a.$Rows; e++) a.oc[f][e + "," + d] = {
              $Top: e * b,
              $Right: d * c + c,
              $Bottom: e * b + b,
              $Left: d * c
            }
        }
        return a.oc[f]
      };
      if (a.$Brother) {
        a.$Brother = j(a.$Brother, f);
        a.$SlideOut = e
      }
      return a
    }

    function p(B, i, a, w, o, m) {
      var z = this,
        u, v = {},
        j = {},
        n = [],
        f, d, s, q = a.$ChessMode.$Column || 0,
        r = a.$ChessMode.$Row || 0,
        g = a.Le(o, m),
        p = C(a),
        D = p.length - 1,
        t = a.$Duration + a.$Delay * D,
        x = w + t,
        l = a.$SlideOut,
        y;
      x += 50;

      function C(a) {
        var b = a.$Formation(a);
        return a.$Reverse ? b.reverse() : b
      }
      z.Md = x;
      z.Xb = function(d) {
        d -= w;
        var e = d < t;
        if (e || y) {
          y = e;
          if (!l) d = t - d;
          var f = c.ceil(d / a.$Interval);
          b.$Each(j, function(a, e) {
            var d = c.max(f, a.bf);
            d = c.min(d, a.length - 1);
            if (a.ud != d) {
              if (!a.ud && !l) b.B(n[e]);
              else d == a.Ue && l && b.R(n[e]);
              a.ud = d;
              b.M(n[e], a[d])
            }
          })
        }
      };
      i = b.$CloneNode(i);
      b.qb(i, h);
      if (b.Qb()) {
        var E = !i["no-image"],
          A = b.Hf(i);
        b.$Each(A, function(a) {
          (E || a["jssor-slider"]) && b.Jb(a, b.Jb(a), e)
        })
      }
      b.$Each(p, function(h, i) {
        b.$Each(h, function(G) {
          var K = G[0],
            J = G[1],
            t = K + "," + J,
            n = k,
            p = k,
            x = k;
          if (q && J % 2) {
            if (q & 3) n = !n;
            if (q & 12) p = !p;
            if (q & 16) x = !x
          }
          if (r && K % 2) {
            if (r & 3) n = !n;
            if (r & 12) p = !p;
            if (r & 16) x = !x
          }
          a.$Top = a.$Top || a.$Clip & 4;
          a.$Bottom = a.$Bottom || a.$Clip & 8;
          a.$Left = a.$Left || a.$Clip & 1;
          a.$Right = a.$Right || a.$Clip & 2;
          var C = p ? a.$Bottom : a.$Top,
            z = p ? a.$Top : a.$Bottom,
            B = n ? a.$Right : a.$Left,
            A = n ? a.$Left : a.$Right;
          a.$Clip = C || z || B || A;
          s = {};
          d = {
            H: 0,
            F: 0,
            $Opacity: 1,
            W: o,
            U: m
          };
          f = b.p({}, d);
          u = b.p({}, g[t]);
          if (a.$Opacity) d.$Opacity = 2 - a.$Opacity;
          if (a.$ZIndex) {
            d.$ZIndex = a.$ZIndex;
            f.$ZIndex = 0
          }
          var I = a.$Cols * a.$Rows > 1 || a.$Clip;
          if (a.$Zoom || a.$Rotate) {
            var H = e;
            if (b.Qb())
              if (a.$Cols * a.$Rows > 1) H = k;
              else I = k;
            if (H) {
              d.$Zoom = a.$Zoom ? a.$Zoom - 1 : 1;
              f.$Zoom = 1;
              if (b.Qb() || b.$IsBrowserOpera()) d.$Zoom = c.min(d.$Zoom, 2);
              var N = a.$Rotate || 0;
              d.$Rotate = N * 360 * (x ? -1 : 1);
              f.$Rotate = 0
            }
          }
          if (I) {
            var h = u.Tb = {};
            if (a.$Clip) {
              var w = a.$ScaleClip || 1;
              if (C && z) {
                h.$Top = g.U / 2 * w;
                h.$Bottom = -h.$Top
              } else if (C) h.$Bottom = -g.U * w;
              else if (z) h.$Top = g.U * w;
              if (B && A) {
                h.$Left = g.W / 2 * w;
                h.$Right = -h.$Left
              } else if (B) h.$Right = -g.W * w;
              else if (A) h.$Left = g.W * w
            }
            s.$Clip = u;
            f.$Clip = g[t]
          }
          var L = n ? 1 : -1,
            M = p ? 1 : -1;
          if (a.x) d.F += o * a.x * L;
          if (a.y) d.H += m * a.y * M;
          b.$Each(d, function(a, c) {
            if (b.hc(a))
              if (a != f[c]) s[c] = a - f[c]
          });
          v[t] = l ? f : d;
          var D = a.af,
            y = c.round(i * a.$Delay / a.$Interval);
          j[t] = new Array(y);
          j[t].bf = y;
          j[t].Ue = y + D - 1;
          for (var F = 0; F <= D; F++) {
            var E = b.wd(f, s, F / D, a.$Easing, a.$During, a.$Round, {
              $Move: a.$Move,
              $OriginalWidth: o,
              $OriginalHeight: m
            });
            E.$ZIndex = E.$ZIndex || 1;
            j[t].push(E)
          }
        })
      });
      p.reverse();
      b.$Each(p, function(a) {
        b.$Each(a, function(c) {
          var f = c[0],
            e = c[1],
            d = f + "," + e,
            a = i;
          if (e || f) a = b.$CloneNode(i);
          b.M(a, v[d]);
          b.kb(a, "hidden");
          b.z(a, "absolute");
          B.Te(a);
          n[d] = a;
          b.B(a, !l)
        })
      })
    }

    function w() {
      var b = this,
        c = 0;
      l.call(b, 0, v);
      b.Mb = function(d, b) {
        if (b - c > i) {
          c = b;
          a && a.Xb(b);
          g && g.Xb(b)
        }
      };
      b.Rc = r
    }
    f.df = function() {
      var a = 0,
        b = u.$Transitions,
        d = b.length;
      if (x) a = y++ % d;
      else a = c.floor(c.random() * d);
      b[a] && (b[a].ub = a);
      return b[a]
    };
    f.Ae = function(w, x, k, l, b) {
      r = b;
      b = j(b, i);
      var h = l.Fd,
        e = k.Fd;
      h["no-image"] = !l.Yb;
      e["no-image"] = !k.Yb;
      var m = h,
        o = e,
        u = b,
        d = b.$Brother || j({}, i);
      if (!b.$SlideOut) {
        m = e;
        o = h
      }
      var t = d.$Shift || 0;
      g = new p(n, o, d, c.max(t - d.$Interval, 0), s, q);
      a = new p(n, m, u, c.max(d.$Interval - t, 0), s, q);
      g.Xb(0);
      a.Xb(0);
      v = c.max(g.Md, a.Md);
      f.ub = w
    };
    f.zb = function() {
      n.zb();
      g = h;
      a = h
    };
    f.pf = function() {
      var b = h;
      if (a) b = new w;
      return b
    };
    if (b.Qb() || b.$IsBrowserOpera() || z && b.$WebKitVersion() < 537) i = 16;
    m.call(f);
    l.call(f, -1e7, 1e7)
  };
  var j = i.$JssorSlider$ = function(q, jc) {
    var o = this;

    function Gc() {
      var a = this;
      l.call(a, -1e8, 2e8);
      a.mg = function() {
        var b = a.Cb(),
          d = c.floor(b),
          f = t(d),
          e = b - c.floor(b);
        return {
          ub: f,
          Xf: d,
          Kb: e
        }
      };
      a.Mb = function(b, a) {
        var d = c.floor(a);
        if (d != a && a > b) d++;
        Wb(d, e);
        o.m(j.$EVT_POSITION_CHANGE, t(a), t(b), a, b)
      }
    }

    function Fc() {
      var a = this;
      l.call(a, 0, 0, {
        Ec: r
      });
      b.$Each(B, function(b) {
        E & 1 && b.ff(r);
        a.Kc(b);
        b.$Shift(gb / fc)
      })
    }

    function Ec() {
      var a = this,
        b = Vb.$Elmt;
      l.call(a, -1, 2, {
        $Easing: d.$Linear,
        Be: {
          Kb: dc
        },
        Ec: r
      }, b, {
        Kb: 1
      }, {
        Kb: -2
      });
      a.dc = b
    }

    function sc(n, m) {
      var b = this,
        d, f, g, i, c;
      l.call(b, -1e8, 2e8, {
        Wd: 100
      });
      b.Kd = function() {
        P = e;
        R = h;
        o.m(j.$EVT_SWIPE_START, t(x.ib()), x.ib())
      };
      b.Id = function() {
        P = k;
        i = k;
        var a = x.mg();
        o.m(j.$EVT_SWIPE_END, t(x.ib()), x.ib());
        !a.Kb && Ic(a.Xf, s)
      };
      b.Mb = function(j, h) {
        var b;
        if (i) b = c;
        else {
          b = f;
          if (g) {
            var e = h / g;
            b = a.$SlideEasing(e) * (f - d) + d
          }
        }
        x.K(b)
      };
      b.bc = function(a, e, c, h) {
        d = a;
        f = e;
        g = c;
        x.K(a);
        b.K(0);
        b.Od(c, h)
      };
      b.qf = function(a) {
        i = e;
        c = a;
        b.$Play(a, h, e)
      };
      b.vf = function(a) {
        c = a
      };
      x = new Gc;
      x.N(n);
      x.N(m)
    }

    function tc() {
      var c = this,
        a = bc();
      b.L(a, 0);
      b.$Css(a, "pointerEvents", "none");
      c.$Elmt = a;
      c.Te = function(c) {
        b.$AppendChild(a, c);
        b.B(a)
      };
      c.zb = function() {
        b.R(a);
        b.tc(a)
      }
    }

    function Cc(i, f) {
      var d = this,
        q, O, y, n, z = [],
        x, F, X, I, T, D, N, g, w, p;
      l.call(d, -v, v + 1, {});

      function G(a) {
        q && q.fd();
        W(i, a, 0);
        D = e;
        q = new J.$Class(i, J, b.og(b.$AttributeEx(i, "idle")) || rc, !u);
        q.K(0)
      }

      function Z() {
        q.Bc < J.Bc && G()
      }

      function Q(p, r, m) {
        if (!I) {
          I = e;
          if (n && m) {
            var g = m.width,
              c = m.height,
              l = g,
              i = c;
            if (g && c && a.$FillMode) {
              if (a.$FillMode & 3 && (!(a.$FillMode & 4) || g > M || c > L)) {
                var h = k,
                  q = M / L * c / g;
                if (a.$FillMode & 1) h = q > 1;
                else if (a.$FillMode & 2) h = q < 1;
                l = h ? g * L / c : M;
                i = h ? L : c * M / g
              }
              b.$CssWidth(n, l);
              b.$CssHeight(n, i);
              b.v(n, (L - i) / 2);
              b.u(n, (M - l) / 2)
            }
            b.z(n, "absolute");
            o.m(j.$EVT_LOAD_END, f)
          }
        }
        b.R(r);
        p && p(d)
      }

      function Y(b, c, e, g) {
        if (g == R && s == f && u)
          if (!Hc) {
            var a = t(b);
            C.Ae(a, f, c, d, e);
            c.Ff();
            U.$Shift(a - U.Nb() - 1);
            U.K(a);
            A.bc(b, b, 0)
          }
      }

      function bb(b) {
        if (b == R && s == f) {
          if (!g) {
            var a = h;
            if (C)
              if (C.ub == f) a = C.pf();
              else C.zb();
            Z();
            g = new Ac(i, f, a, q);
            g.ad(p)
          }!g.$IsPlaying() && g.xc()
        }
      }

      function H(e, i, l) {
        if (e == f) {
          if (e != i) B[i] && B[i].Yd();
          else !l && g && g.ze();
          p && p.$Enable();
          var m = R = b.T();
          d.Db(b.$CreateCallback(h, bb, m))
        } else {
          var k = c.min(f, e),
            j = c.max(f, e),
            o = c.min(j - k, k + r - j),
            n = v + a.$LazyLoading - 1;
          (!T || o <= n) && d.Db()
        }
      }

      function eb() {
        if (s == f && g) {
          g.ob();
          p && p.$Quit();
          p && p.$Disable();
          g.we()
        }
      }

      function fb() {
        s == f && g && g.ob()
      }

      function ab(a) {
        !K && o.m(j.$EVT_CLICK, f, a)
      }

      function S() {
        p = w.pInstance;
        g && g.ad(p)
      }
      d.Db = function(c, a) {
        a = a || y;
        if (z.length && !I) {
          b.B(a);
          if (!X) {
            X = e;
            o.m(j.$EVT_LOAD_START, f);
            b.$Each(z, function(a) {
              if (!b.$Attribute(a, "src")) {
                a.src = b.$AttributeEx(a, "src2") || "";
                b.eb(a, a["display-origin"])
              }
            })
          }
          b.ag(z, n, b.$CreateCallback(h, Q, c, a))
        } else Q(c, a)
      };
      d.Zf = function() {
        var j = f;
        if (a.$AutoPlaySteps < 0) j -= r;
        var e = j + a.$AutoPlaySteps * yc;
        if (E & 2) e = t(e);
        if (!(E & 1) && !db) e = c.max(0, c.min(e, r - v));
        if (e != f) {
          if (C) {
            var g = C.df(r);
            if (g) {
              var k = R = b.T(),
                i = B[t(e)];
              return i.Db(b.$CreateCallback(h, Y, e, i, g, k), y)
            }
          }
          nb(e)
        } else if (u) {
          d.Yd();
          H(f, f)
        }
      };
      d.pc = function() {
        H(f, f, e)
      };
      d.Yd = function() {
        p && p.$Quit();
        p && p.$Disable();
        d.oe();
        g && g.jg();
        g = h;
        G()
      };
      d.Ff = function() {
        b.R(i)
      };
      d.oe = function() {
        b.B(i)
      };
      d.Yf = function() {
        p && p.$Enable()
      };

      function W(a, d, c, h) {
        if (b.$Attribute(a, "jssor-slider")) return;
        if (!D) {
          if (a.tagName == "IMG") {
            z.push(a);
            if (!b.$Attribute(a, "src")) {
              T = e;
              a["display-origin"] = b.eb(a);
              b.R(a)
            }
          }
          var f = b.Re(a);
          if (f) {
            var g = new Image;
            b.$AttributeEx(g, "src2", f);
            z.push(g)
          }
          if (c) {
            b.L(a, (b.L(a) || 0) + 1);
            b.uc(a, b.uc(a) || 0);
            b.wc(a, b.wc(a) || 0);
            b.qb(a, {
              $TranslateZ: 0
            })
          }
        }
        var i = b.$Children(a);
        b.$Each(i, function(f) {
          var i = f.tagName,
            j = b.$AttributeEx(f, "u");
          if (j == "player" && !w) {
            w = f;
            if (w.pInstance) S();
            else b.$AddEvent(w, "dataavailable", S)
          }
          if (j == "caption") {
            if (d) {
              b.ae(f, b.$AttributeEx(f, "to"));
              b.ig(f, b.$AttributeEx(f, "bf"));
              N && b.$AttributeEx(f, "3d") && b.zf(f, "preserve-3d")
            } else if (!b.$IsBrowserIE()) {
              var g = b.$CloneNode(f, k, e);
              b.jc(g, f, a);
              b.wb(f, a);
              f = g;
              d = e
            }
          } else if (!D && !c && !n) {
            if (i == "A") {
              if (b.$AttributeEx(f, "u") == "image") n = b.Kf(f, "IMG");
              else n = b.$FindChild(f, "image", e);
              if (n) {
                x = f;
                b.eb(x, "block");
                b.M(x, V);
                F = b.$CloneNode(x, e);
                b.z(x, "relative");
                b.Jb(F, 0);
                b.$Css(F, "backgroundColor", "#000")
              }
            } else if (i == "IMG" && b.$AttributeEx(f, "u") == "image") n = f;
            if (n) {
              n.border = 0;
              b.M(n, V)
            }
          }
          W(f, d, c + 1, h)
        });
        !D && c
      }
      d.Jc = function(c, b) {
        var a = v - b;
        dc(O, a)
      };
      d.ub = f;
      m.call(d);
      N = b.$AttributeEx(i, "p");
      b.Df(i, N);
      b.Cf(i, b.$AttributeEx(i, "po"));
      var P = b.$FindChild(i, "thumb", e);
      if (P) {
        d.Tf = b.$CloneNode(P);
        b.R(P)
      }
      b.B(i);
      y = b.$CloneNode(cb);
      b.L(y, 1e3);
      b.$AddEvent(i, "click", ab);
      G(e);
      d.Yb = n;
      d.ne = F;
      d.Fd = i;
      d.dc = O = i;
      b.$AppendChild(O, y);
      o.$On(203, H);
      o.$On(28, fb);
      o.$On(24, eb)
    }

    function Ac(z, f, p, q) {
      var a = this,
        m = 0,
        v = 0,
        g, h, d, c, i, t, r, n = B[f];
      l.call(a, 0, 0);

      function w() {
        b.tc(O);
        hc && i && n.ne && b.$AppendChild(O, n.ne);
        b.B(O, !i && n.Yb)
      }

      function x() {
        a.xc()
      }

      function y(b) {
        r = b;
        a.ob();
        a.xc()
      }
      a.xc = function() {
        var b = a.Cb();
        if (!D && !P && !r && s == f) {
          if (!b) {
            if (g && !i) {
              i = e;
              a.we(e);
              o.m(j.$EVT_SLIDESHOW_START, f, m, v, g, c)
            }
            w()
          }
          var k, p = j.$EVT_STATE_CHANGE;
          if (b != c)
            if (b == d) k = c;
            else if (b == h) k = d;
          else if (!b) k = h;
          else k = a.Zc();
          o.m(p, f, b, m, h, d, c);
          var l = u && (!F || G);
          if (b == c)(d != c && !(F & 12) || l) && n.Zf();
          else(l || b != d) && a.Od(k, x)
        }
      };
      a.ze = function() {
        d == c && d == a.Cb() && a.K(h)
      };
      a.jg = function() {
        C && C.ub == f && C.zb();
        var b = a.Cb();
        b < c && o.m(j.$EVT_STATE_CHANGE, f, -b - 1, m, h, d, c)
      };
      a.we = function(a) {
        p && b.kb(ib, a && p.Rc.$Outside ? "" : "hidden")
      };
      a.Jc = function(b, a) {
        if (i && a >= g) {
          i = k;
          w();
          n.oe();
          C.zb();
          o.m(j.$EVT_SLIDESHOW_END, f, m, v, g, c)
        }
        o.m(j.$EVT_PROGRESS_CHANGE, f, a, m, h, d, c)
      };
      a.ad = function(a) {
        if (a && !t) {
          t = a;
          a.$On($JssorPlayer$.Se, y)
        }
      };
      p && a.Kc(p);
      g = a.jb();
      a.Kc(q);
      h = g + q.qe;
      c = a.jb();
      d = u ? g + q.xe : c
    }

    function Mb(a, c, d) {
      b.u(a, c);
      b.v(a, d)
    }

    function dc(c, b) {
      var a = y > 0 ? y : hb,
        d = Bb * b * (a & 1),
        e = Cb * b * (a >> 1 & 1);
      Mb(c, d, e)
    }

    function Rb() {
      qb = P;
      Kb = A.Zc();
      H = x.ib()
    }

    function kc() {
      Rb();
      if (D || !G && F & 12) {
        A.ob();
        o.m(j.Ce)
      }
    }

    function ic(f) {
      if (!D && (G || !(F & 12)) && !A.$IsPlaying()) {
        var d = x.ib(),
          b = c.ceil(H);
        if (f && c.abs(I) >= a.$MinDragOffsetToSlide) {
          b = c.ceil(d);
          b += fb
        }
        if (!(E & 1)) b = c.min(r - v, c.max(b, 0));
        var e = c.abs(b - d);
        e = 1 - c.pow(1 - e, 5);
        if (!K && qb) A.Ze(Kb);
        else if (d == b) {
          ub.Yf();
          ub.pc()
        } else A.bc(d, b, e * Yb)
      }
    }

    function Ib(a) {
      !b.$AttributeEx(b.$EvtSrc(a), "nodrag") && b.$CancelEvent(a)
    }

    function wc(a) {
      cc(a, 1)
    }

    function cc(a, c) {
      a = b.ce(a);
      var i = b.$EvtSrc(a);
      if (!N && !b.$AttributeEx(i, "nodrag") && xc() && (!c || a.touches.length == 1)) {
        D = e;
        Ab = k;
        R = h;
        b.$AddEvent(g, c ? "touchmove" : "mousemove", Db);
        b.T();
        K = 0;
        kc();
        if (!qb) y = 0;
        if (c) {
          var f = a.touches[0];
          vb = f.clientX;
          wb = f.clientY
        } else {
          var d = b.be(a);
          vb = d.x;
          wb = d.y
        }
        I = 0;
        bb = 0;
        fb = 0;
        o.m(j.$EVT_DRAG_START, t(H), H, a)
      }
    }

    function Db(d) {
      if (D) {
        d = b.ce(d);
        var f;
        if (d.type != "mousemove") {
          var l = d.touches[0];
          f = {
            x: l.clientX,
            y: l.clientY
          }
        } else f = b.be(d);
        if (f) {
          var j = f.x - vb,
            k = f.y - wb;
          if (c.floor(H) != H) y = y || hb & N;
          if ((j || k) && !y) {
            if (N == 3)
              if (c.abs(k) > c.abs(j)) y = 2;
              else y = 1;
            else y = N;
            if (kb && y == 1 && c.abs(k) - c.abs(j) > 3) Ab = e
          }
          if (y) {
            var a = k,
              i = Cb;
            if (y == 1) {
              a = j;
              i = Bb
            }
            if (!(E & 1)) {
              if (a > 0) {
                var g = i * s,
                  h = a - g;
                if (h > 0) a = g + c.sqrt(h) * 5
              }
              if (a < 0) {
                var g = i * (r - v - s),
                  h = -a - g;
                if (h > 0) a = -g - c.sqrt(h) * 5
              }
            }
            if (I - bb < -2) fb = 0;
            else if (I - bb > 2) fb = -1;
            bb = I;
            I = a;
            tb = H - I / i / (Z || 1);
            if (I && y && !Ab) {
              b.$CancelEvent(d);
              if (!P) A.qf(tb);
              else A.vf(tb)
            }
          }
        }
      }
    }

    function mb() {
      uc();
      if (D) {
        D = k;
        b.T();
        b.Q(g, "mousemove", Db);
        b.Q(g, "touchmove", Db);
        K = I;
        K && u & 8 && (u = 0);
        A.ob();
        var a = x.ib();
        o.m(j.$EVT_DRAG_END, t(a), a, t(H), H);
        F & 12 && Rb();
        ic(e)
      }
    }

    function oc(c) {
      if (K) {
        b.$StopEvent(c);
        var a = b.$EvtSrc(c);
        while (a && w !== a) {
          a.tagName == "A" && b.$CancelEvent(c);
          try {
            a = a.parentNode
          } catch (d) {
            break
          }
        }
      } else u & 4 && (u = 0)
    }

    function Lb(a) {
      B[s];
      s = t(a);
      ub = B[s];
      Wb(a);
      return s
    }

    function Ic(b, c) {
      y = 0;
      Lb(b);
      var a = t(b);
      if (u & 2 && Xb > 0 && a == r - 1 || Xb < 0 && !a) u = 0;
      o.m(j.$EVT_PARK, a, c)
    }

    function Wb(a, c) {
      yb = a;
      b.$Each(S, function(b) {
        b.Oc(t(a), a, c)
      })
    }

    function xc() {
      var b = j.he || 0,
        a = Y;
      if (kb) a & 1 && (a &= 1);
      j.he |= a;
      return N = a & ~b
    }

    function uc() {
      if (N) {
        j.he &= ~Y;
        N = 0
      }
    }

    function bc() {
      var a = b.$CreateDiv();
      b.M(a, V);
      b.z(a, "absolute");
      return a
    }

    function t(a) {
      return (a % r + r) % r
    }

    function pb(b, d) {
      u & 8 && (u = 0);
      if (d)
        if (!E) {
          b = c.min(c.max(b + yb, 0), r - v);
          d = k
        } else if (E & 2) {
        b = t(b + yb);
        d = k
      }
      nb(b, a.$SlideDuration, d)
    }

    function zb() {
      b.$Each(S, function(a) {
        a.Nc(a.Sb.$ChanceToShow <= G)
      })
    }

    function mc() {
      if (!G) {
        G = 1;
        zb();
        if (!D) {
          F & 12 && ic();
          F & 3 && B[s] && B[s].pc()
        }
      }
    }

    function lc() {
      if (G) {
        G = 0;
        zb();
        D || !(F & 12) || kc()
      }
    }

    function nc() {
      V = {
        W: M,
        U: L,
        $Top: 0,
        $Left: 0
      };
      b.$Each(T, function(a) {
        b.M(a, V);
        b.z(a, "absolute");
        b.kb(a, "hidden");
        b.R(a)
      });
      b.M(cb, V)
    }

    function ac(b, a) {
      nb(b, a, e)
    }

    function nb(h, g, l) {
      if (Tb && (!D && (G || !(F & 12)) || a.$NaviQuitDrag)) {
        P = e;
        D = k;
        A.ob();
        if (g == f) g = Yb;
        var d = Eb.Cb(),
          b = h;
        if (l) {
          b = d + h;
          if (h > 0) b = c.ceil(b);
          else b = c.floor(b)
        }
        if (E & 2) b = t(b);
        if (!(E & 1)) b = c.max(0, c.min(b, r - v));
        var j = (b - d) % r;
        b = d + j;
        var i = d == b ? 0 : g * c.abs(j);
        i = c.min(i, g * v * 1.5);
        A.bc(d, b, i || 1)
      }
    }
    o.$PlayTo = nb;
    o.$GoTo = function(a) {
      x.K(Lb(a))
    };
    o.$Next = function() {
      ac(1)
    };
    o.$Prev = function() {
      ac(-1)
    };
    o.$Pause = function() {
      u = 0
    };
    o.$Play = function() {
      o.$AutoPlay(u || 1)
    };
    o.$SetSlideshowTransitions = function(b) {
      a.$SlideshowOptions.$Transitions = b
    };
    o.$SetCaptionTransitions = function(a) {
      J.$Transitions = a;
      J.Bc = b.T()
    };
    o.$SlidesCount = function() {
      return T.length
    };
    o.$CurrentIndex = function() {
      return s
    };
    o.$AutoPlay = function(a) {
      if (a == f) return a;
      if (a != u) {
        u = a;
        u && B[s] && B[s].pc()
      }
    };
    o.$IsDragging = function() {
      return D
    };
    o.$IsSliding = function() {
      return P
    };
    o.$IsMouseOver = function() {
      return !G
    };
    o.$LastDragSucceded = function() {
      return K
    };

    function X() {
      return b.$CssWidth(z || q)
    }

    function jb() {
      return b.$CssHeight(z || q)
    }
    o.$OriginalWidth = o.$GetOriginalWidth = X;
    o.$OriginalHeight = o.$GetOriginalHeight = jb;

    function Gb(c, d) {
      if (c == f) return b.$CssWidth(q);
      if (!z) {
        var a = b.$CreateDiv(g);
        b.nd(a, b.nd(q));
        b.$CssCssText(a, b.$CssCssText(q));
        b.eb(a, "block");
        b.z(a, "relative");
        b.v(a, 0);
        b.u(a, 0);
        b.kb(a, "visible");
        z = b.$CreateDiv(g);
        b.z(z, "absolute");
        b.v(z, 0);
        b.u(z, 0);
        b.$CssWidth(z, b.$CssWidth(q));
        b.$CssHeight(z, b.$CssHeight(q));
        b.ae(z, "0 0");
        b.$AppendChild(z, a);
        var i = b.$Children(q);
        b.$AppendChild(q, z);
        b.$Css(q, "backgroundImage", "");
        b.$Each(i, function(c) {
          b.$AppendChild(b.$AttributeEx(c, "noscale") ? q : a, c);
          b.$AttributeEx(c, "autocenter") && Nb.push(c)
        })
      }
      Z = c / (d ? b.$CssHeight : b.$CssWidth)(z);
      b.rf(z, Z);
      var h = d ? Z * X() : c,
        e = d ? c : Z * jb();
      b.$CssWidth(q, h);
      b.$CssHeight(q, e);
      b.$Each(Nb, function(a) {
        var c = b.Pb(b.$AttributeEx(a, "autocenter"));
        b.fg(a, c)
      })
    }
    o.$ScaleHeight = o.$GetScaleHeight = function(a) {
      if (a == f) return b.$CssHeight(q);
      Gb(a, e)
    };
    o.$ScaleWidth = o.$SetScaleWidth = o.$GetScaleWidth = Gb;
    o.ge = function(a) {
      var d = c.ceil(t(gb / fc)),
        b = t(a - s + d);
      if (b > v) {
        if (a - s > r / 2) a -= r;
        else if (a - s <= -r / 2) a += r
      } else a = s + b - d;
      return a
    };
    m.call(o);
    o.$Elmt = q = b.$GetElement(q);
    var a = b.p({
      $FillMode: 0,
      $LazyLoading: 1,
      $ArrowKeyNavigation: 1,
      $StartIndex: 0,
      $AutoPlay: 0,
      $Loop: 1,
      $HWA: e,
      $NaviQuitDrag: e,
      $AutoPlaySteps: 1,
      $AutoPlayInterval: 3e3,
      $PauseOnHover: 1,
      $SlideDuration: 500,
      $SlideEasing: d.$OutQuad,
      $MinDragOffsetToSlide: 20,
      $SlideSpacing: 0,
      $Cols: 1,
      $Align: 0,
      $UISearchMode: 1,
      $PlayOrientation: 1,
      $DragOrientation: 1
    }, jc);
    a.$HWA = a.$HWA && b.eg();
    if (a.$Idle != f) a.$AutoPlayInterval = a.$Idle;
    if (a.$ParkingPosition != f) a.$Align = a.$ParkingPosition;
    var hb = a.$PlayOrientation & 3,
      yc = (a.$PlayOrientation & 4) / -4 || 1,
      eb = a.$SlideshowOptions,
      J = b.p({
        $Class: p,
        $PlayInMode: 1,
        $PlayOutMode: 1,
        $HWA: a.$HWA
      }, a.$CaptionSliderOptions);
    J.$Transitions = J.$Transitions || J.$CaptionTransitions;
    var rb = a.$BulletNavigatorOptions,
      W = a.$ArrowNavigatorOptions,
      ab = a.$ThumbnailNavigatorOptions,
      Q = !a.$UISearchMode,
      z, w = b.$FindChild(q, "slides", Q),
      cb = b.$FindChild(q, "loading", Q) || b.$CreateDiv(g),
      Jb = b.$FindChild(q, "navigator", Q),
      gc = b.$FindChild(q, "arrowleft", Q),
      ec = b.$FindChild(q, "arrowright", Q),
      Hb = b.$FindChild(q, "thumbnavigator", Q),
      qc = b.$CssWidth(w),
      pc = b.$CssHeight(w),
      V, T = [],
      zc = b.$Children(w);
    b.$Each(zc, function(a) {
      a.tagName == "DIV" && !b.$AttributeEx(a, "u") && T.push(a);
      b.L(a, (b.L(a) || 0) + 1)
    });
    var s = -1,
      yb, ub, r = T.length,
      M = a.$SlideWidth || qc,
      L = a.$SlideHeight || pc,
      Zb = a.$SlideSpacing,
      Bb = M + Zb,
      Cb = L + Zb,
      fc = hb & 1 ? Bb : Cb,
      v = c.min(a.$Cols, r),
      ib, y, N, Ab, S = [],
      Sb, Ub, Qb, hc, Hc, u, Xb = a.$AutoPlaySteps,
      F = a.$PauseOnHover,
      rc = a.$AutoPlayInterval,
      Yb = a.$SlideDuration,
      sb, db, gb, Tb = v < r,
      E = Tb ? a.$Loop : 0,
      Y, K, G = 1,
      P, D, R, vb = 0,
      wb = 0,
      I, bb, fb, Eb, x, U, A, Vb = new tc,
      Z, Nb = [];
    if (r) {
      if (a.$HWA) Mb = function(a, c, d) {
        b.qb(a, {
          $TranslateX: c,
          $TranslateY: d
        })
      };
      u = a.$AutoPlay & 63;
      o.Sb = jc;
      nc();
      b.$Attribute(q, "jssor-slider", e);
      b.L(w, b.L(w) || 0);
      b.z(w, "absolute");
      ib = b.$CloneNode(w, e);
      b.jc(ib, w);
      if (eb) {
        hc = eb.$ShowLink;
        sb = eb.$Class;
        db = v == 1 && r > 1 && sb && (!b.$IsBrowserIE() || b.$BrowserVersion() >= 8)
      }
      gb = db || v >= r || !(E & 1) ? 0 : a.$Align;
      Y = (v > 1 || gb ? hb : -1) & a.$DragOrientation;
      var xb = w,
        B = [],
        C, O, Fb = b.$Device(),
        kb = Fb.Qe,
        H, qb, Kb, tb;
      Fb.re && b.$Css(xb, Fb.re, ([h, "pan-y", "pan-x", "none"])[Y] || "");
      U = new Ec;
      if (db) C = new sb(Vb, M, L, eb, kb);
      b.$AppendChild(ib, U.dc);
      b.kb(w, "hidden");
      O = bc();
      b.$Css(O, "backgroundColor", "#000");
      b.Jb(O, 0);
      b.jc(O, xb.firstChild, xb);
      for (var ob = 0; ob < T.length; ob++) {
        var Bc = T[ob],
          Dc = new Cc(Bc, ob);
        B.push(Dc)
      }
      b.R(cb);
      Eb = new Fc;
      A = new sc(Eb, U);
      b.$AddEvent(w, "click", oc, e);
      b.$AddEvent(q, "mouseout", b.Zb(mc, q));
      b.$AddEvent(q, "mouseover", b.Zb(lc, q));
      if (Y) {
        b.$AddEvent(w, "mousedown", cc);
        b.$AddEvent(w, "touchstart", wc);
        b.$AddEvent(w, "dragstart", Ib);
        b.$AddEvent(w, "selectstart", Ib);
        b.$AddEvent(g, "mouseup", mb);
        b.$AddEvent(g, "touchend", mb);
        b.$AddEvent(g, "touchcancel", mb);
        b.$AddEvent(i, "blur", mb)
      }
      F &= kb ? 10 : 5;
      if (Jb && rb) {
        Sb = new rb.$Class(Jb, rb, X(), jb());
        S.push(Sb)
      }
      if (W && gc && ec) {
        W.$Loop = E;
        W.$Cols = v;
        Ub = new W.$Class(gc, ec, W, X(), jb());
        S.push(Ub)
      }
      if (Hb && ab) {
        ab.$StartIndex = a.$StartIndex;
        Qb = new ab.$Class(Hb, ab);
        S.push(Qb)
      }
      b.$Each(S, function(a) {
        a.Pc(r, B, cb);
        a.$On(n.fc, pb)
      });
      b.$Css(q, "visibility", "visible");
      Gb(X());
      zb();
      a.$ArrowKeyNavigation && b.$AddEvent(g, "keydown", function(b) {
        if (b.keyCode == 37) pb(-a.$ArrowKeyNavigation, e);
        else b.keyCode == 39 && pb(a.$ArrowKeyNavigation, e)
      });
      var lb = a.$StartIndex;
      if (!(E & 1)) lb = c.max(0, c.min(lb, r - v));
      A.bc(lb, lb, 0)
    }
  };
  j.$EVT_CLICK = 21;
  j.$EVT_DRAG_START = 22;
  j.$EVT_DRAG_END = 23;
  j.$EVT_SWIPE_START = 24;
  j.$EVT_SWIPE_END = 25;
  j.$EVT_LOAD_START = 26;
  j.$EVT_LOAD_END = 27;
  j.Ce = 28;
  j.$EVT_POSITION_CHANGE = 202;
  j.$EVT_PARK = 203;
  j.$EVT_SLIDESHOW_START = 206;
  j.$EVT_SLIDESHOW_END = 207;
  j.$EVT_PROGRESS_CHANGE = 208;
  j.$EVT_STATE_CHANGE = 209;
  var n = {
    fc: 1
  };
  i.$JssorBulletNavigator$ = function(d, C) {
    var f = this;
    m.call(f);
    d = b.$GetElement(d);
    var s, A, z, r, l = 0,
      a, o, j, w, x, i, g, q, p, B = [],
      y = [];

    function v(a) {
      a != -1 && y[a].Hd(a == l)
    }

    function t(a) {
      f.m(n.fc, a * o)
    }
    f.$Elmt = d;
    f.Oc = function(a) {
      if (a != r) {
        var d = l,
          b = c.floor(a / o);
        l = b;
        r = a;
        v(d);
        v(b)
      }
    };
    f.Nc = function(a) {
      b.B(d, a)
    };
    var u;
    f.Pc = function(E) {
      if (!u) {
        s = c.ceil(E / o);
        l = 0;
        var n = q + w,
          r = p + x,
          m = c.ceil(s / j) - 1;
        A = q + n * (!i ? m : j - 1);
        z = p + r * (i ? m : j - 1);
        b.$CssWidth(d, A);
        b.$CssHeight(d, z);
        for (var f = 0; f < s; f++) {
          var C = b.Nf();
          b.$InnerText(C, f + 1);
          var k = b.Td(g, "numbertemplate", C, e);
          b.z(k, "absolute");
          var v = f % (m + 1);
          b.u(k, !i ? n * v : f % j * n);
          b.v(k, i ? r * v : c.floor(f / (m + 1)) * r);
          b.$AppendChild(d, k);
          B[f] = k;
          a.$ActionMode & 1 && b.$AddEvent(k, "click", b.$CreateCallback(h, t, f));
          a.$ActionMode & 2 && b.$AddEvent(k, "mouseover", b.Zb(b.$CreateCallback(h, t, f), k));
          y[f] = b.Rb(k)
        }
        u = e
      }
    };
    f.Sb = a = b.p({
      $SpacingX: 10,
      $SpacingY: 10,
      $Orientation: 1,
      $ActionMode: 1
    }, C);
    g = b.$FindChild(d, "prototype");
    q = b.$CssWidth(g);
    p = b.$CssHeight(g);
    b.wb(g, d);
    o = a.$Steps || 1;
    j = a.$Rows || 1;
    w = a.$SpacingX;
    x = a.$SpacingY;
    i = a.$Orientation - 1;
    a.$Scale == k && b.$Attribute(d, "noscale", e);
    a.$AutoCenter && b.$Attribute(d, "autocenter", a.$AutoCenter)
  };
  i.$JssorArrowNavigator$ = function(a, g, i) {
    var c = this;
    m.call(c);
    var r, d, f, j;
    b.$CssWidth(a);
    b.$CssHeight(a);
    var p, o;

    function l(a) {
      c.m(n.fc, a, e)
    }

    function t(c) {
      b.B(a, c);
      b.B(g, c)
    }

    function s() {
      p.$Enable(i.$Loop || d > 0);
      o.$Enable(i.$Loop || d < r - i.$Cols)
    }
    c.Oc = function(b, a, c) {
      if (c) d = a;
      else {
        d = b;
        s()
      }
    };
    c.Nc = t;
    var q;
    c.Pc = function(c) {
      r = c;
      d = 0;
      if (!q) {
        b.$AddEvent(a, "click", b.$CreateCallback(h, l, -j));
        b.$AddEvent(g, "click", b.$CreateCallback(h, l, j));
        p = b.Rb(a);
        o = b.Rb(g);
        q = e
      }
    };
    c.Sb = f = b.p({
      $Steps: 1
    }, i);
    j = f.$Steps;
    if (f.$Scale == k) {
      b.$Attribute(a, "noscale", e);
      b.$Attribute(g, "noscale", e)
    }
    if (f.$AutoCenter) {
      b.$Attribute(a, "autocenter", f.$AutoCenter);
      b.$Attribute(g, "autocenter", f.$AutoCenter)
    }
  };
  i.$JssorThumbnailNavigator$ = function(g, B) {
    var i = this,
      y, p, a, v = [],
      z, x, d, q, r, u, t, o, s, f, l;
    m.call(i);
    g = b.$GetElement(g);

    function A(o, f) {
      var g = this,
        c, m, k;

      function q() {
        m.Hd(p == f)
      }

      function j(e) {
        if (e || !s.$LastDragSucceded()) {
          var a = d - f % d,
            b = s.ge((f + a) / d - 1),
            c = b * d + d - a;
          i.m(n.fc, c)
        }
      }
      g.ub = f;
      g.td = q;
      k = o.Tf || o.Yb || b.$CreateDiv();
      g.dc = c = b.Td(l, "thumbnailtemplate", k, e);
      m = b.Rb(c);
      a.$ActionMode & 1 && b.$AddEvent(c, "click", b.$CreateCallback(h, j, 0));
      a.$ActionMode & 2 && b.$AddEvent(c, "mouseover", b.Zb(b.$CreateCallback(h, j, 1), c))
    }
    i.Oc = function(b, e, f) {
      var a = p;
      p = b;
      a != -1 && v[a].td();
      v[b].td();
      !f && s.$PlayTo(s.ge(c.floor(e / d)))
    };
    i.Nc = function(a) {
      b.B(g, a)
    };
    var w;
    i.Pc = function(F, D) {
      if (!w) {
        y = F;
        c.ceil(y / d);
        p = -1;
        o = c.min(o, D.length);
        var h = a.$Orientation & 1,
          m = u + (u + q) * (d - 1) * (1 - h),
          l = t + (t + r) * (d - 1) * h,
          B = m + (m + q) * (o - 1) * h,
          n = l + (l + r) * (o - 1) * (1 - h);
        b.z(f, "absolute");
        b.kb(f, "hidden");
        a.$AutoCenter & 1 && b.u(f, (z - B) / 2);
        a.$AutoCenter & 2 && b.v(f, (x - n) / 2);
        b.$CssWidth(f, B);
        b.$CssHeight(f, n);
        var i = [];
        b.$Each(D, function(l, g) {
          var j = new A(l, g),
            e = j.dc,
            a = c.floor(g / d),
            k = g % d;
          b.u(e, (u + q) * k * (1 - h));
          b.v(e, (t + r) * k * h);
          if (!i[a]) {
            i[a] = b.$CreateDiv();
            b.$AppendChild(f, i[a])
          }
          b.$AppendChild(i[a], e);
          v.push(j)
        });
        var E = b.p({
          $AutoPlay: 0,
          $NaviQuitDrag: k,
          $SlideWidth: m,
          $SlideHeight: l,
          $SlideSpacing: q * h + r * (1 - h),
          $MinDragOffsetToSlide: 12,
          $SlideDuration: 200,
          $PauseOnHover: 1,
          $PlayOrientation: a.$Orientation,
          $DragOrientation: a.$NoDrag || a.$DisableDrag ? 0 : a.$Orientation
        }, a);
        s = new j(g, E);
        w = e
      }
    };
    i.Sb = a = b.p({
      $SpacingX: 0,
      $SpacingY: 0,
      $Cols: 1,
      $Orientation: 1,
      $AutoCenter: 3,
      $ActionMode: 1
    }, B);
    z = b.$CssWidth(g);
    x = b.$CssHeight(g);
    f = b.$FindChild(g, "slides", e);
    l = b.$FindChild(f, "prototype");
    u = b.$CssWidth(l);
    t = b.$CssHeight(l);
    b.wb(l, f);
    d = a.$Rows || 1;
    q = a.$SpacingX;
    r = a.$SpacingY;
    o = a.$Cols;
    a.$Scale == k && b.$Attribute(g, "noscale", e)
  };

  function p(e, d, c) {
    var a = this;
    l.call(a, 0, c);
    a.fd = b.cd;
    a.qe = 0;
    a.xe = c
  }
  i.$JssorCaptionSlideo$ = function(v, j, u, E) {
    var a = this,
      w, o = {},
      p = j.$Transitions,
      s = j.$Controls,
      m = new l(0, 0),
      q = [],
      g = [],
      D = E,
      f = D ? 1e8 : 0;
    l.call(a, 0, 0);

    function r(d, c) {
      var a = {};
      b.$Each(d, function(d, f) {
        var e = o[f];
        if (e) {
          if (b.Rd(d)) d = r(d, c || f == "e");
          else if (c)
            if (b.hc(d)) d = w[d];
          a[e] = d
        }
      });
      return a
    }

    function t(d, e) {
      var a = [],
        c = b.$Children(d);
      b.$Each(c, function(c) {
        var h = b.$AttributeEx(c, "u") == "caption";
        if (h) {
          var d = b.$AttributeEx(c, "t"),
            g = p[b.Pb(d)] || p[d],
            f = {
              $Elmt: c,
              Rc: g
            };
          a.push(f)
        }
        a = a.concat(t(c, e + 1))
      });
      return a
    }

    function n(c, e) {
      var a = q[c];
      if (a == h) {
        a = q[c] = {
          X: c,
          Lc: [],
          id: []
        };
        var d = 0;
        !b.$Each(g, function(a, b) {
          d = b;
          return a.X > c
        }) && d++;
        g.splice(d, 0, a)
      }
      return a
    }

    function z(t, u, g) {
      var a, d;
      if (s) {
        var o = b.$AttributeEx(t, "c");
        if (o) {
          var m = s[b.Pb(o)];
          if (m) {
            a = n(m.r, 0);
            a.Je = m.e || 0
          }
        }
      }
      b.$Each(u, function(i) {
        var h = b.p(e, {}, r(i)),
          j = b.Dc(h.$Easing);
        delete h.$Easing;
        if (h.$Left) {
          h.F = h.$Left;
          j.F = j.$Left;
          delete h.$Left
        }
        if (h.$Top) {
          h.H = h.$Top;
          j.H = j.$Top;
          delete h.$Top
        }
        var o = {
            $Easing: j,
            $OriginalWidth: g.W,
            $OriginalHeight: g.U
          },
          k = new l(i.b, i.d, o, t, g, h);
        f = c.max(f, i.b + i.d);
        if (a) {
          if (!d) d = new l(i.b, 0);
          d.N(k)
        } else {
          var m = n(i.b, i.b + i.d);
          m.Lc.push(k)
        }
        g = b.Xe(g, h)
      });
      if (a && d) {
        d.Ye();
        var i = d,
          k, j = d.Nb(),
          p = d.jb(),
          q = c.max(p, a.Je);
        if (a.X < p) {
          if (a.X > j) {
            i = new l(j, a.X - j);
            i.N(d, e)
          } else i = h;
          k = new l(a.X, q - j, {
            Ec: q - a.X,
            ye: e
          });
          k.N(d, e)
        }
        i && a.Lc.push(i);
        k && a.id.push(k)
      }
      return g
    }

    function y(a) {
      b.$Each(a, function(f) {
        var a = f.$Elmt,
          e = b.$CssWidth(a),
          d = b.$CssHeight(a),
          c = {
            $Left: b.u(a),
            $Top: b.v(a),
            F: 0,
            H: 0,
            $Opacity: 1,
            $ZIndex: b.L(a) || 0,
            $Rotate: 0,
            $RotateX: 0,
            $RotateY: 0,
            $ScaleX: 1,
            $ScaleY: 1,
            $TranslateX: 0,
            $TranslateY: 0,
            $TranslateZ: 0,
            $SkewX: 0,
            $SkewY: 0,
            W: e,
            U: d,
            $Clip: {
              $Top: 0,
              $Right: e,
              $Bottom: d,
              $Left: 0
            }
          };
        c.Ad = c.$Left;
        c.Bd = c.$Top;
        z(a, f.Rc, c)
      })
    }

    function B(f, d, g) {
      var c = f.b - d;
      if (c) {
        var b = new l(d, c);
        b.N(m, e);
        b.$Shift(g);
        a.N(b)
      }
      a.pd(f.d);
      return c
    }

    function A(e) {
      var c = m.Nb(),
        d = 0;
      b.$Each(e, function(e, f) {
        e = b.p({
          d: u
        }, e);
        B(e, c, d);
        c = e.b;
        d += e.d;
        if (!f || e.t == 2) {
          a.qe = c;
          a.xe = c + e.d
        }
      })
    }

    function i(k, d, e) {
      var g = d.length;
      if (g > 4)
        for (var m = c.ceil(g / 4), a = 0; a < m; a++) {
          var h = d.slice(a * 4, c.min(a * 4 + 4, g)),
            j = new l(h[0].X, 0);
          i(j, h, e);
          k.N(j)
        } else b.$Each(d, function(a) {
          b.$Each(e ? a.id : a.Lc, function(a) {
            e && a.pd(f - a.jb());
            k.N(a)
          })
        })
    }
    a.fd = function() {
      a.K(-1, e)
    };
    w = [d.$Linear, d.$Swing, d.$InQuad, d.$OutQuad, d.$InOutQuad, d.$InCubic, d.$OutCubic, d.$InOutCubic, d.$InQuart, d.$OutQuart, d.$InOutQuart, d.$InQuint, d.$OutQuint, d.$InOutQuint, d.$InSine, d.$OutSine, d.$InOutSine, d.$InExpo, d.$OutExpo, d.$InOutExpo, d.$InCirc, d.$OutCirc, d.$InOutCirc, d.$InElastic, d.$OutElastic, d.$InOutElastic, d.$InBack, d.$OutBack, d.$InOutBack, d.$InBounce, d.$OutBounce, d.$InOutBounce, d.$Early, d.$Late];
    var C = {
      $Top: "y",
      $Left: "x",
      $Bottom: "m",
      $Right: "t",
      $Rotate: "r",
      $RotateX: "rX",
      $RotateY: "rY",
      $ScaleX: "sX",
      $ScaleY: "sY",
      $TranslateX: "tX",
      $TranslateY: "tY",
      $TranslateZ: "tZ",
      $SkewX: "kX",
      $SkewY: "kY",
      $Opacity: "o",
      $Easing: "e",
      $ZIndex: "i",
      $Clip: "c"
    };
    b.$Each(C, function(b, a) {
      o[b] = a
    });
    y(t(v, 1));
    i(m, g);
    var x = j.$Breaks || [],
      k = [].concat(x[b.Pb(b.$AttributeEx(v, "b"))] || []);
    k.push({
      b: f,
      d: k.length ? 0 : u
    });
    A(k);
    f = c.max(f, a.jb());
    i(a, g, e);
    a.K(-1)
  }
})(window, document, Math, null, true, false)

jssor_1_slider_init = function() {

  var jssor_1_options = {
    $AutoPlay: 1,
    $Idle: 0,
    $AutoPlaySteps: 4,
    $SlideDuration: 6000,
    $SlideEasing: $Jease$.$Linear,
    $PauseOnHover: 4,
    $SlideWidth: 250,
    $Cols: 12
  };

  var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

  /*responsive code begin*/
  /*remove responsive code if you don't want the slider scales while window resizing*/
  function ScaleSlider() {
    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
    if (refSize) {
      refSize = Math.min(refSize, 1390);
      jssor_1_slider.$ScaleWidth(refSize);
    } else {
      window.setTimeout(ScaleSlider, 30);
    }
  }
  ScaleSlider();
  $Jssor$.$AddEvent(window, "load", ScaleSlider);
  $Jssor$.$AddEvent(window, "resize", ScaleSlider);
  $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
  /*responsive code end*/
};
jssor_1_slider_init();