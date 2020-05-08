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
    ],
];
