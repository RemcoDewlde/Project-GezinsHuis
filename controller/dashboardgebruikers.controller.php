<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/10/2018
 * Time: 21:06
 */

require 'core/Users.php';

$results = $app['database']->selectAll('users', 'Users');

require 'views/dashboard/dashboardgebruikers.view.php';