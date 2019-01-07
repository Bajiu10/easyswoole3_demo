<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2019-01-01
 * Time: 20:06
 */

return [
    'SERVER_NAME'=>"EasySwoole",
    'MAIN_SERVER'=>[
        'LISTEN_ADDRESS'=>'0.0.0.0',
        'PORT'=>9501,
        'SERVER_TYPE'=>EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER
        'SOCK_TYPE'=>SWOOLE_TCP,
        'RUN_MODEL'=>SWOOLE_PROCESS,
        'SETTING'=>[
            'worker_num'=>8,
            'max_request'=>5000,
            'task_worker_num'=>8,
            'task_max_request'=>1000
        ]
    ],
    'TEMP_DIR'=>null,
    'LOG_DIR'=>null,
    'CONSOLE'=>[
        'ENABLE'=>true,
        'LISTEN_ADDRESS'=>'127.0.0.1',
        'HOST'=>'127.0.0.1',
        'PORT'=>9500,
        'EXPIRE'=>'120',
        'AUTH'=>null,
        'PUSH_LOG'=>true
    ],

    'MYSQL' => [
        'host' => '192.168.75.1',
        'port' => 3306,
        'user' => 'root',
        'password' => 'root',
        'database' => 'cry',
        'timeout' => 5,
        'charset' => 'utf8mb4',
        'POOL_MAX_NUM' => 10,
        'POOL_TIME_OUT' => 0.1
    ],

    'REDIS' => [
        'host' => '127.0.0.1',
        'port' => 6379,
        'password' => '',
        'POOL_MAX_NUM' => 10
    ]
];
