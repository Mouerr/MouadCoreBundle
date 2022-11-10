<?php

namespace Mouad\CoreBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Mouad\CoreBundle\Entity\Region;

class CoreRegionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Region::class);
    }

    public function getTest()
    {
        return uniqid('tousfacteurs', true);
    }

}