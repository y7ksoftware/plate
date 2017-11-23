<?php
namespace Craft;

class EnvIndicator_FrontendController extends BaseController
{

    protected $allowAnonymous = array('actionHideNotification');

    // Public Methods
    // =========================================================================

    public function actionHideNotification()
    {
        $this->requireAjaxRequest();

        craft()->httpSession->add('hide_envindicator', true);

        $this->returnJson();
    }

}
