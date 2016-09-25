<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Session;

use Symfony\Component\HttpFoundation\Session\Session;

interface SessionAwareInterface
{
    /**
     * Set the session.
     *
     * @param Session $session The session.
     *
     * @api
     */
    public function setSession(Session $session);
}
