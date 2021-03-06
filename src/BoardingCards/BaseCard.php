<?php

namespace IsdPro\BoardingCards;

/**
 * Base Card Class
 * This class implements all the properties and methods which are common to most types of transportation.
 *
 * Each type of transportation will extend this class
 */
class BaseCard
{
  /**
   * Since i don't know possible types of boarding card properties
   * I'm declaring them all of type string
   */

  /**
   * Origin point
   *
   * @var string
   */
  protected $origin;

  /**
   * Destination
   *
   * @var string
   */
  protected $destination;

  /**
	 * BaseCard constructor method
	 *
	 * @param string $origin
	 * @param string $destination
   *
   * @return BaseCard
	 */
  function __construct($origin, $destination)
  {
    $this->origin       = $origin;
    $this->destination  = $destination;

    return $this;
  }

  /**
   * Get origin
   *
   * @return string
   */
  public function getOrigin()
  {
    return $this->origin;
  }

  /**
   * Set origin
   *
   * @param string $origin
   */
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }

  /**
   * Get destination
   *
   * @return string
   */
  public function getDestination()
  {
    return $this->destination;
  }

  /**
   * Set destination
   *
   * @param string $destination
   */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }

}
