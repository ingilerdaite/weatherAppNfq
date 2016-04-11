<?php
namespace nfq\WeatherBundle\Service;

use EightPoints\Bundle\GuzzleBundle\GuzzleBundle;

interface WeatherServiceProviderInterface
{
    public function GetWeatherByCityName($city);
}