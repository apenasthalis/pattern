<?php 

namespace Pericao\Pattern\Discounts;
use Pericao\Pattern\Budget;

/*
    chain of responsability
*/

abstract class Discount 
{
    protected ?Discount $nextDiscount;

    public function __construct(?Discount $nextDiscount)
    {
        $this->nextDiscount = $nextDiscount;
    }

    abstract public function calculateDiscount(Budget $budget): float;
}