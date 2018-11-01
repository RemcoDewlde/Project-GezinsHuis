<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 16-10-2018
 * Time: 17:20
 */

session_start();
if(!empty($_SESSION)) {

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $date_event = convert($_POST['date_event']);
    $eventname = convert($_POST['eventname']);
    $pictures = convert($_POST['pictures']);
    $description = convert($_POST['description']);

    $results = $app['database']->updateEvent($_POST);
    header('location: /dashboard/evenement');
}
elseif($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $results = $app['database']->selectOne('events', $id);
    require 'views/components/dashboard/dashboardforms/dashboardevenementenformedit.component.php';
}


function convert($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}

}
else{
    header('Location: /login');
}