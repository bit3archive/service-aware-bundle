<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Request;

use Symfony\Component\HttpFoundation\RequestStack;

interface RequestStackAwareInterface
{
    /**
     * Set the request stack.
     *
     * @param RequestStack $requestStack The request stack.
     *
     * @api
     */
    public function setRequestStack(RequestStack $requestStack);
}
