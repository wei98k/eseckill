<?php
return [
    'SERVER_NAME' => "EasySwoole",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT' => 9501,
        'SERVER_TYPE' => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SOCK_TYPE' => SWOOLE_TCP,
        'RUN_MODEL' => SWOOLE_PROCESS,
        'SETTING' => [
            'worker_num' => 1,
            'reload_async' => true,
            'max_wait_time'=>3,
            'log_level' => 0
        ],
        'TASK'=>[
            'workerNum'=>4,
            'maxRunningNum'=>128,
            'timeout'=>15,

        ]
    ],
    'TEMP_DIR' => null,
    'LOG_DIR' => null,
    'MYSQL' => [
        'host'          => 'mysql',
        'port'          => 3306,
        'user'          => 'root',
        'password'      => 'root',
        'database'      => 'eseckill',
        'timeout'       => 5,
        'charset'       => 'utf8mb4',
        'POOL_MAX_NUM'  => 20,
        'POOL_TIME_OUT' => 1
    ],
    'REDIS' => [
        'host'      => 'redis',
        'port'      => '6379',
        'auth'      => '',
        'db'        => null,
        'serialize' => \EasySwoole\Redis\Config\RedisConfig::SERIALIZE_NONE
    ]
];
