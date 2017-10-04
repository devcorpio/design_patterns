<?php

class ChicagoIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): Veggie
    {
        return new Spinach();
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FrozenClam();
    }
}