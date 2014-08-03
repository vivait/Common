<?php

namespace Vivait\Common\Model\Tenant;

use Doctrine\ORM\QueryBuilder;

interface Tenantable
{
    public function buildTenantQuery(QueryBuilder $query, $table_alias);
}
