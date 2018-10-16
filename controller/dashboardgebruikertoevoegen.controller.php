<?php

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app = [];

$app['config'] = require '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = convert($_POST['voornaam']);
    $lname = convert($_POST['achtername']);
    $nickname = convert($_POST['gebruikersnaam']);
    $dob = convert($_POST['datum']);
    $email = convert($_POST['email']);
    $password = convert($_POST['wachtwoord']);
    $passwordRepeat = convert($_POST['wachtwoordHerhaling']);
    $mobile = convert($_POST['nummer']);
    $role = convert($_POST['functieSelecteren']);




    $app['database'] = new QueryBuilder(
        Connection::make($app['config']['database']));

    if($password == $passwordRepeat){

        convertpassword($password);

        $results = $app['database']->insert($fname, $lname, $email, $password, $mobile);
        var_dump($results);
    }
    else{
        echo "Query lukt niet";
    }


}

function convert($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}
function convertpassword($data){
    $data = password_hash($data, PASSWORD_DEFAULT);
    return $data;
}

