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
	function __construct($name, $place, $startDate, $endDate, $cleaningOption)  {
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
}

// On simule les données de la BDD
$name = "Cyril Catoen";
$place = "Tokyo Sky Tower";
$start = new DateTime('2025-04-15');
$end = new DateTime('2025-06-16');
$cleaning = false;

// On initialise la création de l'objet
$reservation = new Reservation($name , $place, $start, $end, $cleaning);

var_dump($reservation); 