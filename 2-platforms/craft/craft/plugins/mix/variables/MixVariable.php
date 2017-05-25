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
        // TODO: No checks concerning the file path are made.
        // It's just assumed that we are pointing to the public directory

        // Prepend public folder to path
        $path = "/public/{$file}";

        // Check if the manifest exists
        if (! file_exists($manifestPath = $_SERVER['DOCUMENT_ROOT'] . '/../mix-manifest.json')) return $this->bust($file);

        // Read the manifest
        $manifest = json_decode(file_get_contents($manifestPath), true);

        // Check if the requested file is listed in the manifest
        if (! array_key_exists($path, $manifest)) return $this->bust($file);

        // Check if the file was actually versioned
        if($manifest[$path] == $path) return $this->bust($file);

        // Remove 'public' from the output
        return str_replace('/public/', '/', $manifest[$path]);
    }

}
