<?php

namespace Craft;


/**
 * CacheMonster
 */

class CacheMonsterService extends BaseApplicationComponent
{

    /**
     * Gets the sitemap then caches and returns an array of the paths found in it
     *
     * @method crawlSitemapForPaths
     * @return array               an array of $paths
     */
    public function crawlSitemapForPaths($sitemapUrl = 'sitemap.xml')
    {

        // This might be heavy, probably not but better safe than sorry
        craft()->config->maxPowerCaptain();

        $paths = [];

        // Get the (one day specified) sitemap
        $client = new \Guzzle\Http\Client();
        $response = $client->get(UrlHelper::getSiteUrl($sitemapUrl))->send();

        // Get the xml and add each url to the $paths array
        if ($response->isSuccessful()) {
            $xml = $response->xml();

            // Load Paths of Dynamic Sitemaps
            foreach ($xml->sitemap as $sitemap) {
                $url = parse_url((string)$sitemap->loc)['path'];
                $paths = array_merge($paths, $this->crawlSitemapForPaths($url));
            }

            foreach ($xml->url as $url) {
                $parts = parse_url((string)$url->loc);
                $paths[] = 'site:' . ltrim($parts['path'], '/');
            }
        }

        // Check $paths is unique
        $paths = array_unique($paths);

        // Return the actual paths
        return $paths;
    }


    /**
     * Regusters a Task with Craft, taking into account if there
     * is already one pending
     *
     * @method makeTask
     * @param  string $taskName the name of the Task you want to register
     * @param  array $paths an array of paths that should go in that Tasks settings
     */
    public function makeTask($taskName, $paths)
    {

        // If there are any pending tasks, just append the paths to it
        $task = craft()->tasks->getNextPendingTask($taskName);

        if ($task && is_array($task->settings)) {
            $settings = $task->settings;

            if (!is_array($settings['paths'])) {
                $settings['paths'] = array($settings['paths']);
            }

            if (is_array($paths)) {
                $settings['paths'] = array_merge($settings['paths'], $paths);
            } else {
                $settings['paths'][] = $paths;
            }

            // Make sure there aren't any duplicate paths
            $settings['paths'] = array_unique($settings['paths']);

            // Set the new settings and save the task
            $task->settings = $settings;
            craft()->tasks->saveTask($task, false);
        } else {
            craft()->tasks->createTask($taskName, null, array(
                'paths' => $paths
            ));
        }

    }

}
