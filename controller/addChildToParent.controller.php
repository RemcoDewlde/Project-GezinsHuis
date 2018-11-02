<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 02/11/2018
 * Time: 17:49
 */


$childID = $_POST['kind'];
$userID = $_POST['id'];
$Functie = $_POST['function'];
$app['database']->pairUsers($userID, $childID, $Functie);

