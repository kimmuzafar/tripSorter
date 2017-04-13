<?php

namespace IsdPro;

use \Exception;
use IsdPro\BoardingCards\TrainCard as TrainCard;
use IsdPro\BoardingCards\FlightCard as FlightCard;
use IsdPro\BoardingCards\AirportBusCard as AirportBusCard;

/**
 * Boarding Card Factory
 * Have the factory create different kinds of Boarding Cards
 */
class BoardingCardFactory
{
  /**
   * @return FlightCard | TrainCard | AirportBusCard
   */
  public static function create()
  {
      // it's not used for now, will use it while refactoring the code, if time allowed me..
  }
}
