<?php

namespace App\Models;

/**
 * Класс для работы с пользователями
 */
class User extends Model 
{
    protected static string $table = 'users';
    protected static array $fields = [
        'email',
        'name',
    ];

    protected static bool $has_created_at = true;
    protected int $id;
    public string $email;
    public string $name;
    
    public function __construct()
    {
    }

    public static function findByEmail(string $email): ?static
    {
        $sql = 'SELECT * FROM ' . static::getTableName() . ' WHERE email = :email';
        $rows = static::query($sql, [
            ':email' => $email,
        ]);

        return $rows[0] ?? null;
    }

    public static function register(string $name, string $email, string $password): static
    {
        $fields = ['email', 'name', 'password'];

        $data = [
            'email' => $email,
            'name' => $name,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        return parent::create($data, $fields);
    }
}