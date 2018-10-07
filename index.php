<?php

/**
 * Setup your app
 * @bootstrap.php file to initialize database
 * @Request::uri get the uri
 * */
$query = require 'core/bootstrap.php';
$current = Request::uri();


/**
 * Where are you in your page and where do you go with the
 * routes and controllers
 *
 * @routes.php routes to different endpoints
 * @Request::uri get the uri
 * @Request::method POST or GET?
 */
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

