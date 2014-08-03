<?php

namespace Vivait\Common\Model\Task;

interface AddressRepositoryInterface
{
    public function findByCustomer(CustomerInterface $customer);
}
