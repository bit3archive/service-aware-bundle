<?php

namespace Bit3\Symfony\ServiceAwareBundle\PSR\Logger;

use Psr\Log\LoggerInterface;

abstract class LoggerAware implements LoggerAwareInterface
{
    /**
     * The logger.
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * {@inheritdoc}
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
