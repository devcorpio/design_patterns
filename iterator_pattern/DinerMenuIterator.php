<?php

class DinerMenuIterator implements IteratorCustom
{
    /**
     * @var array
     */
    private $items;
    private $position;

    public function __construct(MenuItem ...$items)
    {
        $this->position = 0;
        $this->items = $items;
    }

    public function next(): MenuItem
    {
        $menuItem = $this->items[$this->position];
        $this->position = $this->position + 1;

        return $menuItem;
    }

    public function hasNext(): bool
    {
        if ($this->position >= count($this->items) || $this->items[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }
}