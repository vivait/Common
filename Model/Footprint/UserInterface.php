<?php

namespace Vivait\Common\Model\Footprint;

interface UserInterface {
	function getId();
	function getEmail();
	function getFullname();
	function getGravatar();
  function getAllowedTenants();
    public function getCurrentTenant();
    public function __toString();
}