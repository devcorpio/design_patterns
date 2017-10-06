<?php

class HasQuarterState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You can't insert another quarter";
    }
    public function ejectQuarter()
    {
        echo "You haven't inserted a quarter";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }
    public function turnCrank()
    {
        echo "You turned...";
        $this->gumballMachine->setState($this->gumballMachine->getSoldState());
    }
    public function dispense()
    {
        echo "No gumball dispensed";
    }
}