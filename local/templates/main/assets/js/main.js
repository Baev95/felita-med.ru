Fancybox.bind("[data-fancybox]", {});
let animationItems = document.querySelectorAll(".animation-item");
if (0 < animationItems.length) {
    function onEntry(e) {
        e.forEach((e => {
            e.isIntersecting && e.target.classList.add("animation-active")
        }))
    }
    let e = new IntersectionObserver(onEntry, {
        threshold: [.5]
    });
    for (let t of animationItems) e.observe(t)
}
let scrollWidthFunc = () => {
    var e = window.innerWidth - document.body.clientWidth;
    document.querySelector("html").style.paddingRight = e + "px", document.querySelector("header").style.paddingRight = e + "px"
},
    scrollTop = document.querySelector(".scroll-top"),
    articleNavigation = (scrollTop && scrollTop.addEventListener("click", (() => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    })), ["load", "resize"].forEach((e => {
        window.addEventListener(e, (function () {
            let e = header.clientHeight,
                t = header.querySelector(".header__plashka"),
                n = header.querySelector(".header__top");
            var o, l;
            t && (o = t.offsetHeight, l = n.offsetHeight), window.onscroll = function (a) {
                window.scrollY > e ? t.classList.contains("hide") || (t.classList.add("hide"), t.style.height = "0px", t.style.opacity = "0", t.style.overflow = "hidden", 1260 < window.innerWidth && (n.classList.add("hide"), n.style.height = "0px", n.style.opacity = "0", n.style.overflow = "hidden")) : (t.style.height = o + "px", t.classList.remove("hide"), t.style.opacity = "1", n.style.height = l + "px", n.classList.remove("hide"), n.style.opacity = "1", n.style.overflow = "visible")
            }
        }))
    })), document.addEventListener("DOMContentLoaded", (function () {
        let e = document.querySelector(".burger__menu");
        if (e) {
            let N = document.querySelector(".header__menu"),
                D = document.querySelector(".header"),
                F = document.querySelector(".header__plashka");
            e.addEventListener("click", (() => {
                e.classList.contains("burger__menu--active") ? (F && (F.style.display = "block"), document.body.classList.remove("burger-lock")) : (F && (F.style.display = "none"), document.body.classList.add("burger-lock")), N.classList.toggle("header__menu--active"), e.classList.toggle("burger__menu--active"), D.classList.toggle("header--active"), document.querySelector("html").classList.toggle("burger-lock")
            }))
        }
        var t = document.querySelectorAll(".header__discount_close");
        let n = document.querySelector("main"),
            o = (t && t.forEach((e => {
                let t = e.closest(".header__discount");
                e.addEventListener("click", (function () {
                    t.classList.add("hidden"), n.classList.add("shifted")
                }))
            })), document.querySelectorAll(".hide-item>button"));

        function l(e) {
            document.body.classList.remove("lock"), document.querySelector("html").classList.remove("burger-lock"), document.querySelector("html").removeAttribute("style"), document.querySelector("header").removeAttribute("style"), e.closest(".hide-item").classList.remove("hide-item--active")
        }

        function a() {
            requestAnimationFrame((() => {
                document.querySelectorAll(".header__submenu_more-btn") && document.querySelectorAll(".header__submenu_more-btn").forEach((e => {
                    e.previousElementSibling.scrollHeight <= 140 ? e.style.display = "none" : e.style.display = "block"
                }))
            }))
        }
        o.forEach((e => {
            e.addEventListener("click", (t => {
                document.querySelector("html").addEventListener("click", (function (t) {
                    t.target.closest(".header__nav_list") || l(e)
                })), e.closest(".hide-item").classList.contains("hide-item--active") ? l(e) : (o.forEach((e => e.closest(".hide-item").classList.remove("hide-item--active"))), e.closest(".hide-item").classList.add("hide-item--active"), scrollWidthFunc(), document.body.classList.add("lock"), document.querySelector("html").classList.add("burger-lock"))
            }))
        })), document.querySelector(".hide-item_service").addEventListener("click", (e => {
            e && a()
        })), document.querySelectorAll(".header__submenu_more-btn").forEach((e => {
            e && e.addEventListener("click", (function (e) {
                e.stopPropagation(), (e = this.previousElementSibling) && e.classList.contains("header__submenu_tab-content_item") && (e.classList.toggle("open"), e.classList.contains("open") ? this.textContent = "Скрыть" : this.textContent = "Еще")
            }))
        }));
        let c = document.querySelectorAll(".header__submenu_tab-btn"),
            r = document.querySelectorAll(".header__submenu_tab-content");
        for (let O = 0; O < c.length; O++) c[O].style.order = 2 * O + 1;
        for (let R = 0; R < r.length; R++) r[R].style.order = 2 * R + 2;
        if (0 < c.length)
            for (let P = 0; P < c.length; P++) c[P].addEventListener("click", (() => {
                c[P].classList.contains("active") || (r.forEach((e => {
                    e.classList.remove("active")
                })), c.forEach((e => {
                    e.classList.remove("active")
                })), c[P].classList.add("active"), r[P].classList.add("active"), a())
            }));
        0 < c.length && c[0].click();
        var i = document.querySelectorAll(".tabs");
        for (let U = 0; U < i.length; U++) {
            let W = i[U].querySelectorAll(".tab-btn"),
                z = i[U].querySelectorAll(".tab-content");
            for (let $ = 0; $ < W.length; $++) W[$].style.order = 2 * $ + 1;
            for (let J = 0; J < z.length; J++) W[J].style.order = 2 * J + 2;
            if (0 < W.length)
                for (let Y = 0; Y < W.length; Y++) W[Y].addEventListener("click", (() => {
                    W[Y].classList.contains("active") || (z.forEach((e => {
                        e.classList.remove("active")
                    })), W.forEach((e => {
                        e.classList.remove("active")
                    })), W[Y].classList.add("active"), z[Y].classList.add("active")), w()
                }));
            0 < W.length && W[0].click()
        }
        let s = document.querySelector(".stock-date-js");
        if (t = document.querySelector(".stock-future-js"), s && t) {
            function d(e) {
                e -= (new Date).getTime();
                var t = Math.floor(e / 864e5),
                    n = Math.floor(e % 864e5 / 36e5),
                    o = Math.floor(e % 36e5 / 6e4);
                e = Math.floor(e % 6e4 / 1e3);
                s.innerHTML = t + "д: " + n + "ч: " + o + " мин: " + e + " сек "
            }
            var u = ((L = new Date).setDate(L.getDate() + 5), ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]),
                m = ["января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря"],
                y = L.getMonth();
            u = u[y];
            t.innerHTML = L.getDate() + " " + m[y];
            let Z = new Date(u + " " + L.getDate() + ", " + L.getFullYear() + " 00:00:00").getTime();
            d(Z), setInterval((function () {
                d(Z)
            }), 1e3)
        }

        function h(e) {
            e.classList.remove("open"), setTimeout((() => {
                e.classList.contains("open") || e.classList.remove("active")
            }), 400), document.body.classList.remove("lock"), document.querySelector("html").style.paddingRight = 0, document.querySelector("html").classList.remove("lock"), document.querySelector("header").removeAttribute("style")
        }
        t = document.querySelectorAll(".popup-btn");
        let p, v = document.querySelectorAll(".popup"),
            g = document.querySelector(".original-title").innerHTML;

        function f() {
            var e;
            document.querySelector('[src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"]') ? _() : ((e = document.createElement("script")).type = "text/javascript", e.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU", e.onload = _, document.head.appendChild(e))
        }

        function _() {
            var e = document.getElementById("map-placeholder"),
                t = document.getElementById("map").dataset.coordinates,
                n = document.getElementById("map").dataset.city;
            e && e.remove();
            const o = t.split(",").map(Number);
            e && e.remove(), ymaps.ready((function () {
                var e = new ymaps.Map("map", {
                    center: o,
                    zoom: 13,
                    controls: []
                }),
                    t = new ymaps.Placemark(o, {
                        hintContent: n,
                        balloonContent: n
                    }, {
                        iconLayout: "default#image",
                        iconImageHref: "/local/templates/main/images/icons/map-pin.png",
                        iconImageSize: [21, 26],
                        iconImageOffset: [-15, -31]
                    });
                e.geoObjects.add(t), e.behaviors.disable(["scrollZoom"])
            }))
        }
        document.querySelectorAll(".close-popup-btn").forEach((function (e) {
            e.addEventListener("click", (function (e) {
                h(e.target.closest(".popup"))
            }))
        })), t.forEach((function (e) {
            e.addEventListener("click", (function (t) {
                t.preventDefault();
                var n, o = t.currentTarget.dataset.path;
                let l = document.querySelector(`[data-target="${o}"]`);
                l && (v.forEach((function (e) {
                    h(e), e.addEventListener("click", (function (e) {
                        e.target.closest(".popup__content") || h(e.target.closest(".popup"))
                    }))
                })), l.classList.add("active"), setTimeout((() => {
                    l.classList.add("open")
                }), 10), "popup-change" == l.getAttribute("data-target") && (o = l.querySelector(".original-title"), e.classList.contains("change-item__btn") ? e.classList.contains("doctor__btn-js") ? (n = e.closest(".change-item").querySelector(".change-item__title"), o.innerHTML = "Записаться на приём к врачу: " + n.innerHTML) : e.classList.contains("change-item__btn_current") ? o.textContent = e.textContent : (n = e.closest(".change-item").querySelector(".change-item__title"), o.innerHTML = n.innerHTML) : o.innerHTML = g), "popup-jobs" == l.getAttribute("data-target") && (n = e.closest(".jobs__items"), o = l.querySelector(".jobs__inner_original")) && n.querySelector(".jobs__inner") && (o.innerHTML = n.querySelector(".jobs__inner").innerHTML), t.stopPropagation(), scrollWidthFunc(), document.querySelector("html").classList.add("lock"))
            }))
        })), (m = document.getElementById("map-placeholder")) && (m.addEventListener("mouseenter", f, {
            once: !0
        }), m.addEventListener("click", f, {
            once: !0
        })), document.getElementById("map-filials") && (document.querySelector('[src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"]') || ((y = document.createElement("script")).type = "text/javascript", y.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU", document.head.appendChild(y)), setTimeout((function () {
            ymaps.ready((function () {
                var e = document.querySelector("#map-filials"),
                    t = (n = document.querySelector(".filter-card")).getAttribute("data-lat"),
                    n = n.getAttribute("data-lng");
                e && (e = new ymaps.Map("map-filials", {
                    center: [t, n],
                    zoom: 13
                }), p = new ymaps.Placemark([t, n], {
                    hintContent: "Ростов-на-Дону, ул. Красноармейская, д. 227",
                    balloonContent: "Ростов-на-Дону, ул. Красноармейская, д. 227"
                }, {
                    iconLayout: "default#image",
                    iconImageHref: "assets/img/icons/map-pin.png",
                    iconImageSize: [21, 26],
                    iconImageOffset: [-15, -31]
                }), e.geoObjects.add(p), e.behaviors.disable(["scrollZoom"]))
            }))
        }), 500)), document.getElementById("select-filials") && document.getElementById("select-filials").addEventListener("change", (function () {
            ! function (e) {
                var t;
                (e = (e = document.querySelector(`.filter-card[data-filials="${e}"]`)) ? {
                    lat: e.getAttribute("data-lat"),
                    lng: e.getAttribute("data-lng")
                } : (console.error("Филиал с указанным id не найден"), null)) && (t = e.lat, e = e.lng, p ? p.geometry.setCoordinates([parseFloat(t), parseFloat(e)]) : (p = new ymaps.Placemark([parseFloat(t), parseFloat(e)], {}, {
                    preset: "islands#icon",
                    iconColor: "#0095b6"
                }), map.geoObjects.add(p)))
            }(this.value)
        }));
        var L, b = (0 < (L = ((u = document.querySelector(".popup-cookie__btn")) && u.addEventListener("click", (() => {
            document.querySelector(".popup-cookie").style.display = "none"
        })), document.querySelectorAll("input[type=search]"))).length && L.forEach((e => {
            let t = e.closest(".search-wrapper");
            if (t) {
                let n = t.querySelector(".popup__search-result"),
                    o = t.querySelector(".popup__search_wrap"),
                    l = t.querySelector(".popup__search"),
                    a = n.querySelector(".no-results-message");
                e.addEventListener("input", (function () {
                    let c = e.value.toUpperCase();
                    var r = t.querySelectorAll(".search-list");
                    let i = 0;
                    r.forEach((e => {
                        var t = e.getElementsByTagName("li");
                        for (let e = 0; e < t.length; e++) - 1 < t[e].querySelector(".search-name").innerHTML.toUpperCase().indexOf(c) ? (t[e].classList.remove("none"), i++) : t[e].classList.add("none")
                    })), a.classList.toggle("none", 0 < i), "" === e.value.trim() ? (n.classList.add("none"), l.classList.remove("none"), o && o.classList.add("none")) : (n.classList.remove("none"), l.classList.add("none"), o && o.classList.remove("none"))
                })), document.addEventListener("click", (e => {
                    t.contains(e.target) || (n.classList.add("none"), o && o.classList.add("none"))
                }))
            }
        })), document.getElementsByClassName("accordion"));
        for (let G = 0; G < b.length; G++) b[G] && b[G].addEventListener("click", (function () {
            var e, t = this.querySelector(".accordion__content") || this.parentElement.querySelector(".accordion__content");
            t.classList.contains("accordion__content--active") ? (t.classList.remove("accordion__content--active"), this.classList.remove("accordion--active"), t.style.maxHeight = "0") : (t.classList.add("accordion__content--active"), this.classList.add("accordion--active"), e = t.scrollHeight, t.style.maxHeight = e + "px")
        }));

        function S(e, t, n) {
            let o = Array.from(document.querySelectorAll(t)).map((e => Array.from(e.querySelectorAll('input[type="checkbox"]:checked')).map((e => e.id))));
            document.querySelectorAll(e).forEach((function (e) {
                let t = e.dataset.categories ? e.dataset.categories.split(" ") : [];
                var n = o.every((e => 0 === e.length || e.some((e => t.includes(e)))));
                e.style.display = n ? "" : "none"
            })), t = document.querySelectorAll(e + ':not([style*="display: none"])').length, (e = document.querySelector(n)) && (e.textContent = t), j()
        }
        document.querySelectorAll(".tab__btn").forEach((e => {
            e && e.addEventListener("click", (function (e) {
                var t, n, o, l;
                l = (t = this).closest(".tab"), t.classList.contains("active") || (n = t.dataset.id, n = l.querySelectorAll(`.tabcontent[data-id="${n}"]`), (o = l.querySelector(".active")) && o.classList.remove("active"), l.querySelectorAll(".active").forEach((e => e.classList.remove("active"))), t.classList.add("active"), n.forEach((e => e.classList.add("active")))), w()
            }))
        })), document.querySelectorAll(".tab__btns-acc").forEach((e => {
            e && e.querySelectorAll(".tab__btn-acc").forEach((t => {
                t && t.addEventListener("click", (() => {
                    e.classList.toggle("acc-active")
                }))
            }))
        })), document.querySelectorAll('.sort__item input[type="checkbox"]').forEach((function (e) {
            e.addEventListener("change", (function () {
                S(".sort__card", ".sort__block", ".sort__quantity span")
            }))
        })), S(".sort__card", ".sort_block", ".sort__quantity span"), document.querySelectorAll("[data-filter-block]").forEach((e => {
            let t = e.querySelectorAll(".filter-select"),
                n = e.querySelectorAll(".filter-card"),
                o = e.querySelector(".quantity span");

            function l() {
                let e = 0;
                n.forEach((n => {
                    let o = !0;
                    t.forEach((e => {
                        var t = e.getAttribute("data-filter-type");
                        e = e.value, t = n.getAttribute("data-" + t);
                        "all" !== e && e !== t && (o = !1)
                    })), n.style.display = o ? "" : "none", o && e++
                })), o && (o.textContent = e)
            }
            t.forEach((e => {
                e.addEventListener("change", l)
            })), l()
        }));
        let E = document.getElementById("high-rating"),
            q = document.getElementById("low-rating"),
            A = document.querySelectorAll(".page-reviews__card");

        function k() {
            A.forEach((e => {
                var t = e.querySelectorAll(".page-reviews__card_star-active").length;
                E.checked && 4 <= t || q.checked && t <= 3 || !E.checked && !q.checked ? e.style.display = "" : e.style.display = "none"
            })), w()
        }

        function w() {
            var e = document.querySelectorAll(".quantity-card"),
                t = document.querySelector(".quantity span");
            if (t) {
                let n = 0;
                e.forEach((e => {
                    null !== e.offsetParent && n++
                })), t.textContent = n
            }
        }
        E && E.addEventListener("change", k), q && q.addEventListener("change", k), document.getElementById("reviews-new") && document.getElementById("reviews-new").addEventListener("change", (function () {
            var e = document.querySelectorAll(".page-reviews__card");
            let t = this.checked;
            e.forEach((e => {
                var n = (e => {
                    var [e, t, n] = e.split(" "), t = {
                        "января": 0,
                        "февраля": 1,
                        "марта": 2,
                        "апреля": 3,
                        "мая": 4,
                        "июня": 5,
                        "июля": 6,
                        "августа": 7,
                        "сентября": 8,
                        "октября": 9,
                        "ноября": 10,
                        "декабря": 11
                    }[t.toLowerCase()];
                    return new Date(n, t, parseInt(e))
                })(e.querySelector(".page-reviews__card_publication span").textContent.trim());
                n = (new Date - n) / 864e5;
                e.style.display = t && 30 < n ? "none" : "block"
            })), w()
        })), setTimeout(w, 100), (t = document.getElementById("searchInput")) && t.addEventListener("input", (function () {
            let e = this.value.toLowerCase();
            document.querySelectorAll(".search-page-item").forEach((function (t) {
                t.querySelector(".search-page-name").textContent.toLowerCase().includes(e) ? t.style.display = "" : t.style.display = "none"
            })), w(), j()
        })), document.querySelectorAll(".btn-more").forEach((e => {
            if (e) {
                let t = e.previousElementSibling;
                if (t.scrollHeight <= t.clientHeight) e.style.display = "none";
                else {
                    let n = e.innerHTML;
                    e.addEventListener("click", (function () {
                        t.style.maxHeight, this.classList.toggle("active"), t.style.maxHeight ? (t.style.maxHeight = null, this.textContent = n) : (t.style.maxHeight = t.scrollHeight + "px", this.textContent = "Свернуть")
                    }))
                }
            }
        })), document.querySelectorAll(".footer__nav_acc").forEach((e => {
            e && e.addEventListener("click", (function () {
                e.nextElementSibling.classList.toggle("active"), this.classList.toggle("active")
            }))
        })), document.querySelectorAll(".is-scroll-up").forEach((e => {
            e && e.addEventListener("click", (function () {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            }))
        }));
        let x = new Set,
            C = new Set;

        function H(e, t) {
            let n = document.getElementById(e);
            n && (n.innerHTML = '<option value="all" selected>Выбрать</option>', t.forEach((e => {
                var t = document.createElement("option");
                t.value = e, t.textContent = e, n.appendChild(t)
            })))
        }
        document.querySelectorAll(".filter-review-card").forEach((e => {
            var t = e.querySelector(".select_service span");
            e = e.querySelector(".select_doctor span");
            t && (t = t.textContent.trim(), x.add(t)), e && (t = e.textContent.trim(), C.add(t))
        }));
        let I = document.getElementById("reviews-service"),
            T = document.getElementById("reviews-doctor");

        function M() {
            let e = I.value,
                t = T.value;
            document.querySelectorAll(".filter-review-card").forEach((n => {
                var o = n.querySelector(".select_service span"),
                    l = n.querySelector(".select_doctor span");
                o && l && (o = o.textContent.trim(), o = "all" === e || o === e, l = l.textContent.trim(), l = "all" === t || l === t, n.style.display = o && l ? "block" : "none", w())
            }))
        }
        if (H("reviews-service", Array.from(x)), H("reviews-doctor", Array.from(C)), I && I.addEventListener("change", M), T && T.addEventListener("change", M), m = document.querySelector(".jobs-3-js")) {
            y = m.querySelectorAll(".jobs__item_name");
            let K = m.querySelector(".jobs__tab_btns"),
                Q = m.querySelectorAll(".jobs__item");
            y.forEach(((e, t) => {
                let n = document.createElement("button");
                n.className = "jobs__tab_btn", n.textContent = e.textContent, 0 === t && n.classList.add("tab-active"), n && n.addEventListener("click", (() => {
                    document.querySelectorAll(".jobs__tab_btn").forEach((e => e.classList.remove("tab-active"))), n.classList.add("tab-active"), Q.forEach((e => e.style.display = "none")), Q.forEach((e => {
                        e.querySelector(".jobs__item_name").textContent === n.textContent && (e.style.display = "block")
                    }))
                })), K.appendChild(n)
            })), Q && (Q.forEach((e => e.style.display = "none")), Q[0]) && (Q[0].style.display = "block")
        }
        document.querySelectorAll(".calculator__slider").forEach((e => {
            let t = e.querySelector(".calculator-range"),
                n = e.querySelector(".calculator-output");

            function o() {
                var e;
                n.innerHTML = t.value + " " + ((e = t.value) % 10 == 1 && e % 100 != 11 ? "год" : [2, 3, 4].includes(e % 10) && ![12, 13, 14].includes(e % 100) ? "года" : "лет")
            }
            o(), t.oninput = o
        })), u = document.querySelectorAll(".medicament__block");
        let B = document.querySelector(".medicament__letters");

        function j() {
            var e = document.querySelectorAll(".medicament__block");
            e && e.forEach((e => {
                var t = e.querySelector("ul");
                t = Array.from(t.children).some((e => "none" !== e.style.display));
                e.style.display = t ? "" : "none"
            }))
        }
        u.forEach((e => {
            var t = e.querySelector("p").textContent.trim(),
                n = document.createElement("button");
            n.textContent = t, n.classList.add("letter-button"), n.addEventListener("click", (() => {
                var t = document.getElementById("header").offsetHeight - document.querySelector(".header__plashka").offsetHeight + 10;
                t = e.getBoundingClientRect().top + window.scrollY - t;
                window.scrollTo({
                    top: t,
                    behavior: "smooth"
                })
            })), B.appendChild(n)
        })), j()
    })), document.querySelector(".navigation"));
