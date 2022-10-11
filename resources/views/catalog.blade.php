<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset("css/catalog.css") }}">
    <link rel="stylesheet" href="{{ asset("css/adaptive.css") }}">
    <link rel="stylesheet" href="{{ asset("css/fonts.css") }}">
    <title>Каталог</title>
  </head>
  <body>
  <header>
    <img class="logo_mobile" src="{{ asset("img/logofooter.png") }}" alt="">
        <ul class="navigation">
            <li><a href="{{ asset ("about")}}">О нас</a></li>
            <li>Каталог</li>
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
    <div class="sales">
      <div class="sales1">
        <img class="chainik" src="/img/Group60.png" />
        <div class="sales_stuff">
          <p class="sales_text">750₽</p>
          <input type="submit" class="sales_more" value="Подробнее" />
        </div>
      </div>
      <div class="sales__cont">
        <div class="sale">
          <img src="/img/Group61.png" class="sales_goods" alt="" />
          <div class="sales_stuff">
            <p class="stuff_desc">750₽</p>
            <input type="submit" class="sales_more1" value="Подробнее" />
          </div>
        </div>
        <div class="sale">
          <img src="/img/Group62.png" class="sales_goods" alt="" />
          <div class="sales_stuff">
            <p class="stuff_desc">750₽</p>
            <input type="submit" class="sales_more1" value="Подробнее" />
          </div>
        </div>
      </div>
    </div>

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

    <section class="catalog">
      <h3><span>—</span> Категории <span>—</span></h3>
      <div class="catalog_img">
        <div class="info_catalog">
          <img src="{{ asset ("img/Rectangle 18.png")}}" alt="">
          <div class="catalog_stuff">
            <p class="stuff_text">Листовой чай</p>
          </div>
        </div>
        <div class="info_catalog">
          <img src="{{ asset ("img/Rectangle 16.png")}}" alt="">
          <div class="catalog_stuff">
            <p class="stuff_text">Цветущий чай</p>
          </div>
        </div>
        <div class="info_catalog">
          <img src="{{ asset ("img/Rectangle 17.png")}}" alt="">
          <div class="catalog_stuff">
            <p class="stuff_text">Bubble tea</p>
          </div>
        </div>
      </div>
    </section>

    <section class="tovar_info">
        <h3><span>—</span> Товары <span>—</span></h3>
        
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
          </div>
        <div>
            <button class="butt_more">Подробнее</button>
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
