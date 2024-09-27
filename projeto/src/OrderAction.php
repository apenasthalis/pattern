<?php 

require_once 'vendor/autoload.php';

use Pericao\Pattern\ActionGenerateOrder\CreateOrderInDatabase;
use Pericao\Pattern\ActionGenerateOrder\LogGenerateOrder;
use Pericao\Pattern\ActionGenerateOrder\SendOrderByEmail;
use Pericao\Pattern\Budget;
use Pericao\Pattern\GenerateOrder;
use Pericao\Pattern\GenerateOrderHandler;
use Pericao\Pattern\Order;

$valueBudget = $argv[1];
$numbersItens = $argv[2];
$clientName = $argv[3];

$generateOrder =  new GenerateOrder($valueBudget, $numbersItens,$clientName);
$generateOrderHandler = new GenerateOrderHandler();
$generateOrderHandler->addActionOnGenerateOrder(new CreateOrderInDatabase());
$generateOrderHandler->addActionOnGenerateOrder(new SendOrderByEmail());
$generateOrderHandler->addActionOnGenerateOrder(new LogGenerateOrder());
$generateOrderHandler->execute($generateOrder);