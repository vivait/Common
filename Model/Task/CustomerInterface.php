<?php

namespace Vivait\Common\Model\Task;

interface CustomerInterface
{
    public function getId();
    public function getTasks();
    public function addTask(TaskInterface $tasks);
    public function removeTask(TaskInterface $tasks);

    /**
	 * @return ContactInterface[]
	 */
    public function getContacts();
    public function getNumber();
    public function getName();
    public function getFullName();
}
