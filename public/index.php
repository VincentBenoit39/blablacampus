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
// account
$router->map('GET', '/account', function () {
  require '../views/account.php';
});
// confirmation
$router->map('GET', '/confirmation', function () {
  require '../views/confirmation.php';
});
// deletItinerary
$router->map('GET', '/delete-itinerary', function () {
  require '../views/deletItinerary.php';
});
// editAccount
$router->map('GET', '/edit-account', function () {
  require '../views/editAccount.php';
});
// mailbox
$router->map('GET', '/mailbox', function () {
  require '../views/mailbox.php';
});
// mention
$router->map('GET', '/mention', function () {
  require '../views/mention.php';
});
// modifyItinerary
$router->map('GET', '/modify-itinerary', function () {
  require '../views/modifyItinerary.php';
});
// myItinerary
$router->map('GET', '/my-itinerary', function () {
  require '../views/myItinerary.php';
});
// myReservations
$router->map('GET', '/my-reservations', function () {
  require '../views/myReservations.php';
});
// newItinerary
$router->map('GET', '/new-itinerary', function () {
  require '../views/newItinerary.php';
});
// politique
$router->map('GET', '/politique', function () {
  require '../views/politique.php';
});
// pswdReset
$router->map('GET', '/pswd-reset', function () {
  require '../views/pswdReset.php';
});
// reservation
$router->map('GET', '/reservation', function () {
  require '../views/reservation.php';
});
// reservationCancel
$router->map('GET', '/reservation-cancel', function () {
  require '../views/reservationCancel.php';
});
// resultSearch
$router->map('GET', '/result-search', function () {
  require '../views/resultSearch.php';
});
// searchItinerary
$router->map('GET', '/search-itinerary', function () {
  require '../views/searchItinerary.php';
});
// validation
$router->map('GET', '/validation', function () {
  require '../views/validation.php';
});


$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
  call_user_func_array($match['target'], $match['params']);
} else {
  // no route was matched
  header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
