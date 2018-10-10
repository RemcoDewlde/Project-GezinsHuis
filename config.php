<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/10/2018
 * Time: 21:11
 */
return [
    'database' => [
        'name' => 'gasthuis',
        'username' => 'root',
        'password' => 'root',
        'connection' => 'mysql:host=localhost:3306',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];