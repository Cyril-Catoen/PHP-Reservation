<?php 
require_once('../config.php');
require_once('../model/reservation.repository.php');
require_once('../model/reservation.model.php');

$bookingForUser = findReservationForUser();

?>

<?php require_once('../view/cancel-reservation.view.php');
?>