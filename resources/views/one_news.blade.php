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
    <link rel="stylesheet" href="{{ URL::asset('css/test.css') }}">
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
            <div class="del" style="display: none !important;">{{$count = \App\Models\Comment::where('post_id', $news->id)->get()->count()}}</div>
            <div class="news">
                <div class="title_text">{{$news->title}}</div>
                <img class="news_img" src="{{ URL::asset('')}}{{$news->image}}">
                <div class="news_line_cont">
                    <div class="news_text_cont">
                        <div class="news_text">{{$news->text_1}}
                            <br><br>{{$news->text_2}}
                            <br><br>{{$news->text_3}}
                        </div>
                    </div>
                    <hr class="news_line">
                    <div class="news_date">
                        <div class="n_date">Дата: {{$news->date}} </div>
                        <div class="news_comments">
                            <img class="com_icon line" src="{{URL::asset('icons/003-conversation.svg')}}">
                            <div class="com_count line">{{$count}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fc_second_row">
            <div class="last_news_title lt1">Останні новини</div>
{{--            <div class="lt2">Останні новини</div>--}}
            <div class="last_news">
                <div class="del" style="display: none !important;">{{$i = 0}}</div>
                @foreach($all_news as $news1)
                    @if($i < 3)
                        <a href="{{ URL::asset('')}}news/{{$news1->id}}"><div class="l_news">
                            <div class="l_news_cont">
                                <img class="last_news_img line_1" src="{{URL::asset('')}}{{$news1->image}}">
                                <div class="qqq">
                                    <button class="last_news_text line_1">{{$news1->title}}”</button>
                                </div>
                            </div>
                            </div></a>
                        <div class="del" style="display: none !important;">{{$i++}}</div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="second_column">
        <div class="sc_first_row">
            <div class="com_block">
                <div class="title_block">
                    <div class="pzdts">
                        <div class="com_title">Коментарі</div>

                        <div onclick="show('none')" id="gray"></div>
                        <div id="coment" >
                            <form action={{ URL::asset('')}}news/{{$news->id}} method="post">
                                @csrf
                                <div class="rev_block">
                                    <div class="title_rev">
                                        Написати коментар
                                    </div>
                                    <hr class="line_title_rev">
                                    <div class="fields_r">
                                        <div class="f1">
                                            <div class="text_f">Введіть ім'я*</div>
                                            <div >
                                                <input type="text" name="nickname" placeholder="Гість" class="field1">
                                            </div>
                                        </div>
                                        <div class="f1">
                                            <div class="text_f">Введіть email*</div>
                                            <div>
                                                <input type="text" name="email" placeholder="example@example" class="field1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text_com">
                                        <div class="text_f">Введіть повідомлення*</div>
                                        <textarea name="rev_text" id="message">Текст</textarea>
                                    </div>
                                    <div class="buttons">
                                        <button type="submit" name="enter" class="publish">Опублікувати</button>
                                        <div class="exit" onclick="show('none')">Скасувати</div>
                                    </div>

                                </div>


                            </form>

                        </div>
                        <script>
                            function show(state)
                            {

                                document.getElementById('coment').style.display = state;
                                document.getElementById('gray').style.display = state;
                            }
                        </script>
                    </div>
                    @foreach($comments as $comment)
                    <div class="com">
                        <div class="com_cont">
                            <img class="com_img line" src="{{ URL::asset('icons/007-profile-user.svg')}}">
                            <div class="com_text line">
                                <div class="first_line">
                                    <div class="name line">{{$comment->name}}</div>
                                    <div class="date line">{{$comment->date}} у {{$comment->time}}</div>
                                </div>
                                <div class="second_line">{{$comment->text}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="sc_second_row">
            <form action={{ URL::asset('')}}news/{{$news->id}} method="post">
                @csrf
                <div class="scsr_title">Додати коментар</div>
                <input type="text" name="nickname" placeholder="Ім'я" class="field1">
                <input type="text" name="email" placeholder="Email" class="field1">
                <textarea class="new_com_inf" name="rev_text">Коментар</textarea>
{{--                <button class="add_com_but">Додати</button>--}}
                <button type="submit" name="enter" class="add_com_but publish">Додати</button>
            </form>
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
            if (window.matchMedia("(max-width: 500px)").matches){
                // $(".header").removeClass("stop");
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
