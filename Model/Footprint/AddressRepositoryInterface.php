<?php
namespace Vivait\Common\Model\Footprint;

use Doctrine\Common\Collections\ArrayCollection;
use Viva\BravoBundle\Entity\Customer;

interface AddressRepositoryInterface {
	public function getAddressContacts($entity);
	public function getAddressFromContact($entity, $contact);
}