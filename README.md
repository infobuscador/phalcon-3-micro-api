# Phalcon 3 API skeleton
An API skeleton built with Phalcon 3.0.0 (LST) that works with controllers. It is recommended to upgrade your PHP installation to 5.6. because in Phalcon 3.0.0 the support for PHP 5.4 has been deprecated and in PHP 5.5 some unsafe functions has been also deprecated. 

> :exclamation: Rename **config.temp.php** to **config.php** and remember to change database information

###FileStructure:

* app
    * config
        * config.temp.php
        * loader.php
        * routes.php
        * services.php
    * models
        * Users
    * libraries
* .htaccess
* index.php


###Dependency Injector - services.php
```
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
```
###Loader - loader.php
```
   $loader->registerDirs([
      $config->application->libraryDir,
      $config->application->controllersDir,
      $config->application->modelsDir
   ])->register();
```

###Router - routes.php
```
   // Base Route
   $app->get("/", function () {
   });

   // UsersController Route
   $app->get("/users", [
      new UsersController(),
      "getUsers"
   ]);

   // NotFound Route
   $app->notFound(function () use ($app) {
      $app->response
         ->setStatusCode(404, "Not Found")
         ->sendHeaders();
   });
```

###UsersController
```
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
```
