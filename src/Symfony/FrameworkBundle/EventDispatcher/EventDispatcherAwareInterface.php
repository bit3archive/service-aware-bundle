<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\EventDispatcher;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

interface EventDispatcherAwareInterface
{
    /**
     * Set the event dispatcher.
     *
     * @param EventDispatcherInterface $eventDispatcher The event dispatcher.
     *
     * @api
     */
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher);
}
