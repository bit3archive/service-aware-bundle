<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Kernel;

use Symfony\Component\HttpKernel\KernelInterface;

abstract class KernelAware implements KernelAwareInterface
{
    /**
     * The  kernel.
     *
     * @var KernelInterface
     */
    protected $kernel;

    /**
     * {@inheritdoc}
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }
}
