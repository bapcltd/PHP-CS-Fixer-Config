<?php
/**
* PHP-CS-Fixer Configuration.
*
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\CS;

class ConfigUsedWithStaticAnalysis extends Config
{
	/**
	* @psalm-suppress UnusedMethod
	*/
	protected static function RuntimeResolveRules() : array
	{
		$rules = parent::RuntimeResolveRules();
		$rules['phpdoc_to_comment'] = false;

		return $rules;
	}
}
