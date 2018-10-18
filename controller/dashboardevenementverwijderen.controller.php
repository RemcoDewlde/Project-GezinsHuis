<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 17-10-2018
 * Time: 21:31
 */

$results = $app['database']->deleteEvent($id);
header('location: /dashboard/evenement');