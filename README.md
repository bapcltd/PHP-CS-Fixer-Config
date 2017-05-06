# SignpostMarv's PHP-CS-Fixer config

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/SignpostMarv/PHP-CS-Fixer-Config/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/SignpostMarv/PHP-CS-Fixer-Config/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/SignpostMarv/psalm/badges/build.png?b=master)](https://scrutinizer-ci.com/g/SignpostMarv/psalm/build-status/master)

There's two different versions, one for general use & one for use on projects
that use [phpstan](https://github.com/phpstan/phpstan) for static analysis

## Installation & Usage

1. `composer require --dev signpostmarv/php-cs-fixer-config`
1. create your `.php_cs` or `.php_cs.dist` file and enter the corresponding
    code for the config you wish to use

### General Use

```php
return \SignpostMarv\CS\Config::createWithDirs(
    (__DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR),
    (__DIR__ . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR)
)
```

### With PHPStan

```php
return \SignpostMarv\CS\ConfigUsedWithPhpstan::createWithDirs(
    (__DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR),
    (__DIR__ . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR)
)
```

### Customising Rules

1. Extend `SignpostMarv\CS\Config`
1. Either
    * override the `SignpostMarv\CS\Config::DEFAULT_RULES` array const
    * override the `SignpostMarv\CS\Config::RuntimeResolveRules()` static
        method as in [ConfigUsedWithPhpstan](https://github.com/SignpostMarv/PHP-CS-Fixer-Config/blob/master/src/ConfigUsedWithPhpstan.php)
