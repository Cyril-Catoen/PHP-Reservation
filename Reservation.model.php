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
}

// On initialise la création de l'objet
$reservation = new Reservation();

// On déclare les valeurs des propriétés pour créer l'objet
$reservation->name = "Cyril Catoen";
$reservation->place = "Tokyo Sky Tower";
$reservation->startDate = new DateTime("14-04-15");
$reservation->endDate = new DateTime("25-06-16");
$reservation->cleaningOption = true;
$reservation->nightPrice = 500;

// Calcul du prix par nuit
$totalPrice = (($reservation->endDate->getTimestamp() - $reservation->startDate->getTimestamp()) / (3600 * 24) * $reservation->nightPrice) + 50;
$reservation->totalPrice = $totalPrice;
$reservation->bookedAt = new DateTime();
$reservation->status = "CART";


var_dump($reservation); 