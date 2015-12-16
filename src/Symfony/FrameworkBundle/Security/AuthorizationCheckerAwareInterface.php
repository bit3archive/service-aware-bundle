<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Security;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

interface AuthorizationCheckerAwareInterface
{
    /**
     * Set the authorization checker.
     *
     * @param AuthorizationCheckerInterface $authorizationChecker The authorization checker.
     *
     * @api
     */
    public function setAuthorizationChecker(AuthorizationCheckerInterface $authorizationChecker);
}
