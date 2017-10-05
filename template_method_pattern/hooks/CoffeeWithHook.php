<?php

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    public function brew(): void
    {
        echo "Dripping Coffe through filter";
    }

    public  function addCondiments(): void
    {
        echo "Adding Sugar and Milk";
    }

    public function customerWantsCondiments(): bool
    {
        $answer = $this->getUserInput();

        if (strtolower($answer)[0] === 'y') {
            return true;
        } else {
            return false;
        }
    }

    private function getUserInput(): string
    {
        $answer = null;
        echo "Would you like milk and sugar with your cofee? (y/n)";

        //code where we get get input from user...

        return $answer;
    }
}