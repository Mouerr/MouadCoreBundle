<?php

namespace Mouad\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('mouad_core');
        $rootNode = $treeBuilder->getRootNode();
        $rootNode
            ->children()
            ->variableNode('core_region_repository')
            ->end()
        ;
        return $treeBuilder;
    }
}