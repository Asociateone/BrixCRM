<?php

namespace App;

use App\Databases\MySQL;

class Person
{
    public function newPerson(string $firstname, string $lastname,)
    {
        $id = gmdate('YmdHis') . rand(0, 1000);

        $sql = "INSERT INTO Persons (id, firstname, lastname, actions_blocked)
        VALUES ('$id', '$firstname', '$lastname', '0')";

        return MYSQL::query($sql);
    }
}