if (articleNavigation) {
    let n = document.querySelectorAll(".article h1, .article h2, .article h3, .article h4, .article h5");
    if (0 < n.length) {
        for (let o = 0; o < n.length; o += 1) {
            let l = n[o],
                a = l.textContent,
                c = document.querySelector(".navigation__list"),
                r = document.createElement("li"),
                i = document.createElement("a");
            "H1" == l.tagName && r.classList.add("nav-title-h1"), r.classList.add("navigation__item"), "H2" == l.tagName ? r.classList.add("nav-title-h2") : "H3" == l.tagName ? r.classList.add("nav-title-h3") : "H4" == l.tagName ? r.classList.add("nav-title-h4") : "H5" == l.tagName ? r.classList.add("nav-title-h5") : "H6" == l.tagName && r.classList.add("nav-title-h6"), i.classList.add("navigation__link"), l.setAttribute("id", "" + o), i.setAttribute("href", "$" + o), i.textContent = " " + a, r.append(i), c.append(r)
        }
        document.querySelectorAll('a[href^="$"').forEach((e => {
            e.addEventListener("click", (function (e) {
                e.preventDefault(), e = this.getAttribute("href").substring(1), e = document.getElementById(e).getBoundingClientRect().top, window.scrollBy({
                    top: e - 280,
                    behavior: "smooth"
                })
            }))
        }))
    } else articleNavigation.querySelector(".navigation") && articleNavigation.querySelector(".navigation").remove()
}
document.addEventListener("DOMContentLoaded", (() => {
    document.querySelectorAll(".nav-title-h2").forEach(((e, t) => {
        if (!e.closest(".navigation-4")) {
            let o = e.nextElementSibling;
            var n = 0 === t;
            for (n && e.classList.add("active"); o && !o.classList.contains("nav-title-h2");) o.style.display = n ? "block" : "none", o = o.nextElementSibling;
            e.addEventListener("click", (() => {
                let t = e.nextElementSibling;
                for (var n = e.classList.toggle("active"); t && !t.classList.contains("nav-title-h2");) t.style.display = n ? "block" : "none", t = t.nextElementSibling
            }))
        }
    }))

















}));





