<?php

namespace Vivait\Common\Model\Footprint;

interface UserInterface {
	function getId();
	function getFullname();
	function getGravatar();
	function getEmail();
}