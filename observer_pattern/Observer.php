<?php

interface Observer
{
    public function update(float $temp, float $humidity, float $pressure);
}