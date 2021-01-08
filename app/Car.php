<?php

namespace App;

// use DateTime;

class Car extends Vehicle implements Article
{
    protected int $odometer;
    protected int $productionYear;
    protected string $popularity;

    public function __construct(Brand $brand, string $name, int $productionYear, int $price, int $odometer )
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->productionYear = $productionYear;
        $this->price = $price;
        $this->odometer = $odometer;
        // parent::__construct($odometer, $productionYear, $name, $price, $brandName);
    }

    public function giveOdometer(): int
    {
        return $this->odometer;
    }

    public function giveName(): string
    {
        return $this->name;
    }

    public function giveProducionYear(): int
    {
        return $this->productionYear;
    }

    public function givePriceBefore(): int
    {
        return $this->price;
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
       return $this->price / $this->calcWearLevel();
    }

    public function giveDenomination(): string 
    {
      return $this->brand->brandName.' '.$this->name;
    }
}

