<?php

require_once 'vendor/autoload.php';

use App\Person;

$person = new Person();

var_dump($_POST);

return $person->newPerson($_POST['firstname'], $_POST['lastname']);
