<?php

namespace App;


class Utility extends Vehicle implements Article
{
    protected int $odometer;
    protected int $volume;
    protected string $popularity;

    public function __construct(int $odometer, int $volume)
    {
        $this->odometer = $odometer;
        $this->volume = $volume;
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
      return $this->brand.''.$this->name;
    }
}