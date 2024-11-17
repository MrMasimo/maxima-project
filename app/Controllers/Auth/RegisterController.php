<?php

namespace app\Controllers\Auth;

use app\Models\User;

class RegisterController {

    public function index()
    {
        $name = $_POST['name'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $password_confirm = $_POST['password_confirm'] ?? null;

        if (empty($name) || empty($email) || empty($password) || empty($password_confirm)) {
            die('Вы не заполнили необходимые поля!');
        }

        if (!empty(User::findByEmail($email))) {
            die('Данный пользователь уже существует');
        }
        
        if ($password != $password_confirm) {
            die('Пароли не совпадают!');
        }

        $new_user = User::register($name, $email, $password);

        if (empty($new_user->getId())) {
            die('Ошибка регистрации');
        } else {
            header('Location: ' . '/login');
        }
    }
}