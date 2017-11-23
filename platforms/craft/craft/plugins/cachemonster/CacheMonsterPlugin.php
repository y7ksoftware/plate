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
        return Craft::t('Y7K Cache Monster');
    }

    public function getVersion()
    {
        return '1.0.2';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getCacheWarmerVersion()
    {
        return '0.0.2';
    }

    public function getDeveloper()
    {
        return 'Y7K';
    }

    public function getDescription()
    {
        return 'Fresh and warm cache.';
    }

    public function getDeveloperUrl()
    {
        return 'http://y7k.com';
    }

}
