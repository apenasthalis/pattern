<?php
use Pericao\Pattern\Budget;
use Pericao\Pattern\TaxCalculator;

require 'vendor/autoload.php';

$calculate = new TaxCalculator();
$budget = new Budget();

$budget->value = 100;

echo $calculate->Calculate($budget, 'ISS');