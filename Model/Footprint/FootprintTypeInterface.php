<?php


namespace Vivait\Common\Model\Footprint;

use Vivait\Common\Model\Poly\PolymorphicInterface;
// TODO: Change me to an interface
use Vivait\FootprintBundle\Entity\Footprint;

interface FootprintTypeInterface extends PolymorphicInterface, \JsonSerializable {
	public function getId();
	public function getRoute();
	public function getRouteParams();

	/**
	 * @param Footprint $footprint
	 */
	public function setFootprint(Footprint $footprint);

	/**
	 * @return Footprint
	 */
	public function getFootprint();

	/**
	 * @return object
	 */
	public function getForeignEntity();

	/**
	 * @param object $entityId
	 */
	public function setForeignEntity($entityId);

	/**
	 * @return FootprintTypeInterface[]
	 */
	public static function generateAllPolyObjects();

	/**
	 * @param $poly_alias
	 * @return FootprintTypeInterface
	 */
	public static function generatePolyObject($poly_alias);

	public function getMergeFields();
}