<?php

return [
    'smartypants' => true,
    'debug' => true,
    'url' => 'http://kirby-forms-repro.test/',
    'yaml.handler' => 'symfony',
    'panel' => [
        'install' => true
    ],
    'auth' => [
        'methods' => ['password', 'password-reset']
    ],    
];
