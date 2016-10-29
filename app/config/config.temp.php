<?php
/**
 * @author: Iulian Gafiu <weblysolutions@gmail.com>
 * Project: Phalcon 3 Micro Skelenton
 * @license: The MIT License (MIT)
 * Copyright (c) 2016 Iulian Gafiu
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */

defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

error_reporting(E_ALL ^ E_NOTICE);


return new \Phalcon\Config([
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => '',
        'password'    => '',
        'dbname'      => '',
        'charset'     => 'utf8',
    ],
    'application' => [
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'libraryDir'     => APP_PATH . '/libraries/',
        'baseUri'        => '//api.local.dev/',
    ]
]);