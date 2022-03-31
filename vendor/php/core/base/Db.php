<?php

namespace php\base;

use php\TSingletone;

class Db

{
    use TSingletone;
    protected function __construct(){
        $db = require_once CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R','\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if( !\R::testConnection() ){
            throw new \Exception("Нет соединения с БД", 500);
        }

    }



}