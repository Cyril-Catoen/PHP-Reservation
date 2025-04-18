<?php 
require_once('../config.php');
require_once('../public/index.php');
require_once('../model/reservation.repository.php');
require_once('../model/reservation.model.php');

$error = "";
$booking = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $name = $_POST['name'];
    $place = $_POST['place'];
    $startDate = new DateTime($_POST['startDate']);
    $endDate = new DateTime($_POST['endDate']);

        // Conversion en objets DateTime
        // try {
        //     $start = new DateTime($startDate);
        //     $end = new DateTime($endDate);
        // } catch (Exception $e) {
        //     die('Erreur lors de la création des objets DateTime : ' . $e->getMessage());
        // }

        if (isset($_POST['cleaningChoice'])) {
            $cleaningChoice = true;
        } else {
            $cleaningChoice = false;
        }

        try{
            $booking = new Reservation($name, $place, $startDate, $endDate, $cleaningChoice);
            persistReservation($booking);
        } catch(Exception $e){
            $error = $e->getMessage();
        }
    }

$bookingForUser = findReservationForUser();
    
require_once('../view/reservation.view.php');
?>