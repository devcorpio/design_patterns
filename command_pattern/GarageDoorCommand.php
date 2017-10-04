<?php

class GarageDoorOpenCommand implements Command
{
    /**
     * @var GarageDoor
     */
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->up();
    }

    public function undo(): void
    {
        $this->garageDoor->down();
    }
}