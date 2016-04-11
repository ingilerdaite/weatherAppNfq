<?php

namespace nfq\WeatherBundle\Service;

interface WeatherServiceInterface
{
    public function getWeatherForLocation($location);
}