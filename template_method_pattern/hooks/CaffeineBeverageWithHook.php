<?php

abstract class CaffeineBeverageWithHook
{
    public final function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
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

    public function customerWantsCondiments(): bool
    {
        return true;
    }
}