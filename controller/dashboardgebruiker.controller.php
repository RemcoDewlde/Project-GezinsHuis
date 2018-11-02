<?php


session_start();
if (!empty($_SESSION)) {

    if (Request::uri() == 'dashboard/gebruiker') {

        a:
        $id = $_GET['id'];

        $user = $app['database']->selectUser($id);

        $id = $user[0]['id'];
        $fname = $user[0]['fname'];
        $lname = $user[0]['lname'];
        $email = $user[0]['email'];
        $mobile = $user[0]['mobile'];
        $function = $user[0]["function"];



        $opmerkingen = $app['database']->selectNotes($id);
        require 'views/dashboard/dashboardgebruiker.view.php';


    } elseif (Request::uri() == 'dashboard/plaatsopmerking') {

        $opmerking = convert($_POST['opmerking']);
        $date = $datum = date("Y-m-d H:i:s");
        $door = $_SESSION['fname'] . " " . $_SESSION['lname'];
        $kindID = $_POST['id'];

        $query = $app['database']->addNote($door, $date, $opmerking, $kindID);

        goto a;
    }


} else {
    header('Location: /login');
}

function convert($data)
{
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}