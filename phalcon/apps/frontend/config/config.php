<?php

return new \Phalcon\Config([
    'dev' => [
        'database' => [
            'adapter'     => 'Mysql',
            'host'        => 'localhost',
            'username'    => 'root',
            'password'    => 'B3l00l459',
            'dbname'      => 'kapeco',
            'charset'     => 'utf8',
        ]
    ],
    'prod' => [
        'database' => [
            'adapter'     => 'Mysql',
            'host'        => 'mysql51-154.perso',
            'username'    => 'bennettekapeco',
            'password'    => 'aZ6cfg8re2',
            'dbname'      => 'bennettekapeco',
            'charset'     => 'utf8',
        ]
    ],    
    'application' => [
        'controllersDir' => __DIR__ . '/../controllers/',
        'modelsDir'      => __DIR__ . '/../models/',
        'viewsDir'       => __DIR__ . '/../views/',
        'pluginsDir'     => __DIR__ . '/../plugins/',
        'libraryDir'     => __DIR__ . '/../library/',
        'cacheDir'       => __DIR__ . '/../cache/',
        'publicDir'      => __DIR__ . '/../../../public/frontend/',
        'rootDir'        => __DIR__ . '/../../../',
        'baseUri'        => '/',
    ]
]);
