<?php

class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = null;

        if ($type === "cheese") {
            $pizza = new CheesePizza();
        } else if ($type === "greek") {
            $pizza = new GreekPizza();
        } else if ($type === "pepperoni") {
            $pizza = new PepperoniPizza();
        }

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}