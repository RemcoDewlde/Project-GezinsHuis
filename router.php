<?php
$request_uri  = explode('?',$_SERVER['REQUEST_URI'],2);

switch ($request_uri[0]){
    case '/':
        require 'views/index.view.php';
        break;

    case '/about':
        require 'views/about.view.php';
        break;

    default:
        header('HTTP/1.1 404 NOT FOUND');
        require 'views/error.view.php';
        break;
}