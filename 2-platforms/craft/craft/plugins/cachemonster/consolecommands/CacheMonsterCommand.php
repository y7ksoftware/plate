<?php
namespace Craft;

class CacheMonsterCommand extends BaseCommand
{

    /**
     * Update our url cache and force run the warming Task
     *
     */
    public function actionCrawlAndWarm()
    {

        if(!craft()->isSystemOn()) {
            echo 'System is turned off.';
            // Exit
            return craft()->end();
        }

        // Delete all the template caches!
        craft()->templateCache->deleteAllCaches();

        // Crawl the sitemap
        $paths = craft()->cacheMonster->crawlSitemapForPaths();

        // Check we have something and make warmer if we do
        if ($paths)
        {
            craft()->cacheMonster->makeTask('CacheMonster_Warm', $paths);
        }

        // Run any pending tasks
        if (!craft()->tasks->isTaskRunning())
        {
            // Is there a pending task?
            $task = craft()->tasks->getNextPendingTask();

            if ($task)
            {
                // Start running tasks
                craft()->tasks->runPendingTasks();
            }
        }

        // Exit
        craft()->end();

    }

}
