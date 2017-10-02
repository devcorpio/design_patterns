<?php

abstract class Duck
{

    public function swim()
    {
        echo "I'm swimming!";
    }

    abstract public function display();
}