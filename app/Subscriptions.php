<?php

namespace App;

use App\Databases\MySQL;

class Subscriptions
{
    public function newSubscriptions($id, $phone_number, $personId): array
    {
        $id = gmdate('YmdHis') . rand(0, 1000);

        $sql = "INSERT INTO Subscriptions (id, phone_nummber, active, person_id)
            VALUES ('$id', '$phone_number', '0', '$personId')";

        return MYSQL::saveQuery($sql);
    }
}
