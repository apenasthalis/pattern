<?php

namespace Pericao\Pattern\ActionGenerateOrder;

use Pericao\Pattern\Order;

interface ActionsAfterGenerateOrder
{

    public function executeAction(Order $order): void;
}