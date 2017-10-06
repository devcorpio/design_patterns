<?php

class GumballMachine
{
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;

    /**
     * @var int
     */
    private $state;

    /**
     * @var int
     */
    private $count;

    public function __construct(int $numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->count = $numberGumballs;

        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function insertQuarter(): void
    {
        $this->state->insertQuater();
    }

    public function ejectQuarter(): void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }
}