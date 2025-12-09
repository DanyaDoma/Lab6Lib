<?php
require_once 'vendor/autoload.php';

namespace Lull\PizzaStore;

abstract class Pizza
{
    protected string $name;
    protected string $sauce;
    protected array $toppings;

    public function __construct(string $name, string $sauce, array $toppings)
    {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "Начинаем готовить {$this->name}\n";
        echo "Добавляем соус: {$this->sauce}\n";
        echo "Добавляем топпинги: " . implode(", ", $this->toppings) . "\n";
    }
    public function getName(): string
    {
        return $this->name;
    }
}