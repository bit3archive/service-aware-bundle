<?php

namespace Bit3\Symfony\ServiceAwareBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Inject services to *Aware services.
 */
class InjectServicesCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $services    = $container->getParameter('service_aware.services');
        $definitions = $container->getDefinitions();

        foreach ($definitions as $definition) {
            if (
                !$definition->getClass()
                || !class_exists($definition->getClass())
                || $definition->getFactoryClass()
                || $definition->getFactoryService()
            ) {
                // skip definitions
                // ...without class
                // ...without existing class
                // ...with a factory
                continue;
            }

            $class = new \ReflectionClass($definition->getClass());

            foreach ($services as $service) {
                if ($class->implementsInterface($service['interface'])) {
                    $definition->addMethodCall(
                        $service['method'],
                        array(new Reference($service['service']))
                    );
                }
            }
        }
    }
}
