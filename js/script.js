
    "use strict";
    jQuery(function(e) {
        function o() {
            var o = {
                    onclose: function() {
                        s.removeClass("active").appendTo(document.body)
                    }
                },
                a = e(mui.overlay("on", o));
            s.appendTo(a), setTimeout(function() {
                s.addClass("active")
            }, 20)
        }

        function a() {
            i.toggleClass("hide-sidedrawer")
        }

        function n() {
            r.scrollTop() > l ? u || (t.addClass("active"), u = !0) : u && (t.removeClass("active"), u = !1)
        }
        var i = e("body"),
            s = e("#sidedrawer"),
            d = e("#sidenav");
        ! function() {
            var o = e("strong", d);
            o.filter(":not(.active)").next().hide(), o.on("click", function() {
                e(this).next().slideToggle(200)
            })
        }(), e("#appbar-sidenav-show").on("click", o), e("#appbar-sidenav-hide").on("click", a);
        var t = e("#header"),
            c = e("#f-hero"),
            r = e(window);
        if (c.length) {
            var l = c.height(),
                u = !1;
            r.on("scroll", n), n()
        } else r.scrollTop() > 0 ? t.addClass("header-shadow") : r.one("scroll", function() {
            t.addClass("header-shadow")
        })
    })
