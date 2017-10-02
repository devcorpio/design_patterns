<?php

interface Subject
{
    public function registerObserver(Observer $anObserver): void;

    public function removeObserver(Observer $anObserver): void;

    public function notifyObservers(): void;
}