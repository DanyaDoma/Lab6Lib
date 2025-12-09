<?php

namespace Lull\PizzaStore;

use Lull\PizzaStore\Pizzas\CheesePizza;
use Lull\PizzaStore\Pizzas\PepperoniPizza;
use Lull\PizzaStore\Pizzas\VeggiePizza;

class PizzaStore
{
    public function createPizza(string $type): ?Pizza
    {
        switch ($type) {
            case 'cheese':
                return new CheesePizza();
            case 'pepperoni':
                return new PepperoniPizza();
            case 'veggie':
                return new VeggiePizza();
            default:
                return null;
        }
    }

    public function orderPizza(string $type): void
    {
        $pizza = $this->createPizza($type);
        
        if ($pizza === null) {
            echo "Такой пиццы нет в ассортименте!\n";
            return;
        }

        $pizza->prepare();
        echo "Заказ готов: " . $pizza->getName() . "\n";
    }
}