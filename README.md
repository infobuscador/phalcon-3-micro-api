# Phalcon 3 API skeleton
An API skeleton built with Phalcon 3.0.0 (LST) that works with controllers. It is recommended to upgrade your PHP installation to 5.6. because in Phalcon 3.0.0 the support for PHP 5.4 has been deprecated and in PHP 5.5 some unsafe functions has been also deprecated. 

###FileStructure:

* app
    * config
        * config.php
        * loader.php
        * routes.php
        * services.php
    * models
        * Users
    * libraries
* .htaccess
* index.php


###Dependency Injector - Services.php
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
