<?php

class Coffee
{
    public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brewCoffeeGrinds();
        $this->pourInCup();
        $this->addSugarAndMilk();
    }

    public function boilWater(): void
    {
        echo "Boiling water";
    }

    public function brewCoffeGrinds(): void
    {
        echo "Dripping Coffee through filter";
    }

    public function pourInCup(): void
    {
        echo "Pouring into cup";
    }

    public function addSugarAndMilk(): void
    {
        echo "Adding sugar and Milk";
    }
}