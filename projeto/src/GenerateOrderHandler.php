<?php 

namespace Pericao\Pattern;
use Pericao\Pattern\ActionGenerateOrder\ActionsAfterGenerateOrder;
use Pericao\Pattern\ActionGenerateOrder\CreateOrderInDatabase;
use Pericao\Pattern\ActionGenerateOrder\LogGenerateOrder;
use Pericao\Pattern\ActionGenerateOrder\SendOrderByEmail;

class GenerateOrderHandler 
{   

    /**
     *  
     * @var ActionsAfterGenerateOrder
     */
    private array $actionsAfterGenerateOrder = [];

    public function __construct()
    {

    }

    public function addActionOnGenerateOrder(ActionsAfterGenerateOrder $actionsGenerateOrder): void
    {
        $this->actionsAfterGenerateOrder[] = $actionsGenerateOrder;
    }

    public function execute(GenerateOrder $generateOrder)
    {
        $budget = new Budget();
        $budget->itemQuantity = $generateOrder->getNumbersItens();
        $budget->value = $generateOrder->getValueBudget();

        $order = new Order();
        $order->dateFinished = new \DateTimeImmutable();
        $order->clientName = $generateOrder->getClientName();
        $order->budget = $budget;
        
        foreach ($this->actionsAfterGenerateOrder as $action) {
            $action->executeAction($order);
        }
    } 
}