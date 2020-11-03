<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'clockpuncher',
    'basePath' => dirname(__DIR__),
    'timeZone'     => 'America/Sao_Paulo',
    'bootstrap' => ['log'],
    'language' => 'pt-BR',
    'defaultRoute' => 'application/site/index',  //This will be the index or main page
    //'homeUrl' => 'application/site/index',
    'modules'      => [
        'admin'        => [ 'class' => 'app\modules\admin\Admin'],
        'application'  => [ 'class' => 'app\modules\application\Application'],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '7hJRq6xNA5q_7C0n3ZFhb6V5hzr-Ef_Z',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\application\models\User', //'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'application/site/error', //'site/error',
        ],
        'defaultUrl' => '',
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                //''                                     => 'application/site/index',
                //'login'                                => 'application/site/login',
                //'logout'                                => 'application/site/logout',
                //'signup'                               => 'application/site/signup',   
                //'request-password-reset'               => 'application/site/request-password-reset',   
                //'reset-password'                       => 'application/site/reset-password',
                '<action>' => 'application/site/<action>',
                '<controller:RecuperarSenha>/<action:\w+>'=>'recuperar-senha/<action>',
                '<controller:SolicitarRecuperacaoSenha>/<action:\w+>'=>'solicitar-recuperacao-senha/<action>',
                '<controller:NovoFuncionario>/<action:\w+>'=>'novo-funcionario/<action>',
                /*
                '<module:(admin|application)>/<controller:(\w|-)+>' => '<module>/<controller>/index',
                '<module:(admin|application)>/<controller:(\w|-)+>/<id:\d+>' => '<module>/<controller>/index',
                '<module:(admin|application)>/<controller:(\w|-)+>/<action:(\w|-)+>' => '<module>/<controller>/<action>',
                '<module:(admin|application)>/<controller:(\w|-)+>/<action:(\w|-)+>/<id:\w+>' => '<module>/<controller>/<action>',
                '<module:(admin|application)>/<controller:(\w|-)+>/<action:(\w|-)+>/<id:\w+>/<did:(\w|-)+>' => '<module>/<controller>/<action>',

                '<controller:(\w|-)+>'                                     => 'application/<controller>/index',
                '<controller:(\w|-)+>/<action:(\w|-)+>'                    => 'application/<controller>/<action>',
                '<controller:(\w|-)+>/<action:(\w|-)+>/<id:\w+>'           => 'application/<controller>/<action>',
                '<controller:(\w|-)+>/<action:(\w|-)+>/<id:\w+>/<did:\w+>' => 'application/<controller>/<action>',
                */
            ]
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'viewPath'  => '@app/mail',
            'transport' => [

                'class'      => 'Swift_SmtpTransport',
                'host'       => 'smtp.gmail.com', // e.g. smtp.mandrillapp.com or smtp.gmail.com
                //'username'   => 'leads.rowan@gmail.com',
                //'username'   => 'rowan.lead@gmail.com',
                //'password'   => 'rowanmkt360',
                'username'   => 'rogeriobsoares5@gmail.com',
                'password'   => '123147poi',
                'port'       => '587', // Port 25 is a very common port too
                'encryption' => 'tls', // It is often used, check your provider or mail server specs
            ],
            //'useFileTransport' => true,
            //Issues about sending emails, read this: https://github.com/yiisoft/yii2/issues/15359
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        
 
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset', 
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
