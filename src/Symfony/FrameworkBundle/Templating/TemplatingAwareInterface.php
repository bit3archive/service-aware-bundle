<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Templating;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

interface TemplatingAwareInterface
{
    /**
     * Set the templating engine.
     *
     * @param EngineInterface $templating The templating engine.
     *
     * @api
     */
    public function setTemplating(EngineInterface $templating);
}
