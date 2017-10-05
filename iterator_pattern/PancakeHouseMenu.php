<?php

class PancakeHouseMenu
{
    /**
     * @var array
     */
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = [];

        $this->addItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", true, 2.99);
        $this->addItem("K&B's Pancake Breakfast2", "Pancakes with scrambled eggs2, and toast2", false, 3.99);
        $this->addItem("K&B's Pancake Breakfast3", "Pancakes with scrambled eggs3, and toast3", true, 4.99);
        $this->addItem("K&B's Pancake Breakfast4", "Pancakes with scrambled eggs4, and toast4", true, 5.99);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems[] = $menuItem;
    }

    public function createIterator(): IteratorCustom
    {
        return new DinerMenuIterator($this->menuItems);
    }
}