<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>SEFL KPI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/news.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/burger_menu.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
{{--    <script src="{{ URL::asset('public/js/jquery.instagramFeed.min.js')}}"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="header_cont">
        <a href="{{ URL::asset('/')}}"><div class="line"><img class="head_logo" src="{{ URL::asset('icons/Logo.svg')}}" alt="logo"></div></a>
        <a href="{{ URL::asset('/news')}}"><div class="head_text">Новини</div></a>
        <a href="{{ URL::asset('/services')}}"><div class="head_text">Послуги</div></a>
        <a href="{{ URL::asset('/portfolio')}}"> <div class="head_text">Портфоліо</div></a>
        <a href="{{ URL::asset('/partners')}}"><div class="head_text">Партнери</div></a>
        <a href="{{ URL::asset('/contacts')}}"><div class="head_text">Контакти</div></a>
        <a href="{{ URL::asset('/about')}}"><div class="head_text ht">Про нас</div></a>
        <div  class="open">
            <span class="cls first"></span>
            <span>
		        <ul class="sub-menu ">
			        <li>
				        <a class="sub-menu_text_1" href="{{ URL::asset('/')}}" title="about">Головна</a>
			        </li>
			        <li>
				        <a class="sub-menu_text_2" href="{{ URL::asset('/news')}}" title="skills">Новини</a>
			        </li>
			        <li>
			        	<a class="sub-menu_text_2" href="{{ URL::asset('/services')}}" title="jobs">Послуги</a>
			        </li>
			        <li>
			        	<a class="sub-menu_text_2" href="{{ URL::asset('/portfolio')}}" title="contact">Портфоліо</a>
			        </li>
                    <li>
			        	<a class="sub-menu_text_2" href="{{ URL::asset('/partners')}}" title="contact">Партнери</a>
			        </li>
                    <li>
			        	<a class="sub-menu_text_2" href="{{ URL::asset('/contacts')}}" title="contact">Контакти</a>
			        </li>
                    <li>
			        	<a class="sub-menu_text_2" href="{{ URL::asset('/about')}}" title="contact">Про нас</a>
			        </li>
		        </ul>
            </span>
            <span class="cls span_cl"></span>
        </div>
        {{--        <div><img class="head_menu line" src="{{ URL::asset('icons/menu.svg')}}" alt="logo"></div>--}}
    </div>
</div>
<div class="content">
    <div class="title">
        <div class="title_text">Новини</div>
        <hr class="title_line">
    </div>
    <div class="all_news">
        <div class="news">
            <div class="news_l_b">
                <div class="news_cont">
                    <div class="news_img"> <img class="n_img" src={{URL::asset('images/maxresdefault.jpg')}}></div>
                    <div class="news_title">Інтерв’ю з членом СКБ “SEFL KPI”</div>
                    <div class="news_description">На YouTube каналі “КПІмедіа” вийшло інтерв’ю в якому член СКБ “SEFL” Владислав Голець розказує про особливості навчання в університеті.</div>
                </div>
                <hr class="news_line">
                <div class="news_date">
                    <div class="n_date">Дата: 16 Квітня 2021 </div>
                    <div class="news_comments">
                        <img class="com_icon line" src={{URL::asset('icons/003-conversation.svg')}}>
                        <div class="com_count line">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="news_l_b">
                <div class="news_cont">
                    <div class="news_img"> <img class="n_img" src={{URL::asset('images/NVZB2.png')}}></div>
                    <div class="news_title">Відкриття квест-кімнати “Назад у майбутнє”</div>
                    <div class="news_description">Відбулося відкриття квест-кімнати створеної по мотивам х/ф “Назад у майбутнє”, що була створена спільно з мережею “KADROOM”.</div>
                </div>
                <hr class="news_line">
                <div class="news_date">
                    <div class="n_date">Дата: 16 Квітня 2021 </div>
                    <div class="news_comments">
                        <img class="com_icon line" src={{URL::asset('icons/003-conversation.svg')}}>
                        <div class="com_count line">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="news_l_b">
                <div class="news_cont">
                    <div class="news_img"> <img class="n_img" src={{URL::asset('images/image1.png')}}></div>
                    <div class="news_title">На залізничному вокзалі Киева встановлені пристрої під назвою “Маячок”</div>
                    <div class="news_description">На входах та виходах Центрального залізничного вокзалу Киева встановлені пристрої під назвою “Маячок”. Це спільна розробка кафедри АПЕПС та ТОВ “Оптимум Інжиніринг”.</div>
                </div>
                <hr class="news_line">
                <div class="news_date">
                    <div class="n_date">Дата: 16 Квітня 2021 </div>
                    <div class="news_comments">
                        <img class="com_icon line" src={{URL::asset('icons/003-conversation.svg')}}>
                        <div class="com_count line">2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="but_cl">
        <button class="more_news">Дивитись більше</button>
    </div>
    <div id="instafeed">
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">

        </script>
        <script src="{{ URL::asset('public/js/InstagramFeed.min.js')}}"></script>
        <script>
            (function(){
                new InstagramFeed({
                    'username': 'seflkpi',
                    'container': "#instafeed",
                    'display_profile': true,
                    'display_biography': true,
                    'display_gallery': true,
                    'callback': null,
                    'styling': true,
                    'items': 8,
                    'items_per_row': 4,
                    'margin': 1
                });
            })();
        </script>
    </div>


</div>
<div class="footer">
    <div class="footer_cont">
        <div class="foot_row1">
            <div class="foot_cont1"><img class="foot_logo" src="{{ URL::asset('icons/Logo_white.svg')}}" alt="logo"></div>
            <div class="foot_inform1">
                <div class="foot_text_1">Інформація</div>
                <a href="{{ URL::asset('/about')}}"><div class="foot_text_2">Про нас</div></a>
                <a href="{{ URL::asset('/partners')}}"><div class="foot_text_2">Наші партнери</div></a>
                <a href="{{ URL::asset('/contacts')}}"><div class="foot_text_2">Контакти</div></a>
                <a href="{{ URL::asset('/about')}}"><div class="foot_text_2">Відгуки</div></a>

            </div>
            <div class="foot_inform2">
                <a href="{{ URL::asset('/contacts')}}"><div class="foot_text_1">Контакти</div></a>
                <div class="foot_text_2">+380999358753</div>
                <div class="foot_text_2">emai@gmail.com</div>
                <div class="foot_text_2">м. Київ вул. Політехнічна 6</div>
            </div>
            <div class="foot_cont2">
                <iframe class="foot_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.592937140417!2d30.46539556654316!3d50.44868241360494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce8314fdfde3%3A0xcaff87f52cccc2ec!2z0YPQuy4g0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQsNGPLCA2LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1621289197826!5m2!1sru!2sua"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="foot_row_min">
            <a href="{{ URL::asset('/about')}}"><div class="foot_text_2 foot_title">Про нас</div></a>
            <a href="{{ URL::asset('/partners')}}"><div class="foot_text_2">Наші партнери</div></a>
            <a href="{{ URL::asset('/contacts')}}"><div class="foot_text_2">Контакти</div></a>
            <a href="{{ URL::asset('/about')}}"><div class="foot_text_2">Відгуки</div></a>
        </div>
        <hr class="foot_line">
        <div class="foot_row2">
            <div class="foot_text_2 f_t">©SEFL 2021</div>
            <div class="foot_icons_cont">
                <div class="line"><a href="https://www.instagram.com/seflkpi/?hl=ru"><img class="foot_icons " src="{{ URL::asset('icons/001-instagram.svg')}}"></a></div>
                <div class="line"><a href="https://www.facebook.com/seflkpi/"><img class="foot_icons" src="{{ URL::asset('icons/002-facebook.svg')}}"></a></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).delegate('.open', 'click', function(event){
            $(".header").addClass("stop");
            if (window.matchMedia("(min-width: 500px)").matches){
                $(".header").removeClass("stop");
                $("body").addClass("stop");
            }
            $(this).addClass('oppenned');
            event.stopPropagation();
        })
        $(document).delegate('body', 'click', function(event) {
            $('.open').removeClass('oppenned');
            $(".header").removeClass("stop");
            if (window.matchMedia("(min-width: 500px)").matches){
                $("body").removeClass("stop");
            }
        })
        $(document).delegate('.cls', 'click', function(event){
            $('.open').removeClass('oppenned');
            $(".header").removeClass("stop");
            if (window.matchMedia("(min-width: 500px)").matches){
                $("body").removeClass("stop");
            }
            event.stopPropagation();
        });
        $(document).delegate('.span_cl', 'click', function(event){
            $('.open').removeClass('oppenned');
            $(".header").removeClass("stop");
            if (window.matchMedia("(min-width: 500px)").matches){
                $("body").removeClass("stop");
            }
            event.stopPropagation();
        });
    });
</script>
{{--<script>--}}
{{--    (function ($) {--}}
{{--        $(window).on('load', function () {--}}
{{--            $.instagramFeed({--}}
{{--                'username': 'seflkpi', //Имя пользователя--}}
{{--                'container': "#instafeed", //Контейнер для изображений--}}
{{--                'display_profile': false, //Отображение профиля--}}
{{--                'display_biography': false, //Отображение биографии--}}
{{--                'display_gallery': true, //Отображение галереи--}}
{{--                'styling': true, //Стандартные стили библиотеки--}}
{{--                'items': 8, //Количество изображений в галереи--}}
{{--                'items_per_row': 4, //Количество изображений в ряд--}}
{{--                'margin': 0.5 //Отступ между изображениями--}}
{{--            });--}}
{{--        });--}}
{{--    })(jQuery);--}}
{{--</script>--}}
</body>
