<?php

namespace Tests;

use App\Car;
use App\Brand;


class CarTest extends TestCase
{
    /** @test */
    public function can_create_car()
    {
        $brandName = new Brand('Peugeot');
        $car = new Car($brandName, '206', 2002, 12599, 500);

        $price = $car->givePriceBefore();
        $productionYear = $car->giveProducionYear();
        $odometer = $car->giveOdometer();
        $name = $car->giveName();

        $this->assertEquals('Peugeot', $car->brand->brandName);
        $this->assertEquals('206', $name);
        $this->assertEquals(2002, $productionYear);
        $this->assertEquals( 12599, $price);
        $this->assertEquals(500, $odometer);
    }

        /** @test */
    public function car_have_popularity()
    {
        $brandName = new Brand('Peugeot');
        $car = new Car($brandName, '206', 2002, 12599, 500);

        if ($productionYear > 2010) {
            $this->assertEquals('Bonne', $car->givePopularity());
        } else {
            $this->assertEquals('Mauvaise', $car->givePopularity());
        }
    }
}
