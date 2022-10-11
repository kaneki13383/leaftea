<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/welcome.css") }}">
    <link rel="stylesheet" href="{{ asset("css/adaptive.css") }}">
    <link rel="stylesheet" href="{{ asset("css/fonts.css") }}">
    <title>LeafTea</title>
</head>
<body>
    <header>
    <img class="logo_mobile" src="{{ asset("img/logofooter.png") }}" alt="">
        <ul class="navigation">
            <li><a href="{{ asset ("about")}}">О нас</a></li>
            <li><a href="{{ asset ("catalog")}}">Каталог</a></li>
            <li class="logo_pc"><img src="{{ asset("img/logo.png") }}" alt=""></li>
            <li>Магазин</li>
            <li class="login"><a href="">Войти</a></li>
        </ul>

        <a id="menu" onclick="click1()" class="burger-menu_button">
            <spun class="burger-menu_lines"></spun>
        </a>

    </header>

    <section class="under_header">
        <h1>our leaves will</h1><h2>leave you only joy</h2>
    </section>

    <section class="about">
        <h3><span>—</span> Ø нас <span>—</span></h3>
        <div class="d-f">
            <div class="text_one">
                <div><p>LeafTea был основан на стремлении установить стандарт качества и расширить представление о чае и его богатых, вдохновляющих традициях. Мы предлагаем чай и растительные ингредиенты, импортированные непосредственно из садов по всему миру. </p></div>
                <div><img src="{{ asset ("img/1.png")}}" alt=""></div>
            </div>
            <div class="text_two">
                <img src="{{ asset ("img/2.png")}}" alt="">
                <p>Мы черпаем вдохновение в древних ремесленных практиках с использованием методов органического выращивания, а также в современных кулинарных инновациях. Наша миссия, начиная со скромного начала и заканчивая признанным лидером на рынке деликатесного чая, никогда не колебалась.</p>
            </div>
        </div>     
    </section>

    <section class="top_tovar">
        <h3><span>—</span> Популярные товары <span>—</span></h3>
        <div class="tovar">
            <div class="tea">
                <div class="info_tea">
                    <img src="{{ asset ("img/angliiskiisadovnik1 1.png")}}" alt="">
                    <h4>Английский садовник</h4>
                    <p>260 ₽/50гр.</p>
                    <button>Купить</button>
                </div>
            </div>
            <div class="tea">
                <div class="info_tea">
                    <img src="{{ asset ("img/angliiskiisadovnik1 1.png")}}" alt="">
                    <h4>Вишневый Цитрус</h4>
                    <p>208 ₽/50гр.</p>
                    <button>Купить</button>
                    </div>
                </div>
            <div class="tea">
                <div class="info_tea">
                    <img src="{{ asset ("img/angliiskiisadovnik1 1.png")}}" alt="">
                    <h4>Секрет Императора</h4>
                    <p>280 ₽/50гр.</p>
                    <button>Купить</button>
                    </div>
                </div>
            <div class="tea">
                <div class="info_tea">
                    <img src="{{ asset ("img/angliiskiisadovnik1 1.png")}}" alt="">
                    <h4>Секрет Императрицы</h4>
                    <p>280 ₽/50гр.</p>
                    <button>Купить</button>
                </div>
            </div>           
        </div>
        <div>
            <button class="butt_more">Подробнее</button>
        </div>            
    </section>

    <section class="subscribe">
        <div class="block">
            <div>
                <img src="{{ asset ("img/pngegg (3) 1.png")}}" alt="">
            </div>            
            <div class="form">
                <div>
                    <h5>Подпишитесь на нас, чтобы ничего не пропустить</h5>
                </div>
                <div>
                    <form action="">
                        <input type="text" placeholder="Имя">
                        <input type="phone" placeholder="Телефон">
                        <input type="email" placeholder="E-mail">
                        <button type="submit">Подписаться</button>
                    </form>
                </div>                
                
            </div>
        </div>        
    </section>

    <section class="otziv">
        <h3><span>—</span> Øтзывы <span>—</span></h3>
        <div class="orders">
            <div class="order">                
                <img src="{{asset ("img/ava0.png")}}" alt="">
                <div class="comm">
                    <h5>Иван</h5>
                    <p>Я простой русский рабочий иван город москва люблю пить чай по старой русской традиции заварить самовар любить ватрушки и бублик leaftea мой любимый магазин </p>
                </div>
            </div>
            <div class="order">
                <img src="{{asset ("img/ava1.png")}}" alt="">
                <div class="comm">
                    <h5>Хасбула</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                </div>
            </div>
            <div class="order">
                <img src="{{asset ("img/ava2.png")}}" alt="">
                <div class="comm">
                    <h5>Петр</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                </div>
            </div>
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

    <script src="{{ asset("js/burger_menu.js") }}"></script>
</body>
</html>