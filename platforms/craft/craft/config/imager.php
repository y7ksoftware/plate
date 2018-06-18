<?php

/**
 * Imager by André Elvan
 *
 * @author      André Elvan <http://vaersaagod.no>
 * @package     Imager
 * @copyright   Copyright (c) 2016, André Elvan
 * @license     http://opensource.org/licenses/mit-license.php MIT License
 * @link        https://github.com/aelvan/Imager-Craft
 */


/**
 * Configuration file for Imager
 *
 * Override this by placing a file named 'imager.php' inside your config folder and override variables as needed.
 * Multi-environment settings work in this file the same way as in general.php or db.php
 */

return array(
    'imagerSystemPath' => $_SERVER['DOCUMENT_ROOT'] . '/imager/',
    'imagerUrl' => '/imager/',
    'jpegQuality' => 85,

    'pngCompressionLevel' => 2, // Set to 0 if optimisation is enabled

    'allowUpscale' => false,
    'cacheEnabled' => true,
    'cacheDuration' => 1209600, // 14 days

    /* ---- Image Optimisations --- */

    // Use either jpegoptim OR mozjpeg. The dependencies must be installed via the Forge Recipe
    'optipngEnabled' => false,
    'jpegoptimEnabled' => false,
    'mozjpegEnabled' => false,

    'webpQuality' => 80,

    'optimizeType' => 'task',
);
