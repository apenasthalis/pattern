<?php

namespace Pericao\Pattern;
use Pericao\Pattern\BudgetStates\BudgetState;
use Pericao\Pattern\BudgetStates\InApproval;


Class Budget 
{
    public float $value;
    public int $itemQuantity;
    public BudgetState $currentState;
    // public function __construct()
    // {
    //     $this->currentState = new InApproval();
    // }

    public function applyExtraDiscounts()
    {
        $this->value -= $this->currentState->CalculateExtraDiscounts($this);
    }

    public function approve()
    {
       $this->currentState->approve($this);
    }

    public function disapprove( )
    {
        $this->currentState->disapprove($this);
    }

    public function finished( )
    {
        $this->currentState->finish($this);
    }
}