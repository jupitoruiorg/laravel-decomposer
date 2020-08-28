<?php
return [
    'view' => 'decomposer::index',

    'content_section' => 'content',

    'folders_exclude' => [
        base_path() . '/bootstrap',
        base_path() . '/node_modules',
        base_path() . '/vendor',
        base_path() . '/storage',
        base_path() . '/folder/path',
    ],
];
