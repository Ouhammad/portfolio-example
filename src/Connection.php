<?php

namespace App;
use \PDO;

final class Connection{

    private static $_instance;

    public static function getPDO()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new PDO("mysql:host=localhost;dbname=db_portfolio", "root", "Devahuom1!@#$",[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]);
        }
        return self::$_instance;
    }
}