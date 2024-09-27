<?php 

namespace Pericao\Pattern\ActionGenerateOrder;

use Pericao\Pattern\Order;

class CreateOrderInDatabase implements ActionsAfterGenerateOrder
{
    public function executeAction(Order $order): void
    {
        print 'create data in database sucessful!' . PHP_EOL;
    }
}