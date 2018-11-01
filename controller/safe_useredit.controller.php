<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 01/11/2018
 * Time: 15:01
 */
session_start();

if (!empty($_SESSION)) {
    $result = $app['database']->safeuseredit($_POST);
    header("location:gebruikers");
} else {
    header('Location: /login');
}