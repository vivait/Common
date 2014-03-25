<?php

namespace Vivait\Common\Model\Task;

interface AddressRepositoryInterface {
	function findByCustomer(CustomerInterface $customer);
}