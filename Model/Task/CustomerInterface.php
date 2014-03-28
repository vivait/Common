<?php

namespace Vivait\Common\Model\Task;

interface CustomerInterface {
	function getId();
	function getTasks();
	function addTask(TaskInterface $tasks);
	function removeTask(TaskInterface $tasks);

	/**
	 * @return ContactInterface[]
	 */
	function getContacts();
	function getNumber();
	function getName();
	function getFullName();
}