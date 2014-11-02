<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Kernel;

use Symfony\Component\HttpKernel\HttpKernelInterface;

trait HttpKernelAwareTrait
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
