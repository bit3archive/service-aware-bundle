<?php

namespace Bit3\Symfony\ServiceAwareBundle\JMS\SerializerBundle;

use JMS\Serializer\Serializer;

abstract class SerializerAware implements SerializerAwareInterface
{
    /**
     * The jms serializer.
     *
     * @var Serializer
     */
    protected $serializer;

    /**
     * {@inheritdoc}
     */
    public function setSerializer(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }
}
