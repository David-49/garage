<?php

namespace App;

interface Article
{
    public function givePrice(): int;
    public function giveDenomination(): string;
}
