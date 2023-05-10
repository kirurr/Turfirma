<?php

session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$error_fields = [];

if ($email == '') {
  $error_fields[] = 'email';
}

if ($password == '') {
  $error_fields[] = 'password';
}

($error_fields);

if (!empty($error_fields)) {

  $responce = [
    "status" => false,
    "type" => 1,
    "message" => "Проверьте правильность полей",
    "fields" => $error_fields
  ];

  echo json_encode($responce);

  die();
}

$password = md5($password);

$check_user = $connect->prepare("SELECT * FROM users WHERE email = :email AND password =:password");

$check_user->execute(array(':email' => $email, ':password' => $password));

if ($check = $check_user->fetchColumn()) {

  $user = $check_user->fetch(PDO::FETCH_ASSOC);

  $_SESSION['user'] = array(
    "id" => $user['id'],
    "full_name" => $user['full_name'],
    "email" => $user['email'],
    "password" => $user['password'],
    "discount" => $user['discount'],
  );

  $response = [
    "status" => true
  ];

  echo json_encode(($response));
} else {
  $response = [
    "status" => false,
    "message" => "Ошибка. Неправильный логин или пароль!"
  ];
  echo json_encode($response);
}
