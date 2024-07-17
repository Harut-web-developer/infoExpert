<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'dsfbhdfjkv',
            'baseUrl'=> '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => false,
//            'class' => 'yii\swiftmailer\Mailer',
//            'transport' => [
//                'class' => 'Swift_SmtpTransport',
//                'host' => 'smtp.gmail.com',  // SMTP server address
//                'username' => 'user2002mm@gmail.com',  // SMTP username
//                'password' => 'user2002_mm@gmail.com',  // SMTP password
//                'port' => '587',  // SMTP port (usually 587 for TLS/STARTTLS)
//                'encryption' => 'tls',  // Encryption method (tls or ssl)
//            ],
//            // Enable debugging
//            'streamOptions' => [
//                'ssl' => [
//                    'allow_self_signed' => true,
//                    'verify_peer' => false,
//                    'verify_peer_name' => false,
//                ],
//            ],
        ],
//        'mailer' => [
////            'class' => \yii\symfonymailer\Mailer::class,
//            'class' => 'yii\swiftmailer\Mailer',
//            'viewPath' => '@app/mail',
//            'useFileTransport' => false, // Set to false to send emails instead of saving to file
//            'transport' => [
//                'class' => 'Swift_SmtpTransport',
//                'host' => 'smtp.sendgrid.net',
//                'username' => 'user2002mm@gmail.com',
//                'password' => 'user2002_mm@gmail.com',
//                'port' => '587',
//                'encryption' => 'tls',
//            ],
//            'streamOptions' => [
//                'ssl' => [
//                    'allow_self_signed' => true,
//                    'verify_peer' => false,
//                    'verify_peer_name' => false,
//                ],
//            ],
//        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller>/<action:\w+>' => '<controller>/<action>',
                'lessons/lesson/<url:\w+>' => 'lessons/lesson',
                '/login' => '/site/login',
                '/' => '/site/index',
                '/logout' => '/site/logout',
                '/signup' => '/site/sign-up',
                '/faq' => '/site/faq',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = [
//        'class' => 'yii\debug\Module',
//        // uncomment the following to add your IP if you are not connecting from localhost.
//        //'allowedIPs' => ['127.0.0.1', '::1'],
//    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
