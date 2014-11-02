<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Security;

use Symfony\Component\Security\Core\SecurityContextInterface;

trait SecurityContextAwareTrait
{
    /**
     * The security context.
     *
     * @var SecurityContextInterface
     */
    protected $securityContext;

    /**
     * {@inheritdoc}
     */
    public function setSecurityContext(SecurityContextInterface $securityContext)
    {
        $this->securityContext = $securityContext;
    }
}
