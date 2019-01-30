<?php

/**
 * Configuration file for Imager by André Elvan
 *
 * @author      André Elvan <http://vaersaagod.no>
 * @package     Imager
 * @copyright   Copyright (c) 2016, André Elvan
 * @license     http://opensource.org/licenses/mit-license.php MIT License
 * @link        https://github.com/aelvan/Imager-Craft
 */

return [
    /*
     * System Path and urls
     */
    'imagerSystemPath' => '@webroot/imager/',
    'imagerUrl' => '@web/imager/',

    /*
     * Image Cache
     */
    'cacheEnabled' => true,
    'cacheDuration' => 1209600, // 14 days

    /*
     * Automatically fill a transform array with additional transforms based on fillAttribute ["width"] and fillInterval [200]
     */
    'fillTransforms' => false,

    /*
     * Disable Image upscaling
     */
    'allowUpscale' => false,

    /*
     * Default: 2
     * Defines the PNG compression level. PNG compression is always lossless, so this setting doesn't have any
     * effect on quality. It only affects speed and filesize. A lower value means faster compression, but bigger
     * filesizes. A value of 0 means "no compression", which is the preferred setting if you're doing any post
     * optimizations of png images (with Optipng or TinyPNG).
     */
    'pngCompressionLevel' => 2,

    /*
     * Default jpg Quality
     */
    'jpegQuality' => 85,

    /* --------- Image Optimisations --------- */

    /*
     * Optimise images via craft job
     */
    'optimizeType' => 'job',

    /*
     * Enabled Optimisers: Need to be installed on Server
     */
    'optimizers' => [
        'mozjpeg',
        'optipng',
        'gifsicle'
    ]

];
