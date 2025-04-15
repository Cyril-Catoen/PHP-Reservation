<?php

class Reservation {

	public $name;

	public $place;

	public $startDate;

	public $endDate;

	public $totalPrice;

	public $nightPrice;

	public $status;

	public $bookedAt;

	public $cleaningOption;

	public $paidAt;

	public $cancelledAt;

	public $comment;

	public $commentedAt;

	// on automatise le traitement par la création d'une fonction construct
	function __construct($name, $place, $startDate, $endDate, $cleaningOption)  {
		if (strlen($name) < 2) {
			throw new Exception('Le nom doit être une chaîne de caractères supérieur à 2');
		}
		
		$this->name = $name;
		$this->place = $place;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->cleaningOption = $cleaningOption;
		$this->nightPrice = 500;
		
		

		// Calcul du prix par nuit
		$totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 50;
		$this->totalPrice = $totalPrice;
		$this->bookedAt = new DateTime();
		$this->status = "CART";
		}

		public function cancelReservation() {
			if ($this->status === "CART") {
					$this->status = "CANCELLED";
					$this->cancelledAt = new DateTime();
			}
		}

		public function payReservation() {
			if ($this->status === "CART") {
					$this->status = "PAID";
					$this->paidAt = new DateTime();
			}
		}

		public function leaveComment($comment) {
					$this->comment = $comment;
					$this->commentedAt = new DateTime();
		}
}

// // On simule les données de la BDD
// $name = "Cyril Catoen";
// $place = "Tokyo Sky Tower";
// $start = new DateTime('2025-04-15');
// $end = new DateTime('2025-06-16');
// $cleaning = false;

// // On initialise la création de l'objet
// $reservation = new Reservation($name , $place, $start, $end, $cleaning);
// $reservation->leaveComment("blabla");
