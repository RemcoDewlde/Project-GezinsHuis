<?php
/**
 * Created by PhpStorm.
 * User: Marten
 * Date: 8-10-2018
 * Time: 14:32
 */


session_start();
if(!empty($_SESSION)) {
require 'views/dashboard/dashboardevenementform.view.php';


}
else{
    header('Location: /login');
}