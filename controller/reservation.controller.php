<?php 
require_once('../config.php');
require_once('../model/reservation.model.php');
require_once('../view/reservation.view.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $name = $_POST['name'];
    $place = $_POST['place'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

        // Conversion en objets DateTime
        try {
            $start = new DateTime($startDate);
            $end = new DateTime($endDate);
        } catch (Exception $e) {
            die('Erreur lors de la création des objets DateTime : ' . $e->getMessage());
        }

        if (isset($_POST['cleaningChoice'])) {
            $cleaningChoice = true;
        } else {
            $cleaningChoice = false;
        }

    $booking = new Reservation($name, $place, $start, $end, $cleaningChoice);
    var_dump($booking);
}



?>