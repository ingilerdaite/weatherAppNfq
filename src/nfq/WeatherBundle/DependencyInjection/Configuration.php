<?php

namespace nfq\WeatherBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treebuilder = new TreeBuilder();
        $rootNode = $treebuilder->root('nfq_waether');
        $rootNode
            ->children()
                ->arrayNode('providers')
                    ->children()
                        ->arrayNode('yahoo')
                            ->children()
                                ->scalarNode('api_key')->end()
                            ->end()
                        ->end()
                        ->arrayNode('openweathermap')
                            ->children()
                                ->scalarNode('api_key')->end()
                                ->scalarNode('base_uri')->end()
                                ->scalarNode('endpoint_path')->end()
                            ->end()
                        ->end()
                        ->arrayNode('delegating')
                            ->children()
                                ->arrayNode('providers')
                                    ->prototype('scalar')->end()
                                ->end()
                            ->end()
                        ->end()
                        ->arrayNode('cached')
                            ->children()
                                ->scalarNode('provider')
                                ->end()
                                ->scalarNode('ttl')
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
                ->scalarNode('provider')
                ->end()
            ->end();


        return $treebuilder;
    }
}