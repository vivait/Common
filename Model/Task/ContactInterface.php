<?php

namespace Vivait\Common\Model\Task;

interface ContactInterface {
	const RECIPIENT_OWN = 11;

	function getId();
	function getCustomer();
	function getRecipient();
	function getDetails();

	function isPreferredEmail();
	function isPreferredCall();
	function isPreferredText();
}