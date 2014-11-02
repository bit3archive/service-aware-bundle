<?php

namespace Bit3\Symfony\ServiceAwareBundle\DependencyInjection;

use Bit3\Symfony\ServiceAwareBundle\DependencyInjection\Compiler\InjectServicesCompilerPass;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Yaml\Yaml;

/**
 * {@inheritdoc}
 */
class ServiceAwareExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $parser   = new Yaml();
        foreach (['braincrafted', 'doctrine', 'jms', 'symfony'] as $file) {
            $defaults = $parser->parse(file_get_contents(__DIR__ . '/../Resources/config/' . $file . '.yml'));

            // append default service configuration
            $configs[] = $defaults['service_aware'];
        }

        $processor     = new Processor();
        $configuration = new Configuration();
        $config        = $processor->processConfiguration($configuration, $configs);

        $container->setParameter('service_aware.services', $config['services']);
    }
}
