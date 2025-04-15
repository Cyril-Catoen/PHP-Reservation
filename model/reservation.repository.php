<?php

function persistReservation($booking){
     // Stocker la réservation dans la session (à démarrer dans le controller)
     $_SESSION['booking'] = $booking;
}

function findReservationForUser($booking){
    // Vérifie si la réservation est stockée dans la session, si oui la retourne, si non, renvoie la valeur null
    if (isset($_SESSION['booking'])) {
        return $_SESSION['booking']; // retourne la réservation
    } else {
        return null; // Aucune réservation trouvée
    }
}
?>