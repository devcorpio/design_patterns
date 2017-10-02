<?php

class RedheadDuck extends Duck implements QuackableInterface, FlyableInterface
{
    public function display()
    {
        echo "I look like a redhead";
    }

    public function fly()
    {
        echo "I'm flying";
    }

    public function quack()
    {
        echo "Quack quack";
    }
}