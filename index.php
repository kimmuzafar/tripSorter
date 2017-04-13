<?php

/* * * * * * * * * * * * * *
 * TripSorter
 *
 * Author: Muzafar Ali Jatoi
 * Email: kimmuzafars@gmail.com
 * Date: Wed April 12, 2017
 *
 * How to run TripSorter:
 * Please upload "TripSorter" directory in your server's document root e-g: www, htdocs or public_html
 * and access it using below URL:
 * http://localhost/TripSorter/index.php
 * * * * * * * * * * * * * */

require_once __DIR__ . '/vendor/autoload.php';

use IsdPro\BoardingCards\TrainCard as TrainCard;
use IsdPro\BoardingCards\FlightCard as FlightCard;
use IsdPro\BoardingCards\AirportBusCard as AirportBusCard;
use IsdPro\Trip as Trip;

/**
 * Un-ordered set of boarding cards
 */
$unorderedBoardingCards = array(
  new FlightCard("Gerona Airport", "Stockholm", "SK455", "3A", "344", "45B"),
  new TrainCard("Madrid", "Barcelona", "78A", "45B"),
  new AirportBusCard("Barcelona", "Gerona Airport"),
  new FlightCard("Stockholm", "New York JFK", "SK22", "7B", null, "22"),
);

/*
 * Generate trip in ASC Order
 */
echo (new Trip($unorderedBoardingCards))->generate();
