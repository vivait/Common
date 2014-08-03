<?php
namespace Vivait\Common\Model\Footprint;

interface SMSRepositoryInterface
{
    public function getSMSContacts($entity);
    public function getSMSFromContact($entity, $contact);
}
