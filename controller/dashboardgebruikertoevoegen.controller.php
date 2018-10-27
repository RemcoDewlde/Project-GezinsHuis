<?php



session_start();
if(!empty($_SESSION)) {

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = convert($_POST['voornaam']);
    $lname = convert($_POST['achternaam']);
    $nickname = convert($_POST['gebruikersnaam']);
    $dob = convert($_POST['datum']);
    $email = convert($_POST['email']);
    $password = convert($_POST['wachtwoord']);
    $passwordRepeat = convert($_POST['wachtwoordHerhaling']);
    $mobile = convert($_POST['nummer']);
    $function = convert($_POST['functieSelecteren']);


    if($password == $passwordRepeat) {

        $password = convertpassword($password);

        $app['database']->insertUser($fname, $lname, $email, $password, $mobile, $function);
        $id = $app['database']->selectUserID($email)[0]['id'];


        if ($function == 'Admin') {

            $app['database']->insertAdmin($id, $nickname, $dob);

        } elseif ($function == 'Specialist') {

            $description = $_POST['omschrijving'];

            $app['database']->insertSpecialist($id, $nickname, $dob, $description);

        } elseif ($function == 'Ouder') {

            $rights = $_POST['rechten'];    //boolean 1 = true 0 = false
            $rights = intval($rights);
            $app['database']->insertParent($id, $nickname, $dob, $rights);

        } elseif ($function == 'Kind') {

            $reason = $_POST['reden'];
            //$document = $_POST['document'];     //inserting document into database?

            $app['database']->insertKid($id, $nickname, $dob, $reason);

        }
        header('Location: /dashboard/gebruikersform');
        exit;

    }


    else{
        echo "Query lukt niet";
    }


}

function convert($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}
function convertpassword($data){
    $data = password_hash($data, PASSWORD_DEFAULT);
    return $data;
}



}
else{
    header('Location: /login');
}
