<?php

namespace nfq\WeatherBundle;

use nfq\WeatherBundle\DependencyInjection\NfqWeatherExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class nfqWeatherBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new NfqWeatherExtension();
    }
}
