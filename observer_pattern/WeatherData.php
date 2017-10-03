<?php

class WeatherData implements Subject
{
    /**
     * @var array
     */
    private $observers;

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $anObserver): void
    {
        $this->observers[] = $anObserver;
    }

    public function removeObserver(Observer $anObserver): void
    {
        $key = array_search($anObserver, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers(): void
    {
        foreach($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}