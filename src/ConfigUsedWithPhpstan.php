<?php
/**
* PHP-CS-Fixer Configuration.
*
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\CS;

class ConfigUsedWithPhpstan extends Config
{
    /**
    * {@inheritdoc}
    */
    protected static function RuntimeResolveRules() : array
    {
        $rules = parent::RuntimeResolveRules();
        $rules['phpdoc_var_without_name'] = false;

        return $rules;
    }
}
