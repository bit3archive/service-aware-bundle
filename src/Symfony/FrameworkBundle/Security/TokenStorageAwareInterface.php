<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Security;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

interface TokenStorageAwareInterface
{
    /**
     * Set the token storage.
     *
     * @param TokenStorageInterface $tokenStorage The token storage.
     *
     * @api
     */
    public function setTokenStorage(TokenStorageInterface $tokenStorage);
}
