<?php

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var WeatherData
     */
    private $weatherData;

    public function __construct(Subject $aWeatherData)
    {
        $this->weatherData = $aWeatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display(): void
    {
        echo "Current conditions: " . $this->temperature . "F degrees and " . $this->humidity . "% humidity";
    }
}