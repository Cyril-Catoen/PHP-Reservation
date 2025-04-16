<?php 
require_once('partial/header.php');
?>

<?php if (isset($bookingForUser)) { ?>
		<div>
			<p>Résumé de la réservation :</p>
			<p>Nom : <?php echo $bookingForUser->name; ?></p>
			<p>Lieu : <?php echo $bookingForUser->place; ?></p>
			<p>Dates : <?php echo $bookingForUser->startDate->format('d-m-y'); ?> / <?php echo $bookingForUser->endDate->format('d-m-y'); ?></p>
			<p>Prix total : <?php echo $bookingForUser->totalPrice; ?> $</p>
			<p>Option de ménage ? : <?php echo $bookingForUser->cleaningOption ? "oui" : "non"; ?></p>
		</div>
	<?php } ?>

<?php
require_once('partial/footer.php');

?>