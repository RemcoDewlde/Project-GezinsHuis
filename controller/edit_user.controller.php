<?php

session_start();

if (!empty($_SESSION)) {
    $result = $app['database']->selectOne('users', $_POST["id"]);
    $users = $app['database']->simpleSelectAll('users');
    require 'views/dashboard/dashboardedituser.view.php';
} else {
    header('Location: /login');
}

