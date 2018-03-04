<?php
namespace Developer2010;

use Doctrine\ORM\EntityManagerInterface;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class App
{
    private $entityManager;

    public function setEntityManager(EntityManagerInterface $entityManager) : void
    {
        $this->entityManager = $entityManager;
    }

    public function getEntityManager() : EntityManagerInterface
    {
        return $this->entityManager;
    }
}