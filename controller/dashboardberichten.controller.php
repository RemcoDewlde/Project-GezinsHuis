<?php



session_start();
if(!empty($_SESSION)) {
    require 'core/Berichten.php';


    if(Request::uri() == 'berichtlezen'){
        $id = $_GET['id'];

        $app['database']->read($id);

        $berichten = $app['database']->selectMessage($id);

        require 'views/dashboard/dashboardbericht.view.php';
        exit;
    }
    elseif(Request::uri() == 'nieuwbericht'){

        require 'core/Users.php';

        $selection = $app['database']->selectAll('users', 'Users');
        require 'views/dashboard/dashboardberichten.view.php';

    }
    elseif(Request::uri() == 'verstuur'){
        $email = $_SESSION['email'];
        $onderwerp = $_POST['onderwerp'];
        $bericht = $_POST['bericht'];
        $datum = date("Y-m-d H:i:s");

        $aan = $_POST['naam'];

        $query = $app['database']->selectUserID($aan);

        $voorID = $query[0]['id'];



        $verzenden = $app['database']->insertDashboardMessage($email, $onderwerp, $bericht, $datum, $voorID);

        header("Location: /nieuwbericht");
        exit;
    }
    else {
        $berichten = $app['database']->selectAllMessages('Berichten', $_SESSION['id']);

        if($_SESSION['function'] == 'Admin'){
            $Adminberichten = $app['database']->selectAdminMessages();
        }

        require 'views/dashboard/dashboardberichten.view.php';
    }

}
else{
    header('Location: /login');
}

