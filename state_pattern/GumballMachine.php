<?php

class GumballMachine
{
    const SOLD_OUT = 0;
    const NO_QUARTER = 1;
    const HAS_QUARTER = 2;
    const SOLD = 3;

    /**
     * @var int
     */
    private $state;

    /**
     * @var int
     */
    private $count;

    public function __construct(int $count)
    {
        $this->count = $count;
        $this->state = self::SOLD_OUT;
        if ($count > 0) {
            $this->state = self::NO_QUARTER;
        }
    }

    public function insertQuarter(): void
    {
        if ($this->state == self::HAS_QUARTER) {
            echo "You can't insert another quarter";
        } else if ($this->state == self::NO_QUARTER) {
            echo "You inserted a quarter";
            $this->state = self::HAS_QUARTER;
        } else if ($this->state == self::SOLD_OUT) {
            echo "You can't insert a quarter, the machine is sold out";
        } else if ($this->state == self::SOLD) {
            echo "Please wait, we're already giving you a gumball";
        }
    }

    public function ejectQuarter(): void
    {
        if ($this->state == self::HAS_QUARTER) {
            echo "Quarter returned";
            $this->state = self::NO_QUARTER;
        } else if ($this->state == self::NO_QUARTER) {
            echo "You haven't inserted a quarter";
        } else if($this->state == self::SOLD) {
            echo "Sorry, you already turned the crank";
        } else if ($this->state == self::SOLD_OUT) {
            echo "You can't eject, you haven't inserted a quarter yet";
        }
    }

    public function turnCrank(): void
    {
        if ($this->state == self::SOLD) {
            echo "Turning twice doesn't get you anoter gunball!";
        } else if ($this->state == self::NO_QUARTER) {
            echo "You turned but there's no quarter";
        } else if ($this->state == self::SOLD_OUT) {
            echo "You turned, but there are no gumballs";
        } else if ($this->state == self::HAS_QUARTER) {
            echo "You turned...";
            $this->state = self::SOLD;
            $this->dispense();
        }
    }

    public function dispense(): void
    {
        if ($this->state == self::SOLD) {
            echo "A gumball comes rolling out the slot";
            $this->count = $this->count - 1;

            if ($this->count == 0) {
                echo "Oops, out of gumballs";
                $this->state = self::SOLD_OUT;
            } else {
                $this->state = self::NO_QUARTER;
            }
        } else if ($this->state == self::NO_QUARTER) {
            echo "You need to pay first";
        } else if ($this->state == self::SOLD_OUT) {
            echo "No gumball dispensed";
        } else if ($this->state == self::HAS_QUARTER) {
            echo "No gumball dispensed";
        }
    }
}