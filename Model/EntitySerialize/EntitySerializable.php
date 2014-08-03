<?php

namespace Vivait\Common\Model\EntitySerialize;

interface EntitySerializable extends \JsonSerializable
{
    /**
	 * Serializes an entity with relationships from the owning side only
	 * @return array
	 * @throws CannotSerializeClassException
	 */
    public function entitySerialize();
}
