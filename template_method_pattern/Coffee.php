<?php

class Coffee extends CaffeineBeverage
{
    public function brew(): void
    {
        echo "Dripping Coffe through filter";
    }

    public  function addCondiments(): void
    {
        echo "Adding Sugar and Milk";
    }
}