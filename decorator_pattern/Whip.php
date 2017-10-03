<?php

class Mocha extends CondimentDecorator
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
       return $this->beverage->getDescription(). ', Mocha';
    }

    public function cost(): double
    {
        return $this->beverage->cost() + 0.20;
    }
}
