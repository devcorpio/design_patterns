<?php

require 'Subject.php';
require 'Observer.php';
require 'DisplayElement.php';
require 'CurrentConditionsDisplay.php';
require 'WeatherData.php';

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
$weatherData->setMeasurements(82, 70, 29.2);
$weatherData->setMeasurements(78, 90, 29.2);