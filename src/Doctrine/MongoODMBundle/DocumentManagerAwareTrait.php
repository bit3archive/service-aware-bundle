<?php

namespace Bit3\Symfony\ServiceAwareBundle\Doctrine\MongoODMBundle;

use Doctrine\ODM\MongoDB\DocumentManager;

trait DocumentManagerAwareTrait
{
    /**
     * The mongodb document manager.
     *
     * @var DocumentManager
     */
    protected $documentManager;

    /**
     * {@inheritdoc}
     */
    public function setDocumentManager(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }
}
