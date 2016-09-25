<?php

namespace Bit3\Symfony\ServiceAwareBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\DependencyInjection\Loader;

/**
 * {@inheritdoc}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('service_aware');

        // @formatter:off
        $rootNode
            ->children()
                ->arrayNode('services')
                    ->useAttributeAsKey('name')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('interface')
                                ->isRequired()
                                ->cannotBeEmpty()
                            ->end()
                            ->scalarNode('method')
                                ->isRequired()
                                ->cannotBeEmpty()
                            ->end()
                            ->scalarNode('service')
                            ->end()
                            ->scalarNode('parameter')
                            ->end()
                            ->scalarNode('compiler')
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
        // @formatter:on

        return $treeBuilder;
    }
}
