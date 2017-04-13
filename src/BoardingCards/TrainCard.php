<?php

namespace IsdPro\BoardingCards;

/**
 * Train Card Class
 * This class implements all the properties and methods which are specific to Train.
 */
class TrainCard extends BaseCard
{
  /**
   * Name / type of transport
   *
   * @var string
   */
  private $transport = "train";

  /**
   * Transport number
   *
   * @var string
   */
  protected $transportNo;

  /**
   * Seat number on the transport
   *
   * @var string
   */
  protected $seatNo;

  /**
	 * Train Card constructor method
	 *
   * @param string $origin
	 * @param string $destination
   * @param string $transportNo
   * @param string $seatNo
   *
   * @return TrainCard
	 */
  function __construct($origin, $destination, $transportNo, $seatNo)
  {
    parent::__construct($origin, $destination);

    $this->transportNo  = $transportNo;
    $this->seatNo       = $seatNo;

    return $this;
  }

  /**
   * @return string
   */
  public function __toString()
  {
      # Take train 78A from Madrid to Barcelona. Sit in seat 45B.
      return "Take " . $this->transport . " " . $this->transportNo . " from " . $this->origin . " to " . $this->destination . ". Sit in seat " . $this->seatNo . ".";
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

  /**
   * Get transportNo
   *
   * @return string
   */
  public function getTransportNo()
  {
    return $this->transportNo;
  }

  /**
   * Set transportNo
   *
   * @param string $transportNo
   */
  public function setTransportNo($transportNo)
  {
    $this->transportNo = $transportNo;
  }

  /**
   * Get seatNo
   *
   * @return string
   */
  public function getSeatNo()
  {
    return $this->seatNo;
  }

  /**
   * Set seatNo
   *
   * @param string $seatNo
   */
  public function setSeatNo($seatNo)
  {
    $this->seatNo = $seatNo;
  }

}
