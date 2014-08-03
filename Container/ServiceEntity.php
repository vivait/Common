<?php
namespace Vivait\Common\Container;

use Symfony\Component\DependencyInjection\ContainerInterface;

interface ServiceEntity
{
    /**
     * @param  ContainerInterface $container
     * @return object
     */
    public function loadService(ContainerInterface $container);
}
