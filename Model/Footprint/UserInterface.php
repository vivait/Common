<?php

namespace Vivait\Common\Model\Footprint;

interface UserInterface
{
    public function getId();
    public function getEmail();
    public function getFullname();
    public function getGravatar();
  public function getAllowedTenants();
    public function getCurrentTenant();
    public function __toString();
}
