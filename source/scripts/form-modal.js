$(document).ready(function () {
    $("#submit").click(function () {
        $("div").hide();
    });
});

$(document).ready(function () {
    $("a").dblclick(function () {
        $(this).hide();
    });
    $("input").click(function () {
        $(this).hide();
    });
});