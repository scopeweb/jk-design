<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/jk-design/user/config/plugins/email.yaml',
    'modified' => 1481309755,
    'data' => [
        'enabled' => true,
        'from' => 'youngwebrebels@gmail.com',
        'from_name' => 'YoungWebRebelz',
        'to' => 'stephan@moerman.cc',
        'to_name' => 'stephan',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'youngwebrebels@gmail.com',
                'password' => 'Pandora!5'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
