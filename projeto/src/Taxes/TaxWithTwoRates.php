<?php 

namespace Pericao\Pattern\Taxes;

use Pericao\Pattern\Budget;
use Pericao\Pattern\Taxes\Tax;

/*
    template method
*/

abstract class TaxWithTwoRates implements Tax
{
    public function calculateTax(Budget $budget):float 
    {
        if ($this->shouldApplyMaximumTax($budget)) {
            return $this->calculateMaximumTaxes($budget);
        }

        return $this->calculateMinimumTaxes($budget);
    }

    abstract protected function calculateMinimumTaxes(Budget $budget): float;
    abstract protected function calculateMaximumTaxes(Budget $budget): float;
    abstract protected function shouldApplyMaximumTax(Budget $budget): bool;
}

