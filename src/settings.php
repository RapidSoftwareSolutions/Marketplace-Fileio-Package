<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        'api_url' => 'https://file.io/',
        'uploadServiceUrl' => 'http://104.198.149.144:8080',
        'fileExtensions' => ['wav' => '.wav', 'html' => '.html', 'md' => '.md', 'jpeg' => '.jpeg', 'bmp'=> '.bmp'],
    ],
];
