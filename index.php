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

use Phalcon\Mvc\Micro;
use Phalcon\Di\FactoryDefault;


define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/app');

/**
 * Load config object
 */
$config = include APP_PATH . '/config/config.php';


$di = new FactoryDefault();


/**
 * Load Di services
 */
include APP_PATH . '/config/services.php';


/**
 * Register directories
 */
include APP_PATH . '/config/loader.php';


$app = new Micro($di);

/**
 * Load Phalcon Routes
 */
include APP_PATH . '/config/routes.php';




$app->handle();