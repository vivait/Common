<?php

namespace Vivait\Common\Model\Task\Contact;

use Vivait\Common\Model\Task\CustomerInterface;

interface MobileRepositoryInterface {
	function findByCustomerAndType(CustomerInterface $customer);
}