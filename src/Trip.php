<?php

namespace IsdPro;

/**
 * Trip Class
 * This will sort random ordered boarding cards into correct order
 */
class Trip
{
  /**
   * Un-ordered Boarding Cards
   *
   * @var array
   */
  private $unorderedBoardingCards;

  /**
	 * Trip constructor method
	 *
	 * @param array $unorderedBoardingCards
   *
   * @return Trip
	 */
  function __construct($unorderedBoardingCards)
  {
    $this->unorderedBoardingCards = $unorderedBoardingCards;
    return $this;
  }

  /**
   * Generate trip in ASC Order
   *
   * @return string
   */
  public function generate()
  {
    $boardingCardsCount = count($this->unorderedBoardingCards);
    $sortedBoardingCards = $this->sort($this->unorderedBoardingCards, $boardingCardsCount, 0);

    $sortedBoardingCardsHTML = "";
    foreach ($sortedBoardingCards as $boardingCard)
    {
      $sortedBoardingCardsHTML .= "<li>" . $boardingCard . "</li>";
    }
    $sortedBoardingCardsHTML .= "<li>You have arrived at your final destination.</li>";
    return "<ol>" . $sortedBoardingCardsHTML . "</ol>";
  }

  /**
   * Sort given boarding cards recursively
   *
   * @param $boardingCardsArray
   * @param $boardingCardsCount
   * @param $startIndex
   *
   * @return $boardingCardsArray
   */
  private function sort($boardingCardsArray, $boardingCardsCount, $startIndex = 0)
  {
    if ($startIndex == $boardingCardsCount - 1)
    {
      return $boardingCardsArray;
    }
    for ($i = $startIndex; $i < $boardingCardsCount; $i++)
    {
      for ($k = $i + 1; $k < $boardingCardsCount; $k++)
      {
        if ($boardingCardsArray[$i]->getOrigin() == $boardingCardsArray[$k]->getDestination())
        {
          $boardingCardsArray = $this->swapIndexes($boardingCardsArray, $i, $k);
          return $this->sort($boardingCardsArray, $boardingCardsCount, $i);
        }
      }
    }

    return $boardingCardsArray;
  }

  /**
   * Swap indexes of $boardingCardsArray
   *
   * @param $boardingCardsArray
   * @param $i
   * @param $k
   *
   * @return $boardingCardsArray
   */
  private function swapIndexes($boardingCardsArray, $i, $k)
  {
    $temp                   = $boardingCardsArray[$i];
    $boardingCardsArray[$i] = $boardingCardsArray[$k];
    $boardingCardsArray[$k] = $temp;

    return $boardingCardsArray;
  }

}
