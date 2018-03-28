<?php declare(strict_types=1);

use PHP_CodeSniffer\Util\Tokens;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/squizlabs/php_codesniffer/autoload.php';

// required for PHP_CodeSniffer in packages/EasyCodingStandard/tests/*
if (! defined('PHP_CODESNIFFER_VERBOSITY')) {
    define('PHP_CODESNIFFER_VERBOSITY', 0);
    // initialize custom T_* token constants used by PHP_CodeSniffer parser
    new Tokens();
}

// absolute paths differ in monorepo and split packages
// e.g. /packagse/EasyCodingStandard/src (monorepo) => src (after split)
// use this to find out where you are
define('SYMPLIFY_MONOREPO', true);
