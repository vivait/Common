<?php
namespace Vivait\Common\Model\Footprint;

interface AddressRepositoryInterface
{
    public function getAddressContacts($entity);
    public function getAddressFromContact($entity, $contact);
}
