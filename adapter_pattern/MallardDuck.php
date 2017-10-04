<?php

class MallardDuck implements Duck
{
    public function quack(): void
    {
        echo "quack!";
    }

    public function fly(): void
    {
        echo "fly";
    }
}