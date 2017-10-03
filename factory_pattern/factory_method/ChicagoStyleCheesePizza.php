<?php

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Chicago Style Deep Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";
    }

    public function cut(): void
    {
        echo "Cutting the pizza into square slices";
    }
}