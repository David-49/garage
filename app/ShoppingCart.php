<?php

namespace App;


class ShoppingCart
{
    protected int $nbArticles;


    public function giveBill(Article $denominationList, Article $totalPrice): array 
    {
      return $bill = [$denominationList->giveDenomination(), $totalPrice->givePrice()];
    }
}