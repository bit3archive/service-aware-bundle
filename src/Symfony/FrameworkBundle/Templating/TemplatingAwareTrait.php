<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Templating;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

trait TemplatingAwareTrait
{
    /**
     * The templating engine.
     *
     * @var EngineInterface
     */
    protected $templating;

    /**
     * {@inheritdoc}
     */
    public function setTemplating(EngineInterface $templating)
    {
        $this->templating = $templating;
    }
}
