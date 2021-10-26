function lPWaitForJquery() {
    if(!window.$ || typeof loadSlick !== "function"){
        setTimeout(lPWaitForJquery, 250);
    } else {
        loadSlick()
        lPInit();
    }
}

function lPInit() {
    $(function () {
        /* Setup open nav button */
        $('.main-nav-open').on('click', function (e) {
            e.preventDefault();
            $('#main-nav, .click-guard').addClass('open');
        });

        /* Setup close nav buttons */
        $('.main-nav-close, .main-nav-close-and-navigate').on('click', function (e) {
            $(document.body).removeClass("3d-open");
            $('body').removeAttr('style');
            if($(this).hasClass('main-nav-close')) e.preventDefault();
            $('#main-nav, .click-guard, .confirm-age, #swift-3d-popup').removeClass('open');
        });

        /* Setup age confirmation */
        $('.open-nsfw-confirmation').on('click', function (e) {
            e.preventDefault();
            $('#main-nav').removeClass('open');
            $('.confirm-age').addClass('open');
            $('.option-share, .option-enable').hide();
            if($(this).data('type') === 'share') {
                $('.option-share').show();
            } else {
                $('.option-enable').show();
            }
        })

        /* Setup 3D Load Button */
        $('#button-3d-load, .button-3d-load-secondary').on('click', function (e) {
            e.preventDefault();
            $(document.body).addClass("3d-open");
            $('body').css({'overflow':'hidden'});
            $('.click-guard, #swift-3d-popup').addClass('open');
            $('#swift-model-viewer').attr('src', '/obj/model_v3.glb');
            // noinspection JSJQueryEfficiency
            if(!window.modelViwerScriptLoaded) {
                $(document.head).append('<script type="module" src="/js/model-viewer.min.js">');
                window.modelViwerScriptLoaded = true;
            }
        });

        /* Setup back to top widget */
        $(window).on('scroll', lPToggleOnScroll).trigger('scroll');
        $('#return-to-top').on('click', function (e) {
            e.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
            if(!!location.hash) {
                try {
                    history.pushState({}, "", "#");
                } catch (e) {
                    // Empty
                }
            }
        });

        /* Setup Slick Carousel */
        $('.slider-main:not(.no-init)').slick({
            lazyLoad: 'progressive',
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true
        });
        $('.slider-nav').slick({
            lazyLoad: 'progressive',
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });

        /* Setup noop buttons */
        $('.button-noop').on('click', function (e) {
            e.preventDefault();
        });
    })
}

function lPToggleOnScroll() {
    if($(document.body).hasClass("3d-open")) return;
    $('#return-to-top').css('bottom',
        (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ? '1em' : '-3em'
    );
    $('#homepage-scroll-down-container').css('opacity',
        (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ? '0' : '1'
    );
    // Close any navs or popups if it's open if we are scrolling
    $('#main-nav, .click-guard, .confirm-age, #swift-3d-popup').removeClass('open');
}

lPWaitForJquery();