<?php

namespace Bit3\Symfony\ServiceAwareBundle\Braincrafted\BootstrapBundle;

use Braincrafted\Bundle\BootstrapBundle\Session\FlashMessage;

interface FlashMessageAwareInterface
{
    /**
     * Set the flash message service.
     *
     * @param FlashMessage $flashMessage
     *
     * @api
     */
    public function setFlashMessage(FlashMessage $flashMessage);
}
