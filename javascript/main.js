/**
  * isMobile
  * topSearch
  * responsiveMenu
  * megaMenu
  * Accordion
  * CountDown 
  * portfolioIsotope 
  * CourseIsotope 
  * ShopOnline 
  * IsoGallery 
  * Testimonials  
  * Teammember
  * Wrapblog 
  * Shop 
  * Slideimg 
  * FlatgoogleMaps
  * retinaLogos 
  * GoTop 
  * removePreloader
*/

;(function($) {

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    var topSearch = function () {
      $(document).on('click', function(e) {   
            var clickID = e.target.id;   
            if ( ( clickID !== 's' ) ) {
                $('.top-search').removeClass('show');                
            } 
        });

        $('.show-search').on('click', function(event){
            event.stopPropagation();
        });

        $('.search-form').on('click', function(event){
            event.stopPropagation();
        });        

        $('.show-search').on('click', function (event) {
            if(!$('.top-search').hasClass( "show" )) {
                $('.top-search').addClass('show');  
                event.preventDefault();                
            }
                
            else
                $('.top-search').removeClass('show');
                event.preventDefault();

            if( !$('.show-search' ).hasClass( "active" ) )
                $( '.show-search' ).addClass( 'active' );
            else
                $( '.show-search' ).removeClass( 'active' );
        });   
   
    } 

    var responsiveMenu = function() {
        var menuType = 'desktop';

        $(window).on('load resize', function() {
            var currMenuType = 'desktop';

            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                currMenuType = 'mobile';
            }

            if ( currMenuType !== menuType ) {
                menuType = currMenuType;

                if ( currMenuType === 'mobile' ) {
                    var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
                    var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

                    $('.mega-menu .mega-menu-sub').hide();
                    $('.has-mega-menu .submenu.mega-menu').hide();

                    $('#header').after($mobileMenu);
                    hasChildMenu.children('ul').hide();
                    hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
                    $('.btn-menu').removeClass('active');
                } else {
                    var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');

                    $desktopMenu.find('.submenu').removeAttr('style');
                    $('#header').find('.wrap-nav').append($desktopMenu);
                    $('.wrap-menu').find('.wrap-nav').append($desktopMenu);
                    $('.btn-submenu').remove();
                }
            }
        });

        $('.btn-menu').on('click', function() {         
            $('#mainnav-mobi').slideToggle(300);
            $(this).toggleClass('active');
        });

        if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
            $('.btn-mega').on('click', function() {      
                $(this).parent('.sub-title').siblings().slideToggle(300);   
                $(this).toggleClass('active');
            });

            $('.has-mega').on('click', function() {      
                $(this).siblings().slideToggle(300);  
                $(this).toggleClass('active');
            });
        } 

        $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
            $(this).toggleClass('active').next('ul').slideToggle(300);
            e.stopImmediatePropagation()
        });
    }

    var megaMenu = function() {
        $('#mainnav li').each( function() {            
            if ( $(this).hasClass('has-mega-menu') ) {
                var $main_menu_possiton =  $(this).attr('id');                
                var $megaMenu = $('.submenu-style2' +' .'+$main_menu_possiton );
                $(this).append( $megaMenu );

            } 
        } );
    }

    var Accordion = function() {
        var args = {duration: 600};

        $('.flat-accordion .toggle-title').on('click', function () {
            if( !$(this).is('.active') ) {
                $(this).closest('.flat-accordion').find('.toggle-title.active').toggleClass('active').next().slideToggle(args);
                $(this).toggleClass('active');
                $(this).next().slideToggle(args);
            } else {
                $(this).toggleClass('active');
                $(this).next().slideToggle(args);
            }     
        });
    }; 

    var CountDown = function() {
        var before = '<div class="square"><div class="numb">',
            text = '</div><div class="text">';
            if ($().countdown) {
                $(".countdown").countdown('2017/07/27', function(event) {
                  $(this).html(event.strftime(before + '%D' + text + '</div></div>' + before + '%H' + text + '</div></div>' + before + '%M' + text + '</div></div>' + before + '%S' + text + '</div>'));
                });
            }
    };  
      
    var portfolioIsotope = function() {         
        if ( $().isotope ) {           
            var $container = $('.wrap-price-post .portfolio-wrap');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.item',
                    transitionDuration: '1s'
                });
            });

            $('.wrap-price-post .portfolio-filter li ').on('click',function() {                           
                var selector = $(this).find("a").attr('data-filter');
                $('.wrap-price-post .portfolio-filter li').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                return false;
            });

            $('.flat-portfolio .load-more a').on('click', function(e) {
                e.preventDefault();
                return false;
                var el = $(this),
                    url = el.attr('href'),
                    page = parseInt(el.attr('data-page'), 10);

                el.addClass('loading').text('Loading...');

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "html",
                    async: false,   // wait result
                    data : { page : page }
                })
                .done(function (data) {
                    if ( data != null ) {                      
                        var newitem = $(data);
                        $container.append(newitem).isotope('appended', newitem);
                        el.removeClass('loading').text('Load more');
                        page = page + 1;
                        el.attr({'data-page': page, 'href': './ajax/p' + page + '.html'});
                    }
                })
                .fail(function () {
                    el.text('No more portfolio to load.');
                })
            });
        };
    };

    var CourseIsotope = function() {         
        if ( $().isotope ) {           
            var $container = $('.wrap-course .portfolio-wrap');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.item',
                    transitionDuration: '1s'
                });
            });

            $('.wrap-course .portfolio-filter option').on('click',function() {                           
                var selector = $(this).find("a").attr('data-filter');
                $('.wrap-course .portfolio-filter option').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                return false;
            });

            $('.flat-portfolio .load-more a').on('click', function(e) {
                e.preventDefault();
                return false;
                var el = $(this),
                    url = el.attr('href'),
                    page = parseInt(el.attr('data-page'), 10);

                el.addClass('loading').text('Loading...');

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "html",
                    async: false,   // wait result
                    data : { page : page }
                })
                .done(function (data) {
                    if ( data != null ) {                      
                        var newitem = $(data);
                        $container.append(newitem).isotope('appended', newitem);
                        el.removeClass('loading').text('Load more');
                        page = page + 1;
                        el.attr({'data-page': page, 'href': './ajax/p' + page + '.html'});
                    }
                })
                .fail(function () {
                    el.text('No more portfolio to load.');
                })
            });
        };
    };

    var ShopOnline = function() {         
        if ( $().isotope ) {           
            var $container = $('.shop-product .shop-online');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.item',
                    transitionDuration: '1s'
                });
            });

            $('.shop-product .portfolio-filter li').on('click',function() {                           
                var selector = $(this).find("a").attr('data-filter');
                $('.shop-product .portfolio-filter li').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                return false;
            });

            $('.flat-portfolio .load-more a').on('click', function(e) {
                e.preventDefault();
                return false;
                var el = $(this),
                    url = el.attr('href'),
                    page = parseInt(el.attr('data-page'), 10);

                el.addClass('loading').text('Loading...');

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "html",
                    async: false,   // wait result
                    data : { page : page }
                })
                .done(function (data) {
                    if ( data != null ) {                      
                        var newitem = $(data);
                        $container.append(newitem).isotope('appended', newitem);
                        el.removeClass('loading').text('Load more');
                        page = page + 1;
                        el.attr({'data-page': page, 'href': './ajax/p' + page + '.html'});
                    }
                })
                .fail(function () {
                    el.text('No more portfolio to load.');
                })
            });
        };
    };

    var IsoGallery = function() {         
        if ( $().isotope ) {           
            var $container = $('.gallery .wrap-gallery');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.item',
                    transitionDuration: '1s'
                });
            });

            $('.gallery .portfolio-filter li').on('click',function() {                           
                var selector = $(this).find("a").attr('data-filter');
                $('.gallery .portfolio-filter li').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                return false;
            });

            $('.flat-portfolio .load-more a').on('click', function(e) {
                e.preventDefault();
                return false;
                var el = $(this),
                    url = el.attr('href'),
                    page = parseInt(el.attr('data-page'), 10);

                el.addClass('loading').text('Loading...');

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "html",
                    async: false,   // wait result
                    data : { page : page }
                })
                .done(function (data) {
                    if ( data != null ) {                      
                        var newitem = $(data);
                        $container.append(newitem).isotope('appended', newitem);
                        el.removeClass('loading').text('Load more');
                        page = page + 1;
                        el.attr({'data-page': page, 'href': './ajax/p' + page + '.html'});
                    }
                })
                .fail(function () {
                    el.text('No more portfolio to load.');
                })
            });
        };
    };

    var Testimonials = function() {
        $('.flat-row').each(function() {            
            if ( $().owlCarousel ) {
                $(this).find('.flat-testimonials').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: $('.flat-testimonials').data('nav'),
                    dots: $('.flat-testimonials').data('dots'),                     
                    autoplay: $('.flat-testimonials').data('auto'),                    
                    responsive:{
                        0:{
                            items: 1
                        },
                        767:{
                            items: 1
                        },
                        991:{
                            items: 1
                        },
                        1200: {
                            items: $('.flat-testimonials').data('item')
                        }
                    }
                });
            }
        });
    };

    var Teammember = function() {
        $('.flat-row').each(function() {            
            if ( $().owlCarousel ) {
                $(this).find('.team-member').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: $('.team-member').data('nav'),
                    dots: $('.team-member').data('dots'),                     
                    autoplay: $('.team-member').data('auto'),                    
                    responsive:{
                        0:{
                            items: 1
                        },
                        767:{
                            items: 1
                        },
                        991:{
                            items: 1
                        },
                        1200: {
                            items: $('.team-member').data('item')
                        }
                    }
                });
            }
        });
    };

    var Wrapblog = function() {
        $('.flat-row').each(function() {            
            if ( $().owlCarousel ) {
                $(this).find('.wrap-blog').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: $('.wrap-blog').data('nav'),
                    dots: $('.wrap-blog').data('dots'),                     
                    autoplay: $('.wrap-blog').data('auto'),                    
                    responsive:{
                        0:{
                            items: 1
                        },
                        767:{
                            items: 1
                        },
                        991:{
                            items: 1
                        },
                        1200: {
                            items: $('.wrap-blog').data('item')
                        }
                    }
                });
            }
        });
    };

    var Slideimg = function() {
        $('.entry').each(function(){
            $(this).children('.featured-post').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: true,
                slideshow: true,                
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>'
            });
        });
    };  

    var FlatgoogleMaps = function() {
        if ( $().gmap3 ) {
            $("#flat-map").gmap3({
                map:{
                    options:{
                        zoom: 11,
                        mapTypeId: 'eduh_style',
                        mapTypeControlOptions: {
                            mapTypeIds: ['eduh_style', google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]
                        },
                        scrollwheel: false
                    }
                },
                getlatlng:{
                    address:  "No 40 Baria Sreet 133/2 NewYork City, NY, United States",
                    callback: function(results) {
                        if ( !results ) return;
                        $(this).gmap3('get').setCenter(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                        $(this).gmap3({
                            marker:{
                                latLng:results[0].geometry.location,
                                options:{
                                    
                                }
                            }
                        });
                    }
                },
                styledmaptype:{
                    id: "eduh_style",
                    options:{
                        name: "Edu Map"
                    }, 
                    styles: [
                        {
                            "featureType": "landscape",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 65
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },

                        {
                            "featureType": "poi",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 51
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },

                        {
                            "featureType": "road.highway",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },

                        {
                            "featureType": "road.arterial",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 30
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 40
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },

                        {
                            "featureType": "administrative.province",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "lightness": -25
                                },
                                {
                                    "saturation": -100
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#edf0f4"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "saturation": -97
                                }
                            ]
                        }
                    ]                   
                },
            });
        }
    };

    var retinaLogos = function() {
      var retina = window.devicePixelRatio > 1 ? true : false;

        if(retina) {
            $('.header .logo').find('img').attr({src:'./images/logo@2x.png',width:'165',height:'101'});   
        }
    }; 

    var GoTop = function() {
        $(window).on('load scroll',function() {
            if( $(window).scrollTop() > 1000) {
                $('.go-top').addClass('show');
            }else{
                $('.go-top').removeClass('show');
            }
        });

        $('.go-top').on('click', function() {            
            $("html, body").animate({ scrollTop: 0 }, 1000, 'easeInOutExpo');
            return false;
        });
    };

    var removePreloader = function() {        
        $('.loading-overlay').fadeOut('slow',function () {
            $(this).remove();
        });
    };

    
/* Function
 ------------------------------------------------------------------ */
     $(function() {
        topSearch();
        responsiveMenu();
        megaMenu();
        Accordion();
        CountDown();
        portfolioIsotope();
        CourseIsotope();
        ShopOnline();
        IsoGallery();
        Testimonials();
        Teammember();
        Wrapblog();
        Slideimg();
        FlatgoogleMaps();
        retinaLogos();
        GoTop();
        removePreloader();
     });

})(jQuery);

