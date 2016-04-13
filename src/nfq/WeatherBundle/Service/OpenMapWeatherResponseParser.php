<?php

namespace nfq\WeatherBundle\Service;


use GuzzleHttp\Psr7\Response;
use nfq\WeatherBundle\Model\Weather;

class OpenMapWeatherResponseParser implements WeatherParserInterface
{

    public static function parseWeatherApiResponse(Response $response): Weather
    {
        $data = json_decode($response->getBody(), true);
        $temperature = $data['main']['temp'];

        return new Weather($temperature);
    }
}