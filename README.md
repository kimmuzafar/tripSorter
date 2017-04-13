## Trip Sorter

You are given a stack of boarding cards for various transportations that will take you from a point A to point B via several stops on the way. All of the boarding cards are out of order and you don't know where your journey starts, nor where it ends. Each boarding card contains information about seat assignment, and means of transportation (such as flight number, bus number etc).

Write an API that lets you sort this kind of list and present back a description of how to complete your journey.
For instance the API should be able to take an unordered set of boarding cards, provided in a format defined by you, and produce this list:

1. Take train 78A from Madrid to Barcelona. Sit in seat 45B.
2. Take the airport bus from Barcelona to Gerona Airport. No seat assignment.
3. From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.
4. From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will be automatically transferred from your last leg.
5. You have arrived at your final destination.

The list should be defined in a format that's compatible with the input format. The API is to be an internal PHP API so it will only communicate with other parts of a PHP application, not server to server, nor server to client. Use PHP-doc to document the input and output your API accepts / returns.

## Setup
Move TripSorter folder to your web-root directory e-g: htdocs, www or public_html

Run following command in order to install dependencies (I assume you already have composer installed and setup)
```
composer update
composer dump-autoload
```

### Run
Open your browser and use following URL
```
http://localhost/TripSorter/index.php
```

### Output
```
1. Take train 78A from Madrid to Barcelona. Sit in seat 45B.
2. Take the airport bus from Barcelona to Gerona Airport. No seat assignment.
3. From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.
4. From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage drop at ticket counter Baggage will be automatically transferred from your last leg..
5. You have arrived at your final destination.
```

## Random Boarding Cards to sort
This random boarding cards array is located in index.php at the root of TripSorter, You can re-sort the array if you want.

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use IsdPro\BoardingCards\TrainCard as TrainCard;
use IsdPro\BoardingCards\FlightCard as FlightCard;
use IsdPro\BoardingCards\AirportBusCard as AirportBusCard;
use IsdPro\Trip as Trip;

// Un-ordered set of boarding cards
$unorderedBoardingCards = array(
  new FlightCard("Gerona Airport", "Stockholm", "SK455", "3A", "344", "45B"),
  new TrainCard("Madrid", "Barcelona", "78A", "45B"),
  new AirportBusCard("Barcelona", "Gerona Airport"),
  new FlightCard("Stockholm", "New York JFK", "SK22", "7B", null, "22"),
);

// Generate trip in ASC Order
echo (new Trip($unorderedBoardingCards))->generate();

?>
```

  More cards with different properties and attributes can be added in "IsdPro\BoardingCards" namespace.
