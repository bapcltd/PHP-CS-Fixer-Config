<?php
/**
* PHP-CS-Fixer Config.
*
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\CS;

return ConfigUsedWithPhpstan::createWithDirs(
    (__DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR),
    (__DIR__ . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR)
);
