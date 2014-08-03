<?php

namespace Vivait\Common\Model\Poly;

interface PolymorphicRepositoryInterface
{
    public function generatePolyObject($alias);
    public function generateAllPolyObjects();
}
