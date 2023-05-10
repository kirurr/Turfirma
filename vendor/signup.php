<?php

session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$emailReq = $_POST['emailReq'];
$password = $_POST['passwordReq'];

$check_email = $connect->prepare("SELECT * FROM users WHERE email = :emailReq");

$check_email->execute(array(':emailReq' => $emailReq));


if ($check = $check_email->fetchColumn()) {
  var_dump($check);
  $response = [
    "status" => false,
    "type" => 1,
    "message" => "Такой пользователь уже существует",
    "fields" => ['emailReq']
  ];

  echo json_encode($response);

  die();
}


$error_fields = [];

// проверяем валидность полей и заносим в переменную
if ($full_name == '') {
  $error_fields[] = 'full_name';
}

if ($password == '') {
  $error_fields[] = 'passwordReq';
}

if ($emailReq == '' || !filter_var($emailReq, FILTER_VALIDATE_EMAIL)) {
  $error_fields[] = 'emailReq';
}

// если переменная не пустая = отправляем ошибку
if (!empty($error_fields)) {

  // переменная с данными ответа
  $response = [
    "status" => false,
    "type" => 1,
    "message" => "Проверьте правильность полей",
    "fields" => $error_fields
  ];

  // отправляем переменную в json и убиваем сессию
  echo json_encode($response);

  die();
}


$password = md5($password);

$sql = "INSERT INTO users (id, full_name, email, password) VALUES (?,?,?,?)";
$connect->prepare($sql)->execute([NULL, $full_name, $emailReq, $password]);

$response = [
  "status" => true,
];

echo json_encode($response);
