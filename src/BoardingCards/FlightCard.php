<?php

namespace IsdPro\BoardingCards;

/**
 * Flight Card Class
 * This class implements all the properties and methods which are specific to Flight.
 */
class FlightCard extends BaseCard
{
  /**
   * Name / type of transport
   *
   * @var string
   */
  private $transport = "flight";

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
   * Ticket Counter No
   *
   * @var string
   */
  protected $ticketCounterNo;

  /**
   * Gate no to transport
   *
   * @var string
   */
  protected $gateNo;

  /**
	 * FlightCard constructor method
	 *
   * @param string $origin
	 * @param string $destination
   * @param string $transportNo
   * @param string $seatNo
   * @param string $ticketCounterNo
   * @param string $gateNo
   *
   * @return FlightCard
	 */
  function __construct($origin, $destination, $transportNo, $seatNo, $ticketCounterNo = null, $gateNo)
  {
    parent::__construct($origin, $destination);

    $this->transportNo      = $transportNo;
    $this->seatNo           = $seatNo;
    $this->ticketCounterNo  = $ticketCounterNo;
    $this->gateNo           = $gateNo;

    return $this;
  }

  /**
   * @return string
   */
  public function __toString()
  {
    # From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will be automatically transferred from your last leg.
    # From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.

    if($this->ticketCounterNo == null)
    {
      $this->ticketCounterNo = "Baggage will be automatically transferred from your last leg.";
    }

    return "From " . $this->origin . ", take " .$this->transport. " " . $this->transportNo . " to " . $this->destination . ". Gate " . $this->gateNo . ", seat " . $this->seatNo . ". Baggage drop at ticket counter " . $this->ticketCounterNo . ".";
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

  /**
   * Get gateNo
   *
   * @return string
   */
  public function getGateNo()
  {
    return $this->gateNo;
  }

  /**
   * Set gateNo
   *
   * @param string $gateNo
   */
  public function setGateNo($gateNo)
  {
    $this->gateNo = $gateNo;
  }

  /**
   * Get ticketCounterNo
   *
   * @return string
   */
  public function getTicketCounterNo()
  {
    return $this->ticketCounterNo;
  }

  /**
   * Set ticketCounterNo
   *
   * @param string $ticketCounterNo
   */
  public function setTicketCounterNo($ticketCounterNo)
  {
    $this->$ticketCounterNo = $ticketCounterNo;
  }

}
