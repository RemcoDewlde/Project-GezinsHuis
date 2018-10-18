<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 17-10-2018
 * Time: 21:31
 */

$results = $app['database']->deleteEvent($_POST['id']);
header('location: /dashboard/evenement');