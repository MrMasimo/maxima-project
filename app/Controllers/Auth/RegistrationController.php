<?php

namespace App\Controllers\Auth;

use app\View;

class RegistrationController {
    
    public function index(){
        View::render('auth.registration');
    }
}