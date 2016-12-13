<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/config/plugins/email.yaml',
    'modified' => 1481292597,
    'data' => [
        'enabled' => true,
        'from' => 'noreply@blu3monkey.com',
        'from_name' => 'JK-design.me',
        'to' => 'stephan@moerman.cc',
        'to_name' => 'test',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.zoho.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'beheerder',
                'password' => 'Pandora!5'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
