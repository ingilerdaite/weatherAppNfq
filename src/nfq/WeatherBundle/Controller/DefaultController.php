<?php

namespace nfq\WeatherBundle\Controller;

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
        $provider = new Service\OpenMapWeatherServiceProvider();
        $service = new Service\WeatherService($provider);

        $temp = $service->getWeatherForLocation($city);
        return $this->render('nfqWeatherBundle:Default:index.html.twig', ["city"=> $city, "temperature"=>$temp]);
    }
}
