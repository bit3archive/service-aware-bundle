<?php

namespace Bit3\Symfony\ServiceAwareBundle\Braincrafted\BootstrapBundle;

use Braincrafted\Bundle\BootstrapBundle\Session\FlashMessage;

abstract class FlashMessageAware implements FlashMessageAwareInterface
{
    /**
     * @var FlashMessage
     */
    protected $flashMessage;

    /**
     * {@inheritdoc}
     */
    public function setFlashMessage(FlashMessage $flashMessage)
    {
        $this->flashMessage = $flashMessage;
    }
}
