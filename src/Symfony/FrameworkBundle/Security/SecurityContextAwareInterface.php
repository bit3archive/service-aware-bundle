<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Security;

use Symfony\Component\Security\Core\SecurityContextInterface;

/**
 * @deprecated since symfony 2.6, to be removed in symfony 3.0.
 *             Use {@link TokenStorageAwareInterface} or {@link AuthorizationCheckerAwareInterface} instead.
 */
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
