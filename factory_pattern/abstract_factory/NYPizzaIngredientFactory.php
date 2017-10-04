<?php

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): Veggie
    {
        return new Onion();
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FreshClams();
    }
}