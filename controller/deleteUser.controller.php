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

    $array = $app['database']->selectOne('users', $_POST['id']);
    $function = $array[0]['function'];

    if($function == 'Admin'){
        $result = $app['database']->delete($_POST['id'], 'profiles_owners');
    }
    elseif($function == 'Ouder'){
        $result = $app['database']->delete($_POST['id'], 'profiles_parents');
    }
    elseif($function == 'Specialist'){
        $result = $app['database']->delete($_POST['id'], 'profiles_doctors');
    }
    elseif($function == 'Kind'){
        $result = $app['database']->delete($_POST['id'], 'profiles_kids');
    }

   header("location: ../dashboard/gebruikers");
} else {
    header('Location: /login');
}