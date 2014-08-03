<?php

namespace Vivait\Common\Model\Task\Contact;

use Vivait\Common\Model\Task\CustomerInterface;

interface ContactRepositoryInterface
{
    public function getContactMobiles(CustomerInterface $customer);
}
