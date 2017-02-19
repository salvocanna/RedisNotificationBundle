<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(array(__DIR__));

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers(array(
        'combine_consecutive_unsets',
        'header_comment',
        'long_array_syntax',
        'newline_after_open_tag',
        'no_php4_constructor',
        'no_useless_else',
        'ordered_class_elements',
        'ordered_use',
        'php_unit_construct',
        'php_unit_strict',
        '-phpdoc_no_empty_return',
    ))
    ->setUsingCache(true)
    ->finder($finder);