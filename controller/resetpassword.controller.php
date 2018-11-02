<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 02/11/2018
 * Time: 12:51
 */
session_start();
if (!empty($_SESSION)) {
    $id = $_POST["id"];
    $password = $_POST["password"];
    $passcheck = $_POST["checkpass"];

    if ($password == $passcheck) {
        // password is gelijk en mag veranderd worden
        $password = password_hash($password, PASSWORD_DEFAULT);
        $app['database']->resetpassword($password, $id);
        header("location:gebruikers");

    } else {
        // password mag niet veranderd worden,
        header("location:gebruikers");
    }
} else {
    header('Location: /login');
}

