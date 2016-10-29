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

/*
 * Api Base Route
 * The “get” method indicates that the
 * associated HTTP method is GET.
 * */
$app->get("/", function ()
{

});

/*
 * Users Route
 * You can load any controller action
 * by passing an array with an instance
 * on the first key and an action on second one
 *
 * */
$app->get("/users", [
    new UsersController(),
    "getUsers"
]);


/*
 * Not Found Route.
 * Uncomment the last line to display
 * the error message.
 * */
$app->notFound(function () use ($app)
{
    $app->response->setStatusCode(
        404, "Not Found"
    )->sendHeaders();
    //echo '<h1>404 Not Found</h1>';
});