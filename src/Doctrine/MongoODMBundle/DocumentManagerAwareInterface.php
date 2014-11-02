<?php

namespace Bit3\Symfony\ServiceAwareBundle\Doctrine\MongoODMBundle;

use Doctrine\ODM\MongoDB\DocumentManager;

interface DocumentManagerAwareInterface
{
    /**
     * Set the mongodb document manager.
     *
     * @param DocumentManager $documentManager
     *
     * @api
     */
    public function setDocumentManager(DocumentManager $documentManager);
}
