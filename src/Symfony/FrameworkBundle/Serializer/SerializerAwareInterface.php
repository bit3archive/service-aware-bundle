<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Serializer;

use Symfony\Component\Serializer\Serializer;

interface SerializerAwareInterface
{
    /**
     * Set the symfony serializer.
     *
     * @param Serializer $serializer The serializer object.
     *
     * @api
     */
    public function setSerializer(Serializer $serializer);
}
