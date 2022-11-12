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
        /*$rootNode
            ->children()
            ->booleanNode('unicorns_are_real')->defaultTrue()->end()
            ->integerNode('min_sunshine')->defaultValue(3)->end()
            ->end()
        ;*/
        return $treeBuilder;
    }
}