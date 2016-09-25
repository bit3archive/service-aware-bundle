<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\FlashBag;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

trait FlashBagAwareTrait
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
