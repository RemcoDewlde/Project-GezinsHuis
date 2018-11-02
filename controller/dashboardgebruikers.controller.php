<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/10/2018
 * Time: 21:06
 */


session_start();
if(!empty($_SESSION)) {

    if (Request::uri() == 'dashboard/gebruikers') {

        require 'core/Users.php';
        if ($_SESSION['function'] == 'Specialist' OR $_SESSION == 'Ouder') {
            $userid = $_SESSION['id'];
            $ids = $app['database']->selectPairedChild($userid);
            foreach ($ids as $id) {
                foreach ($id as $key => $value)
                    $array[] = "$value";
            }

            $childids = implode(', ', $array);


            $results = $app['database']->selectUsers($childids);
            require 'views/dashboard/dashboardgebruikers.view.php';
        } else {
            $results = $app['database']->selectAll('users', 'Users');
            require 'views/dashboard/dashboardgebruikers.view.php';
        }
    }

}
else{
    header('Location: /login');
}
