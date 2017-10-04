<?php

class NYStylePizzaStore extends PizzaStore
{
    function createPizza($type)
    {
        $pizza = null;

        if ($type === "cheese") {
            $pizza = new NYStyleCheesePizza();
        } else if ($type === "pepperoni") {
            $pizza = new NYStylePepperoniPizza();
        } else if ($type === "clam") {
            $pizza = new NYStyleClamPizza();
        } else if ($type === "veggie") {
            $pizza = new NYStyleVeggiePizza();
        }

        return $pizza;
    }
}