<?php 
require_once('../config.php');
require_once('../public/index.php');
require_once('../model/reservation.repository.php');
require_once('../model/reservation.model.php');

$message = "";
$error = "";
$comment = "";

// Récupère la commande du client depuis la session si elle existe
$bookingForUser = findReservationForUser() ?? null;

// Si formulaire soumis : suppression de commande
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($bookingForUser) && $bookingForUser->status == "PAID") {
    
        $comment = $_POST['comment'];

        try{
            $bookingForUser -> leaveComment($comment);
            $message ="Votre commentaire a été pris en compte. Merci.";
            persistReservation($bookingForUser);
        } catch(Exception $e){
            $error = $e->getMessage();
        }
    }
    else {
        $message = "Vous devez avoir une réservation payée pour pouvoir laisser un commentaire.";
    }
}

$bookingForUser = findReservationForUser();

?>

<?php require_once('../view/comment-reservation.view.php');
?>