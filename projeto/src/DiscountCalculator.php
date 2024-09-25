<?php

namespace Pericao\Pattern;

use Pericao\Pattern\Discounts\DiscountMoreThan5Itens;
use \Pericao\Pattern\Discounts\DiscountMoreThan500Reais;
use Pericao\Pattern\Discounts\NoDiscount;

class DiscountCalculator 
{
    public static function calculateDiscount(Budget $budget): float
    {
        $chainDiscounts = new DiscountMoreThan5Itens(
                new DiscountMoreThan500Reais(
                     new NoDiscount()
                    )
        );

        return $chainDiscounts->calculateDiscount($budget);
    }
}