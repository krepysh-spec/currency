<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__ . '/src');

$config = new Config();
return $config->setRules([
    '@PSR12' => true,
    'strict_param' => true
])
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
    ->setFinder($finder);