<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

setlocale(LC_ALL, 'en_US.utf-8');

if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('utf-8');
}
if (function_exists('mb_substitute_character')) {
    mb_substitute_character('none');
}

if (extension_loaded('xdebug')) {
    ini_set('xdebug.collect_vars', 'on');
    ini_set('xdebug.collect_params', 4);
    ini_set('xdebug.dump_globals', 'on');
    ini_set('xdebug.show_local_vars', 'on');
    ini_set('xdebug.max_nesting_level', 100);
    ini_set('xdebug.var_display_max_depth', 4);
}
if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
    throw new \RuntimeException(
        'Unable to locate autoloader. ' .
        'Install dependencies from the project root directory to run test suite: `composer install`.'
    );
}
require __DIR__ . '/../vendor/autoload.php';

putenv('APP_ENV=testing');