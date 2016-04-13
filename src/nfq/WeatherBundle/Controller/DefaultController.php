<?php

namespace nfq\WeatherBundle\Controller;

use nfq\WeatherBundle\Model\Location;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use nfq\WeatherBundle\Service;

class DefaultController extends Controller
{
    /**
     * @Route("/Weather/{city}")
     */
    public function indexAction($city)
    {
        $location = new Location($city);
        $provider = $this->get("nfq.weather.openweathermap");
        $weather = $provider->getWeatherByLocation($location);
        return $this->render('nfqWeatherBundle:Default:index.html.twig', ["city"=> $city, "temperature"=>$weather->getTemperature()]);
    }
}
