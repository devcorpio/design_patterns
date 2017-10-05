<?php

interface IteratorCustom
{
    public function hasNext(): bool;

    public function next();
}