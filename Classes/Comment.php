<?php

namespace Classes;

/**
 * Класс для работы с комментариями/заметками 
 */
class Comment
{
    protected int $id;
    public int $task_id;
    public int $user_id;
    public string $description;
    
    public function __construct()
    {

    }
}