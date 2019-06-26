(function($) {
    "use strict";
    $(document).ready(function() {

        function toggle_button(){
            $('.main-navigation .toggle-button').on('click', function() {
                $(this).toggleClass('active');
                $('body').toggleClass('Is-toggle');
    
            });
        }
        toggle_button();
        

        var $winwidth =$(window).width();
        function mobile_menu(){
            if($winwidth <= 1024){
                $('.menu ul').hide();
                $('.menu  li.menu-item-has-children').prepend('<span class="la la-angle-down"></span>');

                $('.menu li.menu-item-has-children span.la-angle-down').on('click', function(e) {
                    e.preventDefault();
                    $(this).siblings('.menu li.menu-item-has-children ul').slideToggle(300);
                });
            }
        }
        mobile_menu();
        
        function scroll_legend(){
            var sections = $('.bef-aft');
            var breadcrumb_height = $('.details-breadcrumb').innerHeight();
            $(window).on('scroll', function () {
                
            var cur_pos = $(this).scrollTop();
            
            sections.each(function() {
                var top = $(this).offset().top - breadcrumb_height;
                var bottom = top + $(this).outerHeight();
                if (cur_pos >= top && cur_pos <= bottom) {
                $('.legend-list a').removeClass('active ');
                sections.removeClass('active');
                $(this).addClass('active');
                $('.legend-list a[href="#'+$(this).attr('id')+'"]').addClass('active');
                }
            
            });
            
            });
        }
        scroll_legend();

        $('.legend-list a[href*= "#"], .calendar .left-sidebar a[href*= "#"], a.scroll-down[href*= "#"]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 900);
          });

       
 
          
          //Click event to scroll to top
        $('.scroll-up').on('click', function() {
            $('html, body').animate({ scrollTop: 0 }, 900);
            return false;
        });
        /*====================================
        // hero carousel
        ======================================*/

        $('.hero-slider').owlCarousel({
            items: 1,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            loop: true,
            dots: true,
            nav: false,
            autoplayTimeout:7000,
            smartSpeed:5000,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 1,
                }

            },
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true
        });

        // DATA BACKGROUND IMAGE
        var pageSection = $(".bg-image");
        pageSection.each(function(){
            if ($(this).attr("data-background")){
                $(this).css("background-image", "url(" + $(this).data("background") + ")");
            }
        });
        

        $('.video-preview').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            preloader: true,
        });

        $('.infograph-item a.info-preview').magnificPopup({
            type: 'image',
            gallery:{
              enabled:true
            }          
          });
          
        

        $('.search-icon').on("click", function(a) {
            a.preventDefault(), 
            $("#search").addClass("open"), $('#search > form > input[type="search"]').focus()
        }), 
        // $("#search, #search #close").on("click keyup", function(a) {
        //     a.target != this && "close" != a.target.id && 27 != a.keyCode || $(this).removeClass("open")
        // });
        
        $("#close").on('click',function(){
            $("#search").removeClass("open");
        });

        $('select').niceSelect();

        $('[data-toggle="popover"]').popover();

        // $('.shortcut-list').on('mouseover','a', function(){
        //     $(this).animate({width:'auto'})
        // });
        // $('.shortcut-list').on('mouseleave','a', function(){
        //     $(this).animate({width:'36px'})
        // });
        

        AOS.init();

        function customScroll (){
            $(".dictionary-sidebar .card-body").slimscroll({
                height: "500px",
                color: "#356aaa",
                size: "4px",
                alwaysVisible: 1,
                borderRadius: "3px",
                railBorderRadius: "2px"
            });
        };
        
        customScroll();

        
    });
})(jQuery);

