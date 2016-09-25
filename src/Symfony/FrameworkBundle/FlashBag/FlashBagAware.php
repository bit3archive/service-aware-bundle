<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\FlashBag;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

abstract class FlashBagAware implements FlashBagAwareInterface
{
    /**
     * The flash bag.
     *
     * @var FlashBagInterface
     */
    protected $flashBag;

    /**
     * {@inheritdoc}
     */
    public function setFlashBag(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }
}
