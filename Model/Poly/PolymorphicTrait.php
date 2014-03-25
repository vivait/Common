<?php

namespace Vivait\Common\Model\Poly;

use Vivait\Common\Exception\Poly\PolymorphicTypeException;

/**
 * Class PolymorphicTrait
 * @mixin PolymorphicInterface
 * @package Vivait\BootstrapBundle\Model
 */
trait PolymorphicTrait {
	/**
	 * @inheritDoc
	 */
	public static function generatePolyObject($poly_alias) {
		foreach (self::generateAllPolyObjects() as $obj) {
			if ($obj->getPolyAlias() == $poly_alias) {
				return $obj;
			}
		}

		throw new PolymorphicTypeException(sprintf('Unknown polymorphic type "%s"', $poly_alias));
	}
}
