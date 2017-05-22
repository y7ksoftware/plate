<?php
namespace Craft;


class ImagerExtensionsPlugin extends BasePlugin
{

    public function init()
    {

    }

    public function getName()
    {
        return Craft::t('Imager Extensions');
    }

    public function getDescription()
    {
        return 'Generate SrcSets and store the dominant color to the asset.';
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Joris Noordermeer';
    }

    public function getDeveloperUrl()
    {
        return null;
    }


}
