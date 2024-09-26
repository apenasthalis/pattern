<?php 
namespace Pericao\Pattern\BudgetStates;
use Pericao\Pattern\Budget;

class Finished extends BudgetState
{
    public function CalculateExtraDiscounts(Budget $budget): float
    {
        throw new \DomainException("A finished budget cannot receive a discount.");
    }
}