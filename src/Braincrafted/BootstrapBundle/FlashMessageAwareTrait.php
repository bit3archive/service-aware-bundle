<?php

namespace Bit3\Symfony\ServiceAwareBundle\Braincrafted\BootstrapBundle;

use Braincrafted\Bundle\BootstrapBundle\Session\FlashMessage;

trait FlashMessageAwareTrait
{
    /**
     * @var FlashMessage
     */
    protected $flashMessage;

    /**
     * {@inheritdoc}
     * 1
     */
    public function setFlashMessage(FlashMessage $flashMessage)
    {
        $this->flashMessage = $flashMessage;
    }
}
