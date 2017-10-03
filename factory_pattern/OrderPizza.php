<?php

class PizzaStore
{
    public function orderPizza(): Pizza
    {
        $pizza = new Pizza();

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}