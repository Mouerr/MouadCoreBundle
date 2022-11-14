<?php

declare(strict_types=1);

namespace Mouad\CoreBundle\Service;

use Mouad\CoreBundle\Entity\Region as RegionEntity;
use Mouad\CoreBundle\Repository\CoreRegionRepository;

/**
 * This service will manage everything about Regions.
 */
class Region
{
    private CoreRegionRepository $repository;

    public function __construct(CoreRegionRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all regions.
     *
     * @return RegionEntity[]
     */
    public function retrieveAllRegions(): array
    {
        return $this->repository->findAll();
    }
}