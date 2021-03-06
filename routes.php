<?php
/**
 * GET routes
 */
//<editor-fold desc="GET request">

$router->get('', 'controller/index.controller.php');
$router->get('contact', 'controller/contact.controller.php');
$router->get('about', 'controller/about.controller.php');
$router->get('evenementen', 'controller/evenementen.controller.php');
$router->get('users', 'controllers/users.php');
$router->get('login', 'controller/login.controller.php');
$router->get('loguit', 'controller/login.controller.php');
$router->get('account', 'controller/dashboard.controller.php');
$router->get('errorview', 'controller/errorview.controller.php');
$router->get('account/veranderwachtwoord', 'controller/dashboard.controller.php');

$router->get('wachtwoordvergeten', 'controller/wachtwoordvergeten.controller.php');
$router->get('dashboard', 'controller/dashboard.controller.php');
$router->get('dashboard/gebruikers', 'controller/dashboardgebruikers.controller.php');
$router->get('dashboard/evenementen', 'controller/dashboardevenementen.controller.php');
$router->get('dashboard/berichten', 'controller/dashboardberichten.controller.php');
$router->get('dashboard/evenementform', 'controller/dashboardevenementform.controller.php');
$router->get('dashboard/gebruikersform', 'controller/dashboardgebruikersform.controller.php');
$router->get('dashboard/commentaarform', 'controller/dashboardcommentaarform.controller.php');
$router->get('dashboard/event_bewerken', 'controller/dashboardevenementbewerken.controller.php');

$router->get('dashboard/evenement', 'controller/dashboardevenementen.controller.php');


$router->get('dashboard/gebruiker', 'controller/dashboardgebruiker.controller.php');
$router->get('berichtlezen', 'controller/dashboardberichten.controller.php');


$router->get('nieuwbericht', 'controller/dashboardberichten.controller.php');


//</editor-fold>
/**
 * POST routes
 */

//<editor-fold desc="POST request">


$router->post('gebruiker_toevoegen', 'controller/dashboardgebruikertoevoegen.controller.php');
$router->post('dashboard/delete_user', 'controller/deleteUser.controller.php');
$router->post('dashboard/event_toevoegen', 'controller/dashboardevenementtoevoegen.controller.php');
$router->post('trylogin', 'controller/login.controller.php');
$router->post('bericht', 'controller/contact.controller.php');

$router->post('verstuur', 'controller/dashboardberichten.controller.php');
//$router->post('berichtlezen', 'controller/dashboardberichten.controller.php');
$router->post('dashboard/event_bewerken', 'controller/dashboardevenementbewerken.controller.php');
$router->post('dashboard/event_verwijderen', 'controller/dashboardevenementverwijderen.controller.php');

$router->post('account/nieuwwachtwoord', 'controller/dashboard.controller.php');
$router->post('veranderaccount', 'controller/dashboard.controller.php');
$router->post('dashboard/addChildToParent', 'controller/addChildToParent.controller.php');
$router->post('dashboard/addDoctorToChild', 'controller/addDoctorToChild.controller.php');

$router->post('berichtverwijderen', 'controller/dashboardberichten.controller.php');

$router->post('dashboard/plaatsopmerking', 'controller/dashboardgebruiker.controller.php');
$router->post('dashboard/edit_user', 'controller/edit_user.controller.php');
$router->post('dashboard/safe_useredit', 'controller/safe_useredit.controller.php');
$router->post('dashboard/resetpassword', 'controller/resetpassword.controller.php');


//$router->post('dashboard/gebruiker', 'controller/dashboardgebruiker.controller.php');

//</editor-fold>