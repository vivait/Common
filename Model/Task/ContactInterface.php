<?php

namespace Vivait\Common\Model\Task;

interface ContactInterface {
	function getId();
	function getCustomer();
	function getRecipient();
	function getDetails();
}