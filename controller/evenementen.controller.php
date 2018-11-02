<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/10/2018
 * Time: 20:35
 */
$results = $app['database']->selectEvents();


require 'views/evenementen.view.php';