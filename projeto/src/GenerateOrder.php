<?php

namespace Pericao\Pattern;

use Pericao\Pattern\Budget;
use Pericao\Pattern\Order;

class GenerateOrder
{
    private float $valueBudget; 
    private int $numbersItens;
    private string $clientName;
    public function __construct(float $valueBudget, int $numbersItens, string $clientName)
    {
        $this->valueBudget = $valueBudget;
        $this->numbersItens = $numbersItens;
        $this->clientName = $clientName;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }

    public function getValueBudget(): float    
    {
        return $this->valueBudget;
    }

    public function getNumbersItens(): int
    {
        return $this->numbersItens;
    }

}