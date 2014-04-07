<?php

namespace Vivait\Common\Model\Task;

interface UserInterface {
	function getId();
	function getFullname();
	function getGravatar();
	function getEmail();
}