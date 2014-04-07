<?php

	namespace Vivait\Common\Model\Finance;

	use Doctrine\ORM\Mapping as ORM;
	use Symfony\Component\Validator\Constraints as Assert;

	/**
	 * BankAccountInterface
	 * @ORM\Table()
	 * @ORM\Entity
	 */
	interface BankAccountInterface {

		public function getSortcode();
		public function getAccount();
		public function getReference();
		public function getIBAN();
		public function getParameterArray();


	}