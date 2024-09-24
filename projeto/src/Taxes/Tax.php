<?php

namespace Pericao\Pattern\Taxes;

use Pericao\Pattern\Budget;

interface Tax 
{
    public function CalculateTax(Budget $budget): float;
}