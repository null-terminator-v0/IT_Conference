$(document).ready(function () {
    $("#submit").click(function () {
        $("div").hide();
    });
});

$(document).ready(function () {
    $("submit").dblclick(function () {
        $(this).hide();
    });
    $("input").click(function () {
        $(this).hide();
    });
});