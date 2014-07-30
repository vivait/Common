<?php

namespace Vivait\Common\Event;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Security\Core\User\UserInterface;
use Viva\AuthBundle\Model\NullUser;

trait EntityTrait
{
    /**
     * @var object
     */
    protected $user;

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
}