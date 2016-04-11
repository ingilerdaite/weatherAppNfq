<?php


namespace nfq\WeatherBundle\Service;

use EightPoints\Bundle\GuzzleBundle\GuzzleBundle;

class OpenMapWeatherServiceProvider implements WeatherServiceProviderInterface
{
    const PROVIDERURI = "http://api.openweathermap.org/data/2.5/weather?q=%s&appid=%s&units=metric";

    public function GetWeatherByCityName($city)
    {
        $client   = $this->get('guzzle.client');
        $apikey = $this->container->getParameter('owm_api-key');
        $formaterUrl = sprintf(self::PROVIDERURI, $city, $apikey);
        $responseFromServer = $client->get($formaterUrl)->send();

        $jsonDataObject = $responseFromServer->json();
        $temperature = $jsonDataObject['main']['temp'];
        return $temperature;
    }
}