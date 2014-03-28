<?php

namespace Vivait\Common\Event;

use Symfony\Component\EventDispatcher\Event;

abstract class EntityEvent extends Event {
	const EVENT_ENTITY_CREATED  = 'vivait.entity.created';
	const EVENT_ENTITY_MODIFIED = 'vivait.entity.modified';
	const EVENT_ENTITY_DELETED  = 'vivait.entity.deleted';

	/**
	 * @var object
	 */
	protected $entity;

	/**
	 * @var bool
	 */
	protected $is_new = false;

	public function __construct($entity, $is_new = false)
	{
		$this->entity = $entity;
		$this->is_new = $is_new;
	}

	/**
	 * @return object
	 */
	public function getEntity()
	{
		return $this->entity;
	}

	public abstract function getEntityName();

	/**
	 * Is the entity new?
	 * @return boolean
	 */
	public function isNew() {
		return $this->is_new;
	}
} 