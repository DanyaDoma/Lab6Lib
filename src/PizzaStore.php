<?php

namespace Lull\PizzaStore;

class PizzaStore
{	
	public string $type;
    public function createPizza(string $type): string
    {
       return $this->type;
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