<?php
$request_uri  = explode('?',$_SERVER['REQUEST_URI'],2);

switch ($request_uri[0]){
    case '/':
        require 'views/index.view.php';
        break;

    case '/about':
        require 'views/about.view.php';
        break;

    case '/evenementen':
        require 'views/evenementen.view.php';
        break;

    case '/dashboard':
        require 'views/dashboard/dashboard.view.php';
        break;

    case '/dashboardevenement':
        require 'views/dashboard/dashboardevenement.view.php';
        break;

    case '/dashboardgebruikers':
        require 'views/dashboard/dashboardgebruikers.view.php';
        break;

    default:
        header('HTTP/1.1 404 NOT FOUND');
        require 'views/error.view.php';
        break;
}