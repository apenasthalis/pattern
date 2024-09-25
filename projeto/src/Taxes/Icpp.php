<?php 

namespace Pericao\Pattern\Taxes;

use Pericao\Pattern\Budget;
use Pericao\Pattern\Taxes\Tax;

class Icpp extends TaxWithTwoRates
{
    public function calculateTax(Budget $budget): float
    {
        if ($budget->value > 500) {
            return $budget->value * 0.03;
        }

        return $budget->value * 0.02;
    }

    protected function shouldApplyMaximumTax(Budget $budget): bool
    {
       return $budget->value > 300 && $budget->itemQuantity > 3;
    }

    protected function calculateMinimumTaxes(Budget $budget): float 
    {
        return $budget->value * 0.02;
    }

    protected function calculateMaximumTaxes(Budget $budget): float
    {
        return $budget->value * 0.03;
    }
}