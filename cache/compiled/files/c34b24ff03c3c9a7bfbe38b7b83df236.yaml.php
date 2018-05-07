<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/config/plugins/email.yaml',
    'modified' => 1517662149,
    'data' => [
        'enabled' => true,
        'from' => 'info@rodekaterproducties.nl',
        'from_name' => 'Bram van Dam',
        'to' => 'info@rodekaterproducties.nl',
        'to_name' => 'Grav',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp01.hostcontrol.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'rodekaterpro02@rodekaterproducties.nl',
                'password' => 'Broer2012!'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
