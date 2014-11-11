<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\MonologBundle\Logger;

use Monolog\Logger;

interface LoggerAwareInterface
{
    /**
     * Set the logger.
     *
     * @param Logger $logger The logger.
     *
     * @api
     */
    public function setLogger(Logger $logger);
}
