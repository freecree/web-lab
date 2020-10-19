$(function() {

    // Выпадающее меню

    $('.navbar__dogs').click(function(event) {
        $(this).children('.navbar-sub__dogs').toggleClass('navbar-sub__dogs-active');
    });
    $(document).click(function(event) {
        var nav = $(".navbar__dogs");
        if (!nav.is(event.target)
             && nav.has(event.target).length === 0) {
            $('.navbar-sub__dogs').removeClass('menu-sub-active');
        } else {
           $('.navbar-sub__dogs').toggleClass('menu-sub-active'); 
        }
    });
    $(document).click(function(event) {
        var nav = $(".gamburger");
        if (!nav.is(event.target)
             && nav.has(event.target).length === 0) {
            $('.navbar').removeClass('menu-sub-active');
        } else {
           $('.navbar').toggleClass('menu-sub-active'); 
        }
    });
    // плавный скролл
    function handler(event = 0) {
        if (event) {
            var myHash = event.target.hash;
        } else {
            var myHash = location.hash; //получаем значение хеша
        }

        location.hash = ''; //очищаем хеш
        if(myHash[1] != undefined){ //проверяем, есть ли в хеше какое-то значение
            $('html, body').animate(
                {scrollTop: $(myHash).offset().top}
                , 1000); 
            location.hash = myHash; //возвращаем хеш
        };
    }
    jQuery(document).ready(function($) {
        handler();
    });
    $('a[href*="#"]').click(function(event) {
        handler(event);
    });

    // play video

    $(".video-content").click(function() {
        console.log("video-content");
        var dataYoutube = $(this).attr('data-youtube');
        $(this).html('<iframe width=100% height=100% class="frame" src="https://www.youtube.com/embed/' + dataYoutube + '?autoplay=1&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
    });

    /* tabs for video*/

    $('ul.tabs-caption').on('click', 'li:not(.active)', function() {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.tabs').find('li.tab-content').removeClass('active').eq($(this).index()).addClass('active');

    });

    // slider

    $('.slider-parents').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,
        adaptiveHeight: true,
        prevArrow: "<img src='./img/arrow.svg' class='slick-prev' alt='arrow-1'>",
        nextArrow: "<img src='./img/arrow.svg' class='slick-next' alt='arrow-2'>",
        responsive: [
    	   {
    		breakpoint: 1300,
    		settings: {
    			
    			variableWidth: false,

    		  }
    	   }
        ],
        mobileFirst: false
    });

    $('.slider-puppy-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        speed: 300,
        adaptiveHeight: true,
        prevArrow: "<img src='./img/arrow.svg' class='slick-prev' alt='arrow-1'>",
        nextArrow: "<img src='./img/arrow.svg' class='slick-next' alt='arrow-2'>",
        //asNavFor: '.slider-puppy-nav'
    });

    //       tabs for puppy slider

    $('.puppy__sub').on('click', 'img', function() {
        console.log("click");
        $(this)
            .addClass('puppy-pic-active').siblings().removeClass('puppy-pic-active')
            .closest('div.puppy-main__photoes').find('div.slider-puppy-for').slick('slickGoTo', $(this).index(), true);
            //.closest('div.puppy-main__photoes').find('.slick-list img').css('opacity', '0').eq($(this).index()).css('opacity', '1');

    });
    $('.slider-puppy-for').on('click', '.slick-arrow', function() {
        //console.log($(this).index());
        let currentSlide = $(this).closest('div.slider-puppy-for').slick('slickCurrentSlide');
        $(this)
            .closest('div.puppy-main__photoes').find('.puppy__sub img').removeClass('puppy-pic-active').eq(currentSlide).addClass('puppy-pic-active');
    });

    // $('.slider-puppy-nav').slick({
    //     slidesToShow: 3,
    //     arrows: false,
    //     slidesToScroll: 1,
    //     asNavFor: '.slider-puppy-for',
    //     dots: false,
    //     variableWidth: true,
    //     adaptiveHeight: true,
    //     //centerMode: true,
    //     focusOnSelect: true
    // });


});
 
