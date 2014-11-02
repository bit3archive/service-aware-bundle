<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Kernel;

use Symfony\Component\HttpKernel\HttpKernelInterface;

interface HttpKernelAwareInterface
{
    /**
     * Set the http kernel.
     *
     * @param HttpKernelInterface $httpKernel The http kernel.
     *
     * @api
     */
    public function setHttpKernel(HttpKernelInterface $httpKernel);
}
