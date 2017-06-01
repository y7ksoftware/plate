<?php
namespace Craft;

return [
	'endpoints' => [
		'news.json' => [
			'elementType' => 'Entry',
			'criteria' => ['section' => 'news'],
			'transformer' => function(EntryModel $entry) {
				return [
					'title' => $entry->title,
					'url' => $entry->url,
					'jsonUrl' => UrlHelper::getUrl("news/{$entry->id}.json")
				];
			},
		],
	]
];
