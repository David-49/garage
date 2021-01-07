<?php

namespace App;

use DateTime;


require __DIR__.'/../vendor/autoload.php';

$car = new Car(500, new DateTime('2002-01-01'), '206', 12599, 'Peugeot');

dump($car);

// Format attendu de la facture du panier

// $facture = [
//     "Peugoet 205, Sapin Fraicheur océan", // voir => https://www.php.net/manual/en/function.implode
//     505,
// ];
