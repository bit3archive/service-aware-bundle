<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Session;

use Symfony\Component\HttpFoundation\Session\Session;

trait SessionAwareTrait
{
    /**
     * The session.
     *
     * @var Session
     */
    protected $session;

    /**
     * {@inheritdoc}
     */
    public function setSession(Session $session)
    {
        $this->session = $session;
    }
}
