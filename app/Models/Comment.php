<?php

namespace App\Models;

/**
 * Класс для работы с комментариями/заметками 
 */
class Comment extends Model
{
    protected int $id;
    public int $task_id;
    public int $user_id;
    public string $text;
    
    public function __construct()
    {
        
    }
}