<?php 

namespace Pericao\Pattern\ActionGenerateOrder;

use Pericao\Pattern\Order;

class SendOrderByEmail implements ActionsAfterGenerateOrder
{
    public function executeAction(Order $order): void
    {
        print 'receive your email! receive!' . PHP_EOL;
    }
}