<?php

namespace Pericao\Pattern\Taxes;
use Pericao\Pattern\Budget;
use Pericao\Pattern\Taxes\Tax;

class Iss implements Tax
{
    public function CalculateTax(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}