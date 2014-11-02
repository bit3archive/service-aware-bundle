<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\EventDispatcher;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

abstract class EventDispatcherAware implements EventDispatcherAwareInterface
{
    /**
     * The event dispatcher.
     *
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * {@inheritdoc}
     */
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }
}
