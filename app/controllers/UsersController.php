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

class UsersController
{

    public function getUsers()
    {
        $users = Users::find();
        foreach ($users as $user)
            {

                $data[] = [
                    'id'    => $user->id,
                    'name'  => $user->full_name,
                    'email' => $user->email
                ];

            }


        $response = new \Phalcon\Http\Response();
        $response->setStatusCode(200, 'Success');
        $response->setHeader('Content-type', 'application/json');
        $response->setContent(json_encode($data));
        $response->send();
    }
}