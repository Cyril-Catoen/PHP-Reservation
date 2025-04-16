<?php 
require_once('../config.php');
require_once('../model/reservation.repository.php');
require_once('../model/reservation.model.php');

$message = "";

// Récupère la commande du client depuis la session si elle existe
$bookingForUser = findReservationForUser() ?? null;

// Si formulaire soumis : suppression de commande
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($bookingForUser) {
        $bookingForUser -> cancelReservation();
        ;
    }
}

?>

<?php require_once('../view/cancel-reservation.view.php');
?>