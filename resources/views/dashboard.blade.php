<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/dashboard.css") }}">
    <link rel="stylesheet" href="{{ asset("css/adaptive.css") }}">
    <link rel="stylesheet" href="{{ asset("css/fonts.css") }}">
    <title>{{ Auth::user()->name }}</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
    </x-slot>
</x-app-layout>

<section>
    <div class="info_about">
        <div class="avatar_logout">
            <img class="ava" src="storage/{{Auth::user()->avatar}}">
            <p>{{ Auth::user()->name }}</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link class="logout" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Выйти') }}
                </x-dropdown-link>
            </form>
        </div>
        <div class="info_user">
            <div class="log_email">
                <p>Логин: {{ Auth::user()->name }}</p>
                <p>E-mail: {{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
</section>

<section class="form_outback">
<h3><span>—</span> Øбратная связь <span>—</span></h3>
    <div class="form_out">
        <form action="">
            <textarea name="" placeholder="Введите свое сообщение :" id="" cols="41" rows="10"></textarea>
            <button type="submit">Подписаться</button>
        </form>
    </div>
</section>

<footer>
        <img class="mobile_footer" src="{{ asset("img/logofooter.png") }}" alt="">
        <ul class="navigation_footer">
            <li><img src="{{ asset("img/logofooter.png") }}" alt=""></li>
            <li>Главная</li>
            <li>О нас</li>
            <li>Каталог</li>            
            <li>Магазин</li>
            <li>Контакты</li>
        </ul>
        <a href="">Политика конфидециальности</a>
        <div class="cop">
            <p>LeafTea  ©  2022 Все права защищены</p>
        </div>
    </footer>
</body>
</html>