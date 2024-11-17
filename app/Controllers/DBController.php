<?php

namespace App\Controllers;

use App\DBConnection;

class DBController {
    
    public function index(){
        try {
            $conn = DBConnection::get();
            if($conn){
                echo 'Connection success'; 
            }
        } catch (\Throwable $th) {
            echo $th; 
        }

        
    }
}