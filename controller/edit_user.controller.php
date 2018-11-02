<?php

session_start();

if (!empty($_SESSION)) {
    $id = $_POST["id"];
    $result = $app['database']->selectOne('users', $id);
    $users = $app['database']->simpleSelectAll('users');
    $children = $app['database']->selectChildren();

    $function = $result[0]['function'];



    if ($function == 'Admin') {
        $profile = $app['database']->selectProfile('profiles_owners', $id);

        $nickname = $profile[0]['nickname'];
        $dob = $profile[0]['dob'];
        //$_SESSION['picture'] = $profile[0]['picture'];

    } elseif ($function == 'Specialist') {
        $profile = $app['database']->selectProfile('profiles_doctors', $id);

        $nickname = $profile[0]['nickname'];
        $dob = $profile[0]['dob'];
        $omschrijving = $profile[0]['description'];

    } elseif ($function == 'Ouder') {
        $profile = $app['database']->selectProfile('profiles_parents', $id);

        $nickname = $profile[0]['nickname'];
        $dob = $profile[0]['dob'];
        $rights = $profile[0]['rights'];

    } elseif ($function == 'Kind') {
        $profile = $app['database']->selectProfile('profiles_kids', $id);

        $nickname = $profile[0]['nickname'];
        $dob = $profile[0]['dob'];
        $reason = $profile[0]['reason'];

        //$_SESSION['idcareforschema'] = $profile[0]['idcareforschema'];
    }


    require 'views/dashboard/dashboardedituser.view.php';
} else {
    header('Location: /login');
}

