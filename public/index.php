<?php

require '../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$router = new AltoRouter();

// home
$router->map('GET', '/', function () {
  require '../views/home.php';
});
// register
$router->map('GET', '/register', function () {
  require '../views/register.php';
});
// login
$router->map('GET', '/login', function () {
  require '../views/login.php';
});
// login
$router->map('GET', '/account', function () {
  require '../views/account.php';
});
// login
$router->map('GET', '/deletItinerary', function () {
  require '../views/confirmation.php';
});
// login
$router->map('GET', '/confirmation', function () {
  require '../views/deletItinerary.php';
});


$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
  call_user_func_array($match['target'], $match['params']);
} else {
  // no route was matched
  header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
