<?php


namespace Vivait\Common\Model\EntitySerialize;

use Doctrine\Common\Collections\Collection;

/**
 * @mixin EntitySerializable
 */
trait EntitySerializableTrait {
	protected function serializeEntity($var) {
		if (!is_object($var)) {
			return $var;
		}
		else if ($var instanceOf Collection) {
			return array_map(array($this, 'serializeEntity'), $var->toArray());
		}
		else if ($var instanceOf EntitySerializable) {
			return $var->entitySerialize();
		}
		else if ($var instanceOf \JsonSerializable) {
			return $var->jsonSerialize();
		}
		else {
			throw new CannotSerializeClassException();
		}
	}

	/**
	 * (PHP 5 &gt;= 5.4.0)<br/>
	 * Specify data which should be serialized to JSON
	 * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return mixed data which can be serialized by <b>json_encode</b>,
	 * which is a value of any type other than a resource.
	 */
	public function jsonSerialize() {
		return $this->entitySerialize();
	}
}