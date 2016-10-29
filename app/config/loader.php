<?php

/**
 * @author: Iulian Gafiu <weblysolutions@gmail.com>
 * Project: Phalcon 3 API Skelenton
 * @license: The MIT License (MIT)
 * Copyright (c) 2016 Iulian Gafiu
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */

use Phalcon\Loader;

$loader = new Loader();

$loader->registerDirs([
    $config->application->libraryDir,
    $config->application->controllersDir,
    $config->application->modelsDir

])->register();