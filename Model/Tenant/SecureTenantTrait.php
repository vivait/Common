<?php


namespace Vivait\Common\Model\Tenant;


use Doctrine\DBAL\LockMode;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

/**
 * @mixin EntityRepository
 */
trait SecureTenantTrait {
	public function find($id, $lockMode = LockMode::NONE, $lockVersion = null) {
		trigger_error('Attempting to use find on a tenanted repository, this is unsafe', E_USER_WARNING);
		return parent::find($id, $lockMode, $lockVersion);
	}

	public function findAll() {
		trigger_error('Attempting to use findAll on a tenanted repository, this is unsafe', E_USER_WARNING);
		return parent::findAll();
	}

	public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null) {
		trigger_error('Attempting to use findBy on a tenanted repository, this is unsafe', E_USER_WARNING);
		return parent::findBy($criteria, $orderBy, $limit, $offset);
	}

	public function findOneBy(array $criteria, array $orderBy = null) {
		trigger_error('Attempting to use findOneBy on a tenanted repository, this is unsafe', E_USER_WARNING);
		return parent::findOneBy($criteria, $orderBy);
	}

	/**
	 * @param $id
	 * @param $tenant_ids
	 * @return bool|mixed
	 * @throws \Doctrine\ORM\NonUniqueResultException
	 */
	public function findSafe($id, $tenant_ids) {
		$qb = $this->createQueryBuilder('c');

		$tenant_alias = $this->buildTenantQuery($qb, 'c');

		$qb
			->andWhere('c.id = :id')
			->andWhere($qb->expr()->in($tenant_alias .'t.id', $tenant_ids))
			->setParameter('id', $id)
		;

		try {
			return $qb
				->getQuery()
				->getSingleResult()
				;
		}
		catch (NoResultException $e) {
			return false;
		}
	}
}