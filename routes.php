<?php
/**
 * GET routes
 */
$router->get('', 'controller/index.controller.php');
$router->get('contact', 'controller/contact.controller.php');
$router->get('about', 'controller/about.controller.php');
$router->get('evenementen', 'controller/evenementen.controller.php');
$router->get('users', 'controllers/users.php');
$router->get('login', 'controller/login.controller.php');
$router->get('wachtwoordvergeten', 'controller/wachtwoordvergeten.controller.php');
$router->get('dashboard', 'controller/dashboard.controller.php');
$router->get('dashboard/gebruikers', 'controller/dashboardgebruikers.controller.php');
$router->get('dashboard/evenement', 'controller/dashboardevenementen.controller.php');
$router->get('dashboard/evenementform', 'controller/dashboardevenementform.controller.php');
$router->get('dashboard/gebruikersform', 'controller/dashboardgebruikersform.controller.php');

/**
 * POST routes
 */
$router->post('/add_player', 'controllers/add_player.php');
