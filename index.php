<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=768, minimum-scale=0, maximum-scale=1.0, user-scalable=no,  shrink-to-fit=no">
    <title>Портфолио - Владислав Саланжий</title>
    <style>
        .preloader {
            background: white;
            overflow: hidden;
            position: fixed;
            left: 0;
            top: 0;
            right:0;
            bottom:0;
            z-index: 100000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <link rel="icon" type="image/png" sizes="32x32" href="./favicon.png">

    <script src="https://kit.fontawesome.com/eab44482b6.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,500,700|Nunito:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="./css/styles.min.css">
</head>
<body class="overflow-hidden">
<div class="preloader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div class="title-arrow-wrap justify-content-center">
    <div class="title-arrow">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
</div>

<a href="#start-page" class="link-up d-flex justify-content-center align-items-center" id="link-start"><i class="fas fa-chevron-up"></i></a>
<!-- Modal -->
<div class="modal fade send-mail-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center position-relative">
                <h5 class="modal-title" id="exampleModalLabel">Отправить сообщение</h5>
                <button type="button" class="close close-modal position-absolute" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="send-mail-form">
                    <div class="form-group">
                        <input type="text" name="name" value="" class="form-control" id="recipient-name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" value="" class="form-control" id="recipient-mail" placeholder="Адрес вашей эл.почты">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Текст сообщения:</label>
                        <textarea name="message" class="form-control" id="message-text"></textarea>
                    </div>
                    <p class="my-mail">Адрес моей электронной почты:</p>
                    <p class="my-mail">vladsa1991@gmail.com</p>
                    <div class="modal-footer d-flex justify-content-center mail-input-wrap">
                        <input type="submit" name="submit" id="send-mail" class="btn send-mail-button" value="Отправить">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!--Toast-->
<div class="toast-send-message">
    <span>Сообщение отправлено<i class="fas fa-check-circle"></i></span>
</div>
<header class="parallax-window d-flex flex-column justify-content-between" id="start-page" data-parallax="scroll" data-image-src="./img/main-bg.png">
    <div class="title-section">
        <div class="d-flex flex-column justify-content-center">
            <div class="photo-wrap text-center">
                <span class="photo">
                    <picture>
                        <source media="(max-width: 991px)" srcset="./img/photo-mobile.png">
                        <img src="./img/photo.png" alt="" class="img-fluid">
                    </picture>
                </span>

            </div>
            <h1 class="main-title text-center">Владислав Саланжий</h1>
            <p class="text-center">Junior Front-End Developer, верстальщик</p>
            <p class="text-center">Днепр</p>
        </div>
    </div>
</header>
<article class="" id="main-content">
    <div class="header-nav d-flex wow fadeInUp" data-wow-delay=".4s">
        <div class="d-flex">
            <div class="contacts-list-button-mobile d-flex align-items-center justify-content-center d-lg-none" id="contacts-list-button">
                <i class="far fa-comments"></i>
            </div>
        </div>
        <div class="d-flex flex-row flex-lg-column justify-content-between align-items-center contacts-list-wrap text-center" id="contacts-list">
            <a title="Viber" href="viber://add?number=380995606124" class="d-lg-none"><i class="fab fa-viber"></i></a>
            <a title="Telegram" href="tg://resolve?domain=prime_dp" class="d-lg-none"><i class="fab fa-telegram-plane"></i></a>
            <div class="phone-numders-wrap d-none d-lg-block">
                <i class="fas fa-phone-alt"></i>
                <div class="phone-numder">
                    <a class="text-nowrap" href="tel:+380995606124">+38(099)560-61-24</a>
                    <a class="text-nowrap" href="tel:+380934451870">+38(093)445-18-70</a>
                </div>
            </div>
            <a href="tel:+380995606124" class="d-lg-none"><i class="fas fa-phone-alt"></i></a>
            <a href="https://www.linkedin.com/in/%D0%B2%D0%BB%D0%B0%D0%B4%D0%B8%D1%81%D0%BB%D0%B0%D0%B2-%D1%81%D0%B0%D0%BB%D0%B0%D0%BD%D0%B6%D0%B8%D0%B9-41587a156/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <button type="button" class="contacts-list-send-mail" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-envelope"></i></button>
        </div>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-end">
                <nav class="col-auto" id="top-menu">
                    <ul class="d-flex flex-column flex-lg-row justify-content-between nav nav-pills nav-stacked" id="mainnav">
                        <li><a href="#education">Обучение</a></li>
                        <li><a href="#portfolio">Портфолио</a></li>
                        <li><a href="#work-places">Места работы</a></li>
                        <li><a href="#stack">Стек технологий</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="d-lg-none" id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <section class="education overflow-hidden" id="education">
        <div class="container content-wrapper">
            <div class="d-flex justify-content-center">
                <h4 class="section-title">Обучение</h4>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3 pb-4 pb-lg-0 order-1 order-lg-0 education-item-wrap">
                    <div class="education-item wow fadeInLeft" data-wow-delay=".4s">
                        <div class="education-item-title"><p>Практический JavaScript, онлайн курс А.Лущенко</p></div>
                        <ul class="wow fadeInUp" data-wow-delay=".4s">
                            <li>Знакомство с JavaScript. Как JS выполняется в браузере</li>
                            <li>Основы: переменные, ветвление, циклы, массивы, объекты</li>
                            <li>Работа с DOM</li>
                            <li>Работа с классами CSS</li>
                            <li>События и событийное программирование</li>
                            <li>Работа с формами, обработка данных</li>
                            <li>Работа с модальными окнами</li>
                            <li>Взаимодействие с Back-end. AJAX</li>
                            <li>Работа с cookies</li>
                            <li>Оптимизация кода</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3 pb-4 pb-lg-0 order-0 order-lg-1 education-item-wrap">
                    <div class="education-item wow fadeInLeft" data-wow-delay=".2s">
                        <div class="education-item-title"><p>Компьютерная школа Hillel<br>Front-End Basic</p></div>
                        <ul class="wow fadeInUp" data-wow-delay=".4s">
                            <li>HTML,CSS</li>
                            <li>Адаптивность. Responsive.</li>
                            <li>CSS анимация</li>
                            <li>CSS Фреймворки</li>
                            <li>Препроцессоры</li>
                            <li>Работа с SVG</li>
                            <li>DOM</li>
                            <li>Постпроцессоры</li>
                            <li>Устройство браузера</li>
                        </ul>
                        <div class="d-flex justify-content-center wow fadeInUp" data-wow-delay=".4s"><a data-fancybox="gallery" href="./img/sertif.png">Сертификат</a></div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 order-2 order-lg-2 education-item-wrap wow fadeInRight" data-wow-delay=".2s">
                    <div class="education-item mb-4">
                        <div class="education-item-title"><p>ПГАСиА</p></div>
                        <ul class="">
                            <li>Факультет инженерной механики и машиностроения</li>
                        </ul>

                    </div>
                </div>
                <div class="col-3 education-item-wrap order-3 d-none d-lg-flex wow fadeInRight"  data-wow-delay=".4s">
                    <span class="lnr lnr-graduation-hat"></span>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio pb-0 pb-lg-5" id="portfolio">
        <div class="container text-center">
            <h4 class="section-title">Портфолио</h4>
        </div>

        <div class="container-fluid">
            <div class="portfolio-slider-wrap">
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <div class="container">
                                    <div class="portfolio-item-wrap d-flex flex-column flex-lg-row align-items-center">
                                        <a href="http://stoolstest.zzz.com.ua/" class="preview-wrap" target="_blank" title="Кликните для перехода на сайт">
                                            <picture>
                                                <source media="(max-width: 991px)" srcset="./img/starttools-mobile.png">
                                                <img src="./img/starttools.png" alt="" class="img-fluid">
                                            </picture>
                                        </a>
                                        <ul class="description">
                                            <li>Bootstrap 4, Sass</li>
                                            <li>Проект на WordPress (страница "КАТАЛОГ ТОВАРОВ")</li>
                                            <li>Шапка скрывается при скролле вниз и появляется при скролле вверх (jQuery)</li>
                                            <li>Модальное окно входа</li>
                                            <li>Проверка содержимого поля электронной почты на стороне пользователя(JS).</li>
                                            <li>Слайдеры (Owl-carousel)</li>
                                            <li>Видео в слайдере (Fancybox 3)</li>
                                            <li>Fontello, icomoon</li>
                                            <li>Adaptive, Mobile</li>
                                            <li class="list-unstyled"><a class="git-link" href="https://github.com/prime-dp/surfing.git" target="_blank">Исходники на GitHub здесь</a></li>
                                        </ul>
                                        <div class="custom-nav">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="owl-item">
                                <div class="container">
                                    <div class="portfolio-item-wrap d-flex flex-column flex-lg-row align-items-center">
                                        <a href="https://prime-dp.github.io/NewProvidance/" class="preview-wrap" target="_blank" title="Кликните для перехода на сайт">
                                            <picture>
                                                <source media="(max-width: 991px)" srcset="./img/newprovidance-mobile.png">
                                                <img src="./img/newprovidance.png" alt="" class="img-fluid">
                                            </picture>
                                        </a>
                                        <ul class="description">
                                            <li>Bootstrap 4, Sass</li>
                                            <li>Анимация (Wow.js)</li>
                                            <li>Видео (Fancybox 3)</li>
                                            <li>Проверка содержимого поля электронной почты на стороне пользователя(JS).</li>
                                            <li>Рабочий анимированый триггер выбора стоимости</li>
                                            <li>Слайдер с отзывами</li>
                                            <li>Font-awesome, Linearicons</li>
                                            <li>Adaptive до 992px</li>
                                            <li class="list-unstyled"><a class="git-link" href="https://github.com/prime-dp/NewProvidance.git" target="_blank">Исходники на GitHub здесь</a></li>
                                        </ul>
                                        <div class="custom-nav">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="work-places-wrap overflow-hidden" id="work-places">
        <div class="container content-wrapper">
            <div class="d-flex justify-content-center">
                <h4 class="section-title wow fadeIn" data-wow-delay=".7s">Места работы</h4>
            </div>
            <div class="row">
                <div class="col-4 d-none d-lg-flex align-items-center work-main-icon-wrap wow swing" data-wow-delay="1s">
                    <span class="lnr lnr-briefcase"></span>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="position-relative">
                        <div class="work-places-line h-100 wow bounceInDown" data-wow-delay=".4s">
                        </div>
                        <ul class="work-places wow fadeInRight" data-wow-delay=".7s">
                            <li>i<span>ProMobile Service</span><br><p> - мастер по ремонту мобильных телефонов, планшетов, ноутбуков и другой техники<br>(2018 - н.в.)</p></li>
                            <li><span>Touch.com.ua</span><br><p> - мастер по ремонту мобильных телефонов, планшетов, ноутбуков и другой техники<br>(2015-2018)</p></li>
                            <li><span>Ооо Аквапласт</span><br><p> - оператор водоочистительного оборудования<br>(2014-2015)</p></li>
                            <li><span>Фрегат</span><br><p> - оператор технической поддержки<br>(2013-2014)</p></li>
                            <li><span>Ооо Энергопромавтоматика</span><br><p> - мастер по ремонту электрооборудования<br>(2011-2012)</p></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="about-me" id="stack">
        <div class="container">
            <div class="content-wrapper d-flex flex-column">
                <h4 class="section-title text-center">Стек технологий</h4>
                <ul class="">
                    <li><span class="text-uppercase">html,css</span> - семантичность,кроссбраузерность.</li>
                    <li><span class="text-uppercase">js (es6)</span><span>, jQuery</span></li>
                    <li><span>Bootstrap 4</span></li>
                    <li><span>Адаптивность</span></li>
                    <li><span>Sass</span> - вложенность, переменные, миксины, фрагментирование, extend.</li>
                    <li><span>Gulp</span> - browser sync, autoprefixer, sass, clean-css, gulp-terser.</li>
                    <li><span>WordPress</span> - создание тем, натяжка верстки.</li>
                    <li><span>Git</span></li>
                    <li><span class="text-uppercase">Php</span><span>, MySQL, Ajax</span> - по мере необходимости.</li>
                    <li><span>Photoshop, Avocode, PhpStorm</span></li>
                </ul>
            </div>
        </div>
    </section>

</article>
<footer class="footer-wrap d-flex justify-content-center">
    <a href="https://github.com/prime-dp/Portfolio" class="git-link" target="_blank">Исходники этого сайта на GitHub</a>
</footer>
<script src="./js/jquery-3.4.1.min.js"></script>
<script>
    $(window).on('load', function () {
        $(function () {
            $(window).scrollTop(0);
        });
        let preloader = $('.preloader'),
            qbody = $('body'),
            loader = preloader.find('.spinner-border');

        loader.fadeOut();
        preloader.delay(350).fadeOut('slow');
        qbody.removeClass('overflow-hidden');
    });
</script>
<script src="./js/jquery.fancybox.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/wow.min.js"></script>
<script src="./js/parallax.min.js"></script>
<script src="./js/main.min.js"></script>
</body>
</html>