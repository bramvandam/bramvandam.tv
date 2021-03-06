<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/blueprints.yaml',
    'modified' => 1454081133,
    'data' => [
        'name' => 'Bram van Dam',
        'version' => '0.1.0',
        'description' => 'Dit thema is handgemaakt voor en door Bram van Dam',
        'icon' => 'empire',
        'author' => [
            'name' => 'Bram van Dam',
            'email' => 'b.vandam@rodekaterproducties.nl',
            'url' => 'http://bramvandam.net'
        ],
        'homepage' => 'http://bramvandam.net',
        'demo' => NULL,
        'keywords' => 'theme, modern, fast, responsive, html5, css3',
        'bugs' => NULL,
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Default lang',
                    'default' => 'en',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
