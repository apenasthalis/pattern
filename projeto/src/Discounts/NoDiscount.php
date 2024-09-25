<?php 

namespace Pericao\Pattern\Discounts;

use Pericao\Pattern\Budget;
use Pericao\Pattern\Discounts\Discount;

class NoDiscount extends Discount
{

    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculateDiscount(Budget $budget) :float
    {
        return 0;
    }
}