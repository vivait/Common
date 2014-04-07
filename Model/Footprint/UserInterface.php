<?php

namespace Vivait\Common\Model\Footprint;

interface UserInterface {
	function getId();
	function getEmail();
	function getFullname();
	function getGravatar();
}