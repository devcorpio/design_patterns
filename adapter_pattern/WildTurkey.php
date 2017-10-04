<?php

class WildTurkey implements Turkey
{
    public function gobble(): void
    {
        echo "gobble!";
    }

    public function fly(): void
    {
        echo "fly short distance";
    }
}