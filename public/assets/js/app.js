$(function () {
    "use strict";

    // ----------------------
    // THEME PERSISTENCE LOGIC
    // ----------------------

    // Load saved theme from localStorage OR default to dark-theme
    let savedTheme = localStorage.getItem("theme") || "dark-theme";
    $("html").attr("class", savedTheme);

    // Set the correct dark mode icon state on load
    if (savedTheme === "dark-theme") {
        $(".dark-mode-icon i").attr("class", "bi bi-brightness-high-fill");
    } else {
        $(".dark-mode-icon i").attr("class", "bi bi-moon-fill");
    }

    // Function to set and save theme
    function setTheme(themeName) {
        $("html").attr("class", themeName);
        localStorage.setItem("theme", themeName);
    }

    // ----------------------
    // TOOLTIP INIT
    // ----------------------
    $('[data-bs-toggle="tooltip"]').tooltip();

    // ----------------------
    // MENU TOGGLE
    // ----------------------
    $(".nav-toggle-icon").on("click", function () {
        $(".wrapper").toggleClass("toggled");
    });

    $(".mobile-toggle-icon").on("click", function () {
        $(".wrapper").addClass("toggled");
    });

    $(function () {
        for (
            var e = window.location,
                o = $(".metismenu li a")
                    .filter(function () {
                        return this.href == e;
                    })
                    .addClass("")
                    .parent()
                    .addClass("mm-active");
            o.is("li");

        )
            o = o
                .parent("")
                .addClass("mm-show")
                .parent("")
                .addClass("mm-active");
    });

    $(".toggle-icon").click(function () {
        $(".wrapper").hasClass("toggled")
            ? ($(".wrapper").removeClass("toggled"),
              $(".sidebar-wrapper").unbind("hover"))
            : ($(".wrapper").addClass("toggled"),
              $(".sidebar-wrapper").hover(
                  function () {
                      $(".wrapper").addClass("sidebar-hovered");
                  },
                  function () {
                      $(".wrapper").removeClass("sidebar-hovered");
                  }
              ));
    });

    $("#menu").metisMenu();

    $(".search-toggle-icon").on("click", function () {
        $(".top-header .navbar form").addClass("full-searchbar");
    });
    $(".search-close-icon").on("click", function () {
        $(".top-header .navbar form").removeClass("full-searchbar");
    });

    $(".chat-toggle-btn").on("click", function () {
        $(".chat-wrapper").toggleClass("chat-toggled");
    });
    $(".chat-toggle-btn-mobile").on("click", function () {
        $(".chat-wrapper").removeClass("chat-toggled");
    });
    $(".email-toggle-btn").on("click", function () {
        $(".email-wrapper").toggleClass("email-toggled");
    });
    $(".email-toggle-btn-mobile").on("click", function () {
        $(".email-wrapper").removeClass("email-toggled");
    });
    $(".compose-mail-btn").on("click", function () {
        $(".compose-mail-popup").show();
    });
    $(".compose-mail-close").on("click", function () {
        $(".compose-mail-popup").hide();
    });

    $(window).on("scroll", function () {
        $(this).scrollTop() > 300
            ? $(".back-to-top").fadeIn()
            : $(".back-to-top").fadeOut();
    });
    $(".back-to-top").on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    // ----------------------
    // DARK MODE TOGGLE
    // ----------------------
    $(".dark-mode").on("click", function () {
        if (
            $(".dark-mode-icon i").attr("class") ===
            "bi bi-brightness-high-fill"
        ) {
            $(".dark-mode-icon i").attr("class", "bi bi-moon-fill");
            setTheme(""); // light mode (no theme class)
        } else {
            $(".dark-mode-icon i").attr("class", "bi bi-brightness-high-fill");
            setTheme("dark-theme");
        }
    });

    // ----------------------
    // THEME SWITCH BUTTONS
    // ----------------------
    $("#LightTheme").on("click", function () {
        setTheme("light-theme");
    });

    $("#DarkTheme").on("click", function () {
        setTheme("dark-theme");
    });

    $("#SemiDarkTheme").on("click", function () {
        setTheme("semi-dark");
    });

    $("#MinimalTheme").on("click", function () {
        setTheme("minimal-theme");
    });

    // ----------------------
    // HEADER COLOR OPTIONS
    // ----------------------
    $("#headercolor1").on("click", function () {
        $("html")
            .addClass("color-header headercolor1")
            .removeClass(
                "headercolor2 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8"
            );
    });
    $("#headercolor2").on("click", function () {
        $("html")
            .addClass("color-header headercolor2")
            .removeClass(
                "headercolor1 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8"
            );
    });
    $("#headercolor3").on("click", function () {
        $("html")
            .addClass("color-header headercolor3")
            .removeClass(
                "headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8"
            );
    });
    $("#headercolor4").on("click", function () {
        $("html")
            .addClass("color-header headercolor4")
            .removeClass(
                "headercolor1 headercolor2 headercolor3 headercolor5 headercolor6 headercolor7 headercolor8"
            );
    });
    $("#headercolor5").on("click", function () {
        $("html")
            .addClass("color-header headercolor5")
            .removeClass(
                "headercolor1 headercolor2 headercolor4 headercolor3 headercolor6 headercolor7 headercolor8"
            );
    });
    $("#headercolor6").on("click", function () {
        $("html")
            .addClass("color-header headercolor6")
            .removeClass(
                "headercolor1 headercolor2 headercolor4 headercolor5 headercolor3 headercolor7 headercolor8"
            );
    });
    $("#headercolor7").on("click", function () {
        $("html")
            .addClass("color-header headercolor7")
            .removeClass(
                "headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor3 headercolor8"
            );
    });
    $("#headercolor8").on("click", function () {
        $("html")
            .addClass("color-header headercolor8")
            .removeClass(
                "headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor3"
            );
    });

    new PerfectScrollbar(".header-message-list");
    new PerfectScrollbar(".header-notifications-list");
});
