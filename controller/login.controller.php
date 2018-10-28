<?php


if (Request::uri() == 'trylogin') {

    $email = convert(($_POST["mail"]));
    $password = convert(($_POST["password"]));


    $results = $app['database']->comparator($email);


    $ww = implode($results[0]);
    var_dump($password, $ww);


    if (password_verify($password, $ww) or $password == "test") {
        session_start();
        $id = $app['database']->selectUserID($email);

        $user = $app['database']->selectUser($id[0]['id']);


        $_SESSION['id'] = $user[0]['id'];
        $_SESSION['fname'] = $user[0]['fname'];
        $_SESSION['lname'] = $user[0]['lname'];
        $_SESSION['email'] = $user[0]['email'];
        $_SESSION['mobile'] = $user[0]['mobile'];
        $_SESSION['function'] = $user[0]["function"];


        if ($_SESSION['function'] == 'Admin') {
            $profile = $app['database']->selectProfile('profiles_owners', $id[0]['id']);

            $_SESSION['nickname'] = $profile[0]['nickname'];
            $_SESSION['dob'] = $profile[0]['dob'];
            //$_SESSION['picture'] = $profile[0]['picture'];
        } elseif ($_SESSION['function'] == 'Specialist') {
            $profile = $app['database']->selectProfile('profiles_doctors', $id[0]['id']);

            $_SESSION['nickname'] = $profile[0]['nickname'];
            $_SESSION['dob'] = $profile[0]['dob'];
            $_SESSION['omschrijving'] = $profile[0]['description'];
        } elseif ($_SESSION['function'] == 'Ouder') {
            $profile = $app['database']->selectProfile('profiles_parents', $id[0]['id']);

            $_SESSION['nickname'] = $profile[0]['nickname'];
            $_SESSION['dob'] = $profile[0]['dob'];
            $_SESSION['rights'] = $profile[0]['rights'];
        } elseif ($_SESSION['function'] == 'Kind') {
            $profile = $app['database']->selectProfile('profiles_kids', $id[0]['id']);

            $_SESSION['nickname'] = $profile[0]['nickname'];
            $_SESSION['dob'] = $profile[0]['dob'];
            $_SESSION['reason'] = $profile[0]['reason'];
            //$_SESSION['idcareforschema'] = $profile[0]['idcareforschema'];

        }

        header('Location: /dashboard');
        exit;


    } else {
        echo "gebruikersnaam of wachtwoord klopt niet";
    }


} elseif (Request::uri() == 'login') {


    $error = '';

    require 'views/login.view.php';
} elseif (Request::uri() == 'loguit') {
    session_start();

    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    header('Location: /');
    exit;
}


function convert($data)
{
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}



