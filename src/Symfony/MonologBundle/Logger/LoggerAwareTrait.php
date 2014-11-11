<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\MonologBundle\Logger;

use Monolog\Logger;

trait LoggerAwareTrait
{
    /**
     * The logger.
     *
     * @var Logger
     */
    protected $logger;

    /**
     * {@inheritdoc}
     */
    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }
}
