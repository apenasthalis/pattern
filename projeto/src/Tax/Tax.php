<?php

namespace Pericao\Pattern;

use Pericao\Pattern\Budget;

interface Tax 
{
    public function CalculateTax(Budget $budget): float;
}