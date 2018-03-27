<?php

//require 'functions.php';

$database = require 'core/bootstrap.php';

// $pdo = connectToDb();

// $router = new Router;

// require 'routes.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');

// require $router->direct('contact');

// die(var_dump($app));

require Router::load('routes.php')

	->direct(Request::$uri());

?> 