<?php

namespace Craft;

class CacheMonsterCommand extends BaseCommand
{


    /**
     * Delete all template caches and make a call to the Cache Warmer
     */
    public function actionCrawlAndWarm()
    {
        $this->abortIfSystemIsOff();
        craft()->cacheMonster->clearRuntimeFolders();
        $this->abortIfTemplateCachingIsDisabled();
        craft()->templateCache->deleteAllCaches();
        $this->abortIfOnLocalEnv();
        craft()->cacheMonster->callCacheWarmer();

        return craft()->end();
    }

    /**
     * Update our url cache and force run the warming Task
     */
    public function actionPurgeCache()
    {
        $this->abortIfSystemIsOff();
        craft()->cacheMonster->clearRuntimeFolders();
        $this->abortIfTemplateCachingIsDisabled();
        craft()->templateCache->deleteAllCaches();

        return craft()->end();
    }


    private function abortIfSystemIsOff()
    {
        if (!craft()->isSystemOn()) {
            echo 'System is turned off.';
            return craft()->end();
        }
    }

    private function abortIfTemplateCachingIsDisabled()
    {
        if (!craft()->config->get('enableTemplateCaching')) {
            echo 'Template Caching is turned off. Abort.';
            return craft()->end();
        }
    }

    private function abortIfOnLocalEnv()
    {
        $hostNames = explode(".", parse_url(craft()->getSiteUrl(), PHP_URL_HOST));
        $appTld = end($hostNames);
        if (craft()->config->get('appEnv') === 'local' || $appTld === 'dev' || $appTld === 'localhost') {
            echo 'We are on localhost. Abort.';
            return craft()->end();
        }
    }

}
