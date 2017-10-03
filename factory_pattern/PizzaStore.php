<?php

class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = null;

        if ($type === "cheese") {
            $pizza = new CheesePizza();
        } else if ($type === "pepperoni") {
            $pizza = new PepperoniPizza();
        } else if ($type === "clam") {
            $pizza = new ClamPizza();
        } else if ($type === "veggie") {
            $pizza = new VeggiePizza();
        }

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}