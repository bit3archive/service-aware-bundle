<?php

namespace Bit3\Symfony\ServiceAwareBundle\Doctrine\DoctrineBundle;

use Doctrine\ORM\EntityManager;

abstract class EntityManagerAwareTrait implements EntityManagerAwareInterface
{
    /**
     * The doctrine entity manager.
     *
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * {@inheritdoc}
     */
    public function setEntityManager(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
}
