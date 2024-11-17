<?php

namespace App\Controllers\Auth;

use app\View;

class LoginController {
    
    public function index(){
        View::render('auth.login');
    }
}