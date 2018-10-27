<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 17-10-2018
 * Time: 21:31
 */



session_start();
if(!empty($_SESSION)) {
$results = $app['database']->deleteEvent($_POST['id']);
header('location: /dashboard/evenement');


}
else{
    header('Location: /login');
}