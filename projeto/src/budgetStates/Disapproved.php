<?php 
namespace Pericao\Pattern\BudgetStates;

use Pericao\Pattern\Budget;

class Disapproved extends BudgetState
{
    public function CalculateExtraDiscounts(Budget $budget): float
    {
        throw new \DomainException("A disapproved budget cannot receive a discount.");
    }

    public function finished(Budget $budget)
    {
        $budget->currentState =  new Finished();
    }
}