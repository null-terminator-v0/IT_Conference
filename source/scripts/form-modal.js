// $(document).ready(function () {
//     $("#submit").click(function () {
//         $("a").hide();
//     });
// });
//
// $(document).ready(function () {
//     $("button").dblclick(function () {
//         $(this).hide();
//     });
//     $("input").click(function () {
//         $(this).hide();
//     });
//     $(".form-select").click(function () {
//         $(this).hide();
//     });
// });

// $(document).ready(function () {
//         $("input").on({
//             mouseenter: function () {
//                 $(this).css("background-color", "orange");
//             },
//             mouseleave: function () {
//                 $(this).css("background-color", "lightblue");
//             },
//             dblclick: function () {
//                 $(this).css("background-color", "black");
//                 $("#submit").show();
//             },
//             click: function () {
//                 $("#submit").hide();
//             }
//         });
// });

$(document).ready(function tug(x) {
    $(x).on({
        click: function() {
            $("input").fadeOut(1000);
        },
        dblclick: function () {
            $("input").fadeIn(3000);
        }
    });
});

$(document).ready(function () {
    $("#sub-heading").tug("#sub-heading");
})

