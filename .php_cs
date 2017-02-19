<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in([__DIR__]);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers([
        'short_array_syntax',
        '-empty_return',
        'combine_consecutive_unsets',
        'line_after_namespace',
        'no_unused_imports',
        'no_php4_constructor',
        'no_blank_lines_after_phpdoc',
        'no_useless_else',
        'no_closing_tag',
        '-blank_line_after_opening_tag',
    ])
    ->setUsingCache(true)
    ->finder($finder);
