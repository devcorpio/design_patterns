<?php

abstract class Duck
{
    /**
     * @var QuackableInterface
     */
    protected $quackBehavior;

    /**
     * @var FlyableInterface
     */
    protected $flyBehavior;

    abstract public function display();

    public function setQuackBehavior(QuackableInterface $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function setFlyBehavior(FlyableInterface $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function swim()
    {
        echo "I'm swimming!";
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }
}