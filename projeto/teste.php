<?php
use Pericao\Pattern\Budget;
use Pericao\Pattern\TaxCalculator;
use Pericao\Pattern\Taxes\Icms;
use Pericao\Pattern\Taxes\Iss;

require 'vendor/autoload.php';

$calculate = new TaxCalculator();
$budget = new Budget();

$budget->value = 100;

echo $calculate->Calculate($budget, new Icms());