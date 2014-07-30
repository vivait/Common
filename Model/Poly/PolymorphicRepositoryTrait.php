<?php

namespace Vivait\Common\Model\Poly;

use Doctrine\ORM\EntityRepository;
use Vivait\Common\Exception\Poly\PolymorphicTypeException;

/**
 * @mixin EntityRepository
 * @mixin PolymorphicRepositoryInterface
 */
trait PolymorphicRepositoryTrait
{
    /**
     * @param $poly_alias
     * @throws PolymorphicTypeException
     */
    public function generatePolyObject($poly_alias)
    {
        foreach ($this->generateAllPolyObjects() as $obj) {
            if ($obj->getPolyAlias() == $poly_alias) {
                return $obj;
            }
        }

        throw new PolymorphicTypeException(sprintf('Unknown polymorphic type "%s"', $poly_alias));
    }

    /**
     * @return static[]
     */
    public function generateAllPolyObjects()
    {
        return array_map(
          function ($class) {
              return new $class;
          },
          $this->getClassMetadata()->subClasses
        );
    }
}
