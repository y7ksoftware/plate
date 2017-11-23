<?php

namespace Craft;

class EnvIndicatorPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Environment Indicator');
    }

    public function getVersion()
    {
        return '0.1.0';
    }

    public function getDeveloper()
    {
        return 'Y7K';
    }

    public function getDeveloperUrl()
    {
        return 'https://y7k.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function init()
    {
        // Do not show to google page speed
        if (isset($_SERVER['HTTP_USER_AGENT']) && stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') !== false) return false;

        $appEnv = craft()->config->get('appEnv');

        $envText = Craft::t('Local') . ' 🐐';
        switch($appEnv) {
            case 'develop':
                $envText = Craft::t('Development') . ' 🏡';
                break;
            case 'staging':
                $envText = Craft::t('Test-Environment') . ' 🍕';
                break;
            case 'production':
                $envText = Craft::t('Live') . ' 🔥';
                break;
        }

        // check we have a cp request as we don't want to this js to run anywhere but the cp
        // and while we're at it check for a logged in user as well
        if (craft()->request->isCpRequest() && in_array($appEnv, ['local', 'develop', 'staging', 'production'])) {

                craft()->templates->includeJs("window.envText = \"{$envText}\"; window.appEnv = \"{$appEnv}\";");
                craft()->templates->includeCssResource('envindicator/css/style.css');
                craft()->templates->includeJsResource("envindicator/js/cp.js");

        } elseif(craft()->request->isSiteRequest() && in_array($appEnv, ['local', 'develop', 'staging']) && !craft()->httpSession->get('hide_envindicator')) {

                craft()->templates->includeJs("window.envText = \"{$envText}\"; window.appEnv = \"{$appEnv}\";");
                craft()->templates->includeCssResource('envindicator/css/style.css');
                craft()->templates->includeJsResource("envindicator/js/front.js");

        }

    }


}
