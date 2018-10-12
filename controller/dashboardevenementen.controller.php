<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 07/10/2018
 * Time: 15:20
 */
require 'core/Events.php';

$results = $app['database']->selectAll('events','Events');

require 'views/dashboard/dashboardevenement.view.php';