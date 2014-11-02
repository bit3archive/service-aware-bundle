<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Kernel;

use Symfony\Component\HttpKernel\HttpKernelInterface;

abstract class HttpKernelAware implements HttpKernelAwareInterface
{
    /**
     * The http kernel.
     *
     * @var HttpKernelInterface
     */
    protected $httpKernel;

    /**
     * {@inheritdoc}
     */
    public function setHttpKernel(HttpKernelInterface $httpKernel)
    {
        $this->httpKernel = $httpKernel;
    }
}
