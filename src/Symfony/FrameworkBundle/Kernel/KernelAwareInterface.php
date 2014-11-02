<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Kernel;

use Symfony\Component\HttpKernel\KernelInterface;

interface KernelAwareInterface
{
    /**
     * Set the http kernel.
     *
     * @param KernelInterface $kernel The http kernel.
     *
     * @api
     */
    public function setKernel(KernelInterface $kernel);
}