(function () {
    function readtime(selector, options) {
        const defaults = {
            format: '#',
            wrapper: 'time',
            images: 7,
            wpm: 250
        };
        options = Object.assign({}, defaults, options);
        function declOfNum(number, titles) {
            const cases = [2, 0, 1, 1, 1, 2];
            return titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]];
        }
        const elements = document.querySelectorAll(selector);

        elements.forEach(element => {
            const text = element.textContent || element.innerText || '';
            const words = text.trim().replace(/[ ]{2,}/g, ' ').split(' ').length;
            let time = (words / options.wpm) * 60;
            if (options.images) {
                time += (element.querySelectorAll('img').length * options.images);
            }
            time = Math.round(time / 60);
            const formattedTime = options.format.replace(/#/, time);
            const timeElement = document.createElement(options.wrapper);
            const title = declOfNum(time, ['минута', 'минуты', 'минут']);
            timeElement.textContent = `${formattedTime} ${title}`;
            const timeReadElement = document.querySelector('.time_read');
            if (timeReadElement) {
                timeReadElement.innerHTML = ''; // Очищаем перед вставкой
                timeReadElement.appendChild(timeElement);
            }
        });
    }
    readtime("main", {
        images: 5,
        wpm: 250
    });
})();

document.getElementById("copyDiv")?.addEventListener("click", function () {
    const currentUrl = window.location.href;
    navigator.clipboard.writeText(currentUrl);
});

/*   to-top  */

window.addEventListener('DOMContentLoaded', (event) => {
    let toTopButton = document.getElementById('to-top');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset !== 0) {
            toTopButton.style.display = 'block';
        } else {
            toTopButton.style.display = 'none';
        }
    });

    toTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

/*  end to-top  */