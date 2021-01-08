<?php

namespace App;


abstract class Vehicle 
{
    protected string $name;
    protected int $price;
    public Brand $brand;

    public function __construct(string $name, int $price, Brand $brand)
    {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
    }

    abstract public function givePopularity(): string;

}