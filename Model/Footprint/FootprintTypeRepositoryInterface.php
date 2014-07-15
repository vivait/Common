<?php
namespace Vivait\Common\Model\Footprint;

use Doctrine\Common\Collections\ArrayCollection;
use Viva\BravoBundle\Entity\Customer;

interface FootprintTypeRepositoryInterface {
	/**
	 * @param integer $id
	 * @throws \InvalidArgumentException
	 * @return Customer
	 */
	public function loadForeignEntity($id);

	public function getByForeignId($entity_id);

    /**
     * @param $entity_ids
     * @param $since
     * @param UserInterface $user
     * @return ArrayCollection|FootprintTypeInterface[]
     */
	public function getByForeignIds($entity_ids, $since = null, UserInterface $user = null);
}