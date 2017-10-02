<?php

class MallardDuck extends Duck
{
    public function __construct(QuackableInterface $quackBehavior, FlyableInterface $flyBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior = $flyBehavior;
    }

    public function display()
    {
        echo "I look like a mallard";
    }
}