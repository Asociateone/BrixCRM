<?php

namespace App\Databases;

use Exception;
use mysqli;

class MySQL
{
    public static function open()
    {
        return new mysqli('db', 'user', 'password', 'BrixCrm');
    }

    public static function query($query)
    {
        try {
            $mysql = self::open();

            $mysql->query($query);

            $mysql->close();

            return json_encode('The person is created');
        } catch (Exception $e) {
            echo $e->getMessage();

            return json_encode('There went something wrong');
        }
    }
}
