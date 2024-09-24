<?php

namespace Pericao\Pattern;
use Pericao\Pattern\Tax;

class Iss implements Tax
{
    public function CalculateTax(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}