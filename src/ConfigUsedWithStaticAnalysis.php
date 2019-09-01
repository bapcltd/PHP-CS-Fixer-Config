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
	protected static function RuntimeResolveRules() : array
	{
		$rules = parent::RuntimeResolveRules();
		$rules['phpdoc_to_comment'] = false;

		return $rules;
	}
}
