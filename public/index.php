<?php

require_once('../config.php');

// récupère l'url actuelle
$requestUri = $_SERVER['REQUEST_URI'];


// découpe l'url actuelle pour ne récupérer que la fin
// si l'url demandée est "http://localhost:8888/reservation/public/test"
// $enduri contient "test"
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('/reservation/public/', '', $uri);
$endUri = trim($endUri, '/');


// en fonction de la valeur de $endUri on charge le bon contrôleur
if ($endUri === "home") {
    require_once('../controller/home.controller.php');
} else if ($endUri === "home") {
    require_once('../controller/home.controller.php');
} else if ($endUri === "booking") {
	require_once('../controller/reservation.controller.php');
} else if ($endUri === "cancel-booking") {
	require_once('../controller/cancel-reservation.controller.php');
} else if ($endUri === "pay-booking") {
	require_once('../controller/pay-reservation.controller.php');
} else if ($endUri === "comment-booking") {
	require_once('../controller/comment-reservation.controller.php');
} ?>