<?php

namespace Vivait\Common\Event;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Security\Core\User\UserInterface;
use Viva\AuthBundle\Model\NullUser;

abstract class EntityEvent extends Event implements EntityEventInterface
{
    const EVENT_ENTITY_CREATED = 'vivait.entity.created';
    const EVENT_ENTITY_MODIFIED = 'vivait.entity.modified';
    const EVENT_ENTITY_DELETED = 'vivait.entity.deleted';

    /**
     * @var object
     */
    protected $entity;

    /**
     * @var object
     */
    protected $user;

    /**
     * @param array|ArrayCollection $array
     * @param UserInterface         $user
     * @return EntityEvent[]
     */
    public static function createFromArray($array, UserInterface $user)
    {
        $events = [];
        foreach ($array as $row) {
            $events[] = new static($row, $user);
        }

        return $events;
    }

    public function __construct($entity, UserInterface $user = null)
    {
        $this->entity = $entity;
        $this->user = $user ?: new NullUser();
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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Provides an associative array of event name => event label
     * for us when building an inspection
     * @return array
     */
    public static function supportsEvents()
    {
        return [
          static::EVENT_ENTITY_CREATED  => static::getEntityTypeLabel() . ' created',
          static::EVENT_ENTITY_MODIFIED => static::getEntityTypeLabel() . ' modified',
          static::EVENT_ENTITY_DELETED  => static::getEntityTypeLabel() . ' deleted',
        ];
    }
}