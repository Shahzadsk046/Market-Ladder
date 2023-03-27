import "./bootstrap";

$(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
        $("#navbar_top").css({
            position: "fixed",
            "box-shadow":
                "rgba(0, 0, 0, 0.2) 0px 4px 4px 0px, rgba(0, 0, 0, 0.19) 0px 6px 20px 0px;",
        });
        $(".brand-logo").css({ width: "50%", height: "50%" });
        //   $('#navbar_top').addClass('importantRule');
        $("#navbar_top").css("top", 0);
    } else {
        $("#navbar_top").css("position", "");
        $("#navbar_top").css("top", "-100%");
        $(".brand-logo").css({ width: "90%", height: "90%" });
    }
});
