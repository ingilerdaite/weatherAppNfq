<?php

namespace nfq\WeatherBundle\Service;


use GuzzleHttp\Psr7\Response;
use nfq\WeatherBundle\Model\Weather;

interface WeatherParserInterface
{
    public static function parseWeatherApiResponse(Response $response): Weather;
}