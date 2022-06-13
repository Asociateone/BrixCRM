<?php

require_once 'vendor/autoload.php';

use App\Databases\MySQL;

$db = MySQL::open();

$person = "CREATE TABLE Persons (
    id VARCHAR(50) PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    actions_blocked TINYINT(1)
    )";

$subscriptions = "CREATE TABLE Subscriptions (
    id VARCHAR(50) PRIMARY KEY,
    phone_number VARCHAR(30) NOT NULL,
    active BOOLEAN,
    persons_id VARCHAR(50),
    FOREIGN KEY (persons_id) REFERENCES Persons(id)
    )";

$db->query($person);

$db->query($subscriptions);

$db->close();
