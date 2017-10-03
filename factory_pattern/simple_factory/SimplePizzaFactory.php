<?php

class SimplePizzaFactory
{
    function createPizza($type)
    {
        $pizza = null;

        if ($type === "cheese") {
            $pizza = new CheesePizza();
        } else if ($type === "pepperoni") {
            $pizza = new PepperoniPizza();
        } else if ($type === "clam") {
            $pizza = new StyleClamPizza();
        } else if ($type === "veggie") {
            $pizza = new StyleVeggiePizza();
        }

        return $pizza;
    }
}