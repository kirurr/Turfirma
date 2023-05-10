<?php 
  session_start();
  error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Турфирма</title>
</head>

<body>
  <!-- шапка сайта -->
  <header>
    <div class="container-flex">
      <div class="container">
        <div class="row">
          <div class="col-4 text-start">
            <p>Адрес: Дом 1</p>
            <p>
              <a href="tel:+798984658964">798984658964</a><br>
              <a href="tel:+798984658964">798984658964</a>
            </p>
          </div>
          <div class="col-4 text-center">
            <h1><a href="index.php">Турфирма</a></h1>
          </div>
          <div class="col-4 text-end">
            <div class="user">
              <span>Добро пожаловать, <?php
                if ($_SESSION['user']) {
                   echo $_SESSION['user']['full_name']; 
                  } else {
                    echo "Гость";
                  }
                ?></span>
                <?php
                if ($_SESSION['user']) {
                   echo '<button class="profileButton">Профиль</button>'; 
                  } else {
                    echo '<button class="regButton">Войти</button>';
                  }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- прилипающая навигация -->
  <nav class="navbar sticky-top">
    <div class="container">
      <div class="col-12">
        <ul>
          <li><a href="">Подбор тура</a></li>
          <li><a href="">Направления</a></li>
          <li><a href="">О нас</a></li>
          <li><a href="">Клиенту</a></li>
          <li><a href="">Новости</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- главная секция -->
  <section class="hero">
    <div class="container">
      <h1>Турфирма чето там</h1>
      <p>Наша турфирма самая пиздатая там все такое</p>
    </div>
  </section>

  <!-- популярные страны -->
  <section class="countries">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Наши популярные направления</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row gx-5 gy-5">

        <!-- одна страна -->
        <div class="col-4">
          <div class="country-cover">
            <img src="img/counrties/ispaniya.webp">
            <div class="country-grad">
              <a href="catalog.php"></a>
              <div class="country-text">
                <h3>Испания</h3>
                <p>от 228 1488 $</p>
              </div>
            </div>
          </div>
        </div>

        <!-- одна страна -->
        <div class="col-4">
          <div class="country-cover">
            <img src="img/counrties/ispaniya.webp">
            <div class="country-grad">
              <a href="catalog.php"></a>
              <div class="country-text">
                <h3>Испания</h3>
                <p>от 228 1488 $</p>
              </div>
            </div>
          </div>
        </div>

        <!-- одна страна -->
        <div class="col-4">
          <div class="country-cover">
            <img src="img/counrties/ispaniya.webp">
            <div class="country-grad">
              <a href="catalog.php"></a>
              <div class="country-text">
                <h3>Испания</h3>
                <p>от 228 1488 $</p>
              </div>
            </div>
          </div>
        </div>

        <!-- одна страна -->
        <div class="col-4">
          <div class="country-cover">
            <img src="img/counrties/ispaniya.webp">
            <div class="country-grad">
              <a href="catalog.php"></a>
              <div class="country-text">
                <h3>Испания</h3>
                <p>от 228 1488 $</p>
              </div>
            </div>
          </div>
        </div>

        <!-- одна страна -->
        <div class="col-4">
          <div class="country-cover">
            <img src="img/counrties/ispaniya.webp">
            <div class="country-grad">
              <a href="catalog.php"></a>
              <div class="country-text">
                <h3>Испания</h3>
                <p>от 228 1488 $</p>
              </div>
            </div>
          </div>
        </div>

        <!-- одна страна  -->
        <div class="col-4">
          <div class="country-cover">
            <img src="img/counrties/ispaniya.webp">
            <div class="country-grad">
              <a href="catalog.php"></a>
              <div class="country-text">
                <h3>Испания</h3>
                <p>от 228 1488 $</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>

  <!-- секция с работниками -->
  <section class="employers">
    <div class="container">
      <div class="col text-center">
        <h2>Наши сотрудники</h2>
      </div>
      <div class="row justify-content-center">

        <!-- один сотрудник -->
        <div class="col">
          <div class="employers-cover">
            <div class="employers-img"><img src="img/employers/alena2.png"></div>
            <h3>Алена</h3>
            <ul>
              <li><img src="img/icons/mortarboard-fill.svg"><span>БНТУ, бухгалтерский учет, анализ и аудит</span>
              </li>
              <li><img src="img/icons/geo-alt-fill.svg"><span>Посетила более 27 стран</span></li>
              <li><img src="img/icons/sun.svg"><span>Организовала 3107 туристам незабываемый отдых</span></li>
              <li><img src="img/icons/suit-heart-fill.svg"><span>Организовала более 30 свадебных туров</span></li>
              <li><img src="img/icons/compass.svg"><span>Основные направления: Турция, Египет, ОАЭ, Мальдивы, Куба,
                  Доминикана, Мексика, Таиланд, Вьетнам, все европейские страны и др.</span></li>
            </ul>
          </div>
        </div>

        <!-- один сотрудник -->
        <div class="col">
          <div class="employers-cover">
            <div class="employers-img"><img src="img/employers/alena2.png"></div>
            <h3>Алена</h3>
            <ul>
              <li><img src="img/icons/mortarboard-fill.svg"><span>БНТУ, бухгалтерский учет, анализ и аудит</span>
              </li>
              <li><img src="img/icons/geo-alt-fill.svg"><span>Посетила более 27 стран</span></li>
              <li><img src="img/icons/sun.svg"><span>Организовала 3107 туристам незабываемый отдых</span></li>
              <li><img src="img/icons/suit-heart-fill.svg"><span>Организовала более 30 свадебных туров</span></li>
              <li><img src="img/icons/compass.svg"><span>Основные направления: Турция, Египет, ОАЭ, Мальдивы, Куба,
                  Доминикана, Мексика, Таиланд, Вьетнам, все европейские страны и др.</span></li>
            </ul>
          </div>
        </div>
        <!-- один сотрудник -->
        <div class="col">
          <div class="employers-cover">
            <div class="employers-img"><img src="img/employers/alena2.png"></div>
            <h3>Алена</h3>
            <ul>
              <li><img src="img/icons/mortarboard-fill.svg"><span>БНТУ, бухгалтерский учет, анализ и аудит</span>
              </li>
              <li><img src="img/icons/geo-alt-fill.svg"><span>Посетила более 27 стран</span></li>
              <li><img src="img/icons/sun.svg"><span>Организовала 3107 туристам незабываемый отдых</span></li>
              <li><img src="img/icons/suit-heart-fill.svg"><span>Организовала более 30 свадебных туров</span></li>
              <li><img src="img/icons/compass.svg"><span>Основные направления: Турция, Египет, ОАЭ, Куба,
                  Доминикана, Мексика, Таиланд, Вьетнам, все европейские страны и др.</span></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- следуюющий ряд сотрудников -->
      <div class="row justify-content-center" style="margin-top: 8rem;">

        <!-- один сотрудник -->
        <div class="col">
          <div class="employers-cover">
            <div class="employers-img"><img src="img/employers/alena2.png"></div>
            <h3>Алена</h3>
            <ul>
              <li><img src="img/icons/mortarboard-fill.svg"><span>БНТУ, бухгалтерский учет, анализ и аудит</span>
              </li>
              <li><img src="img/icons/geo-alt-fill.svg"><span>Посетила более 27 стран</span></li>
              <li><img src="img/icons/sun.svg"><span>Организовала 3107 туристам незабываемый отдых</span></li>
              <li><img src="img/icons/suit-heart-fill.svg"><span>Организовала более 30 свадебных туров</span></li>
              <li><img src="img/icons/compass.svg"><span>Основные направления: Турция, Египет, ОАЭ, Мальдивы, Куба,
                  Доминикана, Мексика, Таиланд, Вьетнам, все европейские страны и др.</span></li>
            </ul>
          </div>
        </div>

        <!-- один сотрудник -->
        <div class="col">
          <div class="employers-cover">
            <div class="employers-img"><img src="img/employers/alena2.png"></div>
            <h3>Алена</h3>
            <ul>
              <li><img src="img/icons/mortarboard-fill.svg"><span>БНТУ, бухгалтерский учет, анализ и аудит</span>
              </li>
              <li><img src="img/icons/geo-alt-fill.svg"><span>Посетила более 27 стран</span></li>
              <li><img src="img/icons/sun.svg"><span>Организовала 3107 туристам незабываемый отдых</span></li>
              <li><img src="img/icons/suit-heart-fill.svg"><span>Организовала более 30 свадебных туров</span></li>
              <li><img src="img/icons/compass.svg"><span>Основные направления: Турция, Египет, ОАЭ, Мальдивы, Куба,
                  Доминикана, Мексика, Таиланд, Вьетнам, все европейские страны и др.</span></li>
            </ul>
          </div>
        </div>

        <!-- один сотрудник -->
        <div class="col">
          <div class="employers-cover">
            <div class="employers-img"><img src="img/employers/alena2.png"></div>
            <h3>Алена</h3>
            <ul>
              <li><img src="img/icons/mortarboard-fill.svg"><span>БНТУ, бухгалтерский учет, анализ и аудит</span>
              </li>
              <li><img src="img/icons/geo-alt-fill.svg"><span>Посетила более 27 стран</span></li>
              <li><img src="img/icons/sun.svg"><span>Организовала 3107 туристам незабываемый отдых</span></li>
              <li><img src="img/icons/suit-heart-fill.svg"><span>Организовала более 30 свадебных туров</span></li>
              <li><img src="img/icons/compass.svg"><span>Основные направления: Турция, Египет, ОАЭ, Куба,
                  Доминикана, Мексика, Таиланд, Вьетнам, все европейские страны и др.</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- секция с направлениями -->
  <section class="tours">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Наши направления</h2>
        </div>
        <div class="col">
          <div class="tours-cover">
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
          </div>
        </div>
        <div class="col">
          <div class="tours-cover">
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
          </div>
        </div>
        <div class="col">
          <div class="tours-cover">
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
          </div>
        </div>
        <div class="col">
          <div class="tours-cover">
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
            <a href="catalog.php">Испания</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- футер -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col">
          <h4>Принцип нашей работы</h4>
          <p>Клиент должен быть на 100% доволен отдыхом, начиная с этапа его планирования.</p>
        </div>
        <div class="col">
          <h4>Время работы</h4>
          <p>Пн — Пт: с 11:00 до 20:00<br>Сб — Вс: с 11:00 до 17:00</p>
          <h4>Адрес</h4>
          <p>ул. Л. Беды, 2 Б</p>
        </div>
        <div class="col">
          <h4>Контакты</h4>
          <p>
            <a href="tel:+375296299900">+375 29 629-99-00</a> <br>
            <a href="tel:+375296299900">+375 29 629-99-00</a> <br>
            <a href="tel:+375296299900">+375 29 629-99-00</a> <br>
            <a href="mailto:mail@taa.by">mail@taa.by</a>
          </p>
        </div>
        <div class="col">
          <h4>Социальные сети</h4>
          <a href=""><img src="img/icons/instagram.svg"></a>
          <a href=""><img src="img/icons/instagram.svg"></a>
          <a href=""><img src="img/icons/instagram.svg"></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- модальное окно с входом и регистрацией -->
  <dialog class="reqDialog">
    <a class="reqClose" href="#">×</a>
    <!-- форма для входа -->
    <form class="formLogin" action="">
      <h2>Войти в профиль</h2>
      <input name="email" type="text" placeholder="Ваш email">
      <input name="password" type="password" placeholder="Ваш пароль">
      <button type="submit" class="loginButton">Войти</button>
      <a id="formChange" href="#">Регистрация</a>
    </form>

    <!-- форма для регистрации -->
    <form class="formReqistration hide" action="">
      <h2>Регистрация</h2>
      <input name="full_name" type="text" placeholder="Введите ваше ФИО">
      <input name="emailReq" type="email" placeholder="Введите email">
      <input name="passwordReq" type="password" placeholder="Введите пароль">
      <button type="submit" class="reqButton">Зарегистрироваться</button>
      <a id="formSecondChange" href="#">Войти</a>
    </form>

    <p class="reqMessage none">Успешно!</p>
  </dialog>

  <!-- подключаем необходимые скрипты -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="/js/main.js"></script>


</body>

</html>