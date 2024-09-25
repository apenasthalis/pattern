<?php

namespace Pericao\Pattern\Discounts;

use Pericao\Pattern\Budget;
use Pericao\Pattern\Discounts\Discount;

class DiscountMoreThan5Itens extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->itemQuantity > 5) {
            return $budget->value * 0.1;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}