$(document).ready(function() {

    // Attaching to a button click (jQuery 1.7+) and set cookie
    $("#1").on("click", function () {
        $.cookie('the_cookie', 'the_value', { expires: 7 });
    });

    });
