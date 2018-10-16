<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 16-10-2018
 * Time: 11:21
 */

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $date_event = convert($_POST['date_event']);
    $eventname = convert($_POST['eventname']);
    $pictures = convert($_POST['pictures']);
    $description = convert($_POST['description']);

    $results = $app['database']->insertEvent($date_event, $eventname, $pictures, $description);
}

function convert($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}


