$(document).ready(function () {

    $(".owl-carousel").owlCarousel({
        items: 1,
        //loop: true,
        dots: false,
        nav: true,
        navText : ["",""],
        autoplay: false,
        //autoHeight: true,
        slideTransition: 'all .4s cubic-bezier(1, 0, 0, 1)',
        navContainer: '.custom-nav'
    });

    $('[data-fancybox="gallery"]').fancybox({
        // Options will go here
    });


        function Scroll_block() {
            let scrolled = $(document).scrollTop(),
                windowHeight = $(window).height() / 2;  //высота окна

            $("#top-menu a").each(function () {
                let hash = $(this).attr("href"),
                    target = $(hash),
                    mainContent = $("#main-content");

                if (mainContent.offset().top < windowHeight + scrolled) {
                    $("#link-start").addClass("show-link");
                    $('#contacts-list').addClass('show-contacts');
                } else {
                    $("#link-start").removeClass("show-link");
                    $('#contacts-list').removeClass('show-contacts');
                }

                if ($(window).width() > 991) {
                    if (target.position().top - windowHeight <= scrolled && target.position().top + target.outerHeight() - windowHeight > scrolled) {
                        $("#top-menu li.active").parent().removeClass("active");
                        $(this).parent().addClass("active");
                    } else {
                        $(this).parent().removeClass("active");
                    }
                } else {
                    if (scrolled) {
                        $('#contacts-list').removeClass('show-contacts');
                        //$('#nav-icon3').removeClass('open');
                        //$('#top-menu').removeClass('show-menu');
                        $('#contacts-list-button').removeClass('active-button');
                    }
                }

            });
            if (scrolled > 25) {
                $(".title-arrow-wrap").addClass("hide-arrow");
            } else {
                $(".title-arrow-wrap").removeClass("hide-arrow");
            }
        }
    $("#link-start").click(function () {
        $("#link-start").removeClass("show-link");
        $("#top-menu li.active").removeClass("active");
        $('#contacts-list-button').removeClass('active-button');
    });


    $(document).on("scroll", Scroll_block);

    $("a[href*=\\#]").click(function(e){
        e.preventDefault();
        $(document).off("scroll");
        $(".title-arrow-wrap").addClass("hide-arrow");

        //Подсветка пунктов шапки в мобайле
        if ($(window).width() > 991) {
            $("#top-menu li.active").removeClass("active");
            $(this).parent().addClass("active");
        } else {
            //Показ меню моб.
            $('#contacts-list').removeClass('show-contacts');
            $('#nav-icon3').removeClass('open');
            $('#top-menu').removeClass('show-menu');
            $('body').removeClass('overflow-hidden');


        }

        let hash = $(this).attr("href"),
            target = $(hash);

        $("html, body").animate({
            scrollTop: target.offset().top
        }, 800, function(){
            window.location.hash = hash;
            $(document).on("scroll", Scroll_block);
        });
    });

    if ($(window).width() < 992) {
        //Показать контакты в моб.
        $('#contacts-list-button').click(function () {
            $('#contacts-list').toggleClass('show-contacts');
            $('#contacts-list-button').toggleClass('active-button');
            $('#nav-icon3').removeClass('open');
            $('#top-menu').removeClass('show-menu');
        });

        $('.header-nav').removeClass('wow fadeInUp');

        //Показать меню в моб.
        $('#nav-icon3').click(function(){
            $(this).toggleClass('open');
            $('#top-menu').toggleClass('show-menu');
            $('#contacts-list').removeClass('show-contacts');
            $('#contacts-list-button').removeClass('active-button');
            $('body').toggleClass('overflow-hidden');
        });


        //ios menu scroll
        var FenixUI = {
            overlayModalIos : function($block) {
                var _overlay = document.getElementById($block);
                var _clientY = null; // remember Y position on touch start

                if(!_overlay) {
                    return '';
                }

                _overlay.addEventListener('touchstart', function(event) {
                    if(event.targetTouches.length === 1) {
                        // detect single touch
                        _clientY = event.targetTouches[0].clientY;
                    }
                }, false);

                _overlay.addEventListener('touchmove', function(event) {
                    if(event.targetTouches.length === 1) {
                        // detect single touch
                        disableRubberBand(event);
                    }
                }, false);

                function disableRubberBand(event) {
                    var clientY = event.targetTouches[0].clientY - _clientY;

                    if(_overlay.scrollTop === 0 && clientY > 0) {
                        // element is at the top of its scroll
                        event.preventDefault();
                    }

                    if(isOverlayTotallyScrolled() && clientY < 0) {
                        //element is at the top of its scroll
                        event.preventDefault();
                    }
                }

                function isOverlayTotallyScrolled() {
                    // https://developer.mozilla.org/en-US/docs/Web/API/Element/scrollHeight#Problems_and_solutions
                    return _overlay.scrollHeight - _overlay.scrollTop <= _overlay.clientHeight;
                }
            }
        };

        FenixUI.overlayModalIos('top-menu');


    } else {
        $('.parallax-window').parallax({imageSrc: '../img/main-bg.png'});
    }

    //валидация форм
    let pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i,
        mailInput = $('#recipient-mail'),
        nameInput = $('#recipient-name'),
        textInput = $('#message-text');

    $('#send-mail-form').submit(function(event){
        if(mailInput.val() != '' && nameInput.val() != '' && textInput.val() != ''){
            if(mailInput.val().search(pattern) == 0){
                //alert("алё");
                let str = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "http://primedp.zzz.com.ua/contact.php",
                    data: str,
                    success: function () {
                        $('#send-mail-form').trigger('reset');
                        $('#exampleModalCenter').modal('toggle');
                        $('.toast-send-message').addClass('show-toast');
                        setTimeout(function () {
                            $('.toast-send-message').removeClass('show-toast');
                        },2000);
                    }
                });
            }else{
                //alert("не алё");
                $('#send-mail-form').addClass('invalid-mail');
                setTimeout(function () {
                    $('#send-mail-form').removeClass('invalid-mail');
                },2000);
            }
        }else{
            //alert("пусто");
            $('#send-mail-form').addClass('empty-mail');
            setTimeout(function () {
                $('#send-mail-form').removeClass('empty-mail');
            },2000);
        }
        event.preventDefault();
    });

    //Анимация
    wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            live:         true
        }
    );
    wow.init();
});

//Одинаковая высота блоков
$(window).on("load", function(){
    let educationItem = $('.education-item-title'),
        elementHeights = educationItem.map(function() {
        return $(this).height();
    }).get(),
        maxHeight = Math.max.apply(null, elementHeights);
    educationItem.height(maxHeight);
});