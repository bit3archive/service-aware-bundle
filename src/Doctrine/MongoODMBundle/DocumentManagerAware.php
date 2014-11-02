<?php

namespace Bit3\Symfony\ServiceAwareBundle\Doctrine\MongoODMBundle;

use Doctrine\ODM\MongoDB\DocumentManager;

abstract class DocumentManagerAware implements DocumentManagerAwareInterface
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
