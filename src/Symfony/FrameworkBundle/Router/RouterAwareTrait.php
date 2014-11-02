<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Router;

use Symfony\Component\Routing\RouterInterface;

trait RouterAwareTrait
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
