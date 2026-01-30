<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Soviet motorcycle</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- Можно подключить шрифты также через Blade -->
<!-- ... тут ваши ссылки на Google Fonts, такие же, как в старом сайте. -->
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header_title">
            <img src="{{ asset('img/logo.svg') }}" alt="Soviet motorcycle" class="logo">
            <div class="logo_name">Soviet motorcycle</div>
            <div class="group_menu">
                <ul>
                    <li>
                        <a href="#">
                            <div class="burger"><span></span></div>ВСЕ КАТЕГОРИИ
                        </a>
                        <ul>
                            <li><a href="{{ route('catalog') }}">Минск 125</a></li>
                            <li><a href="#">Восход 3м</a></li>
                            <li><a href="http://sait-viti/">joomla</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('home') }}">ГЛАВНАЯ</a></li>
                    <li><a href="{{ route('basket') }}">ОПЛАТА</a></li>
                    <li><a href="#top2">КОНТАКТЫ</a></li>
                    <li><a href="#top1">Новости</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Контент страницы -->
@yield('content')

<!-- Общий footer -->
<footer class="foote">
    <div class="group">
        <div class="logo_foote">
            <img src="{{ asset('img/logo_2.svg') }}" alt="Soviet motorcycle" class="logo_f">
            <div class="logo_name">Soviet motorcycle</div>
            <div class="text_foote">lorem ipsum sample text...</div>
            <div class="group_fot_1">
                <div class="tex_1">О КОМПАНИИ</div>
                <div class="line"></div>
                <div class="text1">Доставка</div>
                <div class="text2">Оплата</div>
                <div class="text3">Контакты</div>
                <div class="text4">Возврат</div>
            </div>
            <div class="group_fot_2">
                <div class="tex_1">КОНТАКТЫ</div>
                <div class="line"></div>
                <div class="text4">Ульяновск,
                ул. Водопроводная</div>
                <div class="text2">(812) 444-**-11</div>
                <div class="text1">motorold@shop.ru</div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@stack('scripts')
</body>
</html>
