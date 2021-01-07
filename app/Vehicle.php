<?php

namespace App;


abstract class Vehicle 
{
    protected string $name;
    protected int $price;
    protected Brand $brandName;

    public function __construct(string $name, int $price, Brand $brandName)
    {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brandName;
    }

    abstract public function givePopularity(): string;

}