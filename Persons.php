<?php

require_once 'vendor/autoload.php';

use App\Person;

$person = new Person();

echo json_encode($person->getPerson($_POST['person_id']));
