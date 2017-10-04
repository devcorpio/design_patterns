<?php

abstract class Pizza
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $dough;

    /**
     * @var string
     */
    protected $sauce;

    public function prepare(): void
    {
        echo "Preparing " . $this->name;
        echo "Tossing dough...";
        echo "Adding sauce...";
        echo "Adding toppings...";
    }

    public function bake(): void
    {
        echo "Bake for 25 minutes at 350";
    }

    public function cut(): void
    {
        echo "Cutting the pizza into diagonal slices";
    }

    public function box(): void
    {
        echo "Place pizza in official PizzaStore box";
    }

    public function getName(): string
    {
        return $this->name;
    }
}