<?php

namespace App;


class Brand 
{
    public string $brandName;

    public function __construct(string $brandName)
    {
        $this->brandName = $brandName;
    }

}