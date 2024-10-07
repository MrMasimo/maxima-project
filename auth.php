<?php

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($email) || empty($password)) {
    die('Вы не заполнили необходимые поля!');
}

echo "Добро пожаловать!";