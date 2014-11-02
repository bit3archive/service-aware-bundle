<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Security;

use Symfony\Component\Security\Core\SecurityContextInterface;

interface SecurityContextAwareInterface
{
    /**
     * Set the security context.
     *
     * @param SecurityContextInterface $securityContext The security context.
     *
     * @api
     */
    public function setSecurityContext(SecurityContextInterface $securityContext);
}
