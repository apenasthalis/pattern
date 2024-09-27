<?php 

namespace Pericao\Pattern\ActionGenerateOrder;

use Pericao\Pattern\Order;

class LogGenerateOrder implements ActionsAfterGenerateOrder
{
    public function executeAction(Order $order): void
    {
        print 'logs!' . PHP_EOL;
    }
}