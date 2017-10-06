<?php

abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent): void
    {
        throw new UnexpectedValueException();
    }

    public function remove(MenuComponent $menuComponent): void
    {
        throw new UnexpectedValueException();
    }

    public function getChild(int $i): MenuComponent
    {
        throw new UnexpectedValueException();
    }

    public function getName(): string
    {
        throw new UnexpectedValueException();
    }

    public function getDescription(): string
    {
        throw new UnexpectedValueException();
    }

    public function getPrice(): float
    {
        throw new UnexpectedValueException();
    }

    public function isVegetarian(): bool
    {
        throw new UnexpectedValueException();
    }

    public function print(): void
    {
        throw new UnexpectedValueException();
    }

}