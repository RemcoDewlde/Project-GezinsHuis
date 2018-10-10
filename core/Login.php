<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$app = [];

$app['config'] = require '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = varmail(($_POST["mail"]));
    $password = varpassword(($_POST["password"]));

    $app['database'] = new QueryBuilder(
        Connection::make($app['config']['database'])
    );

    $results = $app['database']->comparator( $email, $password);


}


        function varmail($data){
            $data = htmlspecialchars($data);
            $data = stripcslashes($data);
            return $data;
        }

        function varpassword($data){
            $data = htmlspecialchars($data);
            $data = password_hash($data, PASSWORD_DEFAULT);
            $data = stripcslashes($data);
            return $data;
        }




