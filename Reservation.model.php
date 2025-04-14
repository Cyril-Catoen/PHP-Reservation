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

	// on automatise le traitement par la création d'une fonction construct
	function __construct() {
		$this->name = "Cyril Catoen";
		$this->place = "Tokyo Sky Tower";
		$this->startDate = new DateTime("25-04-15");
		$this->endDate = new DateTime("25-06-16");
		$this->cleaningOption = true;
		$this->nightPrice = 500;

		// Calcul du prix par nuit
		$totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 50;
		$this->totalPrice = $totalPrice;
		$this->bookedAt = new DateTime();
		$this->status = "CART";
			}
}

// On initialise la création de l'objet
$reservation = new Reservation();

var_dump($reservation); 