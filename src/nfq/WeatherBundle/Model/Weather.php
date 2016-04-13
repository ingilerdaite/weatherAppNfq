<?php

namespace nfq\WeatherBundle\Model;

class Weather
{
    private $temperature;

    public function getTemperature()
    {
        return $this->temperature;
    }
    /**
     * @param float $temp
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    public function __construct($temperature)
    {
        $this->temperature = $temperature;
    }
}