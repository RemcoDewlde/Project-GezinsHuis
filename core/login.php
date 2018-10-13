<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$app = [];

$app['config'] = require '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = convert(($_POST["mail"]));
    $password = convert(($_POST["password"]));


    $app['database'] = new QueryBuilder(
        Connection::make($app['config']['database'])
    );

    $results = $app['database']->comparator($email);
    var_dump($results);

    $ww = $results[]->password;


    if(password_verify($password, $ww)){
        echo "gelukt";
    }
    else{
        echo "niet gelukt";
    }



}


        function convert($data){
            $data = htmlspecialchars($data);
            $data = stripcslashes($data);
            return $data;
        }






