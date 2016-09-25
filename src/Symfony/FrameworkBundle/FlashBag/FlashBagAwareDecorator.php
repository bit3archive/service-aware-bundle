<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\FlashBag;

use Symfony\Component\HttpFoundation\Session\Session;

class FlashBagAwareDecorator
{
    public static function decorate(FlashBagAwareInterface $service, Session $session)
    {
        $service->setFlashBag($session->getFlashBag());
        return $service;
    }
}
