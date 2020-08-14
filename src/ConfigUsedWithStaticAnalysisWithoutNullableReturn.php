<?php
/**
* PHP-CS-Fixer Configuration.
*
* @author SignpostMarv
*/

namespace SignpostMarv\CS;

class ConfigUsedWithStaticAnalysisWithoutNullableReturn extends Config
{
	protected static function RuntimeResolveRules()
	{
		$rules = parent::RuntimeResolveRules();
		$rules['phpdoc_to_comment'] = false;
		$rules['simplified_null_return'] = false;

		return $rules;
	}
}
