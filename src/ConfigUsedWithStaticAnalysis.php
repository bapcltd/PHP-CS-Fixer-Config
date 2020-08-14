<?php
/**
* PHP-CS-Fixer Configuration.
*
* @author SignpostMarv
*/

namespace BAPC\CS;

class ConfigUsedWithStaticAnalysis extends Config
{
	protected static function RuntimeResolveRules()
	{
		$rules = parent::RuntimeResolveRules();
		$rules['phpdoc_to_comment'] = false;

		return $rules;
	}
}
