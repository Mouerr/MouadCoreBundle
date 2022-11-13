<?php

namespace Mouad\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Reference;

class MouadCoreBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);
        $definition = $container->getDefinition('mouad_core.core_region_repository');
        if (null !== $config['core_region_repository']) {
            $definition->setArgument(0, new Reference($config['core_region_repository']));
        }
    }

    public function getAlias()
    {
        return 'mouad_core';
    }
}