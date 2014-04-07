<?php

	namespace Vivait\Common\Model\Finance;

	use Doctrine\ORM\Mapping as ORM;
	use Symfony\Component\Form\FormBuilder;
	use Symfony\Component\Validator\Constraints as Assert;

	interface FinanceInstanceInterface {

		public function getId();
		public function buildForm(FormBuilder $form);
		public function getParameterArray();

	}
