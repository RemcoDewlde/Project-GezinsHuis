<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 07/10/2018
 * Time: 14:55
 */
if(Request::uri() == 'bericht'){

    $onderwerp = $_POST['onderwerp'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];
    $datum = date("Y-m-d H:i:s");

var_dump($_POST);
echo $datum;
    $verzenden = $app['database']->insertMessage($email, $onderwerp, $bericht, $datum);

    //header("Location: /contact");
    //exit;
}
else {

    require 'views/contact.view.php';

}