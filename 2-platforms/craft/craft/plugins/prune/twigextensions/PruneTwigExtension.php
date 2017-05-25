<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class PruneTwigExtension extends \Twig_Extension
{

	/**
	 * Get name of the Twig extension
	 *
	 * @return string
	 */
	public function getName()
    {
        return 'Prune';
    }

	/**
	 * Get a list of the Twig filters this extension is providing
	 *
	 * @return array
	 */
	public function getFilters()
    {
        return array(
            'prune' => new Twig_Filter_Method($this, 'prune'),
        );
    }

	/**
	 * Convert a BaseModel into an array with the specified fields
	 *
	 * @param array  $input  The content being filtered
	 * @param array  $fields An array of the fields to keep
	 * @return array
	 * @throws Exception
	 */
	public function prune(array $input, array $fields)
    {
		if ( ! is_array($fields)) {
			throw new Exception(Craft::t('Map parameter needs to be an array.'));
		}

		if ( ! is_array($input)) {
			throw new Exception(Craft::t('Content passed is not an array.'));
		}


		$output = array();

		foreach ($input as $element) {
			if ( ! ($element instanceof BaseModel)) {
				continue;
			}

			$output[] = $this->returnPrunedArray($element, $fields);
		}

		return $output;
	}

	/**
	 * Given a BaseModel, return an array with only requested fields
	 *
	 * @param BaseModel $item
	 * @return array
	 */
	protected function returnPrunedArray(BaseModel $item, array $fields)
	{

		$new_item = array();

		foreach ($fields as $key) {

            if(strpos($key, '.') !== false) {
                $subFields = explode('.', $key);
                $key = array_shift($subFields);
                $subFields = [implode('.', $subFields)];
            }

			if (isset($item->{$key})) {

                if(is_object($item->{$key}) && is_a($item->{$key}, 'Craft\ElementCriteriaModel')) {
                    $children = $item->{$key}->find();
                    $prunedChildren = [];
                    foreach ($children as $child) {
                        array_push($prunedChildren, $this->returnPrunedArray($child, $subFields));
                    }

                    if(array_key_exists($key, $new_item)) {
                        $new_item[$key] = array_merge_recursive($new_item[$key], $prunedChildren);
                    } else {
                        $new_item[$key] = $prunedChildren;
                    }
                }
				else {
					$new_item[$key] = $item->{$key};
				}
			}
		}

		return $new_item;
	}
}
