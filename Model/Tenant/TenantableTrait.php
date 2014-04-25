<?php


namespace Vivait\Common\Model\Tenant;


use Doctrine\DBAL\LockMode;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\QueryBuilder;

/**
 * @mixin EntityRepository
 */
trait TenantableTrait {
	/**
	 * @param $id
	 * @param $tenant_ids
	 * @return null|object
	 * @throws \Doctrine\ORM\NonUniqueResultException
	 */
	public function findSafe($id, $tenant_ids) {
		$qb = $this->createQueryBuilder('c');

		$tenant_alias = $this->buildTenantQuery($qb, 'c');

		$qb
			->andWhere('c.id = :id')
			->andWhere($qb->expr()->in($tenant_alias .'.id', $tenant_ids))
			->setParameter('id', $id)
		;

		try {
			return $qb
				->getQuery()
				->getSingleResult()
				;
		}
		catch (NoResultException $e) {
			return null;
		}
	}

	public function buildTenantQuery(QueryBuilder $query, $table_alias) {
		$query
			// Join on the queue and the tenants
			->leftJoin($table_alias .'.queue', $table_alias .'q')
			->leftJoin($table_alias .'q.tenants', ($tenant_alias = $table_alias .'t'))
		;

		return $tenant_alias;
	}
}