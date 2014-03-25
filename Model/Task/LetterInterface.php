<?php

namespace Vivait\Common\Model\Task;

interface LetterInterface {
	function getPath();
	function getAbsolutePath();
	function getName();
	function getId();
}