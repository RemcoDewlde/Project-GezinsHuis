<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 16-10-2018
 * Time: 11:21
 */



session_start();
if(!empty($_SESSION)) {
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $date_event = convert($_POST['date_event']);
        $eventname = convert($_POST['eventname']);
        $pictures = convert($_POST['pictures']);
        $description = convert($_POST['description']);

        //        $statusMsg = '';
    //// File upload path
    //        $targetDir = "uploads/";
    //        $pictures = basename($_FILES["pictures"]["name"]);
    //        $targetFilePath = $targetDir . $fileName;
    //        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    //
    //        if(isset($_POST["submit"]) && !empty($_FILES["pictures"]["name"])){
    //            // Allow certain file formats
    //            $allowTypes = array('jpg','png','jpeg','gif','pdf');
    //            if(in_array($fileType, $allowTypes)){
    //                // Upload file to server
    //                if(move_uploaded_file($_FILES["pictures"]["tmp_name"], $targetFilePath)){
    //                    // Insert image file name into database
    //                    $insert = $db->query("INSERT into events (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
    //                    if($insert){
    //
    //                    }else{
    //                        $statusMsg = "File upload failed, please try again.";
    //                    }
    //                }else{
    //                    $statusMsg = "Sorry, there was an error uploading your file.";
    //                }
    //            }else{
    //                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    //            }
    //        }else{
    //            $statusMsg = 'Please select a file to upload.';
    //        }
    //
    //// Display status message
    //        echo $statusMsg;

        $results = $app['database']->insertEvent($date_event, $eventname, $pictures, $description);
        //header('location: /dashboard/evenement');
    }
}
else{
    header('Location: /login');
}

function convert($data){
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}


