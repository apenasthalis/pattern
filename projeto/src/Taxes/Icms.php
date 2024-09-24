<?php

namespace Pericao\Pattern\Taxes;
use Pericao\Pattern\Budget;

class Icms implements \Pericao\Pattern\Taxes\Tax
{
    public function CalculateTax(Budget $budget): float
    {
        return $budget->value * 0.10;
    }
}