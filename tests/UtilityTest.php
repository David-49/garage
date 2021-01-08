<?php

namespace Tests;

use App\Utility;
use App\Brand;


class UtilityTest extends TestCase
{
    /** @test */
    public function can_create_utility()
    {
        $brandName = new Brand('Peugeot');
        $utility = new Utility($brandName, 'Boxer 2', 150000, 14);

        $volume = $utility->giveVolume();
        $odometer = $utility->giveOdometer();
        $name = $utility->giveName();

        $this->assertEquals('Peugeot', $utility->brand->brandName);
        $this->assertEquals('Boxer 2', $name);
        $this->assertEquals(150000, $odometer);
        $this->assertEquals( 14, $volume);

    }

            /** @test */
    public function utility_have_popularity()
    {
        $brandName = new Brand('Peugeot');
        $utility = new Utility($brandName, 'Boxer 2', 150000, 14);

        $volume = $utility->giveVolume();

        if ($volume > 11) {
            $this->assertEquals('Bonne', $utility->givePopularity());
        } else {
            $this->assertEquals('Mauvaise', $utility->givePopularity());
        }
    }
}
