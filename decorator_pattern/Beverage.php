<?php

abstract class Beverage
{
    protected $description;

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}