<?php

namespace Craft;

class SanctionPlugin extends BasePlugin {

	public function init()
	{
		parent::init();

		if (craft()->request->isCpRequest() && ! $this->userCanSetPermissions)
		{
			craft()->templates->includeCssResource('sanction/css/style.css');
		}
	}

	public function getName()
	{
		return Craft::t('Sanction');
	}

	public function getVersion()
	{
		return '0.9.0';
	}

	public function getDeveloper()
	{
		return 'Joshua Baker';
	}

	public function getDeveloperUrl()
	{
		return 'http://joshuabaker.com/';
	}

	public function defineSettings()
	{
		return array(
			'canSetPermissions' => array(AttributeType::Mixed, 'default' => array_keys($this->userGroupOptions)),
		);
	}

	public function prepSettings($settings)
	{
		if (is_null($settings['canSetPermissions']))
		{
			$settings['canSetPermissions'] = array();
		}

		return $settings;
	}

	public function getSettingsHtml()
	{
		return craft()->templates->render('sanction/settings', array(
			'userGroupOptions' => $this->userGroupOptions,
			'settings'  => $this->settings,
		));
	}

	public function getUserGroupOptions()
	{
		$options = array();

		foreach (craft()->userGroups->allGroups as $userGroup)
		{
			$options[$userGroup->id] = $userGroup->name;
		}

		return $options;
	}

	public function getUserCanSetPermissions()
	{
		if ($user = craft()->userSession->user)
		{
			if ($user->admin)
			{
				return true;
			}

			foreach ($user->groups as $group)
			{
				if (in_array($group->id, $this->settings->canSetPermissions))
				{
					return true;
				}
			}
		}

		return false;
	}

}
