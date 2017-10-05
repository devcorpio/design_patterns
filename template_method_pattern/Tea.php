<?php

class Tea
{
    public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->steepTeaBag();
        $this->pourInCup();
        $this->addLemon();
    }

    public function boilWater(): void
    {
        echo "Boiling water";
    }

    public function steepTeaBag(): void
    {
        echo "Steeping the tea";
    }

    public function pourInCup(): void
    {
        echo "Pouring into cup";
    }

    public function addLemon(): void
    {
        echo "Adding lemon";
    }
}