<?php

namespace Vivait\Common\Event;

use Symfony\Component\EventDispatcher\Event;
use Viva\AuthBundle\Model\NullUser;

abstract class EntityEvent extends Event {
	const EVENT_ENTITY_CREATED  = 'vivait.entity.created';
	const EVENT_ENTITY_MODIFIED = 'vivait.entity.modified';
	const EVENT_ENTITY_DELETED  = 'vivait.entity.deleted';

	/**
	 * @var object
	 */
	protected $entity;

	/**
	 * @var object
	 */
	protected $user;

	public function __construct($entity, $user = null)
	{
		$this->entity = $entity;
		$this->user   = $user ?: new NullUser();
	}

	/**
	 * @return object
	 */
	public function getEntity()
	{
		return $this->entity;
	}

	/**
	 * Gets user
	 * @return object
	 */
	public function getUser() {
		return $this->user;
	}

	public abstract function getEntityName();
} 