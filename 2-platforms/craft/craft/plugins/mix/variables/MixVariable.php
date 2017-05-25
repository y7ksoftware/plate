<?php
namespace Craft;

class MixVariable
{

	function bust($file)
	{
        $time = (file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $file)) ? filemtime($_SERVER['DOCUMENT_ROOT'] . '/' . $file) : '';
		return '/' . $file . '?' . $time;
	}

    public function mix($file)
    {
        $path = "/public/{$file}";

        if (! file_exists($manifestPath = $_SERVER['DOCUMENT_ROOT'] . '/../mix-manifest.json')) {
            return $this->bust($file);
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (! array_key_exists($path, $manifest)) {
            return $this->bust($file);
        }

        if($manifest[$path] == $path) return $this->bust($file);

        return $manifest[$path];
    }

}
