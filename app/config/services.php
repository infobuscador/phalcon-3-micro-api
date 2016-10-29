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

use Phalcon\Db\Adapter\Pdo\Mysql;


$di->set("db", function () use ($config)
{
    return new Mysql([
        "adapter"  => $config->database->adapter,
        "host"     => $config->database->host,
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname"   => $config->database->dbname,
        "charset"  => $config->database->charset
    ]);
});
