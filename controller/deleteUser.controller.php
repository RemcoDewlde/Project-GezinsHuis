<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 26/10/2018
 * Time: 19:41
 */
session_start();
if (!empty($_SESSION)) {
    $result = $app['database']->delete($_POST['id'], 'users');
    header("location:dashboard/gebruikers");
} else {
    header('Location: /login');
}