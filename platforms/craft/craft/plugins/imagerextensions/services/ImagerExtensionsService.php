<?php
namespace Craft;

class ImagerExtensionsService extends BaseApplicationComponent
{


    public function generateSrcSet($transformedImages)
    {

        $srcSet = '';

        if ($transformedImages && count($transformedImages)) {

            foreach ($transformedImages as $transformedImage) {
                $srcSet .= $transformedImage->getUrl() . ' ' . $transformedImage->getWidth() . 'w, ';
            }

            return substr($srcSet, 0, strlen($srcSet) - 2);
        }

        return $srcSet;
    }


    public function generateSrcSetForTransforms($image, $transformName)
    {

        $srcSet = '';
        if ($image) {

            $transforms = craft()->config->get($transformName, 'imageTransforms');

            foreach ($transforms as $transform) {
                $srcSet .= $image->getUrl($transform) . ' ' . $image->getWidth($transform) . 'w, ';
            }

            return substr($srcSet, 0, strlen($srcSet) - 2);
        }

        return $srcSet;
    }


    public function getDominantColorAndSaveToAsset($image)
    {

        $dominantColor = null;

        // check if image already has a
        if ($image->dominantColor) {
            $dominantColor = $image->dominantColor;
        } else {
            // calculate
            $dominantColor = craft()->imager_color->getDominantColor($image, 20, 'hex');
            // save to asset
            $image->getContent()->setAttribute('dominantColor', $dominantColor);
            craft()->assets->storeFile($image);
        }


        return $dominantColor;
    }

    public function base64Pixel($width = 1, $height = 1)
    {
        return "data:image/svg+xml;charset=utf-8," . rawurlencode("<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 $width $height'/>");
    }

}
