<?php

namespace Pericao\Pattern\Discounts;


use Pericao\Pattern\Budget;
use Pericao\Pattern\Discounts\Discount;

class DiscountMoreThan500Reais extends Discount
{
    public function calculateDiscount(Budget $budget): float 
    {
        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}