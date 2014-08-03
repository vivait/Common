<?php

namespace Vivait\Common\Model\Task;

interface ContactInterface
{
    public function getId();
    public function getCustomer();
    public function getRecipient();
    public function getDetails();
}
