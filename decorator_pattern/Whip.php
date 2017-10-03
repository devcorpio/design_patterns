<?php

class Whip extends CondimentDecorator
{
    /**
     * @var Beverage
     */
    private $beverage;

    public function __construct(Beverage $aBeverage)
    {
        $this->beverage = $aBeverage;
    }

    public function getDescription(): string
    {
       return $this->beverage->getDescription(). ', Whip';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.10;
    }
}
