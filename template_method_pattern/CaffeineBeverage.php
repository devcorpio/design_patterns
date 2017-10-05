<?php

abstract class CaffeineBeverage
{
    public final function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    public abstract function brew(): void;

    public abstract function addCondiments(): void;

    public function boilWater(): void
    {
        echo "Boiling water";
    }

    public function pourInCup(): void
    {
        echo "Pouring into cup";
    }
}