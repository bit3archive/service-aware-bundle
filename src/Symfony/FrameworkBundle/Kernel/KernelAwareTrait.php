<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Kernel;

use Symfony\Component\HttpKernel\KernelInterface;

trait KernelAwareTrait
{
    /**
     * The http kernel.
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
