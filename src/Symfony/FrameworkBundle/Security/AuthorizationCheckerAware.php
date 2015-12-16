<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Security;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

abstract class AuthorizationCheckerAwareTrait implements AuthorizationCheckerAwareInterface
{
    /**
     * The authorization checker.
     *
     * @var AuthorizationCheckerInterface
     */
    protected $authorizationChecker;

    /**
     * {@inheritdoc}
     */
    public function setAuthorizationChecker(AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->authorizationChecker = $authorizationChecker;
    }
}
