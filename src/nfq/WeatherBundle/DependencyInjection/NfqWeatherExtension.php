<?php

namespace nfq\WeatherBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class NfqWeatherExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');


        $container->setParameter('nfq.weather.omw.api_key', $config['providers']['openweathermap']);
        $container->setParameter('nfq.weather.omw.base_uri', $config['providers']['openweathermap']);
        $container->setParameter('nfq.weather.omw.endpoint_path', $config['providers']['openweathermap']);
        $container->setParameter('nfq.weather.yh.api_key', $config['providers']['yahoo']);
    }
}