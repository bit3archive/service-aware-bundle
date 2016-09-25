<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Session;

use Symfony\Component\HttpFoundation\Session\Session;

abstract class SessionAware implements SessionAwareInterface
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
