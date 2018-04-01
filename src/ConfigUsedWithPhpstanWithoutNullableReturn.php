<?php
/**
* PHP-CS-Fixer Configuration.
*
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\CS;

class ConfigUsedWithPhpstanWithoutNullableReturn extends Config
{
    protected static function RuntimeResolveRules() : array
    {
        $rules = parent::RuntimeResolveRules();
        $rules['phpdoc_var_without_name'] = false;
        $rules['simplified_null_return'] = false;

        return $rules;
    }
}
