<?php

return [
    'view' => 'decomposer::index',

    'layout' => 'decomposer::layout',

    'content_section' => 'content',

    'folders_exclude' => [
        base_path('bootstrap'),
        'node_modules',
        'vendor',
        base_path('storage/debugbar'),
        base_path('storage/framework'),
        base_path('storage/logs'),
        base_path('storage/medialibrary'),
        'folder/path',
    ],
];
