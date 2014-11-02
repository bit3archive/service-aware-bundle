<?php

namespace Bit3\Symfony\ServiceAwareBundle\Doctrine\DoctrineBundle;

use Doctrine\ORM\EntityManager;

interface EntityManagerAwareInterface
{
    /**
     * Set the doctrine entity manager.
     *
     * @param EntityManager $entityManager The entity manager.
     *
     * @api
     */
    public function setEntityManager(EntityManager $entityManager);
}
