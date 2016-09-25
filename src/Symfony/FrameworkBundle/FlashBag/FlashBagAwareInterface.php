<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\FlashBag;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

interface FlashBagAwareInterface
{
    /**
     * Set the flash bag.
     *
     * @param FlashBagInterface $flashBag The flash bag.
     *
     * @api
     */
    public function setFlashBag(FlashBagInterface $flashBag);
}
