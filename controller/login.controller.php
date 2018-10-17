<?php





if(Request::uri() == 'trylogin') {

    $email = convert(($_POST["mail"]));
    $password = convert(($_POST["password"]));


    $app['database'] = new QueryBuilder(
        Connection::make($app['config']['database'])
    );

    $results = $app['database']->comparator($email);


    $ww = implode($results[0]);



    if(password_verify($password, $ww)){
        header("Location: /dashboard");
        exit;
    }
    else{
        echo "gebruikersnaam of wachtwoord werkt niet";
    }



}


function convert($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}






$error = '';

require 'views/login.view.php';