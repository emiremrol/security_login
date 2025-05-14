<?php

session_start();
spl_autoload_register(
    function ($className){
        if(PHP_OS != 'Linux'){
            require_once $className.".php";
        }else {
            $path = str_replace("\\", "/", $className) . ".php";
            require_once $path;
        }

    }
);


$template = new \Core\Template\Template();
$dataBinder = new \Core\DataBinder\DataBinder();

$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['password']);
$db = new \Database\PDODatabase($pdo);

$userRepository = new \App\Repositories\UserRepository\UserRepository($db);
$encryptionService = new \App\Services\Encryption\ArgonEncryptionService();
$userService = new \App\Services\UserService\UserService($userRepository, $encryptionService);
$userHttpHandler = new \App\Http\UserHttpHandler\UserHttpHandler($template, $dataBinder);
