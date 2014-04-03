<?php

namespace Vivait\Common\Model\Task\Contact;

use Vivait\Common\Model\Task\CustomerInterface;

interface ContactRepositoryInterface {
	function getContactMobiles(CustomerInterface $customer);
}