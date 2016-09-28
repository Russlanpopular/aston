$(document).ready(function () {

     // $(".item-result").prepend("<span></span>");
     $(".ficon1").prepend("<i class = 'first-icon'></i>");
     $(".ficon2").prepend("<i class = 'second-icon'></i>");
     


    function setEqualHeight(columns) {
        var maxHeightColumn = 0,
            currentHeight = columns.first().height();

        columns.each(
            function () {
                currentHeight = $(this).height();
                if (currentHeight > maxHeightColumn) {
                    maxHeightColumn = currentHeight;
                }
            }
        );

        columns.height(maxHeightColumn);
    }

    function setHeight() {
        if($(window).width() <= 1000){
            setEqualHeight($(".cell-partner"));
        }
    }





    $('.guarantees .bxslider').bxSlider({
        "infiniteLoop": false,
        "hideControlOnEnd": true,
        "pager": false,
        "controls": false,
        "touchEnabled": false
        // "nextSelector": ".bx-next-def",
        // "prevSelector": ".bx-prev-def",
        // "pagerSelector": ".bx-pager"
    });

    $('.slider .bxslider').bxSlider({
        "pager": false,
        "touchEnabled": false
    });

    $(".tab-button").click(function () {
        var content = $(".tabs-content");

        $(".tab-button").removeClass('active');
        $(this).addClass('active');

        content.removeClass('active');
        content.eq($(this).index(".tab-button")).addClass("active");

        content.fadeOut(500);
        content.eq($(this).index(".tab-button")).fadeIn(500);
    });



    $("#my-menu").mmenu({
        slidingSubmenus: false
    });

    $(window).resize(function () {
        menuFixed();
        if($(".hint-partners").length > 0){
            $(".hint-partners").width($(".list-partners").width() - 70);
            $(".hint-partners").offset({"left": $(".list-partners .row").position().left});
        }
        fixContactsPage();
        setHeight();
    });

    $(window).load(function () {
        menuFixed();
        setHeight();
    });

    $(".info-company h2").addClass("block-header");
    $(".guarantees .bxslider li > div").addClass("info-slider");
    $(".info-company p").addClass("wow").addClass("bounceInLeft");
    $(".results-info h2").addClass("wow").addClass("bounceInRight");

    function menuFixed() {
        var list = $('.contacts li'),
            width = 0;


        for(var i = 0; i < list.size(); i++){
            width += list.eq(i).outerWidth();
        }

        if($(window).width() > 1055){
            $('.top-menu nav').width(width + 21);
        }
        else{
            $('.top-menu nav').css({"width": "100%"});
        }

    }
    
 $(".cell-partner").click(function (e) {
        if($(this).hasClass('active')){
            $(".hint-partners").fadeOut();
            $(".cell-partner").removeClass("active");
        }
        else{
            if($(this).find(".hint-partners").length > 0){
                $(this).find(".hint-partners").width($(".list-partners").width() - 70);
                $(".hint-partners").fadeOut();
                $(this).find(".hint-partners").fadeIn();

                $(".cell-partner").removeClass("active");
                $(this).addClass("active");

                $(this).find(".hint-partners").offset({"left": $(".list-partners .row").position().left});
            }
        }

        // e.preventDefault();
    });

    $(".close-hint").click(function (e) {
        e.stopPropagation();

        $(this).parent().fadeOut();

        $(this).parent().parent().removeClass('active');
    });
    
    $("body").click(function (e) {
        if($(e.target).closest(".cell-partner").length == 0){
            $(".hint-partners").fadeOut();

            $(".cell-partner").removeClass("active");
        }
    });
    
    function fixContactsPage() {
        var windowWidth = $(window).width(),
            rightSidebarWidth = $(".left-side-header").outerWidth();

        $(".contacts-info").width(windowWidth - rightSidebarWidth - 328);
    }

    fixContactsPage();

    var wow = new WOW(
        {
            boxClass:     'wow',
            animateClass: 'animated',
            offset:       0,
            mobile:       true,
            live:         true,
            callback:     function(box) {
            },
            scrollContainer: null
        }
    );
    wow.init();

    function  scrollList() {
        var list = $(".item-result");

        $(window).scroll(function () {
            list.each(function () {
                if ( $(window).scrollTop() >= $(this).position().top - 70 ){
                    list.removeClass("active");
                    $(this).addClass("active");
                }
            });
        });
    }

    scrollList();

    //
    // function initMap() {
    //     var map = new google.maps.Map(document.getElementById('map'), {
    //         center: {lat: -34.397, lng: 150.644},
    //         scrollwheel: false,
    //         zoom: 8
    //     });
    // }

});