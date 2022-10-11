<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset("css/about.css") }}">
    <link rel="stylesheet" href="{{ asset("css/adaptive.css") }}">
    <link rel="stylesheet" href="{{ asset("css/fonts.css") }}">
    <title>Каталог</title>
  </head>
  <body>
  <header>
    <img class="logo_mobile" src="{{ asset("img/logofooter.png") }}" alt="">
        <ul class="navigation">
            <li>О нас</li>
            <li><a href="{{ asset ("catalog")}}">Каталог</a></li>
            <li class="logo_pc"><a href="{{ asset ("")}}"><img src="{{ asset("img/logo.png") }}" alt=""></a></li>
            <li>Магазин</li>
            <li class="login"><a href="/register">
                 @auth
                    {{ Auth::user()->name }}
                @endauth
            
                @guest
                    Войти
                @endguest
            </a></li>
        </ul>

        <a id="menu" onclick="click1()" class="burger-menu_button">
            <spun class="burger-menu_lines"></spun>
        </a>

    </header>
    
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

      <section class="where_we">
        <h3><span>—</span> Как найти нас? <span>—</span></h3>
        <div class="info_where_we">
          <div>
            <p>Тел: 896733127886</p>
            <p>Почта: danchik.kun@mail.ru</p>
            <p>Адрес: ул. Анатолия Сергеева, 5</p>
          </div>
          <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2753.9035457186988!2d48.023682915840894!3d46.35145868182157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41a905808f7047dd%3A0x6794cd466d796a84!2z0YPQuy4g0JDQvdCw0YLQvtC70LjRjyDQodC10YDQs9C10LXQstCwLCA1LCDQkNGB0YLRgNCw0YXQsNC90YwsINCQ0YHRgtGA0LDRhdCw0L3RgdC60LDRjyDQvtCx0LsuLCA0MTQwMDA!5e0!3m2!1sru!2sru!4v1665484295493!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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