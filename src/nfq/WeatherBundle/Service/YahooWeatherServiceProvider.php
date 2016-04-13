<?php

namespace nfq\WeatherBundle\Service;


use nfq\WeatherBundle\Model\Location;
use nfq\WeatherBundle\Model\Weather;

class YahooWeatherServiceProvider implements WeatherServiceProviderInterface
{

    public function getWeatherByLocation(Location $location) : Weather
    {
        // TODO: Implement getWeatherByLocation() method.
        return new Weather();
    }
}