<?php

namespace app\Controllers\Auth;

class LogoutController
{
    public function index()
    {
        $_SESSION['user_id'] = null;
        header('Location: '. '/');
    }
}