<?php

return [
    'Overview' => [
        //'url' => 'docs/getting-started',
        'children' => [
            'About FlowCMS' => 'docs/getting-started',
            'Features' => 'docs/getting-started#features',
        ],
    ],
    'Installation' => [
        //'url' => 'docs/installation',
        'children' => [
            'Require the Package' => 'docs/installation',
            'Add Credentials' => 'docs/installation#add-credentials',
            'Run The Installer' => 'docs/installation/#run-the-installer',
            'Logging in to the Panel' => 'docs/installation/#logging-in',
        ],
    ],
    'Configuration' => [
       // 'url' => 'docs/configuration',
        'children' => [
            'Site Settings' => 'docs/configuration',
            'Menu Settings' => 'docs/configuration/#menu-settings'
        ]
    ],
    'How it works' => [
        'children' => [
            'Page' => 'docs/page',
            'Blocks' => 'docs/page/#create-blocks',
            'Landing Page' => 'docs/landing',
            'Article' => 'docs/article',
            'Media Upload' => 'docs/media'
        ]
    ],
    'Resources' => [
        'children' => [
            'Important Links' => 'docs/resources',
            'Collaborators' => 'docs/collaborators',
            'License' => 'docs/license',
        ]
    ]
];
