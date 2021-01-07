<?php

namespace App;

use DateTime;

class Car extends Vehicle implements Article
{
    protected int $odometer;
    protected DateTime $productionYear;
    protected string $popularity;

    public function __construct(int $odometer, DateTime $productionYear, string $name, int $price, Brand $brandName)
    {
        // $this->odometer = $odometer;
        // $this->productionYear = $productionYear;
        // $this->name = $name;
        // $this->price = $price;
        // $this->brand = $brand;
        parent::__construct($odometer, $productionYear, $name, $price, $brandName);
    }

    public function calcWearLevel(): int 
    {
        return $this->odometer * $this->productionYear;
    }

    public function givePopularity(): string 
    {
        if ($this->produciotnYear > 2010) {
            return $this->popularity = "Bonne";
        } else {
            return $this->popularity = "Mauvaise";
        }
    }

    public function givePrice(): int 
    {
       return $price / $this->calcWearLevel();
    }

    public function giveDenomination(): string 
    {
      return $this->brand.''.$this->name;
    }
}
