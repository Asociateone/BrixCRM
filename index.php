<?php

require_once 'vendor/autoload.php';

use App\Person;

$person = new Person();

echo json_encode($person->newPerson($_POST['firstname'], $_POST['lastname']));
