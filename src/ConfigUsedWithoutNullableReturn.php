<?php
/**
* PHP-CS-Fixer Configuration.
*
* @author SignpostMarv
*/

namespace BAPC\CS;

class ConfigUsedWithoutNullableReturn extends Config
{
	protected static function RuntimeResolveRules()
	{
		$rules = parent::RuntimeResolveRules();
		$rules['simplified_null_return'] = false;

		return $rules;
	}
}
