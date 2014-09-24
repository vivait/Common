<?php

namespace Vivait\Common\User;

interface UserCallableInterface
{
	/**
	 * @return \Symfony\Component\Security\Core\User\UserInterface
	 */
	public function getCurrentUser();
}