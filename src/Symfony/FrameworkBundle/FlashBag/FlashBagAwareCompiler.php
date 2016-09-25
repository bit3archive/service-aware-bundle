<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\FlashBag;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class FlashBagAwareCompiler
{
    public static function compile(ContainerBuilder $container, $id, Definition $definition)
    {
        $decorator = $container->register($id . '.flashBag');
        $decorator->setPublic(false);
        $decorator->setClass($definition->getClass());
        $decorator->setDecoratedService($id);
        $decorator->setFactory(['Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\FlashBag\FlashBagAwareDecorator', 'decorate']);
        $decorator->addArgument(new Reference($id . '.flashBag.inner'));
        $decorator->addArgument(new Reference('session'));
    }
}
