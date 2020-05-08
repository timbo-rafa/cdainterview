<?php

return [
    'debug' => false,
    'routes' => [
        [
            'pattern' => 'logout',
            'action'  => function() {
                
                if ($user = kirby()->user()) {
                    $user->logout();
                }

                go('login');
            }
        ]
    ],
    'panel' => [
        'install' => true
    ],
    'email' => [
        'transport' => [
          'type' => 'smtp',
          'host' => 'smtp.gmail.com',
          'port' => 587,
          'security' => true,
          'auth' => true,
          'username' => 'timbo.software+kirby.cdainterview@gmail.com',
          'password' => 'tdtihvichqjhzdsr', #getenv('GMAIL_SMTP_PASSWORD'),
        ]
    ]
];
