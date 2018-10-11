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

    $result  = $app['database']->comparator($email);
    $querypassword = $result->password;

    if(password_verify($password, $querypassword)){
        echo "Welkom";
    }
    else{
        echo "Invalid";
    }
}

        function convert($data){
            $data = htmlspecialchars($data);
            $data = stripcslashes($data);
            return $data;
        }






