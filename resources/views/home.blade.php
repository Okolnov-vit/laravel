@extends('layouts.app')

@section('content')
<section class="sleder_news">
    <div class="slider">
        <img src="{{ asset('img/minsk_reklam.jpg') }}" alt="Изображение 1" class="slide">
    </div>
</section>
<div class="news_text">Новости</div>
<div class="ssilka_news"><p id="top"></p></div>
<div class="conteiner_news">
    <!-- Можно передать новости из контроллера или жестко зафиксировать -->
    <div class="group1">
        <div>
            <img src="{{ asset('img/подшипники 3.jpg') }}" alt="Изображение 3" class="slide">
        </div>
        <div class="text_h">Заголовок</div>
        <div class="date_tex">12/03/2024</div>
        <div class="text_news">Сегодня нам завезли новые подшипники на коленчатый вал мотоцикла Минск!</div>
    </div>
    <!-- Аналогично для других новостей -->
</div>
@endsection
