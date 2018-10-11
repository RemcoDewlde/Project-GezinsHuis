<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$app = [];

$app['config'] = require '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = [[
    $frontname = short(($_POST["voorNaam"]));
    $lastname = short(($_POST["achterNaam"]));
    $email = short(($_POST["email"]));
    $password1 = short(($_POST["password"]));
    $password2 = short(($_POST["passwordHerhaling"]));
    $nummer = short(($_POST["nummer"]));
    $geboortedatum = short(($_POST["dob"]));
    $functie = short(($_POST["functie"]));
    $specialiteit = short(($_POST["specialiteit"]));
    $rechten = short(($_POST["rechten"]));
    $reden = long(($_POST["reden"]));
    ]]
    echo $array;
}


function short($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    $data = trim($data);
    return $data;
}
function long($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}