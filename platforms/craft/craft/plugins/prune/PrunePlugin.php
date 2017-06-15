<?php
namespace Craft;

class PrunePlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Prune (Y7K Fork)');
    }

    public function getVersion()
    {
        return '0.2.0';
    }

    public function getSchemaVersion()
    {
        return '0.1.0';
    }

    public function getDeveloper()
    {
        return 'ninetwelve (Matt Stauffer) and Y7K (Robert Krieg)';
    }

    public function getDescription()
    {
        return 'Y7K Fork allows prune of nested, related entries';
    }

    public function getDeveloperUrl()
    {
        return 'http://ninetwelve.co/';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.prune.twigextensions.PruneTwigExtension');

        return new PruneTwigExtension();
    }
}
