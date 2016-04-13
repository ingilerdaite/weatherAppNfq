<?php


namespace nfq\WeatherBundle\Service;

use GuzzleHttp\Client;
use nfq\WeatherBundle\Model\Location;
use nfq\WeatherBundle\Model\Weather;
use Symfony\Component\Config\Definition\Exception\Exception;

class OpenMapWeatherServiceProvider implements WeatherServiceProviderInterface
{
    private $appId;
    private $baseApiUrl;
    private $weatherEndpointPath;

    public function __construct($settings)
    {
        $this->appId = $settings['api_key'];
        $this->baseApiUrl = $settings['base_uri'];
        $this->weatherEndpointPath = $settings['endpoint_path'];
    }

    public function getWeatherByLocation(Location $location) : Weather
    {
        $client = new Client(['base_uri' => $this->baseApiUrl]);
        $formatedEndpointUr = sprintf($this->weatherEndpointPath, $location->getCity(), $this->appId);
        $response = $client->request('GET', $formatedEndpointUr);
        if ($response->getStatusCode() != 200) {
            throw new Exception('Ups something went terribly wrong!');
        }

        return OpenMapWeatherResponseParser::parseWeatherApiResponse($response);
    }
}