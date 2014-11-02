<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Router;

use Symfony\Component\Routing\RouterInterface;

interface RouterAwareInterface
{
    /**
     * Set the router.
     *
     * @param RouterInterface $router The router.
     *
     * @api
     */
    public function setRouter(RouterInterface $router);
}
