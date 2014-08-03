<?php

namespace Vivait\Common\Model\Task;

interface UserInterface
{
    public function getId();
    public function getFullname();
    public function getGravatar();
    public function getEmail();
}
