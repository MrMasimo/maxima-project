<?php

use App\Helpers\Routes\Dispatcher;
    

    spl_autoload_register(function ($class) {
        $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    });
    session_start();
    
    if (!function_exists('is_auth')) {
        function is_auth(): bool
        {
            return isset($_SESSION['user_id']);
        }
    }

    include_once __DIR__ . '/routes/web.php';

    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $requestUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $dispatcher = new Dispatcher($requestMethod, $requestUrl);
    $dispatcher->dispatch();

/*    $dbconnection = new DBController();
    $dbconnection->index(); */
