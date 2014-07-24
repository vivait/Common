<?php
namespace Vivait\Common\Model\Footprint;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Expr\Composite;
use Doctrine\ORM\QueryBuilder;
use Viva\BravoBundle\Entity\Customer;

interface FootprintTypeRepositoryInterface
{
    /**
     * @param integer $id
     * @throws \InvalidArgumentException
     * @return Customer
     */
    public function loadForeignEntity($id);

    /**
     * @param array        $foreignIds    A nested array containing a map of footprint types and their foreign ids: footprint_type => [foreign_ids]
     * @return array
     */
    public function getByForeignIds(
      array $foreignIds
    );
}