<?php
require_once "common.php";

/**
 * @var \App\Http\UserHttpHandler\userHttpHandler $userHttpHandler
 */
$userHttpHandler->addUser($userService, $_POST);