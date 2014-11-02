<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Router;

use Symfony\Component\Routing\RouterInterface;

abstract class RouterAware implements RouterAwareInterface
{
    /**
     * The router.
     *
     * @var RouterInterface
     */
    protected $router;

    /**
     * {@inheritdoc}
     */
    public function setRouter(RouterInterface $router)
    {
        $this->router = $router;
    }
}
