<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/gravCms/grav-admin/user/themes/big-picture/blueprints.yaml',
    'modified' => 1483788665,
    'data' => [
        'name' => 'Big Picture',
        'description' => 'Grav Theme based on Big Picture HTML theme of html5up.net.',
        'version' => '1.0.3',
        'icon' => 'photo',
        'author' => [
            'name' => 'Hung Tran',
            'email' => 'hungtran@peaceofmindwebsite.com',
            'url' => 'http://www.peaceofmindwebsite.com'
        ],
        'homepage' => 'https://github.com/tranduyhung/grav-theme-big-picture',
        'demo' => 'http://www.peaceofmindwebsite.com/skeletons/bigpicture',
        'keywords' => 'big, picture, theme, modern, fast, responsive, html5, css3, one, single, page',
        'bugs' => 'https://github.com/tranduyhung/grav-theme-big-picture/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'footer_icons' => [
                    'type' => 'list',
                    'label' => 'Footer\'s Icons',
                    'help' => 'Shown on the left side of footer.',
                    'fields' => [
                        '.icon' => [
                            'type' => 'text',
                            'label' => 'Font Awesome\'s Icon',
                            'placeholder' => 'fa-facebook'
                        ],
                        '.link' => [
                            'type' => 'text',
                            'label' => 'Link',
                            'placeholder' => 'https://www.facebook.com/your-page'
                        ]
                    ]
                ],
                'footer_items' => [
                    'type' => 'list',
                    'label' => 'Footer\'s Items',
                    'help' => 'Shown on the right side of footer.',
                    'fields' => [
                        '.item' => [
                            'type' => 'textarea',
                            'label' => 'Text or HTML Code',
                            'placeholder' => 'Text or HTML code'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
