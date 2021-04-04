<?php
include 'utils/database.php';
include 'utils/helper.php';
include 'utils/PostRequest.php';
include 'utils/GetRequest.php';
include 'utils/Session.php';
include 'utils/Auth.php';
include 'models/User.php';
session_start();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';
$controller = ucfirst($controller) . "Controller";

include "controllers/{$controller}.php";

$controllerObj = new $controller;
$controllerObj->{$method}();
