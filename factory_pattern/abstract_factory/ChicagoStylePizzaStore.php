<?php

class ChicagoPizzaStore extends PizzaStore
{
    function createPizza($type)
    {
        $pizza = null;
        $pizzaIngredientFactory = new ChicagoIngredientFactory();

        if ($type === "cheese") {
            $pizza = new CheesePizza($pizzaIngredientFactory);
        } else if ($type === "pepperoni") {
            $pizza = new PepperoniPizza($pizzaIngredientFactory);
        } else if ($type === "clam") {
            $pizza = new ClamPizza($pizzaIngredientFactory);
        } else if ($type === "veggie") {
            $pizza = new VeggiePizza($pizzaIngredientFactory);
        }

        return $pizza;
    }
}