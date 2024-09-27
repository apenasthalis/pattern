<?php 

namespace Pericao\Pattern;

use Pericao\Pattern\Budget;

class Order
{
    public string $clientName;
    public \DateTimeInterface $dateFinished;
    public Budget $budget;

}