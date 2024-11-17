<?php

namespace App\Models;

/**
 * Класс для работы с задачами
 */
class Task extends Model
{   
    protected static string $table = 'tasks';
    protected static array $fields = [
        'title',
        'owner_id',
        'description',
        'deadline',
    ];

    protected static bool $has_created_at = true;
    protected int $id;
    public string $title;
    public int $owner_id;
    public string $description;
    public string $deadline;
    
    public function __construct()
    {

    }

}