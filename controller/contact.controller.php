<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 07/10/2018
 * Time: 14:55
 */
if(Request::uri() == 'bericht'){

    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];
    $datum = date("Y-m-d H:i:s");

    $verzenden = $app['database']->insertMessage($naam, $email, $bericht, $datum);

    header("Location: /contact");
    exit;
}
else {

    require 'views/contact.view.php';

}