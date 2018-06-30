<?php
error_reporting( E_ALL );
ini_set('display_errors', 'On');
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        'db' => [
                    'host' => '192.168.100.78',
                    'user' => 'janak',
                    'pass' => 'root',
                    'dbname' => 'reporting',
                ],

        // Renderer settings
        'view' => [
            'template_path' => __DIR__ . '/../templates'
        ],
        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
