<?php

namespace IsdPro\BoardingCards;

/**
 * Airport Bus Card Class
 * This class implements all the properties and methods which are specific to Air Bus.
 */
class AirportBusCard extends BaseCard
{
  /**
   * Name / type of transport
   *
   * @var string
   */
  private $transport = "airport bus";

  /**
   * @return string
   */
  public function __toString()
  {
      # Take the airport bus from Barcelona to Gerona Airport. No seat assignment.
      return "Take the " . $this->transport . " from " . $this->origin . " to " . $this->destination . ". No seat assignment.";
  }

  /**
   * Get transport
   *
   * @return string
   */
  public function getTransport()
  {
    return $this->transport;
  }

}
