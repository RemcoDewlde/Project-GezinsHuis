<?php

require 'core/Berichten.php';


if(Request::uri() == 'berichtlezen'){
    $id = $_POST['id'];
    $berichten = $app['database']->selectMessage($id);

    require 'views/dashboard/dashboardbericht.view.php';
    exit;
}

$berichten = $app['database']->selectAllMessages('Berichten');

require 'views/dashboard/dashboardberichten.view.php';
