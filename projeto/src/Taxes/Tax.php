<?php

namespace Pericao\Pattern\Taxes;

use Pericao\Pattern\Budget;

/*
    estrategy
*/

interface Tax 
{
    public function CalculateTax(Budget $budget): float;
}