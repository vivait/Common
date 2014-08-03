<?php
namespace Vivait\Common\Model\Footprint;

interface EmailRepositoryInterface
{
    public function getEmailContacts();
    public function getEmailFromContact($entity, $contact);
}
