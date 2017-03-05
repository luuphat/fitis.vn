
function showtxtkey() {
    $(".search").addClass("an");
    $(".search1").removeClass("an");
    $('.ftxtkey').css('display', 'inline-block');
    $(".ftxtkey").animate({
        width: 210
    });
}

function hidetxtkey() {
    $key_len = ($(".ftxtkey").val().length);

    if ($key_len > 0) {
        window.location.href = "/search/" + $(".ftxtkey").val();
    }
    else {
        $(".search1").addClass("an");
        $(".search").removeClass("an");
        $(".ftxtkey").animate({
            width: 0
        }).delay(1000);
    }
}



function change_question() {
    var e = document.getElementById("question_option");
    var question_value = e.options[e.selectedIndex].value;
    $(".contact_question").addClass("an");
    $(".chs0").removeClass("an");

    $("." + question_value).removeClass("an");



}

function change_color_red_nav_product(x) {
    x.style.color = "red";    
    $(".nav_ar_product")
    .fadeOut(100, function() {
        $(".nav_ar_product").attr('src',"wp-content/themes/fitis/images/nav_ar_red.png");
    })
    .fadeIn(100);    
}

function change_color_white_nav_product(x) {
    x.style.color = "white";
    $(".nav_ar_product")
    .fadeOut(100, function() {
        $(".nav_ar_product").attr('src',"wp-content/themes/fitis/images/nav_ar_white.png");
    })
    .fadeIn(100);
}


function change_color_red_nav_wheretobuy(x) {
    //x.style.color = "red";    
    $(".nav_ar_wheretobuy")
    .fadeOut(100, function() {
        $(".nav_ar_wheretobuy").attr('src',"wp-content/themes/fitis/images/nav_ar_red.png");
    })
    .fadeIn(100);    
}

function change_color_white_nav_wheretobuy(x) {
    //x.style.color = "white";
    $(".nav_ar_wheretobuy")
    .fadeOut(100, function() {
        $(".nav_ar_wheretobuy").attr('src',"wp-content/themes/fitis/images/nav_ar_white.png");
    })
    .fadeIn(100);
}

function showsubnav_product(){
    //$(".subnav_product").slideDown();
    return;
}


function hidesubnav_product(){
    //$(".subnav_product").slideUp();
    return;
}

// Position: fixed cho menu
jQuery(document).ready(function($) {

    if ($(window).scrollTop() >= 980) {
        $("#nav_container").css({"position": "fixed", "top": "58px", "left": "0"});
    } else {
        $("#nav_container").css({"position": "relative", "top": "", "left": ""});
    }

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 980) {
            $("#nav_container").css({"position": "fixed", "top": "58px", "left": "0"});
        } else {
            $("#nav_container").css({"position": "relative", "top": "", "left": ""});
        }
    });
});