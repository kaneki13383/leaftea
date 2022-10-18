<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/register.css") }}">
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
            
            <!-- Validation Errors -->
            <div class="form">
                
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    
                @csrf

                    <div>
                        <h1>Регистрация</h1>
                    </div>
                    <!-- Name -->
                    <div class="info_name">
                        
                        <x-input id="name"  class="block mt-1 w-full" type="text" name="name" placeholder="Введите имя" :value="old('name')" required autofocus />
                     </div>

                    <!-- Email Address -->
                    <div class="info_email">
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Введите почту" :value="old('email')" required />
                    </div>

                    <!-- Avatar -->
                    <div class="info_avatar">
                        <input id="avatar" type="file" name="avatar" placeholder="Вставьте картинку" required>
                    </div>

                    <!-- Password -->
                    <div class="info_password">
                        
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Введите пароль" required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="info_confirm_passord">
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Введите пароль еще раз" required />
                    </div>

                    <div class="info_link">
                        <x-button>
                            {{ __('Зарегистрироваться') }}
                        </x-button>
                    </div>
                    <div>
                    <a class="info_link_text" href="{{ route('login') }}">
                            {{ __('Уже зарегистрирован?') }}
                        </a>
                    </div>
                    <div>
                    <a class="info_link_text">
                            {{ __('Политика конфиденциальности') }}
                        </a>
                    </div>                    
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                </form>
            </div>
        </x-auth-card>
    </x-guest-layout>
</body>
</html>
