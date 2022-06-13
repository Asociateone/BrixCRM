<?php

namespace App;

use App\Databases\MySQL;

class Person
{
    public function newPerson(string $firstname, string $lastname,): array
    {
        $id = gmdate('YmdHis') . rand(0, 1000);

        $sql = "INSERT INTO Persons (id, firstname, lastname, actions_blocked)
            VALUES ('$id', '$firstname', '$lastname', '0')";

        return MYSQL::saveQuery($sql);
    }

    public function getPersons(): array
    {
        $sql = "SELECT * FROM Persons";

        $data = MySQL::getQuery($sql);

        if ($data->num_rows > 0) {
            return $data->fetch_all();
        }

        return ['message' => 'No data was found'];
    }

    public function getPerson($id): array
    {
        $sql = "SELECT * FROM Persons WHERE `id` = '$id'";

        $data = MySQL::getQuery($sql);

        if ($data->num_rows > 0) {
            return $data->fetch_all();
        }

        return ['message' => 'no user was found'];
    }
}
