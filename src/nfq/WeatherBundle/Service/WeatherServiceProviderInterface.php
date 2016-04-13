<?php
namespace nfq\WeatherBundle\Service;

use nfq\WeatherBundle\Model\Location;
use nfq\WeatherBundle\Model\Weather;

interface WeatherServiceProviderInterface
{
    public function getWeatherByLocation(Location $location) : Weather;
}