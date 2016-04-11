<?php
namespace nfq\WeatherBundle\Service;

interface WeatherServiceProviderInterface
{
    public function GetWeatherByCityName($city);
}