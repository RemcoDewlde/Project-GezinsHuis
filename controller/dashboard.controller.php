<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 07/10/2018
 * Time: 15:02
 */

session_start();
if(!empty($_SESSION)) {






    if(Request::uri() == 'account'){

        require 'views/dashboard/dashboardaccount.view.php';

    }

    elseif (Request::uri() == 'veranderaccount') {


        $email = convert($_POST['email']);
        $mobile = convert($_POST['mobile']);

        $_SESSION['email'] = $email;
        $_SESSION['mobile']= $mobile;


        $user = $app['database']->alterUser($email, $mobile, $_SESSION['id']);

        $_SESSION['email'] = $email;
        $_SESSION['mobile']= $mobile;

        header("Location: /account");
        exit;


    }

    elseif(Request::uri() == 'account/veranderwachtwoord'){

        require 'views/dashboard/dashboardveranderwachtwoord.view.php';

    }

    elseif (Request::uri() == 'account/nieuwwachtwoord') {


        $curpassword = convert($_POST['curpassword']);
        $newpassword = convert($_POST['newpassword']);
        $passwordmatch = convert($_POST['passwordmatch']);


        $results = $app['database']->selectDBPassword($_SESSION['id']);


        $ww = implode($results[0]);



        if(password_verify($curpassword, $ww)) {
            if($newpassword == $passwordmatch){
                if($newpassword != $curpassword) {

                    $password = password_hash($newpassword, PASSWORD_DEFAULT);

                    $app['database']->changePassword($password, $_SESSION['id']);

                    header("Location: /account");
                    exit;
                }
                else{
                    echo "het nieuwe wachtwoord is hetzelfde als het oude wachtwoord";
                }
            }
            else{
                echo "de wachtwoorden zijn niet gelijk";
            }

        }
        else{
            echo "het huidige wachtwoord klopt niet";
        }

    }




    else{
        $results = $app['database']->selectEvents();
        require 'views/dashboard/dashboard.view.php';
    }





}
else{
    header('Location: /login');
}

function convert($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}