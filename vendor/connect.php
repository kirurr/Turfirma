<?php

$connect = new PDO('sqlite:turfirma.db');

if (!$connect) {
  die('Ошибка подключения к БД');
} 

