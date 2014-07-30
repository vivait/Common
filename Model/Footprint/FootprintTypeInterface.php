<?php


namespace Vivait\Common\Model\Footprint;

use Vivait\Common\Model\Poly\PolymorphicInterface;
// TODO: Change me to an interface
use Vivait\FootprintBundle\Entity\Footprint;

interface FootprintTypeInterface extends \JsonSerializable {
	public function getId();
	public function getRoute();
	public function getRouteParams();

    /**
     * @param Footprint $footprint
     * @param bool      $cascade
     * @return
     */
	public function setFootprint(Footprint $footprint, $cascade = true);

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
     * Returns a unique service/form alias to be used for business logic and form generation.
     * Aliases returned here should be found in the service container
     * @return string
     */
    public function getPolyAlias();

    /**
     * Returns a label that can be used in selection dialogs
     * @return string
     */
    public function getPolyLabel();

    /**
     * Returns a short description that can be used in selection dialogs
     * @return string
     */
    public function getPolyDescription();

	public function getMergeFields();
}