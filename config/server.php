<?php

declare(strict_types=1);

return [
    'admin' =>  [
        //  host
        'host'      =>  '0.0.0.0',
        //  port
        'port'      =>  9501,
        //
        'mode'      =>  SWOOLE_BASE,
        'sock_type' =>  SWOOLE_SOCK_TCP,
    ],
    'index' =>  [
        //  host
        'host'      =>  '0.0.0.0',
        //  port
        'port'      =>  9502,
        //
        'mode'      =>  SWOOLE_BASE,
        'sock_type' =>  SWOOLE_SOCK_TCP,
    ],
];