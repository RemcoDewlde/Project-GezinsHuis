<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/10/2018
 * Time: 21:06
 */
require 'core/Connection.php';
require 'core/QueryBuilder.php';
$app['config'] = require 'config.php';

// maak hier database connectie en haal de gebruikers op.

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
echo QueryBuilder::selectAll('users','user');




require 'views/dashboard/dashboardgebruikers.view.php';