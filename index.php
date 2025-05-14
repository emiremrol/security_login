<?php
require_once "common.php";

// $userHttpHandler->index();
$userHttpHandler->login($userService, $_POST);