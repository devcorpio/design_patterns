<?php

class Menu extends MenuComponent
{
    /**
     * @var array
     */
    private $menuComponents;

    /**
     * @var string
     */
    private $name;

    /**
     * @var $description
     */
    private $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent): void
    {
        unset($this->menuComponents[$menuComponent]);
    }

    public function getChild(int $i): MenuComponent
    {
        // I know that this code is not valid
        return $this->menuComponents[$i];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function print(): void
    {
        echo "\n". $this->getName();
        echo "    -- ". $this->getDescription();
        echo "------------------";

        $iterator = $this->menuComponents->iterator();

        while($iterator->hasNext()) {
            $menuComponent = $iterator->next();
            $menuComponent->print();
        }
    }
}