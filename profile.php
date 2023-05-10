<?php 
session_start();

if (!$_SESSION['user']) {
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Профиль туриста</title>
</head>

<body>

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
            <h1>Турфирма</h1>
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

  <section class="profile-hero">
    <div class="container text-center">
      <h1>Профиль туриста</h1>
    </div>
  </section>

  <section class="profile-main">
    <div class="container">
      <div class="row">
        <div class="col-6 offset-1">
          <h2>Ваши туры</h2>
          <div class="profile-tour">
            <h3>Тур по Мадриду</h3>
            <p><strong>Когда: </strong>Завтра</p>
            <a href="tour.php">Посмотреть тур</a>
          </div>
          <div class="profile-tour">
            <h3>Тур по Мадриду</h3>
            <p><strong>Когда: </strong>Завтра</p>
            <a href="tour.php">Посмотреть тур</a>
          </div>
          <div class="profile-tour">
            <h3>Тур по Мадриду</h3>
            <p><strong>Когда: </strong>Завтра</p>
            <a href="tour.php">Посмотреть тур</a>
          </div>
        </div>
        <div class="col-4 offset-1 flex-info">
          <div class="info">
            <h2><?php if($_SESSION['user']) {
              echo $_SESSION['user']['full_name'];
            } else {
              echo "вас тут быть не должно";
            }?></h2>
            <img src="" alt="">
            <h3><strong>Ваша почта: </strong><?php 
            if($_SESSION['user']) {
              echo $_SESSION['user']['email'];
            } else {
              echo "вас тут быть не должно";
            }?></h3>
            <h3><strong>Ваша скидка: </strong><?php if($_SESSION['user']) {
              echo $_SESSION['user']['discount'];
            } else {
              echo "вас тут быть не должно";
            }?>%</h3>
          </div>
          <form action="vendor/logout.php">
          <button>Выйти из аккаунта</button>
          </form>
        </div>

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