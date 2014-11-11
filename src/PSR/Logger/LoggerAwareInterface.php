<?php

namespace Bit3\Symfony\ServiceAwareBundle\PSR\Logger;

use Psr\Log\LoggerInterface;

interface LoggerAwareInterface
{
    /**
     * Set the logger.
     *
     * @param LoggerInterface $logger The logger.
     *
     * @api
     */
    public function setLogger(LoggerInterface $logger);
}
