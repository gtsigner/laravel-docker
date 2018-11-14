<?php

return [
    'namespaces' => explode(',', env('APOLLO_NAMESPACES', 'application')),
    'cluster' => env('APOLLO_CLUSTER', 'default'),
    'save_dir' => realpath(storage_path('apollo')),
    'config_server' => env('APOLLO_CONFIG_SERVER', 'http://127.0.0.1:8090'),
    'app_id' => env('APOLLO_APP_ID'),
    'timeout_interval' => 70
];