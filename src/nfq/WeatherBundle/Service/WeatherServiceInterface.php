<?php

namespace nfq\WeatherBundle\Service;

use EightPoints\Bundle\GuzzleBundle\GuzzleBundle;

interface WeatherServiceInterface
{
    public function getWeatherForLocation($location);
}