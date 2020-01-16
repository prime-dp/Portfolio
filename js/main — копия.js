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
            let scrolled = $(document).scrollTop();
            let windowHeight = $(window).height() / 2;  //высота окна

            $("#top-menu a").each(function () {
                let hash = $(this).attr("href");
                let target = $(hash);

                let mainContent = $("#main-content");

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
                        $('#nav-icon3').removeClass('open');
                        $('#top-menu').removeClass('show-menu');
                        $('#contacts-list-button').removeClass('active-button');
                    }
                }
            });
        }
    $("#link-start").click(function () {
        $("#link-start").removeClass("show-link");
        $("#top-menu li.active").removeClass("active");
    });


    $(document).on("scroll", Scroll_block);

    $("a[href*=\\#]").click(function(e){
        e.preventDefault();
        $(document).off("scroll");

        //Подсветка пунктов шапки в мобайле
        if ($(window).width() > 991) {
            $("#top-menu li.active").removeClass("active");
            $(this).parent().addClass("active");
        } else {
            //Показ меню моб.
            $('#contacts-list').removeClass('show-contacts');
            $('#nav-icon3').removeClass('open');
            $('#top-menu').removeClass('show-menu');


        }

        let hash = $(this).attr("href");
        let target = $(hash);

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
            $('#contacts-list-button').toggleClass('active-button');
        });
    } else {
        $('.parallax-window').parallax({imageSrc: '../img/main-bg.png'});
    }

    //валидация форм
    let pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
    let mailInput = $('#recipient-name');

    $('#send-mail').on('click', function(event){
        if(mailInput.val() != ''){
            if(mailInput.val().search(pattern) == 0){
                //alert("алё");

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
    let educationItem = $('.education-item-title');
    let elementHeights = educationItem.map(function() {
        return $(this).height();
    }).get();
    let maxHeight = Math.max.apply(null, elementHeights);
    educationItem.height(maxHeight);
});