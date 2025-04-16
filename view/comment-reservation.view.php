<?php 
require_once('partial/header.php');
?>

<?php if (isset($bookingForUser)) { ?>
	<main>
		<h2>Ajouter un commentaire à votre réservation</h2>
			<div>
				<p>Résumé de la réservation :</p>
				<p>Nom : <?php echo $bookingForUser->name; ?></p>
				<p>Lieu : <?php echo $bookingForUser->place; ?></p>
				<p>Dates : <?php echo $bookingForUser->startDate->format('d-m-y'); ?> / <?php echo $bookingForUser->endDate->format('d-m-y'); ?></p>
				<p>Prix total : <?php echo $bookingForUser->totalPrice; ?> $</p>
				<p>Option de ménage ? : <?php echo $bookingForUser->cleaningOption ? "oui" : "non"; ?></p>
				<p>Statut : <?php echo $bookingForUser->status; ?></p>
                <?php if (isset($message)) { ?>
				<p class="green"><?php echo $message ?></p>
				<?php } ?>
			</div>
			<form method="POST" action="">
                <?php if (isset($bookingForUser->status) && $bookingForUser->status =="PAID"){ ?>
                    <input type="text" id="customerComment" name="comment" placeholder="Cliquez ici pour laisser un commentaire" required></input>
               /
                <!-- <?php // } elseif (($bookingForUser->status) && $bookingForUser->status =="CART") {?> 
                    <p>Vous n'avez pas confirmé par paiement votre réservation.</p>
                <?php // } elseif (($bookingForUser->status) && $bookingForUser->status =="CART") {?> 
                    <p>Vous n'avez pas confirmé par paiement votre réservation.</p>
                <?php // } elseif (($bookingForUser->status) && $bookingForUser->status =="CANCELLED") {?>  -->
                    <!-- <p>Votre réservation a été annulée. Vous ne pouvez pas laisser de commentaire.</p> -->
                <?php } else { ?>
                    <p>Vous n'avez pas de réservation connue ou son statut ne permet pas de commenter.</p>
                <?php }} ?>
            	<button class="submit2" type="submit">Commenter</button>
        	</form>
   
    <?php if (isset($comment) && isset($bookingForUser->commentedAt)) { ?>
        <p>Votre commentaire : <?php echo $comment;?></p>
        <p>Commenté le : <?php echo $bookingForUser->commentedAt->format('d-m-y'); ?></p>
	<?php } ?>

	<?php if (isset($error)) {
        echo $error;
	} ?>
</main>

<?php
require_once('partial/footer.php');
?>