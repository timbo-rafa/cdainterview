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
    // MailGun
    'email' => [
		'transport' => [
			'type' => 'smtp',
			'port' => getenv('MAILGUN_SMTP_PORT'),
			'security' => 'tls',
			'host' => getenv('MAILGUN_SMTP_SERVER'), #'smtp.mailgun.org',
			'auth' => true,
			'username' => getenv('MAILGUN_SMTP_LOGIN'),
			'password' => getenv('MAILGUN_SMTP_PASSWORD'),
        ]
    ]
    // Gmail SMTP
    // 'email' => [
    //     'transport' => [
    //       'type' => 'smtp',
    //       'host' => 'smtp.gmail.com',
    //       'port' => 587,
    //       'security' => true,
    //       'auth' => true,
    //       'username' => 'timbo.software+kirby.cdainterview@gmail.com',
    //       'password' => 'tdtihvichqjhzdsr', #getenv('GMAIL_SMTP_PASSWORD'),
    //     ]
    // ]
];
