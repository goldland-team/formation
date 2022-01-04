$(".nav-link").click(function () {
    $(".nav-link").each(function () {
        $(this).attr("aria-selected", "false");
        $(this).removeClass('active');
    });
});