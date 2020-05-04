jQuery(document).ready(function($) {

    if(flashwp_ajax_object.secondary_menu_active){

    $(".flashwp-nav-secondary .flashwp-secondary-nav-menu").addClass("flashwp-secondary-responsive-menu");

    $(".flashwp-secondary-responsive-menu-icon").click(function(){
        $(this).next(".flashwp-nav-secondary .flashwp-secondary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".flashwp-nav-secondary .flashwp-secondary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".flashwp-secondary-responsive-menu > li").removeClass("flashwp-secondary-menu-open");
        }
    });

    $(".flashwp-secondary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('flashwp-submenu-toggle').parent().toggleClass("flashwp-secondary-menu-open");
        $(this).find(".children:first").toggleClass('flashwp-submenu-toggle').parent().toggleClass("flashwp-secondary-menu-open");
    });

    $("div.flashwp-secondary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('flashwp-submenu-toggle').parent().toggleClass("flashwp-secondary-menu-open");
    });

    }

    if(flashwp_ajax_object.primary_menu_active){

    if(flashwp_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var flashwpstickyNavTop = $('.flashwp-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var flashwpstickyNav = function(){
        var flashwpscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(flashwp_ajax_object.sticky_menu_mobile){
            if (flashwpscrollTop > flashwpstickyNavTop) {
                $('.flashwp-primary-menu-container').addClass('flashwp-fixed');
            } else {
                $('.flashwp-primary-menu-container').removeClass('flashwp-fixed');
            }
        } else {
            if(window.innerWidth > 1112) {
                if (flashwpscrollTop > flashwpstickyNavTop) {
                    $('.flashwp-primary-menu-container').addClass('flashwp-fixed');
                } else {
                    $('.flashwp-primary-menu-container').removeClass('flashwp-fixed'); 
                }
            }
        }
    };

    flashwpstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        flashwpstickyNav();
    });
    }

    $(".flashwp-nav-primary .flashwp-primary-nav-menu").addClass("flashwp-primary-responsive-menu");

    $(".flashwp-primary-responsive-menu-icon").click(function(){
        $(this).next(".flashwp-nav-primary .flashwp-primary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".flashwp-nav-primary .flashwp-primary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".flashwp-primary-responsive-menu > li").removeClass("flashwp-primary-menu-open");
        }
    });

    $(".flashwp-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('flashwp-submenu-toggle').parent().toggleClass("flashwp-primary-menu-open");
        $(this).find(".children:first").toggleClass('flashwp-submenu-toggle').parent().toggleClass("flashwp-primary-menu-open");
    });

    $("div.flashwp-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('flashwp-submenu-toggle').parent().toggleClass("flashwp-primary-menu-open");
    });

    }

    $(".flashwp-social-icon-search").on('click', function (e) {
        e.preventDefault();
        document.getElementById("flashwp-search-overlay-wrap").style.display = "block";
    });

    $(".flashwp-search-closebtn").on('click', function (e) {
        e.preventDefault();
        document.getElementById("flashwp-search-overlay-wrap").style.display = "none";
    });

    $(".post").fitVids();

    var scrollButtonEl = $( '.flashwp-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.flashwp-scroll-top' ).fadeOut();
        } else {
            $( '.flashwp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    if(flashwp_ajax_object.slider){
    if ( $().owlCarousel ) {
        var flashwpcarouselwrapper = $('.flashwp-posts-carousel');
        var imgLoad = imagesLoaded(flashwpcarouselwrapper);
        imgLoad.on( 'always', function() {
            flashwpcarouselwrapper.each(function(){
                    var $this = $(this);
                    $this.find('.owl-carousel').owlCarousel({
                        autoplay: true,
                        loop: true,
                        margin: 0,
                        smartSpeed: 250,
                        dots: false,
                        nav: true,
                        autoplayTimeout: 4000,
                        autoHeight: false,
                        navText: [ '<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>' ],
                        responsive:{
                        0:{
                            items: 1
                        },
                        480:{
                            items: 1
                        },
                        991:{
                            items: 1
                        },
                        1024:{
                            items: 1
                        }
                    }
                });
            });
        });
    } // end if
    }

    if(flashwp_ajax_object.sticky_sidebar){
    $('.flashwp-main-wrapper, .flashwp-sidebar-one-wrapper').theiaStickySidebar({
        containerSelector: ".flashwp-content-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 890,
    });
    }

});