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
    <link rel="stylesheet" href="{{ URL::asset('css/contacts.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="header_cont">
        <div class="line"><img class="head_logo" src="{{ URL::asset('icons/Logo.svg')}}" alt="logo"></div>
        <div class="head_text">Новини</div>
        <div class="head_text">Послуги</div>
        <div class="head_text">Портфоліо</div>
        <div class="head_text">Партнери</div>
        <div class="head_text">Контакти</div>
        <div class="head_text">Про нас</div>
        <div><img class="head_menu line" src="{{ URL::asset('icons/menu.svg')}}" alt="logo"></div>
    </div>
</div>
<div class="content">
    <div class="title">
        <div class="title_text">Контакти</div>
        <hr class="title_line">
    </div>
    <div class="columns">
        <div class="first_row">
            <div class="first_col_1">
                <div class="first_col_1_text_1 fct1">Консультація та замовлення послуги </div>
                <div class="block">
                    <div class="block1">
                        <div>
                            <div class="first_col_1_text_2 fct2">Зателефонуйте нам на:</div>
                            <div class="line"><img class="phone_icon" src="{{ URL::asset('icons/004-phone-call.svg')}}" alt="logo"></div>
                            <div class="first_col_1_text_3 fct_phone line ">+380 99 935 87 53</div>
                        </div>
                        <div>
                            <div class="first_col_1_text_2 fct2 fct2_1">Напишіть нам на:</div>
                            <div class="first_col_1_text_3 ">example@gmail.com</div>
                        </div>
                    </div>
                    <div class="block2">
                        <div class="first_col_1_text_2 fct2">Графік роботи:</div>
                        <div class="first_col_1_text_3 fct3">Пн-Пт:</div>
                        <div class="first_col_1_text_3 fct3">Сб:</div>
                        <div class="first_col_1_text_3 fct3">Нд:</div>
                    </div>
                </div>

            </div>
            <div class="second_row small">
                <div class="sticky">
                    <div class="second_col_1">
                        <div class="second_col_1_cont">
                            <div class="second_block1">
                                <div class="second_col_1_text_1">Виникли питання?</div>
                                <div class="second_col_1_text_2">Задайте їх в нашому телеграм-боті!</div>
                                <a href="https://t.me/apepsSuggestions_bot"><button class="ask_button">Запитати</button></a>
                            </div>
                        </div>

                    </div>
                    <div class="second_col_2">
                        <div class="sc2_title">Шукайте нас в соц. <br>мережах! </div>
                        <div class="sc2_icons">
                            {{--                   <div class="sc2_icons_cont">--}}
                            <a class="line" href="https://www.instagram.com/seflkpi/?hl=ru">
                                <img  src={{URL::asset('icons/instagram_blue.svg')}} id="inst_icon" >
                            </a>
                            {{--                   </div>--}}
                            <a class="line" href="https://www.facebook.com/seflkpi/">
                                <img src={{URL::asset('icons/facebook_blue.svg')}} id="fb_icon" >
                            </a>
                            <a class="line" href="https://t.me/apepsSuggestions_bot">
                                <img src={{URL::asset('icons/008-telegram.svg')}} id="telegram_icon" >
                            </a>
                        </div>
                        <div class="bord">
                            <div class="bord_"> </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="first_col_2">
                <div class="first_col_2_cont">
                    <div class="fc2_title">
                        <div class="fc2_title_text">Де нас можна знайти?</div>
                        <hr class="fc2_title_line">
                    </div>
                    <div class="first_col_2_text">Лабораторія розташована на території НТУУ “КПІ ім. І. Сікорського в навчальному копусі №5. Станція метро “Політехнічний інститут”</div>
                    <div class="first_col_2_bot">
                        <div class="first_col_2_text_2 ">м. Київ вул. Політехнічна 6</div>
                        <div class="first_col_2_map">
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.592937140417!2d30.46539556654316!3d50.44868241360494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce8314fdfde3%3A0xcaff87f52cccc2ec!2z0YPQuy4g0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQsNGPLCA2LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1621289197826!5m2!1sru!2sua"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second_row big">
            <div class="sticky">
                <div class="second_col_1">
                    <div class="second_col_1_cont">
                        <div class="second_block1">
                            <div class="second_col_1_text_1">Виникли питання?</div>
                            <div class="second_col_1_text_2">Задайте їх в нашому телеграм-боті!</div>
                            <a href="https://t.me/apepsSuggestions_bot"><button class="ask_button">Запитати</button></a>
                        </div>
                    </div>

                </div>
                <div class="second_col_2">
                    <div class="sc2_title">Шукайте нас в соц. <br>мережах! </div>
                    <div class="sc2_icons">
                        {{--                   <div class="sc2_icons_cont">--}}
                        <a class="line" href="https://www.instagram.com/seflkpi/?hl=ru">
                            <img  src={{URL::asset('icons/instagram_blue.svg')}} id="inst_icon" >
                        </a>
                        {{--                   </div>--}}
                        <a class="line" href="https://www.facebook.com/seflkpi/">
                            <img src={{URL::asset('icons/facebook_blue.svg')}} id="fb_icon" >
                        </a>
                        <a class="line" href="https://t.me/apepsSuggestions_bot">
                            <img src={{URL::asset('icons/008-telegram.svg')}} id="telegram_icon" >
                        </a>
                    </div>
                    <div class="bord">
                        <div class="bord_"> </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
<div class="footer">
    <div class="footer_cont">
        <div class="foot_row1">
            <div class="foot_cont1"><img class="foot_logo" src="{{ URL::asset('icons/Logo_white.svg')}}" alt="logo"></div>
            <div class="foot_inform1">
                <div class="foot_text_1">Інформація</div>
                <div class="foot_text_2">Про нас</div>
                <div class="foot_text_2">Наші партнери</div>
                <div class="foot_text_2">Контакти</div>
                <div class="foot_text_2">Відгуки</div>

            </div>
            <div class="foot_inform2">
                <div class="foot_text_1">Контакти</div>
                <div class="foot_text_2">+380999358753</div>
                <div class="foot_text_2">emai@gmail.com</div>
                <div class="foot_text_2">м. Київ вул. Політехнічна 6</div>
            </div>
            <div class="foot_cont2">
                <iframe class="foot_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.592937140417!2d30.46539556654316!3d50.44868241360494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce8314fdfde3%3A0xcaff87f52cccc2ec!2z0YPQuy4g0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQsNGPLCA2LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1621289197826!5m2!1sru!2sua"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="foot_row_min">
            <div class="foot_text_2 foot_title">Про нас</div>
            <div class="foot_text_2">Наші партнери</div>
            <div class="foot_text_2">Контакти</div>
            <div class="foot_text_2">Відгуки</div>
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
</body>
