<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Security;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

abstract class TokenStorageAware implements TokenStorageAwareInterface
{
    /**
     * The token storage.
     *
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * {@inheritdoc}
     */
    public function setTokenStorage(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }
}
