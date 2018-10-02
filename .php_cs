<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->files()
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@PHP70Migration' => true,
        '@PHPUnit60Migration:risky' => true,
        'binary_operator_spaces' => [
            'default' => 'align_single_space_minimal',
            'operators' => ['||' => null, '&&' => null]
        ],
        'single_quote' => false,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'dir_constant' => true,
        'no_mixed_echo_print' => ['use' => 'echo'],
        'no_unused_imports' => true,
        'declare_strict_types' => false,
        'no_superfluous_phpdoc_tags' => true,
        'return_type_declaration' => ['space_before' => 'none'],
    ])
    ->setUsingCache(true)
    ->setFinder($finder);
