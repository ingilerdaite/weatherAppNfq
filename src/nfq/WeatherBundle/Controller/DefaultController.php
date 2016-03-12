<?php

namespace nfq\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EightPoints\Bundle\GuzzleBundle\GuzzleBundle;

class DefaultController extends Controller
{
    /**
     * @Route("/Weather/{city}")
     */
    public function indexAction($city)
    {
        $client   = $this->get('guzzle.client');
        $apikey = $this->container->getParameter('owm_api-key');
        $format = "http://api.openweathermap.org/data/2.5/weather?q=%s&appid=%s&units=metric";
        $url = sprintf($format, $city, $apikey);
        $response = $client->get($url)->send();

        $data = $response->json();
        $temp = $data['main']['temp'];
        return $this->render('nfqWeatherBundle:Default:index.html.twig', ["city"=> $city, "temperature"=>$temp]);
    }
}
