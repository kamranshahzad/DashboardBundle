<?php


namespace Kamran\DashboardBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;


class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('kamran_dashboard');

        $rootNode
            ->children()
                ->scalarNode('title')
                ->defaultTrue()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }


}
