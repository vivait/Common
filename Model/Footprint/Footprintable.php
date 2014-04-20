<?php


namespace Vivait\Common\Model\Footprint;


interface Footprintable {
	public function getFootprintType();
	public function getFootprintEntity();
	public function getEntityName();
	public function getUser();
}