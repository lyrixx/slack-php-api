<?php

$directory = __DIR__ . '/generated/';

if (!empty($_SERVER['CI_TEST'])) {
    $directory = __DIR__ . '/generated_ci/';
}

return [
    'openapi-file' => __DIR__ . '/resources/slack-openapi-patched.json',
    'namespace' => 'JoliCode\Slack\Api',
    'directory' => $directory,
    'reference' => true,
    'strict' => false,
    'client' => 'psr18',
    'use-fixer' => false,
];
