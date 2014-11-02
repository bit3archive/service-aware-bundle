<?php

namespace Bit3\Symfony\ServiceAwareBundle;

use Bit3\Symfony\ServiceAwareBundle\DependencyInjection\Compiler\InjectServicesCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * {@inheritdoc}
 */
class ServiceAwareBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new InjectServicesCompilerPass());
    }
}
