<?php

namespace Bit3\Symfony\ServiceAwareBundle\JMS\SerializerBundle;

use JMS\Serializer\Serializer;

trait SerializerAwareTrait
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
