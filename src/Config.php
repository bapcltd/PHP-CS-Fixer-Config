<?php
/**
* PHP-CS-Fixer Configuration.
*
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\CS;

use PhpCsFixer\Config as BaseConfig;
use PhpCsFixer\Finder as DefaultFinder;

class Config extends BaseConfig
{
	const DEFAULT_RULES = [
		'@Symfony' => true,
		'align_multiline_comment' => false,
		'array_syntax' => [
			'syntax' => 'short',
		],
		'class_definition' => [
			'multiLineExtendsEachSingleLine' => true,
			'singleItemSingleLine' => true,
			'singleLine' => false,
		],
		'class_keyword_remove' => false,
		'combine_consecutive_unsets' => true,
		'concat_space' => [
			'spacing' => 'one',
		],
		'declare_strict_types' => true,
		'dir_constant' => true,
		'ereg_to_preg' => true,
		'function_to_constant' => true,
		'heredoc_to_nowdoc' => true,
		'include' => false,
		'is_null' => false,
		'linebreak_after_opening_tag' => true,
		'mb_str_functions' => true,
		'modernize_types_casting' => true,
		'no_alias_functions' => true,
		'no_multiline_whitespace_before_semicolons' => true,
		'no_php4_constructor' => true,
		'no_short_echo_tag' => true,
		'no_unreachable_default_argument_value' => true,
		'no_useless_else' => true,
		'no_useless_return' => true,
		'non_printable_character' => true,
		'not_operator_with_space' => true,
		'not_operator_with_successor_space' => false,
		'ordered_class_elements' => true,
		'ordered_imports' => true,
		'php_unit_construct' => true,
		'php_unit_dedicate_assert' => true,
		'php_unit_strict' => true,
		'php_unit_test_class_requires_covers' => false,
		'phpdoc_add_missing_param_annotation' => true,
		'phpdoc_indent' => false,
		'phpdoc_no_alias_tag' => [
			'type' => 'var',
			'link' => 'see',
		],
		'phpdoc_order' => true,
		'pow_to_exponentiation' => true,
		'psr0' => false,
		'psr4' => true,
		'random_api_migration' => true,
		'return_type_declaration' => [
			'space_before' => 'one',
		],
		'semicolon_after_instruction' => true,
		'silenced_deprecation_error' => false,
		'simplified_null_return' => true,
		'strict_comparison' => true,
		'strict_param' => true,
		'ternary_to_null_coalescing' => true,
	];

	public function __construct(array $inDirs)
	{
		parent::__construct(
			str_replace(
				'\\',
				' - ',
				(string) preg_replace(
					'/([a-z0-9])([A-Z])/',
					'$1 $2',
					static::class
				)
			)
		);
		$this->setRiskyAllowed(true);
		$this->setUsingCache(true);
		$this->setRules(static::RuntimeResolveRules());
		$this->setIndent("\t");
		$this->setLineEnding("\n");

		$finder = new DefaultFinder();
		$finder->ignoreUnreadableDirs();

		$faffing = [];

		foreach (
			array_reduce(
				$inDirs,
				(
					function (
						DefaultFinder $finder,
						string $directory
					) : DefaultFinder {
						if (true === is_file($directory)) {
							return $finder->append([$directory]);
						}

						return $finder->in($directory);
					}
				),
				$finder
			)->getIterator() as $finder_faff
		) {
			$faffing[] = $finder_faff;
		}

		$this->setFinder($faffing);
	}

	public static function createWithPaths(string ...$paths) : self
	{
		return new static(array_filter($paths, function (string $path) : bool {
			return is_dir($path) || is_file($path);
		}));
	}

	/**
	* Resolve rules at runtime.
	*/
	protected static function RuntimeResolveRules() : array
	{
		return (array) static::DEFAULT_RULES;
	}
}
