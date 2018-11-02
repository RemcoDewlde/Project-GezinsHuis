<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 02/11/2018
 * Time: 17:49
 */

$KindID = $_POST['kind'];
$UserID = $_POST['id'];
$Functie = $_POST['function'];
$app['database']->pairUsers($userID, $childID, $Functie);