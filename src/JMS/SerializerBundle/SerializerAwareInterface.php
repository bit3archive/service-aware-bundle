<?php

namespace Bit3\Symfony\ServiceAwareBundle\JMS\SerializerBundle;

use JMS\Serializer\Serializer;

interface SerializerAwareInterface
{
    /**
     * Set the serializer.
     *
     * @param Serializer $serializer
     *
     * @api
     */
    public function setSerializer(Serializer $serializer);
}
