<?php

class FlyNoWay implements FlyableInterface
{
    public function fly()
    {
        echo 'I cannot fly';
    }
}