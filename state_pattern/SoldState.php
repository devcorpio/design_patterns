<?php

class SoldState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "Please wait, we're already giving you a gumball";
    }
    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank";
    }
    public function turnCrank()
    {
        echo "Turning twice doesn't get you another gumball!";
    }
    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        //more behavior...
    }
}