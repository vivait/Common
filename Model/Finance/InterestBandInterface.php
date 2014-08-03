<?php

    namespace Vivait\Common\Model\Finance;

    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints as Assert;

    /**
	 * InterestBandInterface
	 * @ORM\Table()
	 * @ORM\Entity
	 */
    interface InterestBandInterface
    {
        public function getId();
        public function setFrombalance($frombalance);
        public function getFrombalance();
        public function setTobalance($tobalance);
        public function getTobalance();
        public function setRate($rate);
        public function getRate();
        public function setProduct(FinanceProductInterface $product);
        public function getProduct();

    }
