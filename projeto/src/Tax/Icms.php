<?php

namespace Pericao\Pattern;
use Pericao\Pattern\Tax;

class Icms implements Tax
{
    public function CalculateTax(Budget $budget): float
    {
        return $budget->value * 0.10;
    }
}