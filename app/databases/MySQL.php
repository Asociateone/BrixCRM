<?php

namespace App\Databases;

use Exception;
use mysqli;

class MySQL
{
    public static function open(): mixed
    {
        return new mysqli('db', 'user', 'password', 'BrixCrm');
    }

    public static function saveQuery($query): mixed
    {
        try {
            $mysql = self::open();

            $mysql->query($query);

            $mysql->close();

            return ['message' => 'The person is created'];
        } catch (Exception $e) {
            echo $e->getMessage();

            return ['message' => 'There went something wrong'];
        }
    }

    public static function getQuery($query): mixed
    {
        try {
            $mysql = self::open();

            $data = $mysql->query($query);

            $mysql->close();

            return $data;
        } catch (Exception $e) {
            echo $e->getMessage();

            return ['message' => 'There went something wrong'];
        }
    }
}
