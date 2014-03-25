<?php

namespace Vivait\Common\Model\Task;

interface UserInterface {
	function getId();
	function getTask();
	function getFullname();
	function getGravatar();
}