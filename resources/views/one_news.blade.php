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
    <link rel="stylesheet" href="{{ URL::asset('css/one_news.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/burger_menu.css') }}">
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
{{--        <div class="title_text"><a>На залізничному вокзалі Киева встановлені пристрої під назвою “Маячок”</a></div>--}}
    </div>
    <div class="first_column">
        <div class="fc_first_row">
            <div class="news">
                <div class="title_text">На залізничному вокзалі Киева встановлені пристрої під назвою “Маячок”</div>
                <img class="news_img" src="{{ URL::asset('images/image1.png') }}">
                <div class="news_line_cont">
                    <div class="news_text_cont">
                        <div class="news_text">Диспенсер під назвою «Маячок» є спільною розробкою кафедри автоматизації проєктування енергетичних процесів та систем КПІ та компанії ТОВ «Оптимум Інжиніринг».
                            <br><br>Пристрій уже встановили на входах/виходах до Центрального залізничного вокзалу Києва. Це безконтактні автоматичні диспенсери, які вимірюють температуру пасажирів і водночас дезінфікують руки антисептичним розчином. Якщо температура підвищена, вмикається звуковий та світловий сигнал.
                            <br><br>Розробкою вже користуються КМДА, патрульна поліція Києва, Міністерство освіти, Міністерство оборони, Національна гвардія та столичний Центральний вокзал.
                        </div>
                    </div>
                    <hr class="news_line">
                    <div class="news_date">
                        <div class="n_date">Дата: 16 Квітня 2021 </div>
                        <div class="news_comments">
                            <img class="com_icon line" src="{{URL::asset('icons/003-conversation.svg')}}">
                            <div class="com_count line">2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="fc_second_row">--}}
{{--            <div class="last_news_title">Останні новини</div>--}}
{{--            <div class="last_news">--}}
{{--                <div class="l_news">--}}
{{--                    <div class="l_news_cont">--}}
{{--                        <img class="last_news_img line" src="{{URL::asset('images/maxresdefault.jpg')}}">--}}
{{--                        <button class="last_news_text line">Інтерв’ю з членом СКБ “SEFL KPI”</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="l_news">--}}
{{--                    <div class="l_news_cont">--}}
{{--                        <img class="last_news_img line" src="{{URL::asset('images/NVZB2.png')}}">--}}
{{--                        <button class="last_news_text line">Відкриття квест-кімнати “Назад у майбутнє”</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="l_news">--}}
{{--                    <div class="l_news_cont">--}}
{{--                        <img class="last_news_img line" src="{{URL::asset('images/image1.png')}}">--}}
{{--                        <button class="last_news_text line">Встановлені пристрої під назвою “Маячок”</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="second_column">
        <div class="sc_first_row">
            <div class="com_block">
                <div class="title_block">
                    <div class="pzdts">
                        <div class="com_title">Коментарі</div>
                        <button class="add_com_form">Додати коментар</button>
                    </div>
                    <div class="com">
                        <div class="com_cont">
                            <img class="com_img line" src="{{ URL::asset('icons/007-profile-user.svg')}}">
                            <div class="com_text line">
                                <div class="first_line">
                                    <div class="name line">Анастасія</div>
                                    <div class="date line">04.02.2021 у 16:17</div>
                                </div>
                                <div class="second_line">Заказывала впервые и была в шоке от мгновенной отправки и хорошего качества товара.🤎Заказывала впервые и была в шоке от мгновенной отправки и хорошего качества товара.🤎🤎</div>
                                <div class="third_line">
                                    <img class="like line" src="{{URL::asset('icons/like.svg')}}">
                                    <div class="like_count line count">0</div>
                                    <img class="dislike line" src="{{URL::asset('icons/like.svg')}}">
                                    <div class="dislike_count line count">0</div>
                                    <button class="answer_but line">Відповісти</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="com">
                        <div class="com_cont">
                            <img class="com_img line" src="{{ URL::asset('icons/007-profile-user.svg')}}">
                            <div class="com_text line">
                                <div class="first_line">
                                    <div class="name line">Анастасія</div>
                                    <div class="date line">04.02.2021 у 16:17</div>
                                </div>
                                <div class="second_line">Заказывала впервые и была в шоке от мгновенной отправки и хорошего качества товара.🤎Заказывала впервые и была в шоке от мгновенной отправки и хорошего качества товара.🤎🤎</div>
                                <div class="third_line">
                                    <img class="like line" src="{{URL::asset('icons/like.svg')}}">
                                    <div class="like_count line count">0</div>
                                    <img class="dislike line" src="{{URL::asset('icons/like.svg')}}">
                                    <div class="dislike_count line count">0</div>
                                    <button class="answer_but line">Відповісти</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sc_second_row">
            <div class="scsr_title">Додати коментар</div>
            <input type="text" name="nickname" placeholder="Ім'я" class="field1">
            <input type="text" name="email" placeholder="Email" class="field1">
            <textarea class="new_com_inf">Коментар</textarea>
            <button class="add_com_but">Додати</button>
        </div>
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
</body>
