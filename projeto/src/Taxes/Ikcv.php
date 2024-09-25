<?php

use Pericao\Pattern\Budget;
use Pericao\Pattern\Taxes\Tax;
use Pericao\Pattern\Taxes\TaxWithTwoRates;

class Ikcv extends TaxWithTwoRates
{

    protected function shouldApplyMaximumTax(Budget $budget): bool
    {
       return $budget->value > 300 && $budget->itemQuantity > 3;
    }

    protected function calculateMinimumTaxes(Budget $budget): float 
    {
        return $budget->value * 0.025;
    }

    protected function calculateMaximumTaxes(Budget $budget): float
    {
        return $budget->value * 0.04;
    }
}