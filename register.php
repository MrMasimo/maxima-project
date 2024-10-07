<?php

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$password_confirm = $_POST['password_confirm'] ?? null;

if (empty($email) || empty($password) || empty($password_confirm)) {
    die('Вы не заполнили необходимые поля!');
}

if ($password != $password_confirm) {
    die('Пароли не совпадают!');
}

echo 'Вы успешно зарегистрировались!';