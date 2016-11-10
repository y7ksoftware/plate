<?php
namespace Craft;

class BustVariable
{
	public function er($file)
	{
        $time = (file_exists($_SERVER['DOCUMENT_ROOT'] . $file)) ? filemtime($_SERVER['DOCUMENT_ROOT'] . $file) : '';
		return $file . '?' . $time;
	}
}
