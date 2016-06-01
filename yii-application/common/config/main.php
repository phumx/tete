<?php
return [
    'name'=>'DEMO',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'd-M-Y',
            'datetimeFormat' => 'd/m/Y H:i:s',
            'timeFormat' => 'H:i:s', ],
    ],
];
