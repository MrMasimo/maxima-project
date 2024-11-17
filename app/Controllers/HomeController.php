<?php

namespace App\Controllers;

use app\View;

class HomeController {
    
    public function index(){
        View::render('home');
    }
}