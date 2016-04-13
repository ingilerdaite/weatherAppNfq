<?php

namespace nfq\WeatherBundle\Model;

class Location
{
    private $city;

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function __construct($city)
    {
        $this->city = $city;
    }
}