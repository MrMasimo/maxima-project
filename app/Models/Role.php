<?php

namespace App\Models;

/**
 * Класс для работы с ролями
 */
class Role extends Model
{
    protected int $id;
    public string $name;
    public string $description;
    
    public function __construct()
    {

    }
}