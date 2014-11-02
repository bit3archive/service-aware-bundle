<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Serializer;

use Symfony\Component\Serializer\Serializer;

trait SerializerAwareTrait
{
    /**
     * The symfony serializer.
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
