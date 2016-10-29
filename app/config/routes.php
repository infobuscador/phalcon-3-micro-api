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

// Base Route
$app->get("/", function ()
{

});

$app->get("/users", [
    new UsersController(),
    "getUsers"
]);

$app->get("/apps", function(){

    echo $this->test;

});


$app->notFound(function () use ($app)
{
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo '<h1>404 Not Found</h1>';
});