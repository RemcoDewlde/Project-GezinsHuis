<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 07/10/2018
 * Time: 15:20
 */


session_start();
if(!empty($_SESSION)) {





        require 'core/Events.php';
    $results = $app['database']->selectEvents();


        require 'views/dashboard/dashboardevenement.view.php';



}
    else {
        header('Location: /login');
    }
