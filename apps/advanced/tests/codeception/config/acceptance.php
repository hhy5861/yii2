<?php
/**
 * Application configuration shared by all applications acceptance tests
 */
return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=yii2_advanced_acceptance',
        ],
    ],
];