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

$(document).ready(function () {
        $("input").on(
            mouseenter: function () {
                $(this).css("background-color", "orange");
            };
        );
        $("input").on(
            mouseleace: function(){
                $(this).css("background-color", "lightblue");
            };
        );
        $("input").on(
            dblclick: function () {
                $(this).css("background-color", "black");
            }
        );
});