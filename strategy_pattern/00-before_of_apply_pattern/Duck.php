<?php

abstract class Duck
{
    public function quack()
    {
        echo 'quack quack';
    }

    public function swim()
    {
        echo "I'm swimming!";
    }

    public function fly()
    {
        echo "I'm flying";
    }

    abstract public function display();
}