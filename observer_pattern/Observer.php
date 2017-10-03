<?php

interface Observer
{
    public function update(Subject $aSubject): void;
}