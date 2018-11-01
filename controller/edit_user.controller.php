<?php

session_start();

if (!empty($_SESSION)) {
    $result = $app['database']->selectOne('users', $_POST["id"]);
    require 'views/dashboard/dashboardedituser.view.php';
} else {
    header('Location: /login');
}

