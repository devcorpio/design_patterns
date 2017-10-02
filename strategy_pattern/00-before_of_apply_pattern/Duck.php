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

    abstract public function display();
}