<?php

namespace Vivait\Common\Container\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Vivait\Common\Container\ServiceEntity;

class LoaderService
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param  ServiceEntity[] $collection
     * @return mixed
     */
    public function loadServices($collection)
    {
        $services = [];

        foreach ($collection as $entity) {
            $services[] = $this->loadService($entity);
        }

        return $services;
    }

    public function loadService(ServiceEntity $entity)
    {
        return $entity->loadService($this->container);
    }
}
