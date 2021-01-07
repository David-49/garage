<?php

namespace App;


class Sapin implements Article
{
    protected string $name;

      public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function givePrice(): int 
    {
       return 5;
    }

    public function giveDenomination(): string 
    {
       return $this->name;
    }


}