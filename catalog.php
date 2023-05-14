<?php 
session_start();
error_reporting(0);

$connect = new PDO('sqlite:vendor/turfirma.db');
$tours_statement = $connect->query("SELECT * FROM tours");
$tours = $tours_statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Туры по Испании</title>
</head>

<body>

  <!-- шапка сайта -->
  <header>
    <div class="container-flex">
      <div class="container">
        <div class="row">
          <div class="col-4 text-start">
            <p>Адрес: дом подзатылкина</p>
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

  <!-- hero секция -->
  <section class="catalog-hero">
    <div class="container text-center">
      <h1>Туры по Испании</h1>
    </div>
  </section>

  <!-- секция с турами -->
  <section class="catalog">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <nav class="bread">
            <ul>
              <li><a href="index.php">Главная</a></li>
              <li>/</li>
              <li class="active"><a href="#">Туры по Испании</a></li>
            </ul>
          </nav>
        </div>
        <!-- такосономия -->

        <div class="col">
          <div class="catalog-tax">
            <select name="" id="">
              <option value="">Куда?</option>
              <option value="">Мадрид</option>
            </select>
            <select name="" id="">
              <option value="">Когда?</option>
              <option value="">Завтра</option>
            </select>
            <select name="" id="">
              <option value="">Продолжительность</option>
              <option value="">3 дня</option>
            </select>
            <button>Поиск</button>
          </div>
        </div>
      </div>

      <!-- туры -->
      <div class="row">

        <!-- тур -->
        <?php foreach($tours as $row => $tour): ?>
            <div class="col-12">
          <div class="tour">
            <div class="row">
              <div class="col-3"><img src="<?=$tour['image']?>" alt=""></div>
              <div class="col-6 tour-description">
                <h3><?=$tour['name']?></h3>
                <a href="">#Испания</a>
                <a href="">#Мадрид</a>
                <a href="">#Экскурсии</a>
                <p><?=$tour['small_description']?></p>
                <p><strong>Ближайшая дата: </strong><?=$tour['date']?><br><strong>Допустимый возраст: </strong> <?=$tour['minimal_age']?> лет
                </p>
              </div>
              <div class="col-3 tour-price">
                <div class="price-text">
                  <p>Продолжительность: <br><strong><?=$tour['duration']?></strong></p>
                  <p>Цена за человека от: <br><i><?=$tour['price']?> $</i></p>
                </div>
                <form action="/tour.php" method="GET">
                  <button name="tour_id" value="<?=$tour['id']?>" type="submit">Посмотреть тур</button>
                </form>
              </div>
            </div>
          </div>
        </div> 
        <?php endforeach;?>
        
      </div>
    </div>
  </section>

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

    <p class="reqMessage hide">Успешно!</p>
  </dialog>

  <!-- подключаем необходимые скрипты -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="/js/main.js"></script>

</body>

</html>