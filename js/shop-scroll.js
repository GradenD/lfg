$(window).on('load', function() {
    setTimeout(function() {
        $(window).scrollTop(0);
        $.scrollify.update();
    });
});

$(document).ready(function(){
   /* $(".card_container").scroll(function(){
        console.log("Scrolled :P");
    }); */
});

$(function() {
    if ($(window).width() > 991){
        $.scrollify({
            section : ".shop-items",
            interstitialSection : "",
            easing: "easeOutExpo",
            scrollSpeed: 1000,
            offset : 0,
            scrollbars: true,
            standardScrollElements: "",
            setHeights: false,
            overflowScroll: true,
            updateHash: false,
            touchScroll:true,
            before:function() {},
            after:function() {},
            afterResize:function() {},
            afterRender:function() {}
        });
    }
});
