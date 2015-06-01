<?php

return [
    'id' => 'dotplant2-installer',
    'basePath' => dirname(__DIR__),
    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php'),
    'language' => 'en',
    'defaultRoute' => 'installer/index',
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 6 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=dotplant2',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'enableSchemaCache' => false,
        ],
        'request' => [
            'cookieValidationKey' => 'INSTALLER_COOKIE',
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'linkAssets' => true,
        ],
    ],
    'params' => [
        'icon-framework' => 'fa',
    ],
];