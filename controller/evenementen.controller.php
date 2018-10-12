<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/10/2018
 * Time: 20:35
 */

$results = $app['database']->simpleSelectAll('events');
var_dump($results);

require 'views/evenementen.view.php';