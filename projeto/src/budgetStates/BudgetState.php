<?php

namespace Pericao\Pattern\BudgetStates;
use Pericao\Pattern\Budget;

abstract class BudgetState
{
   abstract public function CalculateExtraDiscounts(Budget $budget):float;

   public function approve(Budget $budget)
   {
        throw new \DomainException("This budget cannot be approved");
   }

   public function disapprove(Budget $budget)
   {
        throw new \DomainException("This budget cannot be disapproved");
   }

   public function finish(Budget $budget)
   {
        throw new \DomainException("This budget cannot be finished");
   }

}