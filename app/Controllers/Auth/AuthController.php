<?php

namespace App\Controllers\Auth;

use App\Models\User;

class AuthController {
    
    public function index(){
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        if (empty($email) || empty($password)) {
            die('Вы не заполнили все необходимые поля!');
        }

        $user = User::findByEmail($email);

        if (empty($user)) {
            die('Пользователь не зарегестрирован');
        } elseif (!password_verify($password, $user->getAttr('password'))) {
            die('Логин/пароль не совпадает');
        }

        $_SESSION['user_id'] = $user->getId();

        header('Location: '.'/');
    }
}