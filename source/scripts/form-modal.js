$(document).ready(function () {
    $("#submit").click(function () {
        $("a").hide();
    });
});

$(document).ready(function () {
    $("button").dblclick(function () {
        $(this).hide();
    });
    $("input").click(function () {
        $(this).hide();
    });
    $(".form-select").click(function () {
        $(this).hide();
    });
});