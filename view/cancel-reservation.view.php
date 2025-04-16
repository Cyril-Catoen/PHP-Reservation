<?php 
require_once('partial/header.php');
?>

<?php if (isset($bookingForUser)) { ?>
	<main>
		<h2>Annuler votre réservation</h2>
			<div>
				<p>Résumé de la réservation :</p>
				<p>Nom : <?php echo $bookingForUser->name; ?></p>
				<p>Lieu : <?php echo $bookingForUser->place; ?></p>
				<p>Dates : <?php echo $bookingForUser->startDate->format('d-m-y'); ?> / <?php echo $bookingForUser->endDate->format('d-m-y'); ?></p>
				<p>Prix total : <?php echo $bookingForUser->totalPrice; ?> $</p>
				<p>Option de ménage ? : <?php echo $bookingForUser->cleaningOption ? "oui" : "non"; ?></p>
				<p>Statut : <?php echo $bookingForUser->status; ?></p>
			</div>
			<form method="POST" action="">
            	<button class="submit2" type="submit">Annuler la réservation</button>
        	</form>
    <?php } else { ?>
        <p>Vous n'avez pas de réservation connue.</p>
    <?php } ?>
</main>

<?php
require_once('partial/footer.php');

?>