<?php

abstract class Pizza
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Dough
     */
    protected $dough;

    /**
     * @var Sauce
     */
    protected $sauce;

    /**
     * @var Veggie
     */
    protected $veggie;

    /**
     * @var Cheese
     */
    protected $cheese;

    /**
     * @var Pepperoni
     */
    protected $pepperoni;

    /**
     * @var Clams
     */
    protected $clam;

    public abstract function prepare(): void;

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