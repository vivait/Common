<?php

namespace Vivait\Common\Model\EntitySerialize;

use Doctrine\Common\Collections\Collection;

/**
 * @mixin EntitySerializable
 */
trait EntitySerializableTrait
{
    /**
     * @param $var
     * @return string|array
     * @throws CannotSerializeClassException
     */
    protected function serializeEntity($var)
    {
        if (!is_object($var)) {
            return $var;
        } elseif ($var instanceof Collection) {
            return array_map(array($this, 'serializeEntity'), $var->toArray());
        } elseif ($var instanceof EntitySerializable) {
            return $var->entitySerialize();
        } elseif ($var instanceof \JsonSerializable) {
            return $var->jsonSerialize();
        }
        throw new CannotSerializeClassException(sprintf("Cannot serialize class '%s'", get_class($var)));
    }

    /**
	 * (PHP 5 &gt;= 5.4.0)<br/>
	 * Specify data which should be serialized to JSON
	 * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return mixed data which can be serialized by <b>json_encode</b>,
	 * which is a value of any type other than a resource.
	 */
    public function jsonSerialize()
    {
        return $this->entitySerialize();
    }
}
