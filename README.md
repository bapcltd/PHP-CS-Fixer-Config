# SignpostMarv's PHP-CS-Fixer config

[![Build Status](https://travis-ci.org/SignpostMarv/PHP-CS-Fixer-Config.svg?branch=master)](https://travis-ci.org/SignpostMarv/PHP-CS-Fixer-Config)
[![Psalm Type Coverage](https://shepherd.dev/github/SignpostMarv/PHP-CS-Fixer-Config/coverage.svg)](https://shepherd.dev/github/SignpostMarv/PHP-CS-Fixer-Config)

There's two different versions, one for general use & one for use on projects that use static analysis.

## Installation & Usage

1. `composer require --dev signpostmarv/php-cs-fixer-config`
1. create your `.php_cs` or `.php_cs.dist` file and enter the corresponding
	code for the config you wish to use

### General Use

```php
return \SignpostMarv\CS\Config::createWithPaths(...[
	__FILE__,
	(__DIR__ . '/src/'),
	(__DIR__ . '/tests/'),
])
```

#### Use without PHP 7.1 Nullable return types

```php
return \SignpostMarv\CS\ConfigUsedWithoutNullableReturn::createWithPaths(...[
	__FILE__,
	(__DIR__ . '/src/'),
	(__DIR__ . '/tests/'),
])
```

### With Static Analysis

```php
return \SignpostMarv\CS\ConfigUsedWithStaticAnalysis::createWithPaths(...[
	__FILE__,
	(__DIR__ . '/src/'),
	(__DIR__ . '/tests/'),
])
```

#### Use without PHP 7.1 Nullable return types

```php
return \SignpostMarv\CS\ConfigUsedWithStaticAnalysisWithoutNullableReturn::createWithPaths(...[
	__FILE__,
	(__DIR__ . '/src/'),
	(__DIR__ . '/tests/'),
])
```

### Customising Rules

1. Extend `SignpostMarv\CS\Config`
1. Either
	* override the `SignpostMarv\CS\Config::DEFAULT_RULES` array const
	* override the `SignpostMarv\CS\Config::RuntimeResolveRules()` static
		method as in [ConfigUsedWithStaticAnalysis](https://github.com/SignpostMarv/PHP-CS-Fixer-Config/blob/master/src/ConfigUsedWithStaticAnalysis.php)
