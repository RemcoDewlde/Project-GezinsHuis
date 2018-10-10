<?php

require 'D:\Windesheim\Projecten\PHP\Project-GezinsHuis\core\database\Connection.php';
require 'D:\Windesheim\Projecten\PHP\Project-GezinsHuis\core\database\QueryBuilder.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = varmail(($_POST["mail"]));
    $password = varpassword(($_POST["password"]));

    $query = new QueryBuilder("$pdo");
    $query->comparator("$email", "$password");

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




