<?php

namespace App;

use DateTime;


require __DIR__.'/../vendor/autoload.php';

$brandName = new Brand('Peugeot');
dump($brandName);

$utility = new Utility($brandName, 'Boxer 2', 150000, 14);
dump($utility);

$car = new Car($brandName , '206', 2002, 2000000, 500);
dump($car);

$denominationCar = $car->giveDenomination();
dump($denominationCar);

$denominationUtility = $utility->giveDenomination();
dump($denominationUtility);

$priceUtility = $utility->givePrice();
dump($priceUtility);

$priceCar = $car->givePrice();
dump($priceCar);

$popularity = $car->givePopularity();
dump($popularity);

// Format attendu de la facture du panier

// $facture = [
//     "Peugoet 205, Sapin Fraicheur océan", // voir => https://www.php.net/manual/en/function.implode
//     505,
// ];
