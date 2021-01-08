<?php

namespace App;


class Utility extends Vehicle implements Article
{
    protected int $odometer;
    protected int $volume;
    protected string $popularity;

    public function __construct(Brand $brand, string $name, int $price, int $odometer, int $volume)
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->price = $price;
        $this->odometer = $odometer;
        $this->volume = $volume;
    }

    public function givePriceBefore(): int
    {
        return $this->price;
    }

    public function giveOdometer(): int
    {
        return $this->odometer;
    }

    public function giveName(): string
    {
        return $this->name;
    }

    public function giveVolume(): int
    {
        return $this->volume;
    }

    public function givePopularity(): string 
    {
        if ($this->volume > 11) {
            return $this->popularity = "Bonne";
        } else {
            return $this->popularity = "Mauvaise";
        }
    }

    public function givePrice(): int
    {
      return $this->price + $this->volume * 10;
    }
    
    public function giveDenomination(): string
    {
      return $this->brand->brandName.' '.$this->name;
    }
}