<?php
namespace Vivait\Common\Model\Footprint;

use Doctrine\Common\Collections\ArrayCollection;
use Viva\BravoBundle\Entity\Customer;

interface EmailRepositoryInterface {
	public function getEmailContacts($entity);
	public function getEmailFromContact($entity, $contact);
}