<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
    <link rel="stylesheet" href="{{ asset("css/adaptive.css") }}">
    <link rel="stylesheet" href="{{ asset("css/fonts.css") }}">
    <title>Регистрация</title>
</head>
<body>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset("img/logo.png")}}" alt="">
                </a>
            </div>  
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        {{ csrf_field() }}
        <div class="centered">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                 <h1>Авторизация</h1>
            </div>
            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Введите почту" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="Введите пароль"
                                required autocomplete="current-password" />
            </div>

            

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Войти') }}
                </x-button>
            </div>
            <div>
            @if (Route::has('password.request'))
                    <a class="forgot_pass" href="{{ route('password.request') }}">
                        {{ __('Забыли свой пароль?') }}
                    </a>
                @endif
            </div>
            <!-- Remember Me -->
            <div class="remember_me">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" class="checkbox" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                </label>
            </div>
        </form>
        </div>
    </x-auth-card>
</x-guest-layout>
</body>
</html>