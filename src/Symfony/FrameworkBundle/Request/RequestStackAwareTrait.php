<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Request;

use Symfony\Component\HttpFoundation\RequestStack;

trait RequestStackAwareTrait
{
    /**
     * The request stack.
     *
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * {@inheritdoc}
     */
    public function setRequestStack(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
}
