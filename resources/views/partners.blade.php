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
    <link rel="stylesheet" href="{{ URL::asset('css/partners.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/burger_menu.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
        <div  class="open">
            <span class="cls first"></span>
            <span>
		        <ul class="sub-menu ">
			        <li>
				        <a class="sub-menu_text_1" href="#about" title="about">Головна</a>
			        </li>
			        <li>
				        <a class="sub-menu_text_2" href="#skills" title="skills">Новини</a>
			        </li>
			        <li>
			        	<a class="sub-menu_text_2" href="#jobs" title="jobs">Послуги</a>
			        </li>
			        <li>
			        	<a class="sub-menu_text_2" href="#contact" title="contact">Портфоліо</a>
			        </li>
                    <li>
			        	<a class="sub-menu_text_2" href="#contact" title="contact">Партнери</a>
			        </li>
                    <li>
			        	<a class="sub-menu_text_2" href="#contact" title="contact">Контакти</a>
			        </li>
                    <li>
			        	<a class="sub-menu_text_2" href="#contact" title="contact">Про нас</a>
			        </li>
		        </ul>
            </span>
            <span class="cls span_cl"></span>
        </div>
        {{--        <div><img class="head_menu line" src="{{ URL::asset('icons/menu.svg')}}" alt="logo"></div>--}}
    </div>
</div>

<div class="content">
    <div class="first_block">
        <div class="first_block_cont">
            <div class="title">
                <div class="title_text">Партнери</div>
                <hr class="title_line">
            </div>
            <div class="first_block_text fbt1">
                Наше конструкторське бюро має різноманітний список партнерів, що займаються діяльністю в різноманітних сферах від 3D моделювання та друку, до систем  "розумний будинок".
            </div>
            <div class="first_block_text fbt2">
                Завдяки цьому, ми можемо запропонувати оригінальні та актуальні вирішення різноманітних технологічних задач.
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
    });
</script>
</body>
