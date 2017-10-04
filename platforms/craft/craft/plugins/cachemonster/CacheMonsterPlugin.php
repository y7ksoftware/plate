<?php

namespace Craft;

/**
 * CacheMonster
 */

class CacheMonsterPlugin extends BasePlugin
{

    // Public Methods
    // =========================================================================

    public function getName()
    {
        return Craft::t('CacheMonster');
    }

    public function getVersion()
    {
        return '1.1.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Y7K';
    }

    public function getDescription()
    {
        return 'Y7K Fork replaces the crawlandwarm command with a console command';
    }

    public function getDeveloperUrl()
    {
        return 'http://y7k.com';
    }

}
