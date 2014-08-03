<?php

namespace Vivait\Common\Model\Task\Contact;

use Vivait\Common\Model\Task\CustomerInterface;

abstract class MobileRepositoryAbstract
{
    public function findByCustomerAndType(CustomerInterface $customer)
    {
        return $this->createQueryBuilder('c')
            ->where('c.customer = :m')
            ->andWhere('c INSTANCE OF Vivait\Common\Model\Task\Contact\MobileInterface')
            ->setParameter('m', $customer);
    }
}
