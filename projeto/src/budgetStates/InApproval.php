<?php

namespace Pericao\Pattern\BudgetStates;

use Pericao\Pattern\Budget;

class InApproval extends BudgetState
{
    public function CalculateExtraDiscounts(Budget $budget): float
    {
        return $budget->value * 0.5;
    }

    public function approve(Budget $budget)
    {
        $budget->currentState = new Approved();
    }

    public function disapprove(Budget $budget)
    {
        throw new \DomainException("This budget cannot be disapproved");
    }

}