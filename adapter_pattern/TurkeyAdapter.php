<?php

class TurkeyAdapter implements Duck
{
    /**
     * @var Turkey
     */
    private $turkey;

    public function __construct(Turkey $aTurkey)
    {
        $this->turkey = $aTurkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        //short fly
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}