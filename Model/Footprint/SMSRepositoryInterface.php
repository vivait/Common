<?php
namespace Vivait\Common\Model\Footprint;

use Doctrine\Common\Collections\ArrayCollection;
use Viva\BravoBundle\Entity\Customer;

interface SMSRepositoryInterface {
	public function getSMSContacts($entity);
	public function getSMSFromContact($entity, $contact);
}