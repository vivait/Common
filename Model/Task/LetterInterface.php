<?php

namespace Vivait\Common\Model\Task;

interface LetterInterface {
	function getPath();
	function getAbsolutePath();
	function getFilename();
	function getName();
	function getId();
    function isEnabled();
    function getCopies();
    function getFullName();
    function getPriority();
}