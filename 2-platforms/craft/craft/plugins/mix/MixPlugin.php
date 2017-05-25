<?php

namespace Craft;

class MixPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Mix Asset Loader');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Joris Noordermeer';
	}

	public function getDeveloperUrl()
	{
		return 'https://y7k.com';
	}
}
