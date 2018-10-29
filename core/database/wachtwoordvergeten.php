<?php
/**
 * Created by PhpStorm.
 * User: Marten
 * Date: 9-10-2018
 * Time: 19:23
 */


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $naar = varmail(($_POST["mail"]));
    $bericht = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<h2>Wachtwoord veranderen</h2>

<p>Door de <a href=''>link</a> te volgen kan je je wachtwoord veranderen</p>
</body>
</html>
";

    $onderwerp = "Wachtwoord veranderen";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";

}

    function varmail($data){
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);
        return $data;
    }
mail($naar, $onderwerp, $bericht, $headers);
//todo waarom staat de wachtwoordvergeten functie in de database map???