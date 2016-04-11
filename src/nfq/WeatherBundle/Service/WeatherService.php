<?php


namespace nfq\WeatherBundle\Service;


class WeatherService implements WeatherServiceInterface
{
    private $weatherProvider;
    public function __construct(WeatherServiceProviderInterface $provider)
    {
        $this->weatherProvider = $provider;
    }

    public function getWeatherForLocation($location)
    {
        return $this->weatherProvider->GetWeatherByCityName($location);
    }
}