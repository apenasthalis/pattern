<?php 

namespace Pericao\Pattern;
use Pericao\Pattern\Taxes\Tax;

class TaxCalculator 
{
    public static function Calculate(Budget $budget, Tax $tax): float
    {
        return $tax->CalculateTax($budget);
    }

}    