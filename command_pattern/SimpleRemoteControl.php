<?php

class SimpleRemoteControl
{
    /**
     * @var Command
     */
    private $slot;

    public function __construct()
    {
    }

    public function setCommand(Command $command): void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}