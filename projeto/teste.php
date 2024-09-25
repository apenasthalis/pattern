<?php
use Pericao\Pattern\Budget;
use Pericao\Pattern\DiscountCalculator;
use Pericao\Pattern\TaxCalculator;
use Pericao\Pattern\Taxes\Icms;
use Pericao\Pattern\Taxes\Iss;

require 'vendor/autoload.php';

// $calculate = new TaxCalculator();
// $budget = new Budget();

// $budget->value = 100;

// echo $calculate->Calculate($budget, new Icms());

$calcultator = new DiscountCalculator();
$budget = new Budget();
$budget->value = 700;
$budget->itemQuantity = 6;
$resultDiscountOfBudget = $calcultator->calculateDiscount($budget);

print $resultDiscountOfBudget . PHP_EOL;