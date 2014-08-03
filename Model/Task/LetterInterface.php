<?php

namespace Vivait\Common\Model\Task;

interface LetterInterface
{
    public function getPath();
    public function getAbsolutePath();
    public function getFilename();
    public function getName();
    public function getId();
    public function isEnabled();
    public function getCopies();
    public function getFullName();
    public function getPriority();
}
