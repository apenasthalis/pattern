<?php

namespace Pericao\Pattern\BudgetStates;

use Pericao\Pattern\Budget;

class Approved 
{
    public function CalculateExtraDiscounts(Budget $budget): float
    {
        return $budget->value * 0.2;
    }
}