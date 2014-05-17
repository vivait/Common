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

	public function getContacts($entity);
	public function getMobileContacts($entity);
	public function getEmailContacts($entity);
	public function getAddressContacts($entity);

	public function getEmailFromContact($entity, $contact);
	public function getMobileFromContact($entity, $contact);
	public function getAddressFromContact($entity, $contact);

	public function getByForeignId($entity_id);

    /**
     * @param $entity_ids
     * @param $since
     * @param UserInterface $user
     * @return ArrayCollection|FootprintTypeInterface[]
     */
	public function getByForeignIds($entity_ids, $since = null, UserInterface $user = null);
}