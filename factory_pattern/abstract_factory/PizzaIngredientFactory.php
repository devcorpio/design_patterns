<?php

interface PizzaIngredientFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): Veggie;

    public function createPepperoni(): Pepperoni;

    public function createClam(): Clam;
}