<?php


session_start();
if(!empty($_SESSION)) {

    if(Request::uri() == 'dashboard/gebruiker'){

        a:

        $kindID = $_POST['id'];


        $opmerkingen = $app['database']->selectNotes($kindID);
        require 'views/dashboard/dashboardgebruiker.view.php';


    }

    elseif(Request::uri() == 'dashboard/plaatsopmerking'){

        $opmerking = convert($_POST['opmerking']);
        $date = $datum = date("Y-m-d H:i:s");
        $door = $_SESSION['fname'] . " " . $_SESSION['lname'];
        $kindID = $_POST['id'];

        $query = $app['database']->addNote($door, $date, $opmerking, $kindID);

        goto a;
    }



}
else{
    header('Location: /login');
}

function convert($data)
{
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}