<?php
/**
* PHP-CS-Fixer Configuration.
*
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\CS;

class ConfigUsedWithoutNullableReturn extends Config
{
    protected static function RuntimeResolveRules() : array
    {
        $rules = parent::RuntimeResolveRules();
        $rules['simplified_null_return'] = false;

        return $rules;
    }
}
